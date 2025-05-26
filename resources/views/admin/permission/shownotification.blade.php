@extends('base')

@section('title', "DETAILLE NOTIFICATION")

@section('container')

<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
        #content .box-info .notification1 .num1{
        position: absolute;
        top: 16px;
        right: 19px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #f9f9f9;
        background: red;
        color: #f9f9f9;
        font-weight: 700;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        }

        #content .box-info .notification2 .num2{
        position: absolute;
        top: 16px;
        right: 19px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #f9f9f9;
        background: red;
        color: #f9f9f9;
        font-weight: 700;
        font-size: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
        }
</style>

    <!-- --------------------- Main --------------------- -->
    <section id="content">

        <main>

            <ul class="box-info">
                <li>
                    <a href="" class="notification1" id="notificationBtn1">
                        <div style="position: relative;" class="div">
                            <i class='bx bxs-bell'></i>
                            <span style="position: absolute;" class="num1">0</span>
                        </div>
                    </a>
                    <span class="text">
                        <p class="txt-box-bottom">Nouvelle permission</p>
                    </span>
                </li>

                <li>
                    <a href="#" class="notification2" id="notificationBtn2">
                        <div style="position: relative;" class="div">
                            <i class='bx bxs-bell'></i>
                            <span style="position: absolute;" class="num2">0</span>
                        </div>
                    </a>
                    <span class="text">
                        <p class="txt-box-bottom">Nouvelle congé</p>
                    </span>
                </li>
                
            </ul>

        </main>

    </section>

@endsection

{{-- *******************lien utile pour ce script jquery ci dessous**************************** --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- script notification pour permission***************************************************************** --}}
<script>
    $(document).ready(function() {
        // Fonction pour récupérer le nombre de nouvelles permissions et les afficher dans la notification
        function fetchNotificationCount() {
            $.ajax({
                url: '/notifications/count',  // Route pour obtenir le nombre
                method: 'GET',
                success: function(response) {
                    // Mettre à jour le compteur avec le nombre de nouvelles permissions
                    $('.notification1 .num1').text(response.count);
                },
                error: function() {
                    console.log('Erreur lors de la récupération des permissions');
                }
            });
        }

        // Appel de la fonction lors du chargement de la page
        fetchNotificationCount();

        // Lorsque l'utilisateur clique sur la notification, on réinitialise le compteur
        $('#notificationBtn1').on('click', function() {
            $.ajax({
                url: '/notifications/reset',  // Route pour réinitialiser le compteur
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    // Réinitialiser le compteur à 0 après consultation
                    $('.notification1 .num1').text(0);
                    console.log('Compteur réinitialisé');
                    window.location.href = "{{ route('showpermission') }}";
                },
                error: function() {
                    console.log('Erreur lors de la réinitialisation du compteur');
                }
            });
        });
    });
</script>


{{-- script notification pour conge************************************************************************ --}}
<script>
    $(document).ready(function() {
        // Fonction pour récupérer le nombre de nouvelles permissions et les afficher dans la notification
        function fetchNotificationCountConge() {
            $.ajax({
                url: '/notifications/congeCount',  // Route pour obtenir le nombre
                method: 'GET',
                success: function(response) {
                    // Mettre à jour le compteur avec le nombre de nouvelles permissions
                    $('.notification2 .num2').text(response.count);
                },
                error: function() {
                    console.log('Erreur lors de la récupération des permissions');
                }
            });
        }

        // Appel de la fonction lors du chargement de la page
        fetchNotificationCountConge();

        // Lorsque l'utilisateur clique sur la notification, on réinitialise le compteur
        $('#notificationBtn2').on('click', function() {
            $.ajax({
                url: '/notifications/congeReset',  // Route pour réinitialiser le compteur
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function() {
                    // Réinitialiser le compteur à 0 après consultation
                    $('.notification2 .num2').text(0);
                    console.log('Compteur réinitialisé');
                    window.location.href = "{{ route('showconge') }}";
                },
                error: function() {
                    console.log('Erreur lors de la réinitialisation du compteur');
                }
            });
        });
    });
</script>


{{-- **********************notification fonctionne avec suppression --}}
<script>
    $.ajax({
    url: '/admin.conges.destroy' + id,  // Suppression par AJAX
    type: 'DELETE',
    data: {
        _token: '{{ csrf_token() }}'
    },
    success: function(response) {
        if (response.success) {
            // Mettre à jour le compteur des notifications de congés
            fetchNotificationCountConge();
            alert('Employé supprimé avec succès');
        } else {
            alert('Erreur lors de la suppression');
        }
    },
        error: function() {
            alert('Erreur lors de la suppression');
        }
    });

</script>

<script>
    $.ajax({
    url: '/admin.permissions.destroy' + id,  // Suppression par AJAX
    type: 'DELETE',
    data: {
        _token: '{{ csrf_token() }}'
    },
    success: function(response) {
        if (response.success) {
            // Mettre à jour le compteur des notifications de congés
            fetchNotificationCount();
            alert('Employé supprimé avec succès');
        } else {
            alert('Erreur lors de la suppression');
        }
    },
        error: function() {
            alert('Erreur lors de la suppression');
        }
    });

</script>
{{-- *********************************************************************** --}}