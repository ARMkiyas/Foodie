<?php
require_once __DIR__ . "/../config.php";



require_once SITE_ROOT . "/components/nav_bar.php";
require_once SITE_ROOT . "/components/footer.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/sec_style.css" />
</head>

<body>
    <section>

        <?php

        nav("../index.php", "foods.php", "join_partner.php", "about_us.php", "contact_us.php", 2);
        login_design();
        reg_form();
        ?>
    </section>


    <div>
        <div class="flex flex-col sm:flex-row sm:h-20 px-6 border-b border-gray-300 bg-white relative ">

            <div class="w-full mx-auto mt-2 mb-4 sm:mx-0 sm:mb-0 sm:mt-0 sm:absolute sm:left-1/2 sm:transform sm:-translate-x-1/2 sm:w-1/2 sm:h-full justify-center items-center block sm:flex">
                <form class="relative w-full" action="" method="GET">

                    <input type="search" class="w-full max-w-full border border-gray-300 rounded-sm pr-4 pl-10 py-3 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400" placeholder="Search for something..." />
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6  absolute left-0 ml-4 top-1/2 transform -translate-y-1/2 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>
            </div>
        </div>
        <!-- food display place -->
        <div class="w-full flex flex-col lg:flex-row lg:px-6">

            <div class="flex-1 lg:pl-12 py-6 px-6 lg:px-0">
                <div class="w-full px-6 py-3 rounded-sm border text-green-800 bg-green-400 border-green-500" role="alert">
                    We are now offering contactless delivery in light of COVID-19.
                </div>
                <div class="mt-12">

                    <!-- food list grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 gap-6 mt-12">

                        <!-- food list cards -->
                        <a href="#">
                            <div class="mx-auto cursor-pointer h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded-sm bg-white">
                                <div class="w-full h-48">
                                    <img src="https://images.unsplash.com/photo-1566740933430-b5e70b06d2d5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="text-sm">
                                        <h3 class="font-bold text-base">Burritown</h3>
                                        <div class="flex items-center text-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            4.7
                                        </div>
                                        <p class="mt-1">
                                            <span>Burritos · </span><span>Salads · </span><span>Mexican ·
                                            </span><span>Chicken </span>
                                        </p>
                                        <p>1.5 miles away · $$</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="mx-auto cursor-pointer h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded-sm bg-white">
                                <div class="w-full h-48">
                                    <img src="https://images.unsplash.com/photo-1579871494447-9811cf80d66c?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="text-sm">
                                        <h3 class="font-bold text-base">Sushi Blue</h3>
                                        <div class="flex items-center text-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            4.2
                                        </div>
                                        <p class="mt-1">
                                            <span>Sushi · </span><span>Japanese </span>
                                        </p>
                                        <p>1.1 miles away · $$</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="mx-auto cursor-pointer h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded-sm bg-white">
                                <div class="w-full h-48">
                                    <img src="https://images.unsplash.com/photo-1577859623802-b5e3ca51f885?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="text-sm">
                                        <h3 class="font-bold text-base">Three Aunts</h3>
                                        <div class="flex items-center text-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            4.9
                                        </div>
                                        <p class="mt-1">
                                            <span>Chinese · </span><span>BBQ · </span><span>Chicken ·
                                            </span><span>Noodles </span>
                                        </p>
                                        <p>2.5 miles away · $$$</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="mx-auto cursor-pointer h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded-sm bg-white">
                                <div class="w-full h-48">
                                    <img src="https://images.unsplash.com/photo-1542676303584-c8043a6c7618?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="text-sm">
                                        <h3 class="font-bold text-base">Farmer P</h3>
                                        <div class="flex items-center text-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            4.2
                                        </div>
                                        <p class="mt-1">
                                            <span>Chicken · </span><span>Mediterranean · </span><span>British ·
                                            </span><span>Healthy </span>
                                        </p>
                                        <p>3.5 miles away · $</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="mx-auto cursor-pointer h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded-sm bg-white">
                                <div class="w-full h-48">
                                    <img src="https://images.unsplash.com/photo-1572137162111-fc6e04414e21?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="text-sm">
                                        <h3 class="font-bold text-base">Bagel King</h3>
                                        <div class="flex items-center text-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            4.1
                                        </div>
                                        <p class="mt-1">
                                            <span>Bagels · </span><span>Breakfast · </span><span>Dessert </span>
                                        </p>
                                        <p>1.6 miles away · $</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="mx-auto cursor-pointer h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded-sm bg-white">
                                <div class="w-full h-48">
                                    <img src="https://images.unsplash.com/photo-1571917411767-20545014a0bc?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="text-sm">
                                        <h3 class="font-bold text-base">Mr. Banh Mi</h3>
                                        <div class="flex items-center text-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            4.6
                                        </div>
                                        <p class="mt-1">
                                            <span>Sandwiches · </span><span>Vietnamese · </span><span>Noodles ·
                                            </span><span>Drinks </span>
                                        </p>
                                        <p>1.5 miles away · $$</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="mx-auto cursor-pointer h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded-sm bg-white">
                                <div class="w-full h-48">
                                    <img src="https://images.unsplash.com/photo-1557872943-16a5ac26437e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="text-sm">
                                        <h3 class="font-bold text-base">Fancy Ramen</h3>
                                        <div class="flex items-center text-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            4.8
                                        </div>
                                        <p class="mt-1">
                                            <span>Ramen · </span><span>Noodles · </span><span>Japanese </span>
                                        </p>
                                        <p>3.2 miles away · $$$$</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#">
                            <div class="mx-auto cursor-pointer h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded-sm bg-white">
                                <div class="w-full h-48">
                                    <img src="https://images.unsplash.com/photo-1579751626657-72bc17010498?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="w-full h-full object-cover" />
                                </div>
                                <div class="p-6">
                                    <div class="text-sm">
                                        <h3 class="font-bold text-base">Pizzzza</h3>
                                        <div class="flex items-center text-green-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                            4.3
                                        </div>
                                        <p class="mt-1">
                                            <span>Pizza · </span><span>Italian · </span><span>Dessert </span>
                                        </p>
                                        <p>1.5 miles away · $</p>
                                    </div>
                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer >
        <?php
        footer("../index.php", "foods.php", "join_partner.php", "about_us.php", "contact_us.php");
        ?>
    </footer>

    <!-------------------------------- scripts --------------------------------------->
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/index.js"></script>
</body>

</html>