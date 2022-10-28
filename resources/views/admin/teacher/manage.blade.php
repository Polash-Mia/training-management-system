@extends('institute.master')

@section('body')
<section>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Teacher List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Teacher Name</th>
                            {{-- <th>Institute Name</th> --}}
                            <th>Code</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Nid</th>                           
                            <th>Address</th>
                            <th>District</th>
                            <th>Image</th>
                            <th>Actiion</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ( $teachers as $teacher)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td>{{ $teacher->name }}</td>
                            {{-- <td>{{ $teacher->institute->name }}</td> --}}
                            <td>{{ $teacher->code }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td>{{ $teacher->mobile }}</td>
                            <td>{{ $teacher->nid }}</td>
                            
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->district }}</td>
                            <td>
                                <img src="{{ asset($teacher->image) }}" alt="" height="40" width="80">
                            </td>
                            <td>
                                <a href="{{ route('teacher.edit',['id'=>$teacher->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('teacher.delete',['id'=>$teacher->id]) }}" class="btn btn-danger   btn-sm"
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