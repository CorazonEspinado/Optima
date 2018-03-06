<!-- Modal -->
<!-- Modal -->

<div class="modal fade" id="addNewTask" tabindex="-1" role="dialog" aria-labelledby="addNewTask" aria-hidden="true" >
    <div class="modal-dialog" role="document">


        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title" id="exampleModalLabel" align="center">Новая задача</h5>


            </div>
            <form action="{{'/tasks/storeTask'}}" method="post" id="addTask">

                <div class="modal-body" id="newtask">

                    <div class="col-4-md">
                        <div class="form-group">
                            <label>
                                Задача:
                            </label>
                            <textarea class="form-control" name="uzdevums" id="newuzdevums"></textarea>
                        </div>
                    </div>

                    <div class="col-4-md">
                        <div class="form-group">
                            <label>
                                Исполнитель:
                            </label>
                            <select class="form-group" name="izpilditajs" id="izpilditajs" data-id="1">
                                <option value="">Исполнитель</option>
                                @foreach($users as $user)
                                    <option value="{{$user->login}}" data-othervalue="{{$user->name}} {{$user->surname}}">{{$user->name}}
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
                    </div>
                </div>

                <div class="col-4-md">
                    <div class="input-group date"  id="deadline">


                        <input type="text" name="deadline" id="datetimepicker" class="form-control"/>



                    </div>
                </div>
                <div class="col-4-md">

                </div>


                <div class="modal-footer">
                    <input type="submit" class="btn btn-success  pull-left" value="Сохранить">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Отменить</button>

                </div>
            </form>
        </div>

    </div>
</div>

