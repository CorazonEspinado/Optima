<div class="modal fade" id="addownevent" tabindex="-1" role="dialog" aria-labelledby="addownevent" aria-hidden="true" >
    <div class="modal-dialog" role="document">


            <div class="modal-content" id="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"align="center">Новое что-то</h4>
                </div>
                 {!! csrf_field() !!}

                    <form  method="POST"  class="owncalendarform">
                       

                <div class="modal-body">

                    

 <div class="col-4-md">
                        <div class="form-group">
                     <p><label for="event_type">Тип события</label>
        <input type="text" class="form-group" id="own_event_type" name="own_event_type" value=""></p>
    </div>
</div>
	<div class="col-4-md">
   	 <div class="form-group">
        <p><label for="event_start">Начало</label>
        <input type="text" name="own_startdate" id="datetimepicker3"/></p>
    </div>
</div>


         <div class="col-4-md">
          <div class="form-group">
        <p><label for="event_end">Конец</label>
        <input type="text" name="own_enddate" id="datetimepicker4"/></p>
    </div>
</div>

<div class="col-4-md">
          <div class="form-group">
          	<p><label for="structure">Помещение</label>
 <select class="form-group" name="own_room" id="structure" data-id="1">
                                <option value="">Помещение</option>
                        @foreach($structures as $structure)
                           <option value="{{$structure->id}}" data-othervalue="{{$structure->name}}">{{$structure->name}}</option>

                                @endforeach
                            </select>
          	</div>
          </div>

<div class="col-4-md">
          <div class="form-group">
          	<p><label for="own_name">Исполнитель:</label>
              <input type="text" name="user" data-id="{{$user->id}}" value='{{$user->name}} {{$user->surname}}' readonly=""></p>
                <input type="hidden" name="userid" value="{{$user->id}}">
 
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



   





