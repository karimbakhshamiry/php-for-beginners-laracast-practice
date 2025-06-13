<?php require "partials/head.php"; ?>
<?php require "utils/dd.php"; ?>


<h3 class="text-2xl font-bold mb-6"><?= $heading; ?></h3>

<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">
    <div class="mb-6">
        <h4 class="text-lg font-semibold mb-2">What are PHP Superglobals?</h4>
        <p class="text-gray-700 mb-2">
            <span class="font-semibold">Superglobals</span> are built-in variables in PHP that are always accessible, regardless of scope. They provide information about the request, server, environment, and user input.
        </p>
        <ul class="list-disc list-inside text-gray-700 mb-2">
            <li>
                <span class="font-semibold">$_SERVER</span>: Contains information about headers, paths, and script locations. Useful for getting the current URL, request method, and server details.
            </li>
            <li>
                <span class="font-semibold">$_GET</span>: Holds data sent via the URL query string (e.g., <code>?id=5</code>). Commonly used to retrieve parameters from links or forms using the GET method.
            </li>
            <li>
                <span class="font-semibold">$_POST</span>: Stores data sent via HTTP POST. Used for form submissions where sensitive data (like passwords) should not appear in the URL.
            </li>
            <li>
                <span class="font-semibold">$_SESSION</span>: Used to store information across multiple pages for a single user (e.g., login state).
            </li>
            <li>
                <span class="font-semibold">$_COOKIE</span>: Contains data stored on the client side and sent with each request (e.g., user preferences).
            </li>
        </ul>
        <p class="text-gray-700">
            Superglobals are essential for handling user input, managing sessions, and interacting with the server environment in dynamic web applications.
        </p>
    </div>
    <h4 class="text-xl font-semibold mb-4">PHP Superglobals: $_SERVER and $_GET</h4>
    <p>In the following example the current page route is used to parse the URL, http methods and the query strings that comes with it. You can modify the current route in your browser url bar and add new query stirngs, and it will be shown down here.</p>
    <div class="space-y-4">
        <div class="bg-gray-50 p-4 rounded">
            <h5 class="font-medium mb-2">Current URL:</h5>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
<?= $_SERVER['REQUEST_URI']; ?>
            </code></pre>
        </div>

        <div class="bg-gray-50 p-4 rounded">
            <h5 class="font-medium mb-2">Server Method:</h5>
            <code class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto">
                <?= $_SERVER['REQUEST_METHOD']; ?>
            </code>
        </div>

        <div class="bg-gray-50 p-4 rounded">
            <h5 class="font-medium mb-2">Query String Parameters:</h5>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto">
                <?php print_r($_GET); ?>
            </pre>
        </div>
    </div>
</div>



<?php require "partials/page-nav.php"; ?>
<?php require "partials/footer.php"; ?>