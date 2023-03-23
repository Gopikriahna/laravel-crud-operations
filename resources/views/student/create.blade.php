<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->


<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" 
integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->


    <!-- Latest compiled and minified CSS -->


<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-wrapper">
       
        <form action="{{url('student')}}" class="form-group " id="myform" method='post'>
        <!-- @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach -->
            <h3 class="text-center">Student Detail</h3>
            {!!csrf_field()!!}
        <div class="form">
           <label for="name"class="label1">Name:</label>
           <input type="text" class="form-control" name='name' id='name'>
           <span>{{ $errors->first('name') }}</span>
           
        </div>
        <div class="form">
        <label for="phone" class="label1"> Phone:</label>
        <input type="text" class="form-control " name='phone'id='phone'>
        <span>{{ $errors->first('phone') }}</span>

        
        </div>
        <div class="form">
            <label for="email" class="label1"> Email:</label> 
           <input type="text" class="form-control" name='email' id='email'>
           <span>{{ $errors->first('email') }}</span>

          
        </div>
        <div class="form">
           <label for="age" class="label1">Age:</label>
           <input type="text" class="form-control" name='age' id='age'>
           <span>{{ $errors->first('age') }}</span>

           
        </div>
        <div class=form1>
           <input type="submit" class="btn btn-info pull-right" value="Save" id="submit">
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
<script>
//         $(document).ready(function () {
            

// $.validator.addMethod("alphabetsnspace", function(value, element) {
//     return this.optional(element) || /^[a-zA-Z ]*$/.test(value);
// });

// $("#myform").validate({
//   rules: {
//     name: {
//       required: true,
//       minlength:4,
//       alphabetsnspace: true
//     },
//     phone:{
//       required: true,
//         number:true,  // <-- no such method called "matches"!
//         minlength:10,
//         maxlength:10
        
//     }, 
//     email:{
//         required: true,
//         email:true
//     },
//     age:{
//         required: true,
//         number:true,
//         range:[18,60]
//     }
//   },
//   messages: {
//     name:{required:"This field is required",
//     alphabetsnspace:"plase enter only letters"},
//     phone:{required:  "This field is required",
//          length:"plase enter ten digits"
//     },
//     email:{
//         required: "This field is required",
//         email:"plase enter valid email"
//     },
//     age:{ reqired:"This field is required",
//     }
         

//   },
//   submitHandler: function (form) { // for demo
//     alert('valid form');
//     // Route::redirect("/student");
//     // var form = $(form);
//     // $form.submit();
//     return true;
//   }
// // $("#submit").isValid(){
// //     return true;
// // }
// });

// });


</script>
</html>