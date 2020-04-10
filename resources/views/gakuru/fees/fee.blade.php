@extends('gakuru.layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <h3 class="text-center">
                   Add Payment
                </h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('storefee') }}">
                            @csrf
                            <div class="form-group">
                              <label for="student_number">Student Number</label>
                              <select  class="form-control" name="student_number">
                                <option selected disabled>Select your student</option>
                                @foreach ($students as $item)
                                    <option value="{{ $item->student_number }}">{{ $item->full_name }}
                                        <small>{{ $item->student_number }}</small>
                                    </option>
                                @endforeach
                              </select>
                              <small id="emailHelp" class="form-text text-muted">Please enter your Student Number</small>
                            </div>
                            <div class="form-group">
                                <label for="date_of_payment">Date Of Payment</label>
                                <input type="date" class="form-control" name="date_of_payment">
                                <small id="emailHelp" class="form-text text-muted">Please enter your Date of Payment</small>
                            </div>
                            <div class="form-group">
                                <label for="amout">Amount</label>
                                <input type="number" class="form-control" name="amout">
                                <small id="emailHelp" class="form-text text-muted">Please enter your Amount</small>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Payment</button>
                          </form>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection
