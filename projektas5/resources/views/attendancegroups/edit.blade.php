<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> {{-- jquery --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">{{-- summer note --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>{{-- summer note --}}
</head>
<body>
<div class="container">
    <h1>Attendance group edit</h1>
    <form method="POST" action="{{route('attendancegroup.update', [$attendancegroup])}}">
        <input type="text" class="form-control" name="name" value={{$attendancegroup->name}} placeholder="Attendance group name">
        <textarea class="form-control" name="description" id="summernote">
            {{$attendancegroup->description}}
        </textarea>
        <input type="text" class="form-control" name="difficulty" value={{$attendancegroup->difficulty}} placeholder="Difficulty">
        <input type="text" class="form-control" name="school_id" value={{$attendancegroup->school_id}} placeholder="School ID">
        <button type="submit" class="btn btn-primary">Save</button>
        @csrf
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('#summernote').summernote();
    });
</script>
</body>
</html>