@extends('layouts.app')

@section('after-styles')
<!-- Stylesheets -->
  <link rel="stylesheet" href="/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="/assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="/global/vendor/waves/waves.css">
  <link rel="stylesheet" href="/global/vendor/chartist/chartist.css">
  <link rel="stylesheet" href="/global/vendor/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
  <link rel="stylesheet" href="/assets/examples/css/dashboard/v1.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <!--[if lt IE 9]>
    <script src="/global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->
  <!--[if lt IE 10]>
    <script src="/global/vendor/media-match/media.match.min.js"></script>
    <script src="/global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <!-- Scripts -->
  <script src="/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
@endsection


@section('content')

<div class="page">
	<div class="page-content container-fluid">
		<div class="row" data-plugin="matchHeight" data-by-row="true">
			<div class="col-xl-3 col-md-6">

				
  	        <!-- Widget Linearea One-->
  	        <div class="card card-shadow" id="widgetLineareaOne">
  	          <div class="card-block p-20 p-t-10">
  	            <div class="clearfix">
  	              <div class="grey-800 pull-xs-left p-y-10">
  	                <i class="icon md-account grey-600 font-size-24 vertical-align-bottom m-r-5"></i>                  User
  	              </div>
  	              <span id="userStats" class="pull-xs-right grey-700 font-size-30">0</span>
  	            </div>
  	          </div>
  	        </div>
  	        <!-- End Widget Linearea One -->
  	      </div>


          <div class="col-xl-3 col-md-6">
            <!-- Widget Linearea Two -->
            <div class="card card-shadow" id="widgetLineareaTwo">
              <div class="card-block p-20 p-t-10">
                <div class="clearfix">
                  <div class="grey-800 pull-xs-left p-y-10">
                    <i class="icon md-flash grey-600 font-size-24 vertical-align-bottom m-r-5"></i>                  VISITS
                  </div>
                  <span id="visitsStats" class="pull-xs-right grey-700 font-size-30">0</span>
                </div>
                
              </div>
            </div>
            <!-- End Widget Linearea Two -->
          </div>

          <div class="col-xl-3 col-md-6">
            <!-- Widget Linearea Three -->
            <div class="card card-shadow" id="widgetLineareaThree">
              <div class="card-block p-20 p-t-10">
                <div class="clearfix">
                  <div class="grey-800 pull-xs-left p-y-10">
                    <i class="icon md-chart grey-600 font-size-24 vertical-align-bottom m-r-5"></i>                  Total Clicks
                  </div>
                  <span id="totalClicks" class="pull-xs-right grey-700 font-size-30">0</span>
                </div>
              </div>
            </div>
            <!-- End Widget Linearea Three -->
          </div>


          <div class="col-xl-3 col-md-6">
            <!-- Widget Linearea Four -->
            <div class="card card-shadow" id="widgetLineareaFour">
              <div class="card-block p-20 p-t-10">
                <div class="clearfix">
                  <div class="grey-800 pull-xs-left p-y-10">
                    <i class="icon md-view-list grey-600 font-size-24 vertical-align-bottom m-r-5"></i>                  Items
                  </div>
                  <span id="itemsStats" class="pull-xs-right grey-700 font-size-30">0</span>
                </div>
              </div>
            </div>
            <!-- End Widget Linearea Four -->
          </div>


          <div class="col-xl-3 col-md-6">
            <!-- Widget Linearea Four -->
            <div class="card card-shadow" id="widgetLineareaFour">
              <div class="card-block p-20 p-t-10">
                <div class="clearfix">
                  <div class="grey-800 pull-xs-left p-y-10">
                    <i class="icon md-view-list grey-600 font-size-24 vertical-align-bottom m-r-5"></i>                  Connected
                  </div>
                  <span id="connectivity" class="pull-xs-right grey-700 font-size-30">0</span>
                </div>
              </div>
            </div>
            <!-- End Widget Linearea Four -->
          </div>


		</div>
	</div>
</div>

@stop


@section('after-scripts')

PollingInstance.init(); 

@stop