<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container my-5">
        <a href="{{url('/student/create')}}" class="btn btn-success">Add</a>
        <table class="table table-hover table-bordered my-2">
            <thead  class="bg-dark text-light">
                <tr>
                <th>id</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>age</th>
                <th>action</th>
                </tr>
            </thead>
            @foreach($student as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->age}}</td>
                <td>
<div class="act">
                    <span><a href="{{url('/student/'.$item->id)}}" class="btn btn-info">Show</a></span>
                    <span><a href="{{url('/student/'.$item->id.'/edit')}}" class="btn btn-primary">Edit</a></span>
                    <!-- <a href="{{url('/student'.'/'.$item->id)}}" class="btn btn-primary">delete</a> -->
                    <span><form action="{{url('/student'.'/'.$item->id)}}" method="post">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form></span>
                    </div>

                </td>
            </tr>
            @endforeach
            <tbody>

        </table>
    </div>
    <style>
        .act{
            display:flex;
        }
        span{
            padding-left:2%;

        }
    </style>
</body>
</html>