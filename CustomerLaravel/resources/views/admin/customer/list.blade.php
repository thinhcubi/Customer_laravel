@extends('admin.master')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card strpied-tabled-with-hover">
                        <div class="card-header ">
                            <h4 class="card-title">List Customer</h4>
                        </div>
                        <div class="btn-xl" style="margin-left: 1px">
                            <a href="{{route('customer.create')}}">Add</a>
                        </div>
                        <div class="card-body table-full-width table-responsive">
                            <table class="table table-hover table-striped">
                                <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>dob</th>
                                <th>Email</th>
                                </tr>
                             <tbody>
                             @foreach($customers as $customer)
                             <tr>
                                 <td>{{$customer->id}}</td>
                                 <td>{{$customer->name}}</td>
                                 <td>{{$customer->dob}}</td>
                                 <td>{{$customer->email}}</td>
                             </tr>
                             @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection
