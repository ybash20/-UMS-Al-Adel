@extends('layouts.master')
@section('title','Grades')

@section('main')
<style>
   /* Styles for the table */
.table {
    width: 100%;
    border-collapse: collapse;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
}

.table th,
.table td {
    padding: 16px 20px;
    text-align: left;
}

.table th {
    background-color:#5ea3eb;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.table tbody tr:nth-child(even) {
    background-color: #f5f5f5;
}

.table tbody tr:hover {
    background-color: #e6f7e6;
}

.table tbody td {
    border-bottom: 1px solid #ddd;
    transition: background-color 0.3s ease;
}

/* Styles for the container */
.container-grades {
    margin: 160px auto;
    max-width: 1200px;
    background-color: #fff;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    padding: 40px;
}

.student-name {
    margin-bottom: 30px;
    text-align: center;
    font-size: 35px;
    font-weight: bold;
    color: #333;
}

/* Responsive styles */
@media (max-width: 1024px) {
    .container-grades {
        margin: 80px auto;
        padding: 30px;
    }

    .student-name {
        font-size: 30px;
    }

    .table th,
    .table td {
        padding: 12px 16px;
    }
}

@media (max-width: 768px) {
    .container-grades {
        margin: 40px auto;
        padding: 20px;
    }

    .student-name {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        padding: 10px 14px;
    }
}

@media (max-width: 480px) {
    .container-grades {
        margin: 20px auto;
        padding: 15px;
    }

    .student-name {
        font-size: 15px;
        margin-bottom: 15px;
    }

    .table th,
    .table td {
        padding: 7px 2px;
        font-size: 13px;
    }
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
