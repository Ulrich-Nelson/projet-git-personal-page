$(document).ready(function () {
    //afficher l'heure
    function showTime() {
        var date = new Date();
        var heure = date.getHours();
        var min = date.getMinutes();
        var sec = date.getSeconds();
        
        var session = "AM";

        if (heure > 12) {
            session = "PM";
        }
   
        heure = (heure < 10) ? "0" + heure : heure;
        min = (min < 10) ? "0" + min : min;
        sec = (sec < 10) ? "0" + sec : sec;
        var time = heure + " : " + min + " : " + sec + " " + session;

        document.getElementById('MyClok').innerText = time;
        document.getElementById('MyClok').textContent = time;
        setTimeout(showTime, 1000);
    }
    showTime();

    //pour l'année
    function year() {
        var date = new Date;
        var annee =date.getFullYear();
        document.getElementById('annee').innerText = annee;
        document.getElementById('annee').textContent = annee;
        setTimeout(year, 1000);     
    }
    year();

    function clickbuttom() {
        // rendre les liens actifs dans la topbar
        $(document).on("click", "ul li ", function () {
            $(this).addClass("active");
        })    
    }
    clickbuttom();

});
   


