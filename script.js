function search() {

    var s = document.getElementById("search").value;


    var form = new FormData();
    form.append("search", s);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;


            document.getElementById("result").innerHTML = text;
        }

    };

    r.open("POST", "proc.php", true);
    r.send(form);
}

function download() {
    var id = document.getElementById("vidid").value;




    var id = document.getElementById("vidid").value;


    var form = new FormData();
    form.append("id", id);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var text = r.responseText;


            document.getElementById("dl").innerHTML = text;
        }

    };

    r.open("POST", "download.php", true);
    r.send(form);
}