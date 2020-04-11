<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! Settings::meta() !!}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body itemscope itemtype="https://schema.org/WebPage">

    <meta itemprop="accessibilityControl" content="fullKeyboardControl">
    <meta itemprop="accessibilityControl" content="fullMouseControl">
    <meta itemprop="accessibilityHazard" content="noFlashingHazard">
    <meta itemprop="accessibilityHazard" content="noMotionSimulationHazard">
    <meta itemprop="accessibilityHazard" content="noSoundHazard">
    <meta itemprop="accessibilityAPI" content="ARIA">
    <div id="app">
        @includeIf('partial.header')
        @includeIf('partial.navigation')
        @yield('content')
        @includeIf('partial.footer')
        @includeIf('partial.jsonLD')
    </div>


    @yield('footerJs')

</body>

</html>
