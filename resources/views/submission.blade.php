<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
  <div class="flex items-center justify-center h-screen w-screen">
    <div class="container">
      <div class="p-1 place-items-center">
        @foreach($forms as $form)
        <table class="table-auto border-separate border-spacing-1" style="border: 1px solid">
          <thead>
            <tr>
              <th>Email</th>
              <th>Password</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Age</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ $form->email }}</td>
              <td>{{ $form->password }}</td>
              <td>{{ $form->first_name }}</td>
              <td>{{ $form->last_name }}</td>
              <td>{{ $form->age }}</td>
            </tr>
          </tbody>
        </table>
        @endforeach
      </div>
    </div>
</body>

</html>