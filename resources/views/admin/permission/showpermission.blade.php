@extends('base')

@section('title', "DETAILLE NOTIFICATION")

@section('container')

<meta name="csrf-token" content="{{ csrf_token() }}">


<section id="content">

    <main>

        <div class="table-date">
            <div class="todo">
                <ul class="todo-list todo-color">
                    @foreach ($permissions as $permission)
                        <li style="display: flex; align-items: center;" class="permission">
                            <div class="todo-item">
                                <div class="txt-left">
                                    <p id="p">{{ $permission->PosteDestinateur }}</p>
                                    <p>{{ $permission->NomPrenomDestinateur }}</p>

                                
                                        <p class="date-permission">{{ $permission->FaiLe }}</p>

                                </div>
                            </div>
                            <div class="QR-icon">
                                <div class="icon-container icon-del-mod-qr">
                                    <a href=""><i class='bx bx-detail' style='color:#1f2dad'  ></i></a>
                                    <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" style="border: none; background: none; cursor: pointer;">
                                            <a href="#"><i class='bx bx-trash delt-qr' style='color:#d01616'  ></i></a>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </main>
</section>

@endsection


