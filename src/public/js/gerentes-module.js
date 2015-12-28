(function(global, angular, $, solaria){
    solaria.controller('GerentesModuleController', function($scope, $http){
        $scope.submit = function(){
            $http.post('', $scope.forms[$scope.selectedForm])
                .success(function(redirect){
                    window.location = redirect;
                })
                .error(function(errors){
                    $scope.errors = errors;
                });
        };

        $scope.init = function(){
           
        };
    });
})(window, angular, jQuery, solaria);