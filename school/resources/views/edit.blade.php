<form action="{{url('/update/'.$student->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CNE</label>
        <input type="text" value="{{$student->cne}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cne">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Firstname</label>
        <input type="text" class="form-control" value="{{$student->firstname}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstname">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Lastname</label>
        <input type="text" class="form-control" value="{{$student->lastname}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastname">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Age</label>
        <input type="number" class="form-control" value="{{$student->age}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="age">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Speciality</label>
        <input type="text" class="form-control" value="{{$student->speciality}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="speciality">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <input type="submit" class="btn btn-primary" value="Update"/>
</form>