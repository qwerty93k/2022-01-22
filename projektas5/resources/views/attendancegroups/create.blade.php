<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance group Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Attendance group Create </h1>
        <form method="POST" action="{{route('attendancegroup.store')}}">
            <input type="text" class="form-control" name="name" placeholder="Group name">
            <input type="text" class="form-control" name="description" placeholder="Group description">
            <input type="number" class="form-control" name="difficulty" placeholder="Group difficulty">
            <input type="number" class="form-control" name="school_id" placeholder="School id">
            <button type="submit" class="btn btn-primary">Add</button>
            <a class="btn btn-secondary" href="{{route('attendancegroup.index')}}">Attendance Groups</a>
            @csrf
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>