@extends('base')

@section('title', "CALENDRIER")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>

            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Employees</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="{{ route('admin.calendrier2.index') }}">Page Calendrier</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-imprimer-ajout">
                    <a href="" class="btn-download">
                        <i class='bx bx-time'></i>
                        <span class="text" id="currentTime">
                            00 : 00 : 00
                        </span>
                        <script>
                            function updateTime() {
                            const timeElement = document.getElementById('currentTime'); // Sélection de l'élément
                            const now = new Date(); // Obtient l'heure actuelle

                            let hours = now.getHours().toString().padStart(2, '0');  // Heures avec un format 2 chiffres
                            let minutes = now.getMinutes().toString().padStart(2, '0');  // Minutes avec un format 2 chiffres
                            let seconds = now.getSeconds().toString().padStart(2, '0');  // Secondes avec un format 2 chiffres

                            // Format de l'heure
                            const currentTime = `${hours} : ${minutes} : ${seconds}`;

                            // Mise à jour de l'élément <li> avec l'heure actuelle
                            timeElement.textContent = currentTime;
                            }

                            // Mettre à jour l'heure toutes les secondes
                            setInterval(updateTime, 1000);

                            // Appel initial pour afficher l'heure immédiatement
                            updateTime();
                        </script>
                    </a>
                </div>
            </div>

            {{-- ---------- Mon Calendrier ----------- --}}
            <div class="table-date">
                <div class="todo">

                    <div class="container-cld">
                        <div class="left">
                            <div class="calendar">
                
                                <div class="month">
                                    <i class="fa fa-angle-left prev"></i>
                                    <!-- <div class="date">novembre 2024</div> -->
                                    <div class="date"></div>
                                    <i class="fa fa-angle-right next"></i>
                                </div>
                
                                <div class="weekdays">
                                    <div class="day">Dimanche</div>
                                    <div class="day">Lundi</div>
                                    <div class="day">Mardi</div>
                                    <div class="day">Mercredi</div>
                                    <div class="day">Jeudi</div>
                                    <div class="day">Vendredi</div>
                                    <div class="day">Samedi</div>
                                </div>
                                
                                <div class="days">
                                    <!-- nous ajouterons des jours avec JS -->
                                </div>
                
                                <div class="goto-today">
                                    <div class="goto">
                                        <input type="text" placeholder="mm/yyyy" class="date-input">
                                        <button class="goto-btn">Rechercher</button>
                                    </div>
                                    <button class="today-btn">Aujourd'hui</button>
                                </div>
                
                            </div>
                        </div>
                
                        <div class="right">
                
                            <div class="today-date">
                                <div class="event-day semaine-aujordhuit">Wed</div>
                                <div class="event-date date-aujordhuit">16 Novembre 2024</div>

                                {{-- ============ Script Pour La Date Aujourd'huit ========= --}}
                                <script>
                                    // Fonction pour formater la date en "jour Mois Année"
                                    function formatDate(date) {
                                        const jours = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
                                        const mois = [
                                            "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                                            "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
                                        ];
                                
                                        const jour = date.getDate();
                                        const moisIndex = date.getMonth();
                                        const annee = date.getFullYear();
                                
                                        return `${jour} ${mois[moisIndex]} ${annee}`;
                                    }
                                
                                    // Sélectionnez les divs
                                    const dateAujourdHuit = document.querySelector('.date-aujordhuit');
                                    const eventDay = document.querySelector('.semaine-aujordhuit');
                                
                                    // Récupérez la date d'aujourd'hui
                                    const aujourdHui = new Date();
                                
                                    // Mettez à jour le contenu du div avec la date formatée
                                    dateAujourdHuit.innerHTML = formatDate(aujourdHui);
                                
                                    // Affichez le jour actuel (ex: "Lundi")
                                    const jours = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
                                    const jourActuel = jours[aujourdHui.getDay()]; // 0 = Dimanche, 1 = Lundi, etc.
                                    eventDay.innerHTML = jourActuel; // Met à jour le contenu du div avec le jour actuel
                                </script>
                            </div>
                
                            <div class="events">
                                @foreach($events as $event)
                                    <div class="event">
                                        <div class="title">
                                            <span class="event-title">{{ $event->Titre }}</span>
                                        </div>
                                        <div class="event-description">{{ $event->Description }}</div>
                                        <span class="event-time">du {{ $event->DateDebu }} au {{ $event->DateFin }} à {{ $event->TimeDebu }} - {{ $event->TimeFin }}</span>
                                    </div>
                                    <button class="btn-suppr-event">Supprimer</button>
                                @endforeach
                            </div>                          
                
                            <!-- <div class="add-event-wrapper active"> -->
                            <div class="add-event-wrapper">
                            {{-- <div class=""> --}}
                                <div class="add-event-header">
                                    <div class="title">PAGE D'AJOUT</div>
                                    <i class="fas fa-times close"></i>
                                </div>

                                <form id="event-form" method="POST" action="{{ route('admin.calendrier2.store') }}">
                                    @csrf
                                
                                    <div class="add-event-body">
                                        <div class="add-event-input">
                                            <input name="Titre" type="text" placeholder="Titre" class="event-name">
                                        </div>
                                        <div class="add-event-input">
                                            <input name="Description" type="text" placeholder="Description" class="event-description">
                                        </div>
                                        <div class="add-event-input">
                                            <input name="DateDebu" type="date" class="event-date-debu">
                                        </div>
                                        <div class="add-event-input">
                                            <input name="DateFin" type="date" class="event-date-fin">
                                        </div>
                                        <div class="add-event-input">
                                            <input name="TimeDebu" type="time" class="event-time-from">
                                        </div>
                                        <div class="add-event-input">
                                            <input name="TimeFin" type="time" class="event-time-to">
                                        </div>
                                    </div>
                                    <div class="add-event-footer">
                                        <button type="submit" class="add-event-btn">Ajouter</button>
                                    </div>
                                </form>
                                
                            </div>
                
                        </div>
                        <button class="add-event">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>
            </div>

            {{-- -------- Mon Tbl d'Affichage --------- --}}
            <div class="table-date">
                <div class="todo">

                    <ul class="todo-list todo-color">
                        @foreach($events as $event)
                        <p>Horodatage : {{ $event->created_at }}</p>
                            <li class="permission">
                                <div class="todo-item">
                                    <img src="{{ asset('assets/images/user_tbl_even.png') }}" alt="" class="imgTodo">
                                    <div class="txt-left">
                                        <p id="p">{{ $event->Titre }}</p>
                                        <p>{{ $event->Description }}</p>
                                        <p>le {{ $event->DateDebu }}</p>
                                        <p>au {{ $event->DateFin }}</p>
                                        <p>à {{ $event->TimeDebu }}</p>
                                        <p>au {{ $event->TimeFin }}</p>
                                    </div>
                                </div>
                                <div class="QR-icon">
                                    <div class="icon-container icon-del-mod-qr">
                                        <form action="{{ route('admin.calendrier.destroy', $event->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border: none; background: none; cursor: pointer;">
                                                <a href="#"><i class='bx bx-trash delt-qr' style='color:#d01616'  ></i></a>
                                            </button>
                                        </form>
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





