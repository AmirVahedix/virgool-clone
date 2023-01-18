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
            <v-navigation-drawer permanent>
                <v-list color="transparent">
                    <v-list-item prepend-icon="mdi-view-dashboard" to="/login" active-color="red">
                        ورود به سایت
                    </v-list-item>
                    <v-list-item prepend-icon="mdi-account-box" to="/register" active-color="red">
                        ایجاد حساب کاربری
                    </v-list-item>
                </v-list>

                <template v-slot:append>
                    <div class="pa-2">
                        <v-btn block>
                            خروج
                        </v-btn>
                    </div>
                </template>
            </v-navigation-drawer>

            <v-app-bar>
                <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

                <v-toolbar-title>سیلینو</v-toolbar-title>
            </v-app-bar>

            <v-main>
                <router-view></router-view>
            </v-main>
        </v-locale-provider>
    </v-app>
</div>

@vite('resources/js/app.js')
</body>
</html>
