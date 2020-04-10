@extends('gakuru.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h3 class="text-center">
                   Add Student
                </h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('store') }}">
                            @csrf
                            <div class="form-group">
                              <label for="full_name">Full Name</label>
                              <input type="text" class="form-control" name="full_name">
                              <small id="emailHelp" class="form-text text-muted">Please enter your full name</small>
                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Date Of Birth</label>
                                <input type="date" class="form-control" name="date_of_birth">
                                <small id="emailHelp" class="form-text text-muted">Please enter your Date of Birth</small>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea type="text" class="form-control" name="address"></textarea>
                                <small id="emailHelp" class="form-text text-muted">Please enter your Physical Address</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Student</button>
                          </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
