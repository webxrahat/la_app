<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Template @yield('title')</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
    <header>
        <h1>Header Menu</h1>
    </header>

    <nav id="menu-bar">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/post">Post</a></li>
        </ul>
    </nav>

    <aside id="sidebar">
        <h2>Sidebar</h2>
        <p>This is the sidebar content.</p>
    </aside>

    <main style="height: 70vh">

        @hasSection ('content')
        @yield('content')
        @else 
            <h3>Content not found</h3>
        @endif



      
    </main>

    <footer>
        <p>This is the footer</p>
    </footer>
  
</body>
</html>