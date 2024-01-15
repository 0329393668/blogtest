<!DOCTYPE html>
<html>
<head>
    <title>Your Application</title>
    <!-- Include any CSS or JS files you need -->
</head>
<body>
<nav>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</nav>

<div class="container">
    @yield('content')
</div>

<!-- Include any additional scripts you need -->
</body>
</html>
