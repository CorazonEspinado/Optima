@extends ('layouts.template')



@section ('content')




    @include ('admin.Tasks.NewTask')
    @include('admin.Tasks.edit_task')


    <!-- Modal -->

    <div id="admindelay">

    </div>

    <table class="table table-bordered" id="delaytable">


    </table>
    <div class="container">


        <ul class="nav justify-content-center">
            <li class="nav-item">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addNewTask"
                        id="addNewTask">Добавить задачу
                </button>
            </li>


        </ul>

    </div>


    <table id="task-table" class="display" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Id</th>
            <th>Uzdevums</th>
            <th>Izpilditājs</th>
            <th>Status</th>
            <th>Izveidots</th>
            <th>Izpildīt līdz</th>
            <th>Сделать что-то</th>
            <!-- <th>Izpildīt līdz</th> -->


        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Id</th>
            <th>Uzdevums</th>
            <th>Izpilditājs</th>
            <th>Status</th>
            <th>Izveidots</th>
            <th>Izpildīt līdz</th>
            <th>Actions</th>
            {{--<th>Izpildīt līdz</th>--}}

        </tr>
        </tfoot>
        <tbody>

        </tbody>
    </table>

    <!-- Modal -->



@endsection

@section ('scripts')

    <script src="{{asset('js/admin/tasks.js')}}"></script>



@endsection

