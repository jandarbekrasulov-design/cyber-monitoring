<?php
$conn = new mysqli("localhost", "cyber_user", "Cyber12345!", "cyber_monitoring");
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}
$result = $conn->query("SELECT id, full_name, email, role FROM users");
echo "<h1>Кибер-Мониторинг</h1>";
echo "<h2>Пользователи системы</h2>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>ID</th><th>Имя</th><th>Email</th><th>Роль</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['full_name']}</td><td>{$row['email']}</td><td>{$row['role']}</td></tr>";
}
echo "</table>";
?>
