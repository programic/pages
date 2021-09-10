<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/tailwind.css') }}">
    <style>[x-cloak] {
            display: none !important;
        }</style>
    @livewireStyles
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="flex flex-col h-screen w-screen justify-between bg-black text-white">
{{ view('components.themes.default.header', [
    'artist' => $site->name,
    'description' => $site->description,
]) }}
@foreach ($site->getContent()->getSections() as $section)
    {{ $section->render() }}
@endforeach
<livewire:atoms.footer/>


{{--    <livewire:atoms.section title="Info" slug="info"></livewire:atoms.section>--}}
{{--    <livewire:atoms.section title="About" slug="about">--}}
{{--        <livewire:organisms.info ></livewire:organisms.info>--}}
{{--    </livewire:atoms.section>--}}
{{--    </livewire:atoms.section>--}}
{{--    <livewire:atoms.section title="Tour" slug="tour">--}}

{{--    </livewire:atoms.section>--}}
{{--    <livewire:atoms.section title="Music" slug="music">--}}
{{--        <livewire:molecules.albums/>--}}
{{--    </livewire:atoms.section>--}}
</body>
</html>
