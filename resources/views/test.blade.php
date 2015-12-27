<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Laravel</title>
</head>
<body>
    <h1>Test Laravel</h1>
    @foreach($students as $student)
        <h1>{{ $student['name'] }}</h1>
    @endforeach
</body>
</html>