









<x-layout>

<x-slot name="title">User-list</x-slot>





    

<x-slot name="main">
    <h1>User List</h1>

<form action="search-list" method="get">
    

<input class="mx-2 py-3" type="search" name="search" value="{{@$search}}">
<button class="btn btn-outline-success">Submit </button>

</form>
    <div class="table-responsive-sm">


 <a class="btn btn-outline-info mx-2 my-2" href="add">ADD</a>

 <form action="delete-Multi" method="post">
    @csrf
<button class="btn btn-danger mx-2 my-2">Delete</button>
<table class="table table-dark table-striped-columns table-hover">
<tr class="table-secondary">
    <td>selection</td>
    <td>name</td>
    <td>email</td>
    <td>city</td>
    <td>image</td>
   <td>operation</td>
 
</tr>

@foreach($users as $user)
<tr>
    <td class="table-warning"><input type="checkbox" name="ids[]" value="{{$user->id}}"></td>
    <td class="table-info">{{$user->name}}</td>
    <td class="table-warning">{{$user->email}}</td>
    <td class="table-info">{{$user->city}}</td>
    <td><img src="{{ asset($user->image_path) }}" alt="User Image" width="150">
   </td>
    <td class="table-warning"><a class="btn btn-outline-danger" href="delete/{{$user->id}}"> delete</a>
 
</td>

</tr>
@endforeach


</table>
</form>

<br><br>

<div>

</div>


{{$users->links()}}




</x-slot>






</x-layout>
  