@extends('admin.master')

@section('body')
<section class="py-4">
    <div class="container">
        <div class="row">
            
            <div class="col-md-8 mx-auto">
               <div class="card">
                <div class="card-header bg-primary"><h3 class="text-center text-white">Add Govt. Course</h3></div>
                <div class="card-body">
                    <h4 class="text-success text-center">{{ Session::get('message') }}</h4>
                    <form action="{{ route('govtcourse.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row mb-4">
                           <label for="title" class="col-md-3">Title</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" placeholder="title" id="title" name="title">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="subtitle" class="col-md-3">Subtitle</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" placeholder="subtitle" id="subtitle" name="subtitle">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="sort_description" class="col-md-3">Sort description</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" placeholder="sort_description" id="sort_description" name="sort_description">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="long_description" class="col-md-3">Long description</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" placeholder="long_description" id="long_description" name="long_description">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="starting_date" class="col-md-3">Starting Date</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" placeholder="starting_date" id="starting_date" name="starting_date">
                           </div>
                        </div>
                        <div class="row mb-4">
                           <label for="course_duration" class="col-md-3">Course Duration</label>
                           <div class="col-md-9">
                               <input type="text" class="form-control" placeholder="course_duration" id="course_duration" name="course_duration">
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
                               <button class="btn btn-primary" type="submit">Create Govt.Course</button>
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

