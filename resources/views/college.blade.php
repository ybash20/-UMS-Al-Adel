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
            /* margin-top: 80px; */
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
    </style>


    <div class="body_form_college">

        <div class="college_container">
            <div class="college">
                <figure>
                    <h2> College of Computer </h2>
                    <p> Computer Science </p>
                    <p> Information Technology </p>
                    <p>
                </figure>
            </div>

            <div class="college">
                <figure>
                    <h2> College of Business Administration</h2>
                    <p>Specialization: Business Administration</p>
                </figure>
            </div>

            <div class="college">
                <figure class="figure">
                    <h2> of Islamic Studies and Qur’anic Sciences </h2>
                    <p>Specialization: Languages</p>
                </figure>
            </div>

            <div class="college">
                <figure>
                    <h2> College of Sharia and Law </h2>

                </figure>
            </div>

            <div class="college">
                <figure>
                    <h2> of Languages and Translation </h2>
                    <p>Specialization: Quran and Jurisprudence</p>
                </figure>
            </div>
        </div>

        <script>
            const colleges = document.querySelectorAll('.college');

            colleges.forEach(college => {
                college.addEventListener('click', () => {
                    college.classList.toggle('selected');
                });
            });
        </script>
    </div>
@endsection
