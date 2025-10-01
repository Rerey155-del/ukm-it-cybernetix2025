<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - cybernetix</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
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
            <aside id="app-content" class="sticky top-4rem w-[220px]">
                @include('components.sidebar')
            </aside>

            <!-- Content -->
            <main class="flex-1 px-8 overflow-y-auto h-screen">
                <div id="content" class="gap-4">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const main = document.querySelector("#content");
            const links = document.querySelectorAll("aside a");

            async function loadPage(url, push = true) {
                try {
                    let response = await fetch(url, {
                        headers: {
                            "X-Requested-With": "XMLHttpRequest"
                        }
                    });

                    let text = await response.text();

                    // ambil hanya isi #content dari halaman baru
                    let parser = new DOMParser();
                    let doc = parser.parseFromString(text, "text/html");
                    let newContent = doc.querySelector("#content");
                    if (newContent) {
                        main.innerHTML = newContent.innerHTML;
                    }

                    if (push) {
                        history.pushState(null, "", url);
                    }
                } catch (error) {
                    console.error("Error loading page:", error);
                }
            }

            // klik link sidebar
            links.forEach(link => {
                link.addEventListener("click", (e) => {
                    e.preventDefault();
                    let url = link.getAttribute("href");
                    loadPage(url);
                });
            });

            // tombol back/forward browser
            window.addEventListener("popstate", () => {
                loadPage(location.href, false);
            });
        });
    </script>


</body>



</html>
