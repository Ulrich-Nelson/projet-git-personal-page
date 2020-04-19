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

    // pour rendre les liens actifs
    function ONCLICK() {
        const currentLocalisation = location.href;
        const menuItem = document.querySelectorAll("a");
        const menuLength = menuItem.length;
        for (let i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocalisation) {
                menuItem[i].className = "active";
            }
        }    
    }
    ONCLICK();

    
});



