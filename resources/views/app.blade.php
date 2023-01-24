<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

    <title>جایی برای نوشتن</title>

    @vite('resources/css/app.css')
</head>
<body>

<div id="app">

    <v-app>
        <v-locale-provider rtl>
            <router-view></router-view>
            <div id="modals"></div>
        </v-locale-provider>
    </v-app>
</div>

@vite('resources/js/app.js')
</body>
</html>
