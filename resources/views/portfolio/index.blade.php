@extends('layout.navbar')
@section('style', asset('css/portfolio.css'))

@section('title', 'Portfolio ')


{{--
    #############################################################

    -Portfolio skelton Page Home , About , Contact , service And Cv

    #############################################################
--}}


{{-- ? section of Body --}}
@section('body')
    <div class="home">
        @if (session('success'))
            <div class="toast d-block toast-container align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body  fw-bold ">
                        {{ session('success') }}
                    </div>
                    <button type="button" id="btnClose" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        @endif
        <video id="background-video" autoplay loop muted>
            <source src="{{ asset('media/video/3130284-uhd_3840_2160_30fps.mp4') }}" type="video/mp4">
        </video>
        <div class="content">
            <h1 class="text-center text-light">I am <span class="text-warning fw-bold">Ahmed Mansour ... </span></h1>
            <h1 class="fw-bold text-white text-center "><span id="typed" class="typed text-white text-center"></span>
            </h1>
        </div>
    </div>
@endsection


{{-- ? section of About --}}
@section('about')
    <div class="about container">
        <div class="row">

            <div class="about-left col-md-6 " id="aboutLeft">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="img w-100 p-2 rounded-4"> <img src="{{ asset('media/image/profile.jpg') }}"
                                class="rounded-4" width="100%" alt="Profile Image"> </div>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center">
                        <p class="align-itens-center  ">
                            <span class="fw-bold"> Name :</span>
                            <span> Ahmed Mansour </span>
                        </p>
                        <p class="align-itens-center  ">
                            <span class="fw-bold"> Profile : </span>
                            <span>Full Stack Developer</span>
                        </p>
                        <p class="align-itens-center  ">
                            <span class="fw-bold"> Email : </span>
                            <span> ahmedmanaour990@gmail.com</span>
                        </p>
                        <p class="align-itens-center  ">
                            <span class="fw-bold"> Phone : </span>
                            <span> 01119710541</span>
                        </p>

                    </div>
                </div>
                <div>
                    <p class="px-2 fw-bold fs-4  m-0">{{ __('word.SKILLS') }}</p>
                    <div class="w-100">
                        <span>Java Script</span>
                        <div class="progress" role="progressbar" aria-label="primary example" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar text-bg-primary" style="width: 90%">90%</div>
                        </div>
                    </div>
                    <div class="w-100">
                        <span>Jquery</span>
                        <div class="progress" role="progressbar" aria-label="primary example" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar text-bg-primary" style="width: 60%">60%</div>
                        </div>
                    </div>
                    <div class="w-100">
                        <span>PHP</span>
                        <div class="progress" role="progressbar" aria-label="primary example" aria-valuenow="85"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar text-bg-primary" style="width: 85%">85%</div>
                        </div>
                    </div>
                    <div class="w-100">
                        <span>Laravel</span>
                        <div class="progress" role="progressbar" aria-label="primary example" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar text-bg-primary" style="width: 90%">90%</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-right col-md-6 " id="aboutRight">
                <div class="container p-3">
                    <h1>{{ __('word.ABOUT') }}</h1>
                    <p>Detail-oriented Junior Full Stack Web Developer proficient in
                        PHP/ Laravel, front-end technologies including Bootstrap,
                        dedicated with a passion for creating dynamic and user-friendly
                        digital experiences, Excited to contribute my skills in a
                        collaborate teams to drive innovative solutions.
                    </p>
                    <ul>
                        <li><strong>Backend Development:</strong> I have extensive experience in backend development using
                            PHP, with Laravel
                            being my framework of choice. From designing robust APIs to implementing complex business logic,
                            I thrive on building scalable and secure server-side solutions.
                        </li>
                        <li><strong>Frontend Development:</strong> Equipped with proficiency in HTML, CSS, and JavaScript, I
                            craft elegant
                            user interfaces that enhance the user experience. Whether it's responsive layouts or interactive
                            elements, I ensure that every frontend aspect is meticulously designed and seamlessly
                            integrated.


                        </li>
                        <li><strong>Database Management:</strong> I am adept at database design and management, with a
                            strong command of SQL
                            and familiarity with relational database systems like MySQL. I design efficient database schemas
                            and optimize queries for improved performance and reliability.
                        </li>
                        <li><strong>Full-Stack Proficiency:</strong> As a full-stack developer, I enjoy working on both the
                            frontend and
                            backend aspects of web development. From conceptualizing project architecture to deploying
                            production-ready applications, I'm involved in every stage of the development lifecycle.
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection



{{-- ? section of resume --}}
@section('resume')
    <div class="resume-limits">
        <div class="resume mt-5 container" id="resume">
            <h1 class="title text-center mb-5 fw-bold">{{ __('word.RESUME') }}</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="summary resume-line">
                        <h1>{{ __('word.SUMMARY') }}</h1>
                        <p>
                            Detail-oriented Junior Full Stack Web Developer proficient in
                            PHP/ Laravel, front-end technologies including Bootstrap,
                            dedicated with a passion for creating dynamic and user-friendly
                            digital experiences, Excited to contribute my skills in a
                            collaborate teams to drive innovative solutions.
                        </p>
                        <ul>
                            <li>{{ __('word.BENISUEF') }} , {{ __('word.EGYPT') }}</li>
                            <li> (+20) (111-971-0541) </li>
                            <li> ahmedmanaour990@gmail.com </li>
                        </ul>
                    </div>
                    <div class="education resume-line">
                        <h1>{{ __('word.EDUCATION') }}</h1>
                        <div class="d-flex justify-content-between align-items-center">
                            <p>
                                Bachelor's Degree in Engineering,
                                <span>Beni-Suef University</span>
                            </p>
                            <span>2021</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="internship resume-line">
                        <h1>{{ __('word.INTERNSHIPS') }}</h1>
                        <div class="d-flex flex-column align-items-center">
                            <p>
                                <strong>Information Technology Institute</strong>, Graduate of ITI Intensive
                                Code Camp, specializing in <i>Full Stack Web Development with PHP </i>
                            </p>
                            <span>
                                November 2023 – March 2024 | Beni-Suef, Egypt
                            </span>
                        </div>
                    </div>
                    <div class="certification mt-3 resume-line">
                        <h1>{{ __('word.CERTIFICATES') }}</h1>
                        <div class="">
                            <ul>
                                <li>
                                    JavaScript
                                    <ul>
                                        <li><a class="link" target="_blanck"
                                                href="https://maharatech.gov.eg/mod/customcert/verify_certificate.php?contextid=206156&code=JdnxReBqV7&qrcode=1">Mahara
                                                Tech</a></li>
                                        <li><a class="link" target="_blanck"
                                                href="https://www.simplilearn.com/skillup-certificate-landing?token=eyJjb3Vyc2VfaWQiOiIxNzI0IiwiY2VydGlmaWNhdGVfdXJsIjoiaHR0cHM6XC9cL2NlcnRpZmljYXRlcy5zaW1wbGljZG4ubmV0XC9zaGFyZVwvdGh1bWJfNDcxMTIwOV8xNzAyMzM2OTY1LnBuZyIsInVzZXJuYW1lIjoiQWhtZWQgTWFuc291ciBtZWt5In0%3D&utm_source=shared-certificate&utm_medium=lms&utm_campaign=shared-certificate-promotion&referrer=https%3A%2F%2Flms.simplilearn.com%2Fcourses%2F4212%2FJavaScript-for-Beginners%2Fcertificate%2Fdownload-skillup&%24web_only=true&_branch_match_id=1298660474995799758&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXL87MLcjJ1EssKNDLyczL1k%2FVLzZ2LsguMy4pcUsCAKgbBVQlAAAA">Simple
                                                Learn</a></li>
                                        <li><a class="link" target="_blanck"
                                                href="https://www.hackerrank.com/certificates/427fbe449793">HackerRank</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- ? section of project --}}
@section('projects')
    <div class="projects-limits">
        <div class="projects mt-5 container" id="projects">
            <h1 class="title text-center mb-5 fw-bold">{{ __('word.PROJECTS') }}</h1>

            <ul class="project-list d-flex justify-content-around flex-row ">
                <li data-category="all">All</li>
                <li data-category="javascript">JavaScript</li>
                <li data-category="angular">Angular</li>
                <li data-category="php">PHP</li>
                <li data-category="laravel">Laravel</li>
            </ul>
            <div class="row">
                <div class="project-container col-md-6 col-lg-4  angular-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/git.png') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Movie App </P>
                            <a href="https://github.com/ahmedmansour999/angular-movie-App" target="_blank" class="link">
                                <i class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-container col-md-6 col-lg-4  javascript-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/resipe.jpg') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Recipe Site</P>
                            <a href="https://ahmedmansour999.github.io/Recipe-App/" target="_blank" class="link"> <i
                                    class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-container col-md-6 col-lg-4  javascript-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/Code-site.jpg') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Coffe Site</P>
                            <a href="https://ahmedmansour999.github.io/CofeSite/" target="_blank" class="link"> <i
                                    class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-container col-md-6 col-lg-4  laravel-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/git.png') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Health Care site </P>
                            <a href="https://github.com/ahmedmansour999/Health-care/tree/main/project-laravel" target="_blank"
                                class="link"> <i class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-container col-md-6 col-lg-4  javascript-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/for.jpg') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Eccomerce Site</P>
                            <a href="https://ahmedmansour999.github.io/eldmam/" target="_blank" class="link"> <i
                                    class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-container col-md-6 col-lg-4  laravel-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/git.png') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Platform site </P>
                            <a href="https://github.com/ahmedmansour999/platform-site-laravel" target="_blank"
                                class="link"> <i class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-container col-md-6 col-lg-4  angular-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/git.png') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Platform site </P>
                            <a href="https://github.com/ahmedmansour999/platform-angular" target="_blank" class="link">
                                <i class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-container col-md-6 col-lg-4  angular-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/git.png') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Health Care site </P>
                            <a href="https://github.com/ahmedmansour999/Health-care/tree/main/health-website" target="_blank"
                                class="link"> <i class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>
                <div class="project-container col-md-6 col-lg-4  php-projects">
                    <div class=" project-flow">
                        <img width="100%" src="{{ asset('media/image/projects/git.png') }}" alt="">
                        <div class="details">
                            <P class="fs-3 fw-bold m-0">Eccomerce site </P>
                            <a href="https://github.com/ahmedmansour999/php-eccomerce" target="_blank" class="link">
                                <i class="fa-solid fa-angles-right text-black"></i></a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

{{-- ? section of comments --}}
@section('comments')
    <div class="comments" id="comments">
        <h1 class="comments-title">{{ __('word.MESSAGES') }}</h1>
        <div id="carouselExampleDark" class="carousel slide comments-container">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner comment">
                <div class="carousel-item  active" data-bs-interval="10000">
                    <img src="{{ asset('media/image/comment.jpg') }}" alt="profile picture">
                    <div class="comment-content">
                        <h5 class="fw-bold">Ahmed Mansour</h5>
                        <p class="fs-5">This is a great project, I'm so proud of
                            what we've accomplished. The design is
                            beautiful and the functionality is
                            seamless.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('media/image/comment.jpg') }}" alt="profile picture">
                    <div class="comment-content">
                        <h5 class="fw-bold">Ahmed Mansour</h5>
                        <p class="fs-5">This is a great project, I'm so proud of
                            what we've accomplished. The design is
                            beautiful and the functionality is
                            seamless.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('media/image/comment.jpg') }}" alt="profile picture">
                    <div class="comment-content">
                        <h5 class="fw-bold">Ahmed Mansour</h5>
                        <p class="fs-5">This is a great project, I'm so proud of
                            what we've accomplished. The design is
                            beautiful and the functionality is
                            seamless.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- ? section of contact --}}
@section('contact')
    <div class="container contact" id="contact">
        <div class="row">

            <div class="col-md-4 contact-icon ">
                <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="contact-details">
                    <h3 class="fw-bold m-0">{{ __('word.ADDRESS') }}</h3>
                    <p class="m-0">{{ __('word.BENISUEF') }}-{{ __('word.EGYPT') }} </p>
                </div>
            </div>
            <div class="col-md-4 contact-icon ">
                <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="contact-details">
                    <h3 class="fw-bold m-0">{{ __('word.NUMBER') }}</h3>
                    <p class="m-0">01119710541</p>
                </div>
            </div>
            <div class="col-md-4 contact-icon ">
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-details">
                    <h3 class="fw-bold m-0">{{ __('word.EMAIL') }}</h3>
                    <p class="m-0">ahmedmanaour990@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- ? section of Mail --}}
@section('mail')
    <div class="container mt-5 mail" id="mail">
        <form class="form" action="{{ route('message.send') }}" method="POST">

            @csrf
            @method('post')

            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                        placeholder="{{ __('word.NAME') }}" name="name">
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder="{{ __('word.EMAIL') }}" name="email">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                        placeholder="{{ __('word.SUBJECT') }}" name="subject">
                </div>
                <div class="col-md-12">
                    <textarea name="message" class="form-control @error('message') is-invalid @enderror"
                        placeholder="{{ __('word.MESSAGE') }}" cols="30" rows="6"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary float-end">{{ __('word.SENDMESSAGE') }} <i
                            class="fa-solid fa-paper-plane "></i></button>
                </div>
            </div>
        </form>
    </div>
@endsection


{{--
#############################################################
   -Script Section
#############################################################
--}}

{{-- ? Script --}}
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var typed = new Typed('#typed', {
                strings: ["Full Stack", "Developer", "Full Stack Developer"],
                typeSpeed: 55,
                backSpeed: 30,
                loop: true,
                showCursor: true,
                cursorChar: '|',
            });
        })

        document.addEventListener('scroll', function() {
            const value = window.scrollY;
            const aboutLeft = document.getElementById('aboutLeft');
            const aboutRight = document.getElementById('aboutRight');
            const Resume = document.getElementById('resume');
            const Projects = document.getElementById('projects');
            const Comments = document.getElementById('comments');
            const Contact = document.getElementById('contact');
            const Mail = document.getElementById('mail');

            const triggerPoint = 300;

            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.bottom >= 0
                );
            }

            // Check about section
            if (value >= triggerPoint && isInViewport(aboutLeft)) {
                aboutLeft.style.transform = 'translateX(0%)';
                aboutRight.style.transform = 'translateX(0%)';
                aboutLeft.style.opacity = '1';
                aboutRight.style.opacity = '1';
            } else {
                aboutLeft.style.transform = 'translateX(-100%)';
                aboutRight.style.transform = 'translateX(100%)';
                aboutLeft.style.opacity = '0';
                aboutRight.style.opacity = '0';
            }

            // Check resume section
            if (isInViewport(Resume)) {
                Resume.style.opacity = '1';
                Resume.style.transform = 'translateX(0%)';
            } else {
                Resume.style.transform = 'translateX(100%)';
                Resume.style.opacity = '0';
            }

            // Check projects section
            if (isInViewport(Projects)) {
                Projects.style.opacity = '1';
                Projects.style.transform = 'scale(1)';
            } else {
                Projects.style.transform = 'scale(0.1)';
                Projects.style.opacity = '0';
            }

            // Check comments section
            if (isInViewport(Comments)) {
                Comments.style.opacity = '1';
                Comments.style.transform = 'scale(1)';
            } else {
                Comments.style.transform = 'scale(0.1)';
                Comments.style.opacity = '0';
            }

            // Check contact section
            if (isInViewport(Contact)) {
                Contact.style.opacity = '1';
                Contact.style.transform = 'scale(1)';
            } else {
                Contact.style.transform = 'scale(0.1)';
                Contact.style.opacity = '0';
            }

            // Check mail section
            if (isInViewport(Mail)) {
                Mail.style.opacity = '1';
                Mail.style.transform = 'scale(1)';
            } else {
                Mail.style.transform = 'scale(0.1)';
                Mail.style.opacity = '0';
            }
        });


        /*
            Projects Filter
        */

        const projectList = document.querySelectorAll('.project-list li');
        const projectContainer = document.querySelectorAll('.project-container')


        function showProjects(category) {
            projectContainer.forEach(container => {
                if (category == 'all') {
                    container.classList.add('active');
                    container.classList.remove('fade-out');
                    container.classList.add('fade-in');
                } else {
                    if (container.classList.contains(`${category}-projects`)) {
                        container.classList.add('active')
                        container.classList.remove('fade-out');
                        container.classList.add('fade-in');
                    } else {
                        container.classList.remove('active')
                    }
                }
            });
        }
        projectList.forEach(item => {
            item.addEventListener('click', () => {
                const category = item.getAttribute('data-category');
                showProjects(category);
            })
        })
        showProjects('all');



    </script>
@endsection
