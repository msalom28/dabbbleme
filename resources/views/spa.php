<!doctype html>
<html lang="en" ng-app="dabbble">
<head>
  <meta charset="utf-8">
  <title>DabbbleMe</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.css"/>
  <link rel="stylesheet" href="/css/app.css"/>
</head>
<body ng-controller="AppCtrl">
  <div class="container">
    <div class="navbar">
      <div class="navbar-inner">
        <span class="brand">DabbbleMe</span>
        <ul class="nav">
          <li><a href="#/popular">Popular</a></li>
          <li><a href="#/everyone">Everyone</a></li>
          <li><a href="#/debuts">Debuts</a></li>
        </ul>
      </div>
    </div>
    <div ng-view></div>

  </div>
  <script src="/lib/angular/angular.js"></script>
  <script src="/js/app.js"></script>
  <script src="/js/services.js"></script>
  <script src="/js/controllers.js"></script>
  <script src="/js/filters.js"></script>
  <script src="/js/directives.js"></script>
</body>
</html>