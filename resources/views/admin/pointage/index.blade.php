@extends('base')

@section('title', "PAGE POINTAGES")

@section('container')

    <!-- --------------------- Main --------------------- -->
    <section id="content">
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>POINTAGES</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Pointage</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Page Pointage</a>
                        </li>
                    </ul>
                </div>
                <div class="btn-imprimer-ajout">
                    <a href="#" class="imprimer-tout">
                        <i class='bx bx-printer'></i>
                    </a>
                    <a href="#" class="btn-download">
                        <i class='bx bx-plus-medical'></i>
                        <span class="text">Nouveau Pointage</span>
                    </a>
                </div>
            </div>

            <!-- ************************************************ -->

            <ul class="box-info">
                <li>
                    <i class='bx bxs-notification'></i>
                    <span class="text">
                        <h3 class="txt-box-top">2830</h3>
                        <p class="txt-box-bottom">Total Présent(e)s</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-notification-off' ></i>
                    <span class="text">
                        <h3 class="txt-box-top">543</h3>
                        <p class="txt-box-bottom">Total Absent(e)s</p>
                    </span>
                </li>
            </ul>

            <!-- *********************************************** -->

            <div class="table-date">
                <div class="orber">
                    <div class="head">
                        <h3>Liste des Pointages</h3>
                        <form class="tbl-tete-droit" action="#">
                            <div class="inputDate">
                                <select class="form-control">
                                    <option>Tout les emploees</option>
                                    <option>Présent(e)s</option>
                                    <option>Absent(e)s</option>
                                </select>
                                <input class="input-rech-date-point" type="date">
                            </div>
                            <div class="icon-rechDade">
                                <i class='bx bx-search icon-tbl' ></i>
                                <i class='bx bx-filter icon-tbl'></i>
                            </div>
                        </form>
                    </div>
                    <table>
                        <thead class="thead">
                            <tr>
                                <th>Profil</th>
                                <th>Poste</th>
                                <th>Pointage</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>SG</td>
                                <td><span class="status process">Oui</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-edit icon-mod-del-pointag' style='color:#0a6202'  ></i></a>
                                        <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Jean Claude</p>
                                </td>
                                <td>REC</td>
                                <td><span class="status pending">Non</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-edit icon-mod-del-pointag' style='color:#0a6202'  ></i></a>
                                        <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>SG</td>
                                <td><span class="status process">Oui</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-edit icon-mod-del-pointag' style='color:#0a6202'  ></i></a>
                                        <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Jean Claude</p>
                                </td>
                                <td>REC</td>
                                <td><span class="status pending">Non</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-edit icon-mod-del-pointag' style='color:#0a6202'  ></i></a>
                                        <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Walle Fred</p>
                                </td>
                                <td>SG</td>
                                <td><span class="status process">Oui</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-edit icon-mod-del-pointag' style='color:#0a6202'  ></i></a>
                                        <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/images/home1.png') }}" alt="">
                                    <p>Jean Claude</p>
                                </td>
                                <td>REC</td>
                                <td><span class="status pending">Non</span></td>
                                <td>
                                    <div class="icon-container">
                                        <a href="#"><i class='bx bx-edit icon-mod-del-pointag' style='color:#0a6202'  ></i></a>
                                        <a href="#"><i class='bx bx-trash icon-mod-del-pointag' style='color:#d01616'  ></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </section>

@endsection
