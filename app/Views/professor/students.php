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
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400">Full name</th>
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
                                                        <form action="/courses/<?= esc($course_id) ?>/students/<?= esc($student['student_id']) ?>/update" method="POST" class="flex">
                                                            <!-- CSRF Token -->
                                                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">

                                                            <input type="number" name="grade" value="<?= esc($student['grade']) ?>" class="form-input w-28" min="0" max="20">
                                                            <button type="submit" class="btn bg-primary text-white" style="margin-left:10px;">Update</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>

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

</body>

</html>