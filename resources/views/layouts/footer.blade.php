<footer class="footer">
    <div class="region-footer">
        <div class="block-social-media-links">
            <ul class="footer-ul social-media-links--platforms inline">
                <li>
                    <a class="social-media-icon" href="https://www.youtube.com/@user-nz4ef8qy7h" target="_blank"
                        rel="nofollow">
                        <span class="fab fa-youtube "></span>
                    </a>
                </li>
                <li>
                    <a class="social-media-icon" href="https://www.facebook.com/Aladel.University/" target="_blank"
                        rel="nofollow">
                        <span class="fab fa-facebook "></span>
                    </a>
                </li>
                <li>
                    <a class="social-media-icon" href="https://www.instagram.com/aladel.un?igsh=NnkwcDM0eTRkbTVh"
                        target="_blank" rel="nofollow">
                        <span class="fab fa-instagram "></span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="block-footerinner">
            <div class="footer-inner">
                <div class="section-content">
                    <div class="section_content_container">
                        <h2 class="section_title">
                            {{ cbLang('our_services') }}
                        </h2>
                        <ul class="footer-ul section_list">
                            <li>
                                <a href="{{ route('StudentgetLogin') }}">
                                    <span>
                                        {{ cbLang('Student_login') }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('registration') }}">
                                    <span>
                                        {{ cbLang('electronic_registration') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section-content">
                    <div class="section_content_container">
                        <h2 class="section_title">
                            {{ cbLang('important_link') }}
                        </h2>
                        <ul class="footer-ul section_list">
                            <li>
                                <a href="{{ route('news') }}">
                                    <span>
                                        {{ cbLang('Events and news') }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('library') }}">
                                    <span>
                                        {{ cbLang('Library') }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('University_guide') }}">
                                    <span>
                                        {{ cbLang('University guide') }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Students_Affairs') }}">
                                    <span>
                                        {{ cbLang('Students Affairs') }}
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="section-content">
                    <h2 class="section_title">
                        {{ cbLang('University location') }}
                    </h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8937.163427615887!2d44.97096182687302!3d12.835120648389855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x161e1d29e7cb165f%3A0x738af63d3af0cc21!2z2KzYp9mF2LnYqSDYp9mE2LnYp9iv2YQg2YTZhNi52YTZiNmFINin2YTYpdmG2LPYp9mG2YrYqSDZiNin2YTYqti32KjZitmC2YrYqQ!5e0!3m2!1sar!2s!4v1715543660465!5m2!1sar!2s" class="map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen="false" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="section-content">
                    <a href="#" rel="noreferrer" target="_blank">
                        <h2 class="section_title">
                            {{ cbLang('University logo') }}
                        </h2>
                        <img src="{{ asset('vendor/crudbooster/assets/LOGO.png') }}" />
                    </a>
                </div>
            </div>
        </div>
        <div class="region-bottom-footer">
            <div class="block-copyright-footer">
                <strong>{{ cbLang('all_rights_reserved') }} &copy;. {{ cbLang('copyright') }} <?php echo date('Y') ?> </strong>
            </div>
            <nav class="copyright-links">
                <ul class="footer-ul nav navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            {{ cbLang('Copyrights') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            {{ cbLang('privacy_policy') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            {{ cbLang('terms_of_use') }}
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</footer>
