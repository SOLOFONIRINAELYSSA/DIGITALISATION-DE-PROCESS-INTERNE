@extends('base')

@section('title', "PAGE CONGES")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>

            <!-- ********************* TBL AFFICHAGE *********************** -->

            <div class="table-date">
                <div class="orber">
                    <div class="head">
                        <h3>Liste des conges en <span class="span-jours-conge">30</span> jours de limite</h3>
                        <form class="tbl-tete-droit" action="#">
                            <div class="inputDate">
                                <input class="input-rech-date-point" type="date">
                            </div>
                        </form>
                        <i class='bx bx-search icon-tbl' ></i>
                        <i class='bx bx-filter icon-tbl'></i>
                    </div>
                    <table>
                        <thead class="thead">
                            <tr>
                                <th>Profil</th>
                                <th>Poste</th>
                                <th>Debut de congé</th>
                                <th>Jours de conge</th>
                                <th>Reste de conge</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @foreach ($conges as $conge)
                            <tr>
                                <td>
                                <img src="{{ asset($conge->employes->images) }}" alt="">
                                <p>{{ $conge->employes->Nom }} {{ $conge->employes->Prenom }}</p>
                                </td>
                                <td>{{ $conge->employes->Poste }}</td>
                                <td>{{ $conge->dateDebut }}</td>
                                <td><span class="status jours">{{ $conge->nbrjr }}</span></td>
                                <td><span class="status total">{{ $conge->solde }}</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-detail icon-mod-del-pointag' style='color:#1f2dad'  ></i></a>
                                        <form action="{{ route('admin.conges.destroy', $conge->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" style="border: none; background: none; cursor: pointer;">
                                                   <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                            </button>
                                         </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </section>

@endsection








