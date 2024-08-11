@extends('layouts.master')
@section('title', lang('Grades'))

@section('main')

@if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="css/cssAr/Grades.css">
@else
    <link rel="stylesheet" href="css/cssEN/Grades.css">
@endif

<div class="container-grades">
        <div class="divstudent">
            <h1>{{ lang('Grades Student') }}</h1>
            <h2>{{ lang('Student ID') }} {{ $student->id }}</h2>
            @if (App::getLocale() == 'ar')
            <h2>{{ lang('Student Name') }} {{ $student->Name_Arabic}}</h2>
            @else
            <h2>{{ lang('Student Name') }} {{ $student->Name_English}}</h2>
            @endif
        </div>


        @if ($grades !== null && $grades->isNotEmpty())
            @php
                $latestSemester = $grades->max('Semester');
                $semesterGrades = $grades->where('Semester', $latestSemester);
            @endphp
            <h2>{{ lang('Semester') }} {{ $latestSemester }}</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>{{ lang('Course Name') }}</th>
                        <th>{{ lang('Semester Grade') }}</th>
                        <th>{{ lang('Exam Grade') }}</th>
                        <th>{{ lang('Total Grade') }}</th>
                        <th>{{ lang('S Point') }}</th>
                        <th>{{ lang('Appreciation') }}</th>
                        <th>{{ lang('Note') }}</th>
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
                            @if (App::getLocale() == 'ar')
                            <td>{{ $total->Appreciation_Arabic }}</td>
                            @else
                            <td>{{ $total->Appreciation_English }}</td>
                            @endif
                            <td>{{ $total->Note }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button class="btn btn-primary" id="toggleAllSemestersBtn" onclick="toggleAllSemesters()">{{ lang('Show All Semesters') }}</button>

            <div class="all-semesters" style="display: none;">
                @foreach ($grades->groupBy('Semester') as $semester => $semesterGrades)
                    @if ($semester != $latestSemester)
                        <h2>{{ lang('Semester') }} {{ $semester }}</h2>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{ lang('Course Name') }}</th>
                                    <th>{{ lang('Semester Grade') }}</th>
                                    <th>{{ lang('Exam Grade') }}</th>
                                    <th>{{ lang('Total Grade') }}</th>
                                    <th>{{ lang('S Point') }}</th>
                                    <th>{{ lang('Appreciation') }}</th>
                                    <th>{{ lang('Note') }}</th>
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
                                        @if (App::getLocale() == 'ar')
                                        <td>{{ $total->Appreciation_Arabic }}</td>
                                        @else
                                        <td>{{ $total->Appreciation_English }}</td>
                                        @endif
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
            <div class="alert alert-info">{{ isset($message) ? $message : null }}</div>
        @else
            <div class="alert alert-danger">{{ lang('An error occurred while retrieving the grades.') }}</div>
        @endif
    </div>

    <script>
        var toggleAllSemestersBtn = document.getElementById('toggleAllSemestersBtn');

        function toggleAllSemesters() {
            var allSemesters = document.querySelector('.all-semesters');
            if (allSemesters.style.display === 'none') {
                allSemesters.style.display = 'block';
                toggleAllSemestersBtn.textContent = '{{ lang('Hide All Semesters') }}';
            } else {
                allSemesters.style.display = 'none';
                toggleAllSemestersBtn.textContent = '{{ lang('Show All Semesters') }}';
            }
        }
    </script>
@endsection
