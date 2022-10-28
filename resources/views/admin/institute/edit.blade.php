@extends('admin.master')

@section('body')
<section class="py-4">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 mx-auto">
               <div class="card">
                <div class="card-header bg-primary"><h3 class="text-center text-white">Edit Institute</h3></div>
                <div class="card-body">
                    {{-- <h4 class="text-success text-center">{{ Session::get('message') }}</h4> --}}
                    <form action="{{ route('institute.update',['id'=>$institute->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                           <label for="name" class="col-md-3">Name</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" value="{{ $institute->name }}" id="name" name="name">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="code" class="col-md-3">Institute Code</label>
                           <div class="col-md-9">
                               <input type="number" class="form-control" value="{{ $institute->code }}" id="code" name="code">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="about" class="col-md-3">About</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" value="{{ $institute->about }}" id="about" name="about">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="person" class="col-md-3">Contact person</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" value="{{ $institute->person }}" id="person" name="person">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="mobile" class="col-md-3">Mobile</label>
                           <div class="col-md-9">
                               <input type="number" class="form-control" value="{{ $institute->mobile }}" id="mobile" name="mobile">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="email" class="col-md-3">Email</label>
                           <div class="col-md-9">
                               <input type="email" class="form-control" value="{{ $institute->email }}" id="email" name="email">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="address" class="col-md-3">Address</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" value="{{ $institute->address }}" id="address" name="address">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="image" class="col-md-3">Logo</label>
                           <div class="col-md-9">
                               <input type="file" class="" id="image" name="image">
                               <img src="{{ asset($institute->image ) }}" alt="">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="logo" class="col-md-3"></label>
                           <div class="col-md-9">
                               <button class="btn btn-primary" type="submit">Update Institute</button>
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