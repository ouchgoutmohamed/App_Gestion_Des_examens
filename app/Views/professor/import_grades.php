<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | ExamManager</title>
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

    <div class="flex wrapper">

        <!-- Include the sidebar -->
        <?= view('professor/components/sidebar'); ?>

        <div class="page-content">
        
            <!-- Include the header -->
            <?= view('professor/components/header'); ?>

            <main class="flex-grow p-6">

<!-- Page Title Start -->
<div class="flex justify-between items-center mb-6">
    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Listes des Modules</h4>

    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
        <div class="flex items-center gap-2">
            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">ExamManager</a>
        </div>

        <div class="flex items-center gap-2">
            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Table</a>
        </div>

        <div class="flex items-center gap-2">
            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
            <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Modules</a>
        </div>
    </div>
</div>
<!-- Page Title End -->

    <div class="">
                    <div class="col-span-1">
                        <div class="card">
                            <div class="card-header flex justify-between items-center">
                                <h4 class="card-title">Modules</h4>
                            </div>

                            <div class="py-6">
                                <div class="px-6" data-simplebar style="max-height: 304px;">
                                    <div class="space-y-3 divide-y divide-gray-200 dark:divide-gray-700">

                                        <!-- Grade 2 -->
                                        <div class="flex items-center py-4">
                                            <div class="w-full overflow-hidden">
                                                <div class="flex justify-between">
                                                    <div class="flex justify-between">
                                                        <h5 class="font-semibold text-gray-600 dark:text-gray-400">Design Thinking</h5> 
                                                    </div>
                                                    <div>
                                                    <button type="button" class="btn bg-primary text-white">Import</button>
                                                    <button type="button" class="btn bg-primary text-white">Export</button>           
                                                    </div>
                                                    </div>
                                                
                                                
                                            </div>
                                        </div>
                                        <!-- Grade 3 -->
                                        <div class="flex items-center py-4">
                                            <div class="w-full overflow-hidden">
                                            <div class="flex justify-between">
                                                    <div class="flex justify-between">
                                                        <h5 class="font-semibold text-gray-600 dark:text-gray-400">GLA</h5> 
                                                    </div>
                                                    <div>
                                                    <button type="button" class="btn bg-primary text-white">Import</button>
                                                    <button type="button" class="btn bg-primary text-white">Export</button>
    
                                                    </div>
                                             </div>

                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
</main>

            <!-- Include the header -->
            <?= view('professor/components/footer'); ?>

        </div>

    </div>


    <!-- Plugin Js -->
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/libs/%40frostui/tailwindcss/frostui.js"></script>

    <!-- App Js -->
    <script src="assets/js/app.js"></script>

    <!-- Apexcharts js -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Dashboard Project Page js -->
    <script src="assets/js/pages/dashboard.js"></script>

</body>

</html>