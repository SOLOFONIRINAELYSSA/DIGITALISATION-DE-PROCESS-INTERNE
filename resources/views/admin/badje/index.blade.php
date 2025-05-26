@extends('base')

@section('title', "BADJE")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>CODE QR</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Code QR</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="{{ route('admin.genereqrs.index') }}">Générer code QR</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="">Code QR de {{ $genererqr->numEmp }}</a>
                        </li>
                    </ul>
                </div>
                <a href="#" class="btn-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">IMPRIMER</span>
                </a>
            </div>

            <!-- ************************************************ -->

            <ul class="box-info">
                <li class="li">
                    <section class="sectBadje">
                        <div class="container container-badje">
                            <div class="en-tete-badje">
                                <div class="profil-badje">
                                    <img class="img-tete-badje" src="{{ $genererqr->imageqr }}" alt="">
                                </div>
                                <div class="txt-profil-badje">
                                    <h5 class="number">{{ $genererqr->numEmp }}</h5>
                                    {{-- Affichage des données employes --}}
                                    <h3 class="txt-info-badje">{{ $genererqr->employes->Nom }}</h3>
                                    <h3 class="txt-info-badje">{{ $genererqr->employes->Prenom }}</h3>
                                    <p>{{ $genererqr->employes->Poste }}</p>
                                </div>
                            </div>
                            <div class="en-pied-badje">
                                <br>
                                <div class="place-num">
                                    <h1 class="h1">Numéro : <span class="span-num">{{ $genererqr->employes->Numero }}</span></h1>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="sectBadje">
                        <div class="container container-badje">
                            <header class="header">
                                <span class="logo logo-badje">
                                    {{-- ---------- IMG Logo ---------- --}}
                                    <img class="img-badje" src="{{ asset('assets/images/logo1.png') }}" alt="">
                                    <h5 class="h5">REGION ANOSY</h5>
                                </span>
                                {{-- ---------- IMG Profil ---------- --}}
                                <img class="img-qr-badje" src="{{ asset($genererqr->employes->images) }}" alt="" class="chip">
                            </header>

                            <div class="card-details">
                                <div class="name-number">
                                    <h6>Numéro CIN</h6>
                                    <h5 class="number">{{ $genererqr->numEmp }}</h5>
                                    <h5 class="name">{{ $genererqr->employes->Nom }} {{ $genererqr->employes->Prenom }}</h5>
                                </div>
                                <div class="valid-date">
                                    <h6>Validation</h6>
                                    <h5>{{ $genererqr->employes->DatEntre }}</h5>
                                </div>
                            </div>
                        </div>
                    </section>
                </li>
            </ul>

            <!-- Zone de scan QR -->
            <div id="reader" style="width:300px; height:300px; margin-top: 20px;"></div>
            <div id="result"></div>
        </main>
    </section>

@endsection

<style>
    .en-tete-badje{
        display: flex;
        align-items: center;
        gap: 20px;
    }
    .img-tete-badje{
        width: 120px;
        height: 120px;
        object-fit: cover;
    }
    .txt-profil-badje{
        grid: 5px;
    }
    .place-num{
        width: 100%;
        height: 50px;
        box-shadow: 0 0 3px #fff;
        border-radius: 10px;
        display: flex;
        align-items: center;
        backdrop-filter: blur(10px);
    }
    .h1{
        font-size: 25px;
        font-weight: 500;
        margin-left: 13px;
        color: #aaa7a7;
    }
    .span-num{
        font-size: 25px;
        font-weight: 500;
        margin-left: 13px;
        letter-spacing: 2px;
    }
</style>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    .sectBadje{
        position: relative;
        min-height: 55vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        perspective: 1000px;
    }

    .container-badje{
        background-image: url("assets/images/bg.png");
    }

    .container-badje{
        background-size: cover;
        position: relative;
        padding: 25px;
        border-radius: 28px;
        max-width: 400px;
        width: 100%;
        background-image: url('{{ asset('assets/images/bg.png') }}');
        box-shadow: 0 5px 10px rgba(88, 88, 88, 0.1);
    }

    header, .logo-badje{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-left: 0;
    }

    .logo-badje .img-badje{
        width: 75px;
        height: 70px;
    }

    .img-qr-badje{
        width: 65px;
        height: 65px;
        border-radius: 50%;
        box-shadow: 0 0 5px #fff;
    }

    h5{
        font-size: 16px;
        font-weight: 400;
        color: #fff;
    }

    header .chip{
        width: 60px;
    }

    h6{
        color: #fff;
        font-size: 11px;
        font-weight: 400;
    }

    h5.number{
        margin-top: 4px;
        font-size: 18px;
        letter-spacing: 1px;
    }

    h5.name{
        margin-top: 20px;
    }

    .container-badje .card-details{
        margin-top: 40px;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
    }
</style>



<script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
<script>
    // Fonction appelée lorsque le QR code est scanné avec succès
    function onScanSuccess(qrMessage) {
        // Affiche le message QR dans la zone de résultat
        document.getElementById('result').innerText = `QR Code: ${qrMessage}`;

        // Envoie des données au backend Laravel
        fetch('/pointage/ajouter', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Assurez-vous que CSRF est activé
            },
            body: JSON.stringify({ numEmp: qrMessage }) // Envoie l'ID de l'employé extrait du QR code
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert("Pointage ajouté avec succès !");
            } else {
                alert("Erreur lors de l'ajout du pointage.");
            }
        })
        .catch(error => console.error('Erreur:', error));
    }

    // Fonction appelée en cas d'erreur lors du scan
    function onScanError(errorMessage) {
        console.log('Erreur de scan:', errorMessage); // Log l'erreur pour le débogage
    }

    // Initialisation du scanner QR
    var html5QrCode = new Html5Qrcode("reader"); // Crée une instance du scanner

    // Démarre le scanner
    html5QrCode.start(
        { facingMode: "environment" }, // Utilise la caméra arrière (si disponible)
        {
            fps: 10, // Fréquence de scan
            qrbox: 250 // Taille de la zone de scan
        },
        onScanSuccess, // Fonction à appeler en cas de scan réussi
        onScanError // Fonction à appeler en cas d'erreur
    );
</script>

