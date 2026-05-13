<?php
$title    = 'Devis Coursier en Ligne — MoovExpress Paris';
$desc     = 'Obtenez un devis coursier instantané en ligne. Renseignez vos adresses et recevez un prix immédiat. Livraison express Paris et IDF. 06 01 20 47 83';
$canonical = 'https://www.moovecourse.fr/devis';
include 'assets/_head.php';
include 'assets/_nav.php';
?>

<section class="page-hero">
  <div class="breadcrumb">
    <a href="index">Accueil</a>
    <span>/</span>
    <span>Devis</span>
  </div>
  <div class="lbl">Tarif instantané</div>
  <h1>Votre devis<br>en 30 secondes</h1>
  <p>Renseignez votre course et recevez une estimation immédiate. Notre équipe vous confirme sous 30 minutes.</p>
</section>

<section class="s" style="background:var(--gris2)">
  <div class="devis-2col">
    <div>
      <div class="lbl">Nous contacter</div>
      <h2 style="margin-bottom:1.5rem">Une question ?<br>Appelez-nous</h2>
      <p style="color:var(--dim);line-height:1.85;margin-bottom:2rem;font-size:.9rem">Disponibles 7j/7, 24h/24 pour répondre à vos besoins urgents de livraison.</p>
      <div style="display:flex;flex-direction:column;gap:1rem">
        <div style="display:flex;align-items:center;gap:.9rem;font-size:.875rem;color:rgba(240,237,230,.55)">
          <div style="width:30px;height:30px;border:1px solid rgba(212,255,0,.25);display:flex;align-items:center;justify-content:center;font-size:.7rem;color:var(--accent);flex-shrink:0">☎</div>
          <div><strong style="color:var(--blanc)">06 01 20 47 83</strong> — 24h/24, 7j/7</div>
        </div>
        <div style="display:flex;align-items:center;gap:.9rem;font-size:.875rem;color:rgba(240,237,230,.55)">
          <div style="width:30px;height:30px;border:1px solid rgba(212,255,0,.25);display:flex;align-items:center;justify-content:center;font-size:.7rem;color:var(--accent);flex-shrink:0">✉</div>
          <div><strong style="color:var(--blanc)">moovexpresstransport@gmail.com</strong></div>
        </div>
        <div style="display:flex;align-items:center;gap:.9rem;font-size:.875rem;color:rgba(240,237,230,.55)">
          <div style="width:30px;height:30px;border:1px solid rgba(212,255,0,.25);display:flex;align-items:center;justify-content:center;font-size:.7rem;color:var(--accent);flex-shrink:0">📍</div>
          <div>Paris & Île-de-France</div>
        </div>
      </div>
      <div style="margin-top:3rem;padding:1.5rem;border:1px solid rgba(255,255,255,.06);background:var(--noir)">
        <div style="font-size:.68rem;letter-spacing:.15em;text-transform:uppercase;color:var(--accent);margin-bottom:1rem">Tarifs indicatifs</div>
        <div style="display:flex;flex-direction:column;gap:.6rem;font-size:.82rem;color:rgba(240,237,230,.55)">
          <div style="display:flex;justify-content:space-between"><span>Scooter — Paris intra</span><span style="color:var(--blanc)">dès 8€ HT</span></div>
          <div style="height:1px;background:rgba(255,255,255,.05)"></div>
          <div style="display:flex;justify-content:space-between"><span>Utilitaire — Paris intra</span><span style="color:var(--blanc)">dès 25€ HT</span></div>
          <div style="height:1px;background:rgba(255,255,255,.05)"></div>
          <div style="display:flex;justify-content:space-between"><span>Express immédiat</span><span style="color:var(--blanc)">×2 tarif base</span></div>
        </div>
      </div>
    </div>
    <div class="fbox">
      <div class="ff">
        <label>Adresse de prise en charge</label>
        <div style="position:relative">
          <input type="text" id="af" placeholder="10 rue de Rivoli, Paris" autocomplete="off">
          <div class="sugg" id="sf"></div>
        </div>
      </div>
      <div class="ff">
        <label>Adresse de livraison</label>
        <div style="position:relative">
          <input type="text" id="at" placeholder="25 avenue Montaigne, Paris" autocomplete="off">
          <div class="sugg" id="st"></div>
        </div>
      </div>
      <div id="map-d"></div>
      <div class="ff-row">
        <div class="ff"><label>Date d'enlèvement</label><input type="date" id="edate"></div>
        <div class="ff"><label>Heure d'enlèvement</label><input type="time" id="etime" value="09:00"></div>
      </div>
      <div class="ff-row">
        <div class="ff"><label>Véhicule</label><select id="veh"><option value="1.0">Scooter / Moto</option><option value="1.8">Utilitaire VL</option></select></div>
        <div class="ff"><label>Urgence</label><select id="urg"><option value="1.0">Standard (2h)</option><option value="1.4">Express (1h)</option><option value="2.0">Immédiat (&lt;45min)</option></select></div>
      </div>
      <div class="ff"><label>Type de colis</label><select id="par"><option value="0">Document / Pli</option><option value="2">Colis standard</option><option value="5">Colis volumineux</option></select></div>
      <div class="pbox">
        <div><div class="pb-lbl" id="pbl">Renseignez les adresses</div><div class="pb-dist" id="pbd"></div></div>
        <div style="text-align:right"><div class="pb-price" id="pbp">—</div><div class="pb-ht" id="pbh"></div></div>
      </div>
      <div class="ff-row">
        <div class="ff"><label>Votre nom</label><input type="text" id="cn" placeholder="Jean Dupont"></div>
        <div class="ff"><label>Email</label><input type="email" id="ce" placeholder="jean@société.fr"></div>
      </div>
      <div class="ff"><label>Téléphone</label><input type="tel" id="cp" placeholder="06 00 00 00 00"></div>
      <div class="ff"><label>Commentaire</label><textarea id="cc" placeholder="Instructions particulières, étage, code porte, nature du colis…" rows="3"></textarea></div>
      <div class="ff">
        <label style="display:flex;align-items:flex-start;gap:.6rem;cursor:pointer">
          <input type="checkbox" id="rgpd" style="width:auto;margin-top:3px">
          <span style="font-size:.75rem;color:rgba(240,237,230,.4)">J'accepte que mes données soient utilisées pour traiter ma demande de devis conformément à la <a href="politique-confidentialite" style="color:var(--accent)">politique de confidentialité</a>.</span>
        </label>
      </div>
      <button class="bsub" onclick="submitQuote()">Demander ce devis →</button>
      <div class="qmsg" id="qm"></div>
    </div>
  </div>
</section>

<?php include 'assets/_footer.php'; ?>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="assets/main.js?v=<?= filemtime('assets/main.js') ?>"></script>
<script src="assets/quote.js?v=<?= filemtime('assets/quote.js') ?>"></script>
</body>
</html>
