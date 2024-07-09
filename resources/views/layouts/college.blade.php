<div class="body_form_college">
    <div class="statistics-header">
        <div class="statistics-header-inner">
            <h3 style="color: #007bff">
                الكليات
            </h3>
        </div>
    </div>
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
