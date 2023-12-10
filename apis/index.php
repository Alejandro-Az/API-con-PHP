<?php 

$api_url = 'https://jsonplaceholder.typicode.com/users';
$response = file_get_contents($api_url);
$users = json_decode($response, true);

echo "<h1>Lista de Usuarios</h1>";
echo "<ul>";

foreach($users as $user) {
    echo "<li>{$user['name']}</li>";
}

echo "</ul>";
?>