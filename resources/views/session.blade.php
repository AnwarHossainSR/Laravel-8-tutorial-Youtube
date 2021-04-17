<h2>Login Form</h2><br>

@if(session('data'))
    <h1>Loggedin as {{ session('data') }}</h1>
@endif

<form action="/store" method="POST">
    @csrf
    <input type="text" name="username" placeholder="username"><br>
    <input type="password" name="password" placeholder="password"><br><br>
    <button type="submit">Submit</button>
</form>