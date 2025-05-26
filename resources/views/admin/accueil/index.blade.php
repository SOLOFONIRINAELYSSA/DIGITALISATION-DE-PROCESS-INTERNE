@extends('base')

@section('title', "ACCUEIL")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1 class="h1-horloge" id="Horloge">12:05:15</h1>
                </div>
                <div class="droit">
                    <h1 class="bvn">Bienvenue à vous</h1>
                    <a href="#" class="btn-download">
                        <i class='bx bxs-cloud-download' ></i>
                        <span class="text">Télécharger le PDF</span>
                    </a>
                </div>
            </div>

            <!-- *********************************************** -->

            <div class="table-date">
                <div class="todo">
                    <div class="head">
                        <h3>DIGITALISATION DES PROCESS INTERNES</h3>
                        <i class='bx bx-filter icon-tbl'></i>
                    </div>
                    <ul class="todo-list todo-color">
                        <li class="">
                            <img class="img-home1" src="{{ asset('assets/images/home1.png') }}" alt="">
                            <img class="img-home2" src="{{ asset('assets/images/home2.png') }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>

        </main>
    </section>

    {{-- ======== Scrip Horloge ========== --}}
    <script>
        function Horloge() {
            let temps = new Date();
            let heures = temps.getHours();
            let minutes = temps.getMinutes();
            let secondes = temps.getSeconds();

            heures = heures < 10 ? "0" + heures : heures;
            minutes = minutes < 10 ? "0" + minutes : minutes;
            secondes = secondes < 10 ? "0" + secondes : secondes;

            let heureActuelle = heures + ":" + minutes + ":" + secondes;

            // Mettre à jour le texte de l'élément Horloge
            document.getElementById("Horloge").textContent = heureActuelle;
        }

        // Mettre à jour l'horloge immédiatement
        Horloge();

        // Mettre à jour l'heure chaque seconde
        setInterval(Horloge, 1000);
    </script>

@endsection

{{-- ------------------- Css pour l'image accueil ------------------- --}}
<style>
    /* ======= Style image home ======== */
    .img-home1{
        width: 45%;
        height: 50vh;
        object-fit: cover;
    }
    .img-home2{
        width: 41%;
        height: 50vh;
        object-fit: cover;
    }

    /* ========= Horloge  home =========  */
    #content main .head-title .left .h1-horloge{
        font-size: 56px;
        font-weight: 600;
        margin-bottom: 1px;
        letter-spacing: 1;
    }
</style>

<style>
    .droit{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 90px;
    }
    .bvn{
        font-size: 40px;
        font-weight: 500;
        color: var(--color-bienvenue)
    }
</style>

