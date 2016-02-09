/* Main AngularJS Web App */

var app = angular.module('webApp', ['ngRoute','ngAnimate','ngSanitize']);

/* Configure the Routes */

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
// Home
        .when("/", {templateUrl: aeJS.partials + 'home.php', controller: "PageCtrl"})
        .when("/home", {templateUrl: aeJS.partials + "home.php", controller: "PageCtrl"})
////Pages
        .when("/issues", {templateUrl: aeJS.partials + "issues.php", controller: "PageCtrl"})
        .when("/volunteer", {templateUrl: aeJS.partials +"volunteer.php", controller: "PageCtrl"})
        .when("/donate", {templateUrl: aeJS.partials +"donate.php", controller: "PageCtrl"})
        .when("/contact", {templateUrl: aeJS.partials +"contact.php", controller: "PageCtrl"})

}]);

app.controller('PageCtrl', function ($scope, $location, $http) {
    console.log("Page Controller reporting for duty.");
  
    
});

app.controller('issueCtrl', function ($scope, $http) {
  
  $http.get('wp-json/posts?filter[category_name]=issue').success(function(issueData) {
    $scope.issues = issueData;
    console.log($scope.issues);
  });
  
});

app.controller('paypal', function ($scope, $http) {
  
  $scope.user = {};
  
    $scope.submitPayment = function(){
      
  var donors = {
    'first': $scope.user.firstName,
    'last': $scope.user.lastName,
    'address': $scope.user.streetAddress,
    'address2':$scope.user.streetAddress2,
    'city': $scope.user.city,
    'state': $scope.user.state,
    'zip': $scope.user.zip,
    'phone': $scope.user.phone
  }
  console.log(donors);
  $http({
    method: 'POST',
    url: 'wp-content/themes/prevo/donors.php',
    data: donors,
    headers: {'Content-Type': 'application/json'},
  })
    .success(function(response) {
      console.log(response);
  });
    
  
  var FormData = {
    'customer_first_name': $scope.user.firstName,
    'customer_last_name':
    $scope.user.lastName,
    'customer_credit_card_type': $scope.user.cardType,
    'customer_credit_card_number':
    $scope.user.cardNumber,
    'cc_expiration_month': $scope.user.expirationMonth,
    'cc_expiration_year': $scope.user.expirationYear,
    'cc_cvv2_number': $scope.user.cvvNum,
    'customer_address': $scope.user.billAddr,
    'customer_address2': $scope.user.billAddr2,
    'customer_city':$scope.user.billCity,
    'customer_state':$scope.user.billState,
    'customer_zip':$scope.user.billZip,
    'customer_country':$scope.user.billCountry,
    'example_payment_amount':$scope.user.amount
    
  };
  

    console.log(FormData);

  $http({
    method: 'POST',
    url: 'wp-content/themes/prevo/paypal_pro.php',
    data: FormData,
    headers: {'Content-Type': 'application/json'},
  })
    .success(function(response) {
      alert(response);
      console.log(response);
    });
      
      $scope.user={};
  };
});

