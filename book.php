<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Appoinment</title>
  <link rel="stylesheet" href="../dist/output.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <?php require_once('include/header.php'); ?>
</head>

<body>
  <section class="bg-blue-200 text-gray-600 body-font">
    <div id="bookRes"></div>
    <form id="bookForm">
      <input type="text" name="action" id="" value="book" hidden>
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Request a Callback Now</h1>
          <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Book your appoinment with us and get a callback from us.</p>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
          <div class="relative flex-grow w-full">
            <label for="full-name" class="leading-7 text-sm text-gray-600">Full Name</label>
            <input type="text" id="full-name" name="full-name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
          <div class="relative flex-grow w-full">
            <label for="phone" class="leading-7 text-sm text-gray-600">Phone Number</label>
            <input type="phone" id="phone" name="phone" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
          <div class="relative flex-grow w-full">
            <label for="phone_alt" class="leading-7 text-sm text-gray-600">Alternative Number (Optional)</label>
            <input type="phone" id="phone_alt" name="phone_alt" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
          <div class="relative flex-grow w-full">
            <label for="age" class="leading-7 text-sm text-gray-600">Age</label>
            <input type="number" id="age" name="age" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
          <div class="relative flex-grow w-full">
            <label for="gender" class="leading-7 text-sm text-gray-600">Gender</label>
            <select id="gender" name="gender" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="relative flex-grow w-full">
            <label for="pin_code" class="leading-7 text-sm text-gray-600">PIN Code</label>
            <input type="number" id="pin_code" name="pin_code" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
          <div class="relative flex-grow w-full">
            <label for="address" class="leading-7 text-sm text-gray-600">Full Address</label>
            <input type="text" id="address" name="address" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
          <div class="relative flex-grow w-full">
            <label for="service_id" class="leading-7 text-sm text-gray-600">Services</label>
            <select id="service_id" name="service_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
              <option>Select Service</option>
              <?php
              $sql = "SELECT * FROM services";
              $res = $conn->query($sql);
              while ($row = $res->fetch_assoc()) :
              ?>
                <option value="<?php echo $row['id']; ?>" <?php if(isset($_REQUEST['service_id'])){echo ($row['id']==$_REQUEST['service_id']) ? "selected" : "";} ?>><?php echo $row['service_name']; ?></option>
              <?php
              endwhile;
              ?>
            </select>
          </div>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
          <div class="relative flex-grow w-full">
            <label for="appoint_datetime" class="leading-7 text-sm text-gray-600">Appointment Date & Time</label>
            <input type="datetime-local" id="appoint_datetime" name="appoint_datetime" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
          </div>
          <div class="relative flex-grow w-full">
            <label for="description" class="leading-7 text-sm text-gray-600">Description (Optional)</label>
            <input type="text" id="description" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-blue-500 focus:bg-transparent focus:ring-2 focus:ring-blue-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end ">
          <br><br><br>
          <button type="submit" class="text-white bg-blue-500 border-0 py-2 px-8 focus:outline-none hover:bg-blue-900 rounded text-lg">Book</button>
        </div>
      </div>
    </form>
  </section>
  <?php require_once('include/footer.php'); ?>
  <script>
    $(document).ready(function() {
      $("#bookForm").submit(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'configs/api.php',
          type: 'POST',
          data: $('#bookForm').serialize(),
          success: function(result) {
            $('#bookRes').html(result);
            $('#bookForm').trigger("reset");
          }
        })
      })
    })
  </script>
</body>

</html>