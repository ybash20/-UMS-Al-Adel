@extends('layouts.master')
@section('title', lang('Students'))

@section('main')
<link rel="stylesheet" href="css/student.css">
    <style>
        .alert-warning {
            border: 1px solid transparent;
            padding: 15px;
            border-color: #00b700;
            margin-top: 60px;
            border-radius: 3px;
            background-color: #f1f1f1 !important;
            color: #00b700 !important;
            animation: ani .5s;
            position: relative;
            text-align: center;
            font-size: 16px;
            width: 25%;
            transform: translateX(150%);
        }
    </style>
    <script>
        setTimeout(function() {
            document.querySelector(".alert-warning").style.display = 'none';
        }, 5000);

    </script>
        @if (Session::get('message') != '')
            <div class='alert-warning'>
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="center">
        <div class="image-container">
            <figure>
                <a href="{{ route('StudentGrades') }}">
                    <img src="{{ asset('vendor/ums/assets/grades.png') }}" alt={{ lang('Grades') }}>
                </a>
                <figcaption>{{ lang('Grades') }}</figcaption>
            </figure>
        </div>
    
        <div class="image-container">
            <figure>
                <a href="{{ route('StudentTimetables') }}">
                    <img src="{{ asset('vendor/ums/assets/timetables.png') }}" alt={{ lang('timetables') }}>
                </a>
                <figcaption>{{ lang('timetables') }}</figcaption>
            </figure>
        </div>
    
        <div class="center">
            <div class="image-container">
                <figure>
                    <a href="{{ route('StudentStudyplan') }}">
                        <img src="{{ asset('vendor/ums/assets/study_plan.png') }}" alt={{ lang('studyplan') }}>
                    </a>
                    <figcaption>{{ lang('studyplan') }}</figcaption>
                </figure>
            </div>
        </div>
    </div>
    
@endsection
