<div class="max-w-3xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8 w-full space-y-8">
    <h2 class="text-4xl">Releases</h2>

    <div class="grid grid-cols-3 text-center">
        @foreach ($section->getData()['release'] as $release)
            <div class="space-y-2">
                <img src="{{ $release['cover_url'] }}" class="w-56 h-56" />

                <h3 class="text-gray-100 text-lg">{{ $release['name'] }}</h3>
            </div>
        @endforeach
    </div>
</div>
