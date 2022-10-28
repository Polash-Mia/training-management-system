@extends('website.master')

@section('body')

<section class="">
    <div class="container-fluid py-5 bg-info">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white">All Course</h1>
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

@endsection