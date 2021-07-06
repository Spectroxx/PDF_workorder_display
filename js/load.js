window.onload = function() { loadevent() 
};
function loadevent() {
    var validIndex = 1;
    //Replace 20 with a file count limit to prevent hang
    for (let i = 2; i < 4; i++) { 
        var output = loadFile("files/" + i + ".pdf");
        if (output == null) {
            break;
        }
        validIndex = i;
    }
    //update the embed
    document.getElementById('embed1').src = "files/" + validIndex + ".pdf";
}
-
function loadFile(filePath) {
    var result = null;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", filePath, false);
    xmlhttp.send();
    if (xmlhttp.status == 200) {
        result = xmlhttp.responseText;
    }
    return result;
}