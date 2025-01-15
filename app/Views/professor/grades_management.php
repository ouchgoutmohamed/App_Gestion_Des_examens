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
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Gestion des Notes</h4>

                    <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
                        <div class="flex items-center gap-2">
                            <a href="/professor_dashboard" class="text-sm font-medium text-slate-700 dark:text-slate-400">ExamManager</a>
                        </div>

                        <div class="flex items-center gap-2">
                            <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                            <a href="/grades_management" class="text-sm font-medium text-slate-700 dark:text-slate-400" aria-current="page">Gestion des Notes</a>
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

                <div class="col-span-1">
                    <div class="card">
                        <div class="card-header flex justify-between items-center">
                            <h4 class="card-title">Listes des Modules</h4>
                        </div>

                        <div class="py-6">
                            <div class="px-6" data-simplebar style="max-height: 304px;">
                                <div class="space-y-3 divide-y divide-gray-200 dark:divide-gray-700">

                                    <?php if (!empty($courses)): ?>
                                        <?php foreach ($courses as $course): ?>
                                            <div class="flex items-center py-4">
                                                <div class="w-full overflow-hidden">
                                                    <div class="flex justify-between items-center">
                                                        <!-- Course Title -->
                                                        <h5 class="font-semibold text-gray-600 dark:text-gray-400">
                                                            <?= esc($course['title']); ?>
                                                        </h5>
                                                        <!-- Actions -->
                                                        <div class="flex gap-2">
                                                            <div class="flex justify-center ali">
                                                                <form action="/courses/<?= esc($course['id']); ?>/import_grades" method="post" enctype="multipart/form-data">
                                                                    <?= csrf_field(); ?>
                                                                    <label for="file-upload-<?= esc($course['id']); ?>"
                                                                        class="btn w-full text-white bg-primary">
                                                                        Import
                                                                    </label>
                                                                    <input id="file-upload-<?= esc($course['id']); ?>" name="excel_file" type="file" class="hidden" />
                                                                </form>
                                                            </div>
                                                            <button type="button"
                                                                class="btn bg-primary text-white">Export</button>
                                                            <a href="/courses/<?= esc($course['id']); ?>/students"
                                                                class="btn bg-primary text-white">
                                                                Voir Etudiants
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <p class="text-gray-600 dark:text-gray-400 text-center">Aucun module disponible.</p>
                                    <?php endif; ?>

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

    <script>
        const file_inputs = document.querySelectorAll('input[type="file"]');

        console.log(file_inputs);
        

        for (let i = 0; i < file_inputs.length; i++) {
            file_inputs[i].onchange = (e) => {
                e.target.parentElement.submit();
            }
        }

    </script>

</body>

</html>