


<?php
    $siteTitle = 'Ashlocs - Professional Hair Care for Textured Hair';
    $pageTitle = isset($title) ? $title . ' | Ashlocs' : $siteTitle;
    $metaDescription = $description ?? 'Professional dreadlocks, braiding, haircuts and training services. Expert care for textured hair across the UK. Book your appointment today.';
    $metaImage = isset($image) ? asset($image) : asset('images/2026-01-12-J8o94jxc.png');
    $metaUrl = url()->current();
    $keywords = $keywords ?? 'dreadlocks, locs, braids, haircuts, textured hair, natural hair, hair care, UK hair salon, mobile hair service, sisterlocks, microlocs, box braids, cornrows';
?>


<title><?php echo e($pageTitle); ?></title>
<meta name="title" content="<?php echo e($pageTitle); ?>">
<meta name="description" content="<?php echo e($metaDescription); ?>">
<meta name="keywords" content="<?php echo e($keywords); ?>">
<meta name="author" content="Ashlocs">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">


<meta property="og:type" content="<?php echo e($ogType ?? 'website'); ?>">
<meta property="og:url" content="<?php echo e($metaUrl); ?>">
<meta property="og:title" content="<?php echo e($pageTitle); ?>">
<meta property="og:description" content="<?php echo e($metaDescription); ?>">
<meta property="og:image" content="<?php echo e($metaImage); ?>">
<meta property="og:site_name" content="Ashlocs">
<meta property="og:locale" content="en_GB">


<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?php echo e($metaUrl); ?>">
<meta property="twitter:title" content="<?php echo e($pageTitle); ?>">
<meta property="twitter:description" content="<?php echo e($metaDescription); ?>">
<meta property="twitter:image" content="<?php echo e($metaImage); ?>">


<meta name="theme-color" content="#FF6B35">
<link rel="canonical" href="<?php echo e($canonical ?? $metaUrl); ?>">


<meta name="contact" content="bookings@ashlocs.co.uk">
<meta name="geo.region" content="GB">
<meta name="geo.placename" content="Reading, United Kingdom">
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/metrohealth/resources/views/partials/seo.blade.php ENDPATH**/ ?>