@extends('_layouts.main')

@section('body')
    {{-- <h1>{{ $page->title }}</h1>

    <div class="text-2xl border-b border-blue-200 mb-6 pb-10">
        @yield('content')
    </div>

    @foreach ($page->posts($posts) as $post)
        @include('_components.post-preview-inline')

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach --}}

    <div class="bg-primary-color-500">
        <div class="container mx-auto my-0 py-16">
            <span class="text-white"><a href="/">Home</a> > <a href="{{ $page->getUrl() }}">{{ $page->title }}</a></span>
            <h1 class="mb-0 text-primary-color-700">{{ $page->title }}</h1>
            <span>Encontre o curso que combina com você</span>
        </div>
    </div>

    <div class="container mx-auto text-2xl border-b border-primary-color-500 mb-6 pb-10">
        @yield('content')
    </div>

    <div class="container mx-auto grid md:grid-cols-1 grid-cols-2 gap-2">
        @foreach ($page->posts($posts) as $post)
            @include('_components.post-preview-inline')
        @endforeach
    </div>
@stop