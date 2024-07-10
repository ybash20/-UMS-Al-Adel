@extends('layouts.master')
@section('title', cbLang('Grades'))

@section('main')

@if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="css/cssAr/Grades.css">
@else
    <link rel="stylesheet" href="css/cssEN/Grades.css">
@endif

<div class="container-grades">
        <div class="divstudent">
            <h1>{{ cbLang('Grades Student') }}</h1>
            <h2>{{ cbLang('Student ID') }} {{ $student->id }}</h2>
            <h2>{{ cbLang('Student Name') }} {{ $student->Name }}</h2>
        </div>

        @if ($grades !== null && $grades->isNotEmpty())
            @php
                $latestSemester = $grades->max('Semester');
                $semesterGrades = $grades->where('Semester', $latestSemester);
            @endphp
            <h2>{{ cbLang('Semester') }} {{ $latestSemester }}</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>{{ cbLang('Course Name') }}</th>
                        <th>{{ cbLang('Semester Grade') }}</th>
                        <th>{{ cbLang('Exam Grade') }}</th>
                        <th>{{ cbLang('Total Grade') }}</th>
                        <th>{{ cbLang('S Point') }}</th>
                        <th>{{ cbLang('Note') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($semesterGrades as $total)
                        <tr>
                            <td>{{ $total->course->Name }}</td>
                            <td>{{ $total->Grade_30 }}</td>
                            <td>{{ $total->Grade_70 }}</td>
                            <td>{{ $total->Grade_100 }}</td>
                            <td>{{ $total->Spoint }}</td>
                            <td>{{ $total->Note }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button class="btn btn-primary" id="toggleAllSemestersBtn" onclick="toggleAllSemesters()">{{ cbLang('Show All Semesters') }}</button>

            <div class="all-semesters" style="display: none;">
                @foreach ($grades->groupBy('Semester') as $semester => $semesterGrades)
                    @if ($semester != $latestSemester)
                        <h2>{{ cbLang('Semester') }} {{ $semester }}</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ cbLang('Course Name') }}</th>
                                    <th>{{ cbLang('Semester Grade') }}</th>
                                    <th>{{ cbLang('Exam Grade') }}</th>
                                    <th>{{ cbLang('Total Grade') }}</th>
                                    <th>{{ cbLang('S Point') }}</th>
                                    <th>{{ cbLang('Note') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($semesterGrades as $total)
                                    <tr>
                                        <td>{{ $total->course->Name }}</td>
                                        <td>{{ $total->Grade_30 }}</td>
                                        <td>{{ $total->Grade_70 }}</td>
                                        <td>{{ $total->Grade_100 }}</td>
                                        <td>{{ $total->Spoint }}</td>
                                        <td>{{ $total->Note }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                    @endif
                @endforeach
            </div>
        @elseif ($grades !== null && $grades->isEmpty())
            <div class="alert alert-info">{{ $message }}</div>
        @else
            <div class="alert alert-danger">{{ cbLang('An error occurred while retrieving the grades.') }}</div>
        @endif
    </div>

    <script>
        var toggleAllSemestersBtn = document.getElementById('toggleAllSemestersBtn');

        function toggleAllSemesters() {
            var allSemesters = document.querySelector('.all-semesters');
            if (allSemesters.style.display === 'none') {
                allSemesters.style.display = 'block';
                toggleAllSemestersBtn.textContent = '{{ cbLang('Hide All Semesters') }}';
            } else {
                allSemesters.style.display = 'none';
                toggleAllSemestersBtn.textContent = '{{ cbLang('Show All Semesters') }}';
            }
        }
    </script>
@endsection
