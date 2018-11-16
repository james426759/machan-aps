<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>APS</title>

    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}" defer></script>
    <script src="{{ asset('dist/js/sb-admin-2.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    @yield('css')
    <style>
      a {
        color: white;
      }

      .sidebar ul li {
        border: 0px;
      }
    </style>
</head>
<body>
    <div id="wrapper" style="background-color: #3D404C;">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #343641;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/u9.png') }}" width="125px">
                </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation" style="background-color: #3D404C;">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html">首頁</a>
                        </li>
                        <li>
                          <a href="#">系統管理<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="#">班表設定<span class="fa arrow"></span></a>
                                  <ul class="nav nav-third-level">
                                      <li>
                                          <a href="#">公司行事曆</a>
                                      </li>
                                      <li>
                                          <a href="#">製作行事曆</a>
                                      </li>
                                      <li>
                                          <a href="#">班別設定</a>
                                      </li>
                                      <li>
                                          <a href="#">休息時間設定</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">資料載入<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">載入行事曆</a>
                                        </li>
                                        <li>
                                            <a href="#">載入訂單</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">模擬排單<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">載入進度表</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>
        <footer>&nbsp;<footer>
    </div>
    @yield('js')
</body>
</html>
