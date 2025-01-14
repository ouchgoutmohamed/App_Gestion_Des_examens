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
    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Listes d'étudiants</h4>

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
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">Mohamed ouchgout</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">D2231313131</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">mohamedouchgout@gmail.com</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">02.00</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium ">
                                                        <div class="flex justify-end">
                                                            <input value="02.00" type="text" id="simpleinput" class="form-input w-28">
                                                            <button style="margin-left:10px;" type="button" class="btn bg-primary text-white">Update</button>

                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">abdallah radfi</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">D2231313131</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">abdallahradfi@gmail.com</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">01.00</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium ">
                                                        <div class="flex justify-end">
                                                            <input value="01.00" type="text" id="simpleinput" class="form-input w-28">
                                                            <button style="margin-left:10px;" type="button" class="btn bg-primary text-white">Update</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div id="ShadowTableHtml" class="hidden w-full overflow-hidden transition-[height] duration-300">
                                <pre class="language-html h-56">
                                    <code>
                                        &lt;div class=&quot;overflow-x-auto&quot;&gt;
                                            &lt;div class=&quot;min-w-full inline-block align-middle&quot;&gt;
                                                &lt;div class=&quot;border rounded-lg shadow-lg overflow-hidden dark:border-gray-700 dark:shadow-gray-900&quot;&gt;
                                                    &lt;table class=&quot;min-w-full divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                        &lt;thead class=&quot;bg-gray-50 dark:bg-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Name&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Age&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Address&lt;/th&gt;
                                                                &lt;th scope=&quot;col&quot; class=&quot;px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-gray-400&quot;&gt;Action&lt;/th&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/thead&gt;
                                                        &lt;tbody class=&quot;divide-y divide-gray-200 dark:divide-gray-700&quot;&gt;
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;John Brown&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;45&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;New York No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Jim Green&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;27&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;London No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
            
                                                            &lt;tr&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200&quot;&gt;Joe Black&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;31&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200&quot;&gt;Sidney No. 1 Lake Park&lt;/td&gt;
                                                                &lt;td class=&quot;px-6 py-4 whitespace-nowrap text-end text-sm font-medium&quot;&gt;
                                                                    &lt;a class=&quot;text-primary hover:text-sky-700&quot; href=&quot;#&quot;&gt;Delete&lt;/a&gt;
                                                                &lt;/td&gt;
                                                            &lt;/tr&gt;
                                                        &lt;/tbody&gt;
                                                    &lt;/table&gt;
                                                &lt;/div&gt;
                                            &lt;/div&gt;
                                        &lt;/div&gt;
                                    </code>
                                </pre>
                            </div>
                        </div>
                    </div> <!-- end card -->

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