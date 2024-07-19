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
            <figure>
                <h2>{{ cbLang('College of Computer Science') }}</h2>
            </figure>
            <div class="overlay">
                <i class="fas fa-graduation-cap"></i>
            </div>
        </div>
        <div class="college">
            <figure>
                <h2>{{ cbLang('College of Administrative Sciences') }}</h2>
            </figure>
            <div class="overlay">
                <i class="fas fa-graduation-cap"></i>
            </div>
        </div>
        <div class="college">
            <figure class="figure">
                <h2>{{ cbLang('College of Quranic sciences and Islamic studies') }}</h2>
            </figure>
            <div class="overlay">
                <i class="fas fa-graduation-cap"></i>
            </div>
        </div>
        <div class="college">
            <figure>
                <h2>{{ cbLang('College of Sharia and Law') }}</h2>
            </figure>
            <div class="overlay">
                <i class="fas fa-graduation-cap"></i>
            </div>
        </div>
        <div class="college">
            <figure>
                <h2>{{ cbLang('College of Languages and Translation') }}</h2>
            </figure>
            <div class="overlay">
                <i class="fas fa-graduation-cap"></i>
            </div>
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
