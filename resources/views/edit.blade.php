


<h1>Edit user</h1>
<form action="/edit-list/{{$users->id}}" method="post">
@csrf 
<input type="hidden" name="_method" value="put">
<input type="text" name="name" placeholder="Enter your name" value="{{$users->name}}"> <br><br>
<input type="text" name="email" placeholder="Enter your email" value="{{$users->email}}"> <br><br>
<input type="text" name="city" placeholder="Enter your city" value="{{$users->city}}" > <br><br>
<label>Current Image:</label><br>
    @if($users->image_path)
        <img src="{{ asset($users->image_path) }}" width="100" alt="User Image"><br>
    @else
        No image uploaded<br>
    @endif

    <label>Upload New Image:</label>
    <input type="file" name="image"><br><br>


<button>submit</button>
</form>

<style>
    input{
        padding:10px;
        margin:5px;
        border:2px solid orange;
    }

       button{
        padding:20px;
        margin:5px;
        border:2px solid orange;
    }
</style>
