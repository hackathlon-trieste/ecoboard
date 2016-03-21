<?php 
session_start();
if (!isset($_SESSION["login"])) header("Location: login.php");
include("db.inc.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Ecoboard | Trieste</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="css/icheck/flat/green.css" rel="stylesheet" />
  <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="js/jquery.min.js"></script>
  <script src="js/nprogress.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">
<?php

?>
  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="./" class="site_title"><img src="images/logo_team_006_mini.png" style="height:46px;background:#fff;border-radius:25px"> <span>Eco Board</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="images/utenti/<?=$_SESSION["utente_foto"]?>" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Benvenuto,</span>
              <h2><?=$_SESSION["utente_nome"]?> <?=$_SESSION["utente_cognome"]?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>Menu</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-edit"></i> Funzioni <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="./">Riepilogo</a>
                    </li>
                    <li><a href="?pag=traffico">Grafici</a>
                    </li>
                  </ul>
                  </li>
                
              </ul>
            </div>
            

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <!--
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          //-->
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/utenti/<?=$_SESSION["utente_foto"]?>" alt=""><?=$_SESSION["utente_nome"]?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profilo</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Impostazioni</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Aiuto</a>
                  </li>
                  <li><a href="login.php?logout=1"><i class="fa fa-sign-out pull-right"></i> Scollegati</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <i class="fa fa-bell-o" style="font-size: 25px;float:left;margin-top:3px;margin-right:3px"></i>
                                    </span>
                      <span>
                                        <span>Inquinamento</span>
                      <span class="time">10 ore fa</span>
                      </span>
                      <span class="message">
                                        Rilevati valori ecessivi zona VALMAURA.
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <i class="fa fa-bell" style="font-size: 25px;float:left;margin-top:3px;margin-right:3px"></i>
                                    </span>
                      <span>
                                        <span>Traffico</span>
                      <span class="time">11 ore fa</span>
                      </span>
                      <span class="message">
                                        Traffico eccessivo in zona RIVE
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <i class="fa fa-bell" style="font-size: 25px;float:left;margin-top:3px;margin-right:3px"></i>
                                    </span>
                      <span>
                                        <span>Traffico</span>
                      <span class="time">12 ore fa</span>
                      </span>
                      <span class="message">
                                        Traffico eccessivo in zona OPICINA
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a href="inbox.html">
                        <strong>Visualizza le altre</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content -->
      <div class="right_col" role="main">
        <?php
        if ($_GET["pag"]) {
          if (file_exists("pagine/".$_GET["pag"].".inc.php")) include("pagine/".$_GET["pag"].".inc.php");
			    else echo "<div class=\alert alert-danger\"><strong>Attenzione!</strong> La pagina &egrave; inesistente!</div>";
        }
        else include("pagine/index.inc.php");
?>
        </div>

        <!-- footer content -->

        <footer>
          <div class="copyright-info">
            <p class="pull-right">By Eco Board 2016</p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="js/bootstrap.min.js"></script>

  <!-- gauge js -->
  <script type="text/javascript" src="js/gauge/gauge.min.js"></script>
  <script type="text/javascript" src="js/gauge/gauge_demo.js"></script>
  <!-- bootstrap progress js -->
  <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="js/icheck/icheck.min.js"></script>
  <!-- daterangepicker -->
  <script type="text/javascript" src="js/moment/moment.min.js"></script>
  <script type="text/javascript" src="js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="js/chartjs/chart.min.js"></script>

  <script src="js/custom.js"></script>

  <!-- flot js -->
  <!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
  <script type="text/javascript" src="js/flot/jquery.flot.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.orderBars.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.time.min.js"></script>
  <script type="text/javascript" src="js/flot/date.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.spline.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.stack.js"></script>
  <script type="text/javascript" src="js/flot/curvedLines.js"></script>
  <script type="text/javascript" src="js/flot/jquery.flot.resize.js"></script>
  <script>
    $(document).ready(function() {
      // [17, 74, 6, 39, 20, 85, 7]
      //[82, 23, 66, 9, 99, 6, 2]
      var data1 = [
        [gd(2012, 1, 1), 17],
        [gd(2012, 1, 2), 74],
        [gd(2012, 1, 3), 6],
        [gd(2012, 1, 4), 39],
        [gd(2012, 1, 5), 20],
        [gd(2012, 1, 6), 85],
        [gd(2012, 1, 7), 7]
      ];

      var data2 = [
        [gd(2012, 1, 1), 82],
        [gd(2012, 1, 2), 23],
        [gd(2012, 1, 3), 66],
        [gd(2012, 1, 4), 9],
        [gd(2012, 1, 5), 119],
        [gd(2012, 1, 6), 6],
        [gd(2012, 1, 7), 9]
      ];
      $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
        data1, data2
      ], {
        series: {
          lines: {
            show: false,
            fill: true
          },
          splines: {
            show: true,
            tension: 0.4,
            lineWidth: 1,
            fill: 0.4
          },
          points: {
            radius: 0,
            show: true
          },
          shadowSize: 2
        },
        grid: {
          verticalLines: true,
          hoverable: true,
          clickable: true,
          tickColor: "#d5d5d5",
          borderWidth: 1,
          color: '#fff'
        },
        colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
        xaxis: {
          tickColor: "rgba(51, 51, 51, 0.06)",
          mode: "time",
          tickSize: [1, "day"],
          //tickLength: 10,
          axisLabel: "Date",
          axisLabelUseCanvas: true,
          axisLabelFontSizePixels: 12,
          axisLabelFontFamily: 'Verdana, Arial',
          axisLabelPadding: 10
            //mode: "time", timeformat: "%m/%d/%y", minTickSize: [1, "day"]
        },
        yaxis: {
          ticks: 8,
          tickColor: "rgba(51, 51, 51, 0.06)",
        },
        tooltip: false
      });

      function gd(year, month, day) {
        return new Date(year, month - 1, day).getTime();
      }
    });
  </script>

  <!-- worldmap -->
  <script type="text/javascript" src="js/maps/jquery-jvectormap-2.0.3.min.js"></script>
  <script type="text/javascript" src="js/maps/gdp-data.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script type="text/javascript" src="js/maps/jquery-jvectormap-us-aea-en.js"></script>
  <!-- ht trieste //-->
<?php
if($_GET["pag"] == "traffico") {
?>
  <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script>

$(function () {
  Highcharts.setOptions({
	lang: {
		months: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno',  'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
		weekdays: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab']
	}
});
    $.getJSON('ajax/richieste.php?cosa=telecamere&quale=1', function (data) {
      $.getJSON('ajax/richieste.php?cosa=telecamere&quale=1&future=1', function (data2) {
        $('#container1').highcharts({
            chart: {
                type: 'areasplinerange',
                zoomType: 'x'
            },

            title: {
                text: 'Autovetture Transitate (Corso Italia 2)'
            },

            xAxis: {
                type: 'datetime'
            },

            yAxis: {
                title: {
                    text: null
                }
            },

            tooltip: {
                crosshairs: true,
                //shared: true,
                
                formatter: function () {
                    return '<b>' + Highcharts.dateFormat('%a %e %b %Y - %H:%M', new Date(this.x)) + '</b><br>Numero Autovetture: <b>' + -(this.y) + '</b>';
                }
            },

            legend: {
                enabled: false
            },

            series: [{
                name: 'Numero Autovetture',
                data: data},
                {name: 'Numero Autovetture Teoriche',
                data: data2,
                dashStyle: 'longdash',
                fillOpacity: 0.1
                }]
        });
    });
    });
    $(function () {
    $.getJSON('ajax/richieste.php?cosa=telecamere&quale=2', function (data) {
        $('#container2').highcharts({
            chart: {
                type: 'areasplinerange',
                zoomType: 'x'
            },
            title: {
                text: 'Autovetture Transitate (Riva Tre Novembre 13c)'
            },

            xAxis: {
                type: 'datetime'
            },

            yAxis: {
                title: {
                    text: null
                }
            },

            tooltip: {
                crosshairs: true,
                //shared: true,
                
                formatter: function () {
                    return '<b>' + Highcharts.dateFormat('%a %e %b %Y - %H:%M', new Date(this.x)) + '</b><br>Numero Autovetture: <b>' + -(this.y) + '</b>';
                }
            },

            legend: {
                enabled: false
            },

            series: [{
                name: 'Numero Autovetture',
                data: data
            }]
        });
    });

});
$(function () {
    $.getJSON('ajax/richieste.php?cosa=telecamere_euro&quale=1', function (data) {
        $('#container3').highcharts({
            chart: {
                type: 'areasplinerange',
                zoomType: 'x'
            },
            title: {
                text: 'Autovetture Transitate (Riva Tre Novembre 13c)'
            },

            xAxis: {
                type: 'datetime'
            },

            yAxis: {
                title: {
                    text: null
                }
            },

            tooltip: {
                crosshairs: true,
                //shared: true,
                
                formatter: function () {
                    return '<b>' + Highcharts.dateFormat('%a %e %b %Y - %H:%M', new Date(this.x)) + '</b><br>Numero Autovetture: <b>' + -(this.y) + '</b>';
                }
            },

            legend: {
                enabled: false
            },

            series: [{
                name: 'Numero Autovetture',
                data: data
            }]
        });
    });

});

$(function () {
                $.getJSON('ajax/richieste.php?cosa=telecamere_euro&quale=1', function (data) {
                    
                    console.log(data);
                    
                    $('#container3').highcharts({
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Concentrazione CO (Corso Italia 2)'
                            //text: 'Stacked column chart'
                        },
                        xAxis: {
                            type: 'datetime'
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                //text: 'Total fruit consumption'
                            },
                            stackLabels: {
                                enabled: true,
                                style: {
                                    fontWeight: 'bold',
                                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                                }
                            }
                        },
                        legend: {
                            align: 'right',
                            x: -30,
                            verticalAlign: 'top',
                            y: 25,
                            floating: true,
                            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                            borderColor: '#CCC',
                            borderWidth: 1,
                            shadow: false
                        },
                        tooltip: {
                            headerFormat: '<b>{point.x:%d/%m/%Y}</b><br/>',
                            pointFormat: '{series.name}: {point.y} CO<br/>Totale: {point.stackTotal} CO'
                            /*
                            formatter: function () {
                    return this.series.name + ': <b>' + this.y + '</b><br>Totale: <b>'+ this.stackTotal +'</b>';
                } */
                        },
                        plotOptions: {
                            column: {
                                stacking: 'normal',
                                dataLabels: {
                                    enabled: false,
                                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                                    style: {
                                        textShadow: '0 0 3px black'
                                    }
                                }
                            }
                        },
                        series: [{
                            name: 'E1',
                            data: data.E1
                        }, {
                            name: 'E2',
                            data: data.E2
                        }, {
                            name: 'E3',
                            data: data.E3
                        }, {
                            name: 'E4',
                            data: data.E4
                        }, {
                            name: 'E5',
                            data: data.E5
                        }, {
                            name: 'Ambiente',
                            data: data.AMBIENTE
                        }]
                        /*
                        series: [{
                            name: 'John',
                            data: [3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12]
                        }, {
                            name: 'Jane',
                            data: [1, 3, 4, 3, 3, 5, 4, 1, 3, 4, 3, 3, 5, 4, 1, 3, 4, 3, 3, 5, 4, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12]
                        }]
                        */
                    });
                });
                    /*
                    $('#container').highcharts({
                        chart: {
                            //type: 'areaspline'
                            type: 'stackedcolumn'
                            
                        },
                        title: {
                            text: 'Average fruit consumption during one week'
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            verticalAlign: 'top',
                            x: 150,
                            y: 100,
                            floating: true,
                            borderWidth: 1,
                            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                        },
                        xAxis: {
                            type: 'datetime',
                            
                            plotBands: [{ // visualize the weekend
                                from: 4.5,
                                to: 6.5,
                                color: 'rgba(68, 170, 213, .2)'
                            }]
                        },
                        yAxis: {
                            title: {
                                text: 'Fruit units'
                            }
                        },
                        tooltip: {
                            shared: true,
                            valueSuffix: ' units'
                        },
                        credits: {
                            enabled: false
                        },
                        plotOptions: {
                            areaspline: {
                                fillOpacity: 0.5
                            }
                        },
                        series: [{
                            name: 'Totale',
                            data: null
                        }, {
                            name: 'E1',
                            data: data.E1
                        }, {
                            name: 'E2',
                            data: data.E2
                        }, {
                            name: 'E3',
                            data: data.E3
                        }, {
                            name: 'E4',
                            data: data.E4
                        }, {
                            name: 'E5',
                            data: data.E5
                        }, {
                            name: 'Ambiente',
                            data: null
                        }]
                    });
                    */
            });
  $(function () {
                $.getJSON('ajax/richieste.php?cosa=telecamere_euro&quale=2', function (data) {
                    
                    console.log(data);
                    
                    $('#container4').highcharts({
                        chart: {
                            type: 'column'
                        },
                        title: {
                            text: 'Concentrazione CO (Riva Tre Novembre 13c)'
                            //text: 'Stacked column chart'
                        },
                        xAxis: {
                            type: 'datetime'
                        },
                        yAxis: {
                            min: 0,
                            title: {
                                //text: 'Total fruit consumption'
                            },
                            stackLabels: {
                                enabled: true,
                                style: {
                                    fontWeight: 'bold',
                                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                                }
                            }
                        },
                        legend: {
                            align: 'right',
                            x: -30,
                            verticalAlign: 'top',
                            y: 25,
                            floating: true,
                            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
                            borderColor: '#CCC',
                            borderWidth: 1,
                            shadow: false
                        },
                        tooltip: {
                            headerFormat: '<b>{point.x:%d/%m/%Y}</b><br/>',
                            pointFormat: '{series.name}: {point.y} CO<br/>Totale: {point.stackTotal} CO'
                            /*
                            formatter: function () {
                    return this.series.name + ': <b>' + this.y + '</b><br>Totale: <b>'+ this.stackTotal +'</b>';
                } */
                        },
                        plotOptions: {
                            column: {
                                stacking: 'normal',
                                dataLabels: {
                                    enabled: false,
                                    color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                                    style: {
                                        textShadow: '0 0 3px black'
                                    }
                                }
                            }
                        },
                        series: [{
                            name: 'E1',
                            data: data.E1
                        }, {
                            name: 'E2',
                            data: data.E2
                        }, {
                            name: 'E3',
                            data: data.E3
                        }, {
                            name: 'E4',
                            data: data.E4
                        }, {
                            name: 'E5',
                            data: data.E5
                        }, {
                            name: 'Ambiente',
                            data: data.AMBIENTE
                        }]
                        /*
                        series: [{
                            name: 'John',
                            data: [3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12]
                        }, {
                            name: 'Jane',
                            data: [1, 3, 4, 3, 3, 5, 4, 1, 3, 4, 3, 3, 5, 4, 1, 3, 4, 3, 3, 5, 4, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12, 3, 4, 3, 5, 4, 10, 12]
                        }]
                        */
                    });
                });
                    /*
                    $('#container').highcharts({
                        chart: {
                            //type: 'areaspline'
                            type: 'stackedcolumn'
                            
                        },
                        title: {
                            text: 'Average fruit consumption during one week'
                        },
                        legend: {
                            layout: 'vertical',
                            align: 'left',
                            verticalAlign: 'top',
                            x: 150,
                            y: 100,
                            floating: true,
                            borderWidth: 1,
                            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
                        },
                        xAxis: {
                            type: 'datetime',
                            
                            plotBands: [{ // visualize the weekend
                                from: 4.5,
                                to: 6.5,
                                color: 'rgba(68, 170, 213, .2)'
                            }]
                        },
                        yAxis: {
                            title: {
                                text: 'Fruit units'
                            }
                        },
                        tooltip: {
                            shared: true,
                            valueSuffix: ' units'
                        },
                        credits: {
                            enabled: false
                        },
                        plotOptions: {
                            areaspline: {
                                fillOpacity: 0.5
                            }
                        },
                        series: [{
                            name: 'Totale',
                            data: null
                        }, {
                            name: 'E1',
                            data: data.E1
                        }, {
                            name: 'E2',
                            data: data.E2
                        }, {
                            name: 'E3',
                            data: data.E3
                        }, {
                            name: 'E4',
                            data: data.E4
                        }, {
                            name: 'E5',
                            data: data.E5
                        }, {
                            name: 'Ambiente',
                            data: null
                        }]
                    });
                    */
            });

});
</script>
<?php
}
?>
<!-- ht trieste //-->
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script>
    $(function() {
      $('#world-map-gdp').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        zoomOnScroll: false,
        series: {
          regions: [{
            values: gdpData,
            scale: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
          }]
        },
        onRegionTipShow: function(e, el, code) {
          el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
        }
      });
    });
  </script>
  <!-- skycons -->
  <script src="js/skycons/skycons.min.js"></script>
  <script>
    var icons = new Skycons({
        "color": "#73879C"
      }),
      list = [
        "clear-day", "clear-night", "partly-cloudy-day",
        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
        "fog"
      ],
      i;

    for (i = list.length; i--;)
      icons.set(list[i], list[i]);

    icons.play();
  </script>

  <!-- dashbord linegraph -->
  <script>
    Chart.defaults.global.legend = {
      enabled: false
    };

    var data = {
      labels: [
        "Symbian",
        "Blackberry",
        "Other",
        "Android",
        "IOS"
      ],
      datasets: [{
        data: [15, 20, 30, 10, 30],
        backgroundColor: [
          "#BDC3C7",
          "#9B59B6",
          "#455C73",
          "#26B99A",
          "#3498DB"
        ],
        hoverBackgroundColor: [
          "#CFD4D8",
          "#B370CF",
          "#34495E",
          "#36CAAB",
          "#49A9EA"
        ]

      }]
    };

    var canvasDoughnut = new Chart(document.getElementById("canvas1"), {
      type: 'doughnut',
      tooltipFillColor: "rgba(51, 51, 51, 0.55)",
      data: data
    });
  </script>
  <!-- /dashbord linegraph -->
  <!-- datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {

      var cb = function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
      }

      var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2016',
        maxDate: '03/20/2016',
        dateLimit: {
          days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: false,
        ranges: {
          'Oggi': [moment(), moment()],
          'Ieri': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Ultimi 7 giorni': [moment().subtract(6, 'days'), moment()],
          'Ultimi 30 giorni': [moment().subtract(29, 'days'), moment()],
          'Questo mese': [moment().startOf('month'), moment().endOf('month')],
          'L\'altro mese': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'left',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'DD/MM/YYYY',
        separator: ' to ',
        locale: {
          applyLabel: 'Applica',
          cancelLabel: 'Cancella',
          fromLabel: 'Da',
          toLabel: 'a',
          customRangeLabel: 'Personalizza',
          daysOfWeek: ['Do', 'Lu', 'Ma', 'Me', 'Gi', 'Ve', 'Sa'],
          monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agostoo', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
          firstDay: 1
        }
      };
      $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      $('#reportrange').daterangepicker(optionSet1, cb);
      $('#reportrange').on('show.daterangepicker', function() {
        console.log("show event fired");
      });
      $('#reportrange').on('hide.daterangepicker', function() {
        console.log("hide event fired");
      });
      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
      });
      $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
        console.log("cancel event fired");
      });
      $('#options1').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
      });
      $('#options2').click(function() {
        $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
      });
      $('#destroy').click(function() {
        $('#reportrange').data('daterangepicker').remove();
      });
    });
  </script>
  <script>
    NProgress.done();
  </script>
  <!-- /datepicker -->
  <!-- /footer content -->
</body>
<script>
$( document ).ready(function() {
  var aa = 1500;
  var bb = 800;
  $('#conta_aa').text(aa);
  $('#conta_bb').text(bb);
  setInterval(function(){
    aa=aa+5;
  $('#conta_aa').text(aa);
  }, 2000);
  setInterval(function(){
    bb=bb+4;
  $('#conta_bb').text(bb);
  }, 3000);
});
</script>
</html>
