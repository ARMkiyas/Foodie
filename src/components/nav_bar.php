<?php

function nav($home_link, $food_link, $become_parner_link, $about_us_link, $contact_us_link)
{

  echo  "
        <nav class=\"px-5 overflow-hidden w-screen flex lg:justify-between lg:items-center justify-between\">
    
          <div class=\" font-logo  font-semibold text-3xl text-pink-500\">
            Foodie
          </div>
    
    
          <ul class=\"flex flex-col lg:flex-row text-gray font-bold  lg:space-x-5 items-center invisible lg:visible\">
            <li class=\"text-blue-600\"><a href=\"${home_link}\">Home</a></li>
            <li class=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" class=\"w-4 invisible lg:visible h-4 lg:current-fill\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z\" />
              </svg>
            </li>
            <li class=\"nav_hover\"><a href=\"$food_link\"/>Foods</a></li>
            <li class=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" class=\"w-4 h-4 invisible lg:visible lg:current-fill\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z\" />
              </svg>
            </li>
            <li class=\"nav_hover\"><a href=\"$become_parner_link\">Become a Partner</a></li>
            <li class=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" class=\"w-4 invisible lg:visible h-4 lg:current-fill\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z\" />
              </svg>
            </li>
            <li class=\"nav_hover\"><a href=\"$about_us_link\">About us</a></li>
            <li class=\"\">
              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" stroke=\"currentColor\" class=\"w-4 invisible lg:visible h-4 lg:current-fill\" viewBox=\"0 0 24 24\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z\" />
              </svg>
            </li>
            <li class=\"nav_hover\"><a href=\"$contact_us_link\">Contact US</a></li>
    
          </ul>
    
    
          <div class=\"lg:m-2 flex lg:space-x-3 invisible lg:visible\">
            <button class=\"log_btn\" id=\"sign_btn\">Sign in</button>
            <button class=\"log_btn\" id=\"reg_btn\">Register</button>
          </div>
    
          <!-- nav for mobile -->
          <div class=\"mr-2 mt-1 lg:hidden\">
            <button id=\"nav_btn\">
              <svg class=\" overflow-hidden h-6 w-8 fill-current text-blue-600\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\">
                <title>Mobile menu</title>
                <path d=\"M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z\"></path>
              </svg>
            </button>
          </div>
    
        </nav>
    
    
        <div class=\" \">
          <nav class=\" nav z-10 fixed bottom-0 top-0 inset-x-0 bg-white md:flex flex-col w-3/6 border-r overflow-y-auto transform -translate-x-full  lg:-translate-x-full transition duration-300 ease-in-out\">
            <div class=\"flex justify-between m-4 font-bold\">
            <div class=\" font-logo  font-semibold text-3xl text-pink-500\">
            Foodie
          </div>
              <div>
                <button id=\"nav_close\">
                  <svg class=\"h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                  </svg>
                </button>
              </div>
            </div>
            <ul class=\"flex flex-col justify-center justify-items-stretch mx-5\">
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$home_link\">Home</a>
              </li>
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$food_link\">Find Food</a>
              </li>
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$become_parner_link\">Become a Partner</a>
              </li>
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$about_us_link\">About Us</a>
              </li>
              <li class=\"p-3 text-gray-400 hover:bg-blue-50 rounded-xl cursor-pointer mb-1 hover:text-blue-600  font-semibold text-md\">
                <a href=\"$contact_us_link\">Contact US</a>
              </li>
    
    
    
            </ul>
    
    
            <div class=\"my-auto mx-5 text-center\">
    
              <div class=\"mt-4\" id=\"sign_mobile\">
                <button class=\"p-3 bg-gray-100 min-w-full rounded-xl font-semibold hover:bg-gray-200\">
                  Sign in
                </button>
                <button class=\"p-3 bg-blue-500 min-w-full rounded-xl font-semibold hover:bg-blue-600 my-2 text-white\">
                  Register
                </button>
              </div>
              <p class=\"my-4 text-xs text-center text-gray-400\" id=\"reg_mobile\">
                <span>Copyright © 2021</span>
              </p>
            </div>
          </nav>
    
        </div>
   ";
}
