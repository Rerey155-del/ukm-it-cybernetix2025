<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Test</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- daisyUI CDN -->
    <script src="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.js"></script>
</head>
<body>
    <header class="container mx-auto card bg-base-100 shadow-md py-4 mb-4 mt-8 rounded-xl">
        <div class=" flex items-center justify-between px-4">
            <div class="flex items-center">
                <img src="../img/avatar.svg" alt="Logo" class="w-16 h-16">
            </div>
            <div class="flex items-center space-x-2">
                <div class="avatar">
                    <div class="w-16 rounded-full">
                        <img src="https://img.daisyui.com/images/profile/demo/yellingcat@192.webp" alt="User Avatar" />
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>