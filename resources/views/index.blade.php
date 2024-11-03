<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('content')
<main data-scroll-container>

    <header id="home" class="section" onmousemove="comet()">
        <div id="container-comet"></div>
        <div class="section_numberic__upper">One</div>
        <section class="home">
            <div class="home-img">
            <img src="{{ asset('img/10.jpg') }}" alt="Logo">

            </div>
            <div class="home-content">
                <h1>Hi, I'm <span>Hind</span></h1>
                <h3 class="typing-text">I'm a <span></span></h3>
                <p>Hi, my name is Hind. I am a dedicated software developer with a strong passion for Flutter...</p>
                <div class="social-icons">
                    <a href="https://github.com/hindalzzindani" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/hindalzzindani" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://mostaql.com/u/hindalzzindani" target="_blank">
                        <img src="{{ asset('img/mostaql-logo-white.svg') }}" alt="Freelance Icon" style="width: 19px; height: 19px;">
                    </a>
                    <a href="https://www.behance.net/hindalzzindani" target="_blank"><i class="fa-brands fa-behance"></i></a>
                </div>
                <a href="{{ asset('img/Hind-Alzzindani-Flutte.pdf') }}" class="btn" download>Download my CV</a>
            </div>
        </section>
        <div class="section_numberic__lower">O.1</div>
    </header>

    <!-- جزء المهارات -->
    <div class="container" id="about">
	
    <!--   *******  Main Heading Starts  *******   -->

    <div class="main-title">
        <h1>Skills</h1>
        <p class="section_about_paragraph third-text">
            My Skills: Proficient mobile app developer using Flutter, 
            with a strong background in design through Figma.
             Experienced in creating user-friendly applications 
             and sleek, intuitive interfaces,
             with a passion for learning new technologies to enhance project quality.
            .</p>
    </div>

    <!--   *******  Main Heading Ends  *******   -->

    <div class="row">
        
        <!--   *******  Left Section Starts here  *******   -->

        <section class="col">
            
            <div class="sub-title">
                <h2>Programming Skills</h2>
            </div>

            <div class="skills-container">
                
                <div class="skill">
                    <div class="subject">FLutter & Dart</div>
                    <div class="progress-bar" value="94%">
                        <div class="progress-line" style="max-width: 94%"></div>
                    </div>
                </div>

                <div class="skill">
                    <div class="subject">PHP</div>
                    <div class="progress-bar" value="83%">
                        <div class="progress-line" style="max-width: 83%"></div>
                    </div>
                </div>

                <div class="skill">
                    <div class="subject">JavaScript</div>
                    <div class="progress-bar" value="88%">
                        <div class="progress-line" style="max-width: 88%"></div>
                    </div>
                </div>

                <div class="skill">
                    <div class="subject">ASP.ENT CORE</div>
                    <div class="progress-bar" value="68%">
                        <div class="progress-line" style="max-width: 68%"></div>
                    </div>
                </div>

            </div>
        </section>

        <!--   ********  Left Section Ends Here  *******  -->

        <!--   ********  Right Section Starts Here  ********  -->

        <section class="col">
            
            <div class="sub-title">
                <h2>Designing Skills</h2>
            </div>

            <div class="skills-container">
                
                <div class="skill">
                    <div class="subject">HTML</div>
                    <div class="progress-bar" value="82%">
                        <div class="progress-line" style="max-width: 82%"></div>
                    </div>
                </div>

                <div class="skill">
                    <div class="subject">Css</div>
                    <div class="progress-bar" value="74%">
                        <div class="progress-line" style="max-width: 74%"></div>
                    </div>
                </div>

                <div class="skill">
                    <div class="subject">Figma</div>
                    <div class="progress-bar" value="63%">
                        <div class="progress-line" style="max-width: 63%"></div>
                    </div>
                </div>

                <div class="skill">
                    <div class="subject">Ui/Ux Design</div>
                    <div class="progress-bar" value="91%">
                        <div class="progress-line" style="max-width: 91%"></div>
                    </div>
                </div>

            </div>
        </section>

        <!--   ********  Right Section Ends Here  ********   -->
    </div>

</div>
</main>
@endsection
