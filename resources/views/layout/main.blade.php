<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/create.css">


</head>

<header>
    <ul class="glass-effect nav justify-content-center  ">
        <li class="nav-item">
            <a class="nav-link active text-white" href="#" aria-current="page">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="#">About Us</a>
        </li>

    </ul>
</header>

<body>
    <div class="container ">
        @yield('content')
    </div>

    <div class="glass-effect d-flex flex-column justify-content-center flex-md-row text-center py-3 ">
        <!-- Copyright -->
        <div class="text-white text-center py-2">
            Copyright © 2023. Willy Agustri Djabar All rights reserved.
        </div>
        <!-- Copyright -->



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
        </script>
</body>

</html>
