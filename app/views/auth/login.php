<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - VeilleHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <div class="text-center mb-8">
                <i class="fas fa-book-open text-4xl text-indigo-700"></i>
                <h2 class="mt-2 text-3xl font-bold text-gray-900">VeilleHub</h2>
                <p class="mt-2 text-sm text-gray-600">Connectez-vous à votre compte</p>
            </div>
            <form action="login" method="POST">
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
                <div class="flex items-center justify-between mb-6">
                    <!-- <div>
                        <input type="checkbox" id="remember" class="mr-2">
                        <label for="remember" class="text-sm text-gray-700">Se souvenir de moi</label>
                    </div> -->
                    <a class="inline-block align-baseline font-bold text-sm text-indigo-700 hover:text-indigo-800" href="#">
                        Mot de passe oublié ?
                    </a>
                </div>
                <div class="flex items-center justify-between">
                    <button class="bg-indigo-700 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-full"
                            type="submit"
                            name="login">
                        Se connecter
                    </button>
                </div>
            </form>
            <p class="text-center text-gray-600 text-xs mt-4">
                Vous n'avez pas de compte ? <a href="register" class="text-indigo-700 hover:text-indigo-800">Inscrivez-vous</a>
            </p>
        </div>
    </div>
    
</body>
</html>