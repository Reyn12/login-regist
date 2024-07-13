<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$nama_lengkap = $_SESSION['nama_lengkap'];
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function showLogoutPopup() {
            document.getElementById('logout-popup').classList.remove('hidden');
        }

        function closeLogoutPopup() {
            window.location.href = 'login.php';
        }
    </script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">
            <div class="flex justify-center mx-auto">
                <img class="w-auto h-7 sm:h-8" src="https://merakiui.com/images/logo.svg" alt="Logo">
            </div>

            <h3 class="mt-3 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Hi, <?php echo $nama_lengkap; ?></h3>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Welcome back To Our TESTING PAGE</p>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Your email: <?php echo $email; ?></p>

            <div class="mt-4 text-center">
                <p class="text-gray-600 dark:text-gray-200">We are glad to see you again. Enjoy your stay and feel free to explore!</p>
            </div>

            <div class="flex justify-center mt-4">
                <button onclick="showLogoutPopup()" class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-500 rounded-lg hover:bg-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-50">Logout</button>
            </div>
        </div>

        <div class="flex items-center justify-center py-4 text-center bg-gray-50 dark:bg-gray-700">
            <span class="text-sm text-gray-600 dark:text-gray-200">Need help? </span>

            <a href="support.php" class="mx-2 text-sm font-bold text-blue-500 dark:text-blue-400 hover:underline">Contact Support</a>
        </div>
    </div>

    <!-- Logout Popup -->
    <div id="logout-popup" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50">
        <div class="w-full max-w-sm p-6 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex justify-center mx-auto">
                <svg class="w-12 h-12 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <h3 class="mt-3 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Anda berhasil Logout</h3>
            <div class="mt-4 text-center">
                <button onclick="closeLogoutPopup()" class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">OK</button>
            </div>
        </div>
    </div>
</body>

</html>