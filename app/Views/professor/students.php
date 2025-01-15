<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dashboard | ExamManager</title>
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

    <div class="flex wrapper">

        <!-- Include the sidebar -->
        <?= view('professor/components/sidebar'); ?>

        <div class="page-content">
        
            <!-- Include the header -->
            <?= view('professor/components/header'); ?>

            <main class="flex-grow p-6">

                <!-- Page Title Start -->
                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">
                        Listes d'étudiants de module : <?= esc($course_title) ?>
                    </h4>
                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="/professor_dashboard" class="text-sm font-medium text-slate-700 dark:text-slate-400">ExamManager</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="/grades_management" class="text-sm font-medium text-slate-700 dark:text-slate-400">Gestion des Notes</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="/students" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Listes d'étudiants</a>
                        </div>
                    </div>
                </div>
                <!-- Page Title End -->

                <div class="card">
                    <div class="card-header">
                        <div class="flex justify-between items-center">
                            <h4 class="card-title">Etudiants</h4>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <div class="min-w-full inline-block align-middle">
                                <div class="border rounded-lg shadow-lg overflow-hidden dark:border-gray-700 dark:shadow-gray-900">
                                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                        <thead class="bg-gray-50 dark:bg-gray-700">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Nom et prénom</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">CNE</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Email</th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Note</th>
                                                <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                            <?php foreach ($students as $student): ?>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200"><?= esc($student['first_name']) ?> <?= esc($student['last_name']) ?></td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><?= esc($student['cne']) ?></td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><?= esc($student['email']) ?></td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200"><?= esc($student['grade']) ?></td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                                        <!-- Form for updating the grade -->
                                                        <form action="/courses/<?= esc($course_id) ?>/students/<?= esc($student['student_id']) ?>/update" method="POST" class="flex items-center" onsubmit="return confirmUpdate(event)">
                                                            <!-- CSRF Token -->
                                                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">

                                                            <div class="flex items-center space-x-3">
                                                                <input type="number" name="grade" value="<?= esc($student['grade']) ?>" class="form-input w-28 px-3 py-2 text-sm rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none" min="0" max="20">

                                                                <!-- Apply space using space-x-3 on the container for better spacing -->
                                                                <button type="submit" class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                                                                    Modifier
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                        <!-- Custom Confirmation Alert Modal -->
                                        <div id="confirmationAlert" class="hidden fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50">
                                            <div class="bg-white p-6 rounded-md shadow-lg w-1/3">
                                                <h4 class="text-md rounded-md p-2 mb-4">Etes-vous sûr de modifie cette note?</h4>
                                                <div class="flex justify-end space-x-3">      
                                                    <button id="confirmButton" class="py-2.5 px-4 inline-flex justify-center items-center gap-2 rounded bg-primary hover:bg-primary-600 text-white">
                                                        Confirmer
                                                    </button>
                                                    <button id="cancelButton" class="py-2 px-5 inline-flex justify-center items-center gap-2 rounded dark:text-gray-200 border dark:border-slate-700 font-medium hover:bg-slate-100 hover:dark:bg-slate-700 transition-all" data-fc-dismiss type="button">
                                                        Annuler
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end card -->

</main>

            <!-- Include the header -->
            <?= view('professor/components/footer'); ?>

        </div>

    </div>


    <!-- Plugin Js -->
    <script src="<?= base_url('assets/libs/simplebar/simplebar.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/feather-icons/feather.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/@frostui/tailwindcss/frostui.js') ?>"></script>

    <!-- App Js -->
    <script src="<?= base_url('assets/js/app.js') ?>"></script>

    <!-- Apexcharts js -->
    <script src="<?= base_url('assets/libs/apexcharts/apexcharts.min.js') ?>"></script>

    <!-- Dashboard Project Page js -->
    <script src="<?= base_url('assets/js/pages/dashboard.js') ?>"></script>

    <script>
        // JavaScript function to show the confirmation modal
        function confirmUpdate(event) {
            event.preventDefault(); // Prevent form submission

            // Show the confirmation modal
            document.getElementById('confirmationAlert').classList.remove('hidden');
            
            // Set up the action for confirming
            document.getElementById('confirmButton').onclick = function() {
                event.target.submit(); // Submit the form if confirmed
                document.getElementById('confirmationAlert').classList.add('hidden'); // Hide the modal
            };
            
            // Set up the action for canceling
            document.getElementById('cancelButton').onclick = function() {
                document.getElementById('confirmationAlert').classList.add('hidden'); // Hide the modal
            };
        }
    </script>

</body>

</html>