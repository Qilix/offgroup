<?php
session_start();
require_once("includes/Queries.php");
require_once("app/header.php");

$data = new Queries();
$result = $data->getData();


?>
<body>

<div id="container">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Заказ №</th>
                <th scope="col">Описание</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($result as $row){ ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td><a href="detail.php?id=<?php echo $row['id'] ?>">Детали</a></td>
        </tr>
    <?php } ?>
        </tbody>
    </table>

</div>

</body>
</html>