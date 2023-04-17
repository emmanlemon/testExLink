<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>User Detail</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h2>User List:
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create Mode</button>
        </h2>
        @if(session('message'))
        <div class="alert alert-success mt-2">{{ session('message') }}</div>
        @elseif(session('errors'))
        <div class="alert alert-danger mt-2">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $key => $row)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $row->name }}</td>
                <td>{{ $row->address }}</td>
                <td>{{ \Carbon\Carbon::parse($row->date)->format('l jS \of F Y h:i:s A') }}</td>
                <td>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#editModal{{ $row->id }}">Edit</button>
                </td>
            </tr>
            <!-- create user modal-->
            @extends('user_detail.create')
            @section('createModal')
            @endsection

            <!-- edit user modal-->
            @include('user_detail.edit')
            @section('editModal')
            @endsection

            @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>