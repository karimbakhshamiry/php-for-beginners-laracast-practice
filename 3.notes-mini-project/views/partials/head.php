<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($heading) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Set theme on page load based on OS preference or saved preference
        function setTheme(theme) {
            if (theme === "dark") {
                document.documentElement.classList.add("dark");
            } else {
                document.documentElement.classList.remove("dark");
            }
        }
        // Check for saved theme, else use OS preference
        const savedTheme = localStorage.getItem("theme");
        if (savedTheme) {
            setTheme(savedTheme);
        } else if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
            setTheme("dark");
        }
        // Listen for OS theme changes
        window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", e => {
            if (!localStorage.getItem("theme")) {
                setTheme(e.matches ? "dark" : "light");
            }
        });
    </script>
    <style>
        .theme-switcher {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 font-sans transition-colors duration-300">
