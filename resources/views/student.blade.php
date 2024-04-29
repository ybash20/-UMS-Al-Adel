<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student</title>
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

    @media (max-width: 768px) {
      .center {
        flex-direction: column;
        margin-bottom: 30px;
      }
    }
  </style>
</head>
<body>
  <div class="center">
    <div class="image-container">
      <figure>
        <a href="{{ route('grades') }}">
          <img src="{{ asset('vendor/crudbooster/assets/grades.png') }}" alt="الدرجات">
        </a>
        <figcaption>الدرجات</figcaption>
      </figure>
    </div>

    <div class="image-container">
      <figure>
        <a href="{{ route('timetables') }}">
          <img src="{{ asset('vendor/crudbooster/assets/timetables.png') }}" alt="الجداول الدراسية">
        </a>
        <figcaption>الجداول الدراسية</figcaption>
      </figure>
    </div>
  
   <div class="center">
    <div class="image-container">
      <figure>
        <a href="{{ route('studyplan') }}">
          <img src="{{ asset('vendor/crudbooster/assets/study_plan.png') }}" alt="الخطة الدراسية">    
        </a> 
             <figcaption>الخطة الدراسية</figcaption>
      </figure>
    </div>
   </div>
  </div>
  <footer>
    @include('footer')
  </footer>
</body>
</html>