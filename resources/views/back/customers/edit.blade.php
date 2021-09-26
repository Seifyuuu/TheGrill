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

<form enctype="multipart/form-data" action="{{route("customer.update", $customer->id)}}" method="POST">
    @csrf
    @method("PUT")
    <br><br><br>
    <div>
    <label for="">Photo:</label>
    <input type="file" name="photo" value="{{$customer->photo}}">
    <br>
    <label for="">Name :</label>
    <input type="text" name="name" value="{{$customer->name}}">
    <br>
    <label for="">Text :</label>
    <input type="text" name="text" value="{{$customer->text}}">
    <br>
    <label for="">Rating :</label>
        <select name="rating" value="{{$customer->rating}}">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
            <option value="0">0</option>
        </select>

    </div>
    <div style="display: flex; justify-content:center;">
    <button class="btn btn-warning" type="submit">Update</button>
    </div>
</form>
@endsection