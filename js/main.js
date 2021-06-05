function hideRateMenu() {
    let elementMenu = document.getElementById("menu-expand");
    let iconShowHide = document.getElementById("iconExpandMenu");
    if (elementMenu.classList.contains("hide-menu")) {
        elementMenu.classList.remove("hide-menu");
        iconShowHide.classList.remove("fa-chevron-up");
        iconShowHide.classList.add("fa-chevron-down");
        return
    }
    elementMenu.classList.add("hide-menu");
    iconShowHide.classList.remove("fa-chevron-down");
    iconShowHide.classList.add("fa-chevron-up");
}