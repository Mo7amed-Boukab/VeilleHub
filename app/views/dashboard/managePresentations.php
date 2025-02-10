
<div id="presentation-section" class="bg-white p-6 rounded-lg shadow-sm overflow-x-auto hidden">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-900">Gestion des Présentations</h3>
        <button id="btn-open-modal-presentation"  class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm hover:bg-indigo-700 transition">
            <i class="fas fa-plus mr-2"></i>Ajouter une Présentation
        </button>
    </div>
    <div class="min-w-full">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sujet</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date soumission</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date Prévue</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Assigner à</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach($topics as $topic): ?>
              <?php if($topic['statut'] === 'approuvé'): ?>
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= htmlspecialchars($topic['titre']) ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= htmlspecialchars($topic['date_soumission']) ?></td>                  
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= htmlspecialchars($topic['date_soumission']) ?></td>                  
                  
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                            Mohamed 
                        </span>
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                            ilyass
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex space-x-2">
                        <a href="#" id="assignBtn" class="bg-orange-600 text-white px-3 py-1 rounded text-xs hover:bg-orange-700" data-modal-target="assign-group-modal">
                                Assigner
                        </a>
                            <a href="/dashboard/supprimer-topic/<?= $topic['id'] ?>" class="bg-indigo-600 text-white px-3 py-1 rounded text-xs hover:bg-indigo-700">
                                Supprimer
                            </a>
                        </div>
                    </td>
                </tr>
              <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>

<div id="assignModal" class=" fixed inset-0 z-50 overflow-y-auto hidden">
      <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
               <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                 <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title"> Assigner la présentation </h3>
                  <div class="mt-4">
                     <label class="block text-sm font-medium text-gray-700">Sélectionner les étudiants (2 minimum)</label>
                  <div class="mt-2 space-y-2">
                     <div class="flex items-center">
                           <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                           <label class="ml-2 block text-sm text-gray-900">med</label>
                     </div>
                     <div class="flex items-center">
                           <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                           <label class="ml-2 block text-sm text-gray-900">zaid</label>
                     </div>
                     <div class="flex items-center">
                           <input type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                           <label class="ml-2 block text-sm text-gray-900">sohaib</label>
                     </div>
                   </div>
                 </div>
               </div>
             <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                  <a href="/dashboard/assignPresentation/1" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:ml-3 sm:w-auto sm:text-sm">
                      Assigner
                 </a>
                  <button class="cancelModal mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                       Annuler
                   </button> 
                 </div>
             </div>
      </div>
  </div>     
