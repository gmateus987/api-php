<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/api/public/css/style.css">
  <title>See your Info</title>
</head>

<body class="h-screen flex items-center justify-center bg-[url('/api/public/assets/main-bg.png')] bg-cover p-7">

  <div class="bg-zinc-800 text-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
    <form id="form" name="form">
      <h2 class="text-2xl font-bold mb-6">Fetch</h2>

      <div class="mb-4">
        <label class="block font-bold mb-2" for="name">
          Name
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" readonly placeholder="Wait your name">
      </div>
      <div class="mb-4">
        <label class="block font-bold mb-2" for="email">
          E-mail
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="email" readonly placeholder="Wait your e-mail">
      </div>

      <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
          Fetch
        </button>
      </div>
    </form>

    <div class="text-center w-full flex flex-col" id="fail" style="display: none;">
      <div class="w-full flex flex-col items-end justify-center">
        <button class="w-5 h-5" onclick="closeButton()">
          <svg class="mx-auto w-5 h-5" fill="#dc2626" viewBox="0 0 24 24" stroke="#000">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex items-center justify-center w-full">
        <svg class="mx-auto text-red-600 w-20 h-20" fill="#dc2626" viewBox="0 0 24 24" stroke="#dc2626">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </div>
      <h3 class="text-lg font-medium text-gray-900">Something went wrong</h3>
      <p class="text-gray-500" id="error-message"></p>
    </div>
    <div id="loading" class="flex items-center w-full justify-center bg-opacity-75" style="display: none;">
      <div class="flex inset-0 flex-col items-center space-y-4 w-full">
        <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-b-4 border-blue-600"></div>
        <span class="text-black text-lg font-semibold">Carregando...</span>
      </div>
    </div>

  </div>

  <script src="/api/public/js/fetch.js"></script>
</body>

</html>