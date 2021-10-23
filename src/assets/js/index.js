document.addEventListener("DOMContentLoaded", () => {


    // mobile version nav buttion funtions
    const nav_toggle = () => {
        let nav = document.getElementsByClassName("nav")[0];

        nav.classList.toggle("-translate-x-full");
    }

    document.getElementById("nav_btn").addEventListener("click", () => {

        nav_toggle();

    })

    document.getElementById("nav_close").addEventListener("click", () => {
        nav_toggle();
    })

    // model funtion


    const model = document.getElementsByClassName("model")[0];
    const model_body = document.getElementsByClassName("model-body")[0];
    document.getElementById("model_btn").addEventListener('click', () => {

        model.classList.toggle("opacity-100");
        model_body.classList.toggle("opacity-100");
        model_body.classList.toggle("scale-100");

        setTimeout(() => {
            model.classList.toggle("flex");
            model.classList.toggle("hidden");
        }, 500);

    })


    const log_fun = () => {
        model.classList.toggle("hidden");
        model.classList.toggle("flex");
        setTimeout(() => {
            model.classList.toggle("opacity-100");
            model_body.classList.toggle("opacity-100");
            model_body.classList.toggle("scale-100");
        }, 1);
    }


    document.getElementById("sign_btn").addEventListener('click', log_fun);
    document.getElementById("sign_mobile").addEventListener('click', log_fun);







})