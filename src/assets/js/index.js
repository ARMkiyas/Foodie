
$(document).ready(() => {


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

    const opening_event=(model,model_body)=>{
        $(document)[0].body.classList.toggle("overflow-y-hidden");
        model.classList.toggle("hidden");
        model.classList.toggle("flex");
        setTimeout(() => {
            model.classList.toggle("opacity-100");
            model_body.classList.toggle("opacity-100");
            model_body.classList.toggle("scale-100");
        }, 1);
    }

    const closing_event=(model,model_body)=>{
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

       
        closing_event( document.getElementsByClassName("model")[0],document.getElementsByClassName("model-body")[0]);
    })


    const log_fun = () => {
       opening_event( document.getElementsByClassName("model")[0],document.getElementsByClassName("model-body")[0]);
    }


    document.getElementById("sign_btn").addEventListener('click', log_fun);
    document.getElementById("sign_mobile").addEventListener('click', log_fun);


    $("#reg_btn").click(()=>{
        opening_event( document.getElementsByClassName("model")[1],$(".model-body-reg")[0]);
     
  
    });
    $("#model_btn_reg").click(()=>{

        closing_event(  document.getElementsByClassName("model")[1],$(".model-body-reg")[0]);
    })
    
    $("#go_to_login").click(()=>{

        closing_event(  document.getElementsByClassName("model")[1],$(".model-body-reg")[0]);
        opening_event( document.getElementsByClassName("model")[0],document.getElementsByClassName("model-body")[0]);
    })
    $("#goto_reg").click(()=>{
        closing_event( document.getElementsByClassName("model")[0],document.getElementsByClassName("model-body")[0]);
        opening_event( document.getElementsByClassName("model")[1],$(".model-body-reg")[0]);
    })


    const url = 'https://restcountries.com/v3.1/all?fields=name';

    jQuery.ajax({
        url: url,
        type:"GET",
        success:(result)=>{
            for(let i=0;i<result.length;i++){
           
                $(".custom-select").append("<option value=\"" + result[i].name.common + "\">" + result[i].name.common + "</option>");
            }
        }
    })

    

});