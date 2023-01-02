const btnMenu = document.querySelector("#btnMenu");
const menu = document.querySelector("#nav-ul");
btnMenu.addEventListener("click", function() {
    menu.classList.toggle("mostrar");
});

const SubMenuBtn = document.querySelectorAll(".sub-menu");
for (let i = 0; i < SubMenuBtn.length; i++) {
    SubMenuBtn[i].addEventListener("click", function() {
        if (window.innerWidth < 1024) {
            const submenu = this.nextElementSibling;
            const height = submenu.scrollHeight;
            if (submenu.classList.contains("desplegar")) {
                submenu.classList.remove("desplegar");
                submenu.removeAttribute("style");
            } else {
                submenu.classList.add("desplegar");
                submenu.style.height = height + "px";
            }
        }
    })
}