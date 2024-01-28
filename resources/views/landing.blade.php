<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WAKGIZMOV</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
    <!-- Bootstrap Icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/top-section.css') }}">
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/whyus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cars.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('asset/tiphonixlogo.png') }}">

</head>

<body>

    {{-- nav bar--}}
    <header>
        <nav id="navbarrr">
            <div class="nav-bar">
                <i class="fas fa-bars sidebarOpen"></i>
                <span class="logo navLogo mt-3"><a href="#"><img class="logo"
                            src="{{ asset('asset/tiphonixlogo.png') }}" height="120" alt="logo"
                            loading="lazy" /></a></span>

                <div class="menu">
                    <div class="logo-toggle">
                        <span class="logo"><a href="#"><img class="logo"
                                    src="{{ asset('asset/tiphonixlogo.png') }}" height="100" alt="logo"
                                    loading="lazy" /></a></span>
                        <i class='bx bx-x siderbarClose'></i>
                    </div>

                    <ul class="nav-links m-2">
                        <li>
                            <a href="#top-sec">Home</a>
                        </li>

                        <li>
                            <a href="#welcome">About Us</a>
                        </li>
                        <li>
                            <a href="#ourproduct">Our Product</a>
                        </li>
                        <li>
                            <a href="#why-us">Why Us</a>
                        </li>

                        <li>
                            <a href="#cars-gallery">Gallery</a>
                        </li>



                        <li>
                            <a href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

    {{-- top section--}}
    <section class="top_section w-100" id="top-sec">
        <video autoplay loop muted playsinline>
            <source src="{{ asset('asset/CINEMATIC CAR VIDEO.mp4') }}" type="video/mp4">
        </video>

        <div class="center">

            <div class="tag">Polishing Dreams</div>
            <div class="title"><span id="first">Unleash Brilliance</span> , Protect Passion with WAKGIZMOV.</div>
        </div>
    </section>

    <section class="wel_section" id="welcome">
        <div class="welcome_part d-md-flex d-lg-flex justify-content-between">
            <div id="title">
                <h1>About Us</h1>
            </div>

            <div class="text-center" id="content">
                <p> Welcome to Ti-Phoenix ENT, where innovation meets automotive passion.
                    We take pride in introducing our flagship product, WAKGIZMOV –
                    the Ultimate Nano Coating designed exclusively for car enthusiasts.
                    At Ti-Phoenix ENT, we understand the profound connection individuals
                    have with their vehicles, and we've crafted a revolutionary solution
                    to elevate your car care experience.</p>
            </div>
        </div>
    </section>

{{-- about--}}
    <section class="about" id="ourproduct">

        <div class="title text-center mb-5">
            <h1>Our Product</h1>
        </div>

        <div class="about_content d-flex">

            <div class="contentt">
                <p>
                    <b>About WAKGIZMOV</b> <br>

                    WAKGIZMOV is not just another car coating; it's a breakthrough in automotive technology. Formulated
                    to be applied post-car wash, WAKGIZMOV creates an impenetrable shield over your vehicle's paint,
                    providing a long-lasting hydrophobic effect. This advanced nano coating repels dust, ensures UV
                    protection, and adds a dazzling finish that lasts for a minimum of 2 years.
                </p><br>
                <p>
                    <b>Unparalleled Protection</b> <br>

                    With just a bottle of WAKGIZMOV (500ml), you can cover your sedan 6-7 times or your MPV 4-5 times,
                    depending on usage. Our product simplifies the application process – just clean and wipe. Priced at
                    RM 1000 per bottle, WAKGIZMOV is the ultimate solution for preserving your car's aesthetic appeal.
                </p> <br>

                <p><b>Application Expertise</b><br>

                    To achieve optimal results, apply WAKGIZMOV on a clean, dry surface in a cool environment. For
                    enhanced effectiveness, park your car under the sun post-application. Remember to apply section by
                    section to prevent the product from drying prematurely, ensuring a seamless and thorough coating.

                    At Ti-Phoenix ENT, we are committed to providing car lovers with the best-in-class solutions that
                    not only protect but also enhance the beauty of their vehicles. Join us in revolutionizing car care
                    – WAKGIZMOV, where excellence meets passion.

                    Discover the future of car coating with Ti-Phoenix ENT. Your journey to unmatched protection and
                    brilliance starts here.</p> <br>
                <p>
                    <b>Discover the WAKGIZMOV Difference</b> <br>
                    Elevate your car's protection with WAKGIZMOV's advanced coatings. Our Nano Coating, Glass Coating,
                    and Graphene Coating offer unmatched durability and performance, ensuring your vehicle stays
                    pristine in any condition. From nano-level defense to crystal-clear glass and cutting-edge graphene
                    technology, WAKGIZMOV sets the standard for automotive excellence. Explore our range today and
                    experience ultimate protection for your cherished vehicle.
                </p>
                
            </div>
            <div class="img-container">
                <img src="{{ asset('asset/coating.png') }}" alt="coating">
                <img src="{{ asset('asset/silverford2.jpg') }}" alt="silver ford polishing">
                <video autoplay loop muted playsinline>
                    <source src="{{ asset('asset/0127.mp4') }}" type="video/mp4">
                </video>
            </div>

        </div>
        <div class="products">
            <div class="card">
                <div class="productcardbg" data-mdb-ripple-init data-mdb-ripple-color="light">
                  <img src="{{ asset('asset/nanocoating.png') }}" class="img-fluid"/>
                  
                </div>
                <div class="card-body">
                  <h5 class="card-title">WAKGIZMOV nano coating</h5>
                  <p class="card-text">Elevate your car's protection to the next level with WAKGIZMOV Nano Coating. At <b>USD 1000</b> per unit.</p>
                  <div class="btn_align">
                    <a href="#">Buy Now</a>
                </div>
                </div>
              </div>
              <div class="card">
                <div class="productcardbg" data-mdb-ripple-init data-mdb-ripple-color="light">
                  <img src="{{ asset('asset/glasscoating.png') }}" class="img-fluid" style="width:90%"/>
                  
                </div>
                <div class="card-body">
                  <h5 class="card-title">WAKGIZMOV glass coating </h5>
                  <p class="card-text">Unleash the brilliance of your car's glass surfaces with WAKGIZMOV Glass Coating. Priced at <b>USD 1250</b> per unit.</p>
                  <div class="btn_align">
                    <a href="#">Buy Now</a>
                </div>
                </div>
              </div>
              <div class="card" style="height:640px">
                <div class="productcardbg w-100" data-mdb-ripple-init data-mdb-ripple-color="light">
                  <img src="{{ asset('asset/graphitecoating.png') }}" class="img-fluid" height="120" style="width:90%"/>
                  
                </div>
                <div class="card-body">
                  <h5 class="card-title">WAKGIZMOV Graphene Coating</h5>
                  <p class="card-text">Revolutionize your car's protection with WAKGIZMOV Graphene Coating. At <b>USD 4500</b> per unit.</p>
                  <div class="btn_align">
                    <a href="#">Buy Now</a>
                </div>
                </div>
              </div>
        </div>
    </section>

    {{-- why us--}}
    <section class="why-us" id="why-us">

        <div class="title text-center mb-5">
            <h1>Why Us</h1>
        </div>

        <div class="cards">

            <div class="card ">
                <div class="icon"><i class="fas fa-face-smile-beam"></i></div>
                <div class="content">
                    <h3><b>Trusted Reputation</b></h3>
                    <p>We have built a reputation as a trustworthy coating product sellers, backed by satisfied
                        customers and positive reviews.</p>
                </div>
            </div>


            <div class="card">
                <div class="icon"><i class="fas fa-comments-dollar"></i></div>
                <div class="content">
                    <h3><b>Competitive Pricing</b></h3>
                    <p>Our prices are competitive, and we offer fair deals on our imported.</p>
                </div>
            </div>


            <div class="card ">
                <div class="icon"><i class="fa-solid fa-headset"></i></div>
                <div class="content">
                    <h3><b>Customer Support</b></h3>
                    <p>Our dedicated customer support team is ready to assist you with any queries or concerns.</p>
                </div>
            </div>
        </div>

    </section>


{{-- gallery--}}
    <section class="cars" id="cars-gallery">
        <div class="title text-center mb-5">
            <h1>Gallery</h1>
        </div>

        <!-- Gallery -->
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <img src="{{ asset('asset/pinkcar.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Pink Car" />

                <img src="{{ asset('asset/orangcar.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Orange Car" />

            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="{{ asset('asset/orangeford.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Orange Ford" />

                <img src="{{ asset('asset/silverford.jpg') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="silver ford Car" />

            </div>

            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="{{ asset('asset/polishcar.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Polished Car" />
                    <img src="{{ asset('asset/silver civic.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Polished Car" />
            </div>

            <div class="col-lg-4 col-md-12 mb-4 mb-lg-0" style="margin-top:-450px">
                <img src="{{ asset('asset/redferrari.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Pink Car" />

                <img src="{{ asset('asset/orangemusclecar.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Orange Car" />

            </div>
            <div class="col-lg-4 mb-4 mb-lg-0" style="margin-top:-450px">
                <img src="{{ asset('asset/darkredlambo.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Orange Ford" />

                <img src="{{ asset('asset/blackporche.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="silver ford Car" />

            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
                <img src="{{ asset('asset/goldmclaren.png') }}" class="w-100 shadow-1-strong rounded mb-4"
                    alt="Polished Car" />
            </div>

        </div>
        <!-- Gallery -->



    </section>

{{-- contact us--}}
    <section class="contact_us" id="contact">
        <div class="title text-center mb-5">
            <h1>Contact Us</h1>
        </div>

        <div class="container">
            <div class="content">

                <div class="left-side">



                    <div class="phone details">
                        <i class="fas fa-phone-alt"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">K.Kugan</div>
                        <div class="text-one">+60124246166</div>
                    </div>

                    <div class="email details">
                        <i class="fas fa-envelope"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">wakgizmov@gmail.com </div>
                    </div>

                </div>


            </div>
        </div>
    </section>


    <footer class="text-center text-white">


        <!-- Copyright -->
        <div class="subFooter text-center p-3">
            © 2024 Ti Phoenix. All Rights Reserved.
        </div>
        <!-- Copyright -->
    </footer>

    <!--Script-->
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var header = document.querySelector("header");

            window.addEventListener("scroll", function() {
                if (window.scrollY > 0) {
                    document.body.classList.add("scrolled");
                } else {
                    document.body.classList.remove("scrolled");
                }
            });
        });
    </script>
</body>

</html>
