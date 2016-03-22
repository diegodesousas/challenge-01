var challengeControllers = angular.module('challangeControllers', []);

challengeControllers.controller('ChallengeController', ['$scope', 'Person', function($scope, Person) {
    
    $scope.persons = Person.query();
}]);

challengeControllers.controller('ChallengeGetController', ['$scope', '$routeParams', 'Person', '$location', '$timeout', function($scope, $routeParams, Person, $location, $timeout) {
    
    $scope.person = Person.get({ id : $routeParams.id });
    
    $scope.address = $scope.person.address;
    
    $scope.delete = function(cpf) {
        
        Person.delete({ id : cpf }, function(response) {
            
            alert(response.message);
            
            $location.path('/persons/');
            
        });
    };
}]);

challengeControllers.controller('ChallengeSaveController', [
    '$scope', 
    '$routeParams', 
    'Person', 
    '$location', 
    'Cep',
    'MaritalStatus',
    'Category',
    function($scope, $routeParams, Person, $location, Cep, MaritalStatus, Category) {
    
        $scope.person = {};
        $scope.address = {};
        $scope.details = {};

        $scope.formPerson = {};
        $scope.formAddress = {};
        $scope.formDetails = {};

        $scope.maritalStatuses = MaritalStatus.query();
        $scope.categorys = Category.query();

        if ($routeParams.id) {

            $scope.person = Person.get({ id : $routeParams.id }, function(person) {

                $scope.address = person.address[0];
                $scope.details = person.details;
            });
        }

        $scope.save = function(person, address, details) {

            var form = { 
                person : person,
                address : address,
                details : details
            };

            var options = {
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            };

            Person.save(form, function(response) {

                if (!response.formPerson && !response.formAddress) {

                    alert("Cadastro realizado com sucesso.");

                    return $location.path('/persons/' + response.cpf);
                }

                $scope.formPerson = response.formPerson;
                $scope.formAddress = response.formAddress;
                $scope.formDetails = response.formDetails;

            }, options);
        };

        $scope.findCep = function(cep) {

            if (cep.length === 8) {

                Cep.get({ cep : cep }, function(response) {

                    if (!response.isNotFound) {

                        $scope.address.street = response.logradouro;
                        $scope.address.district = response.bairro;
                        $scope.address.city = response.cidade;
                        $scope.address.state = response.estado_info.nome;
                    } else {

                        $scope.address.street = "";
                        $scope.address.district = "";
                        $scope.address.city = "";
                        $scope.address.state = "";
                        $scope.address.number = "";
                        $scope.address.additional = "";

                    }
                });
            }
        };
    }]);
