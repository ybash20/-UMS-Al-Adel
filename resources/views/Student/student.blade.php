@extends('layouts.master')
@section('title', lang('Students'))

@section('main')
<link rel="stylesheet" href="css/student.css">
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
