function dropdownNav() {
    if (open !== 1) {
        document.querySelectorAll(".navmenu li").forEach(li=>li.style.display  = "initial");
        open = 1;
    } else if (open === 1) {
        document.querySelectorAll(".navmenu li").forEach(li=>li.style.display = null);
        open = 0;
    }
}
