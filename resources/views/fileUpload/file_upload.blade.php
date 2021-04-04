<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
</head>
<body>

    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="surname" placeholder="surname">
        <input type="text" name="mail" placeholder="email">
        <input type="file" name="image">

        <button type='submit'> add </button>
    </form>
</body>
</html>