 <div class="modal fade" id="calendarform1" tabindex="-1" role="dialog" aria-labelledby="calendarform1" aria-hidden="true" >
    <div class="modal-dialog" role="document">


            <div class="modal-content" id="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"align="center">Новое что-то</h4>
                </div>
                 {!! csrf_field() !!}

                    <form  method="POST"  id="calendarform">
                       

                <div class="modal-body">

                    

 <div class="col-4-md">
                        <div class="form-group">
                     <p><label for="event_type">Тип события</label>
        <input type="text" class="form-group" id="event_type" name="event_type" value=""></p>
    </div>
</div>
	<div class="col-4-md">
   	 <div class="form-group">
        <p><label for="event_start">Начало</label>
        <input type="text" name="event_start" id="datetimepicker"/></p>
    </div>
</div>


         <div class="col-4-md">
          <div class="form-group">
        <p><label for="event_end">Конец</label>
        <input type="text" name="event_end" id="datetimepicker1"/></p>
    </div>
</div>

<div class="col-4-md">
          <div class="form-group">
          	<p><label for="structure">Помещение</label>
 <select class="form-group" name="room" id="room" data-id="1">
                                <option value="">Помещение</option>
                        @foreach($structures as $structure)
                           <option value="{{$structure->id}}" data-othervalue="{{$structure->name}}">{{$structure->name}}</option>

                                @endforeach
                            </select>
          	</div>
          </div>

<div class="col-4-md">
          <div class="form-group">
          	<p><label for="structure">Исполнитель</label>
                    <input type="text" name="own_event_end" id="datetimepicker2"/></p>
 
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



   



