@extends('layouts.master')
@section('title','Grades')

@section('main')
<style>
    .container-grades{
        margin: 160px;
    }
    .student-name{
        margin-bottom: 2%;
        text-align: center;
        justify-content: center;
        font-size: 30px;
    }
</style>

<div class="container-grades">
    <h1>Grades</h1>
    @if ($grades !== null && $grades->isNotEmpty())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Grade 30</th>
                <th>Grade 70</th>
                <th>Grade 100</th> <!-- قيمة المجموع -->
                <th>S Point</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($grades as $total)
            <tr>
                <td>{{ $total->course->Name }}</td>
                <td>{{ $total->Grade_30 }}</td>
                <td>{{ $total->Grade_70 }}</td>
                <td>{{ $total->Grade_100 }}</td> <!-- هنا يتم عرض القيمة المحسوبة -->
                <td>{{ $total->Spoint }}</td>
                <td>{{ $total->Semester }}</td>
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
