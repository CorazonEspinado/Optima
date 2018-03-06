<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->


<!-- Modal -->
<div class="modal fade" id="edituserinfo" role="dialog">
    <div class="modal-dialog">


        <div class="modal-content" id="edituser-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"align="center">Изменение данных пользователя</h4>
            </div>
            <form action="{{'/users/UpdateUser'}}" method="POST" id="edituserform">

            <div class="modal-body">



                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Имя:</label>

                    <div class="col-lg-6">
                        <input
                                type="text"
                                class="form-control"
                                id="editname"
                                name="editname"
                                value="{{ old('editname') }}"

                        >

                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Фамилия:</label>

                    <div class="col-lg-6">
                        <input
                                type="text"
                                class="form-control"
                                id="editsurname"
                                name="editsurname"
                                value="{{ old('editsurname') }}"

                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Логин:</label>

                    <div class="col-lg-6">
                        <input
                                type="text"
                                class="form-control"
                                id="editlogin"
                                name="editlogin"
                                value="{{ old('editlogin') }}"

                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Структура:</label>
                    <div class="col-lg-6">
                        <select class="form-control" name="editstruktura" id="editstruktura" data-id="1">
                            <option value="">Выберите структуру</option>
                            @foreach($structures as $structure)
                                <option value="{{$structure->name}}" data-othervalue="{{$structure->name}}">{{$structure->name}}
                                </option>

                            @endforeach
                        </select>
                        <div class="col-lg-6">

                            @if ($errors->has('struktura'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('struktura') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group row">

                    <label class="col-lg-4 col-form-label text-lg-right">
                        Тип пользователя:
                    </label>
                    <div class="col-lg-6">
                        <select id="editusertype" class="form-control{{ $errors->has('usertype') ? ' is-invalid' : '' }}" name="editusertype">
                            <option value="">Выберите тип пользователя</option>
                            <option value="Администратор">Администратор</option>
                            <option value="Управляющий">Управляющий</option>
                            <option value="Пользователь">Пользователь</option>

                        </select>
                        @if ($errors->has('editusertype'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('editusertype') }}</strong>
                            </div>
                        @endif
                    </div>

                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">E-mail:</label>

                    <div class="col-lg-6">
                        <input
                                type="email"
                                class="form-control"
                                id="editemail"
                                name="editemail"
                                value="{{ old('editemail') }}"

                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Город:</label>

                    <div class="col-lg-6">
                        <input
                                type="text"
                                class="form-control"
                                id="editpilseta"
                                 name="editpilseta"
                                value="{{ old('editpilseta') }}"

                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Улица:</label>

                    <div class="col-lg-6">
                        <input
                                type="text"
                                class="form-control"
                                id="editiela"
                                name="editiela"
                                value="{{ old('iela') }}"

                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Дом:</label>

                    <div class="col-lg-6">
                        <input
                                type="text"
                                class="form-control{{ $errors->has('house') ? ' is-invalid' : '' }}"
                                id="edithouse"
                                name="edithouse"
                                value="{{ old('house') }}"

                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Квартира:</label>

                    <div class="col-lg-6">
                        <input
                                type="number"
                                class="form-control"
                                id="editroom"
                                name="editroom"
                                value="{{ old('room') }}"

                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Телефон 1:</label>

                    <div class="col-lg-6">
                        <input
                                type="tel"
                                class="form-control"
                                id="editphone1"
                                name="editphone1"
                                value="{{ old('phone1') }}"

                        >

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-4 col-form-label text-lg-right">Телефон 2:</label>

                    <div class="col-lg-6">
                        <input
                                type="tel"
                                class="form-control"
                                id="editphone2"
                                name="editphone2"
                                value="{{ old('phone2') }}"

                        >

                    </div>
                </div>
<input type="hidden" name="editid" id="editid">



            </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-success  pull-left" value="Сохранить">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Отменить</button>

                </div>

            </form>


        </div>

    </div>
</div>

