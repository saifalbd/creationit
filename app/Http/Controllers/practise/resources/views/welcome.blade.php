<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Eloquent Relation</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12">
                <h2>laravle Eloquant Relation</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>Email</th>
                            <th>Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($address as $data)
                        <tr>
                            <td>{{$data->user->name}}</td>
                            <td>{{$data->user->email}}</td>
                            <td>{{$data->country}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
