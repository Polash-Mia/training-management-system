@extends('admin.master')

@section('body')
<section>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Govt. Course List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Title</th>
                            <th>Sub title</th>
                            <th>sort_description</th>
                            <th>long_description</th>
                            <th>starting_date</th>
                            <th>course_duration</th>
                            <th>Image</th>                            
                            <th>Actiion</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ( $courses as $course)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->subtitle }}</td>
                            <td>{{ $course->sort_description }}</td>
                            <td>{{ $course->long_description }}</td>
                            <td>{{ $course->starting_date }}</td>
                            <td>{{ $course->course_duration }}</td>                          
                            <td>
                                <img src="{{ asset($course->image) }}" alt="" height="40" width="80">
                            </td>
                            <td>
                                <a href="{{ route('govtcourse.edit',['id'=>$course->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('govtcourse.delete',['id'=>$course->id]) }}" class="btn btn-danger   btn-sm"
                                    onclick="return confirm('Are You Sure to Delete this.')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            
                        </tr>
                        @endforeach
                        
                                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</section>
@endsection