window.onload = function () {
    let mobile_menu_icon = document.getElementById("mobile_menu_icon");
    mobile_menu_icon.addEventListener("click", toggleDisplay);

    function toggleDisplay() {
        let mobile_menu = document.getElementById("mobile_menu");
        if (mobile_menu.style.display === "none") {
            mobile_menu.style.display = "block";
        } else {
            mobile_menu.style.display = "none";
        }
    }
};
