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
        <?= view('student/components/sidebar'); ?>

        <div class="page-content">
        
            <!-- Include the header -->
            <?= view('student/components/header'); ?>

            <main class="flex-grow p-6">

                <!-- Page Title Start -->
                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Welcome Mohamed Ouchgout!</h4>

                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="javascript:void(0)" class="text-sm font-medium text-slate-700 dark:text-slate-400">ExamManager</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="javascript:void(0)" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Dashboard</a>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->

                <div class="grid gap-6 mb-6">
                    
                    <div class="2xl:col-span-3">
                        <div class="grid xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
                            <div class="card">
                                <div class="p-6">
                                    <div class="flex justify-between items-start">
                                        <div class="flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="w-12 h-12 flex justify-center items-center rounded text-primary bg-primary/25">
                                                    <i class="mgc_document_2_line text-xl"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">General average for current semester</h4>
                                                <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">12:00</p>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                                <i class="mgc_more_1_fill text-xl"></i>
                                            </button>

                                            <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-40 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_eye_2_fill"></i> View grades
                                                </a>  
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card">
                                <div class="p-6">
                                    <div class="flex justify-between items-start">
                                        <div class="flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="w-12 h-12 flex justify-center items-center rounded text-primary bg-primary/25">
                                                    <i class="mgc_document_2_line text-xl"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <h4 class="text-base mb-1 text-gray-600 dark:text-gray-400">Reclamations</h4>
                                                <p class="font-normal text-sm text-gray-400 truncate dark:text-gray-500">3</p>
                                            </div>
                                        </div>
                                        <div>
                                            <button class="text-gray-600 dark:text-gray-400" data-fc-type="dropdown" data-fc-placement="left-start" type="button">
                                                <i class="mgc_more_1_fill text-xl"></i>
                                            </button>

                                            <div class="hidden fc-dropdown fc-dropdown-open:opacity-100 opacity-0 w-36 z-50 mt-2 transition-[margin,opacity] duration-300 bg-white dark:bg-gray-800 shadow-lg border border-gray-200 dark:border-gray-700 rounded-lg p-2">
                                                <a class="flex items-center gap-1.5 py-1.5 px-3.5 rounded text-sm transition-all duration-300 bg-transparent text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-200" href="javascript:void(0)">
                                                    <i class="mgc_eye_2_fill"></i> View
                                                </a>     
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div> <!-- Grid End -->

                <div class="grid 2xl:grid-cols-4 md:grid-cols-2 gap-6">
                    <div class="col-span-1">
                        <div class="card">
                            <div class="card-header flex justify-between items-center">
                                <h4 class="card-title">Recent grades</h4>
                            </div>

                            <div class="py-6">
                                <div class="px-6" data-simplebar style="max-height: 304px;">
                                    <div class="space-y-3 divide-y divide-gray-200 dark:divide-gray-700">
                                        <!-- Grade 1 -->
                                        <div class="flex items-center">
                                            <div class="w-full overflow-hidden">
                                                <div class="flex justify-between">
                                                    <h5 class="font-semibold text-gray-600 dark:text-gray-400">Génie logicielle avancée</h5>
                                                    <div>05.00</div>   
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <div>15/02/2025</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Grade 2 -->
                                        <div class="flex items-center py-4">
                                            <div class="w-full overflow-hidden">
                                                <div class="flex justify-between">
                                                    <h5 class="font-semibold text-gray-600 dark:text-gray-400">Math</h5>
                                                    <div>02.00</div>   
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <div>21/02/2025</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Grade 3 -->
                                        <div class="flex items-center py-4">
                                            <div class="w-full overflow-hidden">
                                                <div class="flex justify-between">
                                                    <h5 class="font-semibold text-gray-600 dark:text-gray-400">Soft Skills</h5>
                                                    <div>20.00</div>   
                                                </div>
                                                <div class="flex items-center gap-2">
                                                    <div>15/02/2025</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-1">
                        <div class="card">
                            <div class="card-header flex justify-between items-center">
                                <h4 class="card-title">Recent Reclamations</h4>
                            </div>

                            <div class="py-6">
                                <div class="px-6" data-simplebar style="max-height: 304px;">
                                    <div class="space-y-3 divide-y divide-gray-200 dark:divide-gray-700">
                                        
                                        <!-- Reclamation 1 -->
                                        <div class="flex items-center">
                                            <div class="w-full overflow-hidden">
                                                <div class="flex justify-between">
                                                    <h5 class="font-semibold text-gray-600 dark:text-gray-400">Reclamation 1</h5>
                                                    <div class="text-yellow-600 bg-yellow-100 px-2 py-0.5 rounded-full text-sm font-medium">
                                                        Pending
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-2 mt-2">
                                                    <div class="text-gray-500 text-sm">Submitted on: 15/02/2025</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Reclamation 2 -->
                                        <div class="flex items-center pt-3">
                                            <div class="w-full overflow-hidden">
                                                <div class="flex justify-between">
                                                    <h5 class="font-semibold text-gray-600 dark:text-gray-400">Reclamation 2</h5>
                                                    <div class="text-green-600 bg-green-100 px-2 py-0.5 rounded-full text-sm font-medium">
                                                        Resolved
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-2 mt-2">
                                                    <div class="text-gray-500 text-sm">Submitted on: 10/02/2025</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Reclamation 3 -->
                                        <div class="flex items-center pt-3">
                                            <div class="w-full overflow-hidden">
                                                <div class="flex justify-between">
                                                    <h5 class="font-semibold text-gray-600 dark:text-gray-400">Reclamation 3</h5>
                                                    <div class="text-red-600 bg-red-100 px-2 py-0.5 rounded-full text-sm font-medium">
                                                        Rejected
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap-2 mt-2">
                                                    <div class="text-gray-500 text-sm">Submitted on: 05/02/2025</div>
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
            <?= view('student/components/footer'); ?>

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