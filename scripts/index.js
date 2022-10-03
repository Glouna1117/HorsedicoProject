function dropdownNav() {
    if (open !== 1) {
        document.querySelectorAll(".navmenu li").forEach(li=>li.style.display  = "initial");
        open = 1;
    } else if (open === 1) {
        document.querySelectorAll(".navmenu li").forEach(li=>li.style.display = null);
        open = 0;
    }
}
function Race() {
    document.getElementById("Race").innerHTML += "<div>\n" +
        "        <div class=\"profilcheval\">\n" +
        "            <img src=\"images/images.jpg\" class=\"illustration2\" style=\"max-width:100%;height:auto ;\">\n" +
        "            <h3 class=\"nom1\">Test</h3>\n" +
        "        </div>\n" +
        "    </div>"
}