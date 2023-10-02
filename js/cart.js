/* open and close nav cart */
const cartIcon = document.querySelector(".cart-icon");
const navCart = document.querySelector(".nav_cart");
const navCartClose = document.querySelector(".nav_cart .close_toggle");

cartIcon.addEventListener("click", () => {
    navCart.classList.add("open");
    document.body.classList.add("active");
    navCart.style.right = "0";
    navCart.style.width = "auto";
})

navCartClose.addEventListener("click", () => {
    navCart.classList.remove("open");
    document.body.classList.remove("active");
    navCart.style.right = "-30rem";
    navCart.style.width = "0";
})
