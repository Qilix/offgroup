<?php
require_once('app/header.php');
require_once('includes/Queries.php');

$queries = new Queries();
$buyers = $queries->getBuyers();

?>
<body>
    <h3>Создать заказ</h3>
    <form action="includes/actions/CreateOrderAction.php" method="post">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control" rows="3" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Стоимость</label>
            <input class="form-control" name="cost">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Оплачено</label>
            <select class="form-control" name="paid">
                <option>Да</option>
                <option>Нет</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Покупатель</label>
            <select class="form-control" name="buyer_id">
                <?php foreach ($buyers as $buyer){?>
                <option><?= $buyer['id'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group row pt-3">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary" onclick="location ='index.php'">Создать</button>
            </div>
        </div>
    </form>
</body>