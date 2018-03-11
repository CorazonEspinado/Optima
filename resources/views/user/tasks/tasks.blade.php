@extends ('Layouts.template')



@section ('content')
<script src="{{asset('js/user/usersidetask.js')}}"></script>




       








    <div class="container">
        <div class="nav justify-content-center">



        </div>
        <ul class="nav justify-content-center">
            <li class="nav-item">

            </li>


        </ul>




        <div id="delay">
        </div>

    </div>
    <table class="table table-bordered" id="delayed">


    </table>
   <h4 align="center"> Список текущих задач</h4>
    <table class="table table-bordered" id="task-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Uzdevums</th>
            <th>Izpildītājs</th>
            <th>Status</th>
            <th>Izveidots</th>
            <th>Izpildit lidz</th>
            <th align="center">Сделать что-то</th>

        </tr>
        </thead>
        <tbody id="task_info">


        </tbody>
    </table>





    <!-- Modal -->



@endsection

@section ('script')

@endsection
