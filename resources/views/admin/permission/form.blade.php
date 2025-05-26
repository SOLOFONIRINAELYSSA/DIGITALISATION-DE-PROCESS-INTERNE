@extends('base')

@section('title', "PAGE PERMISSION")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Permission</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="{{ route('admin.permissions.index') }}">Page Permission</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="">Modification</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- ********************* Table ************************* -->

            <div class="table-date">
                <div class="todo">
                    <div class="head">
                    </div>
                    <ul class="todo-list todo-color">
                        <li>
                            <div class="container-QR">
                                <form method="POST" action="{{ route('admin.permissions.store', $permission->id) }}">

                                    @csrf

                                    <div class="input1">
                                        <p>CIN de l'expéditeur</p>
                                        <input value="{{ $permission->numEmp }}" name="numEmp" type="text" placeholder="CIN de l'expéditeur" id="vid1">
                                    </div>
                                    <div class="tex-long">
                                        <div class="input1 dd2">
                                            <p>Nom du Destinateur</p>
                                            <input value="{{ $permission->NomPrenomDestinateur }}" name="NomPrenomDestinateur" type="text" placeholder="Nom du Destinateur" id="vid1">
                                        </div>
                                        <div class="input1 dd2">
                                            <p>Poste du Destinateur</p>
                                            <input value="{{ $permission->PosteDestinateur }}" name="PosteDestinateur" type="text" placeholder="Poste du Destinateur" id="vid1">
                                        </div>
                                    </div>
                                    <div class="input1">
                                        <p>Raison</p>
                                        <input value="{{ $permission->Raison }}" name="Raison" type="text" placeholder="Ex : Un voyage personnel, etc..." id="vid1">
                                    </div>
                                    <div class="input1 d2">
                                        <p>Nom de l'Organisation</p>
                                        <input value="{{ $permission->NomOrganisation }}" name="NomOrganisation" type="text" placeholder="Nom de l'Organisation" id="vid1">
                                    </div>
                                    <div class="date-lettre">
                                        <div class="input1 da2">
                                            <p>Fait le</p>
                                            <input value="{{ $permission->FaiLe }}" name="FaiLe" type="date" placeholder="Fait le" id="vid1">
                                        </div>
                                        <div class="input1 da2">
                                            <p>Date de début</p>
                                            <input value="{{ $permission->DateDebut }}" name="DateDebut" type="date" placeholder="Date de début" id="vid1">
                                        </div>
                                        <div class="input1 da2">
                                            <p>Date de fin</p>
                                            <input value="{{ $permission->DateFin }}" name="DateFin" type="date" placeholder="Date de fin" id="vid1">
                                        </div>
                                    </div>
                                    <div class="tex-long">
                                        <div class="input1 dd2">
                                            <p>Engagement</p>
                                            <textarea name="Engagement" placeholder="Mentionner ce que vous ferez pour compenser votre absence, si applicable" id="" cols="30" rows="10">{{ $permission->Engagement }}</textarea>
                                        </div>
                                        <div class="input1 dd2">
                                            <p>Dispositions</p>
                                            <textarea name="Dispositions" placeholder="Dispositions, ajouter des détails ( Exemple: J'ai informé mes collègues et préparé le travail en avance. )" id="" cols="30" rows="10">{{ $permission->Dispositions }}</textarea>
                                        </div>
                                    </div>
                                    <button type="submit">ENREGISTRER</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </main>
    </section>

@endsection

{{-- -------------------------- Css pour la formulaire ------------------------------ --}}
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
        background: var(--color-frm-permission-bg);
        border-radius: 10px;
    }

    .tex-long{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .date-lettre{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .da2{
        width: 280px;
        gap: 10px;
    }

    .dd2{
        width: 430px;
        gap: 10px;
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
        border: 1px solid var(--color-border-frm-permission);
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

    .container-QR textarea{
        width: 100%;
        height: 70px;
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
