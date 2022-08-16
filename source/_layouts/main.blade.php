<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

    <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}" />
    <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
    <meta property="og:url" content="{{ $page->getUrl() }}" />
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

    <link rel="home" href="{{ $page->baseUrl }}">
    <link rel="icon" href="/favicon.ico">
    <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

    @if ($page->production)
    <!-- Insert analytics code here -->
    @endif

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">

    <!-- Flowbite is a library of components built on top of the utility-classes from Tailwind CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    <!-- Flowbite script -->
    <script defer src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

    <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>
</head>

<body class="flex flex-col justify-between min-h-screen bg-gray-100 text-gray-800 leading-normal font-sans">
    <header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                    <img class="h-8 md:h-20 mr-3" src="/assets/img/logo.png" alt="{{ $page->siteName }} logo" />
                </a>
            </div>

            @include('_nav.menu')

            <div id="vue-search" class="flex flex-1 justify-end items-center">
                <search></search>

                <a href="#" target="_blank" class="rounded-md px-4 py-2 bg-green-700 text-white hover:bg-green-600 hover:text-white">Matricule-se</a>
                @include('_nav.menu-toggle')
            </div>
        </div>
    </header>

    @include('_nav.menu-responsive')

    <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
        @yield('body')
    </main>

    <footer class="mt-12" style="background-color: #1E3E3C;" role="contentinfo">
        <section class="container grid grid-cols-5 gap-8 mx-auto my-0 text-gray-300 py-16">
            <div class="leading-none" style="color: #4FA39D;">
                <img src="/assets/img/logo.png" alt="Logo {{ $page->siteName }}">
                <p>@lideremensinocampos</p>
                <p>(22) 99978-6105</p>
            </div>
            <div class="leading-none">
                <h3 class="uppercase" style="color: #4FA39D;">Título</h3>
                <p>Opção 01</p>
                <p>Opção 02</p>
                <p>Opção 03</p>
                <p>Opção 04</p>
                <p>Opção 05</p>
            </div>
            <div class="leading-none">
                <h3 class="uppercase" style="color: #4FA39D;">Título</h3>
                <p>Opção 01</p>
                <p>Opção 02</p>
                <p>Opção 03</p>
                <p>Opção 04</p>
                <p>Opção 05</p>
            </div>
            <div class="leading-none">
                <h3 class="uppercase" style="color: #4FA39D;">Título</h3>
                <p>Opção 01</p>
                <p>Opção 02</p>
                <p>Opção 03</p>
                <p>Opção 04</p>
                <p>Opção 05</p>
            </div>
            <div class="leading-none">
                <h3 class="uppercase" style="color: #4FA39D;">Título</h3>
                <p>Opção 01</p>
                <p>Opção 02</p>
                <p>Opção 03</p>
                <p>Opção 04</p>
                <p>Opção 05</p>
            </div>
        </section>

        <div class="w-full">
            @include('_components.newsletter-signup')
        </div>

        <span class="flex flex-col md:flex-row justify-center my-4" style="color: #4FA39D">&copy; 2022 Centro Educacional Líder de Ensino. Todos os Direitos Reservados</span>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>