<?php
require('./db.php');


$data = json_decode(file_get_contents('php://input'), true);
if (
    isset($data) && !empty($data)
) {
    // Tạo Mới Đối Tượng
    $DB = new DabatabseHandler();
    print_r($DB->remove("user_music", "id=" . $data["id"]));
} else {
    echo -1;
}
