<?php require "views/partials/head.php"; ?>
<h3 class="text-2xl font-bold mb-6 text-gray-800"><?= $heading; ?></h3>
<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">
    <p class="mb-4 text-gray-600">Page links works just the same as simple HTML project in PHP primarily (which you can control this behavior). Say this is your directory structure:</p>

    <div class="bg-[#1e1e1e] p-4 rounded-lg font-mono text-sm m-6">
        <pre class="text-[#d4d4d4]">
📦 project-main-directory
 ┣ 📂 public
 ┃ ┣ 📂 css
 ┃ ┣ 📂 js
 ┃ ┣ 📂 images
 ┃ ┗ 📄 index.php
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
   ┗ 📄 services.php</pre>
    </div>

    <p class="mb-4 text-gray-600">If you would like to have link of another page in one of the pages, then you have two options</p>
    <ol class="list-decimal pl-6 mb-6 space-y-4">
        <li class="text-gray-700">Use relative path to the page you want to link to, like this:
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto">&lt;a href="../about.php"&gt;About Us&lt;/a&gt;</pre>
            <p class="mt-2 text-gray-600">Note that the number of dots (..) depends on how many directories you need to go up.</p>
        </li>

        <li class="text-gray-700">Use absolute path from the root of your project, like this:
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto">&lt;a href="/pages/about.php"&gt;About Us&lt;/a&gt;</pre>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto">&lt;a href="/pages/team/index.php"&gt;Team&lt;/a&gt;</pre>
            <p class="mt-2 text-gray-600">Note that the leading slash (/) indicates the root of your project, so it will always work regardless of where you are in the directory structure.</p>
        </li>
    </ol>
</div>

<?php require "views/partials/page-nav.php"; ?>
<?php require "views/partials/footer.php"; ?>