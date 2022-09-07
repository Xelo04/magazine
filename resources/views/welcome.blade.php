<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;600&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit" async defer></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <title>Magazine</title>
</head>

<body>
    <div id="app">
        <main-vue></main-vue>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
