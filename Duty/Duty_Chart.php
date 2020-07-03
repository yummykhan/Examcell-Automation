<?php
 include("style.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Duty_Chart</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<script>
  var app = angular.module("myapp", []);
app.controller("ListController", ['$scope', function($scope) {
    $scope.personalDetails = [
        {
            'date':'',
            'Faculty_name':'',
            'session':'',
            'Timing':'',
            'block_no':'',
            'Remark':''
        }
       ];
    
        $scope.addNew = function(personalDetail){
            $scope.personalDetails.push({ 
               'date':'',
            'Faculty_name':'',
            'session':'',
            'Timing':'',
            'block_no':'',
            'Remark':''
            });
        };
    
        $scope.remove = function(){
            var newDataList=[];
            $scope.selectedAll = false;
            angular.forEach($scope.personalDetails, function(selected){
                if(!selected.selected){
                    newDataList.push(selected);
                }
            }); 
            $scope.personalDetails = newDataList;
        };
    
    $scope.checkAll = function () {
        if (!$scope.selectedAll) {
            $scope.selectedAll = true;
        } else {
            $scope.selectedAll = false;
        }
        angular.forEach($scope.personalDetails, function(personalDetail) {
            personalDetail.selected = $scope.selectedAll;
        });
    };    
    
    
}]);
    </script>

</head>


<body ng-app="myapp" ng-controller="ListController">     
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form ng-submit="addNew()">
                            <div class="table-responsive-md">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" ng-model="selectedAll" ng-click="checkAll()" /></th>
                                          <th>Date</th>
                                          <th>Faculty_name</th>
                                          <th>Session</th>
                                          <th>Timing</th>
                                          <th>Block_No</th>
                                          <th>Remark</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="personalDetail in personalDetails">
                                        <td>
                                            <input type="checkbox" ng-model="personalDetail.selected"/></td>
                                        <td>
                                            <input type="date" class="form-control" ng-model="personalDetail.date" required/></td>
                                        <td>
                                            <input type="text" class="form-control" ng-model="personalDetail.faculty_name" required/></td>

                                       <td>
                                            <input type="text" class="form-control" ng-model="personalDetail.session" required/></td>

                                       <td>
                                            <input type="time" class="form-control" ng-model="personalDetail.timing" required/></td>

                                     <td>
                                            <input type="number" class="form-control" ng-model="personalDetail.block" required/></td>

                                    <td>
                                            <input type="text" class="form-control" ng-model="personalDetail.remark" required/></td>
                                        
                                    </tr>  
                                </tbody>
                            </table>
                        </div>
                            <div class="form-group">
                                <input ng-hide="!personalDetails.length" type="button" class="btn btn-danger pull-right" ng-click="remove()" value="Remove">
                                <input type="submit" class="btn btn-primary addnew pull-right" value="Add New">
                                <a href="#"><input type="button" class="btn btn-primary pull-right" value="Submit "></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
                                                                                        
 

