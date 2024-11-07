<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/api/public/css/style.css">
    <title>Delete account</title>
</head>

<body class="h-screen flex items-center justify-center bg-[url('/api/public/assets/main-bg.png')] bg-cover p-7">
    <div class="bg-zinc-800 text-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md h-52 flex flex-col items-center justify-center">
        <div class="flex flex-col justify-between items-center mb-4" id="confirm">
            <h2 class="text-2xl font-bold">Delete User</h2>
            <h3 class="text-lg font-medium py-5">Are you sure about deleting your user?</h3>
            <form action="" id="form">
                <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Delete
                </button>
            </form>
        </div>
        <div class="text-center w-full" id="success" style="display: none;">
            <div class="w-full flex flex-col items-end justify-center">
                <button class="w-5 h-5" onclick="closeButton()">
                    <svg class="mx-auto w-5 h-5" fill="#dc2626" viewBox="0 0 24 24" stroke="#000">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-center w-full">
                <svg class="mx-auto text-green-500 w-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>

            <h3 class="text-lg font-medium ">Well done</h3>
            <p id="success-message">The user has been permanently removed from the system.</p>
        </div>
        <div class="text-center w-full" id="fail" style="display: none;">
            <div class="w-full flex flex-col items-end justify-center">
                <button class="w-5 h-5" onclick="closeButton()">
                    <svg class="mx-auto w-5 h-5" fill="#dc2626" viewBox="0 0 24 24" stroke="#000">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center justify-center w-full">
                <svg class="mx-auto text-red-600 w-20" fill="#dc2626" viewBox="0 0 24 24" stroke="#dc2626">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <h3 class="text-lg font-medium ">Something went wrong</h3>
            <p id="error-message">We are unable to delete your user.</p>
        </div>
        <div id="loading" class="flex items-center w-full justify-center bg-opacity-75" style="display: none;">
            <div class="flex inset-0 flex-col items-center space-y-4 w-full">
                <div class="animate-spin rounded-full h-12 w-12 border-t-4 border-b-4 border-blue-600"></div>
                <span class="text-black text-lg font-semibold">Carregando...</span>
            </div>
        </div>
    </div>

    <script src="/api/public/js/delete.js"></script>
</body>

</html>