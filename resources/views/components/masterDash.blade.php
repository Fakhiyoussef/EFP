@props(['title'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> --}}


    <!-- ========== Styles =========== -->

    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">

    <title>{{$title ?? 'Default Title'}}</title>

</head>

<body>
    <!-- ========= Navigation Menu ============ -->

    @include('dashboardLayout.navdash')

    <div class="main">
        @include('dashboardLayout.topbar')     
        <div class="container rounded mt-5 mb-5">
            <div class="row">
                @include('partials.flashbag')    
            </div>
        
            {{ $slot}}
        </div>
    </div>

    



  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    

    <script src="{{ asset('js/dash.js') }}"></script>
    <script src="{{ asset('js/dark-mode.js') }}"></script>
  
    <!-- ============= Ionic Icon ============= -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>
