var app = angular
    .module('pessoas', [])
    .controller('CtrlPessoas', ['$scope', function (s) {

        s.nome  = 'Listagem de Pessoas';
        s.pessoas = [
            {nome: 'Teste 1', cidade: 'DF'},
            {nome: 'Teste 2', cidade: 'BA'},
            {nome: 'Teste 3', cidade: 'SP'},
            {nome: 'Teste 4', cidade: 'MG'},
            {nome: 'Teste 5', cidade: 'AC'},
            {nome: 'Teste 6', cidade: 'BH'},
            {nome: 'Teste 7', cidade: 'BA'}
        ];
    }]);
