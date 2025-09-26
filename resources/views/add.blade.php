<h1>
    Add user
</h1>

<form action="add" method="post">

@csrf 

<input type="text" name="name" placeholder="Enter your name"> <br><br>
<input type="text" name="email" placeholder="Enter your email"> <br><br>
<input type="text" name="city" placeholder="Enter your city"> <br><br>

<button>Add User</button>

</form>

<style>

    input{
        padding:10px;
        border:1px solid orange;
    }

      button{
        padding:10px;
        border:1px solid orange;
    }
</style>