<style>
    /* College section styles */
    .body_form_college {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem;
    }

    .statistics-header {
        margin-bottom: 2rem;
    }

    .statistics-header-inner h3 {
        font-size: 2rem;
        text-align: center;
        color: #007bff;
        margin-bottom: 1rem;
    }

    .college_container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .college {
        position: relative;
        background-color: #f8f9fa;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .college_2h:hover {
    }

    .college figure {
        padding: 2rem;
        margin: 0;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .college h2 {
        padding: 2rem;
        margin: 0;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .college figure h2 {
        font-size: 1.2rem;
        text-align: center;
        color: #fbfbfb;
    }

    .college .overlay {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 123, 255, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        transition: top 0.3s ease;
    }

    .college:hover .overlay {
        top: 0;
        color: white;
    }

    .college:hover .college_2h {
      display: none;
    }

    .college .overlay i {
        font-size: 3rem;
        color: white;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .college_container {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
        .college figure h2 {
            font-size: 1rem;
        }
    }
</style>
<div class="body_form_college">
    <div class="statistics-header">
        <div class="statistics-header-inner">
            <h3 style="color: #007bff">
                {{ cbLang('Colleges') }}
            </h3>
        </div>
    </div>
    <div class="college_container">
        <div class="college">
            <h2 class="college_2h">{{ cbLang('College of Computer Science') }}</h2>
            <figure class="overlay">
                <h2>{{ cbLang('College of Computer Science') }}</h2>
            </figure>
        </div>
        <div class="college">
            <h2 class="college_2h">{{ cbLang('College of Administrative Sciences') }}</h2>
            <figure class="overlay">
                <h2>{{ cbLang('College of Administrative Sciences') }}</h2>
            </figure>
        </div>
        <div class="college">
            <h2 class="college_2h">{{ cbLang('College of Quranic sciences and Islamic studies') }}</h2>

            <figure class="overlay">
                <h2>{{ cbLang('College of Quranic sciences and Islamic studies') }}</h2>
            </figure>
        </div>
        <div class="college">
            <h2 class="college_2h">{{ cbLang('College of Sharia and Law') }}</h2>

            <figure class="overlay">
                <h2>{{ cbLang('College of Sharia and Law') }}</h2>
            </figure>
        </div>
        <div class="college">
            <h2 class="college_2h">{{ cbLang('College of Languages and Translation') }}</h2>
            <figure class="overlay">
                <h2>{{ cbLang('College of Languages and Translation') }}</h2>
            </figure>

        </div>
    </div>
</div>
@push('bottom')
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
@endpush
