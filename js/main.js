function hideRateMenu() {
    let elementMenu = document.getElementById("menu-expand");
    let iconShowHide = document.getElementById("iconExpandMenu");
    let status = toggleClassName(elementMenu, "show-menu");
    if (!status) {
        iconShowHide.classList.remove("fa-chevron-down");
        iconShowHide.classList.add("fa-chevron-up");
        return
    }
    iconShowHide.classList.remove("fa-chevron-up");
    iconShowHide.classList.add("fa-chevron-down");
}

function selectorRateNumber(element) {
    unselectAllRateNumber(element);
    toggleClassName(element, "selected-number");

}

function unselectAllRateNumber(childElement) {
    let parent = childElement.parentElement;
    for (let i = 0; i < parent.children.length; i++) {
        let child = parent.children[i];
        removeClassName(child, "selected-number");
    }
}

function removeClassName(element, className) {
    element.classList.remove(className);
}

function toggleClassName(element, className) {
    if (element.classList.contains(className)) {
        element.classList.remove(className);
        return false;
    }
    element.classList.add(className);
    return true;
}