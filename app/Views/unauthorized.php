<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Error Page | 404 | Page not Found | Konrix - Responsive Tailwind Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="coderthemes" name="author">

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
            <div class="flex flex-col justify-center text-center gap-6">
                <div  class="flex justify-center mx-auto">
                    <img class="h-6 block dark:hidden" src="assets/images/logo-dark.png" alt="">
                    <img class="h-6 hidden dark:block" src="assets/images/logo-light.png" alt="">
                </div>
                <p class="text-3xl font-semibold text-primary">403 Forbidden!</p>
                <h1 class="text-4xl font-bold tracking-tight dark:text-gray-100">Unauthorized Access!</h1>
                <?php if (session()->getFlashdata('error')) : ?>
                    <p class="text-base text-gray-600 dark:text-gray-300"><?= session()->getFlashdata('error'); ?></p>
                <?php endif; ?>
                <a href="/" class="text-base font-medium text-primary"> Go back</a>
            </div>
        </div>
    </div>

</body>

</html>