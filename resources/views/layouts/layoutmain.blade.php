<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('img/favicon1.png') }}" type="image/png">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Bootstrap CSS -->
 
      
    </head>
    <style type="text/css">
    .white-bg {
    background-color: white !important;
    }

    </style>
    <body>
        
        <!--================Header Menu Area =================-->
       @include('shared.header')
        <!--================Header Menu Area =================-->

        
        @yield('content')

        
        <!--================ start footer Area  =================-->	
        @include('shared.footer')
		<!--================ End footer Area  =================-->
        
        
        
        
        
        
      
   

   {{-- for sticky navbar top --}}
    <script>
        document.addEventListener("DOMContentLoaded", function(){
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.getElementById('navbar_top').classList.add('fixed-top','white-bg');
                // add padding top to show content behind navbar
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                document.getElementById('navbar_top').classList.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            } 
        });
        });
        </script>
    </body>
</html>