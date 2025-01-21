<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mes réclamations | ExamManager</title>
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
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Mes réclamations</h4>

                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="/student_dashboard" class="text-sm font-medium text-slate-700 dark:text-slate-400">ExamManager</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="/results" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Mes réclamations</a>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->

                <div class="flex flex-col gap-6 mt-7">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">List des réclamations</h4>
                            </div>
                        </div>
                        <div class="p-6">  
                                <div class="border rounded-lg shadow-lg overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                    <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Module</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Date de Réclamation</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Statut</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Justification</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">Design Thinking</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">21/01/2024</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">
                                                        En cours
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200 truncate" title="Problème de correction">Problème de correction</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">GLA</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">21/01/2024</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300">
                                                        Acceptée
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">Justification validée</td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">Francais</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">21/01/2024</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300">
                                                        Rejetée
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">Manque de documents justificatifs</td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>                              
                        </div>
                    </div> <!-- end card -->

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