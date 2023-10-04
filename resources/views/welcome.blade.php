<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WELCOME | My Activities</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset("css/app.css")}}" />
        
    </head>
    <body>
            <div class="d-flex justify-content-between">
                <div class="container">
                    <img class="image" src="/images/LandingPage_image.jpg" alt="landingimage">
                    <a href="https://vecteezy.com" class="image-link">Image By: Imam Fathoni</a>
                </div>

                <div>
                    <div class="mb-4 container">
                    <h1 class="fs-1">Welcome to My Activities</h2>
                    <h2 class="fs-4">A simple Web Application built with Laravel</h2>
                    </div>
                    <!-- Login Form -->
                    
                        <button type="submit" onclick="location.href='{{ url('login')}}'" class="btn btn-primary button">Login</button>
                        <button type="submit" class="btn btn-primary button">Register</button>


                </div>
            </div>
        <!--Scripts-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
