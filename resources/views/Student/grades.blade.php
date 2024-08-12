@extends('layouts.master')
@section('title', lang('Grades'))

@section('main')

@if (App::getLocale() == 'ar')
    <link rel="stylesheet" href="css/cssAr/Grades.css">
@else
    <link rel="stylesheet" href="css/cssEN/Grades.css">
@endif

<div class="container-grades">
    @if ($student->Not_Allowed_Show)
        <h1 style="text-align: center;font-size: 48px;">
            {{ lang('not_allowed_show') }}
        </h1>
        <h2 style="text-align: center;font-size: 28px;">
            {{ lang('not_allowed_show_p') }}
        </h2>
    @else
    <div style="display: flex; justify-content: space-between;">
        <div class="divstudent">
            <h1>{{ lang('Grades Student') }}</h1>
            <h2>{{ lang('Student ID') }} {{ $student->id }}</h2>
            @if (App::getLocale() == 'ar')
            <h2>{{ lang('Student Name') }} {{ $student->Name_Arabic}}</h2>
            @else
            <h2>{{ lang('Student Name') }} {{ isset($student->Name_English) ? $student->Name_English : $student->Name_Arabic}}</h2>
            @endif
        </div>
        <div class="pic" >
            <img style="width: 200px;margin: 0 150px;" src="{{ asset("image/user.png") }}" />
        </div>
    </div>
        @if ($grades !== null && $grades->isNotEmpty())
            @php
                $latestSemester = $grades->max('Semester');
                $semesterGrades = $grades->where('Semester', $latestSemester);
            @endphp
            <h2 style="font-size: 23px;">{{ lang('Semester') }} {{ $latestSemester }}</h2>
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
                            @if (App::getLocale() == 'ar')
                            <td>{{ $total->course->Name_Arabic }}</td>
                            @else
                                <td>{{ $total->course->Name_English }}</td>
                            @endif

                            <td>{{ $total->Grade_30 }}</td>
                            <td>{{ $total->Grade_70 }}</td>
                            <td>{{ $total->Grade_100 }}</td>
                            <td>{{ $total->Spoint }}</td>

                            @if (App::getLocale() == 'ar')
                                <td>{{ $total->Appreciation_Arabic }}</td>
                            @else
                                <td>{{ isset($total->Appreciation_English) ? $total->Appreciation_English : $total->Appreciation_Arabic}}</td>
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

                                        @if (App::getLocale() == 'ar')
                                            <td>{{ $total->course->Name_Arabic }}</td>
                                        @else
                                            <td>{{ $total->course->Name_English }}</td>
                                        @endif

                                        <td>{{ $total->Grade_30 }}</td>
                                        <td>{{ $total->Grade_70 }}</td>
                                        <td>{{ $total->Grade_100 }}</td>
                                        <td>{{ $total->Spoint }}</td>

                                        @if (App::getLocale() == 'ar')
                                            <td>{{ $total->Appreciation_Arabic }}</td>
                                        @else
                                            <td>{{ isset($total->Appreciation_English) ? $total->Appreciation_English : $total->Appreciation_Arabic}}</td>
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
