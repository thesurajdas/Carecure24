<?php
require('./configs/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <?php require('include/header.php'); ?>
</head>
<body>
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
<?php require('include/footer.php'); ?>
</body>
</html>