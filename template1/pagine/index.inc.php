<!-- top tiles -->
        <div class="row tile_count">
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-automobile"></i> Cam 1</span>
              <div class="count" id="conta_aa">0</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>5% </i> Ultima settimana</span>
            </div>
          </div>
          <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
            <div class="left"></div>
            <div class="right">
              <span class="count_top"><i class="fa fa-automobile"></i> Cam 2</span>
              <div class="count" id="conta_bb">0</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>1% </i> Ultima settimana</span>
            </div>
          </div>
          

        </div>
        <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

              <!-- start of weather widget -->
              <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_title">
                    <h2>Meteo</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="temperature"><b>Domenica</b>, <?=date("H:i")?>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="weather-icon">
                          <span>
                                            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                        </span>

                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="weather-text">
                          <h2>Trieste (TS)</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12">
                      <div class="weather-text pull-right">
                        <h3 class="degrees">15</h3>
                      </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row weather-days">
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Lun</h2>
                          <h3 class="degrees">13</h3>
                          <span>
                                                <canvas id="clear-day" width="32" height="32">
                                                </canvas>

                                        </span>
                          <h5>15
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mar</h2>
                          <h3 class="degrees">12</h3>
                          <canvas height="32" width="32" id="rain"></canvas>
                          <h5>12
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Mer</h2>
                          <h3 class="degrees">12</h3>
                          <canvas height="32" width="32" id="snow"></canvas>
                          <h5>14
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Gio</h2>
                          <h3 class="degrees">13</h3>
                          <canvas height="32" width="32" id="sleet"></canvas>
                          <h5>15
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Ven</h2>
                          <h3 class="degrees">14</h3>
                          <canvas height="32" width="32" id="wind"></canvas>
                          <h5>11
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="col-sm-2">
                        <div class="daily-weather">
                          <h2 class="day">Sab</h2>
                          <h3 class="degrees">12</h3>
                          <canvas height="32" width="32" id="cloudy"></canvas>
                          <h5>10
                                            <i>km/h</i>
                                        </h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                  
                </div>

              </div>
              <!-- end of weather widget -->
<!--
              <div class="col-md-9 col-sm-9 col-xs-12">
                <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                <div style="width: 100%;">
                  <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                </div>
              </div>//-->
              <div class="col-md-6 col-sm-6 col-xs-12 bg-white">
                <div class="x_title">
                  <h2>Centraline ARPA</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-6">
                  <div>
                    <p>Stazione</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>Baiamonti</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-6">
                  <div>
                    <p>Servola</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                      </div>
                    </div>
                  </div>
                  <div>
                    <p>Melara</p>
                    <div class="">
                      <div class="progress progress_sm" style="width: 76%;">
                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="clearfix"></div>
            </div>
          </div>

        </div>
    </div>