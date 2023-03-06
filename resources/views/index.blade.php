@extends('layouts.master')
@section('main-content')
<h1>List of Applications</h1>
<div class="container">
    <div class="text-end mb-5"><a class="btn btn-info" href="{{route('application.store')}}">New Applicants</a>
    </div>
 <table class="table table-bordered table-striped">
    <thead style="">
        <th>Name</th><th>Email</th><th>Address</th>
    </thead>
    <tbody>
        @forelse($applicants as $appl)
        <tr>
            <td>{{$appl->name}}</td><td>{{$appl->email}}</td><td>{{$appl->address}}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">No data Found</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
