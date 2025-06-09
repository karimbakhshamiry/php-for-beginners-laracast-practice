<?php require("partials/head.php"); ?>
<?php require("partials/nav.php"); ?>
<main class="min-h-screen bg-white flex flex-col justify-center items-center px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="text-base font-semibold text-red-600">404</p>
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">
            Page not found
        </h1>
        <p class="mt-6 text-base leading-7 text-gray-600">
            Sorry, we couldn’t find the page you’re looking for.
        </p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/" class="rounded-md bg-red-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500">
                Go back home
            </a>
        </div>
    </div>
</main>
<?php require("partials/footer.php"); ?>