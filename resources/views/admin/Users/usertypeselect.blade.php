<option value="">Тип пользователя</option>
@foreach ($usertypes as $value)

<option value={{$value->usertype}}>{{$value->usertype}}</option>

    @endforeach
