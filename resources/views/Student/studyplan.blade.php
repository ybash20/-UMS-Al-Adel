@extends('layouts.master')

@section('title', lang('studyplan'))

@section('main')
<style>
  .main_timetable_stu {
      margin-top: 7%;
      margin-bottom: 3%;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
      height: auto;
  }

  .container_timetable_stu {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      width: 80%;
      gap: 10px;
      margin-top: 10%;
  }

  .item_timetable_stu {
      flex: 1 1 300px; /* يسمح للعناصر بأن تأخذ مساحة مرنة */
      margin: 10px;
      padding: 20px;
      background-color: #f0f0f0;
      border: 1px solid #ccc;
      border-radius: 5px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      max-width: 100%;
      margin: auto
  }

  .item_timetable_stu img {
      max-width: 100%; /* تقييد عرض الصورة لعرض العنصر */
      height: auto; /* الحفاظ على نسبة العرض إلى الارتفاع */
      margin-bottom: 10px; /* إضافة مساحة أسفل الصورة */
      border-radius: 5px; /* زوايا مستديرة للصورة */
      border: 2px solid #5bb3fa; /* لون البوردر */
  }

  @media (max-width: 600px) {
      .main_timetable_stu {
          flex-direction: column;
          align-items: center;
      }
      .container_timetable_stu {
          width: 100%;
          gap: 5px;
      }
      .item_timetable_stu {
          width: 100%;
          padding: 10px;
      }
  }

  @media (min-width: 600px) and (max-width: 900px) {
      .main_timetable_stu {
          flex-direction: column;
          align-items: center;
      }
      .container_timetable_stu {
          width: 90%;
          gap: 10px;
      }
      .item_timetable_stu {
          width: 100%;
          padding: 15px;
      }
  }

  @media (min-width: 900px) {
      .main_timetable_stu {
          flex-direction: row;
          justify-content: center;
      }
      .container_timetable_stu {
          width: 80%;
          gap: 20px;
      }
      .item_timetable_stu {
          width: 300px; /* العرض الثابت للعناصر */
          padding: 20px;
      }
  }
</style>
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
