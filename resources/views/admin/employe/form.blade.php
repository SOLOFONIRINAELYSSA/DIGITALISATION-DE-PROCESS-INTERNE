@extends('base')

@section('title', $employe->exists ? "MODIFICATION EMPLOYE" : "AJOUT EMPLOYE")

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
                            <a class="active" href="{{ route('admin.employes.index') }}">Page Employees</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="{{ route('admin.employes.create') }}">Ajout Employe</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table-date">
                <div class="todo">
                    <ul class="todo-list todo-color">
                        <li>
                            <div class="container-QR">
                                <form method="POST" action="{{ $employe->exists ? route('admin.employes.update', $employe->numEmp) : route('admin.employes.store') }}" class="login__form" enctype="multipart/form-data">
                                    <div class="div-img-frm">
                                        @if($employe->exists && $employe->images)
                                            <div class="current-image">
                                                <img class="img-form" src="{{ asset($employe->images) }}" alt="Image actuelle" width="100">
                                            </div>
                                        @else
                                            <img class="img-form" src="{{ asset('assets/images/logo1.png') }}" alt="Image actuelle" width="100">
                                        @endif
                                    </div>

                                    @csrf

                                    @if ($employe->exists)
                                        @method('PUT')
                                    @endif

                                    <div class="input1">
                                        <p>Numéro CIN</p>
                                        <input type="text" placeholder="Numéro CIN" id="vid1" value="{{ $employe->numEmp }}" name="numEmp">
                                    </div>
                                    <div class="frm1">
                                        <div class="input1">
                                            <p>Nom</p>
                                            <input type="text" placeholder="Nom" id="vid2" value="{{ $employe->Nom }}" name="Nom">
                                        </div>
                                        <div class="input1">
                                            <p>Prenom</p>
                                            <input type="text" placeholder="Prenom" id="vid3" value="{{ $employe->Prenom }}" name="Prenom">
                                        </div>
                                        <div class="input1">
                                            <p>Sexe</p>
                                            <input type="text" placeholder="Sexe" id="vid4" value="{{ $employe->Sexe }}" name="Sexe">
                                        </div>
                                        <div class="input1">
                                            <p>Naissance</p>
                                            <input type="date" placeholder="Naissance" id="vid5" value="{{ $employe->Naissance }}" name="Naissance">
                                        </div>
                                        <div class="input1">
                                            <p>Adresse</p>
                                            <input type="text" placeholder="Adresse" id="vid6" value="{{ $employe->Adresse }}" name="Adresse">
                                        </div>
                                    </div>
                                    <div class="frm1">
                                        <div class="input1">
                                            <p>N° Téléphone</p>
                                            <input type="text" placeholder="N° Téléphone" id="vid7" value="{{ $employe->Numero }}" name="Numero">
                                        </div>
                                        <div class="input1">
                                            <p>Email</p>
                                            <input type="email" placeholder="Email" id="vid8" value="{{ $employe->Email }}" name="Email">
                                        </div>
                                        <div class="input1">
                                            <p>Poste</p>
                                            <input type="text" placeholder="Poste" id="vid9" value="{{ $employe->Poste }}" name="Poste">
                                        </div>
                                        <div class="input1">
                                            <p>Date d'entrée</p>
                                            <input type="date" placeholder="Date d'entrée" id="vid10" value="{{ $employe->DatEntre }}" name="DatEntre">
                                        </div>
                                        <div class="input1">
                                            <div class="input1">
                                                <p>Ville</p>
                                                <input type="text" placeholder="Ville" id="vid13" value="{{ $employe->Ville }}" name="Ville">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="frmBottom">
                                        <div class="div-gauche-input">
                                            <div class="input1">
                                                <p>Code Postal</p>
                                                <input class="input" type="text" placeholder="Code Postal" id="vid12" value="{{ $employe->Postal }}" name="Postal">
                                            </div>
                                            <div class="input1">
                                                <p>Photo</p>
                                                <input class="inputImg form-control" type="file" placeholder="Photo" id="vid14" value="{{ $employe->images }}" name="images">
                                            </div>
                                        </div>
                                        <div class="div-droid-region">
                                            {{-- <p>Entreprise</p>
                                            <select class="form-control" id="vid11" name="CodeEntreprise">
                                                @foreach($entreprises as $entreprise)
                                                    <option value="{{ $entreprise->CodeEntreprise }}"
                                                        {{ (isset($employe) && $entreprise->CodeEntreprise == $employe->CodeEntreprise) ? 'selected' : '' }}>
                                                        {{ $entreprise->NomEntreprise }}
                                                    </option>
                                                @endforeach
                                            </select> --}}
                                        </div>
                                    </div>

                                    <button type="submit" onclick="genererQR()">
                                        @if ($employe->exists)
                                            <i class='bx bx-edit-alt'></i> MODIFIER
                                        @else
                                            <i class="ri-add-line"></i> ENREGISTRER
                                        @endif
                                    </button>

                                    {{-- <button type="submit" onclick="genererQR()">ENREGISTRER</button> --}}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </main>
    </section>

@endsection

<style>
    *{
        padding: 0;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }

    .container-QR{
        width: 100%;
        padding: 10px 35px;
        position: relative;
        top: 100%;
        left: 50%;
        transform: translate(-50%, 0%);
        background: var(--color-frm-employe-bg);
        border-radius: 10px;
    }

    .frm1{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }
    .frmBottom{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .div-gauche-input{
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-QR p{
        font-weight: 600;
        font-size: 15px;
    }

    .div-img-frm{
        display: none;
    }

    .container-QR input{
        width: 100%;
        height: 45px;
        border: 1px solid var(--color-border-frm-employe);
        background: var(--color-bg-input-frm-employe);
        outline: 0;
        padding: 10px;
        margin: 5px 0 15px;
        border-radius: 5px;
    }

    .container-QR .input{
        width: 90%;
        height: 45px;
        border: 1px solid #494eea;
        outline: 0;
        padding: 10px;
        margin: 10px 0 20px;
        border-radius: 5px;
    }

    .container-QR .inputImg{
        height: 45px;
        border: 0px solid #494eea;
        outline: 0;
        padding: 10px;
        margin: 10px 0 20px;
        border-radius: 5px;
    }

    .container-QR button{
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
