<!-- ========================================= SIDE BAR ======================================== -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<section id="sidebar">
    <a href="#" class="brand">
        {{-- <i class='bx bxs-smile'></i> --}}
        <img class="imgLogo" src="{{ asset('assets/images/logo1.png') }}" alt="">
        
        {{-- @foreach ($entreprises as $entreprise)
            <span class="text txt-logo">{{ $entreprise->NomEntreprise }}</span>
        @endforeach --}}

        <span class="text txt-logo">REGION ANOSY</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="">
                <i class='bx bx-book-bookmark'></i>
                <span class="text txt-page">Page</span>
            </a>
        </li>
        <li>
            <a href="{{ route('app_accueil') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="text txt-page">Home</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.employes.index') }}" class="employe">
                <i class='bx bxs-group' ></i>
                <span class="text">Employees</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.genereqrs.index') }}">
                <i class='bx bx-qr-scan' ></i>
                <span class="text">Générer QR</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.calendrier.index') }}">
                <i class='bx bx-calendar'></i>
                <span class="text">Calendrier 1</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.calendrier2.index') }}">
                <i class='bx bx-calendar'></i>
                <span class="text">Calendrier 2</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.pointage.index') }}">
                <i class='bx bx-street-view'></i>
                <span class="text">Pointages</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.permissions.index') }}">
                <i class='bx bx-universal-access'></i>
                <span class="text">Permission</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-briefcase-alt-2' ></i>
                <span class="text">Mission</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.conges.index') }}">
                <i class='bx bx-copyright'></i>
                <span class="text">Conges</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="{{ route('admin.parametres.index') }}">
                <i class='bx bxs-cog' ></i>
                <span class="text">Paramètres</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout">
                <i class='bx bx-log-out-circle'></i>
                <span class="text">Déconnexion</span>
            </a>
        </li>
    </ul>
</section>

<!-- ========================================= CONTENT ======================================== -->
<section id="content">
    <!-- ----------------------  Navbar ------------------ -->
    <nav>
        <i class='bx bx-menu menu' ></i>
        <a href="#" class="nav-link">Categories</a>
        <form action="#">
            <div class="form-input">
                <input name="Rechercher" type="search" placeholder="Recherche...">
                <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
        </form>

        <div class="theme-toggler">
            <a href="#">
                <i class='bx bxs-brightness-half them' ></i>
            </a>
        </div>

        <a href="{{ route('shownotification') }}" class="notification" id="notificationBtn">
            <i class='bx bxs-bell'></i>
            <span class="num">0</span>
        </a>
        

        <!-- /////////////////////// PROFILE ////////////////////////// -->
        <div class="right">
            <div class="top">
                <div class="profile">
                    <div class="info">
                        <p class="admin-nom"><b>Frederique</b></p>
                        <small class="text-muted admin-grad">Admin</small>
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="profile">
            <img src="{{ asset('assets/images/admin.jpg') }}">
        </a>

    </nav>

</section>



<script>
        document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour récupérer le total des notifications
    function fetchTotalNotificationCount() {
        let total = 0;

        // Récupérer les notifications de permissions
        fetch('/notifications/count')
            .then(response => response.json())
            .then(data => {
                total += data.count; // Ajouter le nombre de permissions

                // Récupérer les notifications de congés
                fetch('/notifications/congeCount')
                    .then(response => response.json())
                    .then(data => {
                        total += data.count; // Ajouter le nombre de congés
                        
                        // Mettre à jour le compteur de notifications global
                        document.querySelector('.notification .num').textContent = total;
                    })
                    .catch(error => console.error('Erreur lors de la récupération des congés:', error));
            })
            .catch(error => console.error('Erreur lors de la récupération des permissions:', error));
    }

    // Appel de la fonction au chargement de la page
    fetchTotalNotificationCount();

    });

</script>



