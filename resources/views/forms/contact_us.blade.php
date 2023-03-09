<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contact_us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
        <div class="container mt-5 ">
            <h1>contact_us</h1>
            @include('forms.errors')



        <form method="post" action="{{ route('contact_us') }}"
        enctype="multipart/form-data">

            @csrf
            <div class="row">
                <div class="col-md-6">
                 <div class="mb-3">
                <label>First Name</label>
                <input type="text" placeholder="First Name"
                class="form-control" name=" fname"/>
            </div>
            </div>


                <div class="col-md-6">
            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" placeholder="Last Name"
                class="form-control" name=" lname"/>

            </div>
        </div>

            <div class="mb-3">
              <label>Email</label>
              <input type="email" placeholder="Email"
              class="form-control" name="email"/>


          </div>

          <div class="mb-3">
            <label>phone</label>
            <input type="text" placeholder="phone"
            class="form-control" name="phone"/>


            </div>
            <div class="mb-3">
              <label>message</label>
              <textarea row="5" placeholder="message"
              class="form-control" name="message"></textarea>
              </div>
              <div class="mb-3">
                <label>CV</label>
                <input type="file"
                class="form-control" name="cv"/>


                </div>

           <div class="text-center">
            <button class="btn btn-dark w-25">Send</button>
           </div>


        </form>


  </body>
</html>

