var CtrlApp = function ($scope) {

    $scope.nome = "Developer Web with AngularJS 1x"
    $scope.logar = function() {
        console.log('teste:', $scope.buscar);
    };

};
var app = angular.module('myApp', []);
var CtrlListaPerfis  = function ($scope) {

    $scope.perfis = [
        {nome:  'Administrador de Sistemas', status: 'Ativo'},
        {nome:  'Analista de Sistemas', status: 'Ativo'},
        {nome:  'Developer Front End', status: 'Ativo'},
        {nome:  'Developer Back End', status: 'Ativo'},
        {nome:  'Developer Web', status: 'Ativo'},
        {nome:  'Developer Full Stack', status: 'Ativo'},
        {nome:  'Suporte Técnico Nível 1', status: 'Bloqueado'},
        {nome:  'Suporte Técnico Nível 2', status: 'Bloqueado'},
        {nome:  'Suporte Técnico Nível 3', status: 'Bloqueado'},
    ];

    $.unique([2,3,4,5,5,4]);
    /*$scope.statusOptions = $scope.perfis.map(i => i.status);*/

    console.log('status:', $scope.statusOptions);

    /*$scope.$watch('buscar', function () {
   console.log($scope.buscar);
    });*/

  /*  $scope.$watch('buscar', function () {
        console.log($scope.buscar);
    });*/
    
    $scope.add = function () {
        $scope.perfis.push({
            nome: $scope.vPerfil,
            status: $scope.vStatus,
        });

        $scope.vPerfil = '';
        $scope.vStatus = '';
    };

    $scope.delete = function (index) {
        $scope.perfis.splice(index,1);
    };

    $scope.edit = function (index) {
      console.log($scope.perfis[index]);
      $scope.vPerfil = $scope.perfis[index].nome;
      $scope.vStatus = $scope.perfis[index].status;

    };


}