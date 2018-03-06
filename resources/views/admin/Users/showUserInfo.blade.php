<!-- Modal -->
<div class="modal fade" id="showuserinfo" role="dialog">
    <div class="modal-dialog">


        <div class="modal-content" id="userinfo-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"align="center">Информация о пользователе</h4>
            </div>


                <div class="modal-body">



                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Имя:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="infoname"
                                    value="{{ old('name') }}"
                                    readonly
                            >

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Фамилия:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="infosurname"
                                    value="{{ old('surname') }}"
                                   readonly
                            >

                            </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Логин:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="infologin"
                                    value="{{ old('login') }}"
                                    readonly
                            >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Структура:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="infostruktura"
                                    value="{{ old('struktura') }}"
                                   readonly
                            >

                        </div>
                    </div>

                    <div class="form-group row">

                            <label class="col-lg-4 col-form-label text-lg-right">
                                Тип пользователя:
                            </label>
                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="infousertype"
                                    name="infousertype"
                                    value="{{ old('struktura') }}"
                                    readonly
                            >
                        </div>

                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">E-mail:</label>

                        <div class="col-lg-6">
                            <input
                                    type="email"
                                    class="form-control"
                                   id="infoemail"
                                    value="{{ old('email') }}"
                                    readonly
                            >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Город:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control"
                                    id="infopilseta"
                                    value="{{ old('pilseta') }}"
                                    readonly
                            >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Улица:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control"
                                   id="infoiela"
                                    value="{{ old('iela') }}"
                                    readonly
                            >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Дом:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('house') ? ' is-invalid' : '' }}"
                                    id="infohouse"
                                    value="{{ old('house') }}"
                                    readonly
                            >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Квартира:</label>

                        <div class="col-lg-6">
                            <input
                                    type="number"
                                    class="form-control"
                                    id="inforoom"
                                    value="{{ old('room') }}"
                                    readonly
                            >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Телефон 1:</label>

                        <div class="col-lg-6">
                            <input
                                    type="tel"
                                    class="form-control"
                                    id="infophone1"
                                    value="{{ old('phone1') }}"
                                    readonly
                            >

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Телефон 2:</label>

                        <div class="col-lg-6">
                            <input
                                    type="tel"
                                    class="form-control"
                                    id="infophone2"
                                    value="{{ old('phone2') }}"
                                    readonly
                            >

                        </div>
                    </div>




                </div>

                <div class="modal-footer" style="text-align: center;">


                    <button type="button" class="btn btn-danger" data-dismiss="modal" style= "alignment: center;">Закрыть</button>

                </div>


        </div>

    </div>
</div>



