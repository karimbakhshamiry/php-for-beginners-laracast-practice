<?php require "views/partials/head.php"; ?>

<h3 class="text-2xl font-bold mb-6"><?= $heading; ?></h3>

<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">
    <p>
        <strong>PDO (PHP Data Objects)</strong> is a database access layer providing a uniform method of access to multiple databases. To connect to a database, you need a <strong>DSN (Data Source Name)</strong>, which specifies the database type, host, database name, and other parameters.
    </p>

    <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
    // Example DSN for MySQL
    $dsn = 'mysql:host=localhost;dbname=your_database;charset=utf8mb4';
    $username = 'your_username';
    $password = 'your_password';

    // Create a PDO instance (connect to the database)
    $pdo = new PDO($dsn, $username, $password);

    // Set error mode to exception for better error handling
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Execute a query and fetch results
    $stmt = $pdo->query('SELECT * FROM your_table');
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rows as $row) {
        // Process each row
        print_r($row);
    }
    </code></pre>

    <ul class="list-disc ml-6">
        <li><strong>DSN</strong>: Format is <code>mysql:host=HOST;dbname=DBNAME;charset=UTF8</code></li>
        <li><strong>PDO</strong>: Use <code>new PDO($dsn, $username, $password)</code> to connect</li>
        <li><strong>Query</strong>: Use <code>$pdo->query()</code> to run SQL and <code>fetchAll()</code> to get results</li>
    </ul>

    <div class="mt-6 space-y-3">
        <div class="flex items-start space-x-2">
            <span class="inline-block mt-1 text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
            </span>
            <p class="text-gray-700">
                <strong>NOTE:</strong> Replace <code class="bg-gray-100 px-1 rounded text-sm">your_database</code>, <code class="bg-gray-100 px-1 rounded text-sm">your_username</code>, and <code class="bg-gray-100 px-1 rounded text-sm">your_password</code> with your actual database credentials. Also, ensure that the PDO extension is enabled in your PHP configuration (<code class="bg-gray-100 px-1 rounded text-sm">php.ini</code>).
            </p>
        </div>
        <div class="flex items-start space-x-2">
            <span class="inline-block mt-1 text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
            </span>
            <p class="text-gray-700">
                <strong>NOTE:</strong> If you are using a different database (like PostgreSQL, SQLite, etc.), the DSN format will change accordingly. For example, for PostgreSQL it would be <code class="bg-gray-100 px-1 rounded text-sm">pgsql:host=localhost;dbname=your_database</code>.
            </p>
        </div>
        <div class="flex items-start space-x-2">
            <span class="inline-block mt-1 text-yellow-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z" />
                </svg>
            </span>
            <p class="text-gray-700">
                <strong>NOTE:</strong> Username and password can be passed in the DSN string, like this: <code class="bg-gray-100 px-1 rounded text-sm">mysql:host=localhost;dbname=your_database;charset=utf8mb4;user=your_username;password=your_password</code>.
            </p>
        </div>
        <p class="mt-4 text-gray-700">
            For more information on PDO and how to use it, see the official PHP documentation:
            <a href="https://www.php.net/manual/en/book.pdo.php" class="text-blue-600 hover:underline font-medium">PHP PDO Documentation</a>.
        </p>
    </div>
</div>
<?php require "views/partials/page-nav.php"; ?>
<?php require "views/partials/footer.php"; ?>