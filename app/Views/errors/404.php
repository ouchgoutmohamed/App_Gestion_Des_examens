<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Erreur 404 | ExamManager</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="App de gestion des examens" name="description">

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">

    <!-- App css -->
    <link href="<?= base_url('assets/css/app.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- Icons css -->
    <link href="<?= base_url('assets/css/icons.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- Theme Config Js -->
    <script src="<?= base_url('assets/js/config.js') ?>"></script>
</head>

<body>

    <div class="bg-gradient-to-r from-rose-100 to-teal-100 dark:from-gray-700 dark:via-gray-900 dark:to-black">
        <div class="h-screen w-screen flex justify-center items-center">
            <div class="flex flex-col justify-center text-center gap-6">
                <a href="<?= base_url('/') ?>" class="flex justify-center mx-auto">
                    <img class="h-6 block dark:hidden" src="<?= base_url('assets/images/logo-dark.png') ?>" alt="">
                    <img class="h-6 hidden dark:block" src="<?= base_url('assets/images/logo-light.png') ?>" alt="">
                </a>
                <p class="text-3xl font-semibold text-primary">404!</p>
                <h1 class="text-4xl font-bold tracking-tight dark:text-gray-100">Page not found.</h1>
                <p class="text-base text-gray-600 dark:text-gray-300">Sorry, we couldn’t find the page you’re looking for.</p>
                <a href="<?= base_url('/') ?>" class="text-base font-medium text-primary"> Go back home </a>
            </div>
        </div>
    </div>

</body>

</html>
