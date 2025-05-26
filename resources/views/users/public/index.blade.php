<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS</title>

    <!-- -------------- Boxicon ---------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- -------------- Mon css ---------------- -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
            border: none;
            outline: none;
        }

        :root{
            --primary-color: #480ca8;
            --primary-color-variant: #4cc9f0;
            --primary-color-rgba: rgba(72, 12, 168, 0.8);
            --primary-color-variant-rgba: rgba(76, 201, 240, 0.8);
            --secondary-color: #f72585;
            --secondary-color-hover:rgb(240, 97, 161);
            --white-color: #ffffff;
            --light-color: rgba(var(--white-color), 0.7);
            --black-color: #0c031b;
            --dark-color: var(--black-color, 0.7);
            --success-color: #54eb72;
            --container-lg: 82%;
            --container-md: 90%;
        }

        html{
            scroll-behavior: smooth;
        }




        /* ======================= Géneral ======================= */
        body{
            font-family: 'Montserrat', sans-serif;
            line-height: 1.5;
            color: var(--white-color);
            /* background: rgba(var(--primary-color-variant), 0.1); */
            background: rgb(228, 235, 253);
            user-select: none;
        }

        .container{
            width: var(--container-lg);
            margin: 0 auto;
        }

        img{
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1,h2,h3,h4,h5{
            line-height: 1.2;
        }

        section {
            margin-top: 6rem;
        }

        section > h2 {
            text-align: center;
        }

        section > p {
            text-align: center;
            width: 45px;
            margin: 0.6rem auto 2.5rem;
        }




        /* ====================== ensemble de styles ========================= */
        .btn {
            display: inline-block;
            width: fit-content;
            padding: 0.75rem 1rem;
            border-radius: 0.4rem;
            color: var(--white-color);
            background: var(--secondary-color);
            cursor: pointer;
            transition: all 400ms ease;
        }

        .btn:hover {
            background: var(--secondary-color-hover);
            box-shadow: 0 1rem 1.6rem rgba(var(--black-color), 0.15);
        }

        .btn-top {
            display: inline-block;
            width: fit-content;
            padding: 0.75rem 1rem;
            border-radius: 0.4rem;
            color: var(--secondary-color);
            border: 2px solid var(--secondary-color);
            cursor: pointer;
            transition: all 400ms ease;
        }

        .btn-top:hover {
            background: var(--secondary-color);
            color: var(--white-color);
            box-shadow: 0 1rem 1.6rem rgba(var(--black-color), 0.15);
        }

        .btn-primary {
            display: inline-block;
            width: fit-content;
            padding: 0.75rem 1rem;
            border-radius: 0.4rem;
            color: var(--white-color);
            background: var(--primary-color);
            cursor: pointer;
            transition: all 400ms ease;
        }

        .grandientBackground{
            background: linear-gradient(135deg, var(--primary-color), var(--primary-color-variant));
            color: var(--white-color);
        }

        .grandientBackground h1,
        .grandientBackground h2,
        .grandientBackground h3,
        .grandientBackground h4,
        .grandientBackground h5 {
            color: var(--white-color);
        }

        /* ========================== Nav =========================== */
        .ensemble-logo-txt{
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.5rem;
        }

        .logo{
            width: 50px;
            height: 50px;
            object-fit: cover;
        }

        nav{
            width: 100vw;
            height: 5rem;
            position: fixed;
            z-index: 10;
            display: flex;
            place-items: center;
            /* box-shadow: 0 1rem 1rem rgba(var(--black-color), 0.1); */
            box-shadow: 0 0.02rem 0.02rem #7d74fcbe;

            .container{
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            ul{
                display: flex;
                gap: 2rem;
                align-items: center;
            }

            button{
                display: none;
            }

            a{
                color: var(--white-color);
                font-weight: 400;
                font-size: 0.9rem;
            }

            .nav__logo h3{
                color: var(--white-color);
            }
        }

        nav.window-scroll{
            background: rgb(228, 235, 253);
        }

        nav.window-scroll .container button{
            color: var(--black-color);
        }

        nav.window-scroll .container .color-nav{
            color: var(--black-color);
        }

        nav.window-scroll .container a > h3{
            color: var(--black-color);
        }





        /* =========================== Header ======================== */
        header {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-color-variant));
            height: 100vh;
            display: grid;
            place-items: center;
            overflow: hidden;
        }

        header .container {
            margin-top: 3rem;
            display: grid;
            grid-template-columns: 46% 46%;
            gap: 8%;
            align-items: center;
            justify-content: space-between;
        }

        header .container .header__content h1 {
            font-size: 3rem;
            letter-spacing: -3px;
            font-weight: 300;
        }

        header .container .header__content p{
            margin: 1rem 0 2rem;
            color: var(--light-color);
            font-size: 1.1rem;
        }






        /* ======================= Services ========================== */
        .en-tete-services{
            text-align: center;
            color: var(--black-color);
            font-weight: 400;
            display: block;
            margin-bottom: 2rem;
        }

        #services .container{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        #services article{
            /* background: linear-gradient(150deg, var(--primary-color), rgb(238, 203, 47)); */
            background: linear-gradient(135deg, var(--primary-color), var(--primary-color-variant));
            object-fit: cover;
            padding: 1.5rem;
            border-radius: 1rem;
            display: flex;
            gap: 1.5rem;
            height: fit-content;
            transition: all 400ms ease;
        }

        #services article:hover{
            margin-top: -0.5rem;
        }

        #services article i{
            font-size: 1.7rem;
        }

        #services article div h4{
            margin-bottom: 1rem;
        }






        /* ======================= Specialists ========================== */
        #specialists .container{
            width: 68%;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        #specialists article{
            /* background: var(--white-color); */
            border-radius: 1rem;
            box-shadow: 0 1.5rem 1.5rem rgba(var(--black-color), 0.1);
            position: relative;
            transition: all 700ms ease;
        }

        #specialists article:hover {
            box-shadow: none;
        }

        #specialists article:hover .specialist__image::before {
            left: 0;
            border-radius: 1rem;
        }

        #specialists article:hover .specialist__socials{
            opacity: 1;
            visibility: visible;
        }

        #specialists article:hover .specialist__whatsapp{
            opacity: 1;
            visibility: visible;
        }

        #specialists .specialist__image{
            height: 20rem;
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            object-fit: cover;
        }

        #specialists .specialist__image::before{
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: -100%;
            background: linear-gradient(135deg, var(--primary-color-rgba), var(--primary-color-variant-rgba));
            border-radius: 50%;
            transition: all 0.7s ease;
        }

        #specialists .specialist__details{
            margin: 1.5rem 0;
            text-align: center;
            color: #2c2c30;
            font-weight: 300;
        }

        #specialists .specialist__socials{
            position: absolute;
            right: 1.2rem;
            top: 1.2rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            opacity: 0;
            visibility: hidden;
            transition: all 1s 400ms ease;
        }

        #specialists .specialist__socials a{
            background: var(--white-color);
            color: var(--primary-color);
            padding: 0.4rem;
            display: flex;
            font-size: 0.9rem;
            border-radius: 50%;
            transition: all 400ms ease;
        }

        #specialists .specialist__socials a:hover{
            background: var(--primary-color);
            color: var(--white-color);
        }

        #specialists .specialist__whatsapp{
            background: var(--success-color);
            color: var(--white-color);
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 30%;
            padding: 1rem;
            border-radius: 50%;
            display: flex;
            opacity: 0;
            visibility: hidden;
            transition: all 1s 400ms ease;
        }




        /* ============================ Testimonials ================================== */
        .swiper{
            width: var(--container-lg);
        }

        .swiper .swiper-wrapper{
            margin-bottom: 4rem;
        }

        #testimonials .swiper-wrapper .swiper-slide{
            background: linear-gradient(135deg, var(--primary-color), var(--primary-color-variant));
            padding: 1.5rem 2rem;
            border-radius: 1rem;
            cursor: default;
            font-size: 0.9rem;
        }

        #testimonials .swiper-wrapper .swiper-slide p{
            margin-bottom: 1.5rem;
        }

        #testimonials .swiper-wrapper .swiper-slide .patient{
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        #testimonials .swiper-wrapper .swiper-slide .patient .avatar{
            width: 2.5rem;
            aspect-ratio: 1/1;
            border-radius: 50%;
            overflow: hidden;
        }

        .swiper .swiper-pagination-bullet{
            background: var(--primary-color);
        }



        /* ====================== Appointement ====================== */

        .date-prive-public{
            display: flex;
            align-items: center;
            gap: 2rem;
            font-size: 1rem;
            line-height: 2;
        }

        .color-lien{
            color: blue;
        }

        .dat{
            color: #3a196e;
        }

        .prv-pbl{
            color: rgb(151, 55, 43);
        }

        .btn-message-bottom{
            display: flex;
            padding: 0.3rem;
            text-align: center;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(25px);
            color: var(--white-color);
            border: none;
            background: rgba(15, 15, 128, 0.808);
            border-radius: 1rem;
            font-size: 1.5rem;
            margin: 3rem;
            margin-bottom: 2rem;
            box-shadow: 0 0 7px blue;
        }

        .btn-message-bottom:hover{
            background: rgba(30, 30, 158, 0.808);
            border: none;
            color: var(--white-color);
            box-shadow: 0 0 7px rgb(172, 172, 8);
        }

        .txt-appointement{
            color: var(--black-color);
        }

        #appointement .container{
            display: grid;
            grid-template-columns: 47% 47%;
            gap: 6rem;
        }

        #appointement .container .info p{
            margin: 0.5rem 0 2rem;
        }

        #appointement .container .info article{
            display: flex;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        #appointement .container .info article small{
            margin-top: 0.4rem;
            display: block;
        }

        #appointement .container .info article .info__icon{
            background: var(--secondary-color);
            color: var(--white-color);
            padding: 0.8rem;
            border-radius: 50%;
            display: flex;
            height: fit-content;
            font-size: 1.2rem;
        }

        #appointement form{
            display: flex;
            flex-direction: column;
            gap: 1.4rem;
        }

        #appointement form .form__group label{
            font-size: 0.85rem;
            margin-bottom: 0.4rem;
            display: inline-block;
            font-weight: 600;
        }

        #appointement form .form__group input, textarea, select{
            background: var(--white-color);
            padding: 0.85rem 1rem;
            display: block;
            width: 100%;
            border-radius: 0.4rem;
            resize: none;
            appearance: none;
        }





        /* ======================== Footer ======================== */
        footer{
            background: var(--black-color);
            color: var(--light-color);
            padding-top: 6rem;
            margin-top: 6rem;
        }

        footer .container{
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 5rem;
            font-size: 0.85rem;
        }

        footer a{
            color: var(--light-color);
            transition: all 400ms ease;
        }

        footer a:hover{
            color: var(--white-color);
        }

        footer article{
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        footer article > div {
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        footer article > h3{
            color: var(--white-color);
        }

        footer article .footer__socials{
            gap: 1rem;
            font-size: 1.1rem;
        }

        .copyright{
            text-align: center;
            padding: 1.5rem 0;
            margin-top: 4rem;
            border-top: 1px solid #ffffff71;
        }


        /* ====================== Media queries ====================== */
        @media screen and (max-width: 1024px) {
            .container{
                width: var(--container-md);
            }

            section > p {
                width: 55%;
            }



            /* *********************** Nav **************************** */
            nav.window-scroll .container a {
                color: var(--white-color);
            }

            nav .container button {
                display: inline-block;
                background: transparent;
                color: var(--white-color);
                font-size: 2rem;
                cursor: pointer;
            }

            nav .container button#close__nav-btn {
                display: none;
            }

            nav .container ul {
                position: fixed;
                right: 5%;
                top: 5rem;
                flex-direction: column;
                align-items: flex-start;
                gap: 0;
                display: none;
                perspective: 300px;
            }

            nav .container ul li{
                width: 100%;
                opacity: 0;
                animation: flipNavItem 300ms ease forwards;
                transform-origin: top;
            }

            nav .container ul li:nth-child(2){
                animation-delay: 200ms;
            }

            nav .container ul li:nth-child(3){
                animation-delay: 400ms;
            }


            nav .container ul li:nth-child(4){
                animation-delay: 600ms;
            }

            nav .container ul li:nth-child(5){
                animation-delay: 800ms;
            }

            nav .container ul li:nth-child(6){
                animation-delay: 1000ms;
            }

            nav .container ul li:nth-child(7){
                animation-delay: 1200ms;
            }

            @keyframes flipNavItem {
                0%{
                    transform: rotateX(90deg);
                }
                100%{
                    transform: rotateX(0deg);
                    opacity: 1;
                }
            }

            nav .container ul li a{
                color: var(--white-color);
                height: 100%;
                display: block;
                padding: 1.5rem 2rem;
                border-radius: 0;
                background: linear-gradient(var(--primary-color-variant), rgba(32, 176, 212, 0.849));
            }

            nav .container ul li a.btn{
                background: var(--secondary-color);
            }




            /* *********************** Header **************************** */
            header{
                height: 60vh;
            }

            header .container{
                gap: 1rem;
            }

            header .container .header__content h1{
                font-size: 2.2rem;
            }




            /* *********************** Services **************************** */
            #services .container{
                gap: 1rem;
                grid-template-columns: 1fr 1fr;
            }

            #services article{
                padding: 1.2rem;
                gap: 0.8rem;
            }

            #services article:hover{
                margin: 0;
            }



            /* *********************** Specialists ************************** */
            #specialists .container{
                grid-template-columns: 1fr 1fr;
            }




            /* *********************** Footer ************************** */
            footer .container{
                gap: 2.5rem;
            }
        }



        @media screen and (max-width: 600px) {
            section > p {
                width: var(--container-md);
            }

            /* *********************** Header **************************** */
            header{
                height: 100vh;
                padding-top: 3rem;
            }

            header .container{
                grid-template-columns: 1fr;
                text-align: center;
            }


            /* *********************** Services **************************** */
            #services .container{
                grid-template-columns: 1fr;
            }

            #services article div h4{
                margin-bottom: 0.8rem;
            }

            /* *********************** Specialists ************************** */
            #specialists .container{
                grid-template-columns: 1fr;
            }

            /* *********************** Testimonials ************************* */
            .swiper .swiper-wrapper .swiper-slide {
                padding: 1.5rem;
            }

            /* ====================== Appointement ====================== */
            #appointement .container{
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            #appointement .container .info h2, p{
                text-align: center;
            }

            .btn-message-bottom{
                display: none;
            }


            /* *********************** Footer ************************** */
            footer .container{
                grid-template-columns: 1fr;
                text-align: center;
            }

            footer .container .btn-primary, .footer__socials{
                margin: 0 auto;
            }

            footer .container article > div{
                justify-content: center;
            }



            /* *********************** Contact ************************** */
            #contact .container{
                grid-template-columns: 1fr;
            }
        }


        .footer-logo{
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .img-footer{
            width: 30px;
            height: 30px;
        }




        /* ================== Contact ======================= */
        #contact .container .place-en-tete-contact{
            width: 100%;
            height: fit-content;
            display: flex;
            align-items: center;
            color: var(--white-color);
            text-align: center;
            font-weight: 400;
            letter-spacing: 1px;
            justify-content: center;
            border-radius: 0.5rem;
            padding-top: 2rem;
            box-shadow: 0 0 15px var(--black-color);
        }

        .txt{
            display: grid;
            gap: 1rem;
        }

        .txt h2{
            font-size: 2.5rem;
        }

        .btn-choix-contacte{
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding-top: 2.4rem;
        }

        .border-btn-contacte{
            border: 2px solid var(--white-color);
            color: var(--white-color);
            backdrop-filter: blur(20px);
            padding: 0.5rem;
            border-radius: 0.5rem;
            transition: all 400ms ease;
        }

        .border-btn-contacte:hover{
            border: 2px solid rgb(26, 36, 119);
            background: rgb(26, 36, 119);
            color: var(--white-color);
            backdrop-filter: blur(20px);
            padding: 0.5rem;
            border-radius: 0.5rem;
        }

        #contact .container{
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 2rem;
        }

        #contact article{
            background: linear-gradient(150deg, var(--primary-color), rgb(238, 203, 47));
            /* background: linear-gradient(135deg, var(--primary-color), var(--primary-color-variant)); */
            padding: 1.5rem;
            border-radius: 1rem;
            display: grid;
            gap: 2rem;
            height: fit-content;
            transition: all 400ms ease;
        }

        #contact article .ensemble{
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        #contact article img{
        background: linear-gradient(175deg,rgb(236, 210, 93), rgb(110, 110, 110), rgb(3, 3, 110));
            width: 5rem;
            height: 5rem;
            padding: 1.5rem;
            border-radius: 1rem;
            display: flex;
            height: fit-content;
            transition: all 400ms ease;
        }

        #contact article div h4{
            margin-bottom: 1rem;
        }






        /* ======================= Gouverneur ========================== */
        #specialists1 .container{
            width: 80%;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
        }

        #specialists1 article{
            border-radius: 1rem;
            box-shadow: 0 1.5rem 1.5rem rgba(var(--black-color), 0.1);
            position: relative;
            transition: all 700ms ease;
        }

        #specialists1 article:hover {
            box-shadow: none;
        }

        #specialists1 article:hover .specialist__image::before {
            left: 0;
            border-radius: 1rem;
        }

        #specialists1 article:hover .specialist__socials{
            opacity: 1;
            visibility: visible;
        }

        #specialists1 article:hover .specialist__whatsapp{
            opacity: 1;
            visibility: visible;
        }

        #specialists1 article:hover .specialist__photos{
            opacity: 1;
            visibility: visible;
        }

        #specialists1 .specialist__image{
            width: 100%;
            min-height: 1rem;
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            object-fit: cover;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        #specialists1 .specialist__image::before{
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: -100%;
            background: linear-gradient(135deg, var(--primary-color-rgba), var(--primary-color-variant-rgba));
            border-radius: 50%;
            transition: all 0.7s ease;
        }

        .list-img-gvrn{
            display: flex;
            align-items: center;
            justify-content: space-between;
            left: 1%;
            top: 0;
            margin-left: 0;
            width: 30px;
            height: 30px;
        }

        #specialists1 .specialist__details{
            margin: 1.5rem 0;
            text-align: center;
            color: #2c2c30;
            font-weight: 300;
        }

        #specialists1 .specialist__socials{
            position: absolute;
            right: 1.5rem;
            top: 4.5rem;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            opacity: 0;
            visibility: hidden;
            transition: all 1s 400ms ease;
        }

        #specialists1 .specialist__socials a{
            background: var(--white-color);
            color: var(--primary-color);
            padding: 0.4rem;
            display: flex;
            font-size: 2rem;
            border-radius: 50%;
            transition: all 400ms ease;
        }

        #specialists1 .specialist__photos{
            position: absolute;
            top: 1.5rem;
            left: 1.5rem;
            width: 90%;
            height: fit-content;
            color: var(--primary-color);
            /* background: red; */
            opacity: 0;
            padding: 0.4rem;
            font-size: 1rem;
            display: grid;
            gap: 1.3rem;
            transition: all 400ms ease;
        }

        .specialist__photos h3{
            color: rgb(177, 161, 18);
            font-size: 2rem;
        }

        .mot-du-gvrnr{
            font-size: 1.15rem;
            color: var(--white-color);
        }

        #specialists1 .specialist__socials a:hover{
            background: var(--primary-color);
            color: var(--white-color);
        }

        #specialists1 .specialist__whatsapp{
            background: var(--success-color);
            color: var(--white-color);
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            bottom: 15%;
            padding: 1rem;
            border-radius: 50%;
            font-size: 3rem;
            display: flex;
            opacity: 0;
            visibility: hidden;
            transition: all 1s 400ms ease;
        }


        @media screen and (max-width: 1024px) {
            /* *********************** Gouverneur ************************** */
            #specialists1 .container h3{
                font-size: 2rem;
            }

            #specialists1 .container .mot-du-gvrnr{
                font-size: 1.15rem;
                text-align: left;
            }

            #specialists1 .container .specialist__photos{
                position: absolute;
                top: 0.5rem;
                left: 0.5rem;
                width: 85%;
            }

            #specialists1 .container .specialist__socials{
                position: absolute;
                right: 0.7rem;
                top: 4.5rem;
            }

            #specialists1 .container .specialist__socials a{
                font-size: 1rem;
            }

            #specialists1 .container .specialist__whatsapp{
                position: absolute;
                left: 50%;
                bottom: 10.5%;
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 1000px) {
            /* *********************** Gouverneur ************************** */
            #specialists1 .container h3{
                font-size: 1.3rem;
            }

            #specialists1 .container .mot-du-gvrnr{
                font-size: 1rem;
                text-align: left;
            }

            #specialists1 .container .specialist__photos{
                position: absolute;
                top: 0.5rem;
                left: 0.5rem;
                width: 85%;
            }

            #specialists1 .container .specialist__socials{
                position: absolute;
                right: 0.7rem;
                top: 2.5rem;
            }

            #specialists1 .container .specialist__socials a{
                font-size: 1rem;
            }

            #specialists1 .container .specialist__whatsapp{
                position: absolute;
                left: 50%;
                bottom: 14%;
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 900px) {
            /* *********************** Gouverneur ************************** */
            #specialists1 .container h3{
                font-size: 0.6rem;
            }

            #specialists1 .container .mot-du-gvrnr{
                font-size: 0.9rem;
                text-align: left;
            }

            #specialists1 .container .specialist__photos{
                position: absolute;
                top: 0.5rem;
                left: 0.5rem;
                width: 85%;
            }

            #specialists1 .container .specialist__socials{
                position: absolute;
                right: 0.7rem;
                top: 2.5rem;
            }

            #specialists1 .container .specialist__socials a{
                font-size: 0.7rem;
            }

            #specialists1 .container .specialist__whatsapp{
                position: absolute;
                left: 50%;
                bottom: 14%;
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 800px) {
            /* *********************** Gouverneur ************************** */
            #specialists1 .container h3{
                font-size: 0.6rem;
            }

            #specialists1 .container .mot-du-gvrnr{
                font-size: 0.8rem;
                text-align: left;
            }

            #specialists1 .container .specialist__photos{
                position: absolute;
                top: 0.5rem;
                left: 0.5rem;
                width: 85%;
            }

            #specialists1 .container .specialist__socials{
                position: absolute;
                right: 0.7rem;
                top: 2.5rem;
            }

            #specialists1 .container .specialist__socials a{
                font-size: 0.7rem;
            }

            #specialists1 .container .specialist__whatsapp{
                position: absolute;
                left: 50%;
                bottom: 12%;
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 700px) {
            /* *********************** Gouverneur ************************** */
            #specialists1 .container h3{
                font-size: 0.6rem;
            }

            #specialists1 .container .mot-du-gvrnr{
                font-size: 0.65rem;
                text-align: left;
            }

            #specialists1 .container .specialist__photos{
                position: absolute;
                top: 0.5rem;
                left: 0.5rem;
                width: 85%;
            }

            #specialists1 .container .specialist__socials{
                position: absolute;
                right: 0.7rem;
                top: 2.5rem;
            }

            #specialists1 .container .specialist__socials a{
                font-size: 0.7rem;
            }

            #specialists1 .container .specialist__whatsapp{
                position: absolute;
                left: 50%;
                bottom: 14%;
                font-size: 1rem;
            }
        }

        @media screen and (max-width: 600px) {
            /* *********************** Gouverneur ************************** */
            #specialists1 .container h3{
                font-size: 0.7rem;
            }

            #specialists1 .container .mot-du-gvrnr{
                font-size: 0.51rem;
                text-align: left;
            }

            #specialists1 .container .specialist__photos{
                position: absolute;
                top: 0.5rem;
                left: 0.5rem;
                width: 85%;
            }

            #specialists1 .container .specialist__socials{
                position: absolute;
                right: 0.7rem;
                top: 2.5rem;
            }

            #specialists1 .container .specialist__socials a{
                font-size: 0.7rem;
            }

            #specialists1 .container .specialist__whatsapp{
                position: absolute;
                left: 50%;
                bottom: 17%;
                font-size: 1rem;
            }
        }
    </style>

</head>

<style>
    .place-en-tete-contact{
        width: 100%;
        min-height: 470px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
        padding-top: 2rem;
        padding-bottom: 2rem;
        background-image: url({{ asset('assets/images/Fond1.jpg') }});
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }

    /* Pou bon liste des choix en Nav */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: var(--white-color);
        width: 100%; /* Adapte la largeur du dropdown à celle du parent (li) */
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
        z-index: 1;
    }

    .dropdown-content a {
        color: var(--primary-color);
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        transition: background-color 0.3s ease;
        text-align: center; /* Centrer le texte */
        width: 100%; /* Assure que les liens occupent toute la largeur */
    }

    /* Afficher le dropdown lors du survol */
    li:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a:hover {
        background-color: var(--primary-color);
        color: var(--white-color);
    }

    /* Appliquer une largeur égale au bouton Connexion */
    li {
        position: relative;
        display: inline-block;
        width: fit-content;
    }

    a.btn-top {
        width: 160px;
        display: block;
        text-align: center;
    }


    /* Pou bon liste des choix en Header */
    .groop-btn {
        position: relative;
        display: inline-block;
        text-align: center;
    }

    .dropdown-content2 {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content2 a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .groop-btn:hover .dropdown-content2 {
        display: block;
    }

    .btn {
        display: inline-block;
        padding: 0.75rem 1rem;
        border-radius: 0.4rem;
        color: var(--white-color);
        background: var(--secondary-color);
        cursor: pointer;
        transition: all 400ms ease;
    }

    .dropdown-content2 a {
        background-color: #fff;
        font-size: 0.7rem;
        text-align: center;
        color: var(--primary-color);
        transition: all 400ms ease;
    }

    .dropdown-content2 a:hover {
        background-color: var(--primary-color);
        color: var(--white-color);
    }

</style>

{{-- ======= Digitalisation ====== --}}
<style>
    .ensbl h1, .ensbl h2 {
        margin-bottom: 15px;
    }
</style>

<body>

    <!-- ============================= NAV ============================= -->
    <nav class="grandientBackground">
        <div class="container">
            <a href="#" class="nav__logo ensemble-logo-txt">
                <img class="logo" src="{{ asset('assets/images/logo1.png') }}" alt="Logo">
                <h3>REGION ANOSY</h3>
            </a>

            <ul id="nav__items">
                <li><a href="#" class="color-nav">Accueil</a></li>
                <li><a href="#services" class="color-nav">Services</a></li>
                <li><a href="#specialists" class="color-nav">Employées</a></li>
                <li><a href="#testimonials" class="color-nav">Randez-vous</a></li>
                <li><a href="#appointement" class="color-nav">Pointages</a></li>
                <li><a href="#contact" class="color-nav">Contact</a></li>
                <!-- <li><a href="#appointement" class="btn">Appointement</a></li> -->
                <li>
                    <a href="" class="btn-top">Connexion</a>
                    <div class="dropdown-content">
                        <a href="{{ route('auth.page_users') }}">Utilisateur</a>
                        <a href="{{ route('auth.page_admin') }}">Administrateur</a>
                    </div>
                </li>
            </ul>

            <button id="open__nav-btn"><i class='bx bx-menu'></i></button>
            <button id="close__nav-btn"><i class='bx bx-x' ></i></button>
        </div>
    </nav>

    <!-- ========================= Header ============================= -->
    <header>
        <div class="container">
            <div class="header__content">
                <div class="ensbl">
                    <h1 class="digitalisation">DIGITALISATION DES PROCESS INTERNES</h1>
                    <h2>FARITRA ANOSY MIASA HO ANAO</h2>
                </div>
                <p>Fagnoitsy amy gny fampivoara aty atsimo <br> "Levier de l'emmergence économique du sud"</p>
                <div class="groop-btn">
                    <a href="#appointement" class="btn">Connexion</a>
                    <div class="dropdown-content2">
                        <a href="{{ route('auth.page_users') }}">Utilisateur</a>
                        <a href="{{ route('auth.page_admin') }}">Administrateur</a>
                    </div>
                </div>
            </div>
            <div class="header__image">
                <img src="{{ asset('assets/images/header1.svg') }}" alt="Header Image">
            </div>
        </div>
    </header>

    <!-- ========================= Services ============================= -->
    <section id="services">

        <div class="en-tete-services">
            <h2>Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>

        <div class="container">
            <article>
                <i class='bx bx-book-content'></i>
                <div>
                    <h4>Online Booking</h4>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero hic odio corporis.
                    Nihil cupiditate vitae molestias in possimus tempora porro quam blanditiis.</small>
                </div>
            </article>
            <article>
                <i class='bx bx-book-content'></i>
                <div>
                    <h4>Online Booking</h4>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero hic odio corporis.
                    Nihil cupiditate vitae molestias in possimus tempora porro quam blanditiis.</small>
                </div>
            </article>
            <article>
                <i class='bx bx-book-content'></i>
                <div>
                    <h4>Online Booking</h4>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero hic odio corporis.
                    Nihil cupiditate vitae molestias in possimus tempora porro quam blanditiis.</small>
                </div>
            </article>
            <article>
                <i class='bx bx-book-content'></i>
                <div>
                    <h4>Online Booking</h4>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero hic odio corporis.
                    Nihil cupiditate vitae molestias in possimus tempora porro quam blanditiis.</small>
                </div>
            </article>
            <article>
                <i class='bx bx-book-content'></i>
                <div>
                    <h4>Online Booking</h4>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero hic odio corporis.
                    Nihil cupiditate vitae molestias in possimus tempora porro quam blanditiis.</small>
                </div>
            </article>
            <article>
                <i class='bx bx-book-content'></i>
                <div>
                    <h4>Online Booking</h4>
                    <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis libero hic odio corporis.
                    Nihil cupiditate vitae molestias in possimus tempora porro quam blanditiis.</small>
                </div>
            </article>
        </div>
    </section>


    <!-- ========================= Gouverneur ========================= -->
    <section id="specialists1">
        <div class="en-tete-services">
            <h2>MADAME LA GOUVERNEUR DE LA REGION ANOSY</h2>
            <!-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis nisi ab porro explicabo.</p> -->
        </div>
        <div class="container">

            <article>
                <div class="specialist__image">
                    <img class="ig" src="{{ asset('assets/images/Mm.jpg') }}" alt="Specialist4">
                </div>
                <div class="specialist__details">
                    <h4>MADAME LA GOUVERNEUR DE LA REGION ANOSY</h4>
                    <small>  </small>
                </div>
                <div class="specialist__socials">
                    <a href="https://linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
                </div>
                <div class="specialist__photos">
                    <h3>MOTS DU GOUVERNEUR</h3>
                    <p class="mot-du-gvrnr">
                        Dotée d’opportunités économiques considérables et présentant de multiples atouts,
                        la région Anôsy se profile comme une destination de choix pour les investisseurs
                        souhaitant catalyser le développement économique du Sud de Madagascar. Dans cette
                        perspective, nous encourageons la promotion de l’économie verte et bleue, mettant
                        l’accent sur le développement des filières d’exportation et la création d’unités
                        industrielles spécialisées dans la transformation, en exploitant les atouts naturels
                        distinctifs de la région. À cet effet, nous nous engageons à faciliter les opérations
                        des investisseurs et des porteurs de projets dans la région Anôsy, en assurant un
                        environnement propice aux affaires, notamment en créant des conditions favorables au
                        lancement et à la dynamisation de leurs initiatives. En plus de la richesse de nos
                        ressources en matières premières issues de notre terroir, la présence d’un port en eau
                        profonde aux normes internationales et de la zone d’investissement industriel d’Ehoala
                        Park constituent un avantage indéniable, facilitant le processus, depuis le stockage jusqu’à
                        l’exportation des produits transformés. La proximité d’un aéroport international et les
                        améliorations en cours des axes routiers majeurs (RN13 et RN12A) sont également des éléments
                        favorables à tout investissement, favorisant par ailleurs le développement du secteur
                        touristique dans la région. Engagée dans sa mission de devenir le fer de lance de l’émergence
                        économique du Sud de Madagascar, la région Anôsy s’engage à concrétiser les défis énoncés
                        dans le Plan Régional de Développement (PRD) et à suivre la politique émergente de décentralisation,
                        tout en promouvant les 12 pôles de croissance. Ainsi, nous lançons un appel à l’échelle mondiale,
                        invitant tous les acteurs à se joindre à nous pour découvrir la richesse culturelle, la gastronomie,
                        la biodiversité et toutes les merveilles offertes par la Région. Cet appel reflète notre vision de développement,
                        visant à une croissance économique et un progrès social, dans le but ultime d’offrir à la prochaine génération
                        l’héritage d’une région prospère. Nous vous souhaitons une exploration enrichissante de notre région à travers ce site.
                    </p>
                </div>
                <a href="https://api.whatsapp.com/send?phone=261344596117" class="specialist__whatsapp" target="_blank"><i class='bx bxl-whatsapp'></i></a>
            </article>

        </div>
    </section>

    <!-- ========================= Specialistes ========================= -->
    <section id="specialists">
        <div class="en-tete-services">
            <h2>LES EMPLOYEES</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis nisi ab porro explicabo.</p>
        </div>
        <div class="container">

            <article>
                <div class="specialist__image">
                    <img class="ig" src="{{ asset('assets/images/img1.JPG') }}" alt="Specialist4">
                </div>
                <div class="specialist__details">
                    <h4>Dr Wilson Frederique</h4>
                    <small>Développeur Full Stack</small>
                </div>
                <div class="specialist__socials">
                    <a href="https://linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
                </div>
                <a href="https://api.whatsapp.com/send?phone=261344596117" class="specialist__whatsapp" target="_blank"><i class='bx bxl-whatsapp'></i></a>
            </article>

            <article>
                <div class="specialist__image">
                    <img src="{{ asset('assets/images/img2.JPG') }}" alt="Specialist2">
                </div>
                <div class="specialist__details">
                    <h4>Dr Wilson Frederique</h4>
                    <small>Développeur Full Stack</small>
                </div>
                <div class="specialist__socials">
                    <a href="https://linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
                </div>
                <a href="https://api.whatsapp.com/send?phone=261388499982" class="specialist__whatsapp" target="_blank"><i class='bx bxl-whatsapp'></i></a>
            </article>

            <article>
                <div class="specialist__image">
                    <img src="{{ asset('assets/images/img3.JPG') }}" alt="Specialist3">
                </div>
                <div class="specialist__details">
                    <h4>Dr Wilson Frederique</h4>
                    <small>Développeur Full Stack</small>
                </div>
                <div class="specialist__socials">
                    <a href="https://linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
                </div>
                <a href="https://api.whatsapp.com/send?=+261388499982" class="specialist__whatsapp" target="_blank"><i class='bx bxl-whatsapp' ></i></a>
            </article>

            <article>
                <div class="specialist__image">
                    <img src="{{ asset('assets/images/img4.JPG') }}" alt="Specialist1">
                </div>
                <div class="specialist__details">
                    <h4>Dr Wilson Frederique</h4>
                    <small>Développeur Full Stack</small>
                </div>
                <div class="specialist__socials">
                    <a href="https://linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
                </div>
                <a href="https://api.whatsapp.com/send?=+261388499982" class="specialist__whatsapp" target="_blank"><i class='bx bxl-whatsapp' ></i></a>
            </article>

            <article>
                <div class="specialist__image">
                    <img src="{{ asset('assets/images/img5.JPG') }}" alt="Specialist5">
                </div>
                <div class="specialist__details">
                    <h4>Dr Wilson Frederique</h4>
                    <small>Développeur Full Stack</small>
                </div>
                <div class="specialist__socials">
                    <a href="https://linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
                </div>
                <a href="https://api.whatsapp.com/send?=+261388499982" class="specialist__whatsapp" target="_blank"><i class='bx bxl-whatsapp' ></i></a>
            </article>

            <article>
                <div class="specialist__image">
                    <img src="{{ asset('assets/images/img6.JPG') }}" alt="Specialist6">
                </div>
                <div class="specialist__details">
                    <h4>Dr Wilson Frederique</h4>
                    <small>Développeur Full Stack</small>
                </div>
                <div class="specialist__socials">
                    <a href="https://linkedin.com" target="_blank"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://twitter.com" target="_blank"><i class='bx bxl-twitter' ></i></a>
                    <a href="https://facebook.com" target="_blank"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://instagram.com" target="_blank"><i class='bx bxl-instagram' ></i></a>
                </div>
                <a href="https://api.whatsapp.com/send?=+261388499982" class="specialist__whatsapp" target="_blank"><i class='bx bxl-whatsapp' ></i></a>
            </article>

        </div>
    </section>

    <!-- ========================= Testimonials ========================= -->
    <section id="testimonials" class="swiper mySwiper">
        <div class="en-tete-services">
            <h2>RANDEZ - VOUS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quia cum, totam repellat non quod?</p>
        </div>

        <div class="swiper-wrapper">
            <article class="swiper-slide">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione voluptas quasi ducimus dignissimos explicabo unde corporis, ut inventore.
                </p>
                <div class="patient">
                    <div class="avatar">
                        <img src="assets/images/images (3).png" alt="avatar">
                    </div>
                    <div class="patient-details">
                        <h5>Walle Fred</h5>
                        <small>Patient</small>
                    </div>
                </div>
            </article>
            <article class="swiper-slide">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione voluptas quasi ducimus dignissimos explicabo unde corporis, ut inventore.
                </p>
                <div class="patient">
                    <div class="avatar">
                        <img src="assets/images/images (3).png" alt="avatar">
                    </div>
                    <div class="patient-details">
                        <h5>Walle Fred</h5>
                        <small>Patient</small>
                    </div>
                </div>
            </article>
            <article class="swiper-slide">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione voluptas quasi ducimus dignissimos explicabo unde corporis, ut inventore.
                </p>
                <div class="patient">
                    <div class="avatar">
                        <img src="assets/images/images (3).png" alt="avatar">
                    </div>
                    <div class="patient-details">
                        <h5>Walle Fred</h5>
                        <small>Patient</small>
                    </div>
                </div>
            </article>
            <article class="swiper-slide">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione voluptas quasi ducimus dignissimos explicabo unde corporis, ut inventore.
                </p>
                <div class="patient">
                    <div class="avatar">
                        <img src="assets/images/images (3).png" alt="avatar">
                    </div>
                    <div class="patient-details">
                        <h5>Walle Fred</h5>
                        <small>Patient</small>
                    </div>
                </div>
            </article>
            <article class="swiper-slide">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione voluptas quasi ducimus dignissimos explicabo unde corporis, ut inventore.
                </p>
                <div class="patient">
                    <div class="avatar">
                        <img src="assets/images/images (3).png" alt="avatar">
                    </div>
                    <div class="patient-details">
                        <h5>Walle Fred</h5>
                        <small>Patient</small>
                    </div>
                </div>
            </article>
            <article class="swiper-slide">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione voluptas quasi ducimus dignissimos explicabo unde corporis, ut inventore.
                </p>
                <div class="patient">
                    <div class="avatar">
                        <img src="assets/images/images (3).png" alt="avatar">
                    </div>
                    <div class="patient-details">
                        <h5>Walle Fred</h5>
                        <small>Patient</small>
                    </div>
                </div>
            </article>
            <article class="swiper-slide">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Ratione voluptas quasi ducimus dignissimos explicabo unde corporis, ut inventore.
                </p>
                <div class="patient">
                    <div class="avatar">
                        <img src="assets/images/images (3).png" alt="avatar">
                    </div>
                    <div class="patient-details">
                        <h5>Walle Fred</h5>
                        <small>Patient</small>
                    </div>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- ============================ Contact =========================== -->
    <section id="contact">
        <div class="container">
            <div class="place-en-tete-contact">
                <div class="en-tete-contacte-txt">
                    <div class="txt">
                        <h2>CONTACT</h2>
                        <p class="txt2">
                            Veuillez contacter la Région Anosy
                        </p>
                    </div>
                    <p>
                        <div class="btn-choix-contacte">
                            <a class="border-btn-contacte" href="#contact">Contacter</a>
                            <a class="border-btn-contacte" href="#appointement">Messages ou Conseilles</a>
                        </div>
                    </p>
                </div>
            </div>
            <article class="contact-region">
                <div class="ensemble">
                    <div class="img-email">
                        <img class="taille-img-contact" src="assets/images/Email.png" alt="">
                    </div>
                    <div class="txt-email">
                        <h4>MAIL DE LA REGION ANOSY</h4>
                        <p>faritranosy@gmail.com</p>
                    </div>
                </div>
                <div class="ensemble">
                    <div class="img-contact">
                        <img class="taille-img-contact" src="assets/images/contact.png" alt="">
                    </div>
                    <div class="txt-contact">
                        <h4>TELEPHONE DE LA REGION ANOSY</h4>
                        <p>+261 34 80 571 81</p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- ========================= Appointement ========================= -->
    <section id="appointement">
        <div class="container">
            <div class="info txt-appointement">
                <h2>MESSAGES</h2>
                <p>
                    Resteze-connecté avec la région anôsy <span> ou </span> Veuillez contacter : <a href="#contact" class="color-lien">Cliquez ici pour nous contacter.</a>
                    <br> <strong> Message public récent </strong> ( Veuillez remplir ces champs pour votre message. )
                </p>

                <article>
                    <div class="info__icon">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="txt-appointement">
                        <h4>Nom et Prenom</h4>
                        <small>
                            <div class="date-prive-public">
                                <div class="dat">
                                    03-07-2024
                                </div>
                                <div class="prv-pbl">
                                    Message public
                                </div>
                            </div>
                            <div class="message">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, doloremque minus molestias,
                                ducimus aliquam ullam aut optio ex distinctio accusantium eveniet expedita atque quasi tempore.
                            </div>
                        </small>
                    </div>
                </article>

                <article>
                    <div class="info__icon">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="txt-appointement">
                        <h4>Nom et Prenom</h4>
                        <small>
                            <div class="date-prive-public">
                                <div class="dat">
                                    03-07-2024
                                </div>
                                <div class="prv-pbl">
                                    Message public
                                </div>
                            </div>
                            <div class="message">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, doloremque minus molestias,
                                ducimus aliquam ullam aut optio ex distinctio accusantium eveniet expedita atque quasi tempore.
                            </div>
                        </small>
                    </div>
                </article>

                <article>
                    <div class="info__icon">
                        <i class='bx bx-user'></i>
                    </div>
                    <div class="txt-appointement">
                        <h4>Nom et Prenom</h4>
                        <small>
                            <div class="date-prive-public">
                                <div class="dat">
                                    03-07-2024
                                </div>
                                <div class="prv-pbl">
                                    Message public
                                </div>
                            </div>
                            <div class="message">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, doloremque minus molestias,
                                ducimus aliquam ullam aut optio ex distinctio accusantium eveniet expedita atque quasi tempore.
                            </div>
                        </small>
                    </div>
                </article>

                <a href="#appointement" class="btn-message-bottom">Message</a>

            </div>

            <form action="https://formspree.io/f/meojbpgd" method="POST" class="txt-appointement">
                <div class="form__group">
                    <label for="nom">Nom et Prenom</label>
                    <input type="text" name="nom" placeholder="Entrer votre Nom et Prenom" id="nom" required>
                </div>
                <div class="form__group">
                    <label for="num">Numéro Téléphone</label>
                    <input type="number" name="num" placeholder="Numéro téléphone" id="num" required>
                </div>
                <div class="form__group">
                    <label for="date">Date</label>
                    <input type="date" name="date" placeholder="Date aujourd'hui" id="date" required>
                </div>
                <div class="form__group">
                    <label for="departement">Type de messages</label>
                    <select id="departement" name="departement" required>
                        <option value="Departement 1">Message public</option>
                        <option value="Departement 2">Message privé</option>
                    </select>
                </div>
                <div class="form__group">
                    <label for="employes">Sélectionner un employé</label>
                    <select id="employes" name="employes" required>
                        <option value="employes 1">Employé 1</option>
                        <option value="employes 2">Employé 2</option>
                        <option value="employes 3">Employé 3</option>
                        <option value="employes 4">Employé 4</option>
                    </select>
                </div>
                <div class="form__group">
                    <label for="message">Votre Message</label>
                    <textarea id="message" name="message" placeholder="Ecrivez ici votre message" required></textarea>
                </div>
                <input type="submit" value="ENVOYER" class="btn-primary">
            </form>

        </div>
    </section>



    <!-- ============================ Footer ============================ -->
    <footer>
        <div class="container">
            <article>
                <a href="#" class="footer__logo">
                    <div class="footer-logo">
                        <img class="img-footer" src="{{ asset('assets/images/logo1.png') }}" alt="logoFooter">
                        <h3>REGION ANOSY</h3>
                    </div>
                </a>
                <P>
                    FARITRA ANOSY MIASA HO ANAO. <br><br> Fagnoitsy amy gny fampivoara aty atsimo <br><br> Levier de l'emmergence économique du sud
                </P>
                <div>
                    <i class='bx bx-phone'></i>
                    <small>+261 34 80 571 81</small>
                </div>
                <div>
                    <i class='bx bx-mail-send'></i>
                    <small>faritranosy@gmail.com</small>
                </div>
            </article>

            <article>
                <h3>Support</h3>
                <a href="#">Previce Police</a>
                <a href="#">Cookie Police</a>
                <a href="#">Purshasing Police</a>
                <a href="#">Terms & Conditions</a>
                <a href="#">Career</a>
            </article>

            <article>
                <h3>Menu</h3>
                <a href="#">Accueil</a>
                <a href="#services">Services</a>
                <a href="#specialists">Employées</a>
                <a href="#testimonials">Randez-vous</a>
                <a href="#contact" class="btn-primary">Contact</a>
            </article>


            <article>
                <h3>Contact de la Région</h3>
                <p>Mail : faritranosy@gmail.com</p>
                <p>Téléphone : +261 34 80 571 81</p>
                <div class="footer__socials">
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                </div>
            </article>
        </div>
        <div class="copyright">
            <small>&copy; Droits d'auteur Région Anosy :</small>
        </div>
    </footer>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- ---------------- Mon Js --------------- -->
    <script src="assets/script/script.js"></script>

    <script>
        const navItems = document.querySelector('#nav__items');
        const openNavBtn = document.querySelector('#open__nav-btn');
        const closeNavBtn = document.querySelector('#close__nav-btn');

        openNavBtn.addEventListener('click', () => {
            navItems.style.display = 'flex';
            openNavBtn.style.display = 'none';
            closeNavBtn.style.display = 'inline-block';
        })

        const closeNav = () => {
            navItems.style.display = 'none';
            closeNavBtn.style.display = 'none';
            openNavBtn.style.display = 'inline-block';
        }

        closeNavBtn.addEventListener('click', closeNav);



        // ------------------------------------------------
        if(window.innerWidth < 1024){
            document.querySelectorAll('#nav__items li a').forEach(navItems => {
                navItems.addEventListener('click', () => {
                    closeNav();
                })
            })
        }


        //------------ Change NavBar Style ----------------
        window.addEventListener('scroll', () => {
            document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0);
        })




        // ==================== Swiper ==================
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },


            // Responsive Breakpoints
            breakpoints: {
                // When Window is >= 600px
                600: {
                    slidesPerView: 2
                },

                // When Window is >= 1024px
                1024: {
                    slidesPerView: 3
                }
            }
        });
    </script>

</body>
</html>
