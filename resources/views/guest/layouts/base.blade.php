<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel DC Comics</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    /* generals */
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        display: flex;
        max-width: 80%;
        height: 100%;
        margin: auto;
    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    /* header */
    .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 100px;
    }

    .dc_logo {
        width: 70px;
        height: 70px;
        cursor: pointer;
    }
    .dc_logo:hover {
        transform: scale(1.2);
        transform: rotate(-45deg);
        transition: transform 0.5s ease-in-out;
    }

    .navbar_list {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        height: 100%;
    }
    .navbar_list ul {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        color: rgb(0, 0, 0);
    }
    .navbar_list ul li {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 0.3em;
        height: 100%;
    }
    .navbar_list ul li a {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        color: #000000;
    }
    .navbar_list ul li a:hover {
        color: rgb(0, 157, 255);
        background-color: rgb(207, 235, 253);
    }

    /* main */
    .bg_container {
    background-color: rgb(29, 29, 29);
    }

    .slider_image {
    display: flex;
    justify-content: center;
    text-align: center;
    height: 500px;
    background-image: url("/css/img/jumbotron.jpg");
    -o-object-position: center;
        object-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    }

    .cards_box {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 2em 0;
    position: relative;
    }

    .card {
    flex: 0 0 16.6666666667%;
    }

    .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 150px;
    height: 40px;
    font-weight: bold;
    color: white;
    background-color: #0282f9;
    cursor: pointer;
    }
    .btn:hover {
    transform: scale(1.2);
    background-color: #5db1ff;
    color: black;
    }

    .btn_current {
    position: absolute;
    top: -20px;
    left: 40px;
    width: 200px;
    height: 50px;
    font-size: 1.2em;
    }

    .btn_load {
        margin: auto;
    }

    .card {
    text-align: center;
    padding: 0.1rem;
    }
    .card .contents {
    padding: 1em;
    height: 100%;
    }
    .card .contents h2 {
    color: white;
    font-size: 1.2rem;
    }
    .card .contents:hover {
    transform: scale(1.1);
    }

    /* footer */


    .bg_container_social {
    position: relative;
    z-index: 10;
    height: 100px;
    background-color: rgb(61, 61, 61);
    }

    .footer_social {
    display: flex;
    justify-content: space-between;
    align-items: center;
    }

    .btn_sign_up {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 150px;
    height: 40px;
    border: 3px solid rgb(0, 143, 179);
    color: white;
    cursor: pointer;
    }
    .btn_sign_up:hover {
    transform: scale(1.2);
    background-color: rgb(206, 206, 206);
    color: black;
    }

    .social_box {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1em;
    gap: 1em;
    }

    .follow_link {
    color: #0282f9;
    font-size: 15px;
    font-weight: bold;
    }
    .follow_link:hover {
    transform: scale(1.2);
    }

    .social_icon {
    display: flex;
    gap: 1em;
    }
    .social_icon img:hover {
    transform: scale(1.2);
    }

    .bg_container_link {
    background-image: url("/css/img/footer-bg.jpg");
    -o-object-fit: contain;
        object-fit: contain;
    -o-object-position: center;
        object-position: center;
    }

    .link_container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    height: 300px;
    padding: 1rem;
    color: rgb(255, 255, 255);
    }

    .link_list_box {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    height: 100%;
    }

    .list {
    margin-bottom: 1.8em;
    margin-right: 1.5em;
    }

    .list a {
    color: rgb(136, 136, 136);
    font-size: 12px;
    }
    .list a:hover {
    color: white;
    }

    .image_box img {
    width: 350px;
    height: 350px;
    -o-object-fit: contain;
        object-fit: contain;
    -o-object-position: center;
        object-position: center;
    }
    .image_box img:hover {
    transform: scale(1.1);
    }

    .bg_container_icon {
    background-color: #0282f9;
    }

    .navbar_down {
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 100%;
    height: 130px;
    padding: 1em;
    }

    .link_icon {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    font-size: 0.7em;
    color: #fff;
    }
    .link_icon:hover {
    transform: scale(1.1);
    transition: transform 0.2s ease-in-out;
    }

    .icon_img {
    width: 50px;
    margin-right: 0.5em;
    }

    </style>
</head>
<body>
    @include('guest.partials.header')

    <main>
        @yield('content')
    </main>

    @include('guest.partials.footer')
</body>
</html>
