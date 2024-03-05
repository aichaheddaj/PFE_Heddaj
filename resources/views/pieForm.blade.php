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
    <form method="POST" action="{{ route('piepost') }}" class="max-w-md mx-auto mt-8 p-8 bg-gray-100 rounded-lg shadow-lg">
    @csrf
    <div class="mb-4">
        <label for="title" class="block mb-2 font-bold text-gray-700">Title :</label>
        <input type="text" name="title" placeholder="Title" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
    </div>
    <div class="mb-4">
        <label for="data1" class="block mb-2 font-bold text-gray-700">Donnée 1 :</label>
        <input type="text" name="d1" placeholder="Data" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="pour1" placeholder="Pourcentage" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
    </div>

    <div class="mb-4">
        <label for="data2" class="block mb-2 font-bold text-gray-700">Donnée 2 :</label>
        <input type="text" name="d2" placeholder="Data" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="pour2" placeholder="Pourcentage" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
    </div>

    <div class="mb-4">
        <label for="data3" class="block mb-2 font-bold text-gray-700">Donnée 3 :</label>
        <input type="text" name="d3" placeholder="Data" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="pour3" placeholder="Pourcentage" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
    </div>

    <div class="mb-4">
        <label for="data4" class="block mb-2 font-bold text-gray-700">Donnée 4 :</label>
        <input type="text" name="d4" placeholder="Data" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="pour4" placeholder="Pourcentage" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
    </div>

    <div class="mb-4">
        <label for="data5" class="block mb-2 font-bold text-gray-700">Donnée 5 :</label>
        <input type="text" name="d5" placeholder="Data" class="w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
        <input type="number" name="pour5" placeholder="Pourcentage" class="mt-2 w-full px-3 py-2 rounded border border-gray-300 focus:outline-none focus:border-indigo-500">
    </div>

    <button type="submit" class="w-full bg-indigo-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:bg-indigo-600">Afficher le Pie Chart</button>
</form>

</body>
</html>