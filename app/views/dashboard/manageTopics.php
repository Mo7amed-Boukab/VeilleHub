
<div id="main-topics-section" class="bg-white p-6 rounded-lg shadow-sm overflow-x-auto hidden">
     <h3 class="text-lg font-semibold text-gray-900 mb-4">Gestion des Sujets</h3>
     <div class="min-w-full">
         <table class="min-w-full divide-y divide-gray-200">
             <thead class="bg-gray-50">
                 <tr>
                     <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Sujet</th>
                     <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Description</th>
                     <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                     <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                     <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                 </tr>
             </thead>
             <tbody class="bg-white divide-y divide-gray-200">
              <?php foreach($topics as $topic): ?>
              <?php if($topic['statut'] === 'en attente' || $topic['statut'] === 'rejeté'  ): ?>
                 <tr>
                     <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= htmlspecialchars($topic['titre']) ?></td>
                     <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 max-w"><?= htmlspecialchars($topic['description']) ?></td>
                     <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= htmlspecialchars($topic['date_soumission']) ?></td>
                     <td class="px-6 py-4 whitespace-nowrap">
           
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                          <?= $topic['statut'] ?>
                        </span>
                    </td>
                     <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                     <div class="flex space-x-2">
                         <a href="/dashboard/valideTopic/<?= $topic['id'] ?>" class="bg-yellow-500 text-white px-3 py-1 rounded text-xs hover:bg-yellow-600">
                              Valider
                         </a>
                          <a href="/dashboard/regeterTopic/<?= $topic['id'] ?>" class="bg-indigo-600 text-white px-3 py-1 rounded text-xs hover:bg-indigo-700">
                              Rejeter
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