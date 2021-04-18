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
                <h1 class="text-primary text-center">Students Data</h1>
                
                <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>EMail</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td class="d-flex">
                                <a href="{{ route('student.edit',$student->id) }}" class="btn btn-success mr-2">Edit</a>
                                <a href="" class="btn btn-danger ml-2">Delete</a>
                            </td>
                        </tr> 
                        @endforeach
                      
                    </tbody>
                  </table>
            
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
