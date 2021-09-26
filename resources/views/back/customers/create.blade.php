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
<br>
<h1 style="text-align: center">Customers</h1>
<br>
<div style="display: flex; justify-content: center;">
    <form action="{{route("customer.store")}}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="display:flex; flex-direction:column">
    <input type="file" name="photo" placeholder="photo" value="{{ old('photo') }}">
    <input type="text" name="name" placeholder="name" value="{{ old('name') }}">
    <input type="text" name="text" placeholder="text" value="{{ old('text') }}">
    <input type="text" name="rating" placeholder="Rating from 0 to 5" value="{{ old('rating') }}">
    <br>
    <button class="btn btn-success" type="submit">Validate</button>
        </div>
    </form>
</div>


@endsection