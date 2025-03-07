<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>401 アクセス権限がありません</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-300 bg-cover bg-center bg-no-repeat bg-fixed h-screen">
    <div class="w-11/12 max-w-md mx-auto text-center bg-white bg-opacity-90 p-8 rounded-lg shadow-lg px-4 sm:px-8">
    <div class="text-8xl font-bold text-blue-500 mb-4">401</div>
    <h1 class="text-4xl font-bold text-gray-800 mb-6">アクセス権限がありません</h1>
    <p class="text-lg text-gray-600 mb-8">このページを表示するにはログインが必要です。</p>
    <a href="{{ route('login') }}" class="bg-blue-500 text-white font-semibold px-6 py-3 rounded-md hover:bg-blue-700 transition-colors duration-300">
      ログインページへ
    </a>
  </div>
    </div>
</body>
</html>
