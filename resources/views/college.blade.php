@extends('layouts.master')
@section('title', 'Colleges')


@section('main')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Colleges</title>
        <style>
            .body_form_college {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .container {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                margin-top: 20px;
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
    </head>

    <body class="body_form_college">

        <div class="container">
            <div class="college">
                <figure>
                    <figcaption>Engineering College</figcaption>
                    <p>Specialization: Computer Science</p>
                </figure>
            </div>

            <div class="college">
                <figure>
                    <figcaption>Business College</figcaption>
                    <p>Specialization: Business Administration</p>
                </figure>
            </div>

            <div class="college">
                <figure class="figure">
                    <figcaption class="figcaption">Languages College</figcaption>
                    <p class="p">Specialization: Languages</p>
                </figure>
            </div>

            <div class="college">
                <figure>
                    <figcaption>Law College</figcaption>
                    <p>Specialization: Sharia and Law</p>
                </figure>
            </div>

            <div class="college">
                <figure>
                    <figcaption>Islamic Studies College</figcaption>
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

    </body>

    </html>

@endsection
