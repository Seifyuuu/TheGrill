@extends("back.partials.html")

@section("content")    
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form enctype="multipart/form-data" action="{{route("table.update", $table->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div style="display: flex; justify-content:center; flex-direction:column">
    <label for="">Name:</label>
    <input type="text" name="name" value="{{$table->name}}">
    <br>
    <label for="">Address :</label>
    <input type="text" name="address" value="{{$table->address}}">
    <br>
    <label for="">Address 2 :</label>
    <input type="text" name="address2" value="{{$table->address2}}">
    <br>
    <label for="">Numéro :</label>
    <input type="string" name="num" value="{{$table->num}}">

     

    </div>
    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>

@endsection