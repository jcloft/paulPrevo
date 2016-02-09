<div ng-controller="issueCtrl" id="issuesPage">
  <div class="jumbotron nopadding animated fadeIn cols" id="jumboBack">
    <div class="col-sm-12" id="title">
      <p>On The Issues</p>
    </div>
    <div class="col-xs-12 col-sm-6" id="issues">
      <ul ng-model="issues" ng-repeat="issue in issues|orderBy: '-'" ng-if="issue.ID!='6'"  ng-init="issues.selected='6'" ng-click="issues.selected = issue.ID">
        <li class="col-sm-5 animated fadeInRight"><p>{{issue.title}}</p></li>
      </ul>
    </div>
    <div class="col-xs-12 col-sm-6" id="info">
      <ul ng-repeat="issue in issues">
        <li ng-bind-html="issue.content" ng-if="issues.selected==issue.ID" class="fadeIn">           
        </li>
      </ul>
    </div>
  </div> 
</div>
