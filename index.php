<!-- Talk Othello Project-->
<?php
//DB関連
?>

<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" href="cover.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="/css/index.css" />
    <!-- jQuery/JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/index.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>Talk Othello タイトル</title>
</head>

<body>
    <?php include(dirname(__FILE__) . '/lib/header.php'); ?>
    <main>
        <!-- SP版 -->
        <div class="d-block d-sm-none">
            <div class="container mb-3 mt-3 text-center">
                <img src="/src/img/othello.jpeg" alt="othello" width="300" height="250">
            </div>
            <div class="text-center mb-2 mt-2">
                <a href="othello.php">
                    <button type="button" class="btn btn-success">ゲームスタート</button>
                </a>
                <a href="rule.php">
                    <button type="button" class="btn btn-success">ルール</button>
                </a>
                <a href="score.php">
                    <button type="button" class="btn btn-success">ハイスコア</button>
                </a>
            </div>
        </div>
        <!-- PC版 -->


    </main>
</body>

</html>