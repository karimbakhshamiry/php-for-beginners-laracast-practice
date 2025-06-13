<?php require "partials/head.php"; ?>


<h3 class="text-2xl font-bold mb-4"><?= $heading; ?></h3>
<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">

    <p class="mb-4 text-gray-700">
        PHP partials are reusable code snippets that help maintain consistency across multiple pages while reducing code duplication.
        They're especially useful for common elements like headers, footers, and navigation menus. As an example consider the following project.
    </p>

    <pre class="bg-gray-900 text-green-200 p-4 rounded mb-6 text-sm overflow-x-auto">
    <span class="select-none">📁</span> project-main-directory/
    ├── <span class="select-none">📁</span> public/
    │   ├── <span class="select-none">📁</span> css/
    │   ├── <span class="select-none">📁</span> js/
    │   ├── <span class="select-none">📁</span> images/
    │   └── <span class="select-none">📄</span> index.php
    ├── <span class="select-none">📁</span> pages/
    │   ├── <span class="select-none">📄</span> index.php        <span class="ml-2 text-xs bg-green-100 text-green-700 px-2 py-0.5 rounded">home</span>
    │   ├── <span class="select-none">📄</span> about.php
    │   ├── <span class="select-none">📁</span> team/
    │   │   ├── <span class="select-none">📄</span> index.php
    │   │   └── <span class="select-none">📁</span> members/
    │   │       ├── <span class="select-none">📄</span> member1.php
    │   │       ├── <span class="select-none">📄</span> member2.php
    │   │       └── <span class="select-none">📄</span> member3.php
    │   ├── <span class="select-none">📄</span> contact.php
    │   └── <span class="select-none">📄</span> services.php
    </pre>

    <div class="space-y-4">
        <p class="text-gray-700">
            In index.php, about.php, team/index.php, contact.php and services.php, there will be the same navigation menu,
            header, and footer, the head tag will also look the same except for the title. We can break these things into
            multiple files and then require (import) them in each page where needed.
        </p>

        <p class="text-gray-700">
            For example, you can create a 'partials' directory and place common elements like 'header.php', 'footer.php', and 'page-nav.php' inside it.
            Then, in each page, you can include these partials using the `require` statement:
        </p>

        <div class="bg-gray-100 p-4 rounded-lg my-4">
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;My Website&lt;/title&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
        &lt;link href="/css/styles.css" rel="stylesheet"&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;header&gt;...&lt;/header&gt;
        &lt;nav&gt;...&lt;/nav&gt;
        &lt;main&gt;
        &lt;!-- Page content here --&gt;
        &lt;/main&gt;
        &lt;footer&gt;...&lt;/footer&gt;
    &lt;/body&gt;
    &lt;/html&gt;
            </code></pre>
        </div>

        <div class="bg-green-100 p-4 rounded-lg my-4">
            <h3 class="font-semibold mb-2">How to separate into partials:</h3>
            <!-- partials/head.php -->
            <h4 class="font-bold mb-1">partials/head.php</h4>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
            &lt;!DOCTYPE html&gt;
            &lt;html&gt;
            &lt;head&gt;
                &lt;title&gt;&lt;?= $title ?? 'My Website' ?&gt;&lt;/title&gt;
                &lt;meta charset="UTF-8"&gt;
                &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                &lt;link href="/css/styles.css" rel="stylesheet"&gt;
            &lt;/head&gt;
            &lt;body&gt;
            </code></pre>

            <!-- partials/nav.php -->
            <h4 class="font-bold mb-1">partials/nav.php</h4>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
            &lt;nav class="bg-gray-800 text-white"&gt;
                &lt;ul&gt;
                    &lt;li&gt;&lt;a href="/"&gt;Home&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href="/about"&gt;About&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
            &lt;/nav&gt;
            </code></pre>

            <!-- partials/footer.php -->
            <h4 class="font-bold mb-1">partials/footer.php</h4>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
                &lt;footer class="mt-8"&gt;
                    &lt;p&gt;&copy; 2024 My Website&lt;/p&gt;
                &lt;/footer&gt;
            &lt;/body&gt;
            &lt;/html&gt;
            </code></pre>

            <!-- index.php (main page) -->
            <h4 class="font-bold mb-1">index.php (main page)</h4>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
            &lt;?php 
            $title = 'Home Page';
            require "partials/head.php"; 
            require "partials/nav.php";
            ?&gt;

            &lt;main&gt;
                &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
                &lt;!-- Page specific content --&gt;
            &lt;/main&gt;

            &lt;?php require "partials/footer.php"; ?&gt;
            </code></pre>
        </div>

        <p class="text-gray-700">
            This way, you can maintain a single copy of each partial file, and any changes made to them will automatically reflect across all pages that include them.
        </p>

        <p class="text-gray-700">
            This approach not only keeps your code DRY (Don't Repeat Yourself) but also makes it easier to manage and update your website.
            If you need to change the navigation menu, for instance, you only need to update 'partials/page-nav.php', and the changes will apply everywhere.
        </p>

        <p class="text-gray-700">
            In this example, the 'partials' directory contains reusable components that can be included in any page of your application.
            This structure allows for better organization and easier maintenance of your codebase.
        </p>

        <p class="text-gray-700">
            The navigation menu you see below is a PHP partial stored in 'partials/page-nav.php'.
            This allows us to maintain a single navigation file that can be included on any page,
            making site-wide updates easier and ensuring consistent navigation throughout the application.
        </p>
    </div>
</div>
<?php require "partials/page-nav.php"; ?>
<?php require "partials/footer.php"; ?>