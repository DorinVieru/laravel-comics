<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg+xml" href="{{ Vite::asset('resources/img/favicon.ico') }}" />
    <title>Laravel Characters - DC Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- HEADER --}}
    @include('partials.header')

    {{-- MAIN --}}
    <main>
        {{-- JUMBOTRON --}}
       <div class="container-fluid jumbo">
        </div>

        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center text-white">
                    <h1>Al momento non è presente nulla. <br> Prossimamente in arrivo nuovi fumetti solo per te!</h1>
                </div>
            </div>
        </div>
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')
</body>

</html>