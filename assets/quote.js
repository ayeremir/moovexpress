// ── WIDGET DEVIS — MoovExpress ──
// Remplace WEB3FORMS_KEY par ta clé sur web3forms.com
const WEB3FORMS_KEY = 'bbad4b7a-6052-4c11-a76b-59673cff358f';

let map = null, rl = null, mF = null, mT = null;
let fC = null, tC = null, dKm = null, dDur = null, dbt = {};
const BASE = 8, PKM = 1.5;

function initDevisMap() {
  if (map) return;
  map = L.map('map-d', {zoomControl: false}).setView([48.8566, 2.3522], 12);
  L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
    attribution: '© CARTO'
  }).addTo(map);
}

function geo(q, cb) {
  fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(q)}&limit=5&countrycodes=fr`)
    .then(r => r.json()).then(cb).catch(() => cb([]));
}

function setupAddr(inId, sugId, setter) {
  const inp = document.getElementById(inId);
  const box = document.getElementById(sugId);
  if (!inp || !box) return;
  inp.addEventListener('input', () => {
    clearTimeout(dbt[inId]);
    const v = inp.value.trim();
    if (v.length < 3) { box.innerHTML = ''; box.classList.remove('on'); return; }
    dbt[inId] = setTimeout(() => {
      geo(v, res => {
        box.innerHTML = '';
        if (!res.length) { box.classList.remove('on'); return; }
        res.forEach(r => {
          const d = document.createElement('div');
          d.className = 'si';
          d.textContent = r.display_name;
          d.onclick = () => {
            inp.value = r.display_name;
            setter([+r.lat, +r.lon]);
            box.innerHTML = ''; box.classList.remove('on');
            calcRoute();
          };
          box.appendChild(d);
        });
        box.classList.add('on');
      });
    }, 350);
  });
  document.addEventListener('click', e => {
    if (!inp.contains(e.target) && !box.contains(e.target)) box.classList.remove('on');
  });
}

function calcRoute() {
  if (!fC || !tC) return;
  const mapEl = document.getElementById('map-d');
  if (mapEl) mapEl.style.display = 'block';
  initDevisMap();
  fetch(`https://router.project-osrm.org/route/v1/driving/${fC[1]},${fC[0]};${tC[1]},${tC[0]}?overview=full&geometries=geojson`)
    .then(r => r.json()).then(data => {
      if (!data.routes?.[0]) return;
      dKm = data.routes[0].distance / 1000;
      dDur = Math.round(data.routes[0].duration / 60);
      const dur = dDur;
      filterUrgences();
      const coords = data.routes[0].geometry.coordinates.map(c => [c[1], c[0]]);
      if (rl) map.removeLayer(rl);
      if (mF) map.removeLayer(mF);
      if (mT) map.removeLayer(mT);
      rl = L.polyline(coords, {color: '#d4ff00', weight: 3, opacity: .9}).addTo(map);
      const mk = col => L.divIcon({
        className: '',
        html: `<div style="width:12px;height:12px;border-radius:50%;background:${col};border:2px solid #080808;box-shadow:0 0 10px ${col}66"></div>`,
        iconAnchor: [6, 6]
      });
      mF = L.marker(fC, {icon: mk('#4ade80')}).addTo(map);
      mT = L.marker(tC, {icon: mk('#d4ff00')}).addTo(map);
      map.fitBounds(rl.getBounds(), {padding: [20, 20]});
      const distEl = document.getElementById('pbd');
      const durTxt = dur >= 60
        ? `${Math.floor(dur/60)}h${dur%60 > 0 ? String(dur%60).padStart(2,'0') : ''}`
        : `${dur} min`;
      if (distEl) distEl.textContent = `${dKm.toFixed(1)} km — ~${durTxt}`;
      updatePrice();
    });
}

// Seuils : durée max (min) au-delà de laquelle l'urgence n'est plus proposée
const URG_LIMITS = {
  '2.0': 40,   // Immédiat <45min : trajet max 40 min
  '1.4': 50,   // Express 1h : trajet max 50 min
  '1.0': Infinity // Standard : toujours disponible
};

function filterUrgences() {
  const urgEl = document.getElementById('urg');
  if (!urgEl || dDur === null) return;
  let hasChanged = false;
  Array.from(urgEl.options).forEach(o => {
    const limit = URG_LIMITS[o.value] ?? Infinity;
    const impossible = dDur > limit;
    o.disabled = impossible;
    // Libellés clairs
    const labels = { '2.0': 'Immédiat (<45 min)', '1.4': 'Express (1h)', '1.0': 'Standard (2h+)' };
    o.textContent = impossible
      ? `${labels[o.value] || o.textContent} — non disponible pour cette distance`
      : labels[o.value] || o.textContent;
    if (impossible && urgEl.value === o.value) hasChanged = true;
  });
  // Si l'urgence sélectionnée n'est plus dispo, basculer sur la moins urgente disponible
  if (hasChanged) {
    const fallback = Array.from(urgEl.options).reverse().find(o => !o.disabled);
    if (fallback) urgEl.value = fallback.value;
  }
}

function updatePrice() {
  const v = +(document.getElementById('veh')?.value || 1);
  const u = +(document.getElementById('urg')?.value || 1);
  const p = +(document.getElementById('par')?.value || 0);
  const lblEl = document.getElementById('pbl');
  const priceEl = document.getElementById('pbp');
  const htEl = document.getElementById('pbh');
  if (!dKm) {
    if (lblEl) lblEl.textContent = 'Renseignez les adresses';
    if (priceEl) priceEl.textContent = '—';
    if (htEl) htEl.textContent = '';
    return;
  }
  const ht = (BASE + dKm * PKM + p) * v * u;
  const ttc = ht * 1.2;
  if (lblEl) lblEl.textContent = 'Estimation de votre course';
  if (priceEl) priceEl.textContent = `${ttc.toFixed(2)} €`;
  if (htEl) htEl.textContent = `${ht.toFixed(2)} € HT`;
}

async function submitQuote() {
  const name  = document.getElementById('cn')?.value.trim();
  const email = document.getElementById('ce')?.value.trim();
  const phone = document.getElementById('cp')?.value.trim();
  const comment = document.getElementById('cc')?.value.trim();
  const from  = document.getElementById('af')?.value.trim();
  const to    = document.getElementById('at')?.value.trim();
  const msg = document.getElementById('qm');
  const btn = document.querySelector('.bsub') || document.querySelector('.qk-sub');

  function showErr(txt) {
    if (msg) { msg.className = 'qmsg err'; msg.textContent = txt; }
  }

  if (!name || !email || !from || !to) { showErr('Merci de renseigner toutes les informations.'); return; }
  if (document.getElementById('veh')?.value === '1.0' && document.getElementById('par')?.value === '5') {
    showErr('⚠️ Un colis volumineux ne peut pas être transporté en 2 roues. Veuillez choisir un Utilitaire VL.');
    return;
  }
  if (!dKm) { showErr('Sélectionnez les adresses dans les suggestions.'); return; }

  const veh = document.getElementById('veh')?.options[document.getElementById('veh').selectedIndex]?.text;
  const urg = document.getElementById('urg')?.options[document.getElementById('urg').selectedIndex]?.text;
  const par = document.getElementById('par')?.options[document.getElementById('par').selectedIndex]?.text;

  if (btn) { btn.textContent = 'Envoi en cours...'; btn.disabled = true; }

  try {
    const res = await fetch('https://api.web3forms.com/submit', {
      method: 'POST',
      headers: {'Content-Type': 'application/json', 'Accept': 'application/json'},
      body: JSON.stringify({
        access_key: WEB3FORMS_KEY,
        subject: `Devis MoovExpress — ${name}`,
        from_name: name,
        email: email,
        message: `
NOM: ${name}
EMAIL: ${email}
TÉL: ${phone || '—'}

DÉPART: ${from}
ARRIVÉE: ${to}
DISTANCE: ${document.getElementById('pbd')?.textContent}
DATE ENLÈVEMENT: ${document.getElementById('edate')?.value || '—'}
HEURE ENLÈVEMENT: ${document.getElementById('etime')?.value || '—'}

VÉHICULE: ${veh}
URGENCE: ${urg}
COLIS: ${par}

ESTIMATION: ${document.getElementById('pbp')?.textContent} TTC

COMMENTAIRE: ${comment || '—'}
        `.trim()
      })
    });
    const data = await res.json();
    if (data.success) {
      msg.className = 'qmsg ok';
      if (msg) { msg.className = 'qmsg ok'; msg.textContent = '✓ Devis envoyé ! Nous vous recontactons sous 30 minutes.'; }
      if (btn) btn.textContent = 'Devis envoyé ✓';
    } else {
      throw new Error('Échec envoi');
    }
  } catch(e) {
    if (msg) { msg.className = 'qmsg err'; msg.textContent = 'Erreur d\'envoi. Appelez-nous directement au 06 01 20 47 83.'; }
    if (btn) { btn.textContent = 'Demander ce devis →'; btn.disabled = false; }
  }
}

// Init au chargement
document.addEventListener('DOMContentLoaded', () => {
  // Date par défaut = aujourd'hui
  const dateEl = document.getElementById('edate');
  if (dateEl && !dateEl.value) {
    dateEl.value = new Date().toISOString().split('T')[0];
  }

  setupAddr('af', 'sf', c => { fC = c; });
  setupAddr('at', 'st', c => { tC = c; });
  ['veh','urg','par','edate','etime'].forEach(id => {
    document.getElementById(id)?.addEventListener('change', updatePrice);
  });

  // Alerte colis volumineux + scooter
  const vehEl = document.getElementById('veh');
  const parEl = document.getElementById('par');
  const msgEl = document.getElementById('qm');
  function checkColisVeh() {
    if (!parEl || !vehEl) return;
    if (vehEl.value === '1.0' && parEl.value === '5') {
      if (msgEl) { msgEl.className = 'qmsg err'; msgEl.textContent = '⚠️ Un colis volumineux ne peut pas être transporté en 2 roues. Veuillez choisir un Utilitaire VL.'; }
    } else {
      if (msgEl && msgEl.textContent.includes('colis volumineux')) { msgEl.className = 'qmsg'; msgEl.textContent = ''; }
    }
  }
  vehEl?.addEventListener('change', checkColisVeh);
  parEl?.addEventListener('change', checkColisVeh);

  // Pré-remplir depuis URL params (page devis)
  const sp = new URLSearchParams(location.search);
  if (sp.get('af')) {
    const afEl = document.getElementById('af');
    if (afEl) afEl.value = sp.get('af');
  }
  if (sp.get('at')) {
    const atEl = document.getElementById('at');
    if (atEl) atEl.value = sp.get('at');
  }
  ['edate','etime','veh','urg','par'].forEach(id => {
    const val = sp.get(id);
    const el = document.getElementById(id);
    if (val && el) el.value = val;
  });
});
