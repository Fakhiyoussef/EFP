@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">

    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">


    <title>{{$title ?? 'Default Title'}}</title>
</head>

<body>
    <header>

    </header>

    <!-- Navigation Bar -->
    @include('partials.nav')



    <main>
        <div class="container rounded mt-5 mb-5">
            <div class="row">
                @include('partials.flashbag')    
            </div>
        
            {{ $slot}}
        </div>
    </main>

       


    <!--  FOOTER -->
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
