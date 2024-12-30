<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student Registration | ExamManager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta content="App de gestion des examens" name="description">

    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">


    <meta content="Gestion des examens" name="description">


    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->

    <script src="assets/js/config.js"></script>
</head>

<body>
    <div class="bg-gradient-to-r from-rose-100 to-teal-100 dark:from-gray-700 dark:via-gray-900 dark:to-black">
        <div class="h-screen w-screen flex justify-center items-center">
            <div class="2xl:w-1/2 lg:w-2/3 md:w-1/2 w-full">
                <div class="card overflow-hidden sm:rounded-md rounded-none">
                    <div class="p-6">

                        <a href="#" class="block mb-6">

                        <a href="index.html" class="block mb-6">

                            <img class="h-6 block dark:hidden" src="assets/images/logo-dark.png" alt="">
                            <img class="h-6 hidden dark:block" src="assets/images/logo-light.png" alt="">
                        </a>
                        <h2 class="text-md font-semibold text-gray-800 dark:text-gray-200 mb-6 text-left">
                            Please fill in your details to register as a student
                        </h2>

                        <!-- Display Errors -->
                        <?php if (isset($errors) && count($errors) > 0): ?>
                            <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <form action="<?= site_url('/signup') ?>" method="post">
                            <!-- Full Name Fields -->
                            <div class="mb-4 flex gap-6">
                                <div class="w-1/2">
                                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="firstName">First Name</label>
                                    <input id="firstName" name="first_name" class="form-input w-full" type="text" placeholder="Enter your first name" value="<?= esc($old['firstName'] ?? '') ?>">
                                </div>
                                <div class="w-1/2">
                                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="lastName">Last Name</label>
                                    <input id="lastName" name="last_name" class="form-input w-full" type="text" placeholder="Enter your last name" value="<?= esc($old['lastName'] ?? '') ?>">
                                </div>
                            </div>

                            <!-- CIN and CNE Fields -->
                            <div class="mb-4 flex gap-6">
                                <div class="w-1/2">
                                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="cin">CIN</label>
                                    <input id="cin" name="cin" class="form-input w-full" type="text" placeholder="Enter your CIN" value="<?= esc($old['cin'] ?? '') ?>">
                                </div>
                                <div class="w-1/2">
                                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="cne">CNE</label>
                                    <input id="cne" name="cne" class="form-input w-full" type="text" placeholder="Enter your CNE" value="<?= esc($old['cne'] ?? '') ?>">
                                </div>
                            </div>

                            <!-- Phone Number and Email Fields -->
                            <div class="mb-4 flex gap-6">
                                <div class="w-1/2">
                                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="phoneNumber">Phone Number</label>
                                    <input id="phoneNumber" name="phone" class="form-input w-full" type="number" placeholder="Enter your phone number" value="<?= esc($old['phone'] ?? '') ?>">
                                </div>
                                <div class="w-1/2">
                                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="LoggingEmailAddress">Email Address</label>
                                    <input id="LoggingEmailAddress" name="email" class="form-input w-full" type="email" placeholder="Enter your email" value="<?= esc($old['email'] ?? '') ?>">
                                </div>
                            </div>

                            <!-- Password and Confirm Password Fields -->
                            <div class="mb-4 flex gap-6">
                                <div class="w-1/2">
                                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="loggingPassword">Password</label>
                                    <input id="loggingPassword" name="password" class="form-input w-full" type="password" placeholder="Enter your password">
                                </div>
                                <div class="w-1/2">
                                    <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2" for="confirmPassword">Confirm Password</label>
                                    <input id="confirmPassword" name="confirm_password" class="form-input w-full" type="password" placeholder="Confirm your password">
                                </div>
                            </div>

                            <div class="flex justify-center mb-6">
                                <button type="submit" class="btn w-full text-white bg-primary">Register</button>
                            </div>
                        </form>

                        <p class="text-gray-500 dark:text-gray-400 text-center">Already have an account? <a href="<?= site_url('/login') ?>" class="text-primary ms-1"><b>Log In</b></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
