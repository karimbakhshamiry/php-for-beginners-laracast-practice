<?php

$id = $_GET["id"];

if (!$id) {
    abort(Response::BAD_REQUEST, null, "Please provide a note ID");
}

$query = $database->query("SELECT id, title, description, done, user_id FROM notes WHERE id = :id", ["id" => $id]);
$note = $query->findOrFail();

// authorize user for the note
authorize($note, 'user_id', $session_user_id, Response::UNAUTHORIZED, null, "You are not authorized to view this note.");


require("views/note.view.php");
