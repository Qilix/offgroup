<?php
require_once("includes/Queries.php");
require_once("app/header.php");

$order_id = $_GET['id'];
$data = new Queries();
$post = $data->getDetail($order_id);
?>

<body>


<div class="container-fluid d-flex h-100 justify-content-center align-items-center p-0">
    <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?php echo $post['description'] ?></li>
                <li class="list-group-item">Стоимость: <?php echo $post['cost'] ?></li>
                <li class="list-group-item">Оплачено: <?php echo $post['paid'] == 1 ? 'Да':'Нет' ?></li>
                <li class="list-group-item">Заказчик: <?php echo $post['name'] ?>
                    <a href="buyer.php?buyer_id=<?php echo $post['buyer_id'] ?>">подробности</a>
                </li>
            </ul>

    </div>
</div>

</body>