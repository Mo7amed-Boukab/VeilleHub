
<div id="main-students-section" class="bg-white p-6 rounded-lg shadow-sm overflow-x-auto hidden">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-900">Gestion des Étudiants</h3>
      
    </div>
    <div class="min-w-full">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom d'étudiant</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <!-- <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Présentations</th> -->
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <?php if(isset($allStudents)) : ?>
              <?php  foreach($allStudents as $student): ?>
                
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?= $student['username'] ?></td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $student['email']?></td>
                    <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2/5</td> -->
                    <td class="px-6 py-4 whitespace-nowrap">
                      
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                          <?= $student['statut'] ?>
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <div class="flex items-center space-x-2">
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