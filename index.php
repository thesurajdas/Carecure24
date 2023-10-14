<?php
require('./configs/connect.php');
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareCure24</title>
    <!-- <link href="../dist/output.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="manifest" href="icon/manifest.json">
    <link rel="mask-icon" href="icon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="icon/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="CareCure24">
    <meta name="application-name" content="CareCure24">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="msapplication-config" content="icon/browserconfig.xml">
    <meta name="theme-color" content="#F3F4F6">
    <!-- Schema Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "CareCure24",
            "url": "https://carecure24.com/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "http://carecure24.com/?s={search_term_string}{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "DiagnosticLab",
            "name": "CareCure24",
            "alternateName": "CC24",
            "url": "https://carecure24.com",
            "logo": "https://carecure24.com/icon.png",
            "sameAs": [
                "https://facebook.com/carecure24",
                "https://instagram.com/carecure.24",
                "https://linkedin.com/company/carecure24",
                "https://carecure24.com/"
            ]
        }
    </script>
  <?php require('./include/header.php'); ?>
</head>

<body>
    

   <section class="bg-gray-100 text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Book Your Medical Services
                    <br class="hidden lg:inline-block">At Home!
                </h1>
                <p class="mb-8 leading-relaxed">Call us to know more and book your doctor's Appointment & Medical Services at home.</p>
                <div class="flex justify-center">
                    <a href="./book.php">
                        <button class="inline-flex text-white bg-sky-800 border-0 py-2 px-6 focus:outline-none hover:bg-sky-600 rounded-full text-base gap-x-1">Book Appointment <i class="bi bi-hand-index-thumb"></i></button>
                    </a>
                    <a href="tel:+917797288747">
                        <button class="ml-4 inline-flex text-white bg-green-600 border-0 py-2 px-6 focus:outline-none hover:bg-green-500 rounded-full text-base gap-x-1">Call Now <i class="bi bi-telephone-outbound"></i></button>
                    </a>
                </div>
            </div>
            <div class="saturate-200 lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="./img/home.webp" width="320px" height="240px">
            </div>
        </div>
    </section>

    <section class="bg-gray-300 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">How can we help you with?</h1>
                <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">
                    We are providing this services. You can choose any service to book your appointment.
                </p>
            </div>
            <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
                <?php
                $sql = "SELECT * FROM services";
                $res = $conn->query($sql);
                while ($row = $res->fetch_assoc()) :
                ?>
                    <div class="p-2 sm:w-1/2 w-full">
                        <a href="./book.php?service_id=<?php echo $row['id']; ?>">
                            <div class="bg-gray-100 hover:bg-green-200 rounded flex p-4 h-full items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-green-500 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                    <path d="M22 4L12 14.01l-3-3"></path>
                                </svg>
                                <span class="title-font font-medium"><?php echo $row['service_name']; ?></span>
                            </div>
                        </a>
                    </div>
                <?php
                endwhile;
                ?>
            </div>
            <button class="flex mx-auto mt-16 text-white bg-sky-800 border-0 py-2 px-8 focus:outline-none hover:bg-sky-600 rounded-full text-lg gap-x-1">Book Appointment <i class="bi bi-hand-index-thumb"></i></button></a>
        </div>
    </section>
<!--
    <section class="bg-gray-300 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex w-full mb-20 flex-wrap">
                <h1 class="sm:text-xl lg:text-4xl text-3xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4">About <b>CareCure24</b></h1>
                <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Our home visit programme aims to comfort people who may not need significant and frequent medical care but occasionally need support from a doctor.
                    Patients and their Family members can avail the services of our home health care providers for specific, individual one-time purposes as well.
                    For prompt intervention and your general medical needs, our doctors, physician associates, nurses, skilled physiotherapists, and medical technologists are available on call.</p>
            </div>
            <div class="flex flex-wrap md:-m-2 -m-1">
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/img6.webp">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/img7.webp">
                    </div>
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="./img/img4.webp">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="md:p-2 p-1 w-full">
                        <img alt="gallery" class="w-full h-full object-cover object-center block" src="./img/img3.webp">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/img8.webp">
                    </div>
                    <div class="md:p-2 p-1 w-1/2">
                        <img alt="gallery" class="w-full object-cover h-full object-center block" src="./img/img5.webp">
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <section class="bg-gray-300 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <h2 class="sm:text-7xl text-5xl text-gray-900 font-medium title-font mb-2 md:w-2/5">Our Vision</h2>
            <div class="md:w-3/5 md:pl-6">
                <p class="leading-relaxed text-base"><b>Carecure24</b> brings clinical excellence with empathy and care to the convenience of your home through its distinctive treatment alternatives, in keeping with its goal.</p>
                <br>
                <p class="leading-relaxed text-base">Homecare, or healthcare services that conveniently come to patients' homes for the convenience of patients and their families, is a result of the changing healthcare landscape in India.</p>
                <div class="flex md:mt-4 mt-6">
                    <a href="./book.php">
                        <button class="inline-flex text-white bg-sky-800 border-0 py-1 px-4 focus:outline-none hover:bg-sky-600 rounded gap-x-1">Book Appointment <i class="bi bi-hand-index-thumb"></i></button>
                    </a>
                    <a href="./about.php" class="text-blue-500 inline-flex items-center ml-4">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-300 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="text-3xl font-medium title-font text-gray-900 mb-12 text-center">Testimonials</h1>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-100 p-8 rounded-3xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                        </svg>
                        <p class="leading-relaxed mb-6">I write this with gratitude to thank the outstanding support that I have received from CareCure24. After my octogenarian father was discharged from the hospital in a bedridden condition with a number of complications, I was perplexed and had no clue on how to deal with the situation. At that moment CareCure24 appeared like an Angel. With their constant support and care, my father has recovered to a large extent.
                            Thanks galore to the CareCure24 Team.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="./img/sb2.png" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Prof. Dr. S Bandyopadhyay</span>
                                <span class="text-gray-500 text-sm">Scientist & Professor</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="p-4 md:w-1/2 w-full">
                    <div class="h-full bg-gray-100 p-8 rounded-3xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="block w-5 h-5 text-gray-400 mb-4" viewBox="0 0 975.036 975.036">
                            <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                        </svg>
                        <p class="leading-relaxed mb-6">It's a great news that Carecure24 is going to launch an online platform. I have a good experience with Carecure24. In 2021 my father got an infection in his right leg and was admitted to Medica Super speciality Hospital, Kolkata. After discharge from hospital we were looking for a healthcare professional at home for daycare service. At that time I met Carecure24 and got all services from there. Soon my father got a healing touch and got cured. Hope this digital platform will help people to get medical needs at home at ease.</p>
                        <a class="inline-flex items-center">
                            <img alt="testimonial" src="./img/sb2.png" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">Manoj Saha</span>
                                <span class="text-gray-500 text-sm">Teacher & Social Worker</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-300 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                    <h1 class="title-font font-medium text-3xl mb-2 text-gray-900">Our Happy Family Members</h1>
                    <div class="leading-relaxed">As part of our partnership programmes, we support people who provide care while maintaining the dignity of those who receive it. Over a long period of time, we offer compassionate care under the best medical supervision.</div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-gray-900">1.6K</h2>
                    <p class="leading-relaxed">Patients</p>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-gray-900">150+</h2>
                    <p class="leading-relaxed">Doctors</p>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-gray-900">11</h2>
                    <p class="leading-relaxed">Cities</p>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-gray-900">350+</h2>
                    <p class="leading-relaxed">HealthCare Professionals</p>
                </div>
            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center w-full h-full" src="./img/img2.webp" alt="stats">
            </div>
        </div>
    </section>

    <section class="bg-gray-100 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Book our Services</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Book our services at home in just 2 minutes.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border-2 border-black p-6 rounded-lg">
                        <div class="w-28 h-28 inline-flex items-center justify-center rounded-full text-blue-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-96 55.2C54 332.9 0 401.3 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7c0-81-54-149.4-128-171.1V362c27.6 7.1 48 32.2 48 62v40c0 8.8-7.2 16-16 16H336c-8.8 0-16-7.2-16-16s7.2-16 16-16V424c0-17.7-14.3-32-32-32s-32 14.3-32 32v24c8.8 0 16 7.2 16 16s-7.2 16-16 16H256c-8.8 0-16-7.2-16-16V424c0-29.8 20.4-54.9 48-62V304.9c-6-.6-12.1-.9-18.3-.9H178.3c-6.2 0-12.3 .3-18.3 .9v65.4c23.1 6.9 40 28.3 40 53.7c0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.4 16.9-46.8 40-53.7V311.2zM144 448c13.3 0 24-10.7 24-24s-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24z" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Doctor at Home
                        </h2>
                        <p class="leading-relaxed text-base">Our team of expert, specialized doctors
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border-2 border-black p-6 rounded-lg">
                        <div class="w-28 h-28 inline-flex items-center justify-center rounded-full text-blue-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M96 128V70.2c0-13.3 8.3-25.3 20.8-30l96-36c7.2-2.7 15.2-2.7 22.5 0l96 36c12.5 4.7 20.8 16.6 20.8 30V128h-.3c.2 2.6 .3 5.3 .3 8v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V136c0-2.7 .1-5.4 .3-8H96zm48 48c0 44.2 35.8 80 80 80s80-35.8 80-80V160H144v16zM129.1 323.2l83.2 88.4c6.3 6.7 17 6.7 23.3 0l83.2-88.4c73.7 14.9 129.1 80 129.1 158.1c0 17-13.8 30.7-30.7 30.7H30.7C13.8 512 0 498.2 0 481.3c0-78.1 55.5-143.2 129.1-158.1zM208 48V64H192c-4.4 0-8 3.6-8 8V88c0 4.4 3.6 8 8 8h16v16c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8V96h16c4.4 0 8-3.6 8-8V72c0-4.4-3.6-8-8-8H240V48c0-4.4-3.6-8-8-8H216c-4.4 0-8 3.6-8 8z" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Nurse at Home</h2>
                        <p class="leading-relaxed text-base">Compassionate and skilled nursing staff.
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border-2 border-black p-6 rounded-lg">
                        <div class="w-28 h-28 inline-flex items-center justify-center rounded-full text-blue-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96v32V480H384V128 96 56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM96 96H64C28.7 96 0 124.7 0 160V416c0 35.3 28.7 64 64 64H96V96zM416 480h32c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64H416V480zM224 208c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v48h48c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H288v48c0 8.8-7.2 16-16 16H240c-8.8 0-16-7.2-16-16V320H176c-8.8 0-16-7.2-16-16V272c0-8.8 7.2-16 16-16h48V208z" />
                            </svg>
                        </div>
                        <h2 class="text--2lg text-black font-medium title-font mb-2">Physio at Home</h2>
                        <p class="leading-relaxed text-base">Professionally trained physiotherapists
                        </p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border-2 border-black p-6 rounded-lg">
                        <div class="w-28 h-28 inline-flex items-center justify-center rounded-full text-blue-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M441 7l32 32 32 32c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-15-15L417.9 128l55 55c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-72-72L295 73c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l55 55L422.1 56 407 41c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0zM210.3 155.7l61.1-61.1c.3 .3 .6 .7 1 1l16 16 56 56 56 56 16 16c.3 .3 .6 .6 1 1l-191 191c-10.5 10.5-24.7 16.4-39.6 16.4H97.9L41 505c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l57-57V325.3c0-14.9 5.9-29.1 16.4-39.6l43.3-43.3 57 57c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-57-57 41.4-41.4 57 57c6.2 6.2 16.4 6.2 22.6 0s6.2-16.4 0-22.6l-57-57z" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Investigations at Home</h2>
                        <p class="leading-relaxed text-base">Sample collection and Vaccination</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border-2 border-black p-6 rounded-lg">
                        <div class="w-28 h-28 inline-flex items-center justify-center rounded-full text-blue-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 640 512">
                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M483.2 9.6L524 64h92c13.3 0 24 10.7 24 24s-10.7 24-24 24H512c-7.6 0-14.7-3.6-19.2-9.6L468.7 70.3l-47 99.9c-3.7 7.8-11.3 13.1-19.9 13.7s-16.9-3.4-21.7-10.6L339.2 112H216c-13.3 0-24-10.7-24-24s10.7-24 24-24H352c8 0 15.5 4 20 10.7l24.4 36.6 45.9-97.5C445.9 6.2 453.2 1 461.6 .1s16.6 2.7 21.6 9.5zM320 160h12.7l20.7 31.1c11.2 16.8 30.6 26.3 50.7 24.8s37.9-13.7 46.5-32L461.9 160H544c53 0 96 43 96 96V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V448H352 320 64v32c0 17.7-14.3 32-32 32s-32-14.3-32-32V96C0 78.3 14.3 64 32 64s32 14.3 32 32V352H288V192c0-17.7 14.3-32 32-32zM176 320c-44.2 0-80-35.8-80-80s35.8-80 80-80s80 35.8 80 80s-35.8 80-80 80z" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Medical Equipment at Home</h2>
                        <p class="leading-relaxed text-base">Rent & Purchase equipment</p>
                    </div>
                </div>
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border-2 border-black p-6 rounded-lg">
                        <div class="w-28 h-28 inline-flex items-center justify-center rounded-full text-blue-500 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M384 176c0 70.7-57.3 128-128 128s-128-57.3-128-128s57.3-128 128-128s128 57.3 128 128zm7.8-112C359.5 24.9 310.7 0 256 0S152.5 24.9 120.2 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H391.8zM296 224c0-10.6-4.1-20.2-10.9-27.4l33.6-78.3c3.5-8.1-.3-17.5-8.4-21s-17.5 .3-21 8.4L255.7 184c-22 .1-39.7 18-39.7 40c0 22.1 17.9 40 40 40s40-17.9 40-40z" />
                            </svg>
                        </div>
                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">Nutritionist at home</h2>
                        <p class="leading-relaxed text-base">Get your personal Nutritionist at your home</p>
                    </div>
                </div>
            </div>
            <button class="flex mx-auto mt-16 text-white bg-sky-800 border-0 py-2 px-8 focus:outline-none hover:bg-sky-600 rounded-full text-lg gap-x-1">
                Book Appointment <i class="bi bi-hand-index-thumb"></i></button>
        </div>
    </section>

    <section class="bg-gray-300 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">1</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <i class="fa-solid fa-mobile-screen text-4xl"></i>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Book an Appointment</h2>
                        <p class="leading-relaxed">Click on the Enquiry Button and fillup the form to book an appointment.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">2</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <i class="bi bi-telephone-inbound text-4xl"></i>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Get a call from us</h2>
                        <p class="leading-relaxed">After book your appointment, you will get a call from us.</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">3</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <i class="fa-solid fa-indian-rupee-sign text-4xl"></i>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Pay for Appointment (Online/On Visit)</h2>
                        <p class="leading-relaxed">Payment methods: UPI, Bank Transfer</p>
                    </div>
                </div>
            </div>
            <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
                <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                    <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                </div>
                <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">4</div>
                <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
                    <div class="flex-shrink-0 w-24 h-24 bg-blue-100 text-blue-500 rounded-full inline-flex items-center justify-center">
                        <i class="fa-regular fa-square-check text-4xl"></i>
                    </div>
                    <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                        <h2 class="font-medium title-font text-gray-900 mb-1 text-xl">Appointment Confirmed!</h2>
                        <p class="leading-relaxed">Once the appointment is confirmed, our team will reach your place within 4-5 hours as per your requirement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-gray-900">Book your appointment within 2 minutes! </h1>
                <a href="./book.php"><button class="flex-shrink-0 text-white bg-sky-800 border-0 py-2 px-8 focus:outline-none hover:bg-sky-600 rounded-full text-lg mt-10 sm:mt-0 gap-x-1">Book Appointment <i class="bi bi-hand-index-thumb"></i></button>
            </div>
        </div>
    </section>

    <?php require('./include/footer.php'); ?>
</body>

</html>