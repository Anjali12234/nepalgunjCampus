<!DOCTYPE html>
<html>

<!-- Mirrored from t.commonsupport.com/nortech/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 Feb 2020 06:20:46 GMT -->

<head>
    <meta charset="utf-8">
    <title>Welcome to NCMT</title>
    <link href="{{ asset('assets/frontend1/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend1/plugins/revolution/css/settings.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend1/plugins/revolution/css/layers.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend1/plugins/revolution/css/navigation.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/frontend1/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend1/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend1/css/color-switcher-design.css') }}" rel="stylesheet">
    <link id="theme-color-file" href="{{ asset('assets/frontend1/css/color-themes/default-theme.css') }}"
        rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/frontend1/images/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="{{ asset('assets/frontend1/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend1/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets/frontend1/images/favicon.png') }}" type="image/x-icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <style>
        #popup {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            background-color: #f1f1f1;
            padding: 20px;
            width: 200px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        #close-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            font-size: 16px;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        .s {
            position: fixed;
            height: 70vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            transform: translate(-290px, 0);
        }

        .s a {
            color: black;
            background: rgba(248, 255, 255, 132.9);
            font-size: 18px;
            font-weight: 600;
            text-decoration: none;
            display: block;
            margin: 1px;
            padding: 5px;
            width: 321px;
            text-align: right;
            border-radius: 50px;
            transition: 1s;
            transition-property: transform;
            border: 1px solid green;
        }

        .s a:hover {
            transform: translate(140px, 0);
        }

        .s i {
            margin-left: 10px;
            font-size: 30px;
            width: 30px;
            height: 30px;
        }

        .s a:nth-child(1) i {
            color: #1DA0F0;
        }

        .s a:nth-child(2) i {
            color: #F80000;
        }

        .s a:nth-child(3) i {
            color: transparent;
            background-image: linear-gradient(45deg, #FFDF9E, #E56969, #8A49A1);
            -webkit-background-clip: text;
            font-weight: 600;
        }

        .s a:nth-child(4) i {
            color: #4ECCE8;
        }
    </style>
</head>

<body>
   @include('frontend.layouts.header')
@include('frontend.layouts.index')
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

