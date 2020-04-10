@extends('gakuru.layouts.app')

@section('content')
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Student Number</th>
        <th scope="col">Student Name</th>
        <th scope="col">Date</th>
        <th scope="col">Amount</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($fees as $fee)
        <tr>
            <th scope="row">{{ $fee->id}}</th>
            <td>{{ $fee->student_number }}</td>
            <td>{{ $fee->students->full_name }}</th>
            <td>{{ $fee->date_of_payment }}</td>
            <td>{{ $fee->amout }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
