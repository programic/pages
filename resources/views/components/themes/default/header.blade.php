<header class="relative bg-indigo-800">
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="{{ url('img/background-2.png') }}" alt="">
        <div class="absolute inset-0 bg-gradient-to-b from-indigo-500 to-black mix-blend-multiply" aria-hidden="true"></div>
    </div>

    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">{{ $artist }}</h1>
        @if ($description)
            <p class="mt-6 text-xl text-indigo-100 max-w-3xl">{{ $description }}</p>
        @endif
    </div>
</header>
