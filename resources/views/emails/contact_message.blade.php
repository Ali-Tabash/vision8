<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body style="background: rgb(225, 222, 222); font-family:Arial, Helvetica,
 sans-serif">
 <div style="width: 600px; margin:0 auto; padding: 20px; border:2px
 solid rgb(224, 224, 224); background: #fff">
    <h3>mr.ali</h3>
    <p>hope this email find you will</p>
    <br>
    <p>There is new contact us data as bellow </p>
    <p><b>Name</b>: {{ $data['fname'] }} {{ $data['lname'] }}</p>
     <p><b>Email</b>: {{ $data['email'] }} </p>
    <p><b>phone</b>: {{ $data['phone'] }} </p>
    <p><b>message</b> :{{ $data['message'] }} </p>
     <br>
    <br>
    <p>Best Regards</p>
 </div>

</body>
</html>
