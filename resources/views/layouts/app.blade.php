<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>CarRentKe</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
      {{-- logo icon --}}
        <link rel="shortcut icon" href="" type="image/svg+xml">
        <!--boostrap  css-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <!--boostrap js-->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- font awesome css cdn-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- custom CSS-->
            <link href="{{ asset('css/layout.css')}}" rel="stylesheet">
            <!-- login form css-->
            <link href="{{ asset('css/login-form.css')}}" rel="stylesheet">

    <!-- custom scripts -->
            <script src="{{ asset('js/layout.js')}}"></script>

                <!-- login form js-->
            <script src="{{ asset('js/layout.js')}}"></script>


      @livewireStyles
    </head>
    <body>
        <!--Header section-->
        <header class="header" data-header>
            @livewire('navbar')
        </header>
        <section class="body">
            @yield('content')

        </section>
       
        <section class="footer">
            @livewire('footer')
        </section> 
        
        @livewireScripts
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script>
        
      </script>
    </body>
</html>
