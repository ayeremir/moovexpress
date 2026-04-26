<?php
$title    = 'Conditions Générales de Vente — MoovExpress';
$desc     = 'Conditions générales de vente de MoovExpress, service de coursier express à Paris et en Île-de-France.';
$canonical = 'https://moovexpress.fr/cgv';
include 'assets/_head.php';
include 'assets/_nav.php';
?>
<section class="page-hero">
  <div class="breadcrumb"><a href="index">Accueil</a><span>/</span><span>CGV</span></div>
  <div class="lbl">Légal</div>
  <h1>Conditions Générales<br>de Vente</h1>
  <p>En vigueur au 1er janvier <?= date('Y') ?></p>
</section>
<section class="s">
  <div class="prose">
    <h2>Article 1 — Objet</h2>
    <p>Les présentes Conditions Générales de Vente (CGV) s'appliquent à toutes les prestations de services de transport et de livraison conclues par la société MoovExpress (ci-après « le Prestataire ») avec ses clients professionnels et particuliers (ci-après « le Client »).</p>
    <p>Toute commande passée auprès de MoovExpress implique l'acceptation sans réserve des présentes CGV par le Client.</p>

    <h2>Article 2 — Prestations</h2>
    <p>MoovExpress propose les prestations suivantes :</p>
    <ul>
      <li>Coursier express scooter et moto sur Paris et Île-de-France</li>
      <li>Livraison en utilitaire VL pour colis volumineux</li>
      <li>Transport longue distance Paris–Province</li>
      <li>Navettes régulières entre sites d'entreprise</li>
    </ul>

    <h2>Article 3 — Tarifs</h2>
    <p>Les tarifs sont établis selon la distance, le type de véhicule et le niveau d'urgence. Un devis est fourni avant toute prestation via le formulaire en ligne ou par téléphone. Les prix sont indiqués hors taxes (HT). La TVA applicable est de 20%.</p>
    <p>MoovExpress se réserve le droit de modifier ses tarifs à tout moment. Les prestations sont facturées au tarif en vigueur au moment de la commande.</p>

    <h2>Article 4 — Commande</h2>
    <p>La commande est validée dès confirmation écrite (email) ou orale (téléphone) par MoovExpress. Toute commande passée engage le Client au paiement de la prestation, même en cas d'annulation tardive (moins de 30 minutes avant l'enlèvement prévu).</p>

    <h2>Article 5 — Responsabilité et assurance</h2>
    <p>MoovExpress est assuré pour le transport de marchandises. En cas de perte ou de dommage, la responsabilité est limitée à la valeur déclarée du colis, dans la limite des plafonds prévus par la réglementation en vigueur.</p>
    <p>Le Client est tenu de déclarer la valeur exacte des marchandises confiées. MoovExpress décline toute responsabilité pour les objets de valeur (bijoux, espèces, documents d'identité) non déclarés.</p>

    <h2>Article 6 — Obligations du Client</h2>
    <p>Le Client s'engage à :</p>
    <ul>
      <li>Fournir des adresses d'enlèvement et de livraison exactes</li>
      <li>Être disponible ou désigner un représentant à l'enlèvement</li>
      <li>Emballer correctement les marchandises confiées</li>
      <li>Ne pas confier de marchandises illicites, dangereuses ou interdites au transport</li>
    </ul>

    <h2>Article 7 — Paiement</h2>
    <p>Les prestations sont payables à réception de facture, sauf accord préalable. Pour les clients professionnels réguliers, des conditions de paiement à 30 jours peuvent être accordées sur devis. Tout retard de paiement entraîne des pénalités de retard au taux légal en vigueur.</p>

    <h2>Article 8 — Litiges</h2>
    <p>En cas de litige, le Client est invité à contacter MoovExpress par email à <a href="mailto:moovexpresstransport@gmail.com">moovexpresstransport@gmail.com</a>. À défaut de résolution amiable, le litige sera soumis aux tribunaux compétents du ressort de Paris.</p>

    <h2>Article 9 — Droit applicable</h2>
    <p>Les présentes CGV sont soumises au droit français. Elles sont régies notamment par le Code de commerce, le Code civil et la réglementation relative au transport de marchandises.</p>

    <h2>Article 10 — Contact</h2>
    <p>MoovExpress — <a href="tel:0601204783">06 01 20 47 83</a> — <a href="mailto:moovexpresstransport@gmail.com">moovexpresstransport@gmail.com</a></p>
  </div>
</section>
<?php include 'assets/_footer.php'; ?>
<script src="assets/main.js?v=<?= filemtime('assets/main.js') ?>"></script>
</body></html>
