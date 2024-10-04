<?php
// Assuming this is the first page load
$firstPageLoad = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tendercare Management Ltd</title>
    <link rel="icon" href="img/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .menu-icon::before,
    .menu-icon::after {
        content: '';
        width: 30px;
        height: 3px;
        background-color: #726f6f;
        position: absolute;
        transition: all 0.3s ease;
    }

    .menu-icon::before {
        top: -8px;
    }

    .menu-icon::after {
        bottom: -8px;
    }

    .menu-icon.active {
        background-color: transparent;
    }

    .menu-icon.active::before {
        transform: translateY(8px) rotate(45deg);
    }

    .menu-icon.active::after {
        transform: translateY(-8px) rotate(-45deg);
    }

    /* Mobile sidebar */
    #mobile-sidebar {
        transform: translateX(-100%);
        transition: transform 0.3s ease;
        background-color: white;
    }

    #mobile-sidebar.open {
        transform: translateX(0);
    }

    /* Navbar item styles */
    .nav-item {
        position: relative;
        padding-bottom: 5px;
        color: #6F6F6F;
        cursor: pointer;
        transition: color 0.3s ease;
    }

    .nav-item::after {
        content: '';
        display: block;
        width: 100%;
        height: 2px;
        background-color: #D4B068;
        position: absolute;
        left: 0;
        bottom: 0;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.3s ease;
    }

    .nav-item:hover::after,
    .nav-item.active::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    .nav-item.active {
        color: #D4B068;
    }



    /* AOS animations (use if needed) */
    [data-aos] {
        opacity: 0;
        transition-property: transform, opacity;
        transition-duration: 1.2s;
    }

    [data-aos="fade-down"] {
        transform: translateY(-20px);
    }


    #loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        /* Dark overlay */
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 50;
        /* Make sure it's on top */
    }

    #clip-diagonal {
        clip-path: polygon(0 13%, 100% 0, 100% 87%, 0 100%);

    }

    #clip-diagonals {
        clip-path: polygon(0 80%, 100% 0, 100% 100%, 0 100%);
    }

    @media (max-width: 480px) {
        #clip-diagonal {
            clip-path: polygon(0 10%, 100% 0, 100% 90%, 0 100%);
        }
    }

    /* nev active//// */
    .nav-item {
        cursor: pointer;
        border: none;
        background: transparent;
        font-weight: bold;
        transition: color 0.3s;

    }

    .nav-item:hover {
        color: #d4b068;
        /* Change color on hover */
    }

    .active {
        color: #d4b068;
        /* Active section color */
    }



    /* other seaction style //////////// */
    .clip-diagonal {
        clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
    }

    #imgo {
        clip-path: polygon(0 6%, 100% 0, 100% 94%, 0 100%);
    }


    @media (max-width: 375px) {
        .text-20px {
            font-size: 1rem;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .p-4 {
            padding: 1rem;
        }

        p {
            line-height: 1.4;
            overflow-wrap: break-word;
        }
    }




    @media only screen and (max-width: 650px) {

        /* Styles for screens that are 600px or smaller */
        #dirction {
            display: none;
        }
    }



    /* black card///////////////////////////////////////////// */

    .fade {
        opacity: 0;
        transition: opacity 1s ease-in-out;
        position: absolute;
        inset: 0;
    }

    .fade.active {
        opacity: 1;
    }

    .dot.active {
        background-color: gray;
    }

    #imgo {
        clip-path: polygon(0 6%, 100% 0, 100% 94%, 0 100%);
    }
</style>
    </style>

</head>

<body class="bg-white">

<?php if ($firstPageLoad): ?>
    <!-- Loader will only appear on the first page load -->
    <div id="loader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
        <div class="w-16 h-16 border-4 border-dashed rounded-full animate-spin border-yellow-500"></div>
    </div>
<?php endif; ?>

<!-- Scroll to Top Button -->
<button id="scrollToTop"
    class="fixed bottom-5 right-5 bg-transparent border-2 border-[#D4B068] text-yellow-500 p-1 shadow-md hidden z-50">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
        class="w-6 text-[#D4B068] h-6">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
</button>



<!-- Navbar Section -->
<div class="bg-white h-[130px] w-full flex justify-center items-center z-50 fixed top-0">
    <div class="w-[93%] flex justify-between items-center">
        <!-- Logo -->
        <a href="index.php">
            <img src="img/logo1.jpg" alt="Logo" class="cursor-pointer sm:h-[88px] sm:w-[209px] h-[77px] w-[180px]">
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex pt-8 xl:w-[62%] justify-between lg:text-[10px] space-x-2 lg:space-x-6">
            <button onclick="scrollToSection('home')" class="nav-item" id="home-nav">
                <div class="font-semibold hover:text-[#d4b068] tracking-normal text-[13px]">HOME</div>
            </button>
            <button onclick="scrollToSection('services')" class="nav-item" id="services-nav">
                <div class="font-semibold hover:text-[#d4b068] tracking-normal text-[13px]">SERVICES</div>
            </button>
            <button onclick="scrollToSection('about-us')" class="nav-item" id="about-us-nav">
                <div class="font-semibold hover:text-[#d4b068] tracking-normal text-[13px]">ABOUT US</div>
            </button>
            <button onclick="scrollToSection('our-mission')" class="nav-item" id="our-mission-nav">
                <div class="font-semibold hover:text-[#d4b068] tracking-normal text-[13px]">OUR MISSION</div>
            </button>
            <button onclick="scrollToSection('recruitment')" class="nav-item" id="recruitment-nav">
                <div class="font-semibold hover:text-[#d4b068] tracking-normal text-[13px]">RECRUITMENT</div>
            </button>
            <button onclick="scrollToSection('news')" class="nav-item" id="news-nav">
                <div class="font-semibold hover:text-[#d4b068] tracking-normal text-[13px]">NEWS</div>
            </button>
            <a href="career.php" class="nav-item">
                <div class=" font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                    onclick="setActive('careers')">CAREERS</div>
            </a>
            <button onclick="scrollToSection('contact-us')" class="nav-item" id="contact-us-nav">
                <div class="font-semibold hover:text-[#d4b068] tracking-normal text-[13px]">CONTACT US</div>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="lg:hidden flex justify-center items-center">
            <button id="mobile-menu-toggle" class="relative">
                <div id="burger-icon" class="menu-icon"></div>
            </button>
        </div>
    </div>
</div>

<!-- Mobile Sidebar -->
<div id="mobile-sidebar"
    class="fixed top-0 left-0 lg:hidden w-[80%] sm:w-[40%] md:w-[40%] z-[100] h-full text-black transition-transform duration-300">
    <div class="flex flex-col items-start space-y-4">
        <button onclick="scrollToSection('home')" class="w-[100%]">
            <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]">HOME</div>
        </button>
        <button onclick="scrollToSection('services')" class="w-[100%]">
            <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]">SERVICES
            </div>
        </button>
        <button onclick="scrollToSection('about-us')" class="w-[100%]">
            <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]">ABOUT US
            </div>
        </button>
        <button onclick="scrollToSection('our-mission')" class="w-[100%]">
            <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]">OUR MISSION
            </div>
        </button>
        <button onclick="scrollToSection('recruitment')" class="w-[100%]">
            <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]">RECRUITMENT
            </div>
        </button>
        <button onclick="scrollToSection('news')" class="w-[100%]">
            <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]">NEWS</div>
        </button>
        <a href="career.php" class="w-[100%]">
            <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                onclick="closeSidebar(); setActive('careers')">
                <h1>CAREERS</h1>
            </div>
        </a>
        <button onclick="scrollToSection('contact-us')" class="w-[100%]">
            <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]">CONTACT US
            </div>
        </button>
    </div>
</div>





<!-- section header slider section/////////////////////////////////////////////////////////////////////////// -->

<?php
// Define the slides with images and text
$slides = [
    [
        'image' => 'img/Support-Workers-1.jpg',
        'text' => 'Our vision is one of an inclusive society where diversity is respected and celebrated.'
    ],
    [
        'image' => 'img/Cleaning-Staff.jpg',
        'text' => 'Tendercare Management Ltd is all about providing bespoke services to your requirements.'
    ],
    [
        'image' => 'img/Nursing-Staff-1.png',
        'text' => 'Our mission is to be recognized as a leading provider of homecare and community support services.'
    ]
];
?>

<section id="home">
    <div class="relative text-center mx-auto w-full h-screen mt-20 clip-diagonal" data-aos="fade-up" id="slider-container">
        <div id="slide" class="relative h-full w-full bg-cover bg-center  bg-no-repeat" style="background-position: center; background-attachment: fixed;">
            <div class="absolute inset-0 flex flex-col justify-center items-center bg-[#00000079] transition-opacity duration-500 ease-in-out">
                <div class="absolute inset-0 flex items-center justify-center w-full px-4 py-2">
                    <!-- Check if slides are available -->
                    <?php if (isset($slides) && is_array($slides) && count($slides) > 0): ?>
                        <h2 id="slide-text" class="text-[#d8dadb] text-[20px] sm:text-[25px] md:text-[30px] lg:text-[40px] xl:text-[45px] font-bold text-center w-[70%] bg-opacity-50 rounded">
                            <?= $slides[0]['text']; ?>
                        </h2>
                    <?php else: ?>
                        <p>No slides available.</p>
                    <?php endif; ?>
                </div>
                <!-- Previous Button (Left) -->
                <button id="prev-btn" class="absolute left-2 sm:left-4 md:left-8 top-1/2 transform -translate-y-1/2 flex justify-center items-center h-16 w-16 sm:h-20 sm:w-20 md:h-24 md:w-24 lg:h-32 lg:w-32 text-[#e2e7eb] p-2 focus:outline-none">
                    <img src="img/left.png" alt="" class="filter invert w-[60px]">
                </button>
                <!-- Next Button (Right) -->
                <button id="next-btn" class="absolute right-2 sm:right-4 md:right-8 top-1/2 transform -translate-y-1/2 flex justify-center items-center h-16 w-16 sm:h-20 sm:w-20 md:h-24 md:w-24 lg:h-32 lg:w-32 text-[#e5eaee] p-2 focus:outline-none">
                    <img src="img/right.png" alt="" class="filter invert w-[60px]">
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    const headerSlides = <?php echo json_encode($slides); ?>;
    let currentHeaderIndex = 0;

    const headerSlideContainer = document.getElementById('slide');
    const headerSlideText = document.getElementById('slide-text');

    function updateHeaderSlide() {
        headerSlideContainer.style.backgroundImage = `url(${headerSlides[currentHeaderIndex].image})`;
        headerSlideText.innerText = headerSlides[currentHeaderIndex].text;
    }

    document.getElementById('prev-btn').addEventListener('click', () => {
        currentHeaderIndex = currentHeaderIndex === 0 ? headerSlides.length - 1 : currentHeaderIndex - 1;
        updateHeaderSlide();
    });

    document.getElementById('next-btn').addEventListener('click', () => {
        currentHeaderIndex = currentHeaderIndex === headerSlides.length - 1 ? 0 : currentHeaderIndex + 1;
        updateHeaderSlide();
    });

    // Auto slide every 5 seconds
    setInterval(() => {
        currentHeaderIndex = currentHeaderIndex === headerSlides.length - 1 ? 0 : currentHeaderIndex + 1;
        updateHeaderSlide();
    }, 5000);

    // Initial slide setup
    updateHeaderSlide();
</script>


<!-- service section/////////////////////////////////////////////////////////////////////////////// -->
<section id="services">

    <div class="w-[100%]  mt-6">
        <!-- Heading Section -->
        <div data-aos="fade-up">
            <h1 class="text-[40px] font-bold text-center">Our Services</h1>
        </div>

        <!-- Paragraph Section -->
        <div data-aos="fade-up" class="flex items-center justify-center">
            <p class="text-[18px] py-7  w-[90%] text-center font-[530] text-[#7d7d7d]">
                We know that most people want to live an independent life in their own home,
                and we are passionately committed to helping them achieve that. We also understand
                that everyone’s needs are different, which is why we go out of our way to tailor
                an individual care package to suit each and every one of our customers, from full-time
                home care, to occasional visits to help with specific tasks, to a short-term programme
                designed to help with convalescence. And because our help at home service is built around
                you, we can adapt it over time as your needs change, and you might need more support.
            </p>
        </div>
    </div>
    <!-- Paragraph Section -->
</section>



<!-- first card ///////////////////////////////////////////////////////////////////////////////////// -->
<section>
    <div class="grid grid-cols-1 mt-12 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-5" data-aos="fade-down">
        <!-- Recruitment Card -->
        <div
            class="flex flex-col items-center p-5 border border-gray-300 rounded-lg hover:shadow-lg hover:border-[#889cba] transform transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
            <p class="text-lg font-semibold tracking-wide border-b-2 border-b-[#889cba] mb-2">
                <a href="recuirtment.php">RECRUITMENT</a>
            </p>
            <img src="img/meeting.jpg" alt="Recruitment" class="w-[350px] h-[25vh] object-cover">
            <p class="text-md text-[#7D7D7D] leading-7 text-left mt-2">
                TCM Ltd works with a range of businesses in and around London and surrounding areas, from SMEs
                through to larger organisations. Our London recruitment agency sources business support staff for a
                range of industries and sectors.
            </p>
        </div>

        <!-- Domiciliary Care Card -->
        <div
            class="flex flex-col items-center p-5 border border-gray-300 rounded-lg hover:shadow-lg hover:border-[#889cba] transform transition-transform duration-300 hover:-translate-y-2 hover:scale-105 mt-10">
            <p class="text-lg font-semibold tracking-wide border-b-2 border-b-[#889cba] mb-2">
                <a href="domiciliary.php">DOMICILIARY CARE</a>
            </p>
            <img src="img/care.jpg" alt="Domiciliary Care" class="w-[350px] h-[25vh] object-cover">
            <p class="text-md text-[#7D7D7D] leading-7 text-left mt-2">
                We have a huge number of staff in our database covering a variety of specialities including the
                following:
            </p>
            <ul class="list-disc text-[#7D7D7D] text-md pl-5 text-left w-full ml-0">
                <li>Healthcare Care Assistant</li>
                <li>Support Workers</li>
                <li>Senior Supports</li>
                <li>Home Care Managers</li>
                <li>Senior Carers</li>
                <li>Clinical HCAs</li>
                <li>Carer Supports</li>
                <li>Nurses</li>
            </ul>
        </div>

        <!-- Residential Care Card -->
        <div
            class="flex flex-col items-center p-5 border border-gray-300 rounded-lg hover:shadow-lg hover:border-[#889cba] transform transition-transform duration-300 hover:-translate-y-2 hover:scale-105">
            <p class="text-lg font-semibold tracking-wide border-b-2 border-b-[#889cba] mb-2">
                <a href="residential.php">RESIDENTIAL CARE</a>
            </p>
            <img src="img/old.jpg" alt="Residential Care" class="w-[350px] h-[25vh] object-cover">
            <p class="text-md text-[#7D7D7D] leading-7 text-left mt-2">
                At TCM Care, our philosophy adopts the person-centred approach, so when delivering day-to-day care
                practice, the identity of an individual is at the centre of what we do.
            </p>
        </div>

        <!-- Hospitality Card -->
        <div
            class="flex flex-col items-center p-5 border border-gray-300 rounded-lg hover:shadow-lg hover:border-[#889cba] transform transition-transform duration-300 hover:-translate-y-2 hover:scale-105 mt-10">
            <p class="text-lg font-semibold tracking-wide border-b-2 border-b-[#889cba] mb-2">
                <a href="hospitality.php">HOSPITALITY</a>
            </p>
            <img src="img/bell.jpg" alt="Hospitality" class="w-[350px] h-[25vh] object-cover">
            <p class="text-md text-[#7D7D7D] leading-7 text-left mt-2">
                The hospitality industry is intensely competitive, with new challenges arising every day. But one
                thing you can be certain about is this: with Tendercare Management Ltd on your side, you’ll recruit
                the high-quality candidates who can help take your business from success to success.
            </p>
        </div>

        <!-- Cleaning Card -->
        <div
            class="flex flex-col items-center p-5 border border-gray-300 rounded-lg hover:shadow-lg hover:border-[#889cba] transform transition-transform duration-300   hover:-translate-y-2 hover:scale-105 mt-[10px]">
            <p class="text-lg font-semibold tracking-wide border-b-2 border-b-[#889cba] mb-2">
                <a href="cleaning.php">CLEANING</a>
            </p>
            <img src="img/can.jpg" alt="Cleaning" class="w-[350px] h-[25vh] object-cover">
            <p class="text-md text-[#7D7D7D] leading-7 text-left mt-2">
                Office Cleaning and Commercial premises cleaning is one of our specialities. With more than 5 years
                of experience, TCM is well equipped to deliver superior office cleaning London to any office size.
                Dedicated cleaning solutions specifically designed to your business specific needs.
            </p>
        </div>

    </div>
</section>

<!-- first card -->




<!-- ABOUT section////////////////////////////////////////////////////////////////////////////////////// -->

<section id="about-us" data-aos="fade-down">
    <div data-aos="fade-up" id="clip-diagonal"
        class="w-full h-auto lg:py-20 sm:py-20 md:py-20 py-28 bg-[#6F6F6F] text-white flex flex-col justify-center items-center">
        <div class="w-full flex justify-center">
            <h2
                class="text-left sm:py-10 py-8 md:py-16 lg:py-20 text-[24px] text-[40px] lg:mt-[-50px] md:mt-[-70px] sm:mt-[-10px]  font-semibold tracking-wide mb-8">
                About Us
            </h2>
        </div>
        <div class="w-[90%] lg:w-[80%] mx-auto mt-[-60px] lg:mt-[-100px] text-left">
            <p class="text-[16px] sm:text-[17px] py-4 md:text-[18px] lg:text-[18px] leading-relaxed">
                Our vision is to be recognised as a leading provider of staffing solutions for a range of businesses
                in addition to providing care services to private clients. We also provide other ranges of services.
                To achieve this, Tendercare Management Limited provides a range of quality community care and
                support services for vulnerable people from various backgrounds and communities living in London.
                <br><br>
                We have a pool of staff with experience ranging between 5 to 15 years, with specialist options for
                culturally appropriate care and support, and a genuine commitment towards helping people to live a
                happier and more independent life in the comfort of their own home and community.
                <br><br>
                We also provide staffing solutions to other sectors such as hospitality, cleaning, and care. Our
                staff's experience ranges between 5 to 20 years. Due to our client portfolio, we offer some of the
                best rates in the industry, maintaining core values of good, timely, and reliable service.
            </p>
        </div>
    </div>
</section>

<!-- Our Mission Section /////////////////////////////////////////////////////////////////////////////////////// -->
<section id="our-mission">
    <div data-aos="fade-up" class="w-full px-6 lg:px-24 py-12 bg-white">
        <div class="text-left mb-16">
            <h2 class="text-[24px] md:text-[30px] lg:text-[36px] font-semibold mb-4">Our Mission</h2>
            <hr class="border-t-[1px] border-gray-300 w-full md:w-[95%] lg:w-[95%] mb-6" />
            <p class="text-sm md:text-base lg:text-lg text-gray-600 leading-relaxed max-w-[1200px]">
                Our mission is to be recognised as a leading provider of homecare and community support services
                aimed at enhancing the quality of life for vulnerable people in London and surrounding counties,
                whilst promoting diversity, quality learning opportunities, and the overall well-being of the local
                communities we serve.
            </p>
        </div>

        <div class="text-left">
            <h2 class="text-[24px] md:text-[30px] lg:text-[36px] font-semibold mb-4">Our Vision</h2>
            <hr class="border-t-[1px] border-gray-300 w-full md:w-[95%] lg:w-[95%] mb-6" />
            <p class="text-sm md:text-base lg:text-lg text-gray-600 leading-relaxed max-w-[1200px]">
                Our vision is an inclusive society where diversity is respected and celebrated. For Tendercare, this
                means treating every client with dignity and respect, while offering them real choices and
                opportunities. We blend responsive care with commitment to individualised services to meet each
                person&apos;s needs and aspirations.
            </p>
        </div>
    </div>
</section>



<!-- black bg card 2///////////////////////////////////////////////////////////////////// -->

<section id="recruitment">

            <div id="imgo"
                class="bg-[#1f1f1f] w-full lg:h-[150vh] xl:h-[210vh] md:h-[170vh] sm:h-[170vh] h-[155vh] clip-path-custom">
                <div class="relative w-full overflow-hidden h-full">
                    <div class="relative h-full">

                        <?php
                        // Array of slides
                        $slides = [
                            ["src" => "old.jpg", "heading" => "RESIDENTIAL CARE", "description" => "At TCM Care, our philosophy adopts the person-centred approach, so when delivering day-to-day care practice, the identity of an individual is at the centre of what we do. As a result of fostering a model of care that looks at the ‘whole person’ – and not a person’s ability or medical capacity; TCM Care continues to uphold a commitment to offering peace of mind to both an individual and their family alike. Each TCM Care Home provides a place where individuals can flourish within a supportive and enabling environment: one that offers friendship, an enriching engagement programme, and the opportunity to maintain links with the wider community. Furthermore, each member of staff at TCM Care is committed to delivering a service that knows more than just an individual’s name and face. With the support of a bespoke initial assessment, use of Person Centred Software (Mobile Care Monitoring) – an intelligent mobile solution for care planning, reporting and care interactions – and ongoing reviews and evaluations regarding a person’s priorities and preferences, staff can continue to deliver the highest quality of care in line with the company’s over-arching person-centred philosophy as well as providing staffing solutions to private care homes across London. Healthcare Care Assistant Support Workers Senior Supports Home Care Managers Senior Carers Clinical HCAs Carer Supports Nurses"],
                            ["src" => "care.jpg", "heading" => "DOMICILIARY CARE", "description" => "We have a huge number of staff in our database covering a variety of specialities including the following: Healthcare Care Assistant Support Workers Senior Supports Home Care Managers Senior Carers Clinical HCAs Carer Supports Nurses"],
                            ["src" => "Nursing Staff (1).jpg", "heading" => "TCM Recruitment", "description" => "We have a huge number of staff in our database covering a variety of specialities including the following • Specialist Care • Mental Health • Physical Disability • Palliative Care • Elderly Care • Learning Disability"],
                            ["src" => "TCM Hospitality image  (1).jpg", "heading" => "Hospitality", "description" => "The hospitality industry is intensely competitive, with new challenges arising every day. Sometimes it feels as if nothing is certain. But one thing you can be certain about is this: with Tendercare Management Ltd on your side, you’ll recruit the high-quality candidates who can help take your business from success to success. We already have an extensive database of experienced and talented hospitality professionals and we recruit new people daily to ensure we’re always able to fully support our clients with their requirements, whether you’re looking for one-day cover, a 12-month placement, or want to make the role more permanent. Our hospitality clients include hotels, catering companies. We have a great reputation for service and quality and a consistently high client retention rate."],
                            ["src" => "Cleaning-Staff.jpg", "heading" => "Cleaning", "description" => "Office Cleaning and Commercial premises cleaning..."]
                        ];

                        // Loop through slides and generate HTML
                        foreach ($slides as $index => $slide) {
                            $activeClass = ($index === 0) ? "active" : ""; // Set the first slide as active
                        
                            // Check if it's the "Cleaning" slide and apply different styles
                            if ($slide['heading'] === "Cleaning") {
                                echo "
  <div class='fade $activeClass'>
    <div class='bg-[#1F1F1F] h-full flex flex-col items-center sm:pt-[10%] pt-[25%]'>
      <div class='w-full px-[5%] md:px-[10%] lg:px-[15%]'>
        <img src='img/{$slide['src']}' alt='Image $index' class='w-full h-auto object-cover'>
      </div>
      <div class='text-center p-4 text-white overflow-visible lg:max-w-[78%] md:max-w-[78%] sm:max-w-[78%] max-w-[100%] xl:max-w-[60%]'>
        <p class='text-[1.56rem]  font-bold'>Cleaning</p>
        <p class='font-bold border-b-[1px] xl:pb-[30px] xl:mt-[40px] mt-4 border-white'>Office Cleaning</p>
        <p class='text-[#808080]  mt-4 lg:text-[0.875rem]  xl:text-[1.100rem] md:text-[0.885rem] sm:text-[0.805rem] text-[0.690rem]'>
          Office Cleaning and Commercial premises cleaning is one of our specialities. With more than 5 years of experience, TCM is well equipped to deliver superior office cleaning London to any office size. Dedicated cleaning solutions specifically designed to your business specific needs.
        </p>
        <p class='mt-4 xl:mt-[40px] xl:pb-[30px] font-bold border-b-[1px] border-white'>Event Cleaning</p>
        <p class='text-[#808080]  mt-4 lg:text-[0.875rem] xl:text-[1.100rem] md:text-[0.885rem] sm:text-[0.805rem] text-[0.690rem]'>
          From large corporate events, brand events, weddings, and birthday parties, TCM can take the cleaning hassle away. We can provide Pre-Event Cleaning and help with the setup of the venue, during event service to keep the venue in good shape, and Post Event Cleaning service to leave the venue in pristine condition. With years of experience in this field, with Miss Maid you will be in good hands for any occasion.
        </p>
      </div>
    </div>
  </div>";
                            } else {
                                // Regular slide HTML structure
                                echo "
  <div class='fade $activeClass'>
    <div class='bg-[#1F1F1F] h-full flex flex-col items-center lg:pt-[6%] sm:pt-[10%] pt-[25%]'>
      <div class='w-full px-[1%] md:px-[10%] lg:px-[15%]'>
        <img src='img/{$slide['src']}' alt='Image $index' class='w-full h-auto object-cover'>
      </div>
      <div class='text-center p-4 text-white overflow-visible lg:max-w-[100%] xl:max-w-[60%] md:max-w-[100%] sm:max-w-[95%] max-w-[100%]'>
        <h2 class='font-bold text-[1.5rem]'>{$slide['heading']}</h2>
        <p class='text-[#808080] mt-2 text-[0.640rem] sm:text-[0.775rem] xl:text-[1.100rem] md:text-[0.875]'>{$slide['description']}</p>
      </div>
    </div>
  </div>";
                            }
                        }
                        ?>

                        <!-- Circle navigation -->
                        <div class="absolute bottom-[5%] left-1/2  transform -translate-x-1/2 flex space-x-3">
                            <?php for ($i = 0; $i < count($slides); $i++): ?>
                                <button class="dot w-[10px] h-[10px] rounded-full bg-[black]"
                                    data-slide="<?= $i ?>"></button>
                            <?php endfor; ?>
                        </div>

                    </div>
                </div>
            </div>
        

        <script>
            const slides = document.querySelectorAll('.fade');
            const navButtons = document.querySelectorAll('.dot');
            let currentIndex = 0;

            function goToSlide(index) {
                slides[currentIndex].classList.remove('active');
                navButtons[currentIndex].classList.remove('active');
                currentIndex = index;
                slides[currentIndex].classList.add('active');
                navButtons[currentIndex].classList.add('active');
            }

            // Auto slide every 5 seconds
            setInterval(() => {
                goToSlide((currentIndex + 1) % slides.length);
            }, 5000);

            // Add event listeners to buttons
            navButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    goToSlide(index);
                });
            });
        </script>

    
</section>




<section id="news">
<div id='news' data-aos="fade-down">
    <p class='text-[40px] font-bold text-center my-[3%]'>Latest News</p>
    <div class='grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-1 px-4 sm:px-6 md:px-10 lg:px-20'>
        
        <?php
        // Array containing news data
        $newsItems = [
            [
                'title' => 'Domiciliary Care Staff',
                'date' => '07 Jan',
                'description' => 'We have a huge number of staff in our database covering a...',
                'image' => 'img/Support-Workers-2.jpg', // Add the correct image path
                'link' => 'domiciliary.php' // Unique link for this news item
            ],
            [
                'title' => 'TCM Recruitment',
                'date' => '07 Jan',
                'description' => 'We have a huge number of staff in our database covering variety ...',
                'image' => 'img/Nursing Staff (1).jpg', // Add the correct image path
                'link' => 'tcm.php' // Unique link for this news item
            ],
            [
                'title' => 'Cleaning',
                'date' => '07 Jan',
                'description' => 'Office Cleaning and Commercial premises cleaning is one of our...',
                'image' => 'img/Cleaning-Staff.jpg', // Add the correct image path
                'link' => 'cleaning.php' // Unique link for this news item
            ],
            [
                'title' => 'Hospitality',
                'date' => '07 Jan',
                'description' => 'The hospitality industry is intensely competitive, with new...',
                'image' => 'img/TCM Hospitality image  (1).jpg', // Add the correct image path
                'link' => 'hospitality.php' // Unique link for this news item
            ]
        ];

        // Loop through each news item and render the card
        foreach ($newsItems as $news) { ?>
            <div class='relative w-[90%] md:w-[89%] lg:w-[90%] mx-auto max-w-[400px] my-4 h-[76vh] md:h-[60vh] lg:h-[65vh] shadow-lg shadow-slate-400 flex flex-col justify-between hover:shadow-xl transition-shadow duration-300 group'>
                
                <!-- Image Section with Date on top -->
                <div class='relative w-full h-[50%] overflow-hidden'>
                    <img src="<?php echo $news['image']; ?>" alt='news image' class='w-full cursor-pointer h-full object-cover transform transition-transform duration-300 ease-in-out group-hover:scale-110' />

                    <!-- Date Section on top of the Image -->
                    <div class='absolute top-4 left-4 w-[25%] h-[70px] bg-[#00000090] text-[#D4B068] flex flex-col justify-center items-center rounded-br-md transform transition-transform duration-500 group-hover:scale-x-[-1]'>
                        <div class='transition-opacity duration-500 group-hover:opacity-0'>
                            <p class='text-lg font-bold'><?php echo explode(' ', $news['date'])[0]; ?></p>
                            <p class='text-sm font-bold'><?php echo explode(' ', $news['date'])[1]; ?></p>
                        </div>
                        <i class='fas fa-paper-plane mt-[-45px] text-[40px] text-[#D4B068] opacity-0 transition-opacity duration-500 group-hover:opacity-100'></i>
                    </div>
                </div>

                <!-- Text Section -->
                <div class='flex flex-col h-[50%] px-4'>
                    <div class='text-center'>
                        <!-- Title Section -->
                        <h1 class='text-xl cursor-pointer md:text-lg sm:text-base xl:text-xl font-bold mt-4 mx-[10%] lg:mx-[15%] xl:mx-[20%]'>
                            <?php echo $news['title']; ?>
                        </h1>
                        <!-- Description Section -->
                        <p class='text-sm md:text-xs xl:text-sm font-sans text-[#7d7d7d] mt-2 mx-[5%] lg:mx-[8%] xl:mx-[10%]'>
                            <?php echo $news['description']; ?>
                        </p>
                    </div>

                    <!-- Read More Section with unique link -->
                    <div class='mt-auto mb-4 flex cursor-pointer justify-center'>
                        <a href="<?php echo $news['link']; ?>" class='button-2 mx-[5%] md:mx-[10%] lg:mx-[15%] xl:mx-[20%] text-center w-[90%] md:w-[80%] xl:w-[70%] text-[#787878] hover:text-[#D4B068] text-sm outline outline-1 py-2 px-2 hover:border-[#D4B068] border-[#000000] transition duration-300 ease-in-out'>
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
</section>
<!-- contect seaction/////////////////////////////////////////////////////////////////////////////// -->


<section id="contact-us" data-aos="fade-down">
    <form method="POST" action="send_email.php">
        <!-- Change the action to your form processing script -->
        <div id="clip-diagonal"
            class="w-full h-auto py-28 bg-[#1F1F1F] text-white flex flex-col justify-center items-center">
            <h2 class="lg:text-[40px] md:text-[40px] sm:text-[35px] text-[30px] font-semibold tracking-2px mb-8">
                Contact Us</h2>
            <div class="flex flex-col lg:flex-row lg:justify-evenly md:w-full">
                <div
                    class="lg:w-[21%] w-full text-[17px] text-[#787878] tracking-2px flex flex-col items-center lg:items-start px-4 mb-6 lg:mb-0">
                    <i class=" text-[#D4B068] text-[35px] mb-4"><img src="img/location.png"
                            alt=""></i>
                    <p class="lg:mt-[10%] w-[85%] text-center lg:w-[100%] lg:text-left">
                        Tender Care Management City Gate, 246-250, Romford Road, London, E7 9HZ England. • Tel: 0208
                        555 9107 • Email: info@tendercarem.org • Web: www.tendercarem.org
                    </p>
                </div>
                <div class="w-full lg:w-[32%] lg:mt-[30px] flex flex-col items-center lg:items-start">
                    <input
                        class="bg-[#ffffff]  px-2 py-3.5   outline-none xl:w-[400px] lg:w-[320px] w-[90%] sm:w-[70%] md:w-[60%] text-black rounded-lg border-2 transition-colors duration-100 border-solid focus:border-[#D4B068] border-[#1F1F1F]"
                        name="name" required id="name" placeholder="Name" type="text" />
                    <input
                        class="bg-[#ffffff]  px-2 py-3.5  mt-4  outline-none xl:w-[400px] lg:w-[320px] w-[90%] sm:w-[70%] md:w-[60%] lg:mt-[6%] md:mt-[3%] sm:mt-[2%] text-black rounded-lg border-2 transition-colors duration-100 border-solid focus:border-[#D4B068] border-[#1F1F1F]"
                        name="email" required placeholder="Email" type="email" />
                    <input
                        class="bg-[#ffffff]  px-2 py-3.5 mt-4   outline-none xl:w-[400px] lg:w-[320px] w-[90%] sm:w-[70%] md:w-[60%] md:mt-[3%] sm:mt-[2%] lg:mt-[6%] text-black rounded-lg border-2 transition-colors duration-100 border-solid focus:border-[#D4B068] border-[#1F1F1F]"
                        name="number" placeholder="Contact number" type="number" required />
                </div>
                <div class="flex justify-center w-full lg:w-[32%] mt-[22px]">
                    <textarea
                        class="bg-white sm:h-[250px]  px-2 h-[200px] md:mt-[10px] lg:ml-[-120px] sm:mt-[20px] py-1 outline-none xl:w-[400px] lg:w-[280px] w-[90%] sm:w-[70%] md:w-[60%] lg:h-[215px] md:h-[200px] text-black rounded-lg border-2 border-solid transition-colors duration-100 focus:border-[#D4B068] border-[#1F1F1F] resize-none"
                        name="message" placeholder="Message" required></textarea>
                </div>
            </div>
            <button type="submit"
                class="bg-[#78787881] text-white py-3  lg:w-[380px]   w-[90%] sm:w-[70%] md:w-[60%] lg:px-40 md:px-[190px]  sm:px-[110px] rounded-sm mt-4 transition-colors duration-200 hover:bg-[#868585cc] outline outline-1 focus:ring-2 focus:ring-[#fcfafa] focus:ring-opacity-50 mb-6 lg:ml-[270px] relative">
                <p class="font-bold">Submit</p>
            </button>
        </div>

        <div id="response" class="mt-4 text-red-500">
                <?php
                    if (isset($_GET['message'])) {
                        echo htmlspecialchars($_GET['message']);
                    }
                ?>
            </div>


    </form>
</section>

<!-- map seaction////////////////////////////////////////////////////////////////////////////////////////////// -->
<div
    class="flex flex-col sm:flex-row justify-around items-start px-4 sm:px-10 py-4 sm:py-8 space-y-6 sm:space-y-0 sm:space-x-10">
    <!-- Left Section - CQC Rating -->
    <div class="w-full sm:w-[40%] lg:w-[25%]">
        <h2 class="text-md sm:text-lg font-semibold text-gray-700 border-b-2 border-orange-300 pb-2">
            CQC Rating
        </h2>
        <div class="mt-4">
            <div class="relative border rounded-lg shadow-md p-4 bg-white border-gray-300 h-auto sm:h-[38vh]">
                <!-- Corner Design - Top Right -->
                <div class="absolute top-1 right-1 h-[100px] sm:h-[140px] w-[100px] sm:w-[140px]"
                    style="background: linear-gradient(45deg, transparent 50%, #f5f5f5 80%);"></div>

                <!-- Care Quality Commission Logo -->
                <div class="flex items-center mb-4">
                    <img src="img/map.png" alt="Care Quality Commission" class="w-[25%] sm:w-[35%] h-auto">
                </div>

                <!-- CQC Rating Details -->
                <div class="bg-[#f8f7f3] p-4 rounded-md shadow-sm">
                    <p class="text-sm font-semibold text-gray-600">CQC overall rating</p>
                    <p class="text-lg sm:text-xl font-bold text-gray-800 mt-2 flex items-center">
                        Good
                        <span class="ml-2 text-green-600 text-xl sm:text-[33px]">●</span>
                    </p>
                    <p class="text-xs sm:text-sm text-gray-500 mt-1">18 November 2022</p>

                    <!-- See Report Button -->
                    <a href="https://www.cqc.org.uk/location/1-7680103385?referer=widget3">
                        <button
                            class="mt-4 flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-purple-700 font-semibold text-xs sm:text-sm rounded-sm hover:bg-purple-700 hover:text-white transition duration-300 sm:w-[110px] lg:w-[130px] lg:h-[4vh] sm:px-2">
                            <p class="sm:text-[10px] md:text-[10px]">See the report</p>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>

                <!-- Corner Design - Bottom Left -->
                <div class="absolute bottom-1 left-1 h-[100px] sm:h-[120px] w-[100px] sm:w-[120px]"
                    style="background: linear-gradient(225deg, transparent 50%, #f5f5f5 110%);"></div>
            </div>
        </div>
    </div>

    <!-- Right Section - Map -->
    <div class="relative w-full sm:w-[60%] lg:w-[65%] mx-auto">
        <h2 class="text-md sm:text-lg font-semibold text-gray-700 mb-2">Find us here</h2>

        <div class="border-t-2 border-orange-300 pt-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19849.757290505495!2d0.02252!3d51.545871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a722c5317305%3A0xa61bb8b8425eb95a!2sTendercare%20Management%20Ltd!5e0!3m2!1sen!2suk!4v1727347911894!5m2!1sen!2suk"
                width="100%" height="300" allowfullscreen="" loading="lazy"
                class="border border-gray-200 rounded-md"></iframe>
        </div>

        <!-- Direction Card -->
        <div class="absolute top-16 left-2 bg-white shadow-md rounded-md p-4  w-[250px] h-[150px]    sm:w-[300px] sm:h-[150px] "
            id="dirction">
            <h2 class="text-md font-semibold">Tendercare Management Ltd</h2>
            <p class="text-sm text-gray-600 mb-2">City Gate House, 246-250, Romford Rd, London E7 9HZ</p>
            <div class="flex justify-between items-center my-1">
                <div class="flex items-center">
                    <span class="text-yellow-500">5.0</span>
                    <span class="ml-1 text-yellow-500">★★★★★</span>
                    <span class="text-xs ml-2 text-blue-500"><a
                            href="https://www.google.com/search?hl=en-GB&gl=uk&q=Tendercare+Management+Ltd,+City+Gate+House,+246-250,+Romford+Rd,+London+E7+9HZ&ludocid=11969363536194222426&lsig=AB86z5Xba8LvlUIkKrrGl2I8TfqH&hl=en&gl=GB#lrd=0x47d8a722c5317305:0xa61bb8b8425eb95a,1"
                            target="_blank">5 reviews</a></span>
                </div>
                <div class="mt-[-10px]">
                    <a href="https://www.google.com/maps/dir//Tendercare+Management+Ltd+City+Gate+House+246-250,+Romford+Rd+London+E7+9HZ/@51.5458711,0.0225198,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x47d8a722c5317305:0xa61bb8b8425eb95a"
                        class="text-blue-500 hover:underline text-xs" target="_blank">
                        <i
                            class="fas fa-directions text-[#619DE5] ml-[15px] text-[20px] hover:text-[#172e4b] mt-[-12px]"></i>
                        Directions
                    </a>
                </div>
            </div>
            <a href="https://www.google.com/maps/place/Tendercare+Management+Ltd/@51.545871,0.02252,14z/data=!4m6!3m5!1s0x47d8a722c5317305:0xa61bb8b8425eb95a!8m2!3d51.5458711!4d0.0225198!16s%2Fg%2F11h4ff91jh?hl=en&entry=ttu&g_ep=EgoyMDI0MDkxOC4xIKXMDSoASAFQAw%3D%3D"
                class="text-blue-500 hover:underline text-xs" target="_blank">View larger map</a>
        </div>
    </div>
</div>

<!-- footer seaction//////////////////////////////////////////////////////////////////////////////////////////////// -->


<div id="clip-diagonals" class="bg-[#1F1F1F] h-[90px] mt-28 w-full"></div>
<div class="bg-[#1F1F1F]">
    <!-- Footer Main Section -->
    <div class="bg-[#1F1F1F] h-auto mt-[-12px] w-full flex items-center justify-center">
        <div class="w-[90%] mt-4 flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0">
            <!-- Social Media Icons -->
            <div>
                <ul class="flex space-x-4">
                    <li class="icon facebook">
                        <a href="https://www.facebook.com/profile.php?id=100068731942449" target="_blank"
                            rel="noopener noreferrer"
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-white text-black hover:text-blue-500">
                            <svg viewBox="0 0 320 512" height="20px" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg>
                        </a>
                    </li>

                    <li class="icon twitter">
                        <a href="https://x.com/tendercarem_ltd" target="_blank" rel="noopener noreferrer"
                            class="flex items-center justify-center w-10 h-10 rounded-full bg-white text-black hover:text-blue-400">
                            <svg viewBox="0 0 48 48" height="20px" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Designed By Section -->
            <div class="w-[110px] sm:w-[120px] md:w-[130px] lg:w-[160px]">
                <a href="https://www.mdssupport.co.uk" target="blank">
                    <p class="text-white text-[13px] sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px]">
                        Designed by MDS
                    </p>
                </a>
            </div>
        </div>
    </div>
    <div class="bg-[#1F1F1F} h-auto w-[90%] flex items-center justify-center text-white">
        <p class="text-[10px] mt-4 sm:text-[12px] md:text-[14px] lg:text-[16px] xl:text-[18px] text-center">
            Copyrights © 2020 Tender Care Management LTD. All rights reserved
        </p>
    </div>
</div>

<script>
   // Mobile Sidebar toggle
const sidebar = document.getElementById("mobile-sidebar");
const burgerIcon = document.getElementById("burger-icon");

// Toggle sidebar on mobile menu button click
document.getElementById("mobile-menu-toggle").addEventListener("click", function () {
    sidebar.classList.toggle("open");
    burgerIcon.classList.toggle("active");
});

// Close sidebar if clicked outside
document.addEventListener("click", function (event) {
    if (!sidebar.contains(event.target) && !event.target.closest("#mobile-menu-toggle")) {
        closeSidebar();
    }
});

// Close sidebar function
function closeSidebar() {
    sidebar.classList.remove("open");
    burgerIcon.classList.remove("active");
}

// Smooth scroll to section and set active class
function scrollToSection(id) {
    const targetSection = document.getElementById(id);
    if (targetSection) {
        targetSection.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });

        // Close sidebar after clicking on a section link
        closeSidebar();

        // Update active class on the navbar
        setActive(id);

        // Save the active section in localStorage to persist after page reload
        localStorage.setItem("activeSection", id);
    }
}

// Set active nav item
function setActive(sectionId) {
    // Remove active class from all nav items
    document.querySelectorAll('.nav-item').forEach(item => {
        item.classList.remove('active');
    });

    // Add active class to the selected nav item
    const activeItem = document.querySelector(`[onclick="scrollToSection('${sectionId}')"]`);
    if (activeItem) {
        activeItem.classList.add('active');
    }
}

// On page load, retrieve the last active section and set it as active
window.onload = function () {
    const activeSection = localStorage.getItem("activeSection") || "home"; // Default to "home" if no section is found
    setActive(activeSection);

    // Scroll to the active section smoothly on reload
    const targetSection = document.getElementById(activeSection);
    if (targetSection) {
        targetSection.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    }
};

// Update active class based on scroll position
window.addEventListener('scroll', function () {
    const sections = document.querySelectorAll('section');
    let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

    sections.forEach(section => {
        if (section.offsetTop <= scrollPosition + 50 && section.offsetTop + section.offsetHeight > scrollPosition) {
            const id = section.getAttribute('id');
            setActive(id);

            // Save the active section in localStorage to persist after page reload
            localStorage.setItem("activeSection", id);
        }
    });
});

// AOS initialization
window.addEventListener('load', () => {
    const elements = document.querySelectorAll('[data-aos]');
    elements.forEach(element => {
        element.style.opacity = 1;
        element.style.transform = 'translateY(0)';
    });
});

// Hide the loader after the content has loaded
window.addEventListener('load', function () {
    document.getElementById('loader').style.display = 'none'; // Hide loader
    document.querySelector('.content').style.display = 'block'; // Show content
});

// Scroll to Top Button
const scrollToTopButton = document.getElementById("scrollToTop");

window.onscroll = function () {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scrollToTopButton.classList.remove("hidden");
    } else {
        scrollToTopButton.classList.add("hidden");
    }
};

// Scroll to the top when the button is clicked
scrollToTopButton.addEventListener("click", function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

  // JavaScript to hide the loader once the page is fully loaded
        document.addEventListener("DOMContentLoaded", function() {
            // Hide the loader after the page loads
            var loader = document.getElementById('loader');
            if (loader) {
                loader.style.display = 'none';
            }
        });

</script>
</body>

</html>