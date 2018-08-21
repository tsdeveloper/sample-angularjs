<?php


?>

<!doctype html>
<html lang="pt-br" ng-app>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SON Angular JS</title>

    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css"/>


</head>
<body>

<div class="container" ng-controller="CtrlApp">

    <div class="row text-center">
        <div class="col"><h1 class="text-success"> {{nome}}</h1></div>
    </div>


    <div class="row">
        <div class="col-3">
            <label for="nome" class="control-label">Filtro</label>
            <input type="search"  name="nome" id="nome" ng-model="buscar" class="form-control"></div>
    </div>
    <div class="row col" ng-controller="CtrlListaPerfis">
        <div class="col-12">
            Total: <div class="badge badge-info font-weight-bold">{{perfis.length}}</div>
        </div>

        <div class="col">
            <ul>
                <li ng-repeat="perfil in perfis | filter:buscar">{{perfil.nome}}
                    <btn ng-click="remover($index)" class="btn badge badge-danger">-</btn>
                </li>
            </ul>

        </div>

        <div class="col">
            <label for="perfil" class="control-label">Perfil</label>
            <input type="text" name="perfil" id="perfil" ng-model="vPerfil" class="form-control" />
            <label for="status" class="control-label">Status</label>
            <input type="text" name="status" id="status" ng-model="vStatus" class="form-control" />
            <div class="col mt-2">
                <btn ng-click="adicionar()" class="btn btn-success">Click para adicionar</btn>

            </div>

        </div>



    </div>


</div>

<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../bower_components/angular/angular.min.js"></script>
<script src="../../sample_ng_app_base/js/script.js"></script>

<script>


</script>
</body>
</html>
