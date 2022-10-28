@extends('admin.master')

@section('body')
<section>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Institute List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SL NO.</th>
                            <th>Name</th>
                            <th>Code</th>
                            <th>About</th>
                            <th>Person</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Logo</th>
                            <th>Actiion</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ( $institutes as $institute)
                        <tr>
                            <td>{{ $loop->iteration }} </td>
                            <td>{{ $institute->name }}</td>
                            <td>{{ $institute->code }}</td>
                            <td>{{ $institute->about }}</td>
                            <td>{{ $institute->person }}</td>
                            <td>{{ $institute->mobile }}</td>
                            <td>{{ $institute->email }}</td>
                            <td>{{ $institute->address }}</td>
                            <td>
                                <img src="{{ asset($institute->image) }}" alt="" height="40" width="80">
                            </td>
                            <td>
                                <a href="{{ route('institute.edit',['id'=>$institute->id]) }}" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{ route('institute.delete',['id'=>$institute->id]) }}" class="btn btn-danger   btn-sm"
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