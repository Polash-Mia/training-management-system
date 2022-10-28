@extends('website.master')

@section('body')
<section>
    <div class="container-fluid py-5 bg-info">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white">Contact</h1>
            </div>
        </div> 
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <ul class="nav navbar-nav fs-6">
                    <li><a href="" class="nav-link"><i class="fa-solid fa-location-dot px-3"></i>848 E 28th ST, Kawran Bazar, Dhaka</a></li>
                    <li><a href="" class="nav-link"><i class="fa-solid fa-envelope px-3"></i>shamimpolash43@gmail.com</a></li>
                    <li><a href="" class="nav-link"><i class="fa-solid fa-phone px-3"></i>01737115041, 01521304654</a></li>
                </ul>
                <h3 class="pt-4">Follow Us:</h3>
                <ul class="nav fs-4">
                    <li><a href="" class="nav-link"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fa-brands fa-youtube text-danger"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
            
            <div class="col-md-6">
                <form action="">
                    <div class="row mb-3">
                        <div class="col-md">
                            <label for="">Name</label>
                            <div class="">
                                <input type="text" class="form-control" placeholder="Enter Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label for="">Email</label>
                            <div class="">
                                <input type="email" class="form-control" placeholder="Enter Email address">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label for="">Mobile</label>
                            <div class="">
                                <input type="number" class="form-control" placeholder="Enter Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md">
                            <label for="">Your Message</label>
                            <div class="">
                                <textarea name="" id="" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md">
                            
                            <div class="">
                                <input type="submit" class="btn btn-outline-info" value="Send Message">
                            </div>
                        </div>
                    </div>
                 </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card card-body shadow">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9024424301397!2d90.39108011498136!3d23.750858084589126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1665638409047!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection