<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$attendancegroup->name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>{{$attendancegroup->name}} form</h2>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Difficulty</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>{{$attendancegroup->id}}</td>
                <td>{{$attendancegroup->name}}</td>
                <td>{{$attendancegroup->description}}</td>
                <td>{{$attendancegroup->difficulty}}</td>
                <td>
                    <form method="post" action="{{route('attendancegroup.destroy', [$attendancegroup])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
        <a href="{{route('attendancegroup.index')}}" class="btn btn-primary">Back</a>
    
        <form method="post" action="{{route('attendancegroup.destroy', [$attendancegroup])}}">
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>