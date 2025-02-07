
<?php 

if(!isset($_SESSION['user_loged_in_id']) || !isset($_SESSION['user_loged_in_role']) || $_SESSION['user_loged_in_role'] != 'étudiant'){
  header('location: login');
  exit;
}else{
  $student_id = $_SESSION['user_loged_in_id'];
  $student_name = $_SESSION['user_loged_in_name'];
}
  


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Étudiant - Veille Pédagogique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
    <!-- Sidebar -->
    <div id="sidebar" class="fixed inset-y-0 left-0 w-64 bg-indigo-900 text-white transition-transform duration-300 transform -translate-x-full md:translate-x-0">
        <div class="p-6 bg-indigo-900 flex items-center">
            <i class="fas fa-book-open text-4xl text-indigo-600"></i>
            <h2 class="text-3xl font-bold px-2">VeilleHub</h2>
        </div>
        <nav class="mt-6">
        <nav class="mt-6">
            <div class="px-4 py-2">
                <h3 class="text-xs uppercase text-indigo-400 font-semibold">Général</h3>
            </div>
            <a id="btnDashboard" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
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
            <a id="btnTopics" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                <i class="ri-book-open-line mr-3 text-xl"></i>
                Mes sujets
            </a>
            <a id="btnPresentations" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                <i class="ri-presentation-line mr-3 text-xl"></i>
                Mes présentations
            </a>
            <div class="px-4 py-2 mt-4">
                <h3 class="text-xs uppercase text-indigo-400 font-semibold">Compte</h3>
            </div>
            <a href="#" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                <i class="ri-user-settings-line mr-3 text-xl"></i>
                Profil
            </a>
            <div class="mt-auto pb-6">
                <a href="/logout" class="flex items-center px-6 py-3 text-indigo-100 hover:bg-indigo-700 transition-colors duration-200">
                    <i class="ri-logout-box-line mr-3 text-xl"></i>
                    Déconnexion
                </a>
            </div>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="md:ml-64 p-8">
        <!-- Header -->
        <header class="flex justify-between items-center mb-8">
            <div class="flex items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Tableau de bord</h1>
                    <p class="text-gray-600">Bienvenue, <?= $student_name; ?></p>
                </div>
            </div>
            
            <div class="flex items-center space-x-4">
                <button class="bg-white p-2 rounded-full shadow-sm relative">
                    <i class="ri-notification-3-line text-xl text-gray-600"></i>
                    <span class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center">2</span>
                </button>
                <div class="flex items-center">
                    <i class="ri-user-3-line text-xl text-gray-600"></i>
                    <span class="ml-2 text-sm font-medium text-gray-700"><?= $student_name; ?></span>
                </div>
            </div>
        </header>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-5 rounded-full bg-indigo-100 text-indigo-600">
                        <i class="fas fa-book text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-md font-medium text-gray-600">Sujets proposés</p>
                        <p class="text-2xl font-semibold text-gray-900">3</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-5 rounded-full bg-green-100 text-green-600">
                        <i class="fas fa-check-circle text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-md font-medium text-gray-600">Sujets validés</p>
                        <p class="text-2xl font-semibold text-gray-900">2</p>
                    </div>
                </div>
            </div>
            <div class="bg-white p-10 rounded-lg shadow-sm">
                <div class="flex items-center">
                    <div class="p-5 rounded-full bg-yellow-100 text-yellow-600">
                        <i class="fas fa-clock text-2xl"></i>
                    </div>
                    <div class="ml-4">
                        <p class="text-md font-medium text-gray-600">Présentations à venir</p>
                        <p class="text-2xl font-semibold text-gray-900">1</p>
                    </div>
                </div>
            </div>
          
        </div>

        <!-- Main Grid -->
        <div id="dashboard-section" class="grid grid-cols-1 lg:grid-cols-2 gap-8 ">
            <!-- Mes sujets -->
            <div class="bg-white p-6 rounded-lg shadow-sm overflow-x-auto">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Mes sujets</h3>
                <div class="min-w-full">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sujet</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date de soumission</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Intelligence Artificielle en Santé</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Validé
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/05/2023</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Blockchain et Cryptomonnaies</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        En attente
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">02/06/2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Prochaines présentations -->
            <div class="bg-white p-6 rounded-lg shadow-sm overflow-x-auto">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Prochaines présentations</h3>
                <div class="min-w-full">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sujet</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Groupe</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Intelligence Artificielle en Santé</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">20/06/2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Groupe A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
  <div id="main-topics" class="mt-8 hidden">
    <div  class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-900">Mes Sujets de Présentation</h2>
        <button id="btn-addTopic" class="bg-indigo-800 text-white px-4 py-2 rounded-md hover:bg-indigo-900 transition-colors flex items-center">
            <i class="ri-add-line mr-2"></i>
            Ajouter un Sujet
        </button>
    </div>
        <div class="bg-white p-6 rounded-lg shadow-sm overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Titre du Sujet</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date de Soumission</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Intelligence Artificielle en Santé</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/05/2023</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            Validé
                        </span>
                    </td>
                  
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                                <button class="bg-indigo-600 text-white px-3 py-1 rounded text-xs hover:bg-indigo-700">
                                        Delete
                                </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Blockchain et Cryptomonnaies</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">02/06/2023</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            En Attente
                        </span>
                    </td>
                  
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                                <button class="bg-indigo-600 text-white px-3 py-1 rounded text-xs hover:bg-indigo-700">
                                        Delete
                                </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>

    

<div id="addTopicModal" class="fixed inset-0 z-50  items-center justify-center bg-black bg-opacity-30 hidden">
    <div class="w-full max-w-lg">
        <div class="bg-white border border-gray-200 shadow-xl p-6 space-y-6">
            <div class="flex justify-between items-center mb-8 border-b border-gray-300 pb-5">
                <h2 class="text-2xl font-bold text-indigo-700">Proposer un Sujet</h2>
                <button class="cancelModal text-gray-400 hover:text-gray-600">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>
            <form id="addSubjectForm" class="space-y-4" action="newTopic" method="POST">
                <div>
                    <label class="block text-md font-medium text-gray-700 mb-2">Titre du Sujet</label>
                    <input 
                        type="text" 
                        id="subjectTitle" 
                        name="title"
                        required 
                        class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:border-indigo-500 rounded-md"
                        placeholder="Saisissez le titre de votre sujet"
                    >
                </div>
                <div>
                    <label class="block text-md font-medium text-gray-700 mb-2 ">Description</label>
                    <textarea 
                        id="subjectDescription" 
                        name="description"
                        rows="4" 
                        required 
                        class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:border-indigo-500 rounded-md "
                        placeholder="Décrivez brièvement votre sujet"
                    ></textarea>
                </div>
                <div class="flex justify-end space-x-3">
                    <button 
                        type="button" 
                        class="cancelModal" 
                        class="px-4 py-2 text-gray-500 hover:bg-gray-100 rounded"
                    >
                        Annuler
                    </button>
                    <button 
                        type="submit" 
                        name="save"
                        class="px-4 py-2 bg-indigo-600 text-white hover:bg-indigo-700 rounded"
                    >
                        Soumettre
                    </button>
                </div>
            </form>
        </div>
</div>

    <script >

const btnAddTopic = document.getElementById('btn-addTopic');
const addTopicModal = document.getElementById('addTopicModal');
const closeModal = document.querySelectorAll('.cancelModal');

btnAddTopic.addEventListener('click', () => {
    addTopicModal.classList.add('flex');
    addTopicModal.classList.remove('hidden');
});

closeModal.forEach((btn) => {
    btn.addEventListener('click', () => {
        addTopicModal.classList.add('hidden');
        addTopicModal.classList.remove('flex');
    });
});


  const btnTopics = document.getElementById('btnTopics');
  const btnDashboard = document.getElementById('btnDashboard');
  const topicSection = document.getElementById('main-topics');
  const mainSection = document.getElementById('dashboard-section');

  btnTopics.addEventListener('click', () => {
    topicSection.classList.remove('hidden'); 
    mainSection.classList.add('hidden'); 
});
btnDashboard.addEventListener('click', () => {
    mainSection.classList.remove('hidden'); 
    topicSection.classList.add('hidden'); 
});


    </script>
</body>
</html>

