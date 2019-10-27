$(function () {        

 var bouton = document.getElementById('mood');
            var text = document.getElementById('texte');
            var img = document.getElementById('img');
            var lien = document.getElementById('lien');
            lien.style.display = "none";
        $("#mood").click(function(){
           
            if (text.innerHTML === "Aujourd'hui vous êtes content!") {
             bouton.textContent = "Mais si je suis content!";
                $("#img").attr('src', assetsBaseDir + 'img/sad2.png');
                text.textContent = "Aujourd'hui vous n'êtes pas content...";
                lien.style.display = "";
            }
            else{
                text.textContent = "Aujourd'hui vous êtes content!";
                bouton.textContent = "Non, pas content !";
                $("#img").attr('src',assetsBaseDir + 'img/content.png');
                lien.style.display = "none";

            }
        })
});