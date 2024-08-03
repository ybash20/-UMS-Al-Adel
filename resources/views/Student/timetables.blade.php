@extends('layouts.master')

@section('title', lang('timetables'))

@section('main')
<link rel="stylesheet" href="{{ asset('css/timetables.css') }}">
<div class="main_timetable_stu">
  <div class="container_timetable_stu">
      @if($major && $major->Timetable)
          <div class="item_timetable_stu">
              {!! $major->Timetable !!}
          </div>
      @else
          <div class="item_timetable_stu">No Courses Available</div>
      @endif
  </div>
</div>
@endsection