var challengeServices = angular.module('challengeServices', ['ngResource']);

challengeServices.factory('Person', ['$resource', function ($resource) {
        
    return $resource('/persons/:id', {}, {
        
        get : {
            transformResponse : function(data, headersGetter) {
            
                var person = JSON.parse(data);
                
                var birthdayDate = new Date(person.birthday);
                person.birthday = birthdayDate.toLocaleDateString('pt-BR');
                
                var detailsTransformed = person.details,
                    expeditionDate = new Date(person.details.expedition_date);
                detailsTransformed.expeditionDate = expeditionDate.toLocaleDateString('pt-BR');
                
                detailsTransformed.maritalStatusEntity = person.details.marital_status;
                detailsTransformed.maritalStatus = person.details.marital_status.id;
                
                detailsTransformed.categoryEntity = person.details.category;
                detailsTransformed.category = person.details.category.id;
                    
                person.details = detailsTransformed;
                
                return person;
            }
        }
    });
}]);

challengeServices.factory('Cep', ['$resource', function ($resource) {
        
    return $resource('/cep/:cep');
}]);

challengeServices.factory('Category', ['$resource', function ($resource) {
        
    return $resource('/category');
}]);

challengeServices.factory('MaritalStatus', ['$resource', function ($resource) {
        
    return $resource('/maritalstatus');
}]);