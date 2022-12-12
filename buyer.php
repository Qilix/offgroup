<?php

require_once("includes/Queries.php");
require_once("includes/actions/BuyerActions.php");
require_once("app/header.php");

$buyer_id = $_GET['buyer_id'];
$data = new Queries();
$result = $data->getByBuyer($buyer_id);
$buyer = $data->getBuyer($buyer_id);
$actions = new BuyerActions();

?>
<div id="container">
    <table class="table">
        <thead class="table-dark">
        <tr>
            <th scope="col">Заказ №</th>
            <th scope="col">Описание</th>
            <th scope="col">Стоимость</th>
            <th scope="col">Оплачено</th>
            <th scope="col"></th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($result as $row){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['description'] ?></td>
                <td><?php echo $row['cost'] ?></td>
                <td><?php echo $row['paid']  == 1 ? 'Да':'Нет' ?></td>
                <td><a href="detail.php?id=<?php echo $row['id'] ?>">Детали</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $buyer['name']?></h5>
            <h6 class="card-subtitle mb-2 text-muted">Общая стоимость: <?php echo $actions->getSum($result)?></h6>
        </div>
    </div>

</div>
