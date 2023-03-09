<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
        <div class="container mt-5">
            <h1>Basic Form</h1>
            {{-- @dump($errors)
            @dump($errors->any())
            @dump($errors->all()) --}}
                @include('forms.errors')
        <form method="post" action="{{ route('form3_data') }}">

            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" placeholder="Name"
                class="form-control @error('name') is-invalid
                @enderror" name="name"/>
                @error('name')
                <small class="text-danger">{{ $message }}</small>

                @enderror
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" placeholder="Email"
                class="form-control @error('email') is-invalid
                @enderror" name="email"/>
                @error('email')
                <small class="text-danger">{{ $message }}</small>

                @enderror

            </div>
           <div class="text-center">
            <button class="btn btn-dark">Send</button>
           </div>

        </form>


  </body>
</html>
