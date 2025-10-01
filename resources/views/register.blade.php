



<h1>Register</h1>

<!-- /resources/views/post/create.blade.php -->


<!-- Create Post Form -->
<form action="register" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter your name">
    <span>
 @error('name'){{$message}} @enderror</span><br><br>

    <input type="text" name="email" placeholder="Enter your email ">
   <span style="color='red">
 <span > @error('email') {{$message}}@enderror</span> <br><br>
    <input type="password" name="password" placeholder="Enter your password">
   <span>@error('password'){{$message}} @enderror</span><br><br>
    <input type="password" name="confirmpassword" placeholder="Enter your Confirmpassword">
   <span>@error('password'){{$message}} @enderror</span><br><br>

<button>Register</button>

</form> 

<style>
    span{
        color:red;
    }
</style>