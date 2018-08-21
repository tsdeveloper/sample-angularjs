<?php


?>

<!doctype html>
<html lang="pt-br" ng-app="pessoas">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample AngularJS Pessoas</title>

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="bower_components/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"/>


</head>
<body>

<div class="container" ng-controller="CtrlPessoas">

    <div class="row text-center">
        <div class="col"><h1 class="text-success"> {{nome}}</h1></div>
    </div>

    <ul>
        <li ng-repeat="pessoa in pessoas"> {{pessoa.nome}}, {{pessoa.cidade}}</li>


    </ul>




</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/angular/angular.min.js"></script>
<script src="sample_ng_app_base/js/script.js"></script>

<script>


</script>
</body>
</html>
