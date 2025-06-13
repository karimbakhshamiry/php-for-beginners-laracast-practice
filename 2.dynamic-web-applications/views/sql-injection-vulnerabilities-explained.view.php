<?php require "views/partials/head.php"; ?>

<h3 class="text-2xl font-bold mb-6"><?= $heading; ?></h3>

<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">
    <h4 class="text-2xl font-semibold mb-4 text-blue-700">What is SQL Injection?</h4>
    <p class="mb-6 text-gray-700">
        <span class="font-bold text-red-600">SQL Injection</span> is a security vulnerability that allows an attacker to interfere with the queries an application makes to its database. It happens when user input is included directly in SQL statements without proper validation or escaping.
    </p>

    <h4 class="text-xl font-semibold mb-2 text-blue-600">Example of Vulnerable PHP Code:</h4>
    <p class="mb-6 text-gray-700">
        <span class="block mb-2">
            Suppose you have a PHP script that retrieves user data based on an
            <span class="inline-block font-mono bg-gray-100 px-2 py-0.5 rounded text-blue-700">id</span>
            parameter from the URL, like:
        </span>
        <span class="block mb-2">
            <span class="inline-block font-mono bg-gray-100 px-2 py-0.5 rounded text-green-700">
                localhost:8000/users.php?id=1
            </span>
        </span>
        <span class="block">
            The code might look like this:
        </span>
    </p>
    <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
&lt;?php
require 'Database.php';
$config = require("config.php");
$db_config = $config["database"];
$id = $_GET['id'];
$database = new Database($db_config);
$query = "SELECT * FROM users WHERE id = $id";
$result = $database->query($query);
?&gt;
    </code></pre>
    <div class="mb-4 flex items-center">
        <span class="inline-block bg-red-100 text-red-700 px-2 py-1 rounded mr-2 font-mono text-xs">1; drop table users;</span>
        <span class="text-gray-600">as the id, the query becomes:</span>
    </div>
    <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto">
SELECT * FROM users WHERE id = '1'; drop table users;
    </pre>
    <p class="mb-6 text-gray-700">
        As a result, the <span class="font-bold text-red-600">users</span> table will be deleted from your database. Attackers can also gain access to sensitive data or modify the database structure.
    </p>

    <h4 class="text-xl font-semibold mb-2 text-blue-600">How to Prevent SQL Injection in PHP:</h4>
    <ul class="list-disc pl-8 mb-6 text-gray-700 space-y-1">
        <li><span class="font-semibold text-green-700">Always use prepared statements and parameterized queries</span> (e.g., with PDO or MySQLi).</li>
        <li>Never insert user input directly into SQL queries.</li>
        <li>Validate and sanitize all user inputs.</li>
    </ul>

    <h4 class="text-xl font-semibold mb-2 text-blue-600">Safe Example Using Prepared Statements:</h4>
    <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
&lt;?php
class Database
{
    private $db_connection;
    public function __construct($config)
    {
        [
            "database" =&gt; $database,
            "dbname" =&gt; $dbname,
            "host" =&gt; $host,
            "port" =&gt; $port,
            "user" =&gt; $user,
            "password" =&gt; $password
        ] = $config;

        $dsn = "$database:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";
        $this-&gt;db_connection = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE =&gt; PDO::FETCH_ASSOC]);
    }

    public function query($query, $params = [])
    {
        $statement = $this-&gt;db_connection-&gt;prepare($query);
        $statement-&gt;execute($params);

        return $statement-&gt;fetchAll();
    }
}
?&gt;
    </code></pre>
    <div class="text-center text-gray-500 font-bold mb-4">OR</div>
    <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
&lt;?php
require 'Database.php';
$config = require("config.php");
$db_config = $config["database"];
$id = $_GET['id'];
$database = new Database($db_config);
$query = "SELECT * FROM users WHERE id = :id";
$result = $database->query($query, [":id" =&gt; $id]);
?&gt;
    </code></pre>

    <p class="mb-6 text-gray-700">
        <span class="font-semibold text-yellow-700">Note:</span> The <span class="font-mono bg-yellow-100 px-1 rounded">Database</span> class above needs to support parameters in its query method. Let's update it.
    </p>
    <h4 class="text-xl font-semibold mb-2 text-blue-600">Updated Database Class with Parameter Support:</h4>
    <pre class="bg-gray-900 text-green-200 p-4 rounded mb-6 text-sm overflow-x-auto"><code>
&lt;?php
class Database
{
    private $db_connection;

    public function __construct($config)
    {
        $dsn = "{$config['database']}:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
        $this-&gt;db_connection = new PDO($dsn, $config['user'], $config['password'], [PDO::ATTR_DEFAULT_FETCH_MODE =&gt; PDO::FETCH_ASSOC]);
    }

    public function query($query, $params = [])
    {
        $statement = $this-&gt;db_connection-&gt;prepare($query);
        $statement-&gt;execute($params);
        return $statement-&gt;fetchAll();
    }
}
?&gt;
    </code></pre>
    <p class="mb-2 text-green-700 font-semibold">
        Now, you can safely execute queries with parameters, preventing SQL injection vulnerabilities.
    </p>
</div>
<?php require "views/partials/page-nav.php"; ?>
<?php require "views/partials/footer.php"; ?>