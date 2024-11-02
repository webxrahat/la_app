<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Template</title>
    <style>
        /* Basic reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Layout styling */
        body {
            font-family: Arial, sans-serif;
            display: grid;
            grid-template-areas:
                "header header"
                "menu main"
                "sidebar main"
                "footer footer";
            grid-template-columns: 1fr 3fr;
            grid-template-rows: auto;
            gap: 10px;
            padding: 20px;
        }

        header {
            grid-area: header;
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
        }

        #menu-bar {
            grid-area: menu;
            background-color: #333;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-around;
        }

        #menu-bar ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
        }

        #menu-bar li {
            color: white;
            cursor: pointer;
        }

        #menu-bar li a{
            color: white;
            cursor: pointer;
        }

        #sidebar {
            grid-area: sidebar;
            background-color: #f4f4f4;
            padding: 20px;
        }

        main {
            grid-area: main;
            background-color: #e9e9e9;
            padding: 20px;
        }

        footer {
            grid-area: footer;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 15px;
        }

        /* Hover effects */
        #menu-bar li:hover {
            color: #ddd;
        }
    </style>
</head>
<body>
    <header>
        <h1>Header Menu</h1>
    </header>

    <nav id="menu-bar">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/">About</a></li>
            <li><a href="/">Post</a></li>
        </ul>
    </nav>

    <aside id="sidebar">
        <h2>Sidebar</h2>
        <p>This is the sidebar content.</p>
    </aside>

    <main>
        <h1>Page Title</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, distinctio?</p>
    </main>

    <footer>
        <p>This is the footer</p>
    </footer>
  
</body>
</html>
