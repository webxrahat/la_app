<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Template</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
   @include('pages.header')

   @include('pages.sidebar')

    <main style="height: 70vh">
        <h1>Home Page Title</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, distinctio?</p>
    </main>

    @include('pages.footer')
  
</body>
</html>
