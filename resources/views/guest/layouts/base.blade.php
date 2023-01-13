<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel DC Comics</title>
    <link href="/css/app.css" rel="stylesheet">
    <style>
.bg_container {
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
  .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 150px;
    height: 40px;
    border: 3px solid rgb(0, 143, 179);
    color: white;
    cursor: pointer;
    &:hover {
      transform: scale(1.2);
      background-color: rgb(206, 206, 206);
      color: black;
    }
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
    &:hover {
      transform: scale(1.2);
    }
  }

  .social_icon {
    display: flex;
    gap: 1em;
    img {
      &:hover {
        transform: scale(1.2);
      }
    }
  }

.bg_container {
    background-image: url('/css/img/footer-bg.jpg');
    object-fit: contain;
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

  ul {
    margin-bottom: 1.8em;
    margin-right: 1.5em;
  }

  a {
    color: rgb(136, 136, 136);
    font-size: 12px;
    &:hover {
      color: white;
    }
  }

  img {
    width: 350px;
    height: 350px;
    object-fit: contain;
    object-position: center;
    &:hover {
      transform: scale(1.1);
    }
  }

  .bg_container {
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

  a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    font-size: 0.7em;
    color: #fff;
    &:hover {
      transform: scale(1.1);
      transition: transform 0.2s ease-in-out;
    }
  }

  img {
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
