function toggleDisplay(id) {
    var elem = document.getElementById(id);
    var style = elem.style.display;
    if(style == 'block') {
        elem.style.display = 'none';
    } else {
        elem.style.display = 'block';
    }
}
