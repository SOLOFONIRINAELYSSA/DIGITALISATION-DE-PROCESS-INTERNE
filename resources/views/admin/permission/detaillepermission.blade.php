@extends('base')

@section('title', "DETAILLE PERMISSION")

@section('container')

    <section id="content">
        <main>

            <div class="table-date">
                <div class="todo">
                    <ul class="todo-list todo-color">

                        <li class="">
                            <div class="box-permission">
                                <div class="lettre">
                               
                                    <div class="en-tete">
                                        <div class="votre">
                                            <p>{{ $detailles->employes->Nom }} {{ $detailles->employes->Prenom }}</p>
                                            <p>{{ $detailles->employes->Adresse }}</p>
                                            <p>{{ $detailles->employes->Ville }} {{ $detailles->employes->Postal }}</p>
                                            <p>{{ $detailles->employes->Email }}</p>
                                            <p>{{ $detailles->employes->Numero }}</p>
                                        </div>
                                        <div class="destination">
                                            <p>À l'attention de</p>
                                            <p>{{ $detailles->NomPrenomDestinateur }}</p>
                                            <p>{{ $detailles->PosteDestinateur }}</p>
                                            <p> de la {{ $detailles->NomOrganisation }}</p>
                                        </div>
                                    </div>

                                    <div class="date">
                                        <p>{{ $detailles->FaiLe }}</p>
                                    </div>

                                    <div class="date-objectif">
                                        <div class="line-Mm-Mr-p"></div>

                                        <div class="objet-lettre">
                                            <p>Objet : Demande de permission pour {{ $detailles->Raison }}</p>
                                        </div>

                                        <div class="line-Mm-Mr-p"></div>

                                        <div class="Mm-Mr">
                                            <p>Madame, Monsieur,</p>
                                            
                                        </div>
                                    </div>

                                    <div class="line-Mm-Mr-p"></div>

                                    <div class="prgph">
                                        <div class="pr1">
                                            <p class="pr"><span>Je</span> me permets de vous adresser cette lettre pour solliciter une
                                            permission exceptionnelle pour {{ $detailles->Raison }}</p>
                                        </div>

                                        <div class="line-p"></div>

                                        <div class="pr1">
                                            <p class="pr"><span>Je</span> souhaiterais obtenir cette permission pour la période allant du {{ $detailles->DateDebut }}
                                            au {{ $detailles->DateFin }}. Pendant cette période, je m'engage à {{ $detailles->Engagement }}.</p>
                                        </div>

                                        <div class="line-p"></div>

                                        <div class="pr1">
                                            <p class="pr"><span>Je</span> vous assure que j'ai pris toutes les dispositions nécessaires pour que mes
                                            responsabilités soient couvertes durant mon absence, {{ $detailles->Dispositions }}.</p>
                                        </div>

                                        <div class="line-p"></div>

                                        <div class="pr1">
                                            <p class="pr"><span>Je</span> reste à votre disposition pour toute information complémentaire
                                                ou tout document nécessaire pour appuyer ma demande. Vous pouvez me contacter par {{ $detailles->employes->Numero }} ou
                                                envoyer de message par {{ $detailles->employes->Email }}.</p>
                                        </div>

                                        <div class="line-p"></div>

                                        <div class="pr1">
                                            <p class="pr"><span>En</span> vous remerciant de votre compréhension et de votre soutien, je
                                                vous prie d’agréer, Madame, Monsieur, l’expression de mes salutations distinguées.</p>
                                        </div>
                                    </div>


                                    <div class="signature">
                                        <div></div>
                                        <div id="signature">
                                            <div class="line-h"></div>
                                            [Signature] <br>
                                            {{ $detailles->employes->Nom }} {{ $detailles->employes->Prenom }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </main>
    </section>

@endsection


{{-- ---------------------------- Css pour lettre de permission ---------------------- --}}
<style>

    body{
        background: #e7e6e6;
    }
    .container-permission{
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 100;
    }

    .box-permission{
        width: 90%;
        height: auto;
        padding: 30px 35px 50px 40px;
        margin: 10px;
        background: #fff;
    }

    .en-tete{
        display: flex;
        justify-content: space-between;
        line-height: 1.5;
    }

    .date{
        display: flex;
        align-items: center;
    }

    .date-objectif{
        font-size: 20px;
        line-height: 2;
        margin-left: 10%;
    }

    span{
        margin-left: 10%;
    }

    .entre-obje-Mm-Mr{
        line-height: 0;
    }

    .pr{
        line-height: 1.4;
    }

    .prgph{
        font-size: 20px;
        line-height: 1;
    }

    .signature{
        line-height: 7;
        position: relative;
        margin: 10px;
        display: flex;
        justify-content: space-between;
    }

    #signature{
        line-height: 1.5;
    }

    p{
        font-size: 19px;
    }

    .line-h{
        margin-top: 20%;
    }

    .line-p{
        margin-top: 2%;
    }

    .line-Mm-Mr-p{
        margin-top: 3.5%;
    }
</style>