

<header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-book-open text-3xl text-indigo-700"></i>
                <span class="ml-2 text-xl font-bold text-gray-900">VeilleHub</span>
            </div>
            <div>
            <?php 
                  if(isset($_SESSION['user_loged_in_id'])) : ?>
                  <form action="logout" method="POST">
                    <button type="submit" class="px-4 py-2 border border-blue-700 text-blue-700 rounded-md hover:bg-blue-50 mr-2">
                        <i class="fas fa-sign-in-alt mr-2"></i>logout
                  </button>  
                  </form>        
              <?php else: ?> 
                <a href="/login" class="border border-indigo-700 text-indigo-700 hover:bg-indigo-100 px-4 py-2 rounded-md text-md font-medium">
                    <i class="fas fa-sign-in-alt mr-2"></i>Connexion
                </a>
                <a href="/register" class="ml-4 bg-indigo-600 text-white hover:bg-indigo-700 px-4 py-2 rounded-md text-md font-medium">
                    <i class="fas fa-user-plus mr-2"></i>Inscription
                </a>
              <?php endif; ?>
            </div>
        </div>
</header>