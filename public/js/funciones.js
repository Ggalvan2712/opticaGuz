async function detectDisplay(){
       try{

            var displayWidth = window.screen.width;
            var result = changeMenu(displayWidth);

       }
       catch (err){
        console.log("No se ejecuto");
       }

       return result;

    }



    async  function changeMenu(displayWidt) {

    largoarray = document.querySelectorAll(".letsprubs").length;
        if (displayWidt < 769) {
            for(var i=0; i< largoarray ; i++){
            document.getElementsByClassName('letsprubs')[i].style.display = "none";
            document.getElementsByClassName('letsprub')[i].style.display = "";
            }


            document.getElementById("menu1").style.display = "none";
            document.getElementById("menu2").style.display = "";

            document.getElementById("navbar1").style.display = "none";



            document.getElementById("filterCard").style.display = "none";
            document.getElementById("filterCard1").style.display = "";
         } else if (displayWidt > 768) {
            for(var i=0; i< largoarray ; i++){
            document.getElementsByClassName('letsprubs')[i].style.display = "";
            document.getElementsByClassName('letsprub')[i].style.display = "none";
            }

            document.getElementById("menu1").style.display = "";
            document.getElementById("menu2").style.display = "none";

            document.getElementById("navbar1").style.display = "";



            document.getElementById("filterCard").style.display = "";
            document.getElementById("filterCard1").style.display = "none";
        }
    }


var editor = new Editor();
editor.render();


