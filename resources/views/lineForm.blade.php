<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskHub</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <form method="POST" action="{{ route('linepost') }}" class="max-w-md mx-auto mt-8 p-8 bg-gray-100 rounded-lg shadow-lg">
    @csrf
    <div class="mb-4">
        <label for="title" class="block mb-2 font-bold text-gray-700">Title :</label>
        <input type="text" name="title" placeholder="Title" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="data1" class="block mb-2 font-bold text-gray-700">SubTitle 1 :</label>
        <input type="text" name="subt1" placeholder="Subtitle" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dv1" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dv2" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dv3" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dv4" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dv5" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dv6" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">

    </div>

    <div class="mb-4">
        <label for="data2" class="block mb-2 font-bold text-gray-700">Subtitle 2 :</label>
        <input type="text" name="subt2" placeholder="Subtitle2" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dh1" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dh2" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dh3" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="dh4" placeholder="data" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">

    </div>

    <div class="mb-4">
        <label for="data3" class="block mb-2 font-bold text-gray-700">Données :</label>
        <input type="text" name="d1" placeholder="Data" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="text" name="d2" placeholder="Data" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="text" name="d3" placeholder="Data" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
    </div>

    <button type="submit" class="w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:bg-indigo-600">Afficher Line Chart</button>
</form>

</body>
</html>