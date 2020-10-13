document.addEventListener("DOMContentLoaded", function(event) {

    //Un commentaire
    console.log("Ça fonctionne!!!");



        document.querySelector("#menu").addEventListener("click", function (e) {


            console.log("ouvert");

            document.querySelector(".sousmenu").classList.add("open")
            document.querySelector(".sousmenu").classList.remove("close")


        }),



            document.querySelector("#fermer").addEventListener("click", function (e) {


                document.querySelector(".sousmenu").classList.add("close")
                document.querySelector(".sousmenu").classList.remove("open")


            })



});