<!DOCTYPE html>
<html>

<!-- Mirrored from t.commonsupport.com/nortech/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 06:20:46 GMT -->

<head>
    <meta charset="utf-8">
    <title>Welcome to NCMT</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


      @vite('resources/css/app.css')
</head>

<body class="font-poppins">
   @include('frontend.layouts.header')
   @yield('content')
     @include('frontend.layouts.footer')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var popup = document.getElementById("popup");
                var closeButton = document.getElementById("close-btn");

                closeButton.addEventListener("click", function() {
                    popup.style.display = "none";
                });

                window.addEventListener("scroll", function() {
                    if (window.pageYOffset > 100) {
                        popup.style.display = "block";
                    } else {
                        popup.style.display = "none";
                    }
                });
            });
        </script>


        <script>
            // Check if the modal has already been displayed
            const modalDisplayed = sessionStorage.getItem('modalDisplayed');

            if (!modalDisplayed) {
                // If the modal has not been displayed, show it and set the flag in local storage
                setTimeout(() => {
                    $('#exampleModal').modal({
                        backdrop: 'static',
                        keyboard: false,
                    });

                    sessionStorage.setItem('modalDisplayed', 'true');
                }, 2000);
            }
        </script>

