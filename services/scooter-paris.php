<?php
$title    = 'Coursier Scooter Paris — Livraison Express | MoovExpress';
$desc     = 'Service de coursier scooter à Paris et IDF. Livraison express de documents et colis en moins de 45 minutes. Coursiers salariés. Dès 8€ HT. 06 01 20 47 83';
$canonical = 'https://www.moovecourse.fr/services/scooter-paris';
include '../assets/_head.php';
include '../assets/_nav.php';
?>

<section class="page-hero">
  <div class="breadcrumb">
    <a href="../index">Accueil</a><span>/</span>
    <a href="#">Services</a><span>/</span>
    <span>Coursier Scooter Paris</span>
  </div>
  <div class="lbl">Service express</div>
  <h1>Coursier Scooter<br>Paris & IDF</h1>
  <p>Le moyen le plus rapide de livrer un document ou un petit colis à Paris. Nos scooters se faufilent dans la circulation et livrent en moins de 45 minutes.</p>
</section>

<div class="par-block">
  <div class="par-block-bg" style="background-image:url('../images/parallax-coursier-vitesse.jpg')"></div>
  <div class="par-block-over"></div>
  <div class="par-block-c">
    <div class="lbl" style="justify-content:center">Réactivité maximale</div>
    <h2>Enlèvement en<br>30 minutes chrono</h2>
    <p>Dès validation de votre devis, un coursier scooter est dispatché vers votre adresse.</p>
  </div>
</div>

<section class="s" style="background:var(--gris)">
  <div class="svc-2col">
    <div>
      <div class="lbl">Ce service inclut</div>
      <h2 style="margin-bottom:2rem">Pourquoi choisir<br>le scooter ?</h2>
      <ul class="args">
        <li class="arg"><div class="acheck">✓</div><div><strong>Circulation fluide</strong><span>Se faufile entre les voitures, pas de bouchons</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Stationnement facile</strong><span>Accès aux moindres ruelles parisiennes</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Délai garanti 45 min</strong><span>Pour toute livraison Paris intramuros</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Suivi SMS</strong><span>Notification enlèvement et livraison</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Idéal documents urgents</strong><span>Contrats, actes notariés, plis judiciaires</span></div></li>
      </ul>
    </div>
    <div style="background:var(--noir);border:1px solid rgba(255,255,255,.06);padding:2.5rem">
      <div class="lbl">Tarifs</div>
      <div style="display:flex;flex-direction:column;gap:.8rem;margin-top:1rem">
        <div style="display:flex;justify-content:space-between;align-items:center;padding:1rem 0;border-bottom:1px solid rgba(255,255,255,.05);font-size:.9rem">
          <span style="color:rgba(240,237,230,.6)">Paris intramuros</span>
          <span style="font-family:var(--ft);font-weight:800;color:var(--accent)">dès 8€ HT</span>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;padding:1rem 0;border-bottom:1px solid rgba(255,255,255,.05);font-size:.9rem">
          <span style="color:rgba(240,237,230,.6)">Petite couronne</span>
          <span style="font-family:var(--ft);font-weight:800;color:var(--accent)">dès 15€ HT</span>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;padding:1rem 0;border-bottom:1px solid rgba(255,255,255,.05);font-size:.9rem">
          <span style="color:rgba(240,237,230,.6)">Grande couronne</span>
          <span style="font-family:var(--ft);font-weight:800;color:var(--accent)">Sur devis</span>
        </div>
        <div style="display:flex;justify-content:space-between;align-items:center;padding:1rem 0;font-size:.9rem">
          <span style="color:rgba(240,237,230,.6)">Majoration express</span>
          <span style="font-family:var(--ft);font-weight:800;color:var(--accent)">+40%</span>
        </div>
      </div>
      <a href="../devis" class="btn-a" style="display:block;text-align:center;margin-top:2rem">Calculer mon devis</a>
    </div>
  </div>
</section>

<section class="s" style="background:var(--noir)">
  <div class="prose" style="margin:0">
    <div class="lbl">Informations pratiques</div>
    <h2>Tout savoir sur notre<br>service scooter Paris</h2>
    <p>Notre service de coursier scooter à Paris est conçu pour les professionnels qui ont besoin de livraisons rapides et fiables. Que vous ayez un document urgent à envoyer, un contrat à faire signer ou un colis léger à livrer, notre flotte de scooters est disponible 7j/7, 24h/24.</p>
    <h3>Quels types de colis ?</h3>
    <p>Le coursier scooter est idéal pour les documents (contrats, actes, courriers recommandés), les petits colis jusqu'à 20 kg, les échantillons, les médicaments et tout objet de petite taille nécessitant une livraison urgente à Paris ou en Île-de-France.</p>
    <h3>Quelle zone de livraison ?</h3>
    <p>Nous couvrons tout Paris (75) et les départements 92, 93, 94, 91, 78, 77 et 95. Pour les livraisons en province, consultez notre service moto longue distance.</p>
    <h3>Comment passer commande ?</h3>
    <p>Utilisez notre <a href="../devis">formulaire de devis en ligne</a> pour obtenir un prix immédiat, ou appelez directement le <a href="tel:0601204783">06 01 20 47 83</a>. Un coursier sera chez vous en 30 minutes.</p>
  </div>
</section>

<?php include '../assets/_footer.php'; ?>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="../assets/main.js?v=<?= filemtime('../assets/main.js') ?>"></script>
</body>
</html>
