
<x-layout>
    <x-slot name="title">SendEmail</x-slot>
    <x-slot name="main">

<h1>Send Mail</h1>

 <form action="send-mail" method="post">
@csrf
<input type="text" name="to" placeholder="Enter a user to send email"><br><br>
<input type="text" name="subject" placeholder="Enter a Subject"><br><br>
<textarea type="text"name="message" placeholder="Enter a message"></textarea><br><br>

<button>Send Email</button>
</form> 

</x-slot>

</x-layout>

