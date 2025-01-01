<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login | ExamManager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="App de gestion des examens" name="description">

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

            <div class="2xl:w-1/4 lg:w-1/3 md:w-1/2 w-full">
                <div class="card overflow-hidden sm:rounded-md rounded-none">
                    <div class="p-6">
                        <form action="/login" method="post">
                            <?= csrf_field() ?>

                            <a href="#" class="block mb-8">
                                <img class="h-6 block dark:hidden" src="assets/images/logo-dark.png" alt="">
                                <img class="h-6 hidden dark:block" src="assets/images/logo-light.png" alt="">
                            </a>

                            <!-- alert -->
                            <?php if (isset($error)): ?>
                                <div class="text-center bg-red-100 text-red-800 py-4 rounded-lg mb-4 text-lg">
                                    <?= esc($error) ?>
                                </div>
                            <?php endif; ?>

                            <div class="mb-4 mt-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2"
                                    for="LoggingEmailAddress">Email Address</label>
                                <input id="LoggingEmailAddress" class="form-input" name="email" type="email"
                                    placeholder="Enter your email" value="<?= isset($old) ? esc($old['email']) : '' ?>">
                            </div>

                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-600 dark:text-gray-200 mb-2"
                                    for="loggingPassword">Password</label>
                                <input id="loggingPassword" class="form-input" name="password" type="password"
                                    placeholder="Enter your password">
                            </div>

                            <div class="flex items-center justify-between mb-4">
                                <!-- <div class="flex items-center">
                                    <input type="checkbox" class="form-checkbox rounded" id="checkbox-signin">
                                    <label class="ms-2" for="checkbox-signin">Remember me</label>
                                </div> -->
                                <a href="#" class="text-sm text-primary border-b border-dashed border-primary">Forget
                                    Password ?</a>
                            </div>

                            <div class="flex justify-center mb-6">
                                <button class="btn w-full text-white bg-primary"> Log In </button>
                            </div>

                            <p class="text-gray-500 dark:text-gray-400 text-center">Don't have an account ?<a
                                    href="/signup" class="text-primary ms-1"><b>Register</b></a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>