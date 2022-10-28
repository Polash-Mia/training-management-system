@extends('website.master')

@section('body')
<section>
    <div class="container-fluid py-5 bg-info">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-white"> Course Detail</h1>
            </div>
        </div> 
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('/')}}img/1644132575.jpg " alt="" class="w-100">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h3 class="text-center py-4">Responsive Web Design</h3>
                                <h5> Trainer Name: Polash Mia</h5>
                                <p>Course Fee: Tk. 12000</p>
                                <p>Starting Date: 16.12.2022</p>
                                <p>Venue: Kawranbazar, Dhaka</p>
                                <a href="" class="btn btn-success">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col">
                <div class="card card-body">
                    <h2>Course Detail Information</h2>
                    <hr>
                    
                       <h4> Course Outline:</h4>

                        <p>Introduction</p>
                        <p>What is an Enterprise Application?</p>
                        
                        <p>How ASP.NET Core will be used to build Enterprise Applications?</p>
                        
                        <p>Why is Extensibility needed for Enterprise Application?</p>
                        <p>How to Extend ASP.NET Core Components for Enterprise Application?</p>
                        
                        <p>ASP.NET Core MVC Request Life Cycle</p>
                        
                        <p>Essential Life Cycle Concepts</p>
                        
                        <p>Middleware Pipeline</p>
                        
                        <p>Working with Routing
                        </p>
                        <p>Controller Initialization Aspects</p>
                        
                        <p>Request Handling with Actions</p>
                        
                        <p>Action Results and View Engine
                        </p>
                        <p>Extending ASP.NET Core MVC</p>
                        <p>Application Flow with Filters</p>
                        
                        <p>Data Binding and Validation Enhancements</p>
                        
                        <p>Application Responses Manipulation</p>
                        
                        <p>Action Method Selection Process</p>
                        
                        <p>Customizing Middleware Pipeline</p>
                        
                       <p> Implementing Authentication Authorization</p>
                        
                       <p> ASP.NET Core Identity</p>
                        
                        <p>Token Based Security for API</p>
                        
                       <p> Claim Based Authorization</p>
                        
                       <p> Role Based Authorization</p>
                       <p> Policy Based Authorization</p>
                        
                       <p> Diagnosing Error Handling and Logging</p>
                        
                       <p> Error Handling</p>
                        
                        <p>Diagnosing runtime application issues by logging</p>
                        
                       <p> Handling Data with EF Core</p>
                        
                        <p>EF Core Migrations</p>
                        
                        <p>Managing Views with EF Core</p>
                        
                       <p> Managing Stored Procedure with EF Core</p>
                        
                       <p> Managing Enterprise Application with Repositories</p>
                        
                       <p> Dependency Injection in ASP.NET Core</p>
                        
                        <p>Repository Pattern and Implementation</p>
                        
                       <p> Unit Testing</p>
                        
                       <p> Moq</p>
                        
                       <p> Fluent Assertion</p>
                        
                       <p> Unit Testing implementation using xUnit</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection