<?php

require("utils/note-not-found.php");

$id = $_GET["id"];

if(!$id) {
    note_not_found();
}

$query = $database->query("select id, value from notes where id = :id", ["id" => $id]);
$note = $query->fetch();

if (!$note) {
    note_not_found();
}

require("views/note.view.php");
