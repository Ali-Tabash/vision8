<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>form 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
        <div class="container mt-5">
            <h1>Inforamtion form</h1>
            <form action = "{{ route('form2_data') }}" method="post">
                @csrf

                    <input type="text" name="name" placeholder="name"
                    class="form-control mb-3" />

                    <input type="email" name="email" placeholder="email"
                    class="form-control mb-3"/>

                    <input type="number" name="age" placeholder="age"
                    class="form-control mb-3"/>

                    <input type="password" name="password" placeholder="password"
                    class="form-control mb-3" autocomplete="new-password"/>
                    <button class="btn btn-success w-100">send</button>
            </form>
        </div>

  </body>
</html>
