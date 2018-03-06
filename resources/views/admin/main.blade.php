@extends ('layouts.template')

@section ('content')

    <div class="container">

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="btn btn-primary" href="{{'/users'}}" role="button">Управление пользователями</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="{{'/tasks'}}" role="button">Управление задачами</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary" href="{{'/structure'}}" role="button">Управление структурами</a>
            </li>

        </ul>

    </div>


    @endsection