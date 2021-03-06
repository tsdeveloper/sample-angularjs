var CtrlApp = function ($scope) {

    $scope.nome = "Developer Web with AngularJS 1x"
    console.log($scope);

};

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
    ]
    
    $scope.adicionar = function () {
        $scope.perfis.push({
            nome: $scope.vPerfil,
            status: $scope.vStatus,
        });

        $scope.vPerfil = '';
        $scope.vStatus = '';
    };

    $scope.remover = function (index) {
        $scope.perfis.splice(index,1);
    };
}