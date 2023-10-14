<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?91300';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Fast Booking",
      "borderRadius":"25",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"CareCure24",
      "brandSubTitle":"Typically replies within a day",
      "brandImg":"https://carecure24.com/icon/apple-touch-icon.png",
      "welcomeText":"Hello!\nHow can I help you?",
      "messageText":"I want to book...",
      "backgroundColor":"#0a5f54",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"917797288747"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>
<footer class="bg-white text-gray-600 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <img src="./icon.png" width="50px" height="50px" alt="CareCure24 Logo">
                    <span class="ml-3 text-2xl">CareCure24</span>
                </a>
                <p class="mt-2 text-sm text-gray-600">Because care begins at home.</p>
                <br>
                <p class="container">
                    <center>
                    <img src="./img/iso-logo2.png" width="200px" height="200px" alt="ISO Logo">
                    </center>
                </p>
            </div>
            <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">About CareCure</h2>
                    <nav class="list-none mb-10">
                    <li>
                        <a href="./about.php" class="text-gray-600 hover:text-blue-600">About Us</a>
                    </li>
                    <li>
                        <a href="./feedback.php" class="text-gray-600 hover:text-blue-600">Feedback</a>
                    </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Careers</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a href="./career.php"  class="text-gray-600 hover:text-gray-800">Get Hired</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Services</h2>
                    <nav class="list-none mb-10">
                    <?php
                    $sql = "SELECT * FROM services LIMIT 7";
                    $res = $conn->query($sql);
                    while ($row = $res->fetch_assoc()) :
                ?>
                        <li>
                            <a href="./book.php?service_id=<?php echo $row['id']; ?>" class="text-gray-600 hover:text-blue-600"><?php echo $row['service_name']; ?></a>
                        </li>
                        <?php
                endwhile;
                ?>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">Quick Links</h2>
                    <nav class="list-none mb-10">
                        
                        <li>
                            <a href="./contact.php" class="text-gray-600 hover:text-blue-600">Contact Us</a>
                        </li>
                        <li>
                            <a href="./privacy.php" class="text-gray-600 hover:text-blue-600">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="./terms.php" class="text-gray-600 hover:text-blue-600">Terms & Conditions</a>
                        </li>
                        <li>
                            <a href="./disclaimer.php" class="text-gray-600 hover:text-blue-600">Disclaimer</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-slate-300">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2022 CareCure24.com —
                    <a href="./" rel="noopener noreferrer" class="text-gray-600 ml-1"
                        target="_blank"><b>Athensa Group of Companies</b></a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a href="https://wa.me/917797288747" target="_blank" class="text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-7 h-7" viewBox="0 0 24 24">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg>
                    </a>
                    <a href="https://facebook.com/carecure24" target="_blank" class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://twitter.com/carecure24" target="_blank" class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a href="https://instagram.com/carecure.24" target="_blank" class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a href="https://linkedin.com/company/carecure24" target="_blank" class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>
<script src="./serviceWorker.js"></script>