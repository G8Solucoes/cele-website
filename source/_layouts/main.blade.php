<!DOCTYPE html>
<html lang="pt-br">

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
    <header>
        <div class="flex items-center shadow bg-white border-b h-24 py-4 z-10 relative">
            <div class="container flex items-center mx-auto">
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
        </div>
        <!-- Dropdown menus -->
        <div id="sobreToggle" class="hidden w-44 bg-gray-700 divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 70px);">
            <ul class="py-1 text-sm" aria-labelledby="sobre">
                <a href="/sobre" class="text-white hover:text-white block py-2 px-4">Miss??o</a>
                <a href="/sobre" class="text-white hover:text-white block py-2 px-4">Vis??o</a>
                <a href="/sobre" class="text-white hover:text-white block py-2 px-4">Valores</a>
            </ul>
        </div>

        <div id="cursosToggle" class="hidden w-44 bg-gray-700 divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 70px);">
            <ul class="py-1 text-sm" aria-labelledby="cursos">
                <a href="/categories/beleza-estetica/" class="text-white hover:text-white block py-2 px-4">Beleza e Est??tica</a>
                <a href="/categories/industria/" class="text-white hover:text-white block py-2 px-4">??rea da Industria</a>
                <a href="/categories/saude/" class="text-white hover:text-white block py-2 px-4">??rea da Sa??de</a>
                <a href="/categories/servicos/" class="text-white hover:text-white block py-2 px-4">??rea de Servi??os</a>
            </ul>
        </div>

        <div id="contatosToggle" class="hidden w-44 bg-gray-700 divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 70px);">
            <ul class="py-1 text-sm" aria-labelledby="contatos">
                <a href="/contato" class="text-white hover:text-white block py-2 px-4">Endere??o</a>
                <a href="/contato" class="text-white hover:text-white block py-2 px-4">E-mail</a>
                <a href="/contato" class="text-white hover:text-white block py-2 px-4">Whatsapp</a>
                <a href="/contato" class="text-white hover:text-white block py-2 px-4">Fale Conosco</a>
            </ul>
        </div>

        <div id="oSiteToggle" class="hidden w-44 bg-gray-700 divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 70px);">
            <ul class="py-1 text-sm" aria-labelledby="oSite">
                <a href="#" class="text-white hover:text-white block py-2 px-4">Mapa do Site</a>
            </ul>
        </div>
    </header>

    @include('_nav.menu-responsive')

    <main role="main" class="flex-auto w-full"> {{-- max-w-4xl py-16 px-6 mx-auto container--}}
        @yield('body')
    </main>

    <footer class="bg-primary-color-600">
        <section class="container grid grid-cols-4 gap-16 mx-auto my-0 text-gray-300 py-16">
            <div style="line-height: 0;">
                <img src="/assets/img/logo.png" alt="Logo {{ $page->siteName }}">
                <p>@lideremensinocampos</p>
                <p>(22) 99978-6105</p>
            </div>
            <div style="line-height: 0;">
                <h3 class="uppercase text-primary-color-500">A Escola</h3>
                <p>Miss??o</p>
                <p>Vis??o</p>
                <p>Valores</p>
                <p>Mapa do Site</p>
            </div>
            <div style="line-height: 0;">
                <h3 class="uppercase text-primary-color-500">Cursos</h3>
                <p>Beleza e Est??tica</p>
                <p>Ind??stria</p>
                <p>Sa??de</p>
                <p>Administrativo</p>
            </div>
            <div style="line-height: 0;">
                <h3 class="uppercase text-primary-color-500">Contato</h3>
                <p>Endere??o</p>
                <p>Email</p>
                <p>Whatsapp</p>
                <p>Fale Conosco</p>
            </div>
        </section>

        <div class="w-full">
            @include('_components.newsletter-signup')
        </div>

        <span class="flex flex-col md:flex-row justify-center my-4" style="color: #4FA39D">&copy; 2022 Centro Educacional L??der de Ensino. Todos os Direitos Reservados</span>
    </footer>

    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

    @stack('scripts')
</body>

</html>