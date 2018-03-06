<div class="modal fade" id="editdeleteevent" tabindex="-1" role="dialog" aria-labelledby="calendarform1" aria-hidden="true" >
    <div class="modal-dialog" role="document">


            <div class="modal-content" id="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"align="center">Information</h4>
                </div>
                 {!! csrf_field() !!}

                   
                       

                <div class="modal-body">

                    

 <div class="col-4-md">
                        <div class="form-group">
                     <p><label for="event_type">Тип события</label>
        <input type="text" class="form-group" id="eventtypedelete" name="event_type" value=""></p>
    </div>
</div>
	<div class="col-4-md">
   	 <div class="form-group">
        <p><label for="event_start">Начало</label>
        <input type="text" name="event_start" id="eventstartdelete" readonly="" /></p>
    </div>
</div>


         <div class="col-4-md">
          <div class="form-group">
        <p><label for="event_end">Конец</label>
        <input type="text" name="event_end" id="eventenddelete"/></p>
    </div>
</div>

<div class="col-4-md">
          <div class="form-group">
        <p><label for="room">ID Помещения</label>
        <input type="text" name="room" id="eventroomdelete" readonly="" /></p>
    </div>
</div>
<div class="col-4-md">
          <div class="form-group">
        <p><label for="Ispolnitelj">ID Исполнителя</label>
        <input type="text" name="Ispolnitelj" id="ispolniteljdelete" readonly="" /></p>
    </div>
</div>

<input type="text" name="deleteid" id="deleteid" hidden></p>
       
                   

                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger  pull-left" id="DeleteEvent" value="Удалить">

                    <button type="button" class="btn btn-info" data-dismiss="modal">Закрыть</button>
                </div>
                
            </div>
        </div>
    </div>

