<?php require "views/partials/head.php"; ?>

<h3 class="text-2xl font-bold mb-6 text-gray-900"><?= $heading; ?></h3>
<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">
    <p class="text-gray-700 mb-4">
        We have studied about the page links, but if we would like to handle routes by ourselves, and show specific pages in different paths,
        then we have to create a PHP router. A PHP router is a script that takes the URL path and maps it to a specific PHP file or function.
    </p>

    <div class="bg-gray-900 p-4 rounded-lg font-mono text-sm my-6 overflow-x-auto">
        <pre class="text-gray-100 whitespace-pre leading-relaxed">
📦 project-main-directory
 ┣ 📂 public
 ┃ ┣ 📂 css
 ┃ ┣ 📂 js
 ┃ ┣ 📂 images
 ┗ 📂 pages
   ┣ 📄 index.php
   ┣ 📄 about.php
   ┣ 📂 team
   ┃ ┣ 📄 index.php
   ┃ ┗ 📂 members
   ┃   ┣ 📄 member1.php
   ┃   ┣ 📄 member2.php
   ┃   ┗ 📄 member3.php
   ┣ 📄 contact.php
   ┗ 📄 services.php
        </pre>
    </div>

    <p class="text-gray-700 mb-4">
        In order to navigate to different pages, users must specify the full path in the URL. For example, to access the home page,
        the URL should be <code class="bg-gray-100 px-1 rounded text-pink-700">localhost/pages/index.php</code>, and for the about page, it should be <code class="bg-gray-100 px-1 rounded text-pink-700">localhost/pages/about.php</code>.
        However, we would like to create our custom routes <span class="font-semibold text-blue-700">/home, /about, /team, /contact, /services</span> and so on so that users can
        access these pages without specifying the full path.
    </p>

    <p class="text-gray-700 mb-4">
        We can add an <code class="bg-gray-100 px-1 rounded text-pink-700">index.php</code> in our root directory and then get the URL and add some conditions which we can then require specific files
        that we want, and those files will be shown in the frontend.
    </p>

    <p class="text-gray-700 mb-2">Here is a simple example of a PHP router using conditionals in the <code class="bg-gray-100 px-1 rounded text-pink-700">index.php</code> file:</p>
    <div class="bg-gray-900 p-4 rounded-lg font-mono text-sm my-6 overflow-x-auto">
        <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
&lt;?php
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    if ($uri === '/home' || $uri === '/') {
        require 'pages/home.php';
    } elseif ($uri === '/about') {
        require 'pages/about.php';
    } elseif ($uri === '/team') {
        require 'pages/team/index.php';
    } elseif ($uri === '/contact') {
        require 'pages/contact.php';
    } elseif ($uri === '/services') {
        require 'pages/services.php';
    } else {
        http_response_code(404);
        require 'pages/404.php';
    }
?&gt;
</code></pre>
    </div>

    <div class="bg-gray-900 p-4 rounded-lg font-mono text-sm my-6 overflow-x-auto">
        <pre class="text-gray-100 whitespace-pre leading-relaxed">
📦 project-main-directory
 ┣ 📂 public
 ┃ ┣ 📂 css
 ┃ ┣ 📂 js
 ┃ ┣ 📂 images
 ┣ 📂 pages
 ┃ ┣ 📄 home.php
 ┃ ┣ 📄 about.php
 ┃ ┣ 📂 team
 ┃ ┃ ┣ 📄 index.php
 ┃ ┃ ┗ 📂 members
 ┃ ┃   ┣ 📄 member1.php
 ┃ ┃   ┣ 📄 member2.php
 ┃ ┃   ┗ 📄 member3.php
 ┃ ┣ 📄 contact.php
 ┃ ┣ 📄 services.php
 ┃ ┗ 📄 404.php
 ┣ 📄 index.php
 ┗ ...
        </pre>
    </div>
    <p class="text-gray-700 mb-4">This code checks the requested URL path and includes the corresponding PHP file. If the route does not match any defined path, it shows a 404 error page.</p>

    <p class="text-gray-700 mb-2">We can also do it using an associative array:</p>
    <div class="bg-gray-900 p-4 rounded-lg font-mono text-sm my-6 overflow-x-auto">
        <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
&lt;?php
$routes = [
    '/' => 'pages/home.php',
    '/home' => 'pages/home.php',
    '/about' => 'pages/about.php',
    '/team' => 'pages/team/index.php',
    '/contact' => 'pages/contact.php',
    '/services' => 'pages/services.php',
];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    http_response_code(404);
    require 'pages/404.php';
}
?&gt;
</code></pre>
    </div>

    <p class="text-gray-700 mb-2">For better organization, you can create a separate file for your routes, such as <code class="bg-gray-100 px-1 rounded text-pink-700">routes.php</code>, and include it in your <code class="bg-gray-100 px-1 rounded text-pink-700">index.php</code> file.</p>
    <div class="bg-gray-900 p-4 rounded-lg font-mono text-sm my-6 overflow-x-auto">
        <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
&lt;?php
    // router.php
    $routes = [
        '/' => 'pages/home.php',
        '/home' => 'pages/home.php',
        '/about' => 'pages/about.php',
        '/team' => 'pages/team/index.php',
        '/contact' => 'pages/contact.php',
        '/services' => 'pages/services.php',
    ];
?&gt;

&lt;?php
    // index.php
    require 'router.php';
    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        http_response_code(404);
        require 'pages/404.php';
    }
?&gt;
</code></pre>
    </div>

    <p class="text-gray-700 mb-2">And here is the final directory structure:</p>
    <div class="bg-gray-900 p-4 rounded-lg font-mono text-sm my-6 overflow-x-auto">
        <pre class="text-gray-100 whitespace-pre leading-relaxed">
📦 project-main-directory
 ┣ 📂 public
 ┃ ┣ 📂 css
 ┃ ┣ 📂 js
 ┃ ┣ 📂 images
 ┣ 📂 pages
 ┃ ┣ 📄 home.php
 ┃ ┣ 📄 about.php
 ┃ ┣ 📂 team
 ┃ ┃ ┣ 📄 index.php
 ┃ ┃ ┗ 📂 members
 ┃ ┃   ┣ 📄 member1.php
 ┃ ┃   ┣ 📄 member2.php
 ┃ ┃   ┗ 📄 member3.php
 ┃ ┣ 📄 contact.php
 ┃ ┣ 📄 services.php
 ┃ ┗ 📄 404.php
 ┣ 📄 index.php
 ┗ 📄 router.php
        </pre>
    </div>
</div>
<?php require "views/partials/page-nav.php"; ?>
<?php require "views/partials/footer.php"; ?>