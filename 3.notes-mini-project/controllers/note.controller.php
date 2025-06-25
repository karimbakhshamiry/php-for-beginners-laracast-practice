<?php

$id = $_GET["id"];

if (!$id) {
    abort(Response::BAD_REQUEST, null, "Please provide a note ID");
}

$query = $database->query("SELECT id, value, user_id FROM notes WHERE id = :id", ["id" => $id]);
$note = $query->fetch();

if (!$note) {
    abort(Response::NOT_FOUND, "Note Not Found", "The note you are looking for does not exist.");
}

if ($note["user_id"] !== $session_user_id) {
    abort(Response::UNAUTHORIZED, null, "You are not authorized to view this note.");
}

require("views/note.view.php");
