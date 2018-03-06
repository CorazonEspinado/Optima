@extends ('layouts.template')
@include('admin.users.adduser')
@include('admin.users.passchanged')
@include ('admin.users.showuserinfo')
@include ('admin.users.edituser')



@section ('content')
    <script src="{{asset('js/admin/users.js')}}"></script>
    <script src="{{asset('js/admin/usertypes.js')}}"></script>





  <div class="row">
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Пользователи </h4>
        </div>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="addusers">Добавить пользователя</button>
        <div class="panel-body">
            <table id="user_table" class="table table-striped">

                <thead>
                <tr align="center">
                    <th>Id</th>
                    <th>Vards</th>
                    <th>Uzvards</th>
                    <th>Login</th>
                    <th>Struktura</th>
                    <th>Usertype</th>
                    <th>Адресс почты</th>
                   <th>Информация</th>

                </tr>
                </thead>
                <tbody id="user_info">


                </tbody>
            </table>
        </div>
    </div>
</div>

  </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @endsection

@section ('script')




    @endsection



