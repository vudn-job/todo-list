myApp.controller('taskController', ['$scope', function($scope) {
  $scope.greeting = 'Hola!';
  $scope.updateTaskName = function (event) {
            console.log(1);
        }
  $scope.changeToInput = function (obj) {
            console.log(obj);
        }
}]);
