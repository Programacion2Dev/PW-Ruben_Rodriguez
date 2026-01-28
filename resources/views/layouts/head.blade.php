<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Meta-tags dinámicos -->
@hasSection('meta') @yield('meta') @else
    <!-- Meta-tags por defecto -->
    <title>Dr. Ruben Rodriguez - Ginecologo En Tijuana</title>
    <meta name="description" content="El ginecólogo en Tijuana, el Dr. Ruben Rodriguez brinda atención profesional en el diagnóstico y tratamientos ginecológicos. ¡Agenda tu cita hoy mismo!">
    <meta name="keywords" content="Ginecologo, GinecoObstetra, Ginecologia, Tijuana, Dr Ruben Rodriguez, Control Prenatal, Endometriosis, Quistes de ovario, Rejuvenecimiento vaginal, Papanicolaou, Menopasta, Labioplastia, Miomas">
    <meta name="author" content="Doctor Especialistas">
@endif

<!-- Open Graph -->
@hasSection('og') @yield('og') @else
    <meta property="og:title" content="Dr. Ruben Rodriguez - Ginecologo En Tijuana">
    <meta property="og:description" content="El ginecólogo en Tijuana, el Dr. Ruben Rodriguez brinda atención profesional en el diagnóstico y tratamientos ginecológicos. ¡Agenda tu cita hoy mismo!">
    <meta property="og:image" content="{{ asset('imgs/img-logo-header-doctor-especialistas.png') }}">
    <meta property="og:url" content="{{ url(config('app.url')) }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Clínica Médica">
    <meta property="og:locale" content="es_ES">
@endif

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Dr. Ruben Rodriguez - Ginecologo En Tijuana">
<meta name="twitter:description" content="El ginecólogo en Tijuana, el Dr. Ruben Rodriguez brinda atención profesional en el diagnóstico y tratamientos ginecológicos. ¡Agenda tu cita hoy mismo!">
<meta name="twitter:image" content="{{ asset('imgs/img-logo-header-doctor-especialistas.png') }}">

<!-- Schema.org -->
@hasSection('schema') @yield('schema') @else
    <script type="application/ld+json">
    @php
        $schemaData = [
            "@context" => "https://schema.org",
            "@type" => "MedicalOrganization",
            "name" => "Dr. Ruben Rodriguez - Ginecologo En Tijuana",
            "url" => url(config('app.url')),
            "logo" => asset('images/img-logo-header-doctor-especialistas.png'),
            "description" => "El ginecólogo en Tijuana, el Dr. Ruben Rodriguez brinda atención profesional en el diagnóstico y tratamientos ginecológicos. ¡Agenda tu cita hoy mismo!",
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => "Antonio Caso 2055, Zona Urbana Rio Tijuana",
                "addressLocality" => "Tijuana",
                "addressRegion" => "BC",
                "postalCode" => "22010",
                "addressCountry" => "MX"
            ],
            "telephone" => "+5216644783108"
        ];
    @endphp
    {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>
@endif

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico?v=2') }}">

<link href="{{ asset('/manifest.json') }}" rel="manifest">
<script src="/sw.js?v2"></script>

<!-- Vite CSS -->
@vite(['resources/css/app.scss'])

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Google reCAPTCHA v3 -->
<script src="https://www.google.com/recaptcha/enterprise.js?render={{ config('services.recaptcha.site_key') }}"></script>