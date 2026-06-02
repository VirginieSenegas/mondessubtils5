/* MENU */

const burger = document.getElementById("burger");
const menu = document.getElementById("menu");

if(burger && menu){

  burger.addEventListener("click", () => {

    burger.classList.toggle("active");
    menu.classList.toggle("open");

  });

}

/* CONTACT */

const contactTrigger =
document.getElementById("contactTrigger");

const contactPanel =
document.getElementById("contactPanel");

if(contactTrigger && contactPanel){

  contactTrigger.addEventListener("click", () => {

    contactPanel.classList.toggle("open");

  });

  document.addEventListener("click", (e) => {

    if(!e.target.closest(".contact-floating")){

      contactPanel.classList.remove("open");

    }

  });

}
