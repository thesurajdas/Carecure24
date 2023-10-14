<?php
require('./configs/connect.php');
?>
<script src="https://cdn.tailwindcss.com"></script>
<!-- JS Framewroks -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"> -->
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
<meta name="theme-color" content="#ffffff">
<!--<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">-->
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11149658781"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11149658781');
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LPGFRWM62Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LPGFRWM62Z');
</script>
<header class="bg-white text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <a href="./" class="mr-5 hover:text-blue-600">Home</a>
                <a href="services.php" class="mr-5 hover:text-blue-600">Services</a>
                <!-- <a href="pricing.php" class="mr-5 hover:text-blue-600">Pricing</a> -->
                <a href="about.php" class="mr-5 hover:text-blue-600">About</a>
                <a href="contact.php" class="mr-5 hover:text-blue-600">Contact</a>
            </nav>
            <a href="./"
                class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                <img src="./icon.png" width="50px" height="50px" alt="CareCure24 Logo">
                <span class="ml-3 text-4xl">CareCure24</span>
            </a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <a href="tel:+917797288747">
                <button
                    class="inline-flex items-center bg-green-600 border-0 py-1 px-3 focus:outline-none hover:bg-green-500 text-white rounded-lg text-base mt-4 md:mt-0">
                    <i class="bi bi-telephone"></i> +91 77972 88747
                </button>
            </a>
            </div>
        </div>
    </header>