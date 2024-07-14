document.addEventListener("DOMContentLoaded", () => {
    const links = document.querySelectorAll(".navbar-nav .nav-link");
    links.forEach((link) => {
        link.addEventListener("click", function () {
            links.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        });

        if (link.href === window.location.href) {
            link.classList.add("active");
        }
    });
});
