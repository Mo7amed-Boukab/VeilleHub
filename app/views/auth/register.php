<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - VeilleHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <div class="text-center mb-8">
                <i class="fas fa-book-open text-4xl text-indigo-700"></i>
                <h2 class="mt-2 text-3xl font-bold text-gray-900">VeilleHub</h2>
                <p class="mt-2 text-sm text-gray-600">Créez votre compte pour commencer</p>
            </div>
            <form action="register" method="POST">
                <div class="mb-4">
                    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           type="text"
                           name="username"
                           placeholder="Username"
                           required>
                </div>
                <div class="mb-4">
                    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            type="email"
                            placeholder="Email"
                            name="email"
                            required>
                </div>
                <div class="mb-4">
                    <input  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                            type="password"
                            placeholder="Password"
                            name="password"
                            required>
                     
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                        Role
                    </label>
                    <select name="role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="role" required>
                        <option value="" disabled selected>Selectionner votre Role</option>
                        <option value="étudiant">Étudiant</option>
                        <option value="enseignant">Enseignant</option>
                    </select>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" name="signup" class="bg-indigo-700 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full" >
                        S'inscrire
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-600 text-xs mt-4">
                Vous avez déjà un compte ? <a href="login" class="text-indigo-700 hover:text-indigo-800">Connectez-vous</a>
            </p>
        </div>
    </div>

  
</body>
</html>