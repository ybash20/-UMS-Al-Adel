@extends('layouts.master')
@section('title','Grades')

@section('main')
<style>
    .container-grades{
        margin: 160px;
    }
</style>
<div class="container-grades">
    <h1>Grades</h1>
    @if ($grades !== null && $grades->isNotEmpty())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Course ID</th>
                <th>Grade 30</th>
                <th>Grade 70</th>
                <th>Grade 100</th>
                <th>S Point</th>
                <th>Note</th>
                <th>Turn</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $grade)
            <tr>
                <td>{{ $grade->Student_ID }}</td>
                <td>{{ $grade->Course_ID }}</td>
                <td>{{ $grade->Grade_30 }}</td>
                <td>{{ $grade->Grade_70 }}</td>
                <td>{{ $grade->Grade_100 }}</td>
                <td>{{ $grade->Spoint }}</td>
                <td>{{ $grade->Note }}</td>
                <td>{{ $grade->Turn }}</td>
                <td>{{ $grade->Semester }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif ($grades !== null && $grades->isEmpty())
    <div class="alert alert-info">{{ $message }}</div>
@else
    <div class="alert alert-danger">An error occurred while retrieving the grades.</div>
@endif
</div>

@endsection
