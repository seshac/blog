<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Home | Sesha.in</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('images/icons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/icons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/icons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/icons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"  href="{{ asset('images/icons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/icons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/icons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/apple-icon-180x180.png') }}">
     <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/android-icon-192x192') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/icons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon-16x16.png') }}">
    <meta name="application-name" content="Sesha.in"/>
    <meta name="theme-color" content="#4dc0b4">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-normal bg-gray-200">
<div class="flex flex-col " >
    <div class="m-2 flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div class="rounded overflow-hidden shadow-lg my-2 w-1/2 sm:w-auto md:w-2/4 lg:w-32 xl:w-3/4">
                <img  class="w-auto h-20 w-full" src="{{ asset('images/logo.svg') }}" alt="Sesha.in">
                <div class="px-6 py-4">
                    <h2 class="font-bold text-xl  p-2">  About </h2>
                    <p class="text-grey-darker text-base p-2">
                        I'm Seshadri, a full stack web developer. I'm super passionate about web application development. Working as a full-stack developer at <a target="_blank" href="https://rathiraayurveda.com/ "> Rathira Ayurveda </a> and previously worked as a web developer at <a href="https://www.hioxindia.com/">Hiox</a>
                    </p>
                    <p class="text-grey-darker text-base p-2">You can find me  on <a target="_blank" href="https://github.com/seshac">Github</a> and <a href="https://twitter.com/seshadri008">Twitter</a>, or just send me an <a  target="_blank" href="mailto:seshadriece008@gmail.com">email</a> if you need to contact me!
                    </p>
                    </p>
                </div>
                <div class="px-6 py-4">
                    <h4 class="p-2"> Specialized In</h4>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#Laravel</span>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#Vuejs</span>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#PHP</span>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#MYSQL</span>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#Javascript</span>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#Jquery</span>
                    <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#Linux</span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
