<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>
<body>
  <div>
    {{$todoId->id}}
    {{$todoId->title}}
    {{$todoId->description}}
    {{$todoId->created_at}}
    {{$todoId->updated_at}}
  </div>
</body>
</html>