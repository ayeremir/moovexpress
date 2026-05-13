<?php
$title    = 'MoovExpress — Coursier Express Paris & Île-de-France';
$desc     = 'Coursier professionnel à Paris et en Île-de-France. Livraison express en scooter et utilitaire VL. Enlèvement en 30 min. Devis instantané. 06 01 20 47 83';
$canonical = 'https://www.moovecourse.fr';
include 'assets/_head.php';
include 'assets/_nav.php';
?>

<!-- HERO -->
<section id="hero" class="hero">
  <video id="hero-bg" class="hero-bg" autoplay muted loop playsinline poster="images/hero-coursier-scooter-paris.jpg">
    <source src="images/livraison-paris-moove.mp4" type="video/mp4">
  </video>
  <div class="hero-over"></div>
  <div class="hero-grain"></div>
  <div class="hero-side">
    <div><div class="hstat-n">45'</div><div class="hstat-l">Délai moyen</div></div>
    <div class="hline"></div>
    <div><div class="hstat-n">98%</div><div class="hstat-l">Satisfaction</div></div>
    <div class="hline"></div>
    <div><div class="hstat-n">24/7</div><div class="hstat-l">Disponible</div></div>
  </div>
  <div class="hero-c">
    <div class="badge"><span class="bdot"></span>Disponible maintenant</div>
    <h1>Livraison<br><em style="font-style:normal;color:var(--accent)">express</em><br>Paris IDF</h1>
    <p class="hero-sub">Coursiers professionnels en scooter et utilitaire VL. Enlèvement en 30 min, livraison garantie dans toute l'Île-de-France.</p>
    <div class="ctas">
      <a href="devis" class="btn-a">Obtenir un devis</a>
      <a href="#services" class="btn-b">Nos services</a>
    </div>
  </div>
  <div class="ticker-wrap">
    <div class="ticker">
      <span><b>✦</b> Livraison express Paris</span>
      <span><b>✦</b> Scooter & Utilitaire VL</span>
      <span><b>✦</b> 7j/7 — 24h/24</span>
      <span><b>✦</b> Coursiers salariés</span>
      <span><b>✦</b> Devis instantané</span>
      <span><b>✦</b> Île-de-France & Province</span>
      <span><b>✦</b> Livraison express Paris</span>
      <span><b>✦</b> Scooter & Utilitaire VL</span>
      <span><b>✦</b> 7j/7 — 24h/24</span>
      <span><b>✦</b> Coursiers salariés</span>
      <span><b>✦</b> Devis instantané</span>
      <span><b>✦</b> Île-de-France & Province</span>
    </div>
  </div>
</section>

<!-- DEVIS RAPIDE -->
<section class="qk-wrap">
  <div class="qk-inner">
    <div class="qk-head">
      <div class="lbl">Tarif instantané</div>
      <h2>Votre devis<br>en 30 secondes</h2>
    </div>
    <div class="qk-form">
      <div class="qk-ff">
        <label>Adresse de prise en charge</label>
        <div style="position:relative">
          <input type="text" id="af" placeholder="10 rue de Rivoli, Paris" autocomplete="off">
          <div class="sugg" id="sf"></div>
        </div>
      </div>
      <div class="qk-ff">
        <label>Adresse de livraison</label>
        <div style="position:relative">
          <input type="text" id="at" placeholder="25 avenue Montaigne, Paris" autocomplete="off">
          <div class="sugg" id="st"></div>
        </div>
      </div>
      <div id="map-d"></div>
      <div class="qk-row">
        <div class="qk-ff"><label>Date d'enlèvement</label><input type="date" id="edate"></div>
        <div class="qk-ff"><label>Heure d'enlèvement</label><input type="time" id="etime" value="09:00"></div>
      </div>
      <div class="qk-row">
        <div class="qk-ff"><label>Véhicule</label><select id="veh"><option value="1.0">Scooter / Moto</option><option value="1.8">Utilitaire VL</option></select></div>
        <div class="qk-ff"><label>Urgence</label><select id="urg"><option value="1.0">Standard (2h)</option><option value="1.4">Express (1h)</option><option value="2.0">Immédiat (&lt;45min)</option></select></div>
      </div>
      <div class="qk-ff"><label>Type de colis</label><select id="par"><option value="0">Document / Pli</option><option value="2">Colis standard</option><option value="5">Colis volumineux</option></select></div>
      <div class="qk-pbox">
        <div><div class="qk-pbl" id="pbl">Renseignez les adresses</div><div class="qk-pbd" id="pbd"></div></div>
        <div style="text-align:right"><div class="qk-pbp" id="pbp">—</div><div class="qk-pbh" id="pbh"></div></div>
      </div>
      <div class="qk-row">
        <div class="qk-ff"><label>Votre nom</label><input type="text" id="cn" placeholder="Jean Dupont"></div>
        <div class="qk-ff"><label>Email</label><input type="email" id="ce" placeholder="jean@société.fr"></div>
      </div>
      <div class="qk-ff"><label>Téléphone</label><input type="tel" id="cp" placeholder="06 00 00 00 00"></div>
      <div class="qk-ff"><label>Commentaire</label><textarea id="cc" placeholder="Instructions particulières, étage, code porte, nature du colis…" rows="3"></textarea></div>
      <div class="qk-ff">
        <label style="display:flex;align-items:flex-start;gap:.6rem;cursor:pointer">
          <input type="checkbox" id="rgpd" style="width:auto;margin-top:3px;accent-color:var(--noir)">
          <span style="font-size:.75rem;color:rgba(0,0,0,.45)">J'accepte que mes données soient utilisées pour traiter ma demande de devis conformément à la <a href="politique-confidentialite" style="color:var(--noir);text-decoration:underline">politique de confidentialité</a>.</span>
        </label>
      </div>
      <button class="qk-sub" onclick="submitQuote()">Demander ce devis →</button>
      <div class="qmsg" id="qm"></div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="s" id="services" style="background:var(--gris)">
  <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:4rem;gap:2rem;flex-wrap:wrap">
    <div><div class="lbl">Nos véhicules</div><h2>La bonne solution<br>pour chaque course</h2></div>
    <p style="max-width:340px;color:var(--dim);font-size:.9rem;line-height:1.8">Du pli urgent au colis volumineux, le véhicule adapté disponible immédiatement, 7j/7.</p>
  </div>
  <div class="svc-grid">
    <div class="svc rv">
      <span class="sico">🛵</span>
      <h3>Scooter Express</h3>
      <p>Documents, plis et petits colis. Fend la circulation parisienne en toute agilité.</p>
      <span class="stag">Dès 8€ HT</span>
    </div>
    <div class="svc rv">
      <span class="sico">🏍️</span>
      <h3>Moto Longue Distance</h3>
      <p>Paris–Province sans rupture de charge. Livraison inter-régionale sécurisée.</p>
      <span class="stag">Sur devis</span>
    </div>
    <div class="svc rv">
      <span class="sico">🚐</span>
      <h3>Utilitaire VL</h3>
      <p>Colis volumineux, palettes légères, matériel événementiel. Jusqu'à 1 000 kg.</p>
      <span class="stag">Dès 25€ HT</span>
    </div>
    <div class="svc rv">
      <span class="sico">🔄</span>
      <h3>Navette Régulière</h3>
      <p>Transport récurrent entre vos sites. Tournées optimisées, tarif préférentiel.</p>
      <span class="stag">Sur contrat</span>
    </div>
  </div>
</section>

<!-- PARALLAX 1 -->
<div class="par-block">
  <div class="par-block-bg" style="background-image:url('images/parallax-livraison-colis.jpg')"></div>
  <div class="par-block-over"></div>
  <div class="par-block-c">
    <div class="lbl" style="justify-content:center">Notre engagement</div>
    <h2>Votre colis entre<br>de vraies mains</h2>
    <p>Tous nos coursiers sont salariés, assurés et formés. Pas des auto-entrepreneurs de plateforme.</p>
  </div>
</div>

<!-- CHIFFRES -->
<section class="sm">
  <div class="chif-grid">
    <div class="chif"><div class="chif-n" data-c="50000">0</div><div class="chif-l">Courses réalisées</div></div>
    <div class="chif"><div class="chif-n">45 min</div><div class="chif-l">Délai moyen Paris</div></div>
    <div class="chif"><div class="chif-n">98%</div><div class="chif-l">Clients satisfaits</div></div>
    <div class="chif"><div class="chif-n">24/7</div><div class="chif-l">Disponibilité</div></div>
  </div>
</section>

<!-- PROCESS -->
<section class="proc-s s" id="process">
  <div class="lbl">Simple & rapide</div>
  <h2>3 étapes pour<br>votre livraison</h2>
  <div class="proc-grid">
    <div class="proc-step"><div class="snum">01</div><h3>Obtenez votre devis</h3><p>Renseignez les adresses et options. Le prix s'affiche instantanément, sans engagement.</p><div class="sarr">→</div></div>
    <div class="proc-step"><div class="snum">02</div><h3>Enlèvement en 30 min</h3><p>Un coursier se présente à votre adresse dans les 30 minutes suivant votre demande.</p><div class="sarr">→</div></div>
    <div class="proc-step"><div class="snum">03</div><h3>Livraison confirmée</h3><p>Confirmation SMS à l'enlèvement et à la livraison. Bordereau disponible en ligne.</p></div>
  </div>
</section>

<!-- PARALLAX 2 -->
<div class="par-block">
  <div class="par-block-bg" style="background-image:url('images/parallax-coursier-vitesse.jpg')"></div>
  <div class="par-block-over" style="background:linear-gradient(to bottom,rgba(8,8,8,.6),rgba(8,8,8,.75))"></div>
  <div class="par-block-c">
    <div class="lbl" style="justify-content:center">Réactivité</div>
    <h2>Peur des bouchons ?<br>Optez pour la<br>solution 2 roues.</h2>
    <p>Dès réception de votre demande, un coursier est dispatché immédiatement vers vous.</p>
  </div>
</div>

<!-- POURQUOI -->
<div class="why-wrap">
  <div class="why-img" id="why-img">
    <div class="why-bg" id="why-bg" style="background-image:url('images/why-telephone-coursier.jpg')"></div>
    <div class="why-img-over"></div>
  </div>
  <div class="why-c">
    <div class="lbl">Pourquoi nous</div>
    <h2 style="margin-bottom:1.5rem">Professionnels<br>salariés, pas<br>auto-entrepreneurs</h2>
    <p>Contrairement aux plateformes, nos coursiers sont salariés, formés et équipés.</p>
    <ul class="args">
      <li class="arg"><div class="acheck">✓</div><div><strong>Coursiers salariés</strong><span>Formations, assurances et équipements inclus</span></div></li>
      <li class="arg"><div class="acheck">✓</div><div><strong>Suivi en temps réel</strong><span>SMS à l'enlèvement et à la livraison</span></div></li>
      <li class="arg"><div class="acheck">✓</div><div><strong>Tarifs transparents</strong><span>Prix fixe annoncé avant la course</span></div></li>
      <li class="arg"><div class="acheck">✓</div><div><strong>7j/7 — 24h/24</strong><span>Week-ends et nuits sans majoration cachée</span></div></li>
    </ul>
  </div>
</div>

<!-- ÉQUIPE -->
<section class="s" id="equipe" style="background:var(--gris)">
  <div style="margin-bottom:3.5rem">
    <div class="lbl">Notre équipe</div>
    <h2>Des professionnels<br>à votre service</h2>
    <p style="color:var(--dim);margin-top:1rem;max-width:460px;line-height:1.75;font-size:.9rem">Tous salariés, formés et passionnés. Une équipe disponible 7j/7 pour vos livraisons.</p>
  </div>
  <div class="team-grid">
    <div class="tc rv"><div class="tc-img" style="background-image:url('images/equipe-karim-scooter.jpg')"></div><div class="tc-info"><div class="tc-name">Colis fragiles</div><div class="tc-role">Livraison en toute sécurité</div></div></div>
    <div class="tc tc--big rv"><div class="tc-img" style="background-image:url('images/equipe-flotte-vl.jpg')"></div><div class="tc-info"><div class="tc-name">Notre flotte VL</div><div class="tc-role">Utilitaires & Scooters — Paris IDF</div></div></div>
    <div class="tc rv"><div class="tc-img" style="background-image:url('images/equipe-marc-vl.jpg')"></div><div class="tc-info"><div class="tc-name">Peu importe où vous êtes</div><div class="tc-role">On livre</div></div></div>
    <div class="tc rv"><div class="tc-img" style="background-image:url('images/hero-coursier-scooter-paris.jpg')"></div><div class="tc-info"><div class="tc-name">7j/7 — 24h/24</div><div class="tc-role">À toute heure, tous les jours</div></div></div>
    <div class="tc rv"><div class="tc-img" style="background-image:url('images/equipe-sofia-dispatch.jpg')"></div><div class="tc-info"><div class="tc-name">Gestion logistique</div><div class="tc-role">Toute une équipe à votre service</div></div></div>
  </div>
</section>

<!-- TÉMOIGNAGES -->
<section class="s" style="background:var(--noir)">
  <div class="lbl">Ils nous font confiance</div>
  <h2>Ce que disent<br>nos clients</h2>
  <div class="temo-grid">
    <div class="temo"><div class="stars">★★★★★</div><p class="ttxt">« Service impeccable. Le coursier était là en 25 minutes, professionnel et souriant. Notre pli urgent est arrivé à temps. »</p><div class="tauth"><div class="tav">SB</div><div><div class="tname">Sophie Bernard</div><div class="trole">Directrice juridique — Cabinet Lebrun</div></div></div></div>
    <div class="temo"><div class="stars">★★★★★</div><p class="ttxt">« Nous utilisons MoovExpress pour toutes nos livraisons. Réactivité excellente, tarifs clairs, aucune mauvaise surprise. »</p><div class="tauth"><div class="tav">MR</div><div><div class="tname">Marc Renaud</div><div class="trole">Responsable logistique — Maison Defrance</div></div></div></div>
    <div class="temo"><div class="stars">★★★★★</div><p class="ttxt">« Le devis en ligne est un vrai plus. On sait exactement combien ça coûte avant même d'appeler. »</p><div class="tauth"><div class="tav">AC</div><div><div class="tname">Aurélie Chen</div><div class="trole">Office Manager — StartupFactory</div></div></div></div>
  </div>
</section>

<!-- COUVERTURE -->
<section class="s" id="contact" style="background:var(--gris)">
  <div class="couv-in">
    <div>
      <div class="lbl">Zone d'intervention</div>
      <h2>Paris &<br>Île-de-France</h2>
      <p>Nous intervenons dans tout Paris intramuros et les 7 départements franciliens. Livraisons nationales sur demande.</p>
      <div class="zones">
        <span class="zone">Paris 75</span><span class="zone">Hauts-de-Seine 92</span><span class="zone">Seine-St-Denis 93</span><span class="zone">Val-de-Marne 94</span><span class="zone">Essonne 91</span><span class="zone">Yvelines 78</span><span class="zone">Val-d'Oise 95</span><span class="zone">Seine-et-Marne 77</span>
      </div>
      <br>
      <a href="devis" class="btn-a" style="display:inline-block;margin-top:1rem">Demander un devis</a>
    </div>
    <div id="map-c"></div>
  </div>
</section>

<?php include 'assets/_footer.php'; ?>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="assets/main.js?v=<?= filemtime('assets/main.js') ?>"></script>
<script src="assets/quote.js?v=<?= filemtime('assets/quote.js') ?>"></script>
<script>
const mapC = L.map('map-c', {zoomControl:false, scrollWheelZoom:false}).setView([48.8566,2.3522],9);
L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png',{attribution:'© CARTO'}).addTo(mapC);
L.circle([48.8566,2.3522],{color:'#d4ff00',fillColor:'#d4ff00',fillOpacity:.07,radius:55000,weight:1}).addTo(mapC);
</script>
</body>
</html>
