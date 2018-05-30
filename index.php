<?php include 'includes/head.php'; ?>
<div class="container" ng-controller="taskController">
    <div class="row">
        <div class="col s12 m6 l8">
            <h3 class="center">Here are The Tasks</h3>
            <table class="highlight">
                <thead>
                    <tr>
                        <th>Name of Task</th>
                        <th>Task Due Date</th>
                        <th>Is Task Complete?</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="task in tasks">
                        <td><span ng-class="{'completed':task.completed}">{{task.taskName}}</span></td>
                        <td><span ng-class="{'completed':task.completed}">{{task.taskDue}}</span></td>
                        <td>
                            <div class="switch">
                                <label>
                                Incomplete
                                <input type="checkbox" ng-model="task.completed">
                                <span class="lever"></span>
                                Complete
                                </label>
                            </div>
                        </td>
                        <td>
                            <button class="btn waves-effect waves-light Red" ng-click="clearCompleted()">Delete Completed Task</button>
                        </td>
                    </tr> 
                </tbody>
            </table>
            <br /> 
            <button class="btn waves-effect waves-light" ng-click="clearCompleted()">Clear All Completed</button>
        </div>

        <div class="col s12 m6 l4">
            <form class="col s12" name="taskCreate" ng-submit="addTask()">
                <div class="row">
                    <h3 class="center">Add a Task!</h3>
                    <div class="input-field col s12 center">
                        <input id="new_task" type="text" class="validate" name="newTask" ng-model="newTask" required>
                        <label for="new_task">Name of Task</label>
                    </div>
                    <div class="input-field col s12 center">
                        <input id="task_date" type="text" class="datepicker" class="validate" name="newDate" ng-model="newDate" required>
                        <label for="task_date">Day Task is Due</label>
                    </div>
                </div>
                <button class="btn waves-effect waves-light center" ng-disabled="taskCreate.$invalid">Submit Task</button>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>