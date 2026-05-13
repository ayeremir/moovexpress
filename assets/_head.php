<?php
$root = (str_contains($_SERVER['PHP_SELF'], '/services/') || str_contains($_SERVER['PHP_SELF'], '/zones/')) ? '../' : '';
$title    = $title    ?? 'MoovExpress — Coursier Express Paris & IDF';
$desc     = $desc     ?? 'Coursier professionnel à Paris et en Île-de-France. Livraison express en scooter et utilitaire. Devis instantané en ligne. 06 01 20 47 83';
$canonical = $canonical ?? 'https://www.moovecourse.fr';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title) ?></title>
<meta name="description" content="<?= htmlspecialchars($desc) ?>">
<link rel="canonical" href="<?= $canonical ?>">

<!-- Open Graph -->
<meta property="og:type" content="website">
<meta property="og:title" content="<?= htmlspecialchars($title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($desc) ?>">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="https://www.moovecourse.fr/assets/og-image.jpg">
<meta property="og:locale" content="fr_FR">

<!-- Schema.org LocalBusiness -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "MoovExpress",
  "description": "<?= htmlspecialchars($desc) ?>",
  "telephone": "+33601204783",
  "email": "moovexpresstransport@gmail.com",
  "url": "https://www.moovecourse.fr",
  "areaServed": ["Paris", "Île-de-France"],
  "openingHours": "Mo-Su 00:00-23:59",
  "priceRange": "€€"
}
</script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<link rel="stylesheet" href="<?= $root ?>assets/style.css?v=<?= filemtime(__DIR__.'/style.css') ?>">
</head>
<body>
