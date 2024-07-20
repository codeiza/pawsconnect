<?php
include "../../php/ownerpet.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Pets</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../views/output.css" rel="stylesheet">
</head>

<?php include '../partials/navbar.php'; ?>

<body>
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-4">Your Pets</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="../<?php echo $row['pet_image']; ?>" alt="Pet Image" class="w-full h-48 object-cover mb-4 rounded-lg">
                        <h3 class="text-xl font-semibold mb-2"><?php echo $row['name']; ?></h3>
                        <p>Type: <?php echo $row['type']; ?></p>
                        <p>Age: <?php echo $row['age']; ?></p>
                        <p>Gender: <?php echo $row['gender']; ?></p>
                        <p>Weight: <?php echo $row['weight']; ?></p>
                        <p>Breed: <?php echo $row['breed']; ?></p>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No pets found.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
