<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Colimas</title>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.7);">
        <!-- <div class="mx-auto order-0"> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{url('/')}}">Colimas</a>
        <!-- </div> -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse">
            {% if session.get('auth') %}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <span class="nav-link active">Welcome, {{ session.get('auth')['nama'] }}</span>
                </li>
                <li class="nav-item navbar-right">
                    <a class="nav-link" href="{{url('/users/profil')}}">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/auth/logout')}}" class="nav-link">
                        <i class='fas fa-sign-out-alt'></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
            {% else %}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item navbar-right">
                    <a class="nav-link active" href="{{url('/auth/login')}}">Login</a>
                </li>
                <li class="nav-item navbar-right">
                    <a href="{{url('/auth/register')}}" class="nav-link active">
                        <span>Register</span>
                    </a>
                </li>
            </ul>
            {% endif %}

        </div>
    </nav>
    <!-- <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(255, 255, 255, 0.8);">
        <a class="navbar-brand abs" href="{{url('/')}}">Colimas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="//codeply.com">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('/auth/login')}}">Login</a>
                </li>
                <li class="nav-item ">
                    <a href="{{url('/auth/register')}}" class="nav-link">
                        <span>Register</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav> -->
    <style>
        body {
            background-image: url('/images/bg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media (min-width: 768px) {
            .navbar-brand.abs {
                position: absolute;
                width: 100%;
                left: 0;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!-- <h1>Welcome to Colimas</h1> -->
</body>

</html>