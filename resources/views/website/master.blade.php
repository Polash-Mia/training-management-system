<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>

   <section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <ul class="nav">
                        <li><a href="" class="nav-link text-white"><i class="fa-solid fa-phone px-2"></i>+8801737115041</a></li>
                        <li><a href="" class="nav-link text-white"><i class="fa-sharp fa-solid fa-envelope px-2"></i>shamimpolash43@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2">
                <div>
                    <ul class="nav">
                        <li><a href="" class="nav-link text-white"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user px-2"></i>Sign in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   </section>

   <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="{{ asset('/') }}img/bitm-logo.png" alt="" height="50" width="170"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('course') }}">All Course</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
        <a class="navbar-brand" href="#"><img src="{{ asset('/') }}img/basis_logo.png" alt="" height="45" width="150"></a>
      </div>
    </div>
  </nav>


  @yield('body')
  

<section>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Sign in</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

         <form action="">
            <div class="row">
                <div class="col-md">
                    <label for="">Email</label>
                    <div class="">
                        <input type="email" class="form-control" placeholder="Enter Email address">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <label for="">Password</label>
                    <div class="">
                        <input type="password" class="form-control" placeholder="Enter Password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    
                    <div class="float-end py-3">
                        <a href="">Forgot Password?</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    
                    <div class="">
                        <input type="submit" class="btn btn-outline-info w-100" value="Login">
                    </div>
                </div>
            </div>
         </form>
        </div>
        <div class="modal-footer">
          <div class="text-center">
            Not registered? To register <a href="{{ route('student.register') }}">click here.</a> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   

<footer>
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card card-body h-100 ">
                        <img src="{{ asset('/') }}img/bitm-logo.png" alt="" height="50" width="150">
                        <hr>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo incidunt voluptate facere eligendi odio pariatur maiores. Distinctio, veritatis. Optio omnis fugit voluptatibus ipsum saepe nihil natus accusantium libero inventore. Quisquam.</p>
                    </div>
                </div>
                <div class="col-md-2 mb-3">
                    <div class="card card-body h-100">
                        <h4>Quick Link</h4>
                        <hr>
                        <ul class="nav navbar-nav">
                            <li><a href="" class="nav-link">Home</a></li>
                            <li><a href="" class="nav-link">About</a></li>
                            <li><a href="" class="nav-link">All Course</a></li>
                            
                            <li><a href="" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card card-body h-100">
                        <h4>Contact Us</h4>
                        <hr>
                        <address>
                            House #112, Road # , Panthapoth, Dhaka. <br>
                            <b>Phone:</b>01713115041 <br>
                            <b>Email:</b>shamimpolash43@gmail.com
                        </address>

                        <ul class="nav fs-4">
                            <li><a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-youtube text-danger"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fa-brands fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <div class="card card-body h-100">
                        <h4>Download</h4>
                        <hr>
                        <a href="" class="py-2"><img src="{{ asset('/') }}img/googlePlay.png" alt=""></a>
                        <a href="" class="py-2"><img src="{{ asset('/') }}img/appStore.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-3 bg-dark">
        <p class="text-center text-white">Copyright &copy Bitm Basis Seip Trade-3 Design and Devlop By Polash.</p>
    </section>
</footer>

    <script src="{{ asset('/') }}js/bootstrap.bundle.js"></script>
    <script>
        var countDownDate = new Date('Dec 13, 2022 00:00:00').getTime();

        var x=setInterval(function(){

            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);


            document.getElementById('days').innerHTML=days;
            document.getElementById('hours').innerHTML=hours;
            document.getElementById('minutes').innerHTML=minutes;
            document.getElementById('seconds').innerHTML=seconds;

            if(distance<0){
                clearInterval(x);

                document.getElementById('days').innerHTML="00";
                document.getElementById('hours').innerHTML="00";
                document.getElementById('minutes').innerHTML="00";
                document.getElementById('seconds').innerHTML="00";
            }
           
            
        }, 1000);
    </script>
</body>
</html>