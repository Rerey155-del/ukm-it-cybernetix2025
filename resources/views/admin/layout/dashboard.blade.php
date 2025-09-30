<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-[#F6F3ED] ">
    <!-- Sticky Header -->
    <div class="container mx-auto overflow-y-hidden h-screen">
        <header class="sticky top-0 z-50 w-full">
            @include('components.header')
        </header>

        <div class="flex">
            <!-- Sidebar -->
            <aside class="sticky top-4rem w-[220px]">
                @include('components.sidebar')
            </aside>

            <!-- Content -->
            <main class="flex-1 px-8 overflow-y-auto h-screen">
                <div class="gap-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

</body>

</html>
