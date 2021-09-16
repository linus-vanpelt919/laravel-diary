<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<head>
    <meta charset="UTF-8">
    <title>diary</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
 
<body>
    <div id="app">
    <router-link to="/">Home</router-link>
    <router-link to="login">Login</router-link>
        <router-view />
    </div>
</body>
 
</html>