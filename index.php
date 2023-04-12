<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="lib/css/boilerplate.css">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <title>NMR Consulting</title>
</head>
<style>
    #mission{
        background-image: linear-gradient(270deg, rgba(42, 48, 58, 0.26) 4.17%, #2A303A 73.96%), url('lib/img/evening-missile-test.jpg');
    }
</style>

<style>
    .landing-page-hero{
        width: 100%;
        height: 100vh;
        background: #2A3039;
        color: #FFFFFF;
        background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('lib/img/AdobeStock_487963201_Preview.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }
</style>
<body>
    <nav id="main-navigation" class="main-navigation">
       <div class="nav-container">
        <div class="logo">
                <a href="https://www.nmrconsulting.com/"><img src="lib/img/NMR_Logo-color.svg" alt="NMR Consulting logo."></a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <button id="hero-nav-trigger" class="menu-button">
                <div class="kebab-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
    </nav>
    <section class="landing-page-hero" >
        <div class="container">
            <div class="hero-content">
                <h1>Higher Standards. <span class="heroline-container"><span class="heroline">Better Results.</span></span></h1>
                <p>We build extraordinary teams of people to develop and implement innovative solutions for our clients.</p>
            </div>
        </div>
    </section>
    <nav id="sticky-navigation" class="main-navigation">
       <div class="nav-container">
        <div class="logo">
                <a href="https://www.nmrconsulting.com/">
                    <img src="lib/img/nmr-keys-color 1.svg" alt="NMR Consulting icon.">
                </a>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Mission</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
            <button id="sticky-nav-trigger" class="menu-button">
                <div class="kebab-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
    </nav>
    <section class="content-section intro wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="content">
                        <h1>A <span class="highlight">reliable</span> agency partner</h1>
                        <p>We are a reliable and trusted partner for federal agencies, with a deep understanding of the unique challenges and technical requirements of the government market. </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <img src="lib/img/Group 53(1).png" alt="A reliable agency partner.">
                </div>
            </div>
        </div>
    </section>
    <section id="who-we-are" class="content-section wow animate__animated animate__fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="lib/img/Group 54.png" alt="NMR Consulting server rack.">
                </div>
                <div class="col-sm-6">
                    <div class="content">
                        <span class="headline">Who We Are</span>
                        <h1>We are a <span class="highlight">critical infrastructure</span> and <span class="highlight">weapon system lifecycle</span> solutions company.​</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="mission" class="content-section image-break image-break-quote image-break-dark content-session-dark">
        <div class="container">
            <div class="row">
                <div class="content">
                    <div class="col-sm-12">
                        <span class="headline">Our Mission</span>
                        <h1>We will partner with federal agencies by <span class="highlight">providing innovative technology</span> and <span class="highlight">implementing best practices</span> to empower agencies in their pursuit of excellence.​</h1>
                    </div>
                    <div class="col-sm-6">
                        <p>We have a strong track record of delivering innovative and effective technology solutions that enable agencies to improve their efficiency, productivity, and overall mission effectiveness.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <a class="button button-rounded sapphire-button" href="#" title="View our mission">Our Mission Drives Us</a>
                </div>
            </div>
        </div>
    </section>
    <section class="solution-bucket-section">
        <div class="container">
            <div class="row">
                <div class="solution-section-headline">
                    <div class="col-sm-9">
                        <span class="headline">Our Solutions</span>
                        <h1>We have a proven track record of providing <span class="highlight">professional tech services</span> and <span class="highlight">direct IT support</span>.​</h1>
                    </div>
                    <div class="col-sm-3" style="display: grid;">
                        <a class="button button-rounded sapphire-button center-button" href="#" title="View our solutions">View Our Solutions</a>
                    </div>
                </div>
            </div>
            <div class="solution-bucket-container">
                <a href="#" class="solution-bucket">
                    <article>
                        <div class="bucket-hero">
                            <img src="lib/img/facilities.svg" alt="Facility maintenance">
                        </div>
                        <div class="solution-bucket-content">
                            <h2>Facility Engineering and Procurement​</h2>
                            <p>We specialize in infrastructure installation for critical national security facilities. Our track record shows on-time project delivery and reduced risk.</p>
                        </div>
                    </article>
                </a>
                <a href="#" class="solution-bucket">
                    <article>
                        <div class="bucket-hero">
                            <img src="lib/img/unified-communications.svg" alt="Facility maintenance">
                        </div>
                        <div class="solution-bucket-content">
                            <h2>Secure Collaboration Environments​</h2>
                            <p>We offer secure collaboration solutions for dispersed organizations, enabling seamless engagement. Facilitate global operations with our cutting-edge technologies.</p>
                        </div>
                    </article>
                </a>
                <a href="#" class="solution-bucket">
                    <article>
                        <div class="bucket-hero">
                            <img src="lib/img/data-management.svg" alt="Facility maintenance">
                        </div>
                        <div class="solution-bucket-content">
                            <h2>Data Management​</h2>
                            <p>We address the challenge of siloed data by migrating it to secure and accessible environments by providing solutions for data consolidation and accessibility.​</p>
                        </div>
                    </article>
                </a>
                <a href="#" class="solution-bucket">
                    <article>
                        <div class="bucket-hero">
                            <img src="lib/img/software-development.svg" alt="Facility maintenance">
                        </div>
                        <div class="solution-bucket-content">
                            <h2>Process Automation and Analytics​​</h2>
                            <p>Our agile software development automates processes to boost operational resiliency, allowing our clients to harness the power of their underlying data.</p>
                        </div>
                    </article>
                </a>
                <a href="#" class="solution-bucket">
                    <article>
                        <div class="bucket-hero">
                            <img src="lib/img/biometric.svg" alt="Facility maintenance">
                        </div>
                        <div class="solution-bucket-content">
                            <h2>Biometric Security Access​</h2>
                            <p>We provide custom entry point solutions that integrate state-of-the-art biometric technologies, creating solutions for access control to facilities and mission data.</p>
                        </div>
                    </article>
                </a>
                <a href="#" class="solution-bucket">
                    <article>
                        <div class="bucket-hero">
                            <img src="lib/img/training.svg" alt="Facility maintenance">
                        </div>
                        <div class="solution-bucket-content">
                            <h2>Training​</h2>
                            <p>We offer training programs that cover all of our core solutions, such as AV/VTC, data management, knowledge management portals, and hundreds of dashboards.</p>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </section>
<script src="lib/js/bootstrap.min.js"></script>
<script src="lib/js/wow.min.js"></script>
<script>
    $(function(){
        new WOW({offset: 500}).init(); 
    });
</script>
<script>
    $(document).ready(function(){

        $(document).on("click", "#hero-nav-trigger", function(){
            $("#main-navigation").toggleClass("active");
            $(this).toggleClass("active");
           
        })
        $(document).on("click", "#sticky-nav-trigger", function(){
            $("#sticky-navigation").toggleClass("active");
            $(this).toggleClass("active");
           
        })
    });
</script>
</body>
</html>


