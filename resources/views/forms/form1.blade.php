<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
        <div class="container mt-5 ">
            <h1>Basic Form</h1>
        <form method="post" action="{{ route('form1_data') }}">
            {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"/> --}}
            {{-- {{ csrf_field() }} --}}
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" placeholder="Name"
                class="form-control" name="name"/>
            </div>
            <div class="mb-3">
                <label>Age</label>
                <input type="text" placeholder="Age"
                class="form-control" name="age"/>

            </div>
           <div class="text-center">
            <button class="btn btn-success">Send</button>
           </div>

        </form>


  </body>
</html>
