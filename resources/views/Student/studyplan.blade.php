@extends('layouts.master')

@section('title', lang('studyplan'))

@section('main')
<link rel="stylesheet" href="{{ asset('css/studyplan.css') }}">
<div class="main_timetable_stu">
  <div class="container_timetable_stu">
      @if($major && $major->Courses)
          <div class="item_timetable_stu">
              {!! $major->Courses !!}
          </div>
      @else
          <div class="item_timetable_stu">No Courses Available</div>
      @endif
  </div>
</div>
@endsection