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
    <v-app id="inspire">
        <v-locale-provider rtl>
            <v-container>
                <v-row justify="space-between">
                    <v-row align="center" class="py-4">
                        <img src="{{ asset('assets/images/icon.svg') }}" class="h-12" alt="ویرگول"/>
                        <a href="" class="text-blue-500 hover:text-blue-600 mr-2">ویرگول چیست؟</a>
                    </v-row>
                    <v-row align="center" justify="end" class="py-4">
                        <v-btn icon="mdi-magnify" variant="text" color="grey"></v-btn>
                        <v-btn :to="{ name: 'login' }" variant="text" class="ml-3 mr-1">
                            ورود
                        </v-btn>
                        <v-btn :to="{ name: 'register' }" variant="flat" color="blue-darken-3">
                            ثبت نام
                        </v-btn>
                    </v-row>
                </v-row>
            </v-container>
        </v-locale-provider>
    </v-app>
</div>

@vite('resources/js/app.js')
</body>
</html>
