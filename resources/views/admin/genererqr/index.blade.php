@extends('base')

@section('title', "CODE QR")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>

            <!-- ********************** Header Main ************************ -->

            <div class="head-title">
                <div class="left">
                    <h1>CODE QR</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Code QR</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="">Page pour générer code QR</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-imprimer-ajout">
                    <a href="{{ route('admin.badge.pdf') }}" class="imprimer-tout">
                        <i class='bx bx-printer'></i>
                    </a>
                    <a href="" class="btn-download genererQR">
                        <i class='bx bx-plus-medical'></i>
                        <span class="text">Générer code QR</span>
                    </a>
                </div>
            </div>

            <!-- ********************* TBL AFFICHAGE *********************** -->

            <div class="table-date">
                <div class="todo">
                    <div class="head">
                        <h3>EMPLOYEES AVEC QR</h3>
                        <a href="#" class="icon-plus-genererQR">
                            <i class='bx bx-plus icon-tbl' ></i>
                        </a>
                        <a href="#">
                            <i class='bx bx-filter icon-tbl'></i>
                        </a>
                    </div>
                    <ul class="todo-list todo-color">
                        @foreach ($genererqrs as $genererqr)
                            <li class="not-completed">
                                <div class="todo-item">
                                    <img class="imgTodo" src="{{ asset($genererqr->employes->images) }}" alt="">
                                    <div class="txt-left">
                                        <p id="p">{{ $genererqr->numEmp }}</p>
                                        <p>{{ $genererqr->employes->Nom }} {{ $genererqr->employes->Prenom }}</p>
                                    </div>
                                </div>
                                <div class="QR-icon">
                                    <img src="{{ asset($genererqr->imageqr) }}" alt="" class="imgTodoQR">
                                    <div class="icon-container icon-del-mod-qr">
                                        <a href="{{ route('admin.genereqrs.show', $genererqr->id) }}"><i class='bx bxs-credit-card' style='color:#4954de'  ></i></a>
                                        <i class='bx bx-printer' style='color:#228e8a'  ></i>
                                        <form action="{{ route('admin.genereqrs.destroy', $genererqr->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border: none; background: none; cursor: pointer;" onclick="openModal({{ $genererqr->id }})">
                                                <a href="#"><i class='bx bx-trash delt-qr' style='color:#d01616'  ></i></a>
                                            </button>
                                        </form>
                                    </div>

                                      <!-- Boîte de dialogue -->
                                <div id="confirmationModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeModal()">;</span>
                                        <p>Êtes-vous sûr de vouloir supprimer cet employé ?</p>
                                        <button id="button1" onclick="confirmDeletion()">Supprimer</button>
                                        <button id="button2" onclick="closeModal()">Annuler</button>
                                    </div>

                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <!-- *********************** FORMULAIRE ************************ -->

            <!-- Overlay et Formulaire QR -->
            <div class="overlay hidden"></div>
            <div class="container-conge hidden">
                <div class="cntr-QR">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    {{-- <form method="POST" action="{{ route('admin.genereqrs.store') }}" enctype="multipart/form-data">
                        <p class="p-x"><i class='bx bx-x icon-x'></i></p>
                        @csrf
                        <p>Entrer votre Nom</p>
                        <input name="numEmp" type="text" placeholder="N° CIN" id="qrTextInput">

                        <!-- Champ caché pour stocker le lien de l'image générée -->
                        <input type="hidden" name="imageqr" id="qrImageInput">

                        <div id="imgBoxAffiche">
                            <img src="" id="qrImageSurLien">
                        </div>

                        <button type="submit" onclick="gnrQR()">Generer QR</button>
                    </form> --}}
                    <form method="POST" action="{{ route('admin.genereqrs.store') }}" enctype="multipart/form-data" id="qrForm">
                        <p class="p-x"><i class='bx bx-x icon-x'></i></p>
                        @csrf
                        <p>Entrer votre Nom</p>
                        {{-- <input name="numEmp" type="text" placeholder="N° CIN" id="qrTextInput"> --}}
                        <select class="select" id="qrTextInput" name="numEmp" placeholder="N° CIN">
                            @foreach($employes as $employe)
                                <option value="{{ $employe->numEmp }}"
                                    {{ (isset($genererqr) && $employe->numEmp == $genererqr->numEmp) ? 'selected' : '' }}>
                                    {{ $employe->Nom }}
                                </option>
                            @endforeach
                        </select>

                        <!-- Champ caché pour stocker le lien de l'image générée -->
                        <input type="hidden" name="imageqr" id="qrImageInput">

                        <div id="imgBoxAffiche">
                            <img src="" id="qrImageSurLien">
                        </div>

                        <!-- Bouton avec appel à la fonction genererEtSoumettreQR -->
                        <button type="button" onclick="genererEtSoumettreQR()">Generer QR</button>
                    </form>

                </div>
            </div>

        </main>
    </section>

@endsection


{{-- ------------------- Css pour visible ei invisible du frm ----------------------- --}}
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


{{-- ----------------------------- Css pour la formulaire --------------------------- --}}
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

    .cntr-QR{
        width: 400px;
        padding: 25px 35px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: var(--color-bg-container-qr);
        border-radius: 10px;
    }

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

    .cntr-QR p{
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 8px;
        color: var(--txt-header-input-qr);
    }

    .cntr-QR input{
        width: 100%;
        height: 50px;
        border: 1px solid #494eea;
        outline: 0;
        padding: 10px;
        margin: 10px 0 20px;
        border-radius: 5px;
    }

    .cntr-QR .select{
        width: 100%;
        height: 50px;
        border: 1px solid #494eea;
        outline: 0;
        padding: 10px;
        margin: 10px 0 20px;
        border-radius: 5px;
    }

    .cntr-QR button{
        width: 100%;
        height: 50px;
        background: #494eea;
        color: #fff;
        border: 0;
        outline: 0;
        border-radius: 5px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        margin: 20px 0;
        font-weight: 500;
    }

    #imgBoxAffiche{
        width: 200px;
        border-radius: 5px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 1s;
    }

    #imgBoxAffiche img{
        width: 100%;
        height: 200px;
    }

    #imgBoxAffiche.show-img{
        max-height: 300px;
        margin: 10px auto;
        border: 1px solid #d1d1d1;
    }

    .error{
        animation: shake 0.1s linear 10;
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
        const btnGenererQR = document.querySelector('.btn-download.genererQR');
        const btnClose = document.querySelector('.icon-x');

        if (btnGenererQR && overlay && formQR && btnClose) {
            btnGenererQR.addEventListener('click', function (event) {
                event.preventDefault();
                overlay.classList.remove('hidden');
                formQR.classList.remove('hidden');
                document.querySelector('.cntr-QR').classList.add('active-poput');
            });

            overlay.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.cntr-QR').classList.remove('active-poput');
            });

            // Fonction pour fermer le formulaire QR
            btnClose.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.container-conge').classList.remove('active-poput');
            });

        } else {
            console.error('Un ou plusieurs éléments sont introuvables.');
        }
    });

    // ================= Pour la btn Ajout =================
    document.addEventListener('DOMContentLoaded', function () {

        const overlay = document.querySelector('.overlay');
        const formQR = document.querySelector('.container-conge');
        const btnGenererQR = document.querySelector('.icon-plus-genererQR');
        const btnClose = document.querySelector('.icon-x');

        if (btnGenererQR && overlay && formQR && btnClose) {
            btnGenererQR.addEventListener('click', function (event) {
                event.preventDefault();
                overlay.classList.remove('hidden');
                formQR.classList.remove('hidden');
                document.querySelector('.cntr-QR').classList.add('active-poput');
            });

            overlay.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.cntr-QR').classList.remove('active-poput');
            });

            // Fonction pour fermer le formulaire QR
            btnClose.addEventListener('click', function () {
                overlay.classList.add('hidden');
                formQR.classList.add('hidden');
                document.querySelector('.container-conge').classList.remove('active-poput');
            });

        } else {
            console.error('Un ou plusieurs éléments sont introuvables.');
        }
    });

</script>

{{-- ------------------ Scrip pour enregistrer code QR dans SGBD --------------------- --}}
<script>
    function genererEtSoumettreQR() {
        let imgBox = document.getElementById("imgBoxAffiche");
        let qrImage = document.getElementById("qrImageSurLien");
        let qrText = document.getElementById("qrTextInput");
        let qrImageInput = document.getElementById("qrImageInput");

        if (qrText.value.length > 0) {
            let imageUrl = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + qrText.value;

            // Affiche l'image du QR code
            qrImage.src = imageUrl;
            qrImageInput.value = imageUrl; // Met à jour le champ caché avec le lien de l'image
            imgBox.classList.add("show-img");

            // Ajoute un délai pour que l'image du QR code soit bien affichée avant la soumission
            setTimeout(function() {
                // Soumet le formulaire une fois le QR code généré
                document.getElementById("qrForm").submit();
            });  // Délai de 500ms
        } else {
            // Si le champ texte est vide, on affiche une animation d'erreur
            qrText.classList.add('error');
            setTimeout(() => {
                qrText.classList.remove('error');
            });
        }
    }
</script>


{{-- POUR DIALOG BOX***************************************************************************************************************** --}}
        <style>

            .icon-container
            {
                display: flex;
                align-items: center;
                gap: 10px;
            }

        /* Style de la boîte de dialogue */
        .modal {
            display: none; /* Caché par défaut */
            position: fixed; 
            z-index: 1000; 
            left: 20;
            top: 39%; /* Réduit la position vers le haut */
            width: 100%;
            height: auto; /* Ajuste la hauteur automatiquement */
            overflow: auto; 
        }

        .modal-content {
            color: white;
            background-color:  #383838;
            backdrop-filter: blur(20px);
            margin: auto; /* Centre horizontalement */
            padding: 20px;
            border: 1px solid #3231311d;
            width: 40%; /* Ajuste la largeur de la boîte */
            text-align: center;
            border-radius: 10px; /* Bords arrondis */
        }

        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        #button1
        {
            background-color: #d01616;
        }

        #button2
        {
            background-color: green;
        }

        button {
            margin: 10px;
            padding: 10px 20px;
            cursor: pointer;
            color: white; /* Couleur du texte */
            border: none; /* Pas de bord */
            border-radius: 5px; /* Bords arrondis */
            transition: background-color 0.3s; /* Transition pour l'effet de survol */
        }

        #button1:hover {
            background-color: #a90309;
        }

        #button2:hover {
            background-color: rgb(21, 243, 9);
        }


        </style>

       {{-- ------------------ Script pour gérer le modal ------------------ --}}
        <script>
            let employeeIdToDelete = null;

            function openModal(id) {
                const modal = document.getElementById("confirmationModal");
                modal.style.display = "block";
                employeeIdToDelete = id; // Store the ID of the employee to delete
            }

            function closeModal() {
                const modal = document.getElementById("confirmationModal");
                modal.style.display = "none";
                employeeIdToDelete = null; // Reset the stored ID
            }

            function confirmDeletion() {
                if (employeeIdToDelete) {
                    document.getElementById('deleteForm-' + employeeIdToDelete).submit();
                }
            }

            // Close the modal if the user clicks anywhere outside of it
            window.onclick = function(event) {
                const modal = document.getElementById("confirmationModal");
                if (event.target == modal) {
                    closeModal();
                }
            };
        </script>
        {{-- //***************************************************************************************// --}}