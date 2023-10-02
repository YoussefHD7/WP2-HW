/*  open and close nav menu 
const navOpen = document.querySelector(".nav_hamburger");
const navClose = document.querySelector(".close_toggle");
const menu = document.querySelector(".nav_menu");
const navContainer = document.querySelector(".nav_menu");

navOpen.addEventListener("click", () => {
    menu.classList.add("open");
    document.body.classList.add("active");
    navContainer.style.left = "0";
    navContainer.style.width = "30rem";
})

navClose.addEventListener("click", () => {
    menu.classList.remove("open");
    document.body.classList.remove("active");
    navContainer.style.left = "-30rem";
    navContainer.style.width = "0";
})
*/

/* Show select List products
const mobileList = document.querySelector(".mobile");
const labtopList = document.querySelector(".labtop");
const tabList = document.querySelector(".tab");

labtopList.style.display="none";
tabList.style.display="none";
function changeProducts(product) {
    var optionValue = product.value;
    if(optionValue =="mobile"){
        mobileList.style.display="flex";
        labtopList.style.display="none";
        tabList.style.display="none";
    }   
    else if(optionValue =="labtop"){
        labtopList.style.display="flex";
        mobileList.style.display="none";
        tabList.style.display="none";
    }
    else if(optionValue =="tab"){
        tabList.style.display="flex";
        labtopList.style.display="none";
        mobileList.style.display="none";
    }
  };
 */