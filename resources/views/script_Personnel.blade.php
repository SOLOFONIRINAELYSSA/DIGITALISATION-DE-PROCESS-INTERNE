{{-- ====================== JS Swiper ======================== --}}
<script src="{{ asset('assets/lib/swiper/swiper-bundle.min.js') }}"></script>

{{-- ================== Inoicon ===================== --}}
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

{{-- =============== Scrip pour générer im QR des frm ================ --}}
<script>

    let imgBoxAffiche = document.getElementById("imgBoxAffiche");
    let qrImageSurLien = document.getElementById("qrImageSurLien");
    let qrTextInput = document.getElementById("qrTextInput");

    function gnrQR(){
        if(qrTextInput.value.length > 0){
            qrImageSurLien.src = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + qrTextInput.value;
            imgBoxAffiche.classList.add("show-img");
        }else{
            qrTextInput.classList.add('error');
            setTimeout(()=>{
                qrTextInput.classList.remove('error');
            },1000);
        }
    }

</script>

{{-- =============== Scrip pour validation des formlr ================ --}}
<script>

    function genererQR() {
        let vid1 = document.getElementById("vid1");
        let vid2 = document.getElementById("vid2");
        let vid3 = document.getElementById("vid3");
        let vid4 = document.getElementById("vid4");
        let vid5 = document.getElementById("vid5");
        let vid6 = document.getElementById("vid6");
        let vid7 = document.getElementById("vid7");
        let vid8 = document.getElementById("vid8");
        let vid9 = document.getElementById("vid9");
        let vid10 = document.getElementById("vid10");
        let vid11 = document.getElementById("vid11");
        let vid12 = document.getElementById("vid12");
        let vid13 = document.getElementById("vid13");
        let vid14 = document.getElementById("vid14");

        if (vid1.value.trim() === "") {
            vid1.classList.add('error');
            setTimeout(() => {
                vid1.classList.remove('error');
            }, 1000);
        } else {
            vid1.classList.remove('error');
        }

        if (vid2.value.trim() === "") {
            vid2.classList.add('error');
            setTimeout(() => {
                vid2.classList.remove('error');
            }, 1000);
        } else {
            vid2.classList.remove('error');
        }

        if (vid3.value.trim() === "") {
            vid3.classList.add('error');
            setTimeout(() => {
                vid3.classList.remove('error');
            }, 1000);
        } else {
            vid3.classList.remove('error');
        }

        if (vid4.value.trim() === "") {
            vid4.classList.add('error');
            setTimeout(() => {
                vid4.classList.remove('error');
            }, 1000);
        } else {
            vid4.classList.remove('error');
        }

        if (vid5.value.trim() === "") {
            vid5.classList.add('error');
            setTimeout(() => {
                vid5.classList.remove('error');
            }, 1000);
        } else {
            vid5.classList.remove('error');
        }

        if (vid6.value.trim() === "") {
            vid6.classList.add('error');
            setTimeout(() => {
                vid6.classList.remove('error');
            }, 1000);
        } else {
            vid6.classList.remove('error');
        }

        if (vid7.value.trim() === "") {
            vid7.classList.add('error');
            setTimeout(() => {
                vid7.classList.remove('error');
            }, 1000);
        } else {
            vid7.classList.remove('error');
        }

        if (vid8.value.trim() === "") {
            vid8.classList.add('error');
            setTimeout(() => {
                vid8.classList.remove('error');
            }, 1000);
        } else {
            vid8.classList.remove('error');
        }

        if (vid9.value.trim() === "") {
            vid9.classList.add('error');
            setTimeout(() => {
                vid9.classList.remove('error');
            }, 1000);
        } else {
            vid9.classList.remove('error');
        }

        if (vid10.value.trim() === "") {
            vid10.classList.add('error');
            setTimeout(() => {
                vid10.classList.remove('error');
            }, 1000);
        } else {
            vid10.classList.remove('error');
        }

        if (vid11.value.trim() === "") {
            vid11.classList.add('error');
            setTimeout(() => {
                vid11.classList.remove('error');
            }, 1000);
        } else {
            vid11.classList.remove('error');
        }

        if (vid12.value.trim() === "") {
            vid12.classList.add('error');
            setTimeout(() => {
                vid12.classList.remove('error');
            }, 1000);
        } else {
            vid12.classList.remove('error');
        }

        if (vid13.value.trim() === "") {
            vid13.classList.add('error');
            setTimeout(() => {
                vid13.classList.remove('error');
            }, 1000);
        } else {
            vid13.classList.remove('error');
        }

        if (vid14.value.trim() === "") {
            vid14.classList.add('error');
            setTimeout(() => {
                vid14.classList.remove('error');
            }, 1000);
        } else {
            vid14.classList.remove('error');
        }
    }

</script>

{{-- ============== Scrip pour sideBar et aussi Thoble =============== --}}
<script>
    const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

    allSideMenu.forEach(item=> {
        const li = item.parentElement;

        item.addEventListener('click', function () {
            allSideMenu.forEach(i=> {
                i.parentElement.classList.remove('active');
            })
            li.classList.add('active');
        })
    });

    document.getElementById('content').style.overflow = 'scroll';

    // const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li');

    // allSideMenu.forEach(item => {
    //     item.addEventListener('click', () => {
    //         document.querySelector('#sidebar .side-menu.top li.active').classList.remove('active');
    //         item.classList.add('active');
    //     });
    // });
    // document.getElementById('content').style.overflow = 'scroll';



    // ======= TOBLE SIDE BARE =======

    const menuBar = document.querySelector('#content nav .bx.bx-menu');
    const sidebar = document.getElementById('sidebar');

    menuBar.addEventListener('click', function () {
        sidebar.classList.toggle('hide');
    })


    const searchButton = document.querySelector('#content nav form .form-input button');
    const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
    const searchForm = document.querySelector('#content nav form');

    searchButton.addEventListener('click', function (e) {
        if(window.innerWidth < 576) {
            e.preventDefault();
            searchForm.classList.toggle('show');
            if(searchForm.classList.contains('show')){
                searchButtonIcon.classList.replace('bx-search', 'bx-x');
            }else{
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
            }
        }
    })


    if(window.innerWidth < 768) {
        sidebar.classList.add('hide');
    }else if(window.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');
    }


    window.addEventListener('resize', function () {
        if(this.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }
    })

</script>


{{-- ========================== CHANGE THEME ========================= --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const themeToggler = document.querySelector(".theme-toggler");
        const body = document.body;

        // Load theme from localStorage
        if (localStorage.getItem('theme') === 'dark') {
            body.classList.add('dark-theme-variables');
        } else {
            body.classList.remove('dark-theme-variables');
        }

        // Toggle theme on button click
        themeToggler.addEventListener('click', () => {
            body.classList.toggle('dark-theme-variables');

            // Save theme preference to localStorage
            if (body.classList.contains('dark-theme-variables')) {
                localStorage.setItem('theme', 'dark');
            } else {
                localStorage.setItem('theme', 'light');
            }
        });
    });
</script>





{{-- ********************************CALENDRIER********************************** --}}
<script>
    // Définir un tableau pour stocker les événements.
    let events = [];

    // Variables pour stocker les champs de saisie d'événements et la liste de rappels.
    let eventDateInput = document.getElementById("eventDate");
    let eventTitleInput = document.getElementById("eventTitle");
    let eventDescriptionInput = document.getElementById("eventDescription");
    let reminderList = document.getElementById("reminderList");
    let finDateInput = document.getElementById("finDate");
    let timeDebuInput = document.getElementById("timeDebu");
    let timeFinInput = document.getElementById("timeFin");

    let today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    let selectYear = document.getElementById("year");
    let selectMonth = document.getElementById("month");

    // Compteur pour générer des identifiants d'événements uniques.
    let eventIdCounter = 1;

    // Fonction pour ajouter des événements.
    function addEvent() {
        let date = eventDateInput.value;
        let dateFin = finDateInput.value;
        let title = eventTitleInput.value;
        let description = eventDescriptionInput.value;
        let timeDebu = timeDebuInput.value;  // Récupérer l'heure de début
        let timeFin = timeFinInput.value;    // Récupérer l'heure de fin

        if (date && title && dateFin) {
            // Vérifiez si la date de fin est antérieure à la date de début.
            if (new Date(dateFin) < new Date(date)) {
                alert("La date de fin ne peut pas être antérieure à la date de début.");
                return;
            }

            let eventId = eventIdCounter++;

            events.push({
                id: eventId,
                date: date,
                dateFin: dateFin,
                title: title,
                description: description,
                timeDebu: timeDebu,  // Ajouter l'heure de début
                timeFin: timeFin     // Ajouter l'heure de fin
            });

            showCalendar(currentMonth, currentYear);
            clearInputs();
            displayReminders();
        }
    }

    // Fonction pour vider les champs de saisie après avoir ajouté un événement.
    function clearInputs() {
        eventDateInput.value = "";
        finDateInput.value = "";
        eventTitleInput.value = "";
        eventDescriptionInput.value = "";
    }

    // Fonction pour supprimer un événement par ID.
    function deleteEvent(eventId) {
        // Trouver l'index de l'événement avec l'ID donné.
        let eventIndex = events.findIndex((event) => event.id === eventId);

        if (eventIndex !== -1) {
            // Supprimer l'événement du tableau d'événements.
            events.splice(eventIndex, 1);
            showCalendar(currentMonth, currentYear);
            displayReminders();
        }
    }
    
    //*************************************************************************************************//
    //*****************************************************************************************************///
    // function displayReminders() {
    //     reminderList.innerHTML = "";
    //     for (let i = 0; i < events.length; i++) {
    //         let event = events[i];
    //         let eventDate = new Date(event.date);
    //         let finDate = new Date(event.dateFin);

    //         if (eventDate.getMonth() === currentMonth && eventDate.getFullYear() === currentYear 
    //             && finDate.getMonth() === currentMonth && finDate.getFullYear() === currentYear) {
    //             let listItem = document.createElement("li");
    //             listItem.innerHTML = `<strong>${event.title}</strong> ${event.description} le ${eventDate.toLocaleDateString()} au ${finDate.toLocaleDateString()} à ${event.timeDebu} au ${event.timeFin}`;

    //             let deleteButton = document.createElement("button");
    //             deleteButton.className = "delete-event";
    //             deleteButton.textContent = "Supprimer";
    //             deleteButton.onclick = function () {
    //                 deleteEvent(event.id);
    //             };

    //             listItem.appendChild(deleteButton);
    //             reminderList.appendChild(listItem);
    //         }
    //     }
    // }

    function displayReminders() {
    reminderList.innerHTML = ""; // Réinitialiser le contenu de la liste des rappels
    for (let i = 0; i < events.length; i++) {
        let event = events[i];
        let eventDate = new Date(event.date);
        let finDate = new Date(event.dateFin);

        // Vérifier si l'événement est dans le mois et l'année actuels
        if (eventDate.getMonth() === currentMonth && eventDate.getFullYear() === currentYear &&
            finDate.getMonth() === currentMonth && finDate.getFullYear() === currentYear) {
            let listItem = document.createElement("li");
            listItem.innerHTML = `<strong>${event.title}</strong> ${event.description} le ${eventDate.toLocaleDateString()} au ${finDate.toLocaleDateString()} de ${event.timeDebu} à ${event.timeFin}`;

            let deleteButton = document.createElement("button");
            deleteButton.className = "delete-event";
            deleteButton.textContent = "Supprimer";
            deleteButton.onclick = function () {
                deleteEvent(event.id); // Fonction à définir pour supprimer l'événement
                displayReminders(); // Rafraîchir la liste des rappels après suppression
            };

            listItem.appendChild(deleteButton);
            reminderList.appendChild(listItem);
        }
    }
}

    // Fonction pour générer une plage d'années pour le champ de sélection d'années.
    function generate_year_range(start, end) {
        let years = "";
        for (let year = start; year <= end; year++) {
            years += `<option value='${year}'>${year}</option>`;
        }
        return years;
    }

    // Initialiser la plage d'années dans le champ de sélection.
    let createYear = generate_year_range(1970, 2050);
    document.getElementById("year").innerHTML = createYear;

    let months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
    let days = ["Dim", "Lun", "Mar", "Mer", "Jeu", "Ven", "Sam"];

    let $dataHead = "<tr>";
    for (let dhead in days) {
        $dataHead += `<th data-days='${days[dhead]}'>${days[dhead]}</th>`;
    }
    $dataHead += "</tr>";

    document.getElementById("thead-month").innerHTML = $dataHead;

    let monthAndYear = document.getElementById("monthAndYear");
    showCalendar(currentMonth, currentYear);

    // Fonction pour naviguer vers le mois suivant.
    function next() {
        currentYear = currentMonth === 11 ? currentYear + 1 : currentYear;
        currentMonth = (currentMonth + 1) % 12;
        showCalendar(currentMonth, currentYear);
    }

    // Fonction pour naviguer vers le mois précédent.
    function previous() {
        currentYear = currentMonth === 0 ? currentYear - 1 : currentYear;
        currentMonth = currentMonth === 0 ? 11 : currentMonth - 1;
        showCalendar(currentMonth, currentYear);
    }

    // Fonction pour passer à un mois et une année spécifiques.
    function jump() {
        currentYear = parseInt(selectYear.value);
        currentMonth = parseInt(selectMonth.value) - 1; // Ajuster pour le mois (0-11)
        showCalendar(currentMonth, currentYear);
    }

    // Fonction pour afficher le calendrier.
    // function showCalendar(month, year) {
    //     let firstDay = new Date(year, month, 1).getDay();
    //     let tbl = document.getElementById("calendar-body");  // Récupération du corps du calendrier
    //     tbl.innerHTML = "";  // Réinitialiser le contenu du tableau
    //     monthAndYear.innerHTML = months[month] + " " + year;  // Afficher le mois et l'année
    //     selectYear.value = year;  // Sélection de l'année
    //     selectMonth.value = month + 1;  // Sélection du mois (attention +1 pour l'indexation correcte)

    //     let date = 1;
    //     for (let i = 0; i < 6; i++) {  // 6 semaines dans un mois
    //         let row = document.createElement("tr");

    //         for (let j = 0; j < 7; j++) {  // 7 jours par semaine
    //             if (i === 0 && j < firstDay) {
    //                 let cell = document.createElement("td");
    //                 let cellText = document.createTextNode("");
    //                 cell.appendChild(cellText);  // Cellule vide avant le premier jour du mois
    //                 row.appendChild(cell);
    //             } else if (date > daysInMonth(month, year)) {
    //                 break;  // Si le nombre total de jours dans le mois est dépassé
    //             } else {
    //                 let cell = document.createElement("td");
    //                 cell.setAttribute("data-date", date);
    //                 cell.setAttribute("data-month", month + 1);
    //                 cell.setAttribute("data-year", year);
    //                 cell.setAttribute("data-month_name", months[month]);
    //                 cell.className = "date-picker";
    //                 cell.innerHTML = `<span>${date}</span>`;  // Affichage de la date

    //                 // Mettre en surbrillance la date actuelle
    //                 if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
    //                     cell.classList.add("selected");
    //                 }

    //                 // Vérifier s'il y a des événements pour cette date
    //                 if (hasEventOnDate(date, month, year)) {
    //                     cell.classList.add("event-marker");

    //                     // Gestion de l'infobulle au survol
    //                     cell.addEventListener("mouseover", function() {
    //                         let tooltip = createEventTooltip(date, month, year);
    //                         tooltip.style.position = "absolute";
    //                         tooltip.style.zIndex = "10";
    //                         tooltip.style.left = cell.getBoundingClientRect().left + "px";
    //                         tooltip.style.top = cell.getBoundingClientRect().top + 20 + "px";
    //                         document.body.appendChild(tooltip);
    //                         cell._tooltip = tooltip;  // Stockage du tooltip pour suppression ultérieure
    //                     });

    //                     cell.addEventListener("mouseout", function() {
    //                         if (cell._tooltip) {
    //                             document.body.removeChild(cell._tooltip);  // Suppression du tooltip
    //                             delete cell._tooltip;
    //                         }
    //                     });
    //                 }

    //                 row.appendChild(cell);  // Ajout de la cellule à la rangée
    //                 date++;
    //             }
    //         }

    //         tbl.appendChild(row);  // Ajout de la rangée au tableau
    //     }

    //     displayReminders();  // Fonction pour afficher les rappels
    // }

    //*************2e code avec bulle mal placé*********************************************************
    //     function showCalendar(month, year) {
    //     let firstDay = new Date(year, month, 1).getDay();
    //     let tbl = document.getElementById("calendar-body"); 
    //     tbl.innerHTML = "";  
    //     document.getElementById("monthAndYear").innerHTML = months[month] + " " + year; 
    //     selectYear.value = year;  
    //     selectMonth.value = month + 1;  

    //     let date = 1;
    //     for (let i = 0; i < 6; i++) {  
    //         let row = document.createElement("tr");

    //         for (let j = 0; j < 7; j++) {  
    //             let cell = document.createElement("td"); // Déclaration de la cellule ici

    //             if (i === 0 && j < firstDay) {
    //                 cell.appendChild(document.createTextNode("")); 
    //                 row.appendChild(cell);
    //             } else if (date > daysInMonth(month, year)) {
    //                 break;
    //             } else {
    //                 // Configuration de la cellule
    //                 cell.setAttribute("data-date", date);
    //                 cell.setAttribute("data-month", month + 1);
    //                 cell.setAttribute("data-year", year);
    //                 cell.className = "date-picker";
    //                 cell.innerHTML = `<span>${date}</span>`; 

    //                 // Vérifier la date actuelle
    //                 if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
    //                     cell.classList.add("selected");
    //                 }

    //                 // Créer la boule pour les événements
    //                 let bubble = document.createElement("div");
    //                 bubble.className = "event-bubble";
    //                 bubble.style.display = "none"; 
    //                 bubble.style.width = "10px"; 
    //                 bubble.style.height = "10px"; 
    //                 bubble.style.backgroundColor = "red"; 
    //                 bubble.style.borderRadius = "50%"; 
    //                 bubble.style.position = "absolute"; 
    //                 bubble.style.top = "5px"; 
    //                 bubble.style.left = "5px"; 
    //                 cell.appendChild(bubble); // Ajouter la boule à la cellule

    //                 // Vérifier s'il y a des événements pour cette date
    //                 calendriers.forEach(calendriers => {
    //                     let eventDate = new Date(calendriers.dateDebu);
    //                     if (date === eventDate.getDate() && month === eventDate.getMonth() && year === eventDate.getFullYear()) {
    //                         bubble.style.display = "block"; // Affichez la boule rouge pour l'événement
    //                     }
    //                 });

    //                 row.appendChild(cell); // Ajouter la cellule à la rangée
    //                 date++; // Incrémentez la date
    //             }
    //         }
            
    //         tbl.appendChild(row); // Ajouter la rangée au tableau
    //     }

    //     displayReminders(); 
    // }

    //************ 3e code bien fonctionné**********************************************************************************//
        //     function showCalendar(month, year) {
        //     let firstDay = new Date(year, month, 1).getDay();
        //     let tbl = document.getElementById("calendar-body");
        //     tbl.innerHTML = "";  
        //     document.getElementById("monthAndYear").innerHTML = months[month] + " " + year; 
        //     selectYear.value = year;  
        //     selectMonth.value = month + 1;  

        //     let date = 1;
        //     for (let i = 0; i < 6; i++) {  
        //         let row = document.createElement("tr");

        //         for (let j = 0; j < 7; j++) {  
        //             let cell = document.createElement("td"); 
        //             cell.className = "date-picker"; // Assurez-vous que cette classe est appliquée ici

        //             if (i === 0 && j < firstDay) {
        //                 cell.appendChild(document.createTextNode("")); 
        //                 row.appendChild(cell);
        //             } else if (date > daysInMonth(month, year)) {
        //                 break;
        //             } else {
        //                 cell.setAttribute("data-date", date);
        //                 cell.setAttribute("data-month", month + 1);
        //                 cell.setAttribute("data-year", year);
        //                 cell.innerHTML = `<span>${date}</span>`; 

        //                 let bubble = document.createElement("div");
        //                 bubble.className = "event-bubble";
        //                 bubble.style.display = "none"; 
        //                 cell.appendChild(bubble); // Ajoutez la boule à la cellule

        //                 calendriers.forEach(calendrier => {
        //                     let eventDate = new Date(calendrier.dateDebu);
        //                     if (date === eventDate.getDate() && month === eventDate.getMonth() && year === eventDate.getFullYear()) {
        //                         bubble.style.display = "block"; // Affichez la boule rouge
        //                     }
        //                 });

        //                 row.appendChild(cell); 
        //                 date++; 
        //             }
        //         }
                
        //         tbl.appendChild(row); 
        //     }

        //     displayReminders(); 
        // }


        
                function showCalendar(month, year) {
        
                    let firstDay = new Date(year, month, 1).getDay();
                    let tbl = document.getElementById("calendar-body");
                        tbl.innerHTML = "";  
                        document.getElementById("monthAndYear").innerHTML = months[month] + " " + year; 
                        selectYear.value = year;  
                        selectMonth.value = month + 1;  

                        let date = 1;
                        for (let i = 0; i < 6; i++) {  
                            let row = document.createElement("tr");

                            for (let j = 0; j < 7; j++) {  
                                let cell = document.createElement("td"); 
                                cell.className = "date-picker"; 

                                if (i === 0 && j < firstDay) {
                                    cell.appendChild(document.createTextNode("")); 
                                    row.appendChild(cell);
                                } else if (date > daysInMonth(month, year)) {
                                    break;
                                } else {
                                    cell.setAttribute("data-date", date);
                                    cell.setAttribute("data-month", month + 1);
                                    cell.setAttribute("data-year", year);
                                    cell.innerHTML = `<span>${date}</span>`; 

                                    let bubble = document.createElement("div");
                                    bubble.className = "event-bubble";
                                    bubble.style.display = "none"; 
                                    cell.appendChild(bubble); // Ajoutez la boule à la cellule
                                    let tooltip = document.getElementById('eventTooltip'); // Utilise l'élément tooltip existant

                                    calendriers.forEach(calendrier => {
                                    let eventDate = new Date(calendrier.dateDebu);
                                    

                                    if (date === eventDate.getDate() && month === eventDate.getMonth() && year === eventDate.getFullYear()) {
                                        bubble.style.display = "block"; // Affiche la bulle rouge

                                        // Ajouter des événements de survol à la cellule
                                        cell.addEventListener("mouseover", function(event) {
                                            // Remplir le contenu du tooltip
                                            tooltip.innerHTML = `
                                                <strong style="color:black">${calendrier.titre}</strong><br>
                                                <strong style="color:black">Du ${calendrier.dateDebu} au ${calendrier.dateFin}</strong><br>
                                                <strong style="color:black">${calendrier.description}</strong>
                                            `;
                                            tooltip.style.display = "block"; // Affiche le tooltip

                                        // Positionner le tooltip juste au-dessus de la cellule
                                            let cellRect = cell.getBoundingClientRect();
                                            let tooltipHeight = tooltip.offsetHeight;
                                            let tooltipWidth = tooltip.offsetWidth;
                                            let cellHeight = cell.offsetHeight;
                                            let cellWidth = cell.offsetWidth;

                                            // Ajuster la position horizontale (centrer le tooltip horizontalement)
                                            tooltip.style.left = (cellRect.left + window.scrollX + (cellWidth - tooltipWidth) / 0.2) + "px";

                                            // Ajuster la position verticale pour qu'il soit juste au-dessus de la cellule
                                            tooltip.style.top = (cellRect.top + window.scrollY - tooltipHeight - 55) + "px"; // -5 pour un espace de 5px

                                                                    // Assurer que le tooltip ne soit pas trop haut (si ça déborde)
                                            if (parseInt(tooltip.style.top) < 0) {
                                                tooltip.style.top = "10px"; // Ajuste pour ne pas dépasser l'écran
                                            }
                                        });

                                        cell.addEventListener("mouseout", function() {
                                            tooltip.style.display = "none"; // Masque le tooltip lorsque la souris sort
                                        });
                                    }
                                });




                                    row.appendChild(cell); 
                                    date++; 
                                }
                            }
                            
                            tbl.appendChild(row); 
                        }

            displayReminders(); 
        }





// Exemple de fonction pour supprimer un événement
function deleteEvent(eventId) {
    events = events.filter(event => event.id !== eventId); // Filtrer pour retirer l'événement
}

// Fonctions supplémentaires comme previous(), next(), daysInMonth(), et hasEventOnDate() doivent être définies ici.



//******************************************************************************************************************************//

    
    // // Fonction pour créer une infobulle d'événement. ---------------------- ( Hover dans la table )
    // function createEventTooltip(date, month, year) {
    //     let tooltip = document.createElement("div");
    //     tooltip.className = "event-tooltip";
        
    //     // Récupérer les événements pour la date donnée
    //     let eventsOnDate = getEventsOnDate(date, month, year);
        
    //     console.log("Événements pour la date:", date, month, year, eventsOnDate); // Ajout du log pour débogage

    //     // Si aucun événement, afficher un message "Aucun événement"
    //     if (eventsOnDate.length === 0) {
    //         tooltip.innerHTML = "Aucun événement"; 
    //         return tooltip;
    //     }

    //     // Parcourir les événements pour cette date
    //     for (let i = 0; i < eventsOnDate.length; i++) {
    //         let event = eventsOnDate[i];
    //         let eventDate = new Date(event.date);
    //         let finDate = new Date(event.dateFin);
            
    //         // Construction du texte de l'événement avec le format dynamique
    //         let eventText = `<strong>${event.title}</strong> - 
    //                         ${event.description} du ${eventDate.toLocaleDateString()} 
    //                         au ${finDate.toLocaleDateString()} à 
    //                         ${event.timeDebu} au ${event.timeFin}`;

    //         // Créer un élément de paragraphe pour chaque événement
    //         let eventElement = document.createElement("p");
    //         eventElement.innerHTML = eventText;

    //         // Ajouter l'événement au tooltip
    //         tooltip.appendChild(eventElement);
    //     }

    //     return tooltip;  // Retourner l'infobulle contenant les événements
    // }


    // Fonction pour obtenir les événements d'une date spécifique
    function getEventsOnDate(date, month, year) {
        let eventsOnDate = events.filter(event => {
            let eventDate = new Date(event.date);
            return eventDate.getDate() === date &&
                eventDate.getMonth() === month &&
                eventDate.getFullYear() === year;
        });
        console.log("Événements récupérés:", eventsOnDate); // Ajout du log
        return eventsOnDate;
    }

    // Fonction pour vérifier s'il y a des événements à une date spécifique.
    function hasEventOnDate(date, month, year) {
        // On utilise le formatage de date pour la comparaison
        return getEventsOnDate(date, month, year).length > 0;
    }

    cell.addEventListener("mouseover", function() {
        let tooltip = createEventTooltip(date, month, year);
        tooltip.style.position = "absolute";
        tooltip.style.zIndex = "10";
        tooltip.style.left = cell.getBoundingClientRect().left + "px";
        tooltip.style.top = cell.getBoundingClientRect().top + 20 + "px";
        document.body.appendChild(tooltip);
        cell._tooltip = tooltip;
    });



    // Fonction pour obtenir le nombre de jours dans un mois.
    function daysInMonth(iMonth, iYear) {
        return 32 - new Date(iYear, iMonth, 32).getDate();
    }

    // Appel de la fonction showCalendar au départ pour afficher le calendrier.
    showCalendar(currentMonth, currentYear);

</script>
