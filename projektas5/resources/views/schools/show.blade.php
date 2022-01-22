<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$school->name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>{{$school->name}} form</h2>
        <p>ID: {{$school->id}}</p>
        <p>School name: {{$school->name}}</p>
        <p>Description: {!!$school->description!!}</p>
        <p>Place: {{$school->place}}</p>
        <p>Phone: {{$school->phone}}</p>

        <table class="table table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Place</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>{{$school->id}}</td>
                <td>{{$school->name}}</td>
                <td>{{$school->description}}</td>
                <td>{{$school->place}}</td>
                <td>{{$school->phone}}</td>
                <td>
                    <form method="post" action="{{route('school.destroy', [$school])}}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </table>
        <a href="{{route('school.index')}}" class="btn btn-primary">Back</a>
    
        <form method="post" action="{{route('school.destroy', [$school])}}">
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>