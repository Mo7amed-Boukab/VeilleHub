<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VeilleHub - Système de Gestion de Veille Pédagogique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  
</head>
<body class="min-h-screen bg-gray-50">
    <!-- Header -->
  <?php  require_once __DIR__.'/../templates/header.php'; ?>

    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-indigo-900 to-indigo-500 text-white py-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold sm:text-5xl lg:text-6xl mb-6">
                    Gérez votre veille pédagogique
                </h1>
                <p class="text-xl max-w-2xl mx-auto mb-16">
                    Simplifiez la gestion des présentations et le suivi des étudiants avec VeilleHub.
                </p>
                <a href="#calendar" class="px-6 py-3 bg-white text-indigo-700 text-lg font-semibold rounded-md hover:bg-gray-100 transition duration-300">
                    Consulter le calendrier
                </a>
            </div>
        </div>
    </section>
    
    <section id="calendar" class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Calendrier des présentations</h2>
            <div class="grid grid-cols-7 gap-1 border rounded-lg overflow-hidden">
                <div class="bg-indigo-700 text-white font-bold py-3">Dim</div>
                <div class="bg-indigo-700 text-white font-bold py-3">Lun</div>
                <div class="bg-indigo-700 text-white font-bold py-3">Mar</div>
                <div class="bg-indigo-700 text-white font-bold py-3">Mer</div>
                <div class="bg-indigo-700 text-white font-bold py-3">Jeu</div>
                <div class="bg-indigo-700 text-white font-bold py-3">Ven</div>
                <div class="bg-indigo-700 text-white font-bold py-3">Sam</div>
                
                <!-- Jours du mois -->
                <div class="py-6 bg-gray-200 text-gray-500">29</div>
                <div class="py-6 bg-gray-200 text-gray-500">30</div>
                <div class="py-6 bg-gray-200 text-gray-500">31</div>
                <div class="py-6 bg-white">1</div>
                <div class="py-6 bg-white">2</div>
                <div class="py-6 bg-white">3</div>
                <div class="py-6 bg-white">4</div>
                <div class="py-6 bg-white">5</div>
                <div class="py-6 bg-white">6 <div class="mt-1 bg-indigo-500 text-white text-xs rounded px-2">IA en éducation</div></div>
                <div class="py-6 bg-white">7 <div class="mt-1 bg-indigo-500 text-white text-xs rounded px-2">Apprentissage actif</div></div>
                <div class="py-6 bg-white">8 <div class="mt-1 bg-indigo-500 text-white text-xs rounded px-2">Gamification</div></div>
                <div class="py-6 bg-white">9 <div class="mt-1 bg-indigo-500 text-white text-xs rounded px-2">Enseignement à distance</div></div>
                <div class="py-6 bg-white">10 <div class="mt-1 bg-indigo-500 text-white text-xs rounded px-2">Tech. mobiles</div></div>
                <div class="py-6 bg-white">11</div>
                <div class="py-6 bg-white">12</div>
                <div class="py-6 bg-white">13</div>
                <div class="py-6 bg-white">14</div>
                <div class="py-6 bg-white">15</div>
                <div class="py-6 bg-white">16</div>
                <div class="py-6 bg-white">17</div>
                <div class="py-6 bg-white">18</div>
                <div class="py-6 bg-white">19</div>
                <div class="py-6 bg-white">20</div>
                <div class="py-6 bg-white">21</div>
                <div class="py-6 bg-white">22</div>
                <div class="py-6 bg-white">23</div>
                <div class="py-6 bg-white">24</div>
                <div class="py-6 bg-white">25</div>
                <div class="py-6 bg-white">26</div>
                <div class="py-6 bg-white">27</div>
                <div class="py-6 bg-white">28</div>
                <div class="py-6 bg-gray-200 text-gray-500">1</div>
                <div class="py-6 bg-gray-200 text-gray-500">2</div>
                <div class="py-6 bg-gray-200 text-gray-500">3</div>
                <div class="py-6 bg-gray-200 text-gray-500">4</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php  require_once __DIR__.'/../templates/footer.php'; ?>
</body>
</html>

