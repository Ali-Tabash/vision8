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
            <div class="alert alert-primary">
                <h2>welcome to our website</h2>
                <p><b>Name</b>:{{ $name }}</p>
                <p><b>Email</b>:{{ $email }}</p>
                <p><b>Password</b>:{{ $password }}</p>
                <p><b>Age</b>:{{ $age }}</p>

            </div>
        </div>

  </body>
</html>
