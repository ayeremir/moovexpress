<?php
// Détecte la page active
$current = basename($_SERVER['PHP_SELF'], '.php');
$root = (str_contains($_SERVER['PHP_SELF'], '/services/') || str_contains($_SERVER['PHP_SELF'], '/zones/')) ? '../' : '';
?>
<div class="mmenu" id="mm">
  <nav class="mmenu-nav">
    <a href="<?= $root ?>index" onclick="mm()"><em>01</em>Accueil</a>
    <a href="<?= $root ?>services/scooter-paris" onclick="mm()"><em>02</em>Scooter Express</a>
    <a href="<?= $root ?>services/utilitaire-livraison" onclick="mm()"><em>03</em>Utilitaire VL</a>
    <a href="<?= $root ?>devis" onclick="mm()"><em>04</em>Devis</a>
  </nav>
  <div class="mmenu-foot">
    <a href="<?= $root ?>devis" class="mmenu-cta" onclick="mm()">Obtenir un devis →</a>
    <a href="tel:0601204783" class="mmenu-tel" onclick="mm()">06 01 20 47 83</a>
  </div>
</div>

<nav id="nav">
  <a href="<?= $root ?>index" class="logo">Moov<b>Express</b></a>
  <ul class="navl">
    <li><a href="<?= $root ?>index" <?= $current === 'index' ? 'class="active"' : '' ?>>Accueil</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="<?= $root ?>devis" <?= $current === 'devis' ? 'class="active"' : '' ?>>Devis</a></li>
    <li><a href="<?= $root ?>index#contact">Contact</a></li>
  </ul>
  <a href="tel:0601204783" class="nav-tel">06 01 20 47 83</a>
  <div class="burger" onclick="mm()">
    <span></span><span></span><span></span>
  </div>
</nav>
