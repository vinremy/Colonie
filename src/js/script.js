document.addEventListener("DOMContentLoaded", function(event) {

    //Un commentaire
    console.log("Ça fonctionne!!!");



        document.querySelector("#menu").addEventListener("click", function (e) {


            console.log("ouvert");

            document.querySelector(".sousmenu").classList.add("open")
            document.querySelector(".sousmenu").classList.remove("close")

            document.querySelector("#fermer").classList.remove("fermer")
            document.querySelector("#fermer").classList.add("ouvert")

            document.querySelector("#menu").classList.remove("ouvert")
            document.querySelector("#menu").classList.add("fermer")


        }),



            document.querySelector("#fermer").addEventListener("click", function (e) {


                document.querySelector(".sousmenu").classList.add("close")
                document.querySelector(".sousmenu").classList.remove("open")

                document.querySelector("#menu").classList.remove("fermer")

                document.querySelector("#menu").classList.add("ouvert")


                document.querySelector("#fermer").classList.add("fermer")
                document.querySelector("#fermer").classList.remove("ouvert")



            })



});