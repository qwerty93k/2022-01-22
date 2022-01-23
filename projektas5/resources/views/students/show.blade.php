<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$student->name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>{{$student->name}} form</h2>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Group Id</th>
                <th>Image URl</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->surname}}</td>
                <td>{{$student->group_id}}</td>
                <td><a href="{{$student->image_url}}" target="_blank"><img alt="{{$student->name}} {{$student->surname}}" src="{{$student->image_url}}" width="100" height="100"></a></td>
                <td>
                    <form method="post" action="{{route('student.destroy', [$student])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
        <a href="{{route('student.index')}}" class="btn btn-primary">Back</a>
    
        <form method="post" action="{{route('student.destroy', [$student])}}">
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>