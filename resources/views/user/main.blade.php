@extends ('layouts.template')

@section ('content')


    <div class="container">
 
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="btn btn-primary" href="{{'usersrooms'}}" role="button">Календарь помещений</a>
            </li>
            
            <li class="nav-item">
                <a class="btn btn-primary" href="{{'userstasks'}}" role="button">Задачи</a>
            </li>
            

        </ul>

    </div>


    @endsection