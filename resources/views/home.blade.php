<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/css/app.css')
</head>
<body>

<div id="app">
    <v-app id="app">
        <v-locale-provider rtl>
            <router-view></router-view>
        </v-locale-provider>
    </v-app>
</div>

@vite('resources/js/app.js')
</body>
</html>
