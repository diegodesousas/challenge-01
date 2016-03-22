var challangeApp = angular.module('challengeApp', [
  'ngRoute',
  'challengeServices',
  'challangeControllers'
]);

challangeApp.config(['$routeProvider', function($routeProvider) {
    
    $routeProvider.
        when('/persons', {
            templateUrl : 'frontend/app/pages/persons.html',
            controller : 'ChallengeController'
        }).
        when('/persons/:id', {
            templateUrl : 'frontend/app/pages/persons-view.html',
            controller : 'ChallengeGetController'
        }).
        when('/new/person', {
            templateUrl : 'frontend/app/pages/persons-new.html',
            controller : 'ChallengeSaveController'
        }).
        when('/edit/person/:id', {
            templateUrl : 'frontend/app/pages/persons-new.html',
            controller : 'ChallengeSaveController'
        }).
        otherwise({
            redirectTo : '/persons'
        });
}]);