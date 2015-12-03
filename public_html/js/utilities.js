function getRealheight(id){
    var height=0;
    var oDiv = document.getElementById(id);
    var sOriginalOverflow = oDiv.style.overflow;
    var sOriginalHeight = oDiv.style.height;
    oDiv.style.overflow = "";
    oDiv.style.height = "";
    height = oDiv.offsetHeight;
    oDiv.style.height = sOriginalHeight;
    oDiv.style.overflow = sOriginalOverflow;
    return height;
}
