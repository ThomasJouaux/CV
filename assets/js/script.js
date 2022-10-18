function move() {
    let barre = document.getElementById("progressBar");
    let valueDepart = 0;
    let deplacement = setInterval(frame, 500);

    function frame() {
        if (valueDepart >= 25) {
            clearInterval(deplacement);
        } else {
            barre.style.width = (valueDepart + 5) + "%";
            barre.innerHtml = (valueDepart + 5) + "%";       // Deplacement de 5%
            valueDepart = (valueDepart + 5);
        }
    }
}

function move1() {
    let barreSql = document.getElementById("progressBarSql");
    let valueDepart = 0;
    let deplacement = setInterval(frame, 500);

    function frame() {
        if (valueDepart >= 35) {
            clearInterval(deplacement);
        } else {
            barreSql.style.width = (valueDepart + 5) + "%";
            barreSql.innerHtml = (valueDepart + 5) + "%";       // Deplacement de 5%
            valueDepart = (valueDepart + 5);
        }
    }
}
function move2() {
    let barreSymfony = document.getElementById("progressBarSymfony");
    let valueDepart = 0;
    let deplacement = setInterval(frame, 500);

    function frame() {
        if (valueDepart >= 25) {
            clearInterval(deplacement);
        } else {
            barreSymfony.style.width = (valueDepart + 5) + "%";
            barreSymfony.innerHtml = (valueDepart + 5) + "%";       // Deplacement de 5%
            valueDepart = (valueDepart + 5);
        }
    }
}
function move3() {
    let barreReact = document.getElementById("progressBarReact");
    let valueDepart = 0;
    let deplacement = setInterval(frame, 500);

    function frame() {
        if (valueDepart >= 5) {
            clearInterval(deplacement);
        } else {
            barreReact.style.width = (valueDepart + 5) + "%";
            barreReact.innerHtml = (valueDepart + 5) + "%";       // Deplacement de 5%
            valueDepart = (valueDepart + 5);
        }
    }
}
function move4() {
    let barreCss = document.getElementById("progressBarCss");
    let valueDepart = 0;
    let deplacement = setInterval(frame, 500);

    function frame() {
        if (valueDepart >= 30) {
            clearInterval(deplacement);
        } else {
            barreCss.style.width = (valueDepart + 5) + "%";
            barreCss.innerHtml = (valueDepart + 5) + "%";       // Deplacement de 5%
            valueDepart = (valueDepart + 5);
        }
    }
}