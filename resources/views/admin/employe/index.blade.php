@extends('base')

@section('title', "PAGE EMPLOYE")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>EMPLOYEES</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Employees</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Page Employees</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-imprimer-ajout">
                    <a href="" class="imprimer-tout">
                        <i class='bx bx-id-card'></i>
                    </a>
                    
                        <a href="{{ route('admin.employee.pdf') }}" class="imprimer-tout">
                            <i class='bx bx-printer'></i>
                    
                        </a>
                    
              
                
                    
                    
                    <a href="{{ route('admin.employes.create') }}" class="btn-download">
                        <i class='bx bx-plus-medical'></i>
                        <span class="text">Nouveau Employe</span>
                    </a>
                </div>
            </div>

            <!-- ************************************************ -->

            <ul class="box-info">
                <li>
                    <i class='bx bxs-briefcase-alt-2'></i>
                    <span class="text">
                        <h3 class="txt-box-top">{{ $totalEmployes }}</h3>
                        <p class="txt-box-bottom">Total des Employés</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-notification'></i>
                    <span class="text">
                        <h3 class="txt-box-top">1943</h3>
                        <p class="txt-box-bottom">Total Present(e)s</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-notification-off' ></i>
                    <span class="text">
                        <h3 class="txt-box-top">543</h3>
                        <p class="txt-box-bottom">Total Absent(e)s</p>
                    </span>
                </li>
            </ul>

            <!-- ********************* Table **************************** -->

            <div class="table-date">
                <div class="orber">
                    <div class="head">
                        <h3>Liste des employees</h3>
                        {{-- <form id="rechercheForm" action="{{ route('admin.employes.index') }}" method="GET">
                            <select name="RechercherPoste" class="form-control-employe" onchange="this.form.submit()">
                                <option value="all">Tous les postes</option>
                                @foreach($postes as $poste)
                                    <option value="{{ $poste }}">{{ $poste }}</option>
                                @endforeach
                            </select>
                            <button type="submit" style="border: none; background: none; cursor: pointer;">
                                <i class='bx bx-search icon-tbl'></i>
                            </button>
                        </form> --}}

                        <form action="{{ route('admin.employes.index') }}" method="GET">
                            <select name="RechercherPoste" class="form-control-employe" onchange="this.form.submit()">
                                <option value="all">Tous les postes</option> <!-- Utilisation de 'all' pour tous les postes -->
                                @foreach($postes as $poste)
                                    <option value="{{ $poste }}" {{ request('RechercherPoste') == $poste ? 'selected' : '' }}>
                                        {{ $poste }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" style="border: none; background: none; cursor: pointer;">
                                <i class='bx bx-search icon-tbl'></i>
                            </button>
                        </form>
                        
                        
                        <a href="{{ route('admin.employes.index') }}"><i class='bx bx-filter icon-tbl'></i></a>
                    </div>
                    <table>
                        <thead class="thead">
                            <tr>
                                <th>Profil</th>
                                <th>Date d'entrée</th>
                                <th>Poste</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @foreach ($employes as $employe)
                            <tr>
                                <td>
                                    <img src="{{ asset($employe->images) }}" alt="">
                                    <p>{{ $employe->Nom }} {{ $employe->Prenom }}</p>
                                </td>
                                <td>{{ $employe->DatEntre }}</td>
                                <td><span class="status poste">{{ $employe->Poste }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="todo">
                    <div class="head">
                        <h3>Action</h3>
                        <a href="{{ route('admin.employes.create') }}"><i class='bx bx-plus icon-tbl' ></i></a>
                        <a href="{{ route('admin.employes.index') }}"><i class='bx bx-filter icon-tbl'></i></a>
                    </div>
                    <ul class="todo-list todo-color">
                        @foreach ($employes as $employe)
                        <li class="not-completed">
                            <p>{{ $employe->Nom }} {{ $employe->Prenom }}</p>
                            <div class="icon-container">
                                <a href="#"><i class='bx bx-printer' style='color:#228e8a'  ></i></a>
                                <a href="{{ route('admin.employes.edit', $employe->numEmp) }}"><i class='bx bx-edit btn-modif' style='color:#0a6202'  ></i></a>
                                <form id="deleteForm-{{ $employe->numEmp }}" action="{{ route('admin.employes.destroy', $employe->numEmp) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="button" style="border: none; background: none; cursor: pointer;" onclick="openModal({{ $employe->numEmp }})">
                                        <i class='bx bx-trash btn-suppr' style='color:#d01616'></i>
                                    </button>
                                </form>
                                </div>
                                
                                <!-- Boîte de dialogue -->
                                <div id="confirmationModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close" onclick="closeModal()">&times;</span>
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

        </main>
    </section>

@endsection


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

            <script>
               function openModal(numEmp) {
                var modal = document.getElementById("confirmationModal");
                modal.style.display = "block";
                window.numEmpToDelete = numEmp; // Stocker l'ID de l'employé à supprimer
            }

            function closeModal() {
                var modal = document.getElementById("confirmationModal");
                modal.style.display = "none";
            }

            function confirmDeletion() {
                // Soumettre le formulaire pour supprimer l'employé
                document.getElementById('deleteForm-' + window.numEmpToDelete).submit();
            }

            </script>