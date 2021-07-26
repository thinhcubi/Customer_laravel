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
                        <input type="text" value="{{old('name')}}" name="name"
                        class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Dob</label>
                        <input type="text" value="{{old('dob')}}" name="dob"
                        class="form-control @error('dob') is-invalid @enderror">
                        @error('dob')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>

@endsection
