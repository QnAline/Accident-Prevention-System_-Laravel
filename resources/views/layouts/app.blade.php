<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <title>Accident Prevention System</title>
    <link rel="icon" href="{{ asset('Image/aps.png') }}" type="image/png">

   
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        /* .body{
            padding-bottom: 10px;
        } */
        .flex-container {
            display: flex;
            margin-top:60px;
            
        }

        .Link_left {
            width: 10%; 
            padding: 20px; 
            
        }
       
        .dashboard_link {
        position: fixed;
        top: 40px;
        text-align: center;
        left: 38px;
        bottom: 0;
        width: 220px; /* Adjust the width as needed */
        background-color: rgb(1,77,78); /* Set the background color as needed */
        color: white; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add box shadow for a visual effect */
        z-index: 100; Set z-index to ensure it appears above other content
    }
              
    .dashboard_linked {
        position: fixed;
        top: 40px;
        text-align: center;
        left: 38px;
        bottom: 0;
        width: 220px; 
        color: white; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: transparent;
    }
        
    .dashboard_linked .Link_left{
        margin-top: 40px;
  
    }
    .dashboard_link .Link_left{
        margin-top: 40px;
  
    }
   
    .dashboard_link img{
       border-radius: 50%;
       width: 50px;
       margin-left: 0px;
       margin-top: 8px;
    }
        .dash_container {
            flex-grow: 1;
       
           margin-left: 220px; /* Adjust the margin to leave space for the fixed dashboard_link */
    
            
        }
        

        .linked a{
            background-Color: black;  
            color: white;
            width:120px;
            text-align: center;
            margin-bottom: 10px;
            padding:2px;
            margin-left: 0px;

        }

      #map {
            height: 400px; 
            width: 80%; 
            margin-left: 80px;
            margin-bottom: 40px;
            
        }

        #accidentChart {
            
            margin:30px 95px 5px 95px;
         
        }
        h4{
            margin-left: 110px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        h3{
            margin-left: 100px;
            font-weight: bold;
        }
        h5{
            margin-left: 10px;
            font-weight: bold;
            color:black;
            width:400px;
            text-align: center;
            margin-bottom: 10px;
            padding:7.5px;
            border-radius: 5px;
        }
        .navbar-brand img {
            
            width: 45px; 
            height: 45px; 
            border-radius: 50%;
        }
        .navbar-nav .nav-item {
            margin-right: 15px;
            max-width: 100px;

        }
        .nav-location img{
            width: 70px; 
            height: 57px; 
            border-radius: 50%;
            margin-right: 40px;
        }
        .recently{
            margin-top:40px;
            margin-left: 280px;
        }
        .recently_list{
           background-color: black;
           color: white;
           padding: 40px;
           margin-top: 40px;
           margin-right: 10px;
           

        }
        .download img{
            width: 45px; 
            height: 45px; 
        }
       .System h3{
        margin-left: 200px;
        margin-top:20px;
       }
       .welcome img{
            width: 450px; 
            height: 250px;
            margin-left: 50px;
            border-radius: 5%;
       }
       .welcome {
        display: flex;
        align-items: center;
        margin-left: 150px;
        margin-top:40px;
        margin-bottom: 40px;
        }

      .image {
       flex: 0 0 auto;
       margin-right: 30px; 
       }

       .text-welcome {
         flex: 1; 
         font-size: 15px;
       }
       .welcome .download{
            width: 2px; 
            height: 2px;
       }
  
       footer{
        background-color: teal;
        color:white;
        width: 100%;
        height:150px;
        margin-left:40px;
        margin-top:30px;
        margin-bottom:0px;
        display: fixed;

       }
       .footer-container {
            display: flex;
          
        }
       
       

        .quicklinks li {
            list-style: none;
             margin-left: 70px;
        }

        .footer-links{
            margin-top: 15px;
           

        }
        .footer-links p{
            margin-left:100px;
            margin-bottom:7px;
        }
        .copyright{
            background-color: rgb(1,77,78);
            margin-left: 0px;
            text-align: center;
            margin-bottom: 0px;
            padding: 10px;
        }
        .footer_padding{
            padding: 10px;
        }
        
        .footer-contact {
            margin-top:15px;
            margin-left:350px;
            
        }
        .footer-logo{
            margin-left:20px;
            margin-top:10.1px;

        }
        .footer-contact p {
            margin-left:90px;
            margin-bottom:10px;
        }
        
        .footer-contact li img {
            
            width:25px;
            height:25px;
            margin-left:40px;
        }
        .footer-contact .quicklinks li {
          display: inline-block;
          margin-left: 14px; 
          
        }
        .footer-contact .contack li {
          display: block;
          margin-right: 0px; 
          
        }
        .call_footer{
            margin-top:10px;
        }
        
        .quicklinks li a{
          text-decoration: none;
          color:white;
        }
        .quicklinks li a:hover{
          color:black;
        }

        .contact li strong{
            margin-left: 50px;
            
        }
        .contact li strong:hover{
          color: black; 
        
       }
       footer p{
        margin-left:400px;
        margin-top:0px;
        
       }
       
       .meaning  strong{
         margin-left: 200px;
         font-size: 20px;
         margin-top: 50px;
        
       }

       .meaning p{
        font-size: 15px;
        margin-left: 40px;
        margin-bottom: 60px;
       }
       .about{
        width: 70%;
        margin-left: 150px;
       }

       .mission-content {
        display: grid;
        grid-template-columns: auto 1fr;
        gap: 20px; 
       }
       .app{
        display: flex;
       }
   .nav{
    position: fixed;
   }
        .mission-content img {
        max-width: 100%; 
       }
       .mission-content p{
        font-size: 15px;
        margin-left:110px;
       }
       hr{
        width: 30%;
        margin-left: 300px;
      
       }
      span{
        margin: 1px;
      }
       span strong{
        margin-left: 400px;
        font-size: 18px;
       }
       
       .team img{
        width:150px;
        height:150px;
        border-radius:50%;
      
       }
       .team{
        display: flex;
        justify-content: space-between;
        justify-content:space-around;
        
       }
       .resources_container{
        margin-top: 60px;
        margin-bottom: 60px;
       }
     .team_item p{ 
        margin-top: 15px;
        transition: transform 0.3s ease-in-out;
      } 
       #map_c{
        margin-top: 78px;
        margin-right: 40px;
        
      } 
      .team_item:hover {
       transform: scale(1.1);
    
     }
     .contacts-container {
     display: flex;
     
     
     margin-bottom: 40px;
     }
     form{
        background-color: #015758;
        color: white;
        padding: 20px;
        width: 100%;
        border-radius: 10px;
     }
    
     .form_contact {
      flex: 1;
      margin-left:50px;
      margin-top: 50px;
     

     }
     .form_submit {
    background-color: teal;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    transition: background-color 0.3s;
    text-align: center;
    margin-left:100px;
    }
    .form_privacy{
        margin-left: 340px;
        margin-top: 40px;
        margin-bottom: 40px;
        width:32%;
    }
    .form-input,
    .form-textarea {
     width: 350px;
     padding: 8px;
     margin-bottom: 15px;
     border-radius: 4px;
     border: 1px solid #ccc;
     box-sizing: border-box;
    }
    .privacy-policy {
    max-width: 800px;
    margin: auto;

    margin-top: 80px;
    padding: 20px;
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: black;
    color: white;
    padding: 40px;
    border-radius: 10px;

}

.privacy-policy h2 {
    font-size: 24px;
    margin-bottom: 15px;
}

.privacy-policy h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

.privacy-policy p {
    margin-bottom: 15px;
}


.privacy-policy a {
    color: #0366d6; 
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

.privacy-policy a:hover {
    color: #1a0dab; 
}
.terms {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        border-radius: 8px;
        margin-top: 80px;
        margin-bottom: 80px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
  

   
    table {
            width: 90%;
            border-collapse: collapse;
            margin: 70px;
            background-color: #015758;
            color: white;
            font-size: 10px;
            border: 2px solid black;
           
        }

        th, td {
          
            padding: 5px;
            text-align: left;
            
        }

        th {
            background-color: black ;
            color: white;
            
        }
        tr{
            border: 2px solid white;
        }
        td img{
            width: 20px;
        }
        tbody tr:nth-child(even) {
            
            background-color: #01575;
            color:white;
        }
        .detail_head{
          text-align: center;
          color:black;
          margin-top:0px;
          
        }
        .details_background{
            /* background-image: url('Image/blackone.jpg'); */
            margin:15px;
            padding: 10px;
            
        }
        .edit_container{
            margin-top: 60px;
            margin-bottom: 60px;
        }
        .update{
            padding: 10px 20px; 
            background-color: white;
            color: black; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; /
        }
        .sensor-data{
            margin-left: 200px;
            padding:0px;
        }

        .terms {
    max-width: 600px;
    padding: 20px;
    background-color: #2c3e50; /* Teal color */
    color: white;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.terms h2 {
    font-size: 24px;
    margin-bottom: 15px;
    color: teal;
}

.terms p {
    margin-bottom: 15px;
    color: white;
}

.terms ol {
    padding-left: 20px;
    margin-bottom: 15px;
}

.terms li {
    margin-bottom: 8px;
}
  


    </style>
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="background-color: teal;border-bottom-right-radius: 70px; height:60px;position: fixed;
      width: 1800px; margin-left: 16.5px;
      top: 0; z-index: 1000;">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('Image/aps.png') }}" alt="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->

                        <a href="/" style=" color: white; height:30px; padding:2px 10px;border-radius:5px;margin-right:15px;text-decoration:none;margin-top:15px;"
                        onmouseover="this.style.backgroundColor='black'; this.style.color='white';"
                                    onmouseout="this.style.backgroundColor='teal'; this.style.color='white';">
                                    Home</a>
                        <a href="/aboutus" style=" color: white; height:30px; padding:2px 10px;border-radius:5px;margin-right:15px;text-decoration:none;margin-top:15px;"
                        onmouseover="this.style.backgroundColor='black'; this.style.color='white';"
                                    onmouseout="this.style.backgroundColor='teal'; this.style.color='white';"
                                    >About Us</a>

                       


                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"  style="color: white; height:30px; padding:2px 10px;border-radius:5px;margin-top:15px;" 
                                    
                                    onmouseover="this.style.backgroundColor='black'; this.style.color='white';"
                                    onmouseout="this.style.backgroundColor='teal'; this.style.color='white';">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"  style=" color: white; height:30px; padding:2px ; margin-right:0px;border-radius:5px;margin-top:15px;"
                                    onmouseover="this.style.backgroundColor='black'; this.style.color='white';"
                                    onmouseout="this.style.backgroundColor='teal'; this.style.color='white';">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-location">
                        <a href="/contact"> <img src="{{ asset('Image/download__8_-removebg-preview.png') }}" alt="location" /> </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
