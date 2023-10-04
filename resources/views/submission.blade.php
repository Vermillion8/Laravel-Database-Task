<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <title>Your Form Data</title>
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-6">Form Data</h1>

        @foreach($forms as $form)
        <div class="mb-4">
            <table class="min-w-full table-auto border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Password</th>
                        <th class="px-4 py-2">First Name</th>
                        <th class="px-4 py-2">Last Name</th>
                        <th class="px-4 py-2">Age</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">{{ $form->email }}</td>
                        <td class="px-4 py-2">{{ $form->password }}</td>
                        <td class="px-4 py-2">{{ $form->first_name }}</td>
                        <td class="px-4 py-2">{{ $form->last_name }}</td>
                        <td class="px-4 py-2">{{ $form->age }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        @endforeach

    </div>

</body>

</html>
