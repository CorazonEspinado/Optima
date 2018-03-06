<!-- Modal -->

    <div class="modal fade" id="addNewStructure" tabindex="-1" role="dialog" aria-labelledby="addNewTask" aria-hidden="true" >
    <div class="modal-dialog" id="newstructure">


        <div class="modal-content" id="structurecontent">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Новая структура</h4>
            </div>

            <form role="form" id="addStructureform" method="POST" action="{{'/structure/storeStructure'}}">
                {!! csrf_field() !!}

                <div class="modal-body">



                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Название:</label>

                        <div class="col-lg-6">
                            <input
                                    type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="structurename"
                                    id="structurename"
                                    value="{{ old('structurename') }}"
                                    required
                            >
                            @if ($errors->has('structurename'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('structurename') }}</strong>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-4 col-form-label text-lg-right">Информация:</label>

                        <div class="col-lg-6">
                           <textarea rows="5" cols="25"
                                    class="form-control{{ $errors->has('structureinfo') ? ' is-invalid' : '' }}"
                                    name="structureinfo"
                                     id="structureinfo"
                                    value="{{ old('structureinfo') }}"
                                    required
                            >
                           </textarea>

                            @if ($errors->has('structureinfo'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('structureinfo') }}</strong>
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

