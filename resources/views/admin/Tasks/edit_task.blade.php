<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Modal -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog" id="123">


        <div class="modal-content" id="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" align="center">Изменение задачи</h4>
            </div>
            <form action="{{'/tasks/updateTask'}}" method="post" id="updateTask">

                <div class="modal-body" id="modalcontent">

                    <div class="col-4-md">
                        <div class="form-group">
                            <label>
                                Задача:
                            </label>
                            <textarea class="form-control" name="uzdevums" id="uzdevums"></textarea>

                        </div>
                    </div>

                    <div class="col-4-md">
                        <div class="form-group">
                            <label>
                                Исполнитель:
                            </label>
                            <select class="form-group" name="izpilditajs">
                                <option value="">Исполнитель</option>
                                @foreach($users as $user)
                                    <option value="{{$user->login}}"
                                            data-othervalue="{{$user->name}} {{$user->surname}}">{{$user->name}}
                                        &nbsp{{$user->surname}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-4-md">
                        <div class="form-group">
                            <label>
                                Срок исполнения:
                            </label>

                        </div>
                        <div class="input-group date" id="deadlineedit">
                            <input type="text" name="deadlineedit" id="datetimepicker1" class="form-control"/>


                        </div>
                    </div>

                    <input type="hidden" id="editid" name="editid">


                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-success   pull-left" value="Сохранить">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Отменить</button>

                </div>
            </form>
        </div>

    </div>
</div>

