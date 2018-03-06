@extends ('Layouts.template')

@section ('content')

   @include ('admin.structures.new_structure')


    <div class="container">

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addNewStructure" id="addNewStructure">Добавить структуру</button>
            </li>


        </ul>

    </div>
    <div class="container">
    <table class="table table-bordered" id="structurestable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Info</th>

        </tr>
        </thead>
        <tbody id="structure_info">


        </tbody>


    </table>
    </div>

@endsection
@section ('scripts')

    <script src="{{asset('js/admin/structures.js')}}"></script>



@endsection
