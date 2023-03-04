<HTML>
    <head>
        <link rel="stylesheet" href="{{URL:: asset('admin/assets/css/style.css')}}">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    </head>
   
<BODY>
    <div ng-app="app" ng-controller="MainCtrl">
        <md-datepicker ng-model="curDate"
                                     md-placeholder="Enter Date"
                                     md-min-date="mindate" 
                                     md-max-date="maxdate"></md-datepicker>
    </div><div ng-app="app" ng-controller="MainCtrl">
        <md-datepicker ng-model="curDate"
                                     md-placeholder="Enter Date"
                                     md-min-date="mindate" 
                                     md-max-date="maxdate"></md-datepicker>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
            <script>
(function() {
	angular.module('app', ['ngMaterial'])
.controller('MainCtrl', function($scope) {
	$scope.today = new Date();
	$scope.curDate = new Date();
	$scope.mindate = new Date();
	$scope.maxdate = new Date();
	$scope.mindate.setDate($scope.today.getDate()-2);
	$scope.maxdate.setDate($scope.today.getDate()+2);
});
})();
  
              </script>
    </BODY>
    
    </HTML>