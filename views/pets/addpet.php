<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Pet</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../views/output.css" rel="stylesheet">
</head>
<?php include '../partials/navbar.php'; ?>

<body>

    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Add Pet</h2>
        <form action="../../php/pet.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <label for="pet_image" class="block text-sm font-medium text-gray-700">Pet Image</label>
                <input type="file" id="pet_image" name="pet_image" accept="image/*" required>
            </div>
            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                <input type="text" id="type" name="type" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
                <input type="number" id="age" name="age" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                <input type="text" id="gender" name="gender" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium text-gray-700">Weight</label>
                <input type="number" id="weight" name="weight" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>
            <div class="mb-4">
                <label for="breed" class="block text-sm font-medium text-gray-700">Breed</label>
                <input type="text" id="breed" name="breed" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
            </div>
            <div class="mt-4">
                <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Add Pet</button>
            </div>
        </form>
    </div>
</body>
</html>
