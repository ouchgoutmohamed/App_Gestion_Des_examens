<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soumettre une Réclamation | ExamManager</title>
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="flex wrapper">

        <!-- Include the sidebar -->
        <?= view('student/components/sidebar'); ?>

        <div class="page-content">

            <!-- Include the header -->
            <?= view('student/components/header'); ?>

            <main class="flex-grow p-6">

                <div class="flex justify-between items-center mb-6">
                    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Soumettre une Réclamation</h4>
                </div>

                <div class="flex flex-col gap-6 mt-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Réclamation pour le Module : <?= $course_name ?? 'N/A' ?></h4>
                        </div>
                        <div class="p-6">
                            <form action="/submit_reclamation" method="POST" enctype="multipart/form-data">
                                <?= csrf_field() ?>

                                <!-- Hidden Fields for IDs -->
                                <input type="hidden" name="professor_id" value="<?= $professor_id ?? '' ?>">
                                <input type="hidden" name="course_id" value="<?= $course_id ?? '' ?>">

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- Justification Field -->
                                    <div class="col-span-2">
                                        <label for="justification" class="block text-sm font-medium text-gray-800 dark:text-gray-200">
                                            Justification
                                        </label>
                                        <textarea id="justification" name="justification" rows="4"
                                            class="form-textarea mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"
                                            placeholder="Expliquez brièvement la raison de votre réclamation..." required><?= old('justification') ?></textarea>
                                    </div>

                                    <!-- File Upload Field -->
                                    <div class="space-y-4 col-span-2">
                                        <label for="attachment" class="block text-sm font-medium text-gray-800 dark:text-gray-200">
                                            Pièce jointe (optionnelle)
                                        </label>
                                        <div class="flex items-center justify-center w-full">
                                            <label for="attachment"
                                                class="w-full flex flex-col justify-center items-center w-full h-32 px-4 transition bg-gray-50 border-2 border-dashed border-gray-300 rounded-md cursor-pointer hover:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:bg-gray-800 dark:border-gray-600 dark:hover:border-blue-400">
                                                <i class="mgc_upload_3_line text-4xl text-gray-300 dark:text-gray-200"></i>
                                                <span class="text-sm text-gray-600 dark:text-gray-200">Cliquez pour sélectionner ou glissez un fichier ici</span>
                                                <input id="attachment" name="attachment" type="file" class="hidden"
                                                    accept=".pdf,.jpg,.png" onchange="handleFileUpload(event)">
                                            </label>
                                        </div>
                                        <small class="text-gray-500 dark:text-gray-400 block">
                                            Formats acceptés : PDF, JPG, PNG
                                        </small>

                                        <!-- File Preview -->
                                        <div id="file-preview" class="mt-4"></div>
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="mt-6">
                                    <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                                        Soumettre
                                    </button>
                                </div>
                            </form>

                            <!-- Flash Messages -->
                            <?php if (session()->getFlashdata('success')) : ?>
                                <div class="alert alert-success mt-4">
                                    <?= session()->getFlashdata('success') ?>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->getFlashdata('error')) : ?>
                                <div class="alert alert-danger mt-4">
                                    <?= session()->getFlashdata('error') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Include the footer -->
            <?= view('student/components/footer'); ?>

        </div>
    </div>

    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- File Upload Preview -->
    <script>
        function handleFileUpload(event) {
            const previewContainer = document.getElementById('file-preview');
            previewContainer.innerHTML = ''; // Clear previous previews

            const file = event.target.files[0];
            if (file) {
                const validTypes = ['image/jpeg', 'image/png', 'application/pdf'];
                if (!validTypes.includes(file.type)) {
                    alert('Type de fichier non valide. Seuls les fichiers JPG, PNG et PDF sont acceptés.');
                    event.target.value = ''; // Reset the file input
                    return;
                }

                const fileName = document.createElement('p');
                fileName.className = "text-sm text-gray-800 dark:text-gray-200";
                fileName.textContent = `Fichier sélectionné : ${file.name}`;
                previewContainer.appendChild(fileName);

                // If the file is an image, show a preview
                if (file.type.startsWith('image/')) {
                    const imgPreview = document.createElement('img');
                    imgPreview.src = URL.createObjectURL(file);
                    imgPreview.alt = file.name;
                    imgPreview.className = "mt-2 w-32 h-32 object-cover rounded-md shadow-md";
                    previewContainer.appendChild(imgPreview);
                }
            }
        }
    </script>
</body>

</html>
