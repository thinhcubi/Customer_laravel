@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <h5 class="card-header">Add new customer</h5>
            <div class="card-body">
                <form method="post" action="{{route('customer.store')}}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="" name="name">
                    </div>
                    <div class="form-group">
                        <label>Dob</label>
                        <input type="text" value="" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

@endsection
