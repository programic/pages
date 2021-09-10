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

<body class="theme-1 flex flex-col h-screen w-screen justify-between">
<livewire:atoms.header/>

<div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
    <livewire:atoms.section title="Info" slug="info"></livewire:atoms.section>
    <livewire:atoms.section title="About" slug="about">
        <livewire:organisms.info ></livewire:organisms.info>
    </livewire:atoms.section>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque a orci porta velit dignissim suscipit sit
        amet et tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        Integer vitae ex ac purus venenatis consectetur. Nam aliquet facilisis dui, in commodo tellus varius non.
        Morbi imperdiet porta metus, eget lacinia nunc tincidunt sed. Donec commodo mi ut rhoncus vulputate. Quisque
        euismod lorem sed arcu aliquam tincidunt. Aenean et ullamcorper arcu. Suspendisse elementum sit amet sapien
        et tempus. Aliquam condimentum pulvinar tellus vel eleifend. Aenean eros leo, vestibulum a tempor in,
        pellentesque vitae ex. Maecenas iaculis eros est, ac semper libero bibendum quis. Sed faucibus quis felis
        sed fermentum.
    </p>
    <p>
        Nullam quam purus, venenatis nec auctor nec, fringilla quis nulla. Interdum et malesuada fames ac ante ipsum
        primis in faucibus. Suspendisse sed imperdiet leo. Cras sed lectus fermentum, maximus nisl vitae,
        scelerisque turpis. Nam nec efficitur nisl. In hendrerit, justo eu viverra finibus, mauris nisi ornare
        tortor, eu dapibus neque velit nec elit. Nullam sed aliquet urna. Aliquam at gravida nibh, id laoreet mi.
        Etiam at hendrerit erat.
    </p>
    <p>
        Nam imperdiet a lectus congue porta. Suspendisse magna libero, cursus quis rutrum sit amet, sagittis sed
        diam. In ultrices mollis lorem, vitae tempus quam luctus vel. Duis sed fringilla dolor. Ut pretium massa et
        est semper laoreet. Interdum et malesuada fames ac ante ipsum primis in faucibus. In aliquam in sem vel
        elementum. Fusce aliquam in lectus in dapibus. Class aptent taciti sociosqu ad litora torquent per conubia
        nostra, per inceptos himenaeos.
    </p>
    </livewire:atoms.section>
    <livewire:atoms.section title="Tour" slug="tour">

    </livewire:atoms.section>
    <livewire:atoms.section title="Music" slug="music">
        <livewire:molecules.albums/>
    </livewire:atoms.section>
</div>

<livewire:atoms.footer/>
</body>
</html>
