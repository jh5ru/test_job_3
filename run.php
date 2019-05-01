<?php
require_once('parser.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Результаты</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Новый парсинг</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Результаты</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">
                    Результаты
                    <a class="btn btn-sm btn-primary float-right" href="/">Новый парсинг</a>
                </div>
                <div class="card-body">
                    <?php if (isset($data) and !empty($data)) { ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>
                                    Изображение
                                </th>
                                <th>
                                    Наименование
                                </th>
                                <th>
                                    Цена
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $item) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo '<img style="height:150px;" class="img-fluid" src="' . $item['image'] . '">';
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $item['name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $item['price'];
                                        ?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    <?php } else { ?>
                        <div class="alert alert-primary" role="alert">
                            <p>Нет записей! Не верная ссылка или достигнут лимит обращений к Яндекс.Маркет!</p>
                            <p>Попробуйте повторить парсинг через пару минут.</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
