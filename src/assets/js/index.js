$(document).ready(() => {

    // starting animation
    setTimeout(() => {

        $(".start")[0].classList.remove("-translate-x-full");
        $(".start")[0].classList.add("translate-x-0");
        $(".start")[1].classList.remove("translate-x-full");
        $(".start")[1].classList.add("translate-x-0");
    }, 1)



    $(document).scroll(() => {
        let h = window.innerHeight;
        let sc_h = window.scrollY;
        let revel_ponit = 90;


        for (let i = 0; i < 4; i++) {
            let c = $(".revel")[i].getBoundingClientRect();

            if (c.top < h - revel_ponit) {

                $(".revel")[i].classList.remove("translate-y-96")
                $(".revel")[i].classList.remove("opacity-0")
            }
        }





        //  if(sc_h>h/2 && a==0){
        //     a=sc_h;    
        //     $(".second")[0].classList.toggle("translate-y-96")
        //     $(".second")[0].classList.toggle("opacity-0")

        //  }

        //  if(sc_h>h+80 && b==0){
        //     b=1;
        //     $(".third")[0].classList.toggle("translate-y-96")
        //     $(".third")[0].classList.toggle("opacity-0")
        //  }



    })



    // mobile version nav buttion funtions
    const nav_toggle = () => {
        let nav = document.getElementsByClassName("nav")[0];
        $(document)[0].body.classList.toggle("overflow-y-hidden");
        nav.classList.toggle("-translate-x-full");
    }

    document.getElementById("nav_btn").addEventListener("click", () => {

        nav_toggle();

    })

    document.getElementById("nav_close").addEventListener("click", () => {
        nav_toggle();
    })

    // model funtion

    const opening_event = (model, model_body) => {
        $(document)[0].body.classList.toggle("overflow-y-hidden");
        model.classList.toggle("hidden");
        model.classList.toggle("flex");
        setTimeout(() => {
            model.classList.toggle("opacity-100");
            model_body.classList.toggle("opacity-100");
            model_body.classList.toggle("scale-100");
        }, 1);
    }

    const closing_event = (model, model_body) => {
        $(document)[0].body.classList.toggle("overflow-y-hidden");
        model.classList.toggle("opacity-100");
        model_body.classList.toggle("opacity-100");
        model_body.classList.toggle("scale-100");

        setTimeout(() => {
            model.classList.toggle("flex");
            model.classList.toggle("hidden");
        }, 500);
    }

    document.getElementById("model_btn").addEventListener('click', () => {


        closing_event(document.getElementsByClassName("model")[0], document.getElementsByClassName("model-body")[0]);
    })


    const log_fun = () => {
        opening_event(document.getElementsByClassName("model")[0], document.getElementsByClassName("model-body")[0]);
    }


    document.getElementById("sign_btn").addEventListener('click', log_fun);
    document.getElementById("sign_mobile").addEventListener('click', log_fun);


    $("#reg_btn").click(() => {
        opening_event(document.getElementsByClassName("model")[1], $(".model-body-reg")[0]);

    });


    $("#reg_mobile").click(() => {
        opening_event(document.getElementsByClassName("model")[1], $(".model-body-reg")[0]);

    });

    $("#reg_link").click(() => {
        opening_event(document.getElementsByClassName("model")[1], $(".model-body-reg")[0]);
    })




    $("#model_btn_reg").click(() => {

        closing_event(document.getElementsByClassName("model")[1], $(".model-body-reg")[0]);
    })



    $("#go_to_login").click(() => {

        closing_event(document.getElementsByClassName("model")[1], $(".model-body-reg")[0]);
        opening_event(document.getElementsByClassName("model")[0], document.getElementsByClassName("model-body")[0]);
    })
    $("#goto_reg").click(() => {
        closing_event(document.getElementsByClassName("model")[0], document.getElementsByClassName("model-body")[0]);
        opening_event(document.getElementsByClassName("model")[1], $(".model-body-reg")[0]);
    })


    const url = 'https://restcountries.com/v3.1/all?fields=name';

    jQuery.ajax({
        url: url,
        type: "GET",
        success: (result) => {
            for (let i = 0; i < result.length; i++) {

                $(".custom-select").append("<option value=\"" + result[i].name.common + "\">" + result[i].name.common + "</option>");
            }
        }
    })

    $("#plus").click(() => {
        $("#quan")[0].textContent = parseInt($("#quan")[0].textContent) + 1;
    })
    $("#minus").click(() => {
        if (parseInt($("#quan")[0].textContent) > 1) {
            $("#quan")[0].textContent = parseInt($("#quan")[0].textContent) - 1;
        }
    })




    $(".login").submit((e) => {
        e.preventDefault();
        closing_event(document.getElementsByClassName("model")[0], document.getElementsByClassName("model-body")[0]);
        opening_event($(".model")[2], $(".model-body")[1])

    })


    $(".cls").click(() => {

        closing_event($(".model")[2], $(".model-body")[1]);
    })
    $(".register").submit((e) => {
        e.preventDefault();
        closing_event($(".model")[1], $(".model-body-reg")[0]);
        opening_event($(".model")[2], $(".model-body")[1])

    })

    $(".mess").click((e) => {
        e.preventDefault();
        opening_event($(".model")[2], $(".model-body")[1])
    })













});