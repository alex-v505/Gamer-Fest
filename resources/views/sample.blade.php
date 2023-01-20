<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Styles -->
    <style>
    /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    a {
        background-color: transparent
    }

    [hidden] {
        display: none
    }

    html {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        line-height: 1.5
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
        border: 0 solid #e2e8f0
    }

    a {
        color: inherit;
        text-decoration: inherit
    }

    svg,
    video {
        display: block;
        vertical-align: middle
    }

    video {
        max-width: 100%;
        height: auto
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-gray-100 {
        --tw-bg-opacity: 1;
        background-color: rgb(243 244 246 / var(--tw-bg-opacity))
    }

    .border-gray-200 {
        --tw-border-opacity: 1;
        border-color: rgb(229 231 235 / var(--tw-border-opacity))
    }

    .border-t {
        border-top-width: 1px
    }

    .flex {
        display: flex
    }

    .grid {
        display: grid
    }

    .hidden {
        display: none
    }

    .items-center {
        align-items: center
    }

    .justify-center {
        justify-content: center
    }

    .font-semibold {
        font-weight: 600
    }

    .h-5 {
        height: 1.25rem
    }

    .h-8 {
        height: 2rem
    }

    .h-16 {
        height: 4rem
    }

    .text-sm {
        font-size: .875rem
    }

    .text-lg {
        font-size: 1.125rem
    }

    .leading-7 {
        line-height: 1.75rem
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto
    }

    .ml-1 {
        margin-left: .25rem
    }

    .mt-2 {
        margin-top: .5rem
    }

    .mr-2 {
        margin-right: .5rem
    }

    .ml-2 {
        margin-left: .5rem
    }

    .mt-4 {
        margin-top: 1rem
    }

    .ml-4 {
        margin-left: 1rem
    }

    .mt-8 {
        margin-top: 2rem
    }

    .ml-12 {
        margin-left: 3rem
    }

    .-mt-px {
        margin-top: -1px
    }

    .max-w-6xl {
        max-width: 72rem
    }

    .min-h-screen {
        min-height: 100vh
    }

    .overflow-hidden {
        overflow: hidden
    }

    .p-6 {
        padding: 1.5rem
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem
    }

    .pt-8 {
        padding-top: 2rem
    }

    .fixed {
        position: fixed
    }

    .relative {
        position: relative
    }

    .top-0 {
        top: 0
    }

    .right-0 {
        right: 0
    }

    .shadow {
        --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
        --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .text-center {
        text-align: center
    }

    .text-gray-200 {
        --tw-text-opacity: 1;
        color: rgb(229 231 235 / var(--tw-text-opacity))
    }

    .text-gray-300 {
        --tw-text-opacity: 1;
        color: rgb(209 213 219 / var(--tw-text-opacity))
    }

    .text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity))
    }

    .text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity))
    }

    .text-gray-600 {
        --tw-text-opacity: 1;
        color: rgb(75 85 99 / var(--tw-text-opacity))
    }

    .text-gray-700 {
        --tw-text-opacity: 1;
        color: rgb(55 65 81 / var(--tw-text-opacity))
    }

    .text-gray-900 {
        --tw-text-opacity: 1;
        color: rgb(17 24 39 / var(--tw-text-opacity))
    }

    .underline {
        text-decoration: underline
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .w-5 {
        width: 1.25rem
    }

    .w-8 {
        width: 2rem
    }

    .w-auto {
        width: auto
    }

    .grid-cols-1 {
        grid-template-columns: repeat(1, minmax(0, 1fr))
    }

    .wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
        grid-auto-rows: minmax(100px, auto);
    }

    .one {
        grid-column: 3 / 5;
        grid-row: 2;
    }

    .two {
        grid-column: 4;
        grid-row: 1;
    }

    .three {
        grid-column: 1 / 3;
        grid-row: 1;
    }

    .four {
        grid-column: 1/4;
        grid-row: 3;
    }

    .five {
        grid-column: 1;
        grid-row: 3;
    }

    .six {
        grid-column: 3;
        grid-row: 3;
    }

    .seven {
        grid-column: 2;
        grid-row: 3;
    }

    .btn-neon {
        position: relative;
        display: inline-block;
        padding: 15px 30px;
        color: #fff;
        letter-spacing: 4px;
        text-decoration: none;
        font-size: 24px;
        overflow: hidden;
        transition: 0.2s;
    }

    .btn-neon:hover {
        background: #a945c7;
        box-shadow: 0 0 10px #a945c7, 0 0 40px #a945c7, 0 0 80px #a945c7;
        transition-delay: 1s;
    }

    .btn-neon span {
        position: absolute;
        display: block;
    }

    #span1 {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #a945c7);
    }

    .btn-neon:hover #span1 {
        left: 100%;
        transition: 1s;
    }

    #span3 {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #a945c7);
    }

    .btn-neon:hover #span3 {
        right: 100%;
        transition: 1s;
        transition-delay: 0.5s;
    }

    #span2 {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #a945c7);
    }

    .btn-neon:hover #span2 {
        top: 100%;
        transition: 1s;
        transition-delay: 0.25s;
    }

    #span4 {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #a945c7);
    }

    .btn-neon:hover #span4 {
        bottom: 100%;
        transition: 1s;
        transition-delay: 0.75s;
    }

    .parent {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .div1 {
        grid-area: 1 / 1 / 3 / 4;
    }

    .div2 {
        grid-area: 3 / 1 / 6 / 4;
    }

    .div3 {
        grid-area: 1 / 4 / 6 / 6;
    }

    .fxform {
        margin: 20px 20px 0;
        padding: 0 0 20px;
    }

    .fxform fieldset {
        border: none;
        margin: 0 0 7px;
        padding: 0 0 10px;
    }

    .fxform legend {
        line-height: 100%;
        text-transform: uppercase;
        font-family: Lucida Grande, Tahoma, Arial, Verdana, sans-serif;
        font-size: 9pt;
        font-weight: 700;
        color: #555;
        margin-bottom: 10px;
        padding: 0;
    }

    .fxform fieldset div {
        position: relative;
        margin-top: 1px;
        padding: 10px 5px 8px 9px;
    }

    .fxform label {
        color: #FFF;
        font-size: 95%;
        font-weight: 700;
        margin-right: 10px;
    }

    .fxform .guideline {
        background: #F5F5F5 none repeat scroll 0 0;
        border: 1px solid #E6E6E6;
        color: #444;
        font-size: 80%;
        left: 100%;
        line-height: 130%;
        position: absolute;
        top: 0;
        visibility: hidden;
        width: 42%;
        z-index: 1000;
        margin: 0 0 0 8px;
        padding: 8px 10px 9px;
    }

    .fxform input[type=text],
    .fxform input[type=password],
    .fxform select,
    .fxform textarea {
        height: 22px;
        font-size: 11pt;
        margin-top: 5px;
        background: #FFF url(/images/shadow.gif) repeat-x scroll center top;
        color: #333;
        width: 350px;
        border-color: #7C7C7C #c3c3c3 #ddd;
        border-style: solid;
        border-width: 1px;
    }

    .fxform input[type=submit],
    .fxform input[type=button] {
        color: #666;
        background: #e4e4e4;
        text-align: center;
        border-color: #c3c3c3;
        border-style: solid;
    }

    .fxform .choice {
        color: #444;
        display: block;
        font-size: 100%;
        line-height: 1.4em;
        margin: -25px 0 0 20px;
        padding: 4px 0 5px;
    }

    .fxform ul {
        list-style: none;
        padding: 5px 0 0 10px;
    }

    .fxform .error {
        color: red;
    }

    .fxform .errorField {
        border: 1px solid red !important;
    }

    .fxform fieldset div:hover {
        background-color: #8d98a3;
    }

    .fxform div:hover .guideline,
    form div:focus .guideline {
        visibility: visible;
    }

    .editor div {
        margin: 0 !important;
        padding: 0 !important;
    }

    #texto {
        height: 150px;
        width: 500px;
    }

    @import url("https://fonts.googleapis.com/css2?family=Baloo+2&display=swap");
    $main-green: #79dd09 !default;
    $main-green-rgb-015: rgba(121, 221, 9, 0.1) !default;
    $main-yellow: #bdbb49 !default;
    $main-yellow-rgb-015: rgba(189, 187, 73, 0.1) !default;
    $main-red: #bd150b !default;
    $main-red-rgb-015: rgba(189, 21, 11, 0.1) !default;
    $main-blue: #0076bd !default;
    $main-blue-rgb-015: rgba(0, 118, 189, 0.1) !default;

    /* This pen */
    body {
        font-family: "Baloo 2", cursive;
        font-size: 16px;
        color: #ffffff;
        text-rendering: optimizeLegibility;
        font-weight: initial;
    }

    .dark {
        background: rgba(0, 0, 0, 0.8);

    }


    .light {
        background: #f3f5f7;
    }

    a,
    a:hover {
        text-decoration: none;
        transition: color 0.3s ease-in-out;
    }

    #pageHeaderTitle {
        margin: 2rem 0;
        text-transform: uppercase;
        text-align: center;
        font-size: 2.5rem;
    }

    /* Cards */
    .postcard {
        flex-wrap: wrap;
        display: flex;

        box-shadow: 0 4px 21px -12px rgba(0, 0, 0, 0.66);
        border-radius: 10px;
        margin: 0 0 2rem 0;
        overflow: hidden;
        position: relative;
        color: #ffffff;

        &.dark {
            background-color: #18151f;
        }

        &.light {
            background-color: #e1e5ea;
        }

        .t-dark {
            color: #18151f;
        }

        a {
            color: inherit;
        }

        h1,
        .h1 {
            margin-bottom: 0.5rem;
            font-weight: 500;
            line-height: 1.2;
        }

        .small {
            font-size: 80%;
        }

        .postcard__title {
            font-size: 1.75rem;
        }

        .postcard__img {
            max-height: 180px;
            width: 100%;
            object-fit: cover;
            position: relative;
        }

        .postcard__img_link {
            display: contents;
        }

        .postcard__bar {
            width: 50px;
            height: 10px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: #424242;
            transition: width 0.2s ease;
        }

        .postcard__text {
            padding: 1.5rem;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .postcard__preview-txt {
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: justify;
            height: 100%;
        }

        .postcard__tagbox {
            display: flex;
            flex-flow: row wrap;
            font-size: 14px;
            margin: 20px 0 0 0;
            padding: 0;
            justify-content: center;

            .tag__item {
                display: inline-block;
                background: rgba(83, 83, 83, 0.4);
                border-radius: 3px;
                padding: 2.5px 10px;
                margin: 0 5px 5px 0;
                cursor: default;
                user-select: none;
                transition: background-color 0.3s;

                &:hover {
                    background: rgba(83, 83, 83, 0.8);
                }
            }
        }

        &:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(-70deg, #424242, transparent 50%);
            opacity: 1;
            border-radius: 10px;
        }

        &:hover .postcard__bar {
            width: 100px;
        }
    }

    @media screen and (min-width: 769px) {
        .postcard {
            flex-wrap: inherit;

            .postcard__title {
                font-size: 2rem;
            }

            .postcard__tagbox {
                justify-content: start;
            }

            .postcard__img {
                max-width: 300px;
                max-height: 100%;
                transition: transform 0.3s ease;
            }

            .postcard__text {
                padding: 3rem;
                width: 100%;
            }

            .media.postcard__text:before {
                content: "";
                position: absolute;
                display: block;
                background: #18151f;
                top: -20%;
                height: 130%;
                width: 55px;
            }

            &:hover .postcard__img {
                transform: scale(1.1);
            }

            &:nth-child(2n+1) {
                flex-direction: row;
            }

            &:nth-child(2n+0) {
                flex-direction: row-reverse;
            }

            &:nth-child(2n+1) .postcard__text::before {
                left: -12px !important;
                transform: rotate(4deg);
            }

            &:nth-child(2n+0) .postcard__text::before {
                right: -12px !important;
                transform: rotate(-4deg);
            }
        }
    }

    @media screen and (min-width: 1024px) {
        .postcard__text {
            padding: 2rem 3.5rem;
        }

        .postcard__text:before {
            content: "";
            position: absolute;
            display: block;

            top: -20%;
            height: 130%;
            width: 55px;
        }

        .postcard.dark {
            .postcard__text:before {
                background: #18151f;
            }
        }

        .postcard.light {
            .postcard__text:before {
                background: #e1e5ea;
            }
        }
    }

    /* COLORS */
    .postcard .postcard__tagbox .green.play:hover {
        background: $main-green;
        color: black;
    }

    .green .postcard__title:hover {
        color: $main-green;
    }

    .green .postcard__bar {
        background-color: $main-green;
    }

    .green::before {
        background-image: linear-gradient(-30deg,
                $main-green-rgb-015,
                transparent 50%);
    }

    .green:nth-child(2n)::before {
        background-image: linear-gradient(30deg, $main-green-rgb-015, transparent 50%);
    }

    .postcard .postcard__tagbox .blue.play:hover {
        background: $main-blue;
    }

    .blue .postcard__title:hover {
        color: $main-blue;
    }

    .blue .postcard__bar {
        background-color: $main-blue;
    }

    .blue::before {
        background-image: linear-gradient(-30deg, $main-blue-rgb-015, transparent 50%);
    }

    .blue:nth-child(2n)::before {
        background-image: linear-gradient(30deg, $main-blue-rgb-015, transparent 50%);
    }

    .postcard .postcard__tagbox .red.play:hover {
        background: $main-red;
    }

    .red .postcard__title:hover {
        color: $main-red;
    }

    .red .postcard__bar {
        background-color: $main-red;
    }

    .red::before {
        background-image: linear-gradient(-30deg, $main-red-rgb-015, transparent 50%);
    }

    .red:nth-child(2n)::before {
        background-image: linear-gradient(30deg, $main-red-rgb-015, transparent 50%);
    }

    .postcard .postcard__tagbox .yellow.play:hover {
        background: $main-yellow;
        color: black;
    }

    .yellow .postcard__title:hover {
        color: $main-yellow;
    }

    .yellow .postcard__bar {
        background-color: $main-yellow;
    }

    .yellow::before {
        background-image: linear-gradient(-30deg,
                $main-yellow-rgb-015,
                transparent 50%);
    }

    .yellow:nth-child(2n)::before {
        background-image: linear-gradient(30deg,
                $main-yellow-rgb-015,
                transparent 50%);
    }

    @media screen and (min-width: 769px) {
        .green::before {
            background-image: linear-gradient(-80deg,
                    $main-green-rgb-015,
                    transparent 50%);
        }

        .green:nth-child(2n)::before {
            background-image: linear-gradient(80deg,
                    $main-green-rgb-015,
                    transparent 50%);
        }

        .blue::before {
            background-image: linear-gradient(-80deg,
                    $main-blue-rgb-015,
                    transparent 50%);
        }

        .blue:nth-child(2n)::before {
            background-image: linear-gradient(80deg, $main-blue-rgb-015, transparent 50%);
        }

        .red::before {
            background-image: linear-gradient(-80deg, $main-red-rgb-015, transparent 50%);
        }

        .red:nth-child(2n)::before {
            background-image: linear-gradient(80deg, $main-red-rgb-015, transparent 50%);
        }

        .yellow::before {
            background-image: linear-gradient(-80deg,
                    $main-yellow-rgb-015,
                    transparent 50%);
        }

        .yellow:nth-child(2n)::before {
            background-image: linear-gradient(80deg,
                    $main-yellow-rgb-015,
                    transparent 50%);
        }
    }


    @media (min-width:640px) {
        .sm\:rounded-lg {
            border-radius: .5rem
        }

        .sm\:block {
            display: block
        }

        .sm\:items-center {
            align-items: center
        }

        .sm\:justify-start {
            justify-content: flex-start
        }

        .sm\:justify-between {
            justify-content: space-between
        }

        .sm\:h-20 {
            height: 5rem
        }

        .sm\:ml-0 {
            margin-left: 0
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .sm\:pt-0 {
            padding-top: 0
        }

        .sm\:text-left {
            text-align: left
        }

        .sm\:text-right {
            text-align: right
        }
    }

    @media (min-width:768px) {
        .md\:border-t-0 {
            border-top-width: 0
        }

        .md\:border-l {
            border-left-width: 1px
        }

        .md\:grid-cols-2 {
            grid-template-columns: repeat(2, minmax(0, 1fr))
        }
    }

    @media (min-width:1024px) {
        .lg\:px-8 {
            padding-left: 2rem;
            padding-right: 2rem
        }
    }

    @media (prefers-color-scheme:dark) {
        .dark\:bg-gray-800 {
            --tw-bg-opacity: 1;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity))
        }

        .dark\:bg-gray-900 {
            --tw-bg-opacity: 1;
            background-color: rgb(17 24 39 / var(--tw-bg-opacity))
        }

        .dark\:border-gray-700 {
            --tw-border-opacity: 1;
            border-color: rgb(55 65 81 / var(--tw-border-opacity))
        }

        .dark\:text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .dark\:text-gray-400 {
            --tw-text-opacity: 1;
            color: rgb(156 163 175 / var(--tw-text-opacity))
        }

        .dark\:text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .bg {
            /* The image used */
            background-image: url("{{ url('images/fondo.png') }}");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    }
    </style>

    <style>
    body {
        font-family: 'Nunito', sans-serif;
    }
    </style>
</head>

<body>

    <div class="relative  items-top min-h-screen bg bg-gray-100 dark:bg-gray-900  py-4 sm:pt-0">

        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent  ">
            <img src="{{ url('images/gamer_fest.png') }}" width="100" height="100">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item align-self-end">
                        @if (Route::has('login'))
                        @auth
                        <a class="nav-link" href="{{ url('/dash') }}">Dashboard</a>
                        @else
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                        @endif
                        @endauth
                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{ url('views/productos.blade.php') }}">Productos</a>

                    </li>
                    <li class="nav-item">

                        <a class="nav-link" href="{{ url('views/normativa.blade.php') }}">Normativa</a>

                    </li>

                </ul>
            </div>
        </nav>
        <section class="dark">
            <div class="container py-4">
                <h1 class="postcard__title blue" style="color:rgba(255, 255, 255,100);" id="pageHeaderTitle">Gamer Fest
                </h1>

                <article class="postcard dark blue">
                    <a class="postcard__img_link">
                        <div class="map-responsive">

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.2120238450116!2d-78.58828638569456!3d-0.9988702992713584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d4639e3fb9755f%3A0x22fe7f63301b5fee!2sESPE%20-%20Campus%20Belisario%20Quevedo!5e0!3m2!1ses!2sec!4v1669608261033!5m2!1ses!2sec"
                                width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title blue">Ubicacion del evento</h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                                <i class="fas fa-calendar-alt mr-2"></i>
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">El evento "Gamer Fest" se realizara en el campus Gral.
                            Guillermo Rodríguez Lara ubicado en la parroquia Belisario Quevedo, para una mejor
                            referencia de como llegar dejamos un mapa.</div>
                        <br>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>INICIO DEL EVENTO: 8:00 am</li>

                        </ul>
                    </div>
                </article>
                <article class="postcard dark red">

                    <div class="postcard__text">
                        <h1 class="postcard__title red">Nuestras redes sociales</h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Para mantenerte informado con noticias, actualizaciones y
                            resultados del Gamer Fest te recomendamos acceder a nuestras redes sociales en las cuales se
                            actualizará el contenido antes, durante y despues del evento.</div>
                        <br>
                        <ul class="postcard__tagbox text-center">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Canal de Discord: <a
                                    href="https://discord.gg/NjFM2dDr" class="btn btn-primary btn-lg" role="button"
                                    aria-disabled="true" style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/discord.png') }}" width="50"
                                        height="50" alt="Discord">
                                </a></li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Instagram: <a
                                    href="https://www.instagram.com/gamerfest.ec/?hl=es-la"
                                    class="btn btn-primary btn-lg" role="button" aria-disabled="true"
                                    style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/instagram.png') }}" width="50"
                                        height="50" alt="Instagram">
                                </a> </li>
                            </li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Facebook: <a
                                    href="https://www.facebook.com/gamerfest.ec" class="btn btn-primary btn-lg"
                                    role="button" aria-disabled="true"
                                    style="BORDER: 0px; background-color: transparent">
                                    <img class="card-img-top" src="{{ url('images/facebook.png') }}" width="50"
                                        height="50" alt="Facebook">
                                </a></li>

                        </ul>
                    </div>
                    <a class="postcard__img_link" href="#">


                    </a>
                </article>
                <article class="postcard dark green">

                    <div class="postcard__text">
                        <h1 class="postcard__title green">Eventos anteriores</h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">En nuestros eventos anteriores hemos sido testigos de grandes
                            participaciones por parte de estudiantes e invitados, hemos pasado grandes momentos tanto
                            estudiantes como profesores logrando unir a carreras gracias a los videjuegos y esperamos
                            que este no sea la excepción.
                            Aparte de los juegos de competencia contamos con:</div>
                        <br>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Videojuegos gratuitos de exibición</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Comidas y bebidas</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Stands de ventas de productos</li>

                        </ul>
                    </div>
                    <a class="postcard__img_link">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="{{ url('images/gamerfest1.jpg') }}" width="500"
                                        height="350" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('images/gamerfest2.jpg') }}" width="500"
                                        height="350" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('images/gamerfest3.jpg') }}" width="500"
                                        height="350" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </a>
                </article>
                <article class="postcard dark yellow">
                    <a class="postcard__img_link" href="#">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block" src="{{ url('images/call_of_duty.jpg') }}" width="500"
                                        height="350" alt="Primer juego">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('images/fall_guys.jpg') }}" width="500"
                                        height="350" alt="Segundo juego">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('images/lol.jpg') }}" width="500" height="350"
                                        alt="Tercer juego">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('images/mario.jpg') }}" width="500" height="350"
                                        alt="Tercer juego">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('images/valo.jpg') }}" width="500" height="350"
                                        alt="Tercer juego">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block" src="{{ url('images/guitar.jpg') }}" width="500" height="350"
                                        alt="Tercer juego">
                                </div>

                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </a>
                    <div class="postcard__text">
                        <h1 class="postcard__title yellow">Juegos del evento</h1>
                        <div class="postcard__subtitle small">
                            <time datetime="2020-05-25 12:00:00">
                            </time>
                        </div>
                        <div class="postcard__bar"></div>
                        <div class="postcard__preview-txt">Contaremos con una gran variedad de videojuegos llenos de
                            acción, habilidad, rivalidad y sobre todo diversión. Dentro de nuestro catalogo de juegos
                            contamos con juegos de estrategia, disparos, plataformas y peleas, como:</div>
                        <ul class="postcard__tagbox">
                            <li class="tag__item"><i class="fas fa-tag mr-2"></i>Warzone</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Valorant</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Clash Royale</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Fall Guys</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>League of Legends</li>
                            <li class="tag__item"><i class="fas fa-clock mr-2"></i>Dota 2</li>

                        </ul>
                    </div>
                </article>
            </div>
        </section>
        <br><br><br>

        <div class="parent">
            <center>
                <h3 style="color:rgba(255, 255, 255,100);">Comentarios y Sugerencias</h3>
            </center>

            <form method="post" action="http://saytome.net/gn8" class="fxform" style="width:550px">
                <fieldset>
                    <div><label for="nombre">De</label><input type='text' value='' id='nombre' name='nombre' />
                        <div class="guideline">El nombre que el destinatario ver&aacute;.</div>
                    </div>
                    <div><label for="asunto">Asunto</label><input type='text' value='' id='asunto' name='asunto' />
                        <div class="guideline">Asunto del mensaje enviado.</div>
                    </div>
                    <div><label for="email">Email</label><input type='text' value='' id='email' name='email' />
                        <div class="guideline">Tu email para que el destinatario se pueda poner en
                            contacto
                            contigo.</div>
                    </div>
                    <div><label for="texto">Texto</label>
                        <div class="editor"><textarea name="texto" id="texto"></textarea></div>
                        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript">
                        </script>
                        <script type="text/javascript">
                        bkLib.onDomLoaded(function() {
                            editor = new nicEditor({
                                fullPanel: true,
                                toolTipOn: true,
                                toolTipText: "Haz clic para editar el contenido"
                            });
                            editor.panelInstance("texto");
                        });
                        </script>
                    </div>
                </fieldset>
                <div class="submit"><input type="submit" />
                </div>
            </form>
        </div>


        <div class="card text-white bg-dark mb-3">

            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3">
                    <br>

                </div>
                <div class="col-sm-4">
                    <br>
                    <center>
                        <h3>Soporte:</h3>
                        <h4>WhatsApp: +593 958775282</h4>
                        <h4>Correo: heiturralde@espe.edu.ec</h4>
                    </center>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-2">

                </div>

            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
</body>

</html>