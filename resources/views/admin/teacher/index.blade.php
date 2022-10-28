@extends('institute.master')

@section('body')
<section class="py-4">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 mx-auto">
               <div class="card">
                <div class="card-header bg-primary"><h3 class="text-center text-white">Add Teacher</h3></div>
                <div class="card-body">
                    
                    <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                    <form action="{{ route('teacher.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden"  name="role_as" value="3">
                        <input type="hidden" name="institute_code" value="{{ $institute->code }}">
                        <div class="row mb-4">
                           <label for="name" class="col-md-3">Name</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" placeholder="Name" id="name" name="name">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="code" class="col-md-3">Teacher Code</label>
                           <div class="col-md-9">
                               <input type="number" class="form-control" placeholder="code" id="code" name="code">
                               
                           </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" placeholder="email" id="email" name="email">
                            </div>
                         </div>
                        
                         <div class="row mb-4">
                            <label for="mobile" class="col-md-3">Mobile</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="mobile" id="mobile" name="mobile">
                            </div>
                         </div>
                         <div class="row mb-4">
                            <label for="nid" class="col-md-3">NID</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" placeholder="nid" id="nid" name="nid">
                            </div>
                         </div>


                         <div class="row mb-4">
                            <label for="address" class="col-md-3">Address</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" placeholder="address" id="address" name="address">
                            </div>
                         </div>

                        <div class="row mb-4">
                           <label for="district" class="col-md-3">Disrict</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" placeholder="district" id="district" name="district">
                           </div>
                        </div>

                        <div class="row mb-4">
                            <label for="image" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" class="" id="image" name="image">
                            </div>
                         </div>
                                               
                        <div class="row mb-4">
                           <label for="logo" class="col-md-3"></label>
                           <div class="col-md-9">
                               <button class="btn btn-primary" type="submit">Create Teacher</button>
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