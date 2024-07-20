<?php
include "../../php/profile.php";
?>

<!doctype html>
<html data-theme="cupcake">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="../../views/output.css" rel="stylesheet">
</head>
<?php include '../partials/navbar.php'; ?>

<body style="background-image: url('../../images/mainBG1.png');  background-size: cover; background-attachment: fixed;  overflow-x: scroll;">
    <div class="flex flex-col h-screen w-screen">
        <div class="grid place-items-center w-full h-full">
            <div class="max-w-5xl w-full pt-5 pb-10">
                <div data-theme="cupcake" class="bg-gray-100 rounded-md shadow dark:border md:mt-0 sm:max-w-5xl xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-1x1 text-center">
                            Profile
                        </h1>
                        <p class="text-sm font-light text-gray-900 ">
                        </p>
                        <form class="space-y-4 md:space-y-6" action="#">
                            <div class="col-span-2">
                                <div class="grid grid-cols-1 gap-0 items-center justify-items-center">
                                    <div class="avatar">
                                        <div class="w-40 rounded">
                                            <img src="../../uploaded/chuwawa.jpg" alt="Avatar" class="w-full h-auto rounded">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-3 gap-2">
                                <div>
                                    <label for="first_name" class="block mb-1 text-sm font-medium text-gray-900">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="input input-bordered input-md h-10 w-full" value="<?php echo $first_name; ?>">
                                </div>
                                <div>
                                    <label for="last_name" class="block mb-1 text-sm font-medium text-gray-900">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="input input-bordered input-md h-10 w-full" value="<?php echo $last_name; ?>">
                                </div>
                                <div>
                                    <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Age</label>
                                    <input type="text" name="age" id="age" class="input input-bordered h-10 input-md w-full" value="<?php echo $age; ?>" />
                                </div>
                                <div>
                                    <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900">Birthdate</label>
                                    <input type="date" id="birthdate" class="input input-bordered input-md h-10 w-full" value="<?php echo $birthdate; ?>">
                                </div>
                                <div>
                                    <label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Gender</label>
                                    <input type="text" id="gender" class="input input-bordered input-md h-10 w-full" value="<?php echo $gender; ?>">
                                </div>
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                    <input type="email" name="email" id="email" class="input input-bordered h-10 input-md w-full" value="<?php echo $email; ?>" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                                    <input type="text" name="username" id="username" class="input input-bordered h-10 input-md w-full" value="<?php echo $username; ?>" />
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                                    <input type="password" name="password" id="password" placeholder="************" class="input input-bordered h-10 input-md w-full" />
                                </div>
                            </div>

                            <div class="flex justify-end">
                                <button class="btn w-[300px] border-none text-gray-50 btn-secondary hover:bg-pink-400">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>