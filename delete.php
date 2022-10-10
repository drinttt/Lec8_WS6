<?php include "connect.php" ?>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
    $stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
    $stmt->bindParam(1, $_GET["username"]);
    if($stmt->execute())
        header("location: Workshop6.php");
?>
</body>
</html>