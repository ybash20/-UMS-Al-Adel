@extends('layouts.master')
@section('title', cbLang('Students'))

@section('main')
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .image-container {
            text-align: center;
            margin: 10px;
        }

        .image-container img {
            width: 200px;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .image-container figcaption {
            margin-top: 10px;
            font-size: 16px;
        }
        

        @media (max-width: 854px) {
            .center {
                flex-direction: column;
                align-items: center;
                /* height: auto; */
                width: auto;
            }

            .image-container {
                margin-top: 68px;
            }
        }
    </style>
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
