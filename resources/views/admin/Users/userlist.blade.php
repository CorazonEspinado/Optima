
@foreach($users as $value)
    <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->surname}}</td>
        <td>{{$value->login}}</td>
        <td>{{$value->struktura}}</td>
        <td>{{$value->usertype}}</td>
        <td>{{$value->email}}</td>
        <td>
            <button class="btn btn-info btn-xs" id="view" data-id="{{$value->id}}" data-toggle="modal" data-target="#userinfo">Информация</button>
            <button class="btn btn-warning btn-xs" id="edit" disabled="disabled" data-id="{{$value->id}}">Редактировать</button>
            <button class="btn btn-danger btn-xs" id="delete"  data-id="{{$value->id}}">Удалить</button>
            <button type="button" class="btn btn-info" data-id="{{$value->id}}" id="changepassword">Изменить пароль</button>
        </td>

    </tr>

    @endforeach