function lc_stor_show(){
    document.getElementById('res').innerHTML = localStorage.getItem("videocassette");

    document.getElementById('res1').innerHTML = localStorage.getItem("actor");

    document.getElementById('res2').innerHTML = localStorage.getItem("release_curr_year");
}

