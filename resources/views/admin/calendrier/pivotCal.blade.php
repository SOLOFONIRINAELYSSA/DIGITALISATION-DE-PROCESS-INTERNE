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
                            <a href="#">Calendrier</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="{{ route('admin.calendrier.index') }}">Page Calendrier</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-date">
                <div class="todo">
                    <ul class="todo-list todo-color">
                        

                        {{-- ================ Mon Css Pour Calendrier ================ --}}
                        <style>

                     .event-tooltip {
                        font-style: italic;
                        position: absolute;
                        left: -100%;
                        background-color: rgba(157, 155, 152, 0.259);
                        padding: 8px;
                        z-index: 1000;
                        display: none;
                        border-radius: 4px;
                        max-width: 190px; /* Limiter la largeur */
                        word-wrap: break-word;
                    }

                  .event-marker:hover .event-tooltip {
                        display: block;
                    }

                    .event-bubble {
                        width: 10px;
                        height: 10px;
                        background-color: red;
                        border-radius: 50%;
                        position: relative;
                        cursor: pointer;
                    }


                    .date-picker {
                    position: relative; /* Ajoutez ceci */
                    /* Ajoutez d'autres styles si nécessaire */
                }


                     /* Affichage de la boule rouge au survol */
                        .hover-red-dot:hover::after {
                            opacity: 1;
                        }


                            .wrapper {
                                max-width: 1100px;
                                margin: 15px auto;
                            }

                            /* Calendar container */
                            .container-calendar {
                                background: #ffffff;
                                padding: 15px;
                                max-width: 970px;
                                margin: 0 auto;
                                overflow: auto;
                                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
                                border-radius: 1rem;
                                display: grid;
                                gap: 5rem;
                                justify-content: space-between;
                            }

                            /* Event section styling */
                            #event-section {
                                padding: 20px;
                                background: #f5f5f5;
                                margin: 20px 0;
                                border: 1px solid #ccc;
                            }

                            .container-calendar #left h1 {
                                color: #494eea;
                                text-align: center;
                                background-color: #f2f2f2;
                                margin: 0;
                                padding: 10px 0;
                            }

                            #event-section h3 {
                                color: green;
                                font-size: 18px;
                                margin: 0;
                            }

                            #event-section input[type="date"],
                            #event-section input[type="text"] {
                                margin: 10px 0;
                                padding: 5px;
                                width: 80%;
                            }

                            #event-section button {
                                background: #494eea;
                                margin-top: 2rem;
                                width: 100%;
                                height: fit-content;
                                font-size: 1.3rem;
                                border-radius: 0.5rem;
                                color: white;
                                border: none;
                                padding: 8px 10px;
                                cursor: pointer;
                                transition: all 0.3s ease;
                            }
                            #event-section button:hover {
                                background: #595efc;
                            }

                            .event-marker {
                                position: relative;
                            }

                            .event-marker::after {
                                content: '';
                                display: block;
                                width: 6px;
                                height: 6px;
                                background-color: red;
                                border-radius: 50%;
                                position: absolute;
                                bottom: 0;
                                left: 0;
                            }


                            /* Reminder section styling */
                            #reminder-section {
                                padding: 10px;
                                background: #f5f5f5;
                                margin: 20px 0;
                                border: 1px solid #ccc;
                            }

                            #reminder-section h3 {
                                color: green;
                                font-size: 18px;
                                margin: 0;
                            }

                            #reminderList {
                                list-style: none;
                                padding: 0;
                            }

                            #reminderList li {
                                margin: 5px 0;
                                font-size: 16px;
                            }

                            /* Style for the delete buttons */
                            .delete-event {
                                background: rgb(237, 19, 19);
                                color: white;
                                border: none;
                                padding: 5px 10px;
                                cursor: pointer;
                                margin-left: 10px;
                                align-items: right;
                            }

                            /* Buttons in the calendar */
                            .button-container-calendar button {
                                cursor: pointer;
                                background: green;
                                color: #fff;
                                border: 1px solid green;
                                border-radius: 4px;
                                padding: 5px 10px;
                            }

                            /* Calendar table */
                            .table-calendar {
                                border-collapse: collapse;
                                width: 100%;
                            }

                            .table-calendar td,
                            .table-calendar th {
                                padding: 50px;
                                border: 1px solid #e2e2e2;
                                text-align: center;
                                vertical-align: top;
                            }

                            /* Date picker */
                            .date-picker.selected {
                                background-color: #f2f2f2;
                                font-weight: bold;
                                outline: 1px dashed #00BCD4;
                            }

                            .date-picker.selected span {
                                border-bottom: 2px solid currentColor;
                            }

                            /* Day-specific styling */
                            .date-picker:nth-child(1) {
                                color: red;
                                /* Sunday */
                            }

                            .date-picker:nth-child(6) {
                                color: green;
                                /* Friday */
                            }

                            /* Hover effect for date cells */
                            .date-picker:hover {
                                background-color: green;
                                color: white;
                                cursor: pointer;
                            }

                           

                            /* Header for month and year */
                            #monthAndYear {
                                text-align: center;
                                margin-top: 0;
                            }

                            /* Navigation buttons */
                            .button-container-calendar {
                                position: relative;
                                margin-bottom: 1em;
                                overflow: hidden;
                                clear: both;
                            }

                            #previous {
                                float: left;
                            }

                            #next {
                                float: right;
                            }

                            /* Footer styling */
                            .footer-container-calendar {
                                margin-top: 1em;
                                border-top: 1px solid #dadada;
                                padding: 10px 0;
                            }

                            .footer-container-calendar select {
                                cursor: pointer;
                                background: #ffffff;
                                color: #585858;
                                border: 1px solid #bfc5c5;
                                border-radius: 3px;
                                padding: 5px 1em;
                            }


                            /* <!-- -------- Style input -------- --> */
                            .wrapper .container-calendar #left #event-section .inpit{
                                display: flex;
                                gap: 2rem;
                            }

                            .wrapper .container-calendar #left #event-section .inpit .input-droit input, textarea{
                                width: 120%;
                            }

                            .wrapper .container-calendar #left #event-section .inpit .input-droit .div-textarea{
                                display: grid;
                                gap: 0.7rem;
                            }

                            .wrapper .container-calendar #left #event-section .inpit .input-droit .div-textarea{
                                margin-bottom: 1rem;
                            }

                            .wrapper .container-calendar #left #event-section .inpit .input-left div, .input-droit div{
                                margin-top: 0.5rem;
                            }

                            .wrapper .container-calendar #left #event-section .inpit .input-droit .div-textarea textarea{
                                border-radius: 0.5rem;
                                border: none;
                                border: 1px solid #494eea;
                                outline: none;
                                width: 120%;
                                height: 9.5vw;
                                padding: 0.5rem;
                            }

                            .wrapper .container-calendar #left #event-section .inpit div div{
                                width: 100%;
                            }

                            .wrapper .container-calendar #left #event-section div input{
                                width: 95%;
                                height: fit-content;
                                padding: 0.5rem;
                                border-radius: 0.5rem;
                                border: none;
                                border: 1px solid #494eea;
                                outline: none;
                            }

                            .wrapper .container-calendar #left #event-section .ensemble{
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                                gap: 2rem;
                            }

                            .wrapper .container-calendar #left #event-section .ensemble div input{
                                width: 89%;
                            }

                            /* <!-- -------- Style ensemble btn -------- --> */
                            .wrapper .container-calendar #left #event-section .ensemble-btn{
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                gap: 1.5rem;
                            }

                            .wrapper .container-calendar #left #event-section .ensemble-btn i{
                                margin-top: 1.7rem;
                                font-size: 2.5rem;
                                color: #494eea;
                                cursor: pointer;
                            }


                            /* ----------------- Style Footer ----------------- */
                            .footer-employe-du-temps{
                                display: flex;
                                align-items: center;
                                justify-content: space-between;
                            }

                            .footer-employe-du-temps .a{
                                text-decoration: none;
                                border-radius: 0.5rem;
                                color: #494eea;
                                border: 1px solid #494eea;
                                padding: 0.4rem;
                                transition: all 0.3s ease;
                            }

                            .footer-employe-du-temps .a:hover{
                                color: #fff;
                                border: 1px solid #494eea;
                                background: #595efc;
                            }





                            @media (max-width: 1024px) {
                                .wrapper .container-calendar #left #event-section .inpit{
                                    display: flex;
                                    gap: 2rem;
                                }
                            }

                            @media (max-width: 600px) {
                                #event-section {
                                    width: 32.5rem;
                                }

                                .container-calendar #left h1 {
                                    width: 32.5rem;
                                    /* background: red; */
                                }
                                
                                #reminder-section {
                                    width: 32.5rem;
                                    padding: 1.3rem;
                                }

                                #monthAndYear {
                                    text-align: center;
                                    margin-top: 0;
                                    /* background: red; */
                                    width: 32.6rem;
                                }
                                .button-container-calendar {
                                    width: 32.6rem;
                                    position: relative;
                                    margin-bottom: 1em;
                                    overflow: hidden;
                                    clear: both;
                                    /* background: red; */
                                }

                                .table-calendar td,
                                .table-calendar th {
                                    padding: 5px;
                                    border: 1px solid #e2e2e2;
                                    text-align: center;
                                    vertical-align: top;
                                }

                                .wrapper .container-calendar #left #event-section .inpit{
                                    display: grid;
                                    gap: 2rem;
                                }

                                .wrapper .container-calendar #left #event-section .ensemble{
                                    display: grid;
                                    width: 100%;
                                    gap: 2rem;
                                }

                                .wrapper .container-calendar #left #event-section .ensemble div input{
                                    width: 30rem;
                                }

                                .wrapper .container-calendar #left #event-section div input{
                                    width: 30rem;
                                    display: grid;
                                }

                                .wrapper .container-calendar #left #event-section .inpit .input-droit .div-textarea textarea{
                                    width: 30rem;
                                }

                                .wrapper .container-calendar #left #event-section .inpit .input-droit input, textarea{
                                    width: 30rem;
                                }
                            }
                            #left{
                                overflow: auto;
                            }
                        </style>

                        <body>
                            <div class="wrapper">
                                <div class="container-calendar">
                                    <div id="left">
                                        <h1>CALENDRIER</h1>
                                        <form method="POST" action="{{ route('admin.calendrier.store') }}">

                                            @csrf

                                            <div id="event-section">
                                                <div class="inpit">
                                                    <div class="input-left">
                                                        <div>
                                                            <label>Date de l'événement</label>
                                                            <input name="dateDebu" type="date" id="eventDate">
                                                        </div>
                                                        <div>
                                                            <label>Date de fin</label>
                                                            <input name="dateFin" type="date" id="finDate" placeholder="Date de fin">
                                                        </div>
                                                        <div class="ensemble">
                                                            <div>
                                                                <label>Heure de début</label>
                                                                <input name="timeDebu" type="time" id="timeDebu" placeholder="Heure de début">
                                                            </div>
                                                            <div>
                                                                <label>Heure de fin</label>
                                                                <input name="timeFin" type="time" id="timeFin" placeholder="Heure de fin">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="input-droit">
                                                        <div>
                                                            <label>Titre de l'événement</label>
                                                            <input name="titre" type="text" id="eventTitle" placeholder="Titre de l'événement">
                                                        </div>
                                                        <div class="div-textarea">
                                                            <label>Description de l'événement</label>
                                                            <textarea name="description" id="eventDescription" placeholder="Description de l'événement"></textarea>
                                                            <!-- <input type="text" id="eventDescription" placeholder="Description de l'événement"> -->
                                                        </div>
                                                    </div>
                                                </div>
                            
                                                <div class="ensemble-btn">
                                                    <button type="submit" id="addEvent" aria-label="Ajouter un événement" onclick="addEvent()">AJOUTER</button>
                                                    <a href="#right"><i class='bx bx-calendar'></i></a>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="reminder-section">
                                            {{-- <h3>Rappels</h3> --}}
                                            <!-- Liste des rappels -->
                                            {{-- <ul id="reminderList">
                                                @foreach ($calendriers as $calendrier)
                                                    <li data-event-id="{{ $calendrier->id }}">
                                                        <strong>{{ $calendrier->titre }}</strong>
                                                        {{ $calendrier->description }} le {{ $calendrier->dateDebu }} au {{ $calendrier->dateFin }} à 
                                                        {{ $calendrier->timeDebu }} au {{ $calendrier->timeFin }}
                                                        <button class="delete-event" onclick="deleteEvent({{ $calendrier->id }})">
                                                            Supprimer
                                                        </button>
                                                    </li>
                                                @endforeach
                                            </ul> --}}
                                            <ul class="todo-list todo-color">
                                                @foreach ($calendriers as $calendrier)
                                                    <li class="deja">
                                                        <div class="todo-item">
                                                            {{-- <img class="imgTodo" src="{{ asset($genererqr->employes->images) }}" alt=""> --}}
                                                            <div class="txt-left">
                                                                <div class="title-rappels">
                                                                    <strong><p id="p">{{ $calendrier->titre }}</p></strong>
                                                                </div>
                                                                <div class="description-rappels">
                                                                    <p>{{ $calendrier->description }}</p>
                                                                    le
                                                                    <p>{{ $calendrier->dateDebu }}</p>
                                                                    au
                                                                    <p>{{ $calendrier->dateFin }}</p>
                                                                    à
                                                                    <p>{{ $calendrier->timeDebu }}</p>
                                                                    au
                                                                    <p>{{ $calendrier->timeFin }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="QR-icon">
                                                            <div class="icon-container icon-del-mod-qr">
                                                                <form action="{{ route('admin.calendrier.destroy', $calendrier->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" style="border: none; background: none; cursor: pointer;">
                                                                        <i class='bx bx-trash delt-qr' style='color:#d01616'></i>
                                                                    </button>
                                                                </form>
                                                                
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="right">
                                        <div class="button-container-calendar">
                                            <button id="previous" onclick="previous()">‹</button>
                                            <button id="next" onclick="next()">›</button>
                                        </div>
                                        <h3 id="monthAndYear"></h3>
                                        <table class="table-calendar" id="calendar" data-lang="fr">
                                            <thead id="thead-month">
                                                <tr>
                                                    <th>Dim</th>
                                                    <th>Lun</th>
                                                    <th>Mar</th>
                                                    <th>Mer</th>
                                                    <th>Jeu</th>
                                                    <th>Ven</th>
                                                    <th>Sam</th>
                                                </tr>
                                            </thead>
                                            <div class="event-marker" id="" style="display: none;"></div>

                                            <tbody id="calendar-body"></tbody>
                                            <ul id="reminderList"></ul> <!-- Ajoutez cet élément pour les rappels -->
                                            <div id="eventTooltip" class="event-tooltip" style="display: none;"></div>
                                            <!--********************************** -->
                                        </table>
                                        <div class="footer-container-calendar">
                                            <div class="footer-employe-du-temps">
                                                <div>
                                                    <div class="select-date">
                                                        <form action="#">
                                                            <label for="month">Aller à : </label>
                                                            <select name="month" id="month" onchange="jump()">
                                                                <option value=1>Janvier</option>
                                                                <option value=2>Février</option>
                                                                <option value=3>Mars</option>
                                                                <option value=4>Avril</option>
                                                                <option value=5>Mai</option>
                                                                <option value=6>Juin</option>
                                                                <option value=7>Juillet</option>
                                                                <option value=8>Août</option>
                                                                <option value=9>Septembre</option>
                                                                <option value=10>Octobre</option>
                                                                <option value=11>Novembre</option>
                                                                <option value=12>Décembre</option>
                                                            </select>
                                                            <select name="year" id="year" onchange="jump()"></select>
                                                            <button class="btn-select-date" type="submit" style="border: none; background: none; cursor: pointer;">
                                                                <a href="#"><i class='bx bx-search'></i></a>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a class="a" href="#left">
                                                        <i class='bx bx-plus' ></i>
                                                        <span>Ajouter nouveau</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </body>
                    </ul>
                </div>
            </div>

        </main>
    </section>

@endsection

            <script>
                const calendriers = @json($calendriers); // Convertir les calendriers en JSON
            </script>



{{-- <style>
    .event-tooltip {
        background-color: white;
        border: 1px solid #ccc;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        max-width: 200px;
        display: none;
    }
</style> --}}