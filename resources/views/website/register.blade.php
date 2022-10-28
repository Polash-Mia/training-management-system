@extends('website.master')

@section('body')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Register Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="row mb-3">
                                <label for="">
                                    <h5>Full Name <span class="text-danger">*</span></h5>
                                </label>
                                <div class="">
                                    <input type="text" class="form-control" placeholder="Enter Full Name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="">
                                    <h5>Email Address <span class="text-danger">*</span></h5>
                                </label>
                                <div class="">
                                    <input type="email" class="form-control" placeholder="Enter Email Address">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="">
                                    <h5>Contact Number <span class="text-danger">*</span></h5>
                                </label>
                                <div class="">
                                    <input type="number" class="form-control" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="">
                                    <h5>Password <span class="text-danger">*</span></h5>
                                </label>
                                <div class="">
                                    <input type="password" class="form-control" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="">
                                    <h5>Address <span class="text-danger">*</span></h5>
                                </label>
                                <div class="">
                                    <textarea name="address" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="">                                   
                                </label>
                                <div class="">
                                    <input type="submit" value="Register" class="btn btn-success">
                                </div>
                            </div>                          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection