<?php
require_once __DIR__ . "/../config.php";



require_once SITE_ROOT . "/components/nav_bar.php";
require_once SITE_ROOT . "/components/footer.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css" />





</head>

<body class="bg-gray-100">

    <section>

        <?php

        nav("../index.php", "foods.php", "join_partner.php", "about_us.php", "contact_us.php", 2);

        ?>
    </section>

    <section>
        <?php
        login_design();
        reg_form();
        ?>
    </section>

    <section>

        <div class="min-w-screen min-h-screen  flex items-center p-5 lg:p-10 overflow-hidden relative">
            <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
                <div class="md:flex items-center -mx-10">
                    <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                        <div class="relative border-4 border-yellow-200  ">
                            <img src="https://images.unsplash.com/photo-1566740933430-b5e70b06d2d5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-fill" />
                        </div>
                    </div>
                    <div class="w-full md:w-1/2 px-10 space-y-6">
                        <div class="">
                            <h1 class="font-bold uppercase text-2xl mb-5">Burritown</h1>
                            <p class="text-sm">
                                Burritown. Salads. mexican. chiken
                                </p>
                        </div>

                        <div class="">
                            <h3 class="text-sm text-gray-600">Quantity</h3>
                            <div class="flex items-center mt-2">
                          
                                <button class="text-gray-500 focus:outline-none focus:text-gray-600" id="minus">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                                <span class="text-gray-700 mx-2" id="quan">1</span>
                                <button class="text-gray-500 focus:outline-none focus:text-gray-600" id="plus">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </button>
                           
                            </div>
                        </div>

                        <div>
                            <div class=" inline-flex items-baseline mr-4">
                                <span class="text-2xl leading-none align-baseline">$</span>
                                <span class="font-bold text-5xl leading-none align-baseline">59</span>
                                <span class="text-2xl leading-none align-baseline">.99</span>
                            </div>
                            <div class="inline-flex items-baseline space-x-2 ">
                                <button class="bg-yellow-300 opacity-75 hover:opacity-100 text-yellow-900 hover:text-gray-900 rounded-full px-5 py-2 font-semibold inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class=" h-8" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd" />
                                    </svg>
                                </button>

                                <button class="bg-yellow-300 opacity-75 hover:opacity-100 text-yellow-900 hover:text-gray-900 rounded-full px-10 py-2 font-semibold inline-flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                    </svg> BUY NOW</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
            <div>
                <a title="Buy more save more" href="./foods.php" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                    <img class="object-cover object-center w-full h-full rounded-full" src="../assets/includes/buy.jpg" />
                </a>
            </div>
        </div>
    </section>


    <footer>
        <?php
        footer("../index.php", "foods.php", "join_partner.php", "about_us.php", "contact_us.php");
        ?>
    </footer>

    <!-------------------------------- scripts --------------------------------------->
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/index.js"></script>
</body>

</html>