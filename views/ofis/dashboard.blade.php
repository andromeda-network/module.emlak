@layout('core/admin_master')

@section('title')
Genel Bakis
@endsection




@section('content')


      <div class="row">

        <div class="col-sm-6 col-md-3">
          <div class="row-stat">
            <p class="row-stat-label">Günlük Ciro</p>
            <h3 class="row-stat-value">890.00 TL</h3>
            <span class="label label-success row-stat-badge">+43%</span>
          </div> <!-- /.row-stat -->
        </div> <!-- /.col -->

        <div class="col-sm-6 col-md-3">
          <div class="row-stat">
            <p class="row-stat-label">Bu Ayın Cirosu</p>
            <h3 class="row-stat-value">8290.00 TL</h3>
            <span class="label label-success row-stat-badge">+17%</span>
          </div> <!-- /.row-stat -->
        </div> <!-- /.col -->

        <div class="col-sm-6 col-md-3">
          <div class="row-stat">
            <p class="row-stat-label">Toplam İlan Sayısı</p>
            <h3 class="row-stat-value">756</h3>
            <span class="label label-success row-stat-badge">+26%</span>
          </div> <!-- /.row-stat -->
        </div> <!-- /.col -->

        <div class="col-sm-6 col-md-3">
          <div class="row-stat">
            <p class="row-stat-label">Emlak Ofisi Çalışanları</p>
            <h3 class="row-stat-value">19</h3>
            <span class="label label-danger row-stat-badge">+5%</span>
          </div> <!-- /.row-stat -->
        </div> <!-- /.col -->
        
      </div> <!-- /.row -->


      <br>



      <div class="row">

        <div class="col-md-8">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-bar-chart-o"></i>
                İlanlarınızın Görütülenme Sayısı
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div class="pull-left">
                <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-sm btn-default">
                    <input type="radio" name="options" id="option1"> Gün
                  </label>
                  <label class="btn btn-sm btn-default">
                    <input type="radio" name="options" id="option2"> Ay
                  </label>
                  <label class="btn btn-sm btn-default active">
                    <input type="radio" name="options" id="option3"> Yıl
                  </label>
                </div>

                &nbsp;

                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                    Tarih Seçin
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a href="javascript:;">Dropdown link</a></li>
                    <li><a href="javascript:;">Dropdown link</a></li>
                  </ul>
                </div>                
              </div> <!-- /.pull-left -->

              <div class="pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-cog"></i> &nbsp;&nbsp;<span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="javascript:;">Action</a></li>
                    <li><a href="javascript:;">Another action</a></li>
                    <li><a href="javascript:;">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:;">Separated link</a></li>
                  </ul>
                </div>
              </div> <!-- /.pull-right -->

              <div class="clear"></div>

              <hr />


              <div id="area-chart" class="chart-holder"></div> <!-- /#area-chart -->



            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->





          <div class="portlet">

            <div class="portlet-header">
              <h3>
              <i class="fa fa-calendar"></i>
              Takvim
              </h3>
            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div id="full-calendar"></div>

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->


        </div> <!-- /.col -->



        <div class="col-md-4">

          <div class="portlet">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Emlak Dağılımı
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div id="donut-chart" class="chart-holder-225"></div>
                  

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->

              



          <div class="portlet">

            <div class="portlet-header">
              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Haflık İstatistikler
              </h3>
            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

              <div class="row row-marginless">

                <div class="spark-stat col-md-6 col-sm-6 col-xs-6">

                  <div id="total-visits">32, 38, 46, 49, 53, 48, 47, 56</div>
                  <span class="spark-stat-value">126,564</span>
                  <h5 class="spark-stat-label">İlan Görüntülenme</h5>

                </div> <!-- /.col -->

                <div class="spark-stat col-md-6 col-sm-6 col-xs-6">

                  <div id="new-visits">32, 38, 46, 49, 53, 48, 47, 56</div>
                  <span class="spark-stat-value">9872</span>
                  <h5 class="spark-stat-label">İlan</h5>

                </div> <!-- /.col -->

              </div> <!-- /.row -->


              <div class="row row-marginless">

                <div class="spark-stat col-md-6 col-sm-6 col-xs-6">

                  <div id="unique-visits">32, 38, 46, 49, 53, 48, 47, 56</div>
                  <span class="spark-stat-value">845</span>
                  <h5 class="spark-stat-label">Emlak Dükkanı</h5>

                </div> <!-- /.col -->

                <div class="spark-stat col-md-6 col-sm-6 col-xs-6">

                  <div id="revenue-visits" data-bar-color="#c00">32, 38, 46, 49, 53, 48, 47, 56</div>
                  <span class="spark-stat-value">13,492</span>
                  <h5 class="spark-stat-label">Emlak Çalışanı</h5>

                </div> <!-- /.col -->

              </div> <!-- /.row -->

            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->





          <div class="portlet">

            <div class="portlet-header">
              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Bugün Satış Yapan Emlak Çalışanları
              </h3>
            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <td>Adı Soyadı</td>
                      <td>Ofis</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Asil Balaban</td>
                      <td>Balaban Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Duygu Özman</td>
                      <td>Vacide Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Emre Balaban</td>
                      <td>Balaban Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Kemal Sunal</td>
                      <td>Yeşilçam Emlak</td>
                    </tr>
                  </tbody>
                </table>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->



          <div class="portlet">

            <div class="portlet-header">
              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Bu Ay En Çok Satış Yapan Emlak Çalışanları
              </h3>
            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <td>Adı Soyadı</td>
                      <td>Ofis</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Asil Balaban</td>
                      <td>Balaban Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Duygu Özman</td>
                      <td>Vacide Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Emre Balaban</td>
                      <td>Balaban Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Kemal Sunal</td>
                      <td>Yeşilçam Emlak</td>
                    </tr>
                  </tbody>
                </table>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->




          <div class="portlet">

            <div class="portlet-header">
              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Geçen Ay En Çok Satış Yapan Ofisler
              </h3>
            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <td>Ofis</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Balaban Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Vacide Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Balaban Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Yeşilçam Emlak</td>
                    </tr>
                  </tbody>
                </table>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->



          <div class="portlet">

            <div class="portlet-header">
              <h3>
                <i class="fa fa-bar-chart-o"></i>
                Haftanın En Çok Satış Yapan Ofisleri
              </h3>
            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

                <table class="table table-condensed">
                  <thead>
                    <tr>
                      <td>Ofis</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Vacide Gayrimenkul</td>
                    </tr>

                    <tr>
                      <td>Balaban Gayrimenkul</td>
                    </tr>

                    <tr>
                      <td>Balaban Gayrimenkul</td>
                    </tr>
                    <tr>
                      <td>Yeşilçam Emlak</td>
                    </tr>
                  </tbody>
                </table>


            </div> <!-- /.portlet-content -->

          </div> <!-- /.portlet -->






        </div> <!-- /.col -->

      </div> <!-- /.row -->










@endsection


@section('scripts')

  <!--[if lt IE 9]>
  <script src="/public/backend/js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  
  <!-- Plugin JS -->
  <script src="/public/backend/js/plugins/icheck/jquery.icheck.js"></script>
  <script src="/public/backend/js/plugins/select2/select2.js"></script>
  <script src="/public/backend/js/libs/raphael-2.1.2.min.js"></script>
  <script src="/public/backend/js/plugins/morris/morris.min.js"></script>
  <script src="/public/backend/js/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="/public/backend/js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="/public/backend/js/plugins/fullcalendar/fullcalendar.min.js"></script>
  
  <!-- Plugin JS -->
  <script src="/public/backend/js/demos/dashboard.js"></script>
  <script src="/public/backend/js/demos/calendar.js"></script>
  <script src="/public/backend/js/demos/charts/morris/area.js"></script>
  <script src="/public/backend/js/demos/charts/morris/donut.js"></script>


@endsection