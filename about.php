<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <?php require('include/header.php');
  include('configs/connect.php'); ?>
</head>
<body>
<section class="bg-gray-100 text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">About Us</h1>
            <p class="lg:w-2/3 text-lg text-left mx-auto leading-relaxed">We started our home care services with the intention of reaching healthcare where it is needed most. Elderly people find it difficult to make constant treks to hospitals, yet their health needs constant monitoring. For chronic patients, repeated hospital admissions can be a huge drain on their resources. Starting from health assistants to on-call Doctors and nurses, diagnostic facilities and home hospital set up, Home Care caters to all kinds of medical needs of its members.</p>
            <br><p class="lg:w-2/3 text-lg text-left mx-auto leading-relaxed">Advanced, ethical and affordable healthcare for all is the foundation on which <b>CareCure24</b> stands. Our effort is to constantly upgrade our systems and infrastructure to keep on delivering the best possible care. We have procured the latest equipment to increase the efficiency of our treatment procedures, and our senior Doctors are all very experienced and renowned in their areas of work. The comfort of our patients is of utmost importance to us and every is geared towards providing the best possible experience to all those who have chosen us as the custodians of their health.</p>
          </div>
        </div>
</section>
<section class="bg-gray-200 text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-10">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Why Homecare?</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-lg">In India, the idea of homecare is becoming more popular. The evolving clinical and socioeconomic environments are the growth drivers. Our present geriatric population, or people over 60, is thought to number over 100 million. By 2050, this is projected to increase to 325 million.</p>
            <br><p class="lg:w-2/3 mx-auto leading-relaxed text-lg">When compared to western nations, home healthcare in India is still extremely young. Currently, hospitals provide 80% of non-urgent medical treatment that may be provided at home.</p>
          </div>
        </div>
</section>
        
    <section class=bg-gray-50 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Doctors</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Meet our doctors</p>
          </div>
                                                                 <div class="flex flex-wrap -m-2">
                      <?php $sql="SELECT * FROM employee WHERE type=1";
	                     $res=$conn->query($sql);
	                     if($res->num_rows>0) {
                         while($ru=$res->fetch_assoc()): ?>
               
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="<?php if($ru['gender']==1){echo 'img/docf.png';}else{echo 'img/doci.png';} ?>">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium"><?php echo $ru['name']; ?></h2>
                  <p class="text-gray-500"><?php echo $ru['details']; ?></p>
                </div>
              </div>
            </div>
                                          <?php endwhile;} ?>

          
        </div>
        </div>
      </section>
    <section class=bg-gray-50 text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Healthcare Professionals</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Meet our healthcare professionals</p>
          </div>
          <div class="flex flex-wrap -m-2">
 <?php $sql="SELECT * FROM employee WHERE type=2";
	                     $res=$conn->query($sql);
	                     if($res->num_rows>0) {
                         while($rp=$res->fetch_assoc()): ?>
            <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
              <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="<?php if($rp['gender']==1){echo 'img/docsf.png';}else{echo 'img/docsm.png';} ?>">
                <div class="flex-grow">
                  <h2 class="text-gray-900 title-font font-medium"><?php echo $rp['name']; ?></h2>
                  <p class="text-gray-500"><?php echo $rp['details']; ?></p>
                </div>
              </div>
            </div>
            <?php endwhile;} ?>
           

          </div>
        </div>
      </section>
      <?php require('include/footer.php'); ?>
</body>
</html>