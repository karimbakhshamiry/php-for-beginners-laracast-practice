<?php require "views/partials/head.php"; ?>

<h3 class="text-2xl font-bold mb-6"><?= $heading; ?></h3>

<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">

    <!-- Explanation Section -->
    <div class="mb-6">
        <h4 class="text-xl font-semibold mb-2">What does this code do?</h4>
        <p class="mb-2">
            The <span class="font-mono bg-gray-100 px-1 py-0.5 rounded">Database</span> class is a simple PHP class for connecting to a MySQL database using PDO. It sets up the connection in the constructor and provides a <span class="font-mono bg-gray-100 px-1 py-0.5 rounded">query()</span> method to execute SQL queries with parameters securely.
        </p>
        <ul class="list-disc list-inside mb-2">
            <li><span class="font-semibold">__construct()</span>: Initializes the PDO connection with your database credentials.</li>
            <li><span class="font-semibold">query($query, $params)</span>: Prepares and executes a SQL query with parameters to prevent SQL injection.</li>
        </ul>
    </div>

    <!-- How to Use Section -->
    <div class="mb-6">
        <h4 class="text-xl font-semibold mb-2">How to use this class</h4>
        <ol class="list-decimal list-inside mb-2">
            <li>
                <span class="font-semibold">Create a file named <span class="font-mono bg-gray-100 px-1 py-0.5 rounded">Database.php</span>:</span>
                <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
&lt;?php
    class Database
    {
        private $db_connection;
        public function __construct()
        {
            $dsn = "mysql:host=localhost;port=3306;dbname=your_database;charset=utf8mb4";
            $username = "your_username";
            $password = "your_password";
            $this->db_connection = new PDO($dsn, $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
        }

        public function query($query)
        {
            $statement = $this->db_connection->prepare($query);
            $statement->execute();

            return $statement->fetchAll();
        }
    }
?&gt;
</code></pre>

            </li>
            <li>
                <span class="font-semibold">Require the file and use the class wherever you need database access:</span>
                <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>                    
&lt;?php

    require 'Database.php';

    $db = new Database();
    $users = $db->query("SELECT * FROM users");

    foreach ($users as $user) {
        echo $user['name'] . "&lt;br&gt;";
    }
?&gt;
</code></pre>
            </li>
        </ol>
        <p class="text-gray-600 text-sm">
            Replace <span class="font-mono bg-gray-100 px-1 py-0.5 rounded">your_database</span>, <span class="font-mono bg-gray-100 px-1 py-0.5 rounded">your_username</span>, and <span class="font-mono bg-gray-100 px-1 py-0.5 rounded">your_password</span> with your actual database credentials.
        </p>
    </div>
    <p class="text-gray-700 mb-6">
        This way we dont have to create a database connection and do all those repetative things we do manually, we just need to initialze the Database class and all those things
        are done automatically. The only thing we need to do is to create our query and run it.
    </p>
</div>

<?php require "views/partials/page-nav.php"; ?>
<?php require "views/partials/footer.php"; ?>