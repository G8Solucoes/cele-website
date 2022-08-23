@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
    {{-- @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <p class="text-gray-700 text-xl md:mt-0">{{ $page->author }}  •  {{ date('F j, Y', $page->date) }}</p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/blog/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif --}}

    <div class="bg-primary-color-500">
        <div class="container mx-auto my-0 py-16">
            <span><a href="/">Home</a> > <a href="/sobre">{{ $page->title }}</a></span>

            <h1 class="mb-0">{{ $page->title }}</h1>

            <span>Cursos de Beleza</span>
        </div>
    </div>

    <div class="container mx-auto" v-pre>
        @yield('content')
    </div>
@endsection
