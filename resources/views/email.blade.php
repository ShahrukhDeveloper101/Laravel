<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $details['subject'] }}</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            background-color: #10393b7f;
            margin: 0 auto;
            padding: 0;
        }
        .header, .footer {
            background-color: #000;
            color: #fff;
            padding: 10px;
        }
        .header{
            border-top-left-radius: .7rem;
            border-top-right-radius: .7rem;
        }
        .footer{
            border-bottom-left-radius: .7rem;
            border-bottom-right-radius: .7rem;
        }
        .main-content {
            background-color: #10393b7f; /* Light grey background */
            padding: 20px;
        }
        .main-content p {
            font-size: 20px;
            color: white;
        }
        img{
            width: 70px;
        }
        .navbar-brand{
            width: 100%;
            display: flex;
            text-decoration: none;
        }
        .navbar-brand h1{
            color: white;
            font-size: 1.6rem;
            padding-left: 5px;
        }
        .gradient {
            color: #ffe22f !important;
        }
        .main-content h5 {
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        @media (max-width: 568px){
            .navbar-brand h1{
                font-size: 1rem;
            }
            img{
                width: 40px;
            }
            .main-content p {
                font-size: 13px;
            }
            .main-content h5 {
                font-size: 18px;
            }
            .footer p{
                font-size: 11px;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <a class="navbar-brand" href="{{route('home.index')}}">
            <img src="https://shahrukhdeveloper.com/img/Logo/shahrukh_developer_logo_transparent_bg.png" class="logo" alt="Logo">
            <h1>Shahrukh Developer</h1>
        </a>
    </div>
    <div class="container">
        <div class="main-content">
            <p>Hey <span class="gradient">{{ $details['name'] }} </span>!</p>
            <p>{!! $details['content'] !!}</p>
            <p >Best regards,<br><span class="gradient">Shahrukh Developer</span></p>

        </div>
    </div>
    <div class="footer">
        <p>&copy; {{ date('Y') }} Shahrukh Developer. All rights reserved.</p>
    </div>
</body>
</html>
