<table class="table">
    <thead>
    <tr>
        <th scope="col">CNE</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>

    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
        <tr>
            <th scope="row">{{$student->cne}}</th>
            <td>{{$student->firstname}}</td>
            <td>{{$student->lastname}}</td>
            <td>{{$student->age}}</td>
            <td>{{$student->speciality}}</td>

            <td>
                <a href="{{'/show/'.$student->id}}" class="btn btn-sm btn-info">show</a>
                <a href="{{'/edit/'.$student->id}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{'/delete/'.$student->id}}" class="btn btn-sm btn-danger">Delete</a>


            </td>

        </tr>
@endforeach
    </tbody>
</table>
