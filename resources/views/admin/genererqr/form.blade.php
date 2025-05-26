@extends('base')

@section('title', "AJOUT CODE QR")

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
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Page Code QR</a>
                        </li>
                        <li><i class='bx bx-chevron-right' ></i></li>
                        <li>
                            <a class="active" href="#">Ajout Code QR</a>
                        </li>
                    </ul>
                </div>
                <a href="" class="annuler">
                    <i class='bx bx-x icon-annuler' ></i>
                    <span class="text">ANNULER</span>
                </a>
            </div>

            <div class="table-date">
                <div class="todo">
                    <div class="container-QR">
                        <form action="#">
                            <p>Entrer votre Nom</p>
                            <input type="text" placeholder="Nom" id="qrText">

                            <div id="imgBox">
                                <img src="" id="qrImage">
                            </div>

                            <button onclick="genererQR()">Generer QR</button>
                        </form>
                    </div>
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
        width: 400px;
        padding: 25px 35px;
        position: relative;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        border-radius: 10px;
    }

    .container-QR p{
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 8px;
    }

    .container-QR input{
        width: 100%;
        height: 50px;
        border: 1px solid #494eea;
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
