<?php
include "../../php/allpet.php";
?>

<!DOCTYPE html>
<html data-theme="cupcake">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../views/output.css" rel="stylesheet">
</head>
<?php include '../partials/navbar.php'; ?>

<body class="bg-[url('../../images/mainBG1.png')]">
    <div class="flex flex-col h-screen w-screen">
        <div class="pt-10 pl-5">
            <div class="grid grid-cols-7 gap-3">
                <div>
                    <label for="gender" class="pl-2 font-semibold">Select Gender</label>
                    <select id="gender" class="select select-bordered w-full max-w-xs">
                        <option disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="type" class="pl-2 font-semibold">Type</label>
                    <input type="text" id="type" placeholder="Type" class="input input-bordered input-md max-w-xs" />
                </div>
                <div class="flex flex-col">
                    <label for="breed" class="pl-2 font-semibold">Breed</label>
                    <input type="text" id="breed" placeholder="Breed" class="input input-bordered input-md max-w-xs" />
                </div>
            </div>
        </div>

        <div class="flex flex-wrap pl-5 pt-5">
            <?php foreach ($petData as $row) : ?>
                <div class="card w-56 bg-base-100 shadow-xl m-2">
                    <div class="p-2">
                        <img src="../<?php echo $row['pet_image']; ?>" alt="Pet Image" class="w-full h-48 object-cover mb-4 rounded-lg">
                        <p class="font-semibold pl-1 pt-1">Pet name: <?php echo $row['name']; ?></p>
                        <p class="font-semibold pl-1 pt-1">Gender: <?php echo $row['gender']; ?></p>
                        <p class="font-semibold pl-1 pt-1">Age: <?php echo $row['age']; ?></p>
                        <p class="font-semibold pl-1 pt-1">Type: <?php echo $row['type']; ?></p>
                    </div>
                    <div class="card-body">
                        <div class="grid grid-cols-2 gap-3">
                            <div>
                                <button class="btn btn-xs w-20 btn-primary">Chat</button>
                            </div>
                            <div>
                                <button class="btn btn-xs w-24 pr-2 btn-secondary">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>
