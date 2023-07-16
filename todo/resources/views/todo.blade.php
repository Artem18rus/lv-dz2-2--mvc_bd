<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>
<body>
  @foreach($todo as $data)
    <div>
      <tr>
        <th>{{$data->id}}</th>
        <th>{{$data->title}}</th>
        <th>{{$data->description}}</th>
        <th>{{$data->created_at}}</th>
        <th>{{$data->updated_at}}</th>
      </tr>
    </div>
  @endforeach
</body>
</html>