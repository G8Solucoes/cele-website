<nav class="hidden lg:flex items-center justify-end text-lg">
  {{-- <a title="{{ $page->siteName }} Blog" href="/blog" class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
  Blog
  </a>

  <a title="{{ $page->siteName }} About" href="/about" class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
    About
  </a>

  <a title="{{ $page->siteName }} Contact" href="/contact" class="ml-6 text-gray-700 hover:text-blue-600 {{ $page->isActive('/contact') ? 'active text-blue-600' : '' }}">
    Contact
  </a> --}}

  {{-- Dropdown buttons --}}
  <button id="aLider" data-dropdown-toggle="aLiderToggle" class="text-gray-500 bg-transparent font-medium text-xl px-4 py-2.5 text-center inline-flex items-center" type="button">
    A Líder<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
  </button>
  <button id="cursos" data-dropdown-toggle="cursosToggle" class="text-gray-500 bg-transparent font-medium text-xl px-4 py-2.5 text-center inline-flex items-center" type="button">
    Cursos<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
  </button>
  <button id="contatos" data-dropdown-toggle="contatosToggle" class="text-gray-500 bg-transparent font-medium text-xl px-4 py-2.5 text-center inline-flex items-center" type="button">
    Contatos<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
  </button>
  <button id="oSite" data-dropdown-toggle="oSiteToggle" class="text-gray-500 bg-transparent font-medium text-xl px-4 py-2.5 text-center inline-flex items-center" type="button">
    O site<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
  </button>

  <!-- Dropdown menus -->
  <div id="oSiteToggle" class="hidden z-10 w-44 bg-gray-700 divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 70px);">
    <ul class="py-1 text-sm" aria-labelledby="oSite">
        <a href="#" class="text-white hover:text-white block py-2 px-4">Mapa do Site</a>
    </ul>
  </div>

  <div id="contatosToggle" class="hidden z-10 w-44 bg-gray-700 divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 70px);">
    <ul class="py-1 text-sm" aria-labelledby="contatos">
        <a href="#" class="text-white hover:text-white block py-2 px-4">Endereço</a>
        <a href="#" class="text-white hover:text-white block py-2 px-4">E-mail</a>
        <a href="#" class="text-white hover:text-white block py-2 px-4">Whatsapp</a>
        <a href="#" class="text-white hover:text-white block py-2 px-4">Fale Conosco</a>
    </ul>
  </div>

  <div id="cursosToggle" class="hidden z-10 w-44 bg-gray-700 divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 70px);">
    <ul class="py-1 text-sm" aria-labelledby="cursos">
        <a href="#" class="text-white hover:text-white block py-2 px-4">Beleza e Estética</a>
        <a href="#" class="text-white hover:text-white block py-2 px-4">Àrea da Industria</a>
        <a href="#" class="text-white hover:text-white block py-2 px-4">Àrea da Saúde</a>
        <a href="#" class="text-white hover:text-white block py-2 px-4">Àrea de Serviços</a>
    </ul>
  </div>

  <div id="aLiderToggle" class="hidden z-10 w-44 bg-gray-700 divide-y divide-gray-100 shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 70px);">
    <ul class="py-1 text-sm" aria-labelledby="aLider">
        <a href="#" class="text-white hover:text-white block py-2 px-4">Missão</a>
        <a href="#" class="text-white hover:text-white block py-2 px-4">Visão</a>
        <a href="#" class="text-white hover:text-white block py-2 px-4">Valores</a>
    </ul>
  </div>
</nav>