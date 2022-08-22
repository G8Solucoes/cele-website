@extends('_layouts.main')

@section('body')
    {{-- @foreach ($posts->where('featured', true) as $featuredPost)
         <div class="w-full mb-6">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
            @endif

            <p class="text-gray-700 font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif 
    @endforeach
    --}}

    <div class="grid lg:grid-cols-2 grid-cols-1 h-96 overflow-hidden" style="background-color: #ffa303;">
        <div class="flex flex-col my-0 mx-auto w-9/12 justify-center text-white">
            <h2 class="text-5xl text-white">Diversos cursos nas áreas de estética, indústria, saúde e serviço!Conheça todos os cursos oferecidos.</h2>
            <p class="text-2xl text-white">Encontre o curso perfeito para você!</p>
        </div>
        <div class="bg-cover-image-01 bg-cover hidden lg:block"></div>
    </div>

    <div class="container w-full py-16 my-0 mx-auto" style="color: #4FA39D">
        <div class="text-center">
            <h2 class="m-0" style="color: #4FA39D">Metodologia de ensino</h2>
            <p class="text-2xl">Utilizamos as ferramentas mais modernas no mercado para trazer o que há de melhor no ensino, com exposição de temas e utilização de ferramentas interativas, propiciando ao aluno o conhecimento necessário no assunto, com exposição de casos reais e ambientes simulados, estimulando o conhecimento e o alto aprendizado.</p>
        </div>
    </div>

    <div class="grid lg:grid-cols-2 grid-cols-1 h-96 overflow-hidden" style="background-color: #4FA39D;">
        <div class="flex flex-col my-0 mx-auto w-9/12 justify-center text-white">
            <h2 class="text-5xl text-white">Por que investir em um curso profissionalizante na líder?</h2>
            <p class="text-xl">Uma formação profissionalizante colabora para que os estudantes adquiram várias competências aplicáveis em um ramo de atuação. Assim, eles se tornam aptos a desempenhar mais de uma função, ampliando suas possibilidades de carreira.</p>
        </div>
        <div class="bg-cover-image-02 bg-cover bg-right hidden lg:block"></div>
        {{-- <div>
            <img src="/assets/img/cover-image-02.webp" alt="Imagem" class="hidden lg:block"/>
        </div> --}}
    </div>

    <div class="container w-full py-16 my-0 mx-auto" style="color: #4FA39D">
        <div class="text-center">
            <h2 class="m-0" style="color: #4FA39D">Nossa história</h2>
            <p class="text-2xl">Somos um novo conceito em educação, nascemos com a vontade de inovar e trazer aos nossos alunos o que há de mais moderno e inovador no mercado, trazendo novas experiencias e buscando aprimorar o sistema de ensino frente aos novos desafios.</p>
        </div>
    </div>

    {{-- <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6"> --}}

    {{-- @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach --}}
@stop
