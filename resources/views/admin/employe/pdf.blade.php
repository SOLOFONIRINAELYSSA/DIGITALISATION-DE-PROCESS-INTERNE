<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte de Badge</title>


    <style>
        .container {
            background-image: url("assets/images/bg.png");
            display: flex;
            align-items: center;
            justify-content: space-between;
        }


        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .sectBadje {
            position: absolute;
            min-height: 70vh;
            width: 100%;
            left: 1rem;
            top: 0;
            margin-top: 5rem;
            display: grid;
            align-items: center;
            color: #fff;
            perspective: 1000px;
            gap: 14rem;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #e3f2fd;
        }

        .container-badje {
            background-size: cover;
            position: relative;
            border-radius: 28px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            height: 234px; /* Hauteur légèrement réduite */
        }

        header, .logo-badje {u
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo-badje .img-badje {
            width: 120px; /* Taille ajustée de la puce */
            height: 120px; /* Taille ajustée de la puce */
            object-fit: cover; /* Assure que l'image garde les proportions sans être déformée */
            margin-top: 0.3rem
        }

      

        .container-badje .profil-personne .img-profil
        {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .container-badje .profil-personne .img-profil .img-badje {
            width: 130px; /* Taille légèrement réduite */
            height: 130px;
            border-radius: 15%;
            object-fit: cover; /* Maintient les proportions des images */
            margin-top: 1.5rem;
            margin-left: 1.5rem;
        }

        .container-badje .profil-personne  .info-profil .profil
        {
            margin-left: 10rem;
            margin-top: -8rem;
        }

        .profil h5
        {
            font-weight: 900;
            font-size: 90%;
            color: whitesmoke;
        }

        .profil
        {
            height: 5rem;
            width: 10rem;
            border: solid 1px black;
        }

         .container .container-badje .card-details .place
        {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .place
        {
            width: 20.8rem;
            height: 2rem;
            border: solid 1px whitesmoke;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.2rem;
        }

        .tel
        {
            font-size: 25px;
            font-weight: 400;
            color: whitesmoke;
        }
    
         .container-badje .card-details .place
        {
            margin-top: 1.2rem;
            margin-left: 1.8rem;
        }

        .container-badje .header-badge .logo-badje .h5
        {
            margin-top: -5rem;
            margin-left: 6.8rem;
        }

        /******************************************************************************/
        

/* Détails à l'intérieur du badge */
.container-badje .card-details1 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; /* Adapte à la taille du badge */
    padding: 1rem;
    border: 1px solid whitesmoke; /* Bordure retirée (utiliser pour debug si nécessaire) */
    box-sizing: border-box;
}

/* Positionnement du numéro et du nom en bas à gauche */
.container-badje .card-details1 .name-number {
    position: absolute;
    bottom: 3.5rem; /* Ajusté pour être près du bas */
    left: 2rem; /* Ajusté pour être près de la gauche */
    color: white;
    font-size: 0.9rem; /* Ajustez selon vos besoins */
    /* border: 1px solid orangered; */
    padding: 0.2rem;
}

/* Positionnement de la validation en bas à droite */
.container-badje .card-details1 .validation {
    position: absolute;
    bottom: 3.5rem; /* Même alignement en bas */
    right: 4rem; /* Aligné à droite */
    color: white;
    font-size: 0.9rem; /* Ajustez selon vos besoins */
    /* border: 1px solid green;  */
    padding: 0.2rem;
    text-align: right;
}



        /****************************************************************/
        .container-badje .header-badge
        {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .container-badje .header-badge .img1 .img11
        {
            width: 80px; /* Taille légèrement réduite */
            height: 80px;
            object-fit: cover; /* Maintient les proportions des images */
            margin-bottom: 27.5rem;
            margin-left: 19rem;
            border-radius: 50%;
        }
     
     
    </style>
</head>
<body>
    <section class="sectBadje">
        <!-- Première carte -->
        <div class="container container-badje">
            <header class="header-badge">
                <span class="logo logo-badje">
                    <img class="img-badje" src="assets/images/logo1.png" alt="">
                    <h5 class="h5">REGION ANOSY</h5>
                </span>
                <span class="img1">
                    <img class="img11" src="assets/images/Email.png" alt=""> 
                </span>
            </header>

            <div class="card-details1">
                     <div class="name-number">
                        <strong class="name">WILSON Frederique</strong><br>
                        <strong class="number">CIN: 4141 2520 2584 8565</strong>
                    </div>

                    <div class="validation">
                        <strong>Validation date</strong><br>
                        <strong>10/10/2024</strong>
                    </div>
                
            </div>
        </div>
    

        <!-- Deuxième carte -->
        <div class="container container-badje">
            <header class="profil-personne">
                <span class="img-profil">
                    <img class="img-badje" src="assets/images/chip.png" alt="">
                </span>
                <span class="info-profil">
                   <div class="profil">
                    <strong>NUMERO CIN</strong> <br>
                    <strong>NOM</strong><br>
                    <strong>PRENOM</strong><br>
                    <strong>POSTE</strong>
                   </div>
                </span>
            </header>

            <div class="card-details">
                <div class="place">
                    <div class="tel">Téléphone : 033 00 000 00</div>
                    <!-- <div class="txt">Faritra anôsy miasa ho anao</div> -->
                </div>
            </div>
        </div>
    </section>
</body>
</html>
