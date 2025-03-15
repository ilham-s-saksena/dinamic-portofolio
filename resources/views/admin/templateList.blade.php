<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Template</title>
</head>
<body>

<h1>List Template</h1>
    <table>=
        <thead>
            <tr>
                <th>name</th>
                <th>id</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($template as $item)
                <tr>
                    <td>{{  $item->name }}</td>
                    <td>{{  $item->id }}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>