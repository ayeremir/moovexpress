<?php
$title    = 'Livraison Utilitaire VL Paris — Colis Volumineux | MoovExpress';
$desc     = 'Service de livraison en utilitaire VL à Paris et IDF. Colis volumineux, palettes légères, matériel événementiel. Jusqu\'à 1000kg. Dès 25€ HT. 06 01 20 47 83';
$canonical = 'https://www.moovecourse.fr/services/utilitaire-livraison';
include '../assets/_head.php';
include '../assets/_nav.php';
?>
<section class="page-hero">
  <div class="breadcrumb">
    <a href="../index">Accueil</a><span>/</span><a href="#">Services</a><span>/</span><span>Utilitaire VL</span>
  </div>
  <div class="lbl">Transport volumétrique</div>
  <h1>Livraison Utilitaire<br>VL Paris & IDF</h1>
  <p>Pour vos colis volumineux, palettes légères et matériel événementiel. Nos utilitaires VL prennent en charge jusqu'à 1 000 kg avec chauffeur-livreur professionnel.</p>
</section>
<div class="par-block">
  <div class="par-block-bg" style="background-image:url('../images/parallax-livraison-colis.jpg')"></div>
  <div class="par-block-over"></div>
  <div class="par-block-c">
    <div class="lbl" style="justify-content:center">Capacité</div>
    <h2>Jusqu'à 1 000 kg<br>de charge utile</h2>
    <p>Nos utilitaires VL couvrent tous vos besoins de transport volumétrique à Paris et en IDF.</p>
  </div>
</div>
<section class="s" style="background:var(--gris)">
  <div class="svc-2col">
    <div>
      <div class="lbl">Capacités</div>
      <h2 style="margin-bottom:2rem">Votre transport<br>sur mesure</h2>
      <ul class="args">
        <li class="arg"><div class="acheck">✓</div><div><strong>Jusqu'à 1 000 kg</strong><span>Charge utile maximale par véhicule</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Volume 6 à 10 m³</strong><span>Selon le modèle de véhicule dispatché</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Hayon élévateur disponible</strong><span>Sur demande pour les charges lourdes</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>2 hommes sur demande</strong><span>Pour la manutention et mise en place</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Matériel événementiel</strong><span>Stands, mobilier, équipements audiovisuels</span></div></li>
      </ul>
    </div>
    <div style="background:var(--noir);border:1px solid rgba(255,255,255,.06);padding:2.5rem">
      <div class="lbl">Tarifs</div>
      <div style="display:flex;flex-direction:column;gap:.8rem;margin-top:1rem">
        <div style="display:flex;justify-content:space-between;padding:1rem 0;border-bottom:1px solid rgba(255,255,255,.05);font-size:.9rem"><span style="color:rgba(240,237,230,.6)">Paris intramuros</span><span style="font-family:var(--ft);font-weight:800;color:var(--accent)">dès 25€ HT</span></div>
        <div style="display:flex;justify-content:space-between;padding:1rem 0;border-bottom:1px solid rgba(255,255,255,.05);font-size:.9rem"><span style="color:rgba(240,237,230,.6)">Petite couronne</span><span style="font-family:var(--ft);font-weight:800;color:var(--accent)">dès 40€ HT</span></div>
        <div style="display:flex;justify-content:space-between;padding:1rem 0;font-size:.9rem"><span style="color:rgba(240,237,230,.6)">Grande couronne & Province</span><span style="font-family:var(--ft);font-weight:800;color:var(--accent)">Sur devis</span></div>
      </div>
      <a href="../devis" class="btn-a" style="display:block;text-align:center;margin-top:2rem">Calculer mon devis</a>
    </div>
  </div>
</section>
<?php include '../assets/_footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="../assets/main.js?v=<?= filemtime('../assets/main.js') ?>"></script>
</body></html>
