document.querySelector(".modal-menu").addEventListener("click", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    menuToggle.classList.toggle("on");
    const modalMenu = document.querySelector(".modal");
    modalMenu.classList.toggle("on");

    document.querySelector(".modal-menu").classList.toggle("on");
})