

function ajax(place, lat, lng, utc_offset_minutes) {


    const xhttp = new XMLHttpRequest();


    xhttp.open("POST", "store.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(`place=${place}&lat=${lat}&lng=${lng}&utc_offset_minutes=${utc_offset_minutes}`);


    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;

            console.log('res', this.responseText)
       }
    };

    
}