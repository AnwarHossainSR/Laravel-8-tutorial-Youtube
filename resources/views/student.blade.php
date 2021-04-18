<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Students insert</title>
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3">
                @if(session('success'))
                <div class="alert alert-info" role="alert">
                    {{ session('success') }}
                  </div>
                @endif
                <h1 class="text-primary text-center">Data Insert</h1>
                <form action="/store" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full name</label>
                        <input type="text" class="form-control"  name="name" id="exampleFormControlInput1" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" >
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1"  class="form-label"> Address</label>
                        <input type="text" class="form-control" name="address" id="exampleFormControlInput1" >
                      </div>
                      <div class="mb-3 mt-3">
                        <input type="submit" class="btn btn-primary" value="Submit" >
                      </div>
                </form>
            
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
