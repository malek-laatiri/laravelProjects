<form action="{{url('/store')}}" method="post">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CNE</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cne">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Firstname</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstname">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Lastname</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastname">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Age</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="age">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Speciality</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="speciality">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <input type="submit" class="btn btn-primary" value="Create"/>
</form>