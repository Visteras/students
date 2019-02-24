<?php
/**
 * Created by PhpStorm.
 * User: Viste
 * Date: 24.02.2019
 * Time: 13:49
 */

require "config.php";


?>
<html>
<head>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
        function del(id) {

            var info = 'id=' + id;
            if (confirm("Точно удалить??")) {
                var html = $.ajax({
                    type: "GET",
                    url: "del.php",
                    data: info,
                    async: false,
                    success: function () {
                        //window.location.reload(true);
                        deleteRow(id)
                    }
                }).responseText;
            }
        }

        function deleteRow(id) {
            $("table#users > tbody tr#user_" + id).remove();
        }
    </script>
</head>
<body>
<table id="users">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Del</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if ($result = $mysqli->query("SELECT id,name,age FROM users", MYSQLI_USE_RESULT)) {

        foreach ($result as $row) {
            ?>
            <tr id="user_<?= $row["id"] ?>">
                <td><?= $row["id"] ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["age"] ?></td>
                <td><a href="#" id="<?= $row["id"] ?>" onclick="del(<?= $row["id"] ?>)">Del <?= $row["id"] ?></a></td>
            </tr>
            <?php
        }
        $result->close();
    }
    ?>
    </tbody>
</table>
</body>
</html>