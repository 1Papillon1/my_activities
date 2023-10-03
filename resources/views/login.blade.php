<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LOGIN | My Activities</title>

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
                    <form method="" action="">
                        <div class="mb-4 w-50">
                          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email">
                        </div>
                        <div class="mb-4 w-50">
                          <input type="password" class="form-control" id="password" placeholder="Enter your password">
                        </div>
                        <div class="mb-4 form-check">
                          <input type="checkbox" class="form-check-input" id="checkPassword">
                          <label class="form-check-label" for="checkPassword">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary button">Login</button>
                      </form>

                </div>
            </div>
        <!--Scripts-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>
