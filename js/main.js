window.onload = getObjects;

function getObjects() {
    var getit = new XMLHttpRequest;
    getit.onload = function() {
        if (getit.status === 200) {
            writeObject(JSON.parse(getit.responseText))
        }
    };
    getit.open("GET", "jfile.php", true);
    getit.send(null)
}

function writeObject(getit) {
    var rest1 = document.getElementById("webbservice");
    rest1.innerHTML = "<h3> TRE SENASTE INLÄGGEN: </h3>";
    for (var x = 0; x < 3; x++) {
        var post = getit[x].post;
        var username = getit[x].username;
        var date = getit[x].postdate;

        rest1.innerHTML += "<p>" + post + "<br/><br/>Skriven av: " + username + "<br/> " + date + "</p>";
    }

}