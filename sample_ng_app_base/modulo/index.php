<?php


?>

<!doctype html>
<html lang="pt-br"  ng-app="myApp" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SON Angular JS</title>

    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap-reboot.min.css"/>
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../../bower_components/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css"/>


</head>
<body>
<!--<div ng-app="myApp" ng-controller="myCtrl">
    <input type='text' ng-model='name' ng-change='change()'>
    <br/> <span>changed {{counter}} times </span>
</div>-->
<div class="container" ng-controller="CtrlModule">
    Test Module {{name}}
</div>

<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../bower_components/angular/angular.min.js"></script>
<!--<script src="../../script.js"></script>-->

<script>

    angular.module('myApp', []).controller('CtrlModule', ['$scope', function(s) {
        s.name = 'My Scope DI';
        s.counter = 0;
        s.change = function() {
            s.counter++;
        };
    }]);
</script>
</body>
</html>
