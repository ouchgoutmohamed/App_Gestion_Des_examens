<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mes résultats | ExamManager</title>
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
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Mes résultats</h4>

                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="/student_dashboard" class="text-sm font-medium text-slate-700 dark:text-slate-400">ExamManager</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="/results" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Results</a>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->
                
                <div class="flex flex-col gap-6 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Informations Académiques</h4>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="grid lg:grid-cols-3 gap-6">     
                                <div>
                                    <label for="example-select" class="text-gray-800 text-sm font-medium inline-block mb-2">Année académique</label>
                                    <select class="form-select" id="example-select">
                                        <option>2024/2025</option>
                                        <option>2023/2024</option>
                                        <option>2022/2023</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="example-select" class="text-gray-800 text-sm font-medium inline-block mb-2">Semestre</label>
                                    <select class="form-select" id="example-select">
                                        <option>S1</option>
                                        <option>S2</option>
                                        <option>S3</option>
                                        <option>S4</option>
                                    </select>
                                </div>
                            </div>
                        
                        </div>
                    </div> <!-- end card -->
                </div>

                <div class="flex flex-col gap-6 mt-7">
                    <div class="card">
                        <div class="card-header">
                            <div class="flex justify-between items-center">
                                <h4 class="card-title">Suivi des Notes</h4>
                            </div>
                        </div>
                        <div class="p-6">  
                                <div class="border rounded-lg shadow-lg overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                    <table class="w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Module</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Note</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Mention</th>
                                                <th style="width:230px;" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Réclamation</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Design Thinking</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">02.00</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300">
                                                        Echoué
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="/submit_reclamation">
                                                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                                                            Soumettre une réclamation
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <!-- Disable the button "Soumettre une réclamation" when grade is 'En attente' -->
                                                <!-- Disable the button "Soumettre une réclamation" when grade is 'En attente' -->
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">GLA</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"></td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">
                                                        En attente
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Francais</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">20.00</td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300">
                                                        validée
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="/submit_reclamation">
                                                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                                                            Soumettre une réclamation
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                              
                        </div>
                    </div> <!-- end card -->

                </div>
            </main>

            <!-- Include the footer -->
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
