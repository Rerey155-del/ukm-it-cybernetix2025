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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            AOS.init({
                duration: 800, // durasi animasi
                once: true, // animasi hanya muncul sekali
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-[#F6F3ED]">
    <div class="container mx-auto h-screen flex flex-col">
        <header class="sticky top-0 z-50 w-full">
            @include('components.header')
        </header>

        <!-- Flex: Sidebar + Content -->
        <div class="flex flex-1 overflow-hidden">
            <!-- Sidebar tetap di kiri -->
            <aside class="w-[220px]">
                @include('components.sidebar')
            </aside>

            <!-- Content scrollable -->
            <main class="flex-1 px-8 overflow-y-scroll">
                <div id="content" class="gap-4 py-4">
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
