<div class="modal fade" id="inputincalendar" tabindex="-1" role="dialog" aria-labelledby="calendarform1" aria-hidden="true" >
    <div class="modal-dialog" role="document">


            <div class="modal-content" id="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"align="center">Новое в календаре</h4>
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
        <input type="text" name="event_start" id="startdate" readonly="" /></p>
    </div>
</div>


         <div class="col-4-md">
          <div class="form-group">
        <p><label for="event_end">Конец</label>
        <input type="text" name="event_end" id="calendarend"/></p>
    </div>
</div>

<div class="col-4-md">
          <div class="form-group">
          	<p><label for="room">Помещение</label>
              <input type="text" name="room" id="roomid" readonly="" /></p>
 
          	</div>
          </div>

<div class="col-4-md">
          <div class="form-group">
          	<p><label for="ispolnitelj">Исполнитель</label>
 <select class="form-group" name="ispolnitelj" id="izpilditajs" data-id="1">
                                <option value="">Исполнитель</option>
                        @foreach($users as $user)
           <option value="{{$user->id}}" data-othervalue="{{$user->name}} {{$user->surname}}">{{$user->id}}-{{$user->name}}&nbsp{{$user->surname}}</option>

                                @endforeach
                            </select>
          	</div>
          </div>


       
                   

                </div>

                <div class="modal-footer">
                    <input type="submit" class="btn btn-danger  pull-left" value="Удалить">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Отменить</button>
                </div>
                </form>
            </div>
        </div>
    </div>

