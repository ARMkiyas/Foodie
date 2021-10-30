<?php
require_once __DIR__ . "/../config.php";



require_once SITE_ROOT . "/components/nav_bar.php";
require_once SITE_ROOT . "/components/footer.php";

$search = null;

if (isset($_GET['search'])) {
    if (!empty(trim($_GET['search']))) {
        $search = strtolower(trim($_GET['search']));
    }
}





$data = file_get_contents(SITE_ROOT . "/assets/includes/foods.json");

$data = json_decode($data, true);




// foreach($data as $row)  
// {  
//     if ( strpos(trim(strtolower($row['title'])) , $search) !== false) {
//         echo $row['title'];
//     }
// }  



function food_load($id, $title, $full_title, $price, $stars, $img_link)
{
    echo "<a href=\"food_dis.php?id=$id\"  class=\"food cursor-pointer\" value=${id}>
    <div class=\"mx-auto cursor-pointer  h-full hover:border-gray-400 transform transition-all duration-200 ease hover:-translate-y-1 shadow-sm w-72 max-w-full border border-gray-300 rounded bg-white\">
        <div class=\"w-full h-48\">
            <img src=\"${img_link}\" class=\"w-full h-full object-cover \" />
        </div>
        <div class=\"p-6\">
            <div class=\"text-sm\">
                <h3 class=\"font-bold text-base\">${title}</h3>
               
                <p class=\"mt-1\">
                    <span> ${full_title}</span>
              
                </p>
           
            </div>
          
        </div>
        <div class=\" flex justify-end p-5 text-lightBlue-500 font-extrabold\">
                <div>Rs.</div><div>${price}</div>
            </div>
        <div class=\"absolute top-2 right-2 p-2   \">
            <div class=\"flex items-center \" style=\"color:#ffc219;\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                        <path d=\"M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z\" />
                    </svg>
                    ${stars}
                </div>
        </div>
    </div>
</a>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodie</title>
    <link rel="stylesheet" href="../assets/css/style.css" />

</head>

<body>
    <section>

        <?php

        nav("../index.php", "foods.php", "join_partner.php", "about_us.php", "contact_us.php", 2);

        ?>
    </section>
    <!-- login and register models -->
    <section>
        <?php
        login_design();
        reg_form();
        ?>
    </section>

    <section>

        <div>
            <div class="flex flex-col sm:flex-row sm:h-20 px-6 border-b border-gray-300 bg-white relative ">

                <div class="w-full mx-auto mt-2 mb-4 sm:mx-0 sm:mb-0 sm:mt-0 sm:absolute sm:left-1/2 sm:transform sm:-translate-x-1/2 sm:w-1/2 sm:h-full justify-center items-center block sm:flex">
                    <form class="relative w-full" action=<?php echo $_SERVER['PHP_SELF'] ?> method="GET">

                        <input type="search" name="search" class="w-full max-w-full border border-gray-300 rounded-sm pr-4 pl-10 py-3 outline-none transition-colors duration-150 ease-in-out focus:border-blue-400" placeholder="Search for something..." />
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
                        <div class="food_card grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-4 gap-6 mt-12">

                            <!-- food list cards -->

                            <?php

                            if (empty($_GET['search'])) {
                                foreach ($data as $row) {
                                    food_load($row['id'], $row['title'], $row['full_tiltle'], $row['price'], $row['stars'], $row['img_link']);
                                }
                            } else {

                                foreach ($data as $row) {
                                    if (strpos(trim(strtolower($row['title'])), $search) !== false) {
                                        food_load($row['id'], $row['title'], $row['full_tiltle'], $row['price'], $row['stars'], $row['img_link']);
                                    }
                                }
                            }





                            ?>






                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php
        under_construction();
        ?>
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