<?php

function footer($home_link, $food_link, $become_parner_link, $about_us_link, $contact_us_link) {

    echo "
    
    <div class=\"w-full  h-3/4  flex items-center justify-center bg-black\">
    <div class=\"md:w-10/12 w-full px-4 text-white flex flex-col\">
      <div class=\"w-full text-7xl font-bold\">
        <h1 class=\"w-full md:w-2/3\">How can we help you. get
          in touch</h1>
      </div>
      <div class=\"flex mt-8 flex-col md:flex-row md:justify-between\">
        <p class=\"w-full md:w-2/3 text-gray-400\">To ensure that all Wikipedia content is verifiable, anyone may question an uncited claim. If your work has been tagged</p>
        <div class=\"w-44 pt-6 md:pt-0\">
          <a href=\"$contact_us_link\" class=\"bg-red-500 justify-center text-center rounded-lg shadow px-10 py-3 flex items-center\">Contact US</a>
        </div>
      </div>
      <div class=\"flex flex-col\">
        <div class=\"flex mt-24 mb-12 flex-row justify-between\">
          <div class=\"logo \">
            Foodie
          </div>
          <a href=\"$home_link\" class=\"hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase\">home</a>

          <a href=\"$about_us_link\" class=\"hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase\">About Us</a>
          <a href=\"$food_link\" class=\"hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase\">Find foods</a>
          <a href=\",$become_parner_link\" class=\"hidden md:block cursor-pointer text-gray-600 hover:text-white uppercase\">Become a partner</a>

          <div class=\"flex flex-row space-x-8 items-center justify-between\">
            <a href=\"https://github.com/ARMkiyas\" target=\"_blank\">
              <svg width=\"16px\" height=\"16px\" viewBox=\"0 0 16 16\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" class=\"bi bi-github\">
                <path d=\"M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z\" />
              </svg>

            </a>
            <a href=\"https://www.facebook.com/armkiyas99\" target=\"_blank\">
              <svg width=\"6\" height=\"12\" viewBox=\"0 0 6 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M3.89782 12V6.53514H5.67481L5.93895 4.39547H3.89782V3.03259C3.89782 2.41516 4.06363 1.99243 4.91774 1.99243H6V0.0847928C5.47342 0.0262443 4.94412 -0.00202566 4.41453 0.000112795C2.84383 0.000112795 1.76542 0.994936 1.76542 2.82122V4.39147H0V6.53114H1.76928V12H3.89782Z\" fill=\"white\" />
              </svg>
            </a>
            <a href=\"https://lk.linkedin.com/in/armkiyas?trk=public-profile-badge-profile-badge-view-profile-cta\" target=\"_blank\">
              <svg version=\"1.1\" id=\"Layer_1\" class=\"w-3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 382 382\" style=\"enable-background:new 0 0 382 382;\" xml:space=\"preserve\">
                <path style=\"fill:#0077B7;\" d=\"M347.445,0H34.555C15.471,0,0,15.471,0,34.555v312.889C0,366.529,15.471,382,34.555,382h312.889
                    C366.529,382,382,366.529,382,347.444V34.555C382,15.471,366.529,0,347.445,0z M118.207,329.844c0,5.554-4.502,10.056-10.056,10.056
                    H65.345c-5.554,0-10.056-4.502-10.056-10.056V150.403c0-5.554,4.502-10.056,10.056-10.056h42.806
                    c5.554,0,10.056,4.502,10.056,10.056V329.844z M86.748,123.432c-22.459,0-40.666-18.207-40.666-40.666S64.289,42.1,86.748,42.1
                    s40.666,18.207,40.666,40.666S109.208,123.432,86.748,123.432z M341.91,330.654c0,5.106-4.14,9.246-9.246,9.246H286.73
                    c-5.106,0-9.246-4.14-9.246-9.246v-84.168c0-12.556,3.683-55.021-32.813-55.021c-28.309,0-34.051,29.066-35.204,42.11v97.079
                    c0,5.106-4.139,9.246-9.246,9.246h-44.426c-5.106,0-9.246-4.14-9.246-9.246V149.593c0-5.106,4.14-9.246,9.246-9.246h44.426
                    c5.106,0,9.246,4.14,9.246,9.246v15.655c10.497-15.753,26.097-27.912,59.312-27.912c73.552,0,73.131,68.716,73.131,106.472
                    L341.91,330.654L341.91,330.654z\" />
              </svg>
            </a>
            <a href=\"https://youtu.be/DTGrHHdFgVk\" target=\"_blank\">
              <svg width=\"13\" height=\"9\" viewBox=\"0 0 13 9\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M12.7355 1.415C12.6616 1.14357 12.517 0.896024 12.3162 0.697014C12.1154 0.498004 11.8654 0.354468 11.5911 0.280692C10.5739 0.00450089 6.5045 4.87928e-06 6.5045 4.87928e-06C6.5045 4.87928e-06 2.43578 -0.00449139 1.41795 0.259496C1.14379 0.336667 0.894302 0.482233 0.693428 0.68222C0.492554 0.882207 0.347041 1.1299 0.270859 1.40152C0.00259923 2.40737 9.51671e-07 4.49358 9.51671e-07 4.49358C9.51671e-07 4.49358 -0.0025972 6.59006 0.263714 7.58564C0.413109 8.13609 0.851549 8.57094 1.40885 8.71931C2.43643 8.9955 6.49476 9 6.49476 9C6.49476 9 10.5641 9.00449 11.5813 8.74115C11.8557 8.6675 12.106 8.52429 12.3073 8.32569C12.5086 8.12709 12.6539 7.87996 12.729 7.60876C12.998 6.60355 12.9999 4.51798 12.9999 4.51798C12.9999 4.51798 13.0129 2.42086 12.7355 1.415ZM5.20282 6.42628L5.20607 2.57244L8.58823 4.50257L5.20282 6.42628Z\" fill=\"white\" />
              </svg>
            </a>
          </div>
        </div>
        <hr class=\"border-gray-600\" />
        <p class=\"w-full text-center my-12 text-gray-600\">Copyright © 2021 <a href=\"https://lk.linkedin.com/in/armkiyas?trk=public-profile-badge-profile-badge-view-profile-cta\" class=\"hover:text-gray-500\" target=\"_blank\">A.R.M.Kiyas</a></p>
      </div>
    </div>
  </div>
    
    
    ";



}











?>