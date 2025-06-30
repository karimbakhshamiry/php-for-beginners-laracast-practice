<?php



if($_SERVER["REQUEST_METHOD"] !== 'POST') {
    abort(Response::BAD_REQUEST);
}

[
    "title" => $title,
    "description" => $description 
] = $_POST;

$note_count_statement = $database->query("SELECT id FROM notes ORDER BY id DESC LIMIT 1");
$note_cound_result = $note_count_statement->find();

$new_id = 1;

if(count($note_cound_result) > 0) {
    $new_id = $note_cound_result[0]['id'] + 1;
}

$statement = $database->query(
    "INSERT INTO notes
        (
            id,
            title,
            description,
            user_id
        )
        VALUES
        (
            :id,
            :title,
            :description,
            :user_id
        )
    ",
    [
        "id" => $new_id,
        "title" => $title,
        "description" => $description,
        "user_id" => $session_user_id
    ]
);

redirect("/3.notes-mini-project");
