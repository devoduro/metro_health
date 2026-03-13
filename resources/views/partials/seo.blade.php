{{-- SEO Meta Tags Component --}}
{{-- Usage: @include('partials.seo', ['title' => 'Page Title', 'description' => 'Description', 'image' => 'image.jpg']) --}}

@php
    $siteTitle = 'Ashlocs - Professional Hair Care for Textured Hair';
    $pageTitle = isset($title) ? $title . ' | Ashlocs' : $siteTitle;
    $metaDescription = $description ?? 'Professional dreadlocks, braiding, haircuts and training services. Expert care for textured hair across the UK. Book your appointment today.';
    $metaImage = isset($image) ? asset($image) : asset('images/2026-01-12-J8o94jxc.png');
    $metaUrl = url()->current();
    $keywords = $keywords ?? 'dreadlocks, locs, braids, haircuts, textured hair, natural hair, hair care, UK hair salon, mobile hair service, sisterlocks, microlocs, box braids, cornrows';
@endphp

{{-- Primary Meta Tags --}}
<title>{{ $pageTitle }}</title>
<meta name="title" content="{{ $pageTitle }}">
<meta name="description" content="{{ $metaDescription }}">
<meta name="keywords" content="{{ $keywords }}">
<meta name="author" content="Ashlocs">
<meta name="robots" content="index, follow">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">

{{-- Open Graph / Facebook --}}
<meta property="og:type" content="{{ $ogType ?? 'website' }}">
<meta property="og:url" content="{{ $metaUrl }}">
<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:image" content="{{ $metaImage }}">
<meta property="og:site_name" content="Ashlocs">
<meta property="og:locale" content="en_GB">

{{-- Twitter --}}
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ $metaUrl }}">
<meta property="twitter:title" content="{{ $pageTitle }}">
<meta property="twitter:description" content="{{ $metaDescription }}">
<meta property="twitter:image" content="{{ $metaImage }}">

{{-- Additional Meta Tags --}}
<meta name="theme-color" content="#FF6B35">
<link rel="canonical" href="{{ $canonical ?? $metaUrl }}">

{{-- Business Contact Info --}}
<meta name="contact" content="bookings@ashlocs.co.uk">
<meta name="geo.region" content="GB">
<meta name="geo.placename" content="Reading, United Kingdom">
