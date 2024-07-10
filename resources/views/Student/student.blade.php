@extends('layouts.master')
@section('title', cbLang('Students'))

@section('main')
<link rel="stylesheet" href="css/student.css">
    <div class="center">
        <div class="image-container">
            <figure>
                <a href="{{ route('StudentGrades') }}">
                    <img src="{{ asset('vendor/crudbooster/assets/grades.png') }}" alt={{ cbLang('Grades') }}>
                </a>
                <figcaption>{{ cbLang('Grades') }}</figcaption>
            </figure>
        </div>
    
        <div class="image-container">
            <figure>
                <a href="{{ route('StudentTimetables') }}">
                    <img src="{{ asset('vendor/crudbooster/assets/timetables.png') }}" alt={{ cbLang('timetables') }}>
                </a>
                <figcaption>{{ cbLang('timetables') }}</figcaption>
            </figure>
        </div>
    
        <div class="center">
            <div class="image-container">
                <figure>
                    <a href="{{ route('StudentStudyplan') }}">
                        <img src="{{ asset('vendor/crudbooster/assets/study_plan.png') }}" alt={{ cbLang('studyplan') }}>
                    </a>
                    <figcaption>{{ cbLang('studyplan') }}</figcaption>
                </figure>
            </div>
        </div>
    </div>
    
@endsection
