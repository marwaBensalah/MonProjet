<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>STB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
               
               
            }

            .full-height {
                height: 50vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            

            .title {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .sidebarservices {
  position: absolute;
  width: 50%;
  
}
.sidebarservices .head {
  text-align:center;
  font-size:15pt;
  background:gray;
  color:white;
}
.head:hover {
  background:gray !important;
  cursor: initial;
}
.sidebarservices li {
  list-style:none; 
  background-color:#0e6eb7; 
  margin:5px 10px;
  text-align:left; 
  padding: 10px 0 10px 20px;
  border-radius:5px 5px;
  cursor:pointer;
  }
.sidebarservices li a {
  text-decoration:none; 
  color:white !important;
  font-family: Century Gothic, sans-serif;
  }
  .sidebarservices li:hover {
    background:black;
    color:black;
  }
  div {
  width: 80%;
  max-width: 700px;
  min-width: 400px;
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                       
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <ul class="sidebarservices">
        <li class="head">STB BANK DIRECTION TITRES ET PLACEMENTS</li>
        <li><a>{{ link_to_route('empruntE.index','Emprunts Emis',null) }}</a></li>
        <li><a>{{ link_to_route('empruntS.index','Emprunts Souscrits',null) }}</a></li>
        <li><a>{{ link_to_route('fond.index','Fonds de placements',null) }}</a></li>
      </ul>

                
        </div>
    </body>
</html>
