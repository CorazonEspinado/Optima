<div class="modal fade" id="inputinowncalendar" tabindex="-1" role="dialog" aria-labelledby="calendarform1" aria-hidden="true" >
    <div class="modal-dialog" role="document">


            <div class="modal-content" id="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"align="center">Новое в календаре</h4>
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
        <input type="text" name="own_startdate" id="datetimepicker5" readonly="" /></p>
    </div>
</div>


         <div class="col-4-md">
          <div class="form-group">
        <p><label for="event_end">Конец</label>
        <input type="text" name="own_enddate" id="datetimepicker6"/></p>
    </div>
</div>

<div class="col-4-md">
          <div class="form-group">
          	<p><label for="room">Помещение</label>
              <input type="text" name="own_room_name" id="own_room" readonly="" /></p>
             
 
          	</div>
          </div>

<div class="col-4-md">
          <div class="form-group">
          	<p><label for="ispolnitelj">Исполнитель</label>
                    <input type="text" id='user' name='user' readonly="">
                    <input type='hidden' name='userid' id='userid'>
                    <input type='hidden' name='own_room' id='ownroomid'>
                    
 
          	</div>
          </div>

                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-success  pull-left" value="Записать!">

                    <button type="button" class="btn btn-warning" data-dismiss="modal">Отменить</button>
                </div>
                </form>
            </div>
        </div>
    </div>

