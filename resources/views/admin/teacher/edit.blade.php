@extends('institute.master')

@section('body')
<section class="py-4">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 mx-auto">
               <div class="card">
                <div class="card-header bg-primary"><h3 class="text-center text-white">Edit Teacher</h3></div>
                <div class="card-body">
                    {{-- <h4 class="text-success text-center">{{ Session::get('message') }}</h4> --}}
                    <form action="{{ route('teacher.update',['id'=>$teacher->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"  name="role_as" value="3">
                        <div class="row mb-4">
                           <label for="name" class="col-md-3">Name</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" value="{{ $teacher->name }}" id="name" name="name">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="code" class="col-md-3">Teacher Code</label>
                           <div class="col-md-9">
                               <input type="number" class="form-control" value="{{ $teacher->code }}" id="code" name="code">
                           </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" value="{{ $teacher->email }}" id="email" name="email">
                            </div>
                         </div>
                         <div class="row mb-4">
                            <label for="mobile" class="col-md-3">Mobile</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" value="{{ $teacher->mobile }}" id="mobile" name="mobile">
                            </div>
                         </div>
                        <div class="row mb-4">
                           <label for="about" class="col-md-3">NID</label>
                           <div class="col-md-9">
                               <input type="number" class="form-control" value="{{ $teacher->nid }}" id="nid" name="nid">
                           </div>
                        </div>
                  
                        <div class="row mb-4">
                           <label for="address" class="col-md-3">Address</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" value="{{ $teacher->address }}" id="address" name="address">
                           </div>
                        </div>
                        <div class="row mb-4">
                            <label for="district" class="col-md-3">District </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{ $teacher->district }}" id="district" name="district">
                            </div>
                         </div>
                        <div class="row mb-4">
                           <label for="image" class="col-md-3">Image</label>
                           <div class="col-md-9">
                               <input type="file" class="" id="image" name="image">
                               <img src="{{ asset($teacher->image ) }}" alt="" height="180" width="200">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="logo" class="col-md-3"></label>
                           <div class="col-md-9">
                               <button class="btn btn-primary" type="submit">Update teacher</button>
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