<?php

$data = json_decode(file_get_contents("php://input"), true);

$settings = array(
 "rate" => $data["rate"],
 "stock" => $data["stock"]
);

file_put_contents("settings.json", json_encode($settings, JSON_PRETTY_PRINT));

echo "updated";

?>
