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
                </div>
                <!-- Page Title End -->
                
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
                                            <th style="width:250px;" scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Réclamation</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <?php foreach ($grades as $grade): ?>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                                    <?= esc($grade['title']); ?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">
                                                    <?= !empty($grade['grade']) ? number_format($grade['grade'], 2) : ''; ?>
                                                </td>
                                                <td class="px-6 py-4 text-sm text-gray-800 dark:text-gray-200">
                                                    <?php if (empty($grade['grade'])): ?>
                                                        <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900 dark:text-yellow-300">
                                                            En attente
                                                        </span>
                                                    <?php elseif ($grade['grade'] < 10): ?>
                                                        <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-300">
                                                            Échoué
                                                        </span>
                                                    <?php else: ?>
                                                        <span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-300">
                                                            Validée
                                                        </span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php if (!empty($grade['grade'])): ?>
                                                        <a href="/submit_reclamation?course_id=<?= esc($grade['course_id']); ?>">
                                                            <button type="button" class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                                                                Soumettre une réclamation
                                                            </button>
                                                        </a>
                                                    <?php else: ?>
                                                        <h4 class="text-md">Reclamation non disponible</h4>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
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

</body>

</html>
