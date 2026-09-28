document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".menu-toggle");
    const navbar = document.querySelector(".navbar");

    if (!toggle || !navbar) return;

    toggle.addEventListener("click", () => {
        const abierto = navbar.classList.toggle("navbar-abierto");
        toggle.setAttribute("aria-expanded", abierto ? "true" : "false");
    });
});