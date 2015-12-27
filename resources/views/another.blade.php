<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Students</h1>
    @foreach($students as $student)
        <h2>{{ $student->name }}</h2>
    @endforeach
</body>
</html>