<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .card-section {
            border-radius: 25px;
            padding: 0;
        }
        .first-section {
            height: 400px;
            background: red;
        }
        .second-section {
            height: 190px;
            background: yellow;
            margin-bottom: 20px;
        }
        .third-section {
            height: 190px;
            background: green;
        }
        .fourth-section {
            height: 190px;
            background: black;
        }
        .fifth-section {
            height: 190px;
            background: blue;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 card-section first-section"></div>
            <div class="col-3">
                <div class="row">
                    <div class="col-12 card-section second-section"></div>
                    <div class="col-12 card-section third-section"></div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-12 card-section fifth-section"></div>
                    <div class="col-12 card-section fourth-section"></div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>