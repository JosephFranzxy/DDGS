<?php
$servername = "47.99.207.64";
$username = "root";
$password = "Rootp@ssw0rd";
$dbname = "test";

// 创建与MySQL数据库的连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检查连接是否成功
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 执行查询语句
$sql = "SELECT * FROM test_table";
$result = $conn->query($sql);

// 检查查询结果是否为空
if ($result->num_rows > 0) {
    // 输出数据
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "没有找到匹配的数据";
}

// 关闭数据库连接
$conn->close();
?>
