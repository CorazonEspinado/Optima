@extends ('Layouts.template')

@section ('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Новая задача</div>

                    <div class="panel-body">
                        {!! Form::open(['action'=>'TasksController@store', 'method'=>'POST']) !!}

                        <div class="form-group">
                            {{Form::label('uzdevums', 'Задача')}}
                            {{Form::textarea('uzdevums', '', ['class'=>'form-control', 'placeholder'=>'Задание'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('izpilditajs', 'Исполнитель')}}
                            <select class="form-control" name="izpilditajs">
                                <option value="">Исполнитель</option>
                                @foreach($users as $user)
                                    <option value="{{$user->name}} {{$user->surname}}">{{$user->name}}&nbsp{{$user->surname}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            {{Form::label('deadline', 'Срок исполнения')}}
                            {{ Form::text('deadline', '', array('class' => 'datepicker', 'placeholder'=>'Дата исполнения')) }}
                        </div>

                        {{Form::submit('OK', ['class'=>'btn btn-primary', 'title'=>'Ievadīt'])}}

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>

    </div>

    @endsection