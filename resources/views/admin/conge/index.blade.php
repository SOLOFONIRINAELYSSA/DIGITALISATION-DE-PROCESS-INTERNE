@extends('base')

@section('title', "PAGE CONGES")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>

            <!-- ********************** Header Main ************************ -->

            <div class="head-title">
                <div class="left">
                    <h1>CONGES</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Conge</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Page Conge</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-imprimer-ajout">
                    <a href="#" class="imprimer-tout">
                        <i class='bx bx-printer'></i>
                    </a>
                    <a href="" class="btn-download ajoutConge">
                        <i class='bx bx-plus-medical'></i>
                        <span class="text">Nouveau Conge</span>
                    </a>
                </div>
            </div>

            <!-- ********************* TBL AFFICHAGE *********************** -->

            <div class="table-date">
                <div class="orber">
                    <div class="head">
                        <h3>Liste des conges en <span class="span-jours-conge">30</span> jours de limite</h3>
                        <form class="tbl-tete-droit" action="#">
                            <div class="inputDate">
                                <input class="input-rech-date-point" type="date">
                            </div>
                        </form>
                        <i class='bx bx-search icon-tbl' ></i>
                        <i class='bx bx-filter icon-tbl'></i>
                    </div>
                    <table>
                        <thead class="thead">
                            <tr>
                                <th>Profil</th>
                                <th>Poste</th>
                                <th>Debut de congé</th>
                                <th>Jours de conge</th>
                                <th>Reste de conge</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @foreach ($conges as $conge)
                            <tr>
                                <td>
                                <img src="{{ asset($conge->employes->images) }}" alt="">
                                <p>{{ $conge->employes->Nom }} {{ $conge->employes->Prenom }}</p>
                                </td>
                                <td>{{ $conge->employes->Poste }}</td>
                                <td>{{ $conge->dateDebut }}</td>
                                <td><span class="status jours">{{ $conge->nbrjr }}</span></td>
                                <td><span class="status total">{{ $conge->solde }}</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-printer icon-mod-del-pointag' style='color:#228e8a'  ></i></a>
                                        <a href="{{ route('showconge') }}"><i class='bx bx-detail icon-mod-del-pointag' style='color:#1f2dad'  ></i></a>
                                        <a href="#" class="icon-modf-conge"><i class='bx bx-edit icon-mod-del-pointag' style='color:#0a6202'  ></i></a>
                                        <form action="{{ route('admin.conges.destroy', $conge->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border: none; background: none; cursor: pointer;">
                                                   <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                            </button>
                                         </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- *********************** FORMULAIRE ************************ -->

            <div class="overlay hidden"></div>
            <div class="container-conge hidden">
                <div class="form-conge">
                    <form method="POST" action="{{ route('admin.conges.store') }}">
                        @csrf
                        <p class="p-x"><i class='bx bx-x icon-x'></i></p>
                        <div class="input1">
                            <p>Numéro CIN</p>
                            <input type="text" placeholder="Numéro CIN" id="vid1" name="numEmp">
                        </div>

                        <div class="frm1">
                            <div class="input1">
                                <p>Nom de l'approbateur</p>
                                <input type="text" placeholder="Numéro Congé" id="vid2" name="nomApprobateur">
                            </div>

                            <div class="input1">
                                <p>Nombre du jour</p>
                                <input type="number" placeholder="Nombre du jour" id="vid3" name="nbrjr">
                            </div>
                        </div>

                        <div class="frm1">
                        <div class="input1">
                            <p>Début de congé </p>
                            <input type="date" placeholder="Date début" id="vid4" name="dateDebut">
                        </div>

                        <div class="input1">
                            <p>Fin de congé</p>
                            <input type="date" placeholder="Date fin" id="vid5" name="dateFin">
                        </div>
                    </div>
                        
                    <div class="frm1">
                        <div class="input1">
                            <p>Type de congé</p>
                            <input type="text" placeholder="liste" id="vid6" name="typeConge">
                        </div>

                        <div class="input1">
                            <p>Motif</p>
                            <textarea name="motif" required placeholder="si nécessaire" id="" cols="30" rows="10" id="vid7"></textarea>
                        </div>
                    </div>
                        <button type="submit">Soumettre</button>
                    </form>
                </div>
            </div>


        </main>
    </section>

@endsection

{{-- ------------------- Css pour visible ei invisible du fr------------------------- --}}
<style>
    /* ------------------------ ETO MIGERER ANLE IZ HOE REHEFA MIALA LE FRM DE AZO KITIHINA TSARA LE PROGE ---------------------- */
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5); /* Couleur de fond avec opacité */
        z-index: 999; /* Met l'overlay derrière le formulaire */
        display: none; /* Caché par défaut */
    }

    .overlay.hidden {
        display: none;
    }

    .container-conge.hidden {
        display: none;
    }

    .container-conge {
        top: 0%;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        height: 100vh;
        position: fixed;
        padding: 36px 24px;
        /* background: rgb(192, 39, 39); */
    }

</style>

{{-- -------------------------- Css pour la formulaire ------------------------------ --}}
<style>
    *{
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }

    body{
        background: #262a2f;
    }

    .frm1{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .form-conge textarea {
        width: 100%;
        height: 50px;
        border: 1px solid #494eea;
        outline: 0;
        padding: 10px;
        margin: 10px 0 20px;
        border-radius: 5px;
    }

    .form-conge{
        width: 400px;
        padding: 25px 35px;
        position: absolute;
        top: 52%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: var(--color-bg-form-conge);
        border-radius: 10px;
    }

    /* ****** Ito no mampipoitra anle css rehefa nikitik btn ajout ****** */
    .form-conge.active-poput {
        transform: translate(-50%, -50%) scale(1);
    }

    .form-conge p{
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 3px;
        color: var(--txt-header-input-qr);
    }

    .form-conge input{
        width: 100%;
        height: 50px;
        border: 1px solid #494eea;
        outline: 0;
        padding: 10px;
        margin: 10px 0 20px;
        border-radius: 5px;
    }

    .form-conge button{
        width: 100%;
        height: 50px;
        background: #494eea;
        color: #fff;
        border: 0;
        outline: 0;
        border-radius: 5px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        margin: 15px 0;
        font-weight: 500;
    }

    #imgBox{
        width: 200px;
        border-radius: 5px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 1s;
    }

    #imgBox img{
        width: 100%;
        height: 200px;
    }

    #imgBox.show-img{
        max-height: 300px;
        margin: 10px auto;
        border: 1px solid #d1d1d1;
    }

    .error{
        animation: shake 0.1s linear 10;
    }

    /* ---- Btn x pour qr ----  */
    .icon-x{
        position: absolute;
        top: 8px;
        right: 7px;
        border: 1px solid var(--color-border-btn-x);
        height: 23px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 20px;
        color: rgb(223, 75, 75);
    }
    .icon-x:hover{
        background: rgb(185, 42, 42);
        color: #fff;
        border-radius: 50%;
        height: 23px;
        border: 1px solid var(--color-border-btn-x-hover);
    }

    @keyframes shake{
        0%{
            transform: translateX(0);
        }
        25%{
            transform: translateX(-2px);
        }
        50%{
            transform: translateX(0);
        }
        75%{
            transform: translateX(2px);
        }
        100%{
            transform: translateX(0);
        }
    }
</style>

{{-- ---------------------- Scrip pour visible ou invisible -------------------------- --}}
<script>

    // ================= Pour la btn Ajout =================
    document.addEventListener('DOMContentLoaded', function () {

        const overlay = document.querySelector('.overlay');
        const formQR = document.querySelector('.container-conge');
        const btnGenererQR = document.querySelector('.btn-download.ajoutConge');
        const btnClose = document.querySelector('.icon-x');

        if (btnGenererQR && overlay && formQR && btnClose) {
            btnGenererQR.addEventListener('click', function (event) {
                event.preventDefault();
                overlay.classList.remove('hidden');
                formQR.classList.remove('hidden');
                document.querySelector('.form-conge').classList.add('active-poput');
            });

            overlay.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.form-conge').classList.remove('active-poput');
            });

            // Fonction pour fermer le formulaire QR
            btnClose.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.container-QR').classList.remove('active-poput');
            });

        } else {
            console.error('Un ou plusieurs éléments sont introuvables.');
        }
    });

    // ================= Pour la btn Modif =================
    document.addEventListener('DOMContentLoaded', function () {

        const overlay = document.querySelector('.overlay');
        const formQR = document.querySelector('.container-conge');
        const btnGenererQR = document.querySelector('.icon-modf-conge');
        const btnClose = document.querySelector('.icon-x');

        if (btnGenererQR && overlay && formQR && btnClose) {
            btnGenererQR.addEventListener('click', function (event) {
                event.preventDefault();
                overlay.classList.remove('hidden');
                formQR.classList.remove('hidden');
                document.querySelector('.form-conge').classList.add('active-poput');
            });

            overlay.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.form-conge').classList.remove('active-poput');
            });

            // Fonction pour fermer le formulaire QR
            btnClose.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.container-QR').classList.remove('active-poput');
            });

        } else {
            console.error('Un ou plusieurs éléments sont introuvables.');
        }
    });

</script>



