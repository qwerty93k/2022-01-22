<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>School Create </h1>
        <form method="POST" action="{{route('school.store')}}">
            <input type="text" class="form-control" name="school_name" placeholder="School name">
            <input type="text" class="form-control" name="school_description" placeholder="School description">
            <input type="text" class="form-control" name="school_place" placeholder="School place">
            <input type="text" class="form-control" name="school_phone" placeholder="School phone">
            <button type="submit" class="btn btn-primary">Add</button>
            <a class="btn btn-secondary" href="{{route('school.index')}}">Schools</a>
            @csrf
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>