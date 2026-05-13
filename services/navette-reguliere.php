<?php
$title    = 'Navette Régulière Entreprise Paris — Transport Récurrent | MoovExpress';
$desc     = 'Service de navette régulière entre vos sites à Paris et IDF. Transport récurrent optimisé, tarif préférentiel sur contrat. MoovExpress. 06 01 20 47 83';
$canonical = 'https://www.moovecourse.fr/services/navette-reguliere';
include '../assets/_head.php';
include '../assets/_nav.php';
?>
<section class="page-hero">
  <div class="breadcrumb">
    <a href="../index">Accueil</a><span>/</span><a href="#">Services</a><span>/</span><span>Navette Régulière</span>
  </div>
  <div class="lbl">Transport récurrent</div>
  <h1>Navette Régulière<br>Entre Vos Sites</h1>
  <p>Externalisez votre logistique interne. MoovExpress met en place des tournées optimisées entre vos différents sites d'activité, à Paris et en Île-de-France.</p>
</section>
<section class="s" style="background:var(--gris)">
  <div class="svc-2col">
    <div>
      <div class="lbl">Pour qui ?</div>
      <h2 style="margin-bottom:2rem">La solution pour<br>les entreprises multi-sites</h2>
      <ul class="args">
        <li class="arg"><div class="acheck">✓</div><div><strong>Tournées optimisées</strong><span>Itinéraires calculés pour minimiser les délais</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Fréquence sur mesure</strong><span>Quotidienne, hebdomadaire ou à la demande</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Coursier dédié</strong><span>Le même coursier connaît vos sites et équipes</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Tarif préférentiel</strong><span>Réduction sur engagement mensuel ou annuel</span></div></li>
        <li class="arg"><div class="acheck">✓</div><div><strong>Rapport d'activité</strong><span>Suivi mensuel de toutes les navettes effectuées</span></div></li>
      </ul>
    </div>
    <div style="background:var(--noir);border:1px solid rgba(255,255,255,.06);padding:2.5rem">
      <div class="lbl">Tarification</div>
      <p style="color:var(--dim);font-size:.88rem;line-height:1.8;margin:1rem 0 2rem">Les navettes régulières font l'objet d'un devis personnalisé selon la fréquence, le nombre de points et le type de véhicule. Contactez-nous pour un audit gratuit de vos besoins.</p>
      <a href="../devis" class="btn-a" style="display:block;text-align:center;margin-bottom:1rem">Demander un devis</a>
      <a href="tel:0601204783" class="btn-b" style="display:block;text-align:center">Appeler le 06 01 20 47 83</a>
    </div>
  </div>
</section>
<?php include '../assets/_footer.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script src="../assets/main.js?v=<?= filemtime('../assets/main.js') ?>"></script>
</body></html>
