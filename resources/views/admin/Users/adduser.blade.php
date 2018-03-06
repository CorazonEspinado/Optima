






    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" id="123">


            <div class="modal-content" id="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"align="center">Новый пользователь</h4>
                </div>

                    <form role="form" id="adduser" method="POST" action="{{'/users/storeUsers'}}">
                        {!! csrf_field() !!}

                <div class="modal-body">

                    {!! csrf_field() !!}

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Имя:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                            >
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Фамилия:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                    name="surname"
                                    value="{{ old('surname') }}"
                                    required
                            >

                            @if ($errors->has('surname'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Логин:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}"
                                    name="login"
                                    value="{{ old('login') }}"
                                    required
                            >

                            @if ($errors->has('login'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('login') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Структура:</label>
                        <div class="col-lg-6">
                        <select class="form-control" name="userstruktura" id="userstruktura" data-id="1">
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
                            <select id="select_type" class="form-control{{ $errors->has('usertype') ? ' is-invalid' : '' }}" name="usertype">
                                <option value="">Выберите тип пользователя</option>
                                <option value="Администратор">Администратор</option>
                                <option value="Пользователь">Пользователь</option>

                            </select>
                            @if ($errors->has('usertype'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('usertype') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">E-mail:</label>

                        <div class="col-lg-6">
                            <input
                                    type="email"
                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                            >

                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Город:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('pilseta') ? ' is-invalid' : '' }}"
                                    name="pilseta"
                                    value="{{ old('pilseta') }}"
                                    required
                            >

                            @if ($errors->has('pilseta'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('pilseta') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Улица:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('iela') ? ' is-invalid' : '' }}"
                                    name="iela"
                                    value="{{ old('iela') }}"
                                    required
                            >

                            @if ($errors->has('iela'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('iela') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Дом:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('house') ? ' is-invalid' : '' }}"
                                    name="house"
                                    value="{{ old('house') }}"
                                    required
                            >

                            @if ($errors->has('house'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('house') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Квартира:</label>

                        <div class="col-lg-6">
                            <input
                                    type="number"
                                    class="form-control{{ $errors->has('room') ? ' is-invalid' : '' }}"
                                    name="room"
                                    value="{{ old('room') }}"
                                    required
                            >

                            @if ($errors->has('room'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('room') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Телефон 1:</label>

                        <div class="col-lg-6">
                            <input
                                    type="tel"
                                    class="form-control{{ $errors->has('phone1') ? ' is-invalid' : '' }}"
                                    name="phone1"
                                    value="{{ old('phone1') }}"
                                    required
                            >

                            @if ($errors->has('phone1'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('phone1') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Телефон 2:</label>

                        <div class="col-lg-6">
                            <input
                                    type="tel"
                                    class="form-control{{ $errors->has('phone2') ? ' is-invalid' : '' }}"
                                    name="phone2"
                                    value="{{ old('phone2') }}"
                                    required
                            >

                            @if ($errors->has('phone2'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('phone2') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Генерация пароля:</label>
                        <button type="button" class="btn btn-info" id="genpass">Пароль</button>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" readonly id="genpassword"
                                    required
                            >
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>





                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-success  pull-left" value="Сохранить">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Отменить</button>

                </div>

                </form>
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

