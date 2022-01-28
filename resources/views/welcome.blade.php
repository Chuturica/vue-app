<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        <div id="app">


        </div>

        {{-- Using jsDelivr CDN:

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> --}}

        {{-- Using unpkg CDN: --}}

        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
        <script src="/js/app.js"></script>



    </body>

</html>