<div class="bg-primary-color-500 p-4 rounded-lg">
    <img src="{{ $post->cover_image }}" alt="" srcset="" class="mb-3 rounded-lg">

    <h2 class="text-3xl mt-0 text-center">
        <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="font-extrabold">
            {{ $post->title }}
        </a>
    </h2>

    <div class="w-full flex items-center justify-evenly">
        <button data-popover-target="popover-bottom" data-popover-placement="bottom" type="button" class="text-primary-color-500 hover:text-primary-color-500 mb-3 bg-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z" />
            </svg>
        </button>

        <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="text-primary-color-500 hover:text-primary-color-500 mb-3 bg-white hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm px-5 py-2.5 text-center">
            Matricule-se
        </a>
    </div>
    
    <div id="popover-bottom" role="tooltip" class="inline-block absolute invisible z-10 w-64 text-sm font-light text-gray-500 bg-white rounded-lg border border-gray-200 shadow-sm opacity-0 transition-opacity duration-300">
        <div class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
            <h3 class="font-semibold text-gray-900">Popover bottom</h3>
        </div>
        <div class="py-2 px-3">
            <p>{!! $post->getExcerpt(200) !!}</p>
        </div>
        <div data-popper-arrow></div>
    </div>
</div>
