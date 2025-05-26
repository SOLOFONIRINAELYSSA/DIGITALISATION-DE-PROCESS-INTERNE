<script>
    document.addEventListener('DOMContentLoaded', function() {

        console.log('Le DOM est prêt, le script fonctionne.');

        const calendar = document.querySelector(".calendar");
        const date = document.querySelector(".date");
        const daysContainer = document.querySelector(".days");
        const prev = document.querySelector(".prev");
        const next = document.querySelector(".next");
        const todayBtn = document.querySelector(".today-btn");
        const gotoBtn = document.querySelector(".goto-btn");
        const dateInput = document.querySelector(".date-input");
        const eventDay = document.querySelector(".event-day");
        const eventDate = document.querySelector(".event-date");
        const eventContainer = document.querySelector(".events");
        const addEventSubmit = document.querySelector(".add-event-btn");

        const events = @json($events);

        let today = new Date();
        let activeDay = today.getDate();
        let month = today.getMonth();
        let year = today.getFullYear();
        let moisAnnee;

        let eventsArr = [];

        const joursSemaine = [
            "Dimanche", 
            "Lundi", 
            "Mardi", 
            "Mercredi", 
            "Jeudi", 
            "Vendredi", 
            "Samedi"
        ];

        const months = [
            "Janvier",
            "Février",
            "Mars",
            "Avril",
            "Mai",
            "Juin",
            "Juillet",
            "Août",
            "Septembre",
            "Octobre",
            "Novembre",
            "Décembre",
        ];


// Fonction pour récupérer toutes les dates entre deux dates
function getDatesBetween(startDate, endDate) {
    const dates = [];
    let currentDate = new Date(startDate);

    // Boucle jusqu'à ce que currentDate dépasse endDate
    while (currentDate <= endDate) {
        dates.push(new Date(currentDate)); // Ajoute la date actuelle au tableau
        currentDate.setDate(currentDate.getDate() + 1); // Passe au jour suivant
    }

    return dates;
}

function afficherEvenementsSurCalendrier() {
    const joursCalendrier = document.querySelectorAll('.calendar .day');

    // Parcourt chaque événement
    events.forEach(event => {
        const dateEventDebut = new Date(event.DateDebu);
        const dateEventFin = new Date(event.DateFin);

        // Log pour débogage
        console.log("Événement:", event);
        console.log("Date de début:", dateEventDebut);
        console.log("Date de fin:", dateEventFin);

        // Vérifie que les dates sont valides
        if (isNaN(dateEventDebut.getTime()) || isNaN(dateEventFin.getTime())) {
            console.error('Date non valide pour l\'événement:', event);
            return; // Sort de la fonction si les dates ne sont pas valides
        }

        // Récupère toutes les dates entre DateDebu et DateFin
        const allEventDates = getDatesBetween(dateEventDebut, dateEventFin);

        // Parcourt chaque jour du calendrier
        joursCalendrier.forEach(jour => {
            const jourNumero = parseInt(jour.textContent); // Récupère le numéro du jour
            const jourDate = new Date(year, month - 1, jourNumero); // Assurez-vous que le mois est correct

            // Log des dates du calendrier
            console.log("Jour du calendrier:", jourDate.toDateString());

            // Vérifie si le jour actuel est dans l'intervalle
            if (allEventDates.some(eventDate => eventDate.toDateString() === jourDate.toDateString())) {
                console.log(`Marquage du jour ${jourNumero} (${jourDate.toDateString()}) en tant qu'événement`);
                jour.classList.add('event'); // Ajoute la classe "event" pour marquer ce jour
            } else {
                console.log(`Le jour ${jourNumero} (${jourDate.toDateString()}) n'est pas marqué`);
            }
        });
    });
}




        // Assurez-vous d'appeler la fonction après que le calendrier soit rendu
        afficherEvenementsSurCalendrier();


        const csrfToken = "{{ csrf_token() }}";


        function afficherDetailsEvenement(date) {
            eventContainer.innerHTML = '';
            const eventsFound = events.filter(event => {
                const eventDateDebut = new Date(event.DateDebu);
                const eventDateFin = new Date(event.DateFin);
                // Récupère toutes les dates entre DateDebu et DateFin
                const allEventDates = getDatesBetween(eventDateDebut, eventDateFin);
                
                // Vérifie si la date est dans l'intervalle
                return allEventDates.some(eventDate => eventDate.toDateString() === date.toDateString());
            });

            if (eventsFound.length > 0) {
                eventsFound.forEach(event => {
                    console.log("Affichage de l'événement avec l'ID :", event.id); // Ajoutez ceci pour vérifier l'ID
                    const eventHtml = `
                        <div class="event">
                            <div class="title">
                                <span class="event-title"> <i class='bx bxs-hand-right icon-list-even'></i> ${event.Titre}</span>
                            </div>
                            <div class="event-description">${event.Description}</div>
                            <span class="event-time">
                                du ${event.DateDebu} au ${event.DateFin} de ${event.TimeDebu} à ${event.TimeFin}
                            </span>
                        </div>
                    `;
                    eventContainer.insertAdjacentHTML('beforeend', eventHtml);
                });
            } else {
                eventContainer.innerHTML = '<div class="no-event">Aucun événement ce jour-là</div>';
            }
        }

        // Ajouter des événements lorsque le calendrier est affiché
        afficherEvenementsSurCalendrier();

        // Gestion des clics sur les jours du calendrier
        const jours = document.querySelectorAll('.calendar .day');
        jours.forEach(jour => {
            jour.addEventListener('click', () => {
                const date = new Date();
                date.setDate(parseInt(jour.textContent));
                afficherDetailsEvenement(date);
            });
        });

        // Fonction pour initialiser le calendrier
        function initCalendar() {
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const prevLastDay = new Date(year, month, 0);
            const prevDay = prevLastDay.getDate();
            const lastDate = lastDay.getDate();
            const day = firstDay.getDay();
            const nextDays = 7 - lastDay.getDay() - 1;

            // Affichez le mois et l'année
            date.innerHTML = `${months[month]} ${year}`;
            let days = "";

            // Affichage des jours du mois précédent
            for (let x = day; x > 0; x--) {
                days += `<div class="day prev-date">${prevDay - x + 1}</div>`;
            }

            // Affichage des jours du mois actuel
            for (let i = 1; i <= lastDate; i++) {
                let event = events.some(event => {
                    const eventDate = new Date(event.DateDebu);
                    return eventDate.getDate() === i && eventDate.getMonth() === month && eventDate.getFullYear() === year;
                });
                if (i === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                    days += `<div class="day today active ${event ? 'event' : ''}">${i}</div>`;
                } else {
                    days += `<div class="day ${event ? 'event' : ''}">${i}</div>`;
                }
            }

            // Affichage des jours du mois suivant
            for (let j = 1; j <= nextDays; j++) {
                days += `<div class="day next-date">${j}</div>`;
            }

            daysContainer.innerHTML = days;
            addDayClickListeners();
        }

        initCalendar();

        afficherDetailsEvenement(today);

        function getActiveDay() {
            if (!moisAnnee) {
                console.error("moisAnnee n'est pas défini !");
                return; 
            }

            const mois = moisAnnee.getMonth();
            const annee = moisAnnee.getFullYear();

            console.log(`Mois: ${mois + 1}, Année: ${annee}`);
        }

        // Ajout des événements sur chaque jour
        function addDayClickListeners() {
            const days = document.querySelectorAll(".calendar .day");
            days.forEach((day) => {
                day.addEventListener("click", (e) => {
                    activeDay = Number(e.target.innerHTML);
                    getActiveDay(activeDay);
                    afficherDetailsEvenement(new Date(year, month, activeDay));
                    days.forEach((d) => {
                        d.classList.remove("active");
                    });
                    e.target.classList.add("active");
                });
            });
        }



        function prevMonth() {
            month--;
            if (month < 0) {
                month = 11;
                year--;
            }
            initCalendar();
        }

        prev.addEventListener("click", function() {
            month--;
            if (month < 0) {
                month = 11;
                year--;
            }
            initCalendar();
        });

        function nextMonth() {
            month++;
            if (month > 11) {
                month = 0;
                year++;
            }
            initCalendar();
        }

        next.addEventListener("click", function() {
            month++;
            if (month > 11) {
                month = 0;
                year++;
            }
            initCalendar();
        });

        prev.addEventListener("click", prevMonth);
        next.addEventListener("click", nextMonth);

        todayBtn.addEventListener("click", function() {
            today = new Date();
            month = today.getMonth();
            year = today.getFullYear();
            initCalendar();
        });

        dateInput.addEventListener("input", (e) => {
            dateInput.value = dateInput.value.replace(/[^0-9/]/g, "");
            if (dateInput.value.length === 2) {
                dateInput.value += "/";
            }
            if (dateInput.value.length > 7) {
                dateInput.value = dateInput.value.slice(0, 7);
            }
            if (e.inputType === "deleteContentBackward" && dateInput.value.length === 3) {
                dateInput.value = dateInput.value.slice(0, 2);
            }
        });

        gotoBtn.addEventListener("click", gotoDate);

        function gotoDate() {
            const dateArr = dateInput.value.split("/");
            if (dateArr.length === 2 && dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
                month = dateArr[0] - 1;
                year = parseInt(dateArr[1], 10);
                initCalendar();
            }
        }

        gotoBtn.addEventListener("click", function() {
            const dateArr = dateInput.value.split("/");
            if (dateArr.length === 2 && dateArr[0] > 0 && dateArr[0] < 13 && dateArr[1].length === 4) {
                month = dateArr[0] - 1;
                year = parseInt(dateArr[1], 10);
                initCalendar();
            }
        });

        const addEventBtn = document.querySelector(".add-event");
        const addEventContainer = document.querySelector(".add-event-wrapper");
        const addEventCloseBtn = document.querySelector(".close");
        const addEventTitle = document.querySelector(".event-name");
        const addEventDescription = document.querySelector(".event-description");
        const addEventDateDebu = document.querySelector(".event-date-debu");
        const addEventDateFin = document.querySelector(".event-date-fin");
        const addEventFrom = document.querySelector(".event-time-from");
        const addEventTo = document.querySelector(".event-time-to");

        addEventBtn.addEventListener("click", () => {
            addEventContainer.classList.toggle("active");
        });

        addEventCloseBtn.addEventListener("click", () => {
            addEventContainer.classList.remove("active");
        });

        document.addEventListener("click", (e) => {
            if (e.target !== addEventBtn && !addEventContainer.contains(e.target)) {
                addEventContainer.classList.remove("active");
            }
        });

        addEventTitle.addEventListener("input", (e) => {
            addEventTitle.value = addEventTitle.value.slice(0, 50);
        });

        addEventFrom.addEventListener("input", formatTimeInput);
        addEventTo.addEventListener("input", formatTimeInput);

        function formatTimeInput(e) {
            e.target.value = e.target.value.replace(/[^0-9:]/g, "");
            if (e.target.value.length === 2) {
                e.target.value += ":";
            }
            if (e.target.value.length > 5) {
                e.target.value = e.target.value.slice(0, 5);
            }
        }

        // Fonction pour récupérer les événements
        function fetchEvents() {
            // Assurez-vous que le formulaire existe et est sélectionné correctement
            const form = document.querySelector('#event-form');

            if (form) {
                form.addEventListener('submit', function (event) {
                    event.preventDefault();
                    fetchEvents();
                });
            } else {
                console.error("Le formulaire n'a pas été trouvé !");
            }

            // Ajoutez l'événement de soumission ici
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                
                const formData = new FormData(form);

                // Faites une requête fetch
                fetch('{{ route('admin.calendrier.store') }}', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    // Vérifiez si la réponse est OK
                    if (!response.ok) {
                        throw new Error('Erreur dans la réponse du serveur');
                    }
                    return response.json();
                })
                .then(data => {
                    // Traitez les données reçues ici
                    console.log(data);
                    // Vous pouvez également mettre à jour l'interface utilisateur ici
                })
                .catch(error => {
                    console.error('Erreur lors de la récupération des événements:', error);
                });
            });
        }

        // Écoutez l'événement de chargement du document
        document.addEventListener('DOMContentLoaded', function () {
            fetchEvents();
        });

         const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(form);
            fetch(form.action, {
                method: 'POST',
                body: formData,
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Réinitialiser le formulaire et masquer le conteneur d'ajout
                    addEventContainer.classList.remove("active");
                    form.reset();

                    // Mettre à jour les événements
                    fetchEvents();
                } else {
                    alert("Erreur lors de l'ajout de l'événement : " + data.message);
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                alert("Une erreur s'est produite : " + error.message);
            });
        });

        function addListener() {
            const days = document.querySelectorAll(".day");
            days.forEach((day) => {
                day.addEventListener("click", (e) => {
                    activeDay = Number(e.target.innerHTML);
                    getActiveDay(activeDay);
                    updateEvents(activeDay);
                    days.forEach((d) => {
                        d.classList.remove("active");
                    });
                    e.target.classList.add("active"); 
                });
            });
        }

        function getActiveDay(date) {
            const day = new Date(year, month, date);
            const dayName = joursSemaine[day.getDay()];
            eventDay.innerHTML = dayName;
            eventDate.innerHTML = `${date} ${months[month]} ${year}`;
        }

        getActiveDay(activeDay);


        // Fonction pour afficher les événements de ce jour (Affichage pour SMS de notification)
        function updateEvents(date) {
            let events = "";
            eventsArr.forEach((event) => {
                if (date === event.day && month + 1 === event.month && year === event.year) {
                    event.events.forEach((event) => {
                        events += `
                        <div class="event">
                            <div class="title">
                                <i class="fas fa-circle"></i>
                                <h3 class="event-title">${event.title}</h3>
                            </div>
                            <div class="description">
                                <h3 class="event-description">${event.description || 'Pas de description'}</h3>
                            </div>
                            <div class="event-time">
                                <span class="event-time">du ${event.dateDebut} au ${event.dateFin} de ${event.time}</span>
                            </div>
                        </div>
                        `;
                    });
                }
            });

            // Si aucun événement n'est trouvé
            if (events === "") {
                events = `<div class="no-event"><h3>Aucun Événement</h3></div>`;
            }

            eventContainer.innerHTML = events;

            // Sauvegarder les événements lors de la mise à jour
            // saveEvents();
        }

        document.querySelector('.add-event-btn').addEventListener('click', function(event) {
            const title = document.querySelector('.event-name').value;
            const description = document.querySelector('.event-description').value;
            const startDate = document.querySelector('.event-date-debu').value;
            const endDate = document.querySelector('.event-date-fin').value;
            const startTime = document.querySelector('.event-time-from').value;
            const endTime = document.querySelector('.event-time-to').value;

            if (!title || !description || !startDate || !endDate || !startTime || !endTime) {
                event.preventDefault();
                alert('Veuillez remplir tous les champs obligatoires.');
            }
        });

        // Créons une fonction pour ajouter des événements
        addEventSubmit.addEventListener("click", (e) => {
            e.preventDefault();

            // Collecte des valeurs des champs
            const eventTitle = addEventTitle.value;
            const eventDescription = addEventDescription.value;
            const eventDateDebut = addEventDateDebu.value;
            const eventDateFin = addEventDateFin.value;
            const eventTimeFrom = addEventFrom.value;
            const eventTimeTo = addEventTo.value;

            // Vérification des champs
            if (eventTitle === "" || eventTimeFrom === "" || eventTimeTo === "" || eventDescription === "" || eventDateDebut === "" || eventDateFin === "") {
                alert("Veuillez remplir tous les champs");
                return;
            }

            if (!calendar || !date || !daysContainer || !prev || !next || !todayBtn || !gotoBtn) {
                console.error("Un ou plusieurs éléments du DOM sont manquants.");
                return;
            }

            const moisAnnee = months;
            const joursSemaine = jours;

            if (new Date(eventDateDebut) > new Date(eventDateFin)) {
                alert("La date de fin ne peut pas être antérieure à la date de début.");
                return;
            }

            // Création d'un nouvel événement
            const newEvent = {
                title: eventTitle,
                description: eventDescription,
                dateDebut: eventDateDebut,
                dateFin: eventDateFin,
                time: `${eventTimeFrom} - ${eventTimeTo}`
            };

            // Envoi des données au serveur
            const formData = new FormData();
            formData.append('title', newEvent.title);
            formData.append('description', newEvent.description);
            formData.append('dateDebut', newEvent.dateDebut);
            formData.append('dateFin', newEvent.dateFin);
            formData.append('time', newEvent.time);

            console.log(...formData.entries());

            fetch('/admin/calendrier/store', {
                method: 'POST',
                body: formData,
            })

            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur réseau');
                }
                return response.json();
            })

            .then(data => {
                if (data.success) {
                    // Réinitialiser le formulaire et masquer le conteneur
                    addEventContainer.classList.remove("active");
                    addEventTitle.value = "";
                    addEventDescription.value = "";
                    addEventFrom.value = "";
                    addEventTo.value = "";
                    addEventDateDebu.value = ""; 
                    addEventDateFin.value = ""; 

                    // Mettre à jour les événements affichés
                    fetchEvents(); 
                } else {
                    alert("Erreur lors de l'ajout de l'événement : " + data.message);
                }
            })

            .catch(error => {
                console.error('Erreur:', error);
                alert("Une erreur s'est produite : " + error.message);
            });
        });

        function convertTime(time) {
            let timeArr = time.split(":");
            let timeHour = timeArr[0];
            let timeMin = timeArr[1];
            let timeFormat = timeHour >= 12 ? "PM" : "AM";
            timeHour = timeHour % 12 || 12;
            return `${timeHour}:${timeMin} ${timeFormat}`;
        }

        // Créons une fonction pour supprimer des événements au clic
        eventContainer.addEventListener("click", (e) => {
            if (e.target.classList.contains("event")) {
                const eventTitle = e.target.querySelector(".event-title").innerText;

                // Récupérer le titre de l'événement puis rechercher dans le tableau par titre et supprimer
                eventsArr.forEach((event) => {
                    if (event.day === activeDay && event.month === month + 1 && event.year === year) {
                        event.events.forEach((item, index) => {
                            if (item.title === eventTitle) {
                                event.events.splice(index, 1);
                            }
                        });

                        // Si aucun événement ne reste ce jour-là, supprimer le jour complet
                        if (event.events.length === 0) {
                            eventsArr.splice(eventsArr.indexOf(event), 1);

                            // Après avoir supprimé le jour complet, retirer également la classe active de ce jour
                            const activeDayElem = document.querySelector(".day.active");
                            if (activeDayElem.classList.contains("event")) {
                                activeDayElem.classList.remove("event");
                            }
                        }
                    }
                });

                // Après la suppression du tableau, mettre à jour les événements
                updateEvents(activeDay);
            }
        });

        fetch(form.action, {
            method: 'POST',
            body: formData,
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur réseau');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Réinitialiser le formulaire
                form.reset();
                fetchEvents();
            } else {
                alert("Erreur lors de l'ajout de l'événement : " + data.message);
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert("Une erreur s'est produite : " + error.message);
        });

        // Sauvegarder les événements dans le stockage local
        function saveEvents() {
            localStorage.setItem("events", JSON.stringify(eventsArr));
        }

        function getEvents() {
            if (localStorage.getItem("events") === null) {
                return;
            }
            eventsArr.push(...JSON.parse(localStorage.getItem("events")));
        }

        initCalendar();
        getActiveDay();

    });
</script>