@extends('website.master')

@section('body')
<section>
    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1500" id="slider">
        <ol class="carousel-indicators">
            <li data-bs-target="#slider" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#slider" data-bs-slide-to="1"></li>
            <li data-bs-target="#slider" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('/') }}img/1644132575.jpg" alt="" class="w-100" style="height:550px">
                <div class="carousel-caption text-success ">
                    <h3>This is Microsoft Office Course</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora corrupti error cum, itaque ratione quisquam quo quam eveniet adipisci rem maiores, expedita reiciendis nam magni, inventore non consequatur. Officiis, beatae.</p>
                    <a href="{{ route('course-detail') }}" class="btn btn-success">Read more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}img/1654938579.jpg" alt="" class="w-100" style="height: 550px;">
                <div class="carousel-caption text-success">
                    <h3>This is Mechine Learning Course</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora corrupti error cum, itaque ratione quisquam quo quam eveniet adipisci rem maiores, expedita reiciendis nam magni, inventore non consequatur. Officiis, beatae.</p>
                    <a href="" class="btn btn-success">Read more</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('/') }}img/1663670991.jpg" alt="" class="w-100" style="height: 550px;">
                <div class="carousel-caption text-dark">
                    <h3>This is Python Course</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora corrupti error cum, itaque ratione quisquam quo quam eveniet adipisci rem maiores, expedita reiciendis nam magni, inventore non consequatur. Officiis, beatae.</p>
                    <a href="" class="btn btn-success">Read more</a>
                </div>
            </div>
        </div>
        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
  </section>

  <section class="">
    <div class="container-fluid py-5 bg-secondary">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white">Govt. Course</h1>
            </div>
        </div> 
    </div>

    <div class="container py-5">
        <div class="row">
            @foreach ($Gcourses as $course )
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset($course->image) }}" alt="">
                    <div class="card-body">
                        <h3>{{ $course->title }}</h3>
                        <h5>Polash Mia</h5>              
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="{{ route('course-detail') }}" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            
            
            
            
        </div>
    </div>
</section>


<section class="">
    <div class="container-fluid py-5 bg-info">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white">Paid Course</h1>
            </div>
        </div> 
    </div>

    <div class="container py-5">
        <div class="row">
            @foreach ($courses as $course )
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset($course->image) }}" alt="">
                    <div class="card-body">
                        <h3>{{ $course->title }}</h3>
                        <h5>Polash Mia</h5>              
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="{{ route('course-detail') }}" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            
            
            {{-- <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('/') }}img/1644132575.jpg" alt="">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Polash Mia</h5>
                        <p>1200 Tk</p>
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>


<section class="py-5 bg-dark">
    <div class="container">
        <div class="row">
            <h1 class="text-center text-white">Admission Launch Time</h1>
            <div class="col-md-4 text-center text-white fs-5 mx-auto">
                <div  class="launch-time d-flex">
                    <div class="px-3">
                        <h1 id="days">00</h1>
                        <span>Days</span>
                    </div>
                    <div class="px-3">
                        <h1 id="hours">00</h1>
                        <span>Hours</span>
                    </div>
                    <div class="px-3">
                        <h1 id="minutes">00</h1>
                        <span>Minutes</span>
                    </div>
                    <div class="px-3">
                        <h1 id="seconds">00</h1>
                        <span>Seconds</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>


   <section class="">
    <div class="container-fluid py-5 bg-info">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white">Popular Course</h1>
            </div>
        </div> 
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('/') }}img/1644132575.jpg" alt="">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Polash Mia</h5>
                        <p>1200 Tk</p>
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="{{ route('course-detail') }}" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div>
            
            
           
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('/') }}img/1644132575.jpg" alt="">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Polash Mia</h5>
                        <p>1200 Tk</p>
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('/') }}img/1644132575.jpg" alt="">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Polash Mia</h5>
                        <p>1200 Tk</p>
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('/') }}img/1644132575.jpg" alt="">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Polash Mia</h5>
                        <p>1200 Tk</p>
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('/') }}img/1644132575.jpg" alt="">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Polash Mia</h5>
                        <p>1200 Tk</p>
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{ asset('/') }}img/1644132575.jpg" alt="">
                    <div class="card-body">
                        <h3>Responsive Web Design</h3>
                        <h5>Polash Mia</h5>
                        <p>1200 Tk</p>
                        <p>Starting Date: 16.12.2022</p>
                        <hr>
                        <a href="" class="btn btn-success px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
@endsection