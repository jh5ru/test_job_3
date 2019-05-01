<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Парсер товаров</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-header">
                    Парсер товаров
                    <small class="float-right btn btn-sm btn-danger">*Данные можно получать с промежутком в 1-2 минуты
                    </small>
                </div>
                <div class="card-body">
                    <form action="/run.php" method="post" id="form">
                        <div class="form-group">
                            <label for="InputLink">Ссылка на раздел</label>
                            <input required type="text" name="link" class="form-control" id="InputLink"
                                   aria-describedby="linkHelp"
                                   placeholder="https://market.yandex.ru/catalog/54726/list?clid=817&onstock=1&local-offers-first=1">
                            <small id="linkHelp" class="form-text text-muted">Введите ссылку корневой раздел
                                Яндекс.Маркет
                            </small>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary">Запустить парсинг</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
