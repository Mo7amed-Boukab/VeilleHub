<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Enseignant - Veille Pédagogique</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!--------------------------------------------- Sidebar ---------------------------------------------------------->
    <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-indigo-900 text-white transition-transform duration-300 transform -translate-x-full md:translate-x-0">
        <div class="p-6 bg-indigo-900 flex items-center">
            <i class="fas fa-book-open text-4xl text-indigo-600"></i>
            <h2 class="text-3xl font-bold px-2">VeilleHub</h2>
        </div>
        <nav class="mt-6">
            <div class="px-4 py-2">
                <h3 class="text-xs uppercase text-indigo-400 font-semibold">Général</h3>
            </div>
            <a id="dashboard" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                <i class="ri-dashboard-line mr-3 text-xl"></i>
                Tableau de bord
            </a>
            <a  class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                <i class="ri-calendar-line mr-3 text-xl"></i>
                Calendrier
            </a>
            
            <div class="px-4 py-2 mt-4">
                <h3 class="text-xs uppercase text-indigo-400 font-semibold">Gestion</h3>
            </div>
            <a id="topics" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                <i class="ri-book-open-line mr-3 text-xl"></i>
                Sujets
            </a>
            <a id="students" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                <i class="ri-group-line mr-3 text-xl"></i>
                Étudiants
            </a>
            <a id="presentation" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                <i class="ri-presentation-line mr-3 text-xl"></i>
                Présentations
            </a>
            <div class="px-4 py-2 mt-4">
                <h3 class="text-xs uppercase text-indigo-400 font-semibold">Compte</h3>
            </div>
            <div class="mt-auto pb-6">
                <a href="/logout" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                    <i class="ri-logout-box-line mr-3 text-xl"></i>
                    Déconnexion
                </a>
            </div>
        </nav>
    </div>

<div class="md:ml-64 p-8">
        <!------------------------------------------ Header ----------------------------------------------------->
    <header class="flex justify-between items-center mb-8">
            <div class="flex items-center">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Tableau de bord</h1>
                    <p class="text-gray-600">Bienvenue, <?= $teacher_name; ?></p>
                </div>
            </div>
            
            <div class="flex items-center space-x-6 relative">
            <div class="relative">
                <button aria-label="Notifications" class="relative p-2 rounded-full transition">
                    <i class="ri-notification-3-line text-2xl text-gray-600"></i>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center shadow">
                        3
                    </span>
                </button>
            </div>

            <div class="flex items-center space-x-3">
                <div class="p-3 bg-gray-100 rounded-full">
                    <i class="ri-user-3-line text-2xl text-gray-600"></i>
                </div>
                <div class="hidden sm:block">
                    <p class="text-md text-gray-900"><?= $teacher_name; ?></p>
                    <p class="text-xs text-gray-500">Enseignant</p>
                </div>
            </div>
        </div>

    </header>

        <!-- ---------------------------- statistiques ------------------------------- -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                        <i class="fas fa-users text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Total Étudiants</p>
                        <p class="text-2xl font-semibold text-gray-900"><?= htmlspecialchars($total_students['total_students']) ?></p>

                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <i class="fas fa-tasks text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Sujets en Attente</p>
                        <p class="text-2xl font-semibold text-gray-900"><?= htmlspecialchars($total_topics['total_topics']) ?></p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                        <i class="fas fa-chalkboard-teacher text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Présentations cette semaine</p>
                        <p class="text-2xl font-semibold text-gray-900">8</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-3 rounded-full bg-red-100 text-red-600">
                        <i class="fas fa-chart-pie text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Taux de participation</p>
                        <p class="text-2xl font-semibold text-gray-900">85%</p>
                    </div>
                </div>
            </div>
        </div>
   <!-- ----------------------------------------------- Main Section --------------------------------------------------- -->
        <div id="approvation-section" class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Sujets en attente -->
            <div class="bg-white p-6 rounded-lg shadow-sm overflow-x-auto">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Dernière Sujets</h3>
                <div class="min-w-full">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sujet</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Proposé Par</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <?php foreach($topics as $topic): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= htmlspecialchars($topic['titre']) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= htmlspecialchars($topic['student_name']) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                    <a href="/dashboard/valideTopic/<?= $topic['id'] ?>" class="bg-yellow-500 text-white px-3 py-1 rounded text-xs hover:bg-yellow-600">
                                           <?php echo ($topic['statut'] === 'approuvé')? 'Valider' : 'Valider' ?>
                                    </a>
                                     <a href="/dashboard/regeterTopic/<?= $topic['id'] ?>" class="bg-indigo-600 text-white px-3 py-1 rounded text-xs hover:bg-indigo-700">
                                         Rejeter
                                     </a>
                                    </div>
                                </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>    
            <!-- ----------------------------  account Validation ---------------------------- -->
            <div class="bg-white p-6 rounded-lg shadow-sm overflow-x-auto">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Nouvelles comptes</h3>
                <div class="min-w-full">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">      
                        <?php if (isset($allStudents)): ?>
                        <?php foreach ($allStudents as $student): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= htmlspecialchars($student['username']) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= htmlspecialchars($student['email']) ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                      <a href="/dashboard/valideAccount/<?= $student['id'] ?>" class="bg-green-600 text-white px-3 py-1 rounded text-xs hover:bg-green-700">
                                             <?php echo ($student['statut'] === 'approuvé')? 'Accepted' : 'Accepter' ?>
                                        </a>
                                        <a href="/dashboard/regeterAccount/<?= $student['id'] ?>" class="bg-red-600 text-white px-3 py-1 rounded text-xs hover:bg-red-700">
                                            Rejeter
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php endif; ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
 <!--  ------------------------ manage Topics section --------------------   -->
  <?php  require_once __DIR__.'/../dashboard/manageTopics.php'; ?>
<!--  ------------------------ manage students section --------------------   -->
<?php  require_once __DIR__.'/../dashboard/manageStudents.php'; ?>
<!--  ------------------------ manage presentations section --------------------   -->
<?php  require_once __DIR__.'/../dashboard/managePresentations.php'; ?>

</div>

    <script>
        // -----------------------------------------------------
        const lastTopicStudents = document.getElementById('approvation-section');
        const mainTopicsSection = document.getElementById('main-topics-section');
        const mainStudentsSection = document.getElementById('main-students-section');
        const presentationSection = document.getElementById('presentation-section');

        const dashboard = document.getElementById('dashboard');
        const topics = document.getElementById('topics');
        const students = document.getElementById('students');
        const presentation = document.getElementById('presentation');

        dashboard.addEventListener('click', ()=>{
          lastTopicStudents.style.display="flex";
          mainTopicsSection.style.display="none";
          mainStudentsSection.style.display="none";
          presentationSection.style.display="none";
        })
        topics.addEventListener('click', ()=>{
          lastTopicStudents.style.display="none";
          mainTopicsSection.style.display="block";
          mainStudentsSection.style.display="none";
          presentationSection.style.display="none";
        })
        students.addEventListener('click', ()=>{
          lastTopicStudents.style.display="none";
          mainTopicsSection.style.display="none";
          mainStudentsSection.style.display="block";
          presentationSection.style.display="none";
        })
        presentation.addEventListener('click', ()=>{
          lastTopicStudents.style.display="none";
          mainTopicsSection.style.display="none";
          mainStudentsSection.style.display="none";
          presentationSection.style.display="block";
        })
        
        const assignModal = document.getElementById('assignModal');
        const assignBtn = document.getElementById('assignBtn');

        assignBtn.addEventListener('click', () => {
            assignModal.classList.remove('hidden'); 
        });

        const closeModal = document.querySelectorAll('.cancelModal');
        closeModal.forEach((btn) => {
            btn.addEventListener('click', () => {
             assignModal.classList.add('hidden');
             assignModal.classList.remove('flex');
            });
        }); 
            
    </script>
</body>
</html>