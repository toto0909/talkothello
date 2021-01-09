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
    <title>Talk Othello</title>
</head>

<body>
    <?php include(dirname(__FILE__) . '/lib/header.php'); ?>
    <main>
        <!-- SP版 -->
        <div class="d-block d-sm-none">
            <div class="container pr-2 pl-2" style="background-color: #009933;">
                <div class="row">
                    <div class="col-2 border" id="area_0_0">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_0_1">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_0_2">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_0_3">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_0_4">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_0_5">
                        <p>area</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 border" id="area_1_0">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_1_1">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_1_2">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_1_3">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_1_4">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_1_5">
                        <p>area</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 border" id="area_2_0">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_2_1">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_2_2">
                        <p>●</p>
                    </div>
                    <div class="col-2 border" id="area_2_3">
                        <p>●</p>
                    </div>
                    <div class="col-2 border" id="area_2_4">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_2_5">
                        <p>area</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 border" id="area_3_0">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_3_1">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_3_2">
                        <p>●</p>
                    </div>
                    <div class="col-2 border" id="area_3_3">
                        <p>●</p>
                    </div>
                    <div class="col-2 border" id="area_3_4">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_3_5">
                        <p>area</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 border" id="area_4_0">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_4_1">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_4_2">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_4_3">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_4_4">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_4_5">
                        <p>area</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 border" id="area_5_0">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_5_1">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_5_2">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_5_3">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_5_4">
                        <p>area</p>
                    </div>
                    <div class="col-2 border" id="area_5_5">
                        <p>area</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-6 text-center">
                        <p>● スコア</p>
                        <p>00000</p>
                    </div>
                    <div class="col-6 text-center">
                        <p>○ スコア</p>
                        <p>00000</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="text-center">現在の話題</p>
            </div>

        </div>
        <!-- PC版 -->

    </main>
</body>

</html>