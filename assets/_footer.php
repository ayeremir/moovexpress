<?php $root = (str_contains($_SERVER['PHP_SELF'], '/services/') || str_contains($_SERVER['PHP_SELF'], '/zones/')) ? '../' : ''; ?>
<footer>
  <div class="ft">
    <div class="ft-brand">
      <a href="<?= $root ?>index" class="logo">Moov<b>Express</b></a>
      <p>Coursiers professionnels salariés au service des entreprises parisiennes depuis 2010.</p>
    </div>
    <div class="ft-col">
      <h4>Services</h4>
      <ul>
        <li><a href="<?= $root ?>services/scooter-paris">Scooter Express</a></li>
        <li><a href="<?= $root ?>services/utilitaire-livraison">Utilitaire VL</a></li>
        <li><a href="<?= $root ?>services/navette-reguliere">Navette Régulière</a></li>
        <li><a href="<?= $root ?>services/livraison-express-paris">Livraison Express Paris</a></li>
        <li><a href="<?= $root ?>services/coursier-urgent-paris">Coursier Urgent 24h/24</a></li>
        <li><a href="<?= $root ?>devis">Devis en ligne</a></li>
      </ul>
    </div>
    <div class="ft-col">
      <h4>Zones</h4>
      <ul>
        <li><a href="<?= $root ?>zones/livraison-92-hauts-de-seine">Hauts-de-Seine (92)</a></li>
        <li><a href="<?= $root ?>zones/livraison-93-seine-saint-denis">Seine-Saint-Denis (93)</a></li>
        <li><a href="<?= $root ?>zones/livraison-94-val-de-marne">Val-de-Marne (94)</a></li>
      </ul>
    </div>
    <div class="ft-col">
      <h4>Entreprise</h4>
      <ul>
        <li><a href="<?= $root ?>index#equipe">Notre équipe</a></li>
        <li><a href="<?= $root ?>index#contact">Zone de couverture</a></li>
        <li><a href="<?= $root ?>mentions-legales">Mentions légales</a></li>
        <li><a href="<?= $root ?>cgv">CGV</a></li>
      </ul>
    </div>
    <div class="ft-col">
      <h4>Contact</h4>
      <ul>
        <li><a href="tel:0601204783">06 01 20 47 83</a></li>
        <li><a href="mailto:moovexpresstransport@gmail.com">moovexpresstransport@gmail.com</a></li>
        <li><a href="<?= $root ?>politique-confidentialite">Politique de confidentialité</a></li>
      </ul>
    </div>
  </div>
  <div class="ft-bot">
    <span>© <?= date('Y') ?> MoovExpress. Tous droits réservés.</span>
    <span>
      <a href="<?= $root ?>mentions-legales" style="color:inherit;text-decoration:none">Mentions légales</a>
      · <a href="<?= $root ?>cgv" style="color:inherit;text-decoration:none">CGV</a>
      · <a href="<?= $root ?>politique-confidentialite" style="color:inherit;text-decoration:none">Confidentialité</a>
    </span>
  </div>
  <div class="ft-dev">Développé par <a href="mailto:ae.creation@hotmail.com">AE Creation</a></div>
</footer>
