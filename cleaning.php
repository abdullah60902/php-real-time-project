<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleaning-Tendercare Management Ltd</title>
    <link rel="icon" href="img/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .clip-diagonal-staff {
            clip-path: polygon(0 0, 100% 0, 100% 75%, 0 100%);
        }

        .clip-diagonal-Cleaning {
            clip-path: polygon(0 3%, 100% 0%, 100% 100%, 0 100%);
        }

        #clipings {
            clip-path: polygon(0 50%, 100% 0, 100% 100%, 0 100%);
        }

        .menu-icon {
            width: 30px;
            height: 3px;
            background-color: #726f6f;
            position: relative;
            transition: all 0.3s ease;
        }

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

        #mobile-sidebar {
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            background-color: white;
        }

        #mobile-sidebar.open {
            transform: translateX(0);
        }

        .nav-item {
            position: relative;
            padding-bottom: 5px;
            /* Space for underline */
            color: #6F6F6F;
            /* Default color */
            cursor: pointer;
            transition: color 0.3s ease;
        }

        /* Underline animation */
        .nav-item::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: #D4B068;
            /* Underline color */
            position: absolute;
            left: 0;
            bottom: 0;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        /* Active section styles */
        .nav-item.active {
            color: #D4B068;
            /* Active text color */
        }

        .nav-item.active::after {
            transform: scaleX(1);
            /* Show underline */
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
        

        #clip-diagonals {
            clip-path: polygon(0 80%, 100% 0, 100% 100%, 0 100%);
        }

        #clip {
            clip-path: polygon(0 0%, 100% 0, 100% 82%, 0 100%);
        }


               
        #dirction {
            display: block;

        }


        @media only screen and (max-width: 650px) {

            /* Styles for screens that are 600px or smaller */
            #dirction {
                display: none;
            }
        }

    </style>
</head>

<body class="bg-[#f7f7f7] text-[#929292]">

    

    <!-- Scroll to Top Button -->
    <button id="scrollToTop"
        class="fixed bottom-5 right-5 bg-transparent border-2 border-[#D4B068] text-yellow-500 p-1 shadow-md hidden z-50">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            class="w-6 text-[#D4B068] h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </button>



    <!-- Navbar Section///////////////////////////////////////////////////////////////////////////// -->

    <!-- Navbar Section -->
    <div class="bg-white h-[130px] w-full flex justify-center items-center z-50 fixed top-0">
        <div class="w-[93%] flex justify-between items-center">
            <a href="index.php#home">
                <img src="img/logo1.jpg" alt="Logo" class="cursor-pointer sm:h-[88px] sm:w-[209px] h-[77px] w-[180px]">
            </a>

               <!-- Desktop Navigation -->
               <div class="hidden lg:flex pt-8 xl:w-[62%] justify-between lg:text-[10px] space-x-2 lg:space-x-6">
                <a href="index.php#home">
                    <div  class="nav-item font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                        onclick="setActive('home')">HOME</div>
                </a>
                <a href="index.php#services">
                    <div  class="nav-item font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                        onclick="setActive('services')">SERVICES</div>
                </a>
                <a href="index.php#about-us">
                    <div  class="nav-item font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                        onclick="setActive('about-us')">ABOUT US</div>
                </a>
                <a href="index.php#our-mission">
                    <div  class="nav-item font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                        onclick="setActive('our-mission')">OUR MISSION</div>
                </a>
                <a href="index.php#recruitment">
                    <div  class="nav-item font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                        onclick="setActive('recruitment')">RECRUITMENT</div>
                </a>
                <a href="index.php#news">
                    <div  class="nav-item font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                        onclick="setActive('news')">NEWS</div>
                </a>
                <a href="career.php">
                    <div id="careers" class="nav-item font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                        onclick="setActive('careers')">CAREERS</div>
                </a>
                 <a href="index.php#contact-us">
                    <div  class="nav-item font-semibold hover:text-[#d4b068] tracking-normal text-[13px]"
                        onclick="setActive('contact-us')">CONTACT US</div>
                </a>
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
            <a href="index.php" class="w-[100%]">
                <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                    onclick="closeSidebar(); setActive('home')">
                    <h1>HOME</h1>
                </div>
            </a>

            <a href="index.php#services" class="w-[100%]">
                <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                    onclick="closeSidebar(); setActive('services')">
                    <h1>SERVICES</h1>
                </div>
            </a>

            <a href="index.php#about-us" class="w-[100%]">
                <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                    onclick="closeSidebar(); setActive('about-us')">
                    <h1>ABOUT US</h1>
                </div>
            </a>

            <a href="index.php#our-mission" class="w-[100%]">
                <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                    onclick="closeSidebar(); setActive('our-mission')">
                    <h1>OUR MISSION</h1>
                </div>
            </a>

            <a href="index.php#recruitment" class="w-[100%]">
                <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                    onclick="closeSidebar(); setActive('recruitment')">
                    <h1>RECRUITMENT</h1>
                </div>
            </a>

            <a href="index.php#news" class="w-[100%]">
                <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                    onclick="closeSidebar(); setActive('news')">
                    <h1>NEWS</h1>
                </div>
            </a>

            <a href="career.php" class="w-[100%]">
                <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                    onclick="closeSidebar(); setActive('careers')">
                    <h1>CAREERS</h1>
                </div>
            </a>

            <a href="index.php#contact-us" class="w-[100%]">
                <div class="w-[100%] flex hover:text-[white] p-4 items-center h-[50px] hover:bg-[#D4B068]"
                    onclick="closeSidebar(); setActive('contact-us')">
                    <h1>CONTACT US</h1>
                </div>
            </a>
        </div>
    </div>
    <!-- cleaning///////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div id="clip"
        class="w-full lg:h-[450px] h-[480px] md:h-[450px] sm:h-[450px] bg-[#6F6F6F] text-[#D4B068] flex flex-col justify-center items-center">
        <h2 class="lg:text-[40px] md:text-[35px] sm:text-[30px] text-[30px] font-bold">
            Cleaning
        </h2>
    </div>

    <div class="flex justify-between mb-20 flex-col md:flex-row mx-[6%]">
        <!-- Left Column (Image and Text) -->
        <div class="w-full md:w-[65%] lg:pt-10 md:pt-20 sm:pt-20 pt-28 bg-white clip-diagonal-Cleaning">
            <div class="w-full p-3 md:p-10 text-[15px] md:text-[17px] text-[#929292]">
                <p class="text-justify">
                    Zu viel Hausaufgaben fühlen sich gestresst und können körperliche Gesundheitsprobleme verursachen.
                    Es kann auch verhindern, dass die Schüler Freizeit haben, <a
                        href="https://hausarbeiten-schreiben-lassen.com/" class="text-[#F0CD80]">hausarbeiten schreiben
                        lassen</a>
                    um ihre Interessen zu erkunden und neue Fähigkeiten außerhalb der Schule zu erlernen. Viele Lehrer
                    glauben,
                    dass Hausaufgaben für die Schüler notwendig sind, um ihre Noten zu lernen und zu erhöhen, während
                    andere glauben,
                    dass dies das Zeitmanagement und die Verantwortung verbessern kann. Beide sind falsche
                    Überzeugungen.
                </p>

                <p class="text-justify mt-4">
                    Für viele Studenten des Junggesellen- und Meisters ist das Schreiben ihrer These eine schwierige
                    Aufgabe.
                    Moderne Massenuniversitäten <a href="https://arbeitschreibenlassen.de/seminararbeit-schreiben/"
                        class="text-[#F0CD80]">ghostwriter seminararbeit</a> nicht mehr in der Lage,
                    die Schüler in diesem Bereich vorzubereiten, und es fehlt ihnen häufig das notwendige Wissen, um
                    einen akademischen Text zu erstellen.
                </p>

                <p class="text-justify mt-4">
                    Sie haben das Geschenk, die Stimmen anderer Menschen auf Papier zu fangen. Du bist ein großartiger
                    Schriftsteller.
                    <a href="https://premiumghostwriter.de/" class="text-[#F0CD80]">Ghostwriting ist eine Karriere, die
                        Ihnen hochbezahlte Schreibjobs sowie die Möglichkeit bietet, kreativ zu sein und anderen zu
                        helfen, ihre Ideen zu teilen.</a>
                </p>

                <p class="text-justify mt-4">
                    Eine Bachelorarbeit, auch Bachelor-Thesis genannt, ist ein wissenschaftlicher Text, der bestehende
                    Erkenntnisse analysiert
                    oder neue hervorbringt. Sie wird vom Studenten unter Anleitung eines Professors oder Dozenten
                    verfasst.
                </p>

                <p class="text-justify mt-4">
                    An essay writing company writing services creates essays for students. Based on customer
                    requirements as well as the topic, these companies assign qualified writers to finish the work.
                    <a href="https://topessayswriter.net/" class="text-[#F0CD80]">The best essay service will provide
                        you with a range of features and benefits.</a>
                </p>
            </div>

            <div class="px-3 md:px-10">
                <img src="img/Can.jpg" alt="Office Cleaning" class="w-full h-auto my-4" />
                <h2 class="text-2xl md:text-3xl font-bold my-4 text-black">Office Cleaning</h2>
                <p class="text-[14px] md:text-[16px]">
                    Office Cleaning and Commercial premises cleaning is one of our specialties. With more than 5 years
                    of experience, TCM is well equipped to deliver superior office cleaning services to any office size.
                    Dedicated cleaning solutions specifically designed to meet your business needs.
                </p>

                <h2 class="text-2xl md:text-3xl font-bold my-4 text-black">Event Cleaning</h2>
                <p class="text-[14px] md:text-[16px]">
                    From large corporate events, brand events, weddings, and birthday parties, TCM can take the cleaning
                    hassle away. We provide Pre-Event Cleaning, setup assistance, and Post Event Cleaning to ensure the
                    venue remains in pristine condition.
                </p>

                <p class="text-[14px] md:text-[16px]">
                    Ghostwriters können eine breite Palette von Inhalten erstellen, von Marketingmaterial über
                    technische Kopien und journalistische Artikel bis hin zu Konversations-Blog-Posts. Es ist jedoch
                    wichtig, sich daran zu erinnern, dass sie keine Mind-Reader sind und detaillierte Untersuchungen und
                    Anweisungen benötigen.
                </p>

                <p class="text-[14px] md:text-[16px]">
                    Ohne richtige Voraussetzungen bietet das Schreiben von wissenschaftlichen hausarbeiten schreiben
                    lassen Texten viele Herausforderungen. Vielleicht fehlt jedem Studenten die notwendige Erfahrung,
                    das mit einem Hausarbeiten im Studium abliefern sollte.
                </p>

                <p class="text-[14px] md:text-[16px]">
                    The best online casinos in the UK are those that offer players the ultimate gaming experience. In
                    2023, the UK is expected to have some of the best online casinos, offering players the chance to win
                    big and have a great time.
                </p>

                <img src="img/tash.jpg" alt="Gambling"
                    class="w-full md:w-[50%] justify-items-start flex h-auto my-4 mx-auto" />

                <p class="text-[14px] md:text-[16px]">
                    Finally, you should look for the best online casinos in the UK that offer bonuses and promotions.
                    Many of the best online casinos offer players free spins, deposit bonuses, and other incentives.
                </p>

                <p class="text-[14px] md:text-[16px]">
                    Ghostwriting-Agenturen haben die Befugnis, Ihnen Zeit zu sparen, die Anerkennung Ihrer Marke zu
                    erhöhen und Ihr Unternehmen effektiver zu machen.
                    <a href="https://premiumghostwriter.de/" class="text-[#F0CD80]">Diese Unternehmen unterhalten ein
                        Netzwerk von Schriftstellern und können Sie mit Freiberuflern übereinstimmen.</a>
                </p>

                <p class="text-[14px] md:text-[16px]">
                    Eine Masterarbeit ist ein großes, schriftliches Projekt. Es kann einschüchternd und sogar
                    beängstigend sein, aber es ist eine großartige Gelegenheit, Ihre akademischen Fähigkeiten zu
                    demonstrieren. Der erste Schritt beim Schreiben der These Ihres Meisters besteht darin, das richtige
                    Thema zu wählen.
                </p>

                <p class="text-[14px] mb-10 md:text-[16px]">
                    Die Ghostwriter-Preise variieren je nach Art des Projekts und der Erfahrung des Autors. Einige
                    Ghostwriters berechnen <a href="https://premiumghostwriter.de/preise/"
                        class="text-[#F0CD80]">ghostwriter preise</a> nach dem Wort oder der Stunde.
                </p>
            </div>
        </div>

        <!-- Right Column (Blank Section) -->
        <div id="clipings"
            class="hidden lg:flex w-[25%] lg:h-[60px] h-[40px] bg-white text-[#D4B068] flex-col justify-center items-center mt-[-30px]">
        </div>
    </div>

<!-- map seaction////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="flex flex-col bg-[white] lg:h-[600px] lg:mb-[-230px] sm:flex-row justify-around items-start px-4 sm:px-10 py-4 sm:py-8 space-y-6 sm:space-y-0 sm:space-x-10">
    <!-- Left Section - CQC Rating -->
    <div class="w-full sm:w-[40%] lg:w-[25%]">
        <h2 class="text-md sm:text-lg font-semibold text-gray-700 border-b-2 border-orange-300 pb-2">
            CQC Rating
        </h2>
        <div class="mt-4">
            <div class="relative border rounded-lg shadow-md p-4 bg-white border-gray-300 h-auto sm:h-[38vh]">
                <!-- Corner Design - Top Right -->
                <div class="absolute top-1 right-1 h-[100px] sm:h-[140px] w-[100px] sm:w-[140px]" style="background: linear-gradient(45deg, transparent 50%, #f5f5f5 80%);"></div>

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
                        <button class="mt-4 flex items-center gap-2 px-4 py-2 bg-white border border-gray-300 text-purple-700 font-semibold text-xs sm:text-sm rounded-sm hover:bg-purple-700 hover:text-white transition duration-300 sm:w-[110px] lg:w-[130px] lg:h-[4vh] sm:px-2">
                            <p class="sm:text-[10px] md:text-[10px]">See the report</p>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </a>
                </div>

                <!-- Corner Design - Bottom Left -->
                <div class="absolute bottom-1 left-1 h-[100px] sm:h-[120px] w-[100px] sm:w-[120px]" style="background: linear-gradient(225deg, transparent 50%, #f5f5f5 110%);"></div>
            </div>
        </div>
    </div>

    <!-- Right Section - Map -->
    <div class="relative w-full sm:w-[60%] lg:w-[65%] mx-auto">
        <h2 class="text-md sm:text-lg font-semibold text-gray-700 mb-2">Find us here</h2>

        <div class="border-t-2 border-orange-300 pt-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19849.757290505495!2d0.02252!3d51.545871!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a722c5317305%3A0xa61bb8b8425eb95a!2sTendercare%20Management%20Ltd!5e0!3m2!1sen!2suk!4v1727347911894!5m2!1sen!2suk" width="100%" height="300" allowfullscreen="" loading="lazy" class="border border-gray-200 rounded-md"></iframe>
        </div>

        <!-- Direction Card -->
        <div class="absolute top-16 left-2 bg-white shadow-md rounded-md p-4  w-[250px] h-[150px] sm:w-[300px] sm:h-[150px] " id="dirction" >
            <h2 class="text-md font-semibold">Tendercare Management Ltd</h2>
            <p class="text-sm text-gray-600 mb-2">City Gate House, 246-250, Romford Rd, London E7 9HZ</p>
            <div class="flex justify-between items-center my-1">
                <div class="flex items-center">
                    <span class="text-yellow-500">5.0</span>
                    <span class="ml-1 text-yellow-500">★★★★★</span>
                    <span class="text-xs ml-2 text-blue-500"><a href="https://www.google.com/search?hl=en-GB&gl=uk&q=Tendercare+Management+Ltd,+City+Gate+House,+246-250,+Romford+Rd,+London+E7+9HZ&ludocid=11969363536194222426&lsig=AB86z5Xba8LvlUIkKrrGl2I8TfqH&hl=en&gl=GB#lrd=0x47d8a722c5317305:0xa61bb8b8425eb95a,1" target="_blank">5 reviews</a></span>
                </div>
                <div class="mt-[-10px]">
                    <a href="https://www.google.com/maps/dir//Tendercare+Management+Ltd+City+Gate+House+246-250,+Romford+Rd+London+E7+9HZ/@51.5458711,0.0225198,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x47d8a722c5317305:0xa61bb8b8425eb95a" class="text-blue-500 hover:underline text-xs" target="_blank">
                        <i class="fas fa-directions text-[#619DE5] ml-[15px] text-[20px] hover:text-[#172e4b] mt-[-12px]"></i>
                        Directions
                    </a>
                </div>
            </div>
            <a href="https://www.google.com/maps/place/Tendercare+Management+Ltd/@51.545871,0.02252,14z/data=!4m6!3m5!1s0x47d8a722c5317305:0xa61bb8b8425eb95a!8m2!3d51.5458711!4d0.0225198!16s%2Fg%2F11h4ff91jh?hl=en&entry=ttu&g_ep=EgoyMDI0MDkxOC4xIKXMDSoASAFQAw%3D%3D" class="text-blue-500 hover:underline text-xs" target="_blank">View larger map</a>
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
        const sidebar = document.getElementById("mobile-sidebar");
        const burgerIcon = document.getElementById("burger-icon");
        const navItems = document.querySelectorAll(".nav-item");

        // On page load, set Home as the default active section
        window.onload = function () {
            setActive('');
        };

        function toggleSidebar() {
            sidebar.classList.toggle("open");
            burgerIcon.classList.toggle("active");
        }

        document.getElementById("mobile-menu-toggle").addEventListener("click", toggleSidebar);

        function closeSidebar() {
            sidebar.classList.remove("open");
            burgerIcon.classList.remove("active");
        }

        // Close sidebar on clicking outside
        document.addEventListener('click', function (event) {
            if (!sidebar.contains(event.target) && !event.target.closest('#mobile-menu-toggle')) {
                closeSidebar();
            }
        });

        // Set active class to the clicked section and remove from others
        function setActive(id) {
            navItems.forEach(item => {
                item.classList.remove("active");
            });
            document.getElementById(id).classList.add("active");
        }

        // AOS initialization
        window.addEventListener('load', () => {
            const elements = document.querySelectorAll('[data-aos]');
            elements.forEach(element => {
                element.style.opacity = 1;
                element.style.transform = 'translateY(0)';
            });
        });

        // Set initial active item when page loads
        document.addEventListener('DOMContentLoaded', () => {
            setActive('home'); // Set "Home" as the initial active item
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
    </script>

</body>

</html>