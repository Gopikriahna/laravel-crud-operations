<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container-wrapper">
       
        <form action="{{url('student/'.$student->id)}}" class="form-group " id="myform" method='post'>
        <!-- @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach -->
            <h3 class="text-center">Student Detail</h3>
            {!!csrf_field()!!}
            @method('PATCH')
        <div class="form">
           <label for="name"class="label1">Name:</label>
           <input type="text" class="form-control" name='name' id='name'value="{{$student->name}}">
           <span>{{ $errors->first('name') }}</span>
           
        </div>
        <div class="form">
        <label for="phone" class="label1"> Phone:</label>
        <input type="text" class="form-control " name='phone'id='phone'value="{{$student->phone}}">
        <span>{{ $errors->first('phone') }}</span>

        
        </div>
        <div class="form">
            <label for="email" class="label1"> Email:</label> 
           <input type="text" class="form-control" name='email' id='email'value="{{$student->email}}">
           <span>{{ $errors->first('email') }}</span>

          
        </div>
        <div class="form">
           <label for="age" class="label1">Age:</label>
           <input type="text" class="form-control" name='age' id='age'value="{{$student->age}}">
           <span>{{ $errors->first('age') }}</span>

           
        </div>
        <div class=form1>
           <input type="submit" class="btn btn-info pull-right" value="update" id="submit">
        </div>

        </form>
    </div>
    <style>
        .form-group{
            width:500px;
            height:400px;
            background:white;
            margin-left:35%;
            margin-top:10%;
            padding:0%;
            /* color:white; */
            border:1px solid black;
            border-radius:10%;
        }
        .form-control{
            width:100%;
        }
        .form{
            /* display:flex; */
           /* justify-content:center; */
           margin-top:2%;
        }
        input[type="text"]{
            width:50%;
            margin-left:30%;
            margin-top:-5%;
            /* margin-right:15%; */
        }
        label:after{
            content:'*';
            color:red;
        }
        label.error{
            color:red;
            font-style:Serif;
            width:100%;
            margin-left:30%;
            font-size:10px;
        }
        .label1{
            display: inline-block;
            width: 140px;
            text-align: right;
        }
        .form1{
            margin-right:20%;
            margin-top:2%;
        }
        span{
            margin-left:20%;
            color:red;
        }
      
    </style>
</body>
</html>