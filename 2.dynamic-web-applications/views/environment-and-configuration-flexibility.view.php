<?php require "views/partials/head.php"; ?>

<h3 class="text-2xl font-bold mb-6"><?= $heading; ?></h3>

<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">
    <p class="mb-4">
        The DSN (Data Source Name) was previously hardcoded in the <span class="font-mono bg-gray-100 px-1 rounded">Database</span> class. To make it more flexible for different environments (development, production, etc.), we should allow the class to accept configuration parameters, enabling it to connect to any database with any credentials.
    </p>

    <ol class="list-decimal list-inside space-y-6">
        <li>
            <p class="mb-2">
                <span class="font-semibold">Accept configuration as a parameter:</span>
                Pass the database configuration array when initializing the <span class="font-mono bg-gray-100 px-1 rounded">Database</span> class.
            </p>
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

        public function query($query)
        {
            $statement = $this-&gt;db_connection-&gt;prepare($query);
            $statement-&gt;execute();

            return $statement-&gt;fetchAll();
        }
    }
    ?&gt;
            </code></pre>
            <p class="mb-2">
                Usage example:
            </p>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
    &lt;?php
    require 'Database.php';

    $db = new Database([
        "database" =&gt; "mysql",
        "host" =&gt; "localhost",
        "port" =&gt; 3306,
        "dbname" =&gt; "medical",
        "user" =&gt; "medical",
        "password" =&gt; "password"
    ]);
    ...
            </code></pre>
        </li>
        <li>
            <p class="mb-2">
                <span class="font-semibold">Centralize configuration in <span class="font-mono bg-gray-100 px-1 rounded">config.php</span>:</span>
                Store all configuration (including database) in a separate file, so it can be reused and easily modified.
            </p>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
    &lt;?php
    return [
        "database" =&gt; [
            "database" =&gt; "mysql",
            "host" =&gt; "localhost",
            "port" =&gt; 3306,
            "dbname" =&gt; "medical",
            "user" =&gt; "medical",
            "password" =&gt; "password"
        ]
        // ...
    ];
    ?&gt;
            </code></pre>
            <p class="mb-2">
                Then, require this config file wherever you need it:
            </p>
            <pre class="bg-gray-900 text-green-200 p-4 rounded mb-4 text-sm overflow-x-auto"><code>
    &lt;?php
    require 'Database.php';

    $config = require("config.php");
    $db_config = $config["database"];

    $database = new Database($db_config);
    ...
            </code></pre>
        </li>
    </ol>

    <p class="mt-6">
        Now, the <span class="font-mono bg-gray-100 px-1 rounded">Database</span> class is more flexible and dynamic. The configuration is separated from the main logic, making it easier to manage and update for different environments.
    </p>
</div>
<?php require "views/partials/page-nav.php"; ?>
<?php require "views/partials/footer.php"; ?>