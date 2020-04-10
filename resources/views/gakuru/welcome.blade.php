@extends('gakuru.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h3 class="text-center">
                    Welcome
                </h3>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/student" class="btn btn-md btn-primary">
                                Add Student
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href = "/fee" class="a btn btn-md btn-secondary">
                                Fee Payment
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
