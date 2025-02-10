

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
              <?php foreach($topics as $topic): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $topic['titre'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $topic['date_soumission'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded bg-blue-100 text-blue-700">
                        <?= $topic['statut'] ?>
                        </span>
                    </td>
                  
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                             <!-- <a id="editBtn" class="bg-yellow-500 text-white px-3 py-1 rounded text-xs hover:bg-yellow-700">
                                 Modifier
                             </a> -->
                             <a href="/dashboard/student/supprimer-topic/<?= $topic['id'] ?>" class="bg-red-600 text-white px-3 py-1 rounded text-xs hover:bg-red-700">
                                 Supprimer
                             </a>
                        </div>
                             
                    </td>
                </tr>
                <?php endforeach; ?>
              
            </tbody>
        </table>
    </div>
</div>
</div>

<!-- ------------------------------------------  add modal ------------------------------------------ -->
<div id="addTopicModal" class="fixed inset-0 z-50  items-center justify-center bg-black bg-opacity-30 hidden">
    <div class="w-full max-w-lg">
        <div class="bg-white border border-gray-200 shadow-xl p-6 space-y-6">
            <div class="flex justify-between items-center mb-8 border-b border-gray-300 pb-5">
                <h2 class="text-2xl font-bold text-indigo-700">Proposer un Sujet</h2>
                <button class="cancelModal text-gray-400 hover:text-gray-600">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>
            <form class="space-y-4" action="/dashboard/student/addtopic/<?= $student_id ?>" method="POST">
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

<!-- ------------------------------------------  update modal ------------------------------------------ -->
<!-- <div id="updateTopicModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-30 hidden">
    <div class="w-full max-w-lg">
        <div class="bg-white border border-gray-200 shadow-xl p-6 space-y-6">
            <div class="flex justify-between items-center mb-8 border-b border-gray-300 pb-5">
                <h2 class="text-2xl font-bold text-indigo-700">Modifier le Sujet</h2>
                <button class="cancelModal text-gray-400 hover:text-gray-600">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>
            <form class="space-y-4" action="/dashboard/student/edit-topic/<?= $topic['id'] ?>" method="POST">
                <div>
                    <label class="block text-md font-medium text-gray-700 mb-2">Titre du Sujet</label>
                    <input 
                        type="text" 
                        name="new_title"
                        value="<?= htmlspecialchars($topic['titre']) ?>"
                        required 
                        class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:border-indigo-500 rounded-md"
                        placeholder="Saisissez le titre de votre sujet"
                    >
                </div>
                <div>
                    <label class="block text-md font-medium text-gray-700 mb-2 ">Description</label>
                    <textarea 
                        name="new_description"
                        rows="4" 
                        required 
                        class="w-full px-3 py-2 border border-gray-300 focus:outline-none focus:border-indigo-500 rounded-md "
                        placeholder="Décrivez brièvement votre sujet"
                    ><?= htmlspecialchars($topic['description']) ?></textarea>
                </div>
                <div class="flex justify-end space-x-3">
                    <button 
                        type="button" 
                        class="cancelModal px-4 py-2 text-gray-500 hover:bg-gray-100 rounded"
                    >
                        Annuler
                    </button>
                    <button 
                        type="submit" 
                        name="update"
                        class="px-4 py-2 bg-indigo-600 text-white hover:bg-indigo-700 rounded"
                    >
                        Modifier
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
  
 -->
