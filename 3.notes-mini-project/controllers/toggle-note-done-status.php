<?php



if ($_SERVER["REQUEST_METHOD"] !== 'POST') {
    abort(Response::BAD_REQUEST);
}

[
    "done" => $done,
    "note_id" => $note_id,
    "redirect_to" => $redirect_to
] = $_POST;

if (!$note_id) {
    abort(Response::BAD_REQUEST, null, "Missing note_id");
}

$query = $database->query("SELECT id, title, description, done, user_id FROM notes WHERE id = :id", ["id" => $note_id]);
$note = $query->findOrFail();

// authorize user for the note
authorize($note, 'user_id', $session_user_id, Response::UNAUTHORIZED, null, "You are not authorized to modify this note.");

$statement = $database->query(
    "UPDATE notes SET
        done = :done
    WHERE id = :id
    ",
    [
        "done" => $done === 'on' ? "true" : "false",
        "id" => $note_id
    ]
);

// dd($redirect_to);
if ($redirect_to === 'view_note') {
    redirect("/3.notes-mini-project/note", ["id" => $note['id']]);
} else {
    redirect("/3.notes-mini-project");
}
