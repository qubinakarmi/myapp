<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            border: 1px solid #ccc;
            padding: 30px;
            border-radius: 8px;
            width: 300px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
        }
        button {
            width: 100%;
            padding: 8px;
            margin-top: 15px;
            background: #3490dc;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .error { color: red; }
    </style>
</head>
<body>
    <form action="{{ url('/login') }}" method="POST">
        @csrf
        <h2>Login</h2>
        
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <input type="password" name="password" placeholder="Password">
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Login</button>
    </form>
</body>
</html>
