<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} - Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">{{config('app.name')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor03">

        </div>
    </div>
    </nav>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">First name</th>
            <th scope="col">Last name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone number</th>
          </tr>
        </thead>
        <tbody>
            @foreach($attendees as $attendee)
          <tr>
            <th scope="row">{{$attendee->first_name}}</th>
            <td>{{$attendee->last_name}}</td>
            <td>{{$attendee->email}}</td>
            <td>{{$attendee->phone_no}}</td>
          </tr>
          @endforeach
  </tbody>
      </table>
</body>
</html>