<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
  </head>
  <body>

        <div class="container mt-5 ">
            <i class="fab fa-apple" ></i>
            <i class="far fa-heart" ></i>
             <i class="fab fa-apple" ></i>
            <h1>All posts</h1>
            <i class="fab fa-facebook" ></i>
            <i class="fab fa-instagram" ></i>
            <i class="fab fa-snapchat" ></i>
            <i class="fab fa-whatsapp" ></i>
            <i class="fab fa-amazon" ></i>
            <i class="fab fa-twitter" ></i>
            <i class="fab fa-google" ></i>
            <i class="fab fa-tiktok" ></i>
            <i class="fab fa-paypal" ></i>
            <i class="fab fa-microsoft" ></i>
            <i class="fas fa-wifi"></i>


            <table class="table table-hover table-bordered table-striped">
                <tr class="table-primary">
                    <th>ID</th>
                    <th>Title</th>
                    {{-- <th>Content</th> --}}
                    <th>Image</th>
                    <th>Created_at</th>
                    <th>Update_at</th>
                    <th>Action</th>
                </tr>
                <tr>
                    @foreach ($posts as $post)
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    {{-- <td> {{ Str::words($post->content, 10 , '...')}}</td> --}}
                    <td><img width="70px" src="{{ $post->image }}<" alt=""></td>
                    <td>{{ $post->created_at->format('M ,  D  , Y') }}</td>
                    <td>{{ $post->updated_at->diffForHumans()}}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                    </tr>
                    @endforeach



            </table>



        </div>
  </body>
</html>
