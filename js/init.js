angular.module('TaskList',[])
    .controller('taskController',['$scope',
        function($scope){
            $scope.tasks = [
                {'taskName':'Build a Task List Application','taskDue':'May 30, 2018','completed':false}
            ];

            $scope.addTask = function(){
                $scope.tasks.push({'taskName': $scope.newTask, 'taskDue': $scope.newDate, 'completed':false})
                $scope.newTask = ''
                $scope.newDate = ''
            }

            $scope.clearCompleted = function(){
                $scope.tasks = $scope.tasks.filter(function(item){
                    return !item.completed
                })
            }
            $scope.delSingleTask = function(){
                var oldTasks = $scope.tasks;
                $scope.tasks = [];
                angular.forEach(oldTasks, function(item) {
                    if (!item.done) $scope.tasks.push(item);
                });
            }
        }])

$(document).ready(function(){
    $('.datepicker').datepicker();
    $('.modal').modal();
});