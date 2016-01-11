	<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Universal - All In 1 Template</title>

    <meta name="keywords" content="">

</head>

<body ng-app="ngWpApp" >

    <div id="all" ng-controller="commonCtrl as common">
	 <!-- /#header -->
	  <div ng-include="common.path.header"></div>
	  
	  <div ui-view="slider"></div>
	  <div ui-view="service"></div>

  
	 <!-- /#footer -->
	  <div ng-include="common.path.footer"></div>

   </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->


<?php get_footer(); ?>
