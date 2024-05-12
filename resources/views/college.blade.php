@extends('layouts.master')
@section('title', 'Colleges')


@section('main')


    <style>
        .body_form_college {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            width: auto;
            height: auto;
            margin-bottom: 0;
        }

        .college_container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 80px;
        }

        .college {
            margin: 20px;
            padding: 10px;
            width: 300px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.3s;
            position: relative;
            cursor: pointer;
        }

        .college:hover {
            transform: translateY(-5px);
        }

        .figure {
            margin: 0;
        }

        .figcaption {
            font-size: 1.5em;
            margin: 10px 0;
            color: #333;
        }

        .p {
            font-size: 1.2em;
            color: #555;
        }

        .college .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }

        .college:hover .overlay {
            opacity: 1;
        }

        .college .overlay i {
            font-size: 3em;
            color: #fff;
        }

        .college.selected {
            transform: scale(1.05);
        }
    </style>

    <div class="body_form_college">
        <div class="college_container">
            <div class="college">
                <figure>
                    <h2>College of Computer</h2>
                </figure>
                <div class="overlay">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </div>
            <div class="college">
                <figure>
                    <h2>College of Business Administration</h2>
                </figure>
                <div class="overlay">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </div>
            <div class="college">
                <figure class="figure">
                    <h2>College of Islamic Studies and Qur’anic Sciences</h2>
                </figure>
                <div class="overlay">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </div>

            <div class="college">
                <figure>
                    <h2>College of Sharia and Law</h2>
                </figure>
                <div class="overlay">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </div>

            <div class="college">
                <figure>
                    <h2>College of Languages and Translation</h2>

                </figure>
                <div class="overlay">
                    <i class="fas fa-graduation-cap"></i>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    <script>
        const colleges = document.querySelectorAll('.college');

        colleges.forEach(college => {
            college.addEventListener('click', () => {
                colleges.forEach(college => {
                    college.classList.remove('selected');
                });
                college.classList.add('selected');
            });
        });
    </script>
@endsection
