@layout('core/admin_master')

@section('title')
Genel Bakış | Emlak Ofisi Yönetimi | YönetimPaneli
@endsection

@section('breadcrumb')
        <section class="content-header">
          <h1>
            Emlak Yönetimi
            <small>v1.0</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{base_url('management')}}"><strong>Yönetim</strong>Paneli</a></li>
            <li><a href="{{base_url('emlak/ofis')}}">Emlak Yönetimi</a></li>
            <li class="active">Genel Bakış</li>
          </ol>
        </section>
@endsection


@section('content')




          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-building"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Toplam İlan</span>
                  <span class="info-box-number">{{$totalAd}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-star"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Toplam Favori</span>
                  <span class="info-box-number">{{$totalFavorites}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Toplam Satış</span>
                  <span class="info-box-number">{{$totalSale}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Toplam Üye</span>
                  <span class="info-box-number">{{$totalMember}}</span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Aylık Hedefler Raporu</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <div class="btn-group">
                      <button class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench"></i></button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </div>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <p class="text-center">
                        <strong>Satışlar: 1 Ocak, 2015 - 30 Mart, 2015</strong>
                      </p>
                      <div class="chart-responsive">
                        <!-- Sales Chart Canvas -->
                        <canvas id="salesChart" height="180"></canvas>
                      </div><!-- /.chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <p class="text-center">
                        <strong>Hedeflere Bakış</strong>
                      </p>
                      <div class="progress-group">
                        <span class="progress-text">Yeni müşteriler</span>
                        <span class="progress-number"><b>160</b>/200</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Tamamlanan Satışlar</span>
                        <span class="progress-number"><b>310</b>/400</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-red" style="width: 78%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Yeni Portföy</span>
                        <span class="progress-number"><b>480</b>/800</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-green" style="width: 55%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                      <div class="progress-group">
                        <span class="progress-text">Toplam Ciro</span>
                        <span class="progress-number"><b>2500TL</b>/5000TL</span>
                        <div class="progress sm">
                          <div class="progress-bar progress-bar-yellow" style="width: 50%"></div>
                        </div>
                      </div><!-- /.progress-group -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- ./box-body -->
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                        <h5 class="description-header">$35,210.43</h5>
                        <span class="description-text">PORTFÖY DEĞERİ</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                        <h5 class="description-header">$10,390.90</h5>
                        <span class="description-text">FAVORİ DEĞERİ</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block border-right">
                        <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                        <h5 class="description-header">$24,813.53</h5>
                        <span class="description-text">TOPLAM SATIŞ</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3 col-xs-6">
                      <div class="description-block">
                        <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                        <h5 class="description-header">$10,390.90</h5>
                        <span class="description-text">TOPLAM KAR</span>
                      </div><!-- /.description-block -->
                    </div>
                  </div><!-- /.row -->
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- MAP & BOX PANE -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">ZİYARETÇİ RAPORU</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <div class="row">
                    <div class="col-md-9 col-sm-8">
                      <div class="pad">
                        <!-- Map will be created here -->
                        <div id="world-map-markers" style="height: 325px;"></div>
                      </div>
                    </div><!-- /.col -->
                    <div class="col-md-3 col-sm-4">
                      <div class="pad box-pane-right bg-green" style="min-height: 280px">
                        <div class="description-block margin-bottom">
                          <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                          <h5 class="description-header">8390</h5>
                          <span class="description-text">TOPLAM ZİYARET</span>
                        </div><!-- /.description-block -->
                        <div class="description-block margin-bottom">
                          <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                          <h5 class="description-header">30%</h5>
                          <span class="description-text">ÜYE</span>
                        </div><!-- /.description-block -->
                        <div class="description-block">
                          <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                          <h5 class="description-header">70%</h5>
                          <span class="description-text">ZİYARETÇİ</span>
                        </div><!-- /.description-block -->
                      </div>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->


            <div class='col-md-4'>
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title">En Çok Satış Yapan İller</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="chart-responsive">
                        <canvas id="pieChart" height="150"></canvas>
                      </div><!-- ./chart-responsive -->
                    </div><!-- /.col -->
                    <div class="col-md-4">
                      <ul class="chart-legend clearfix">
                        <li><i class="fa fa-circle-o text-red"></i> İstanbul</li>
                        <li><i class="fa fa-circle-o text-green"></i> Ankara</li>
                        <li><i class="fa fa-circle-o text-yellow"></i> İzmir</li>
                        <li><i class="fa fa-circle-o text-aqua"></i> Antalya</li>
                        <li><i class="fa fa-circle-o text-light-blue"></i> Bursa</li>
                        <li><i class="fa fa-circle-o text-gray"></i> Trabzon</li>
                      </ul>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#">İntanbul <span class="pull-right text-red"><i class="fa fa-angle-down"></i> 12%</span></a></li>
                    <li><a href="#">Ankara <span class="pull-right text-green"><i class="fa fa-angle-up"></i> 4%</span></a></li>
                    <li><a href="#">İzmir <span class="pull-right text-yellow"><i class="fa fa-angle-left"></i> 0%</span></a></li>
                  </ul>
                </div><!-- /.footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->


          </div><!-- /.row -->

          <div class='row'>




          </div><!-- /.row -->

          <div class="row">
            <div class="col-md-8">
              <!-- TABLE: LATEST ORDERS -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">En Son Ziyaret Edilen İlanlar</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                        <tr>
                          <th>İlan No</th>
                          <th>İlan</th>
                          <th>Popülerlik</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR9842</a></td>
                          <td>Yeşilbahçe Mah. 8+2 Dubleks</td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR1848</a></td>
                          <td>Işıklar Caddesi Yatırımlık İşyeri</td>
                          <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR7429</a></td>
                          <td>Kozyatağı Loft</td>
                          <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR7429</a></td>
                          <td>100. Yıl Kiralık Depo</td>
                          <td><div class="sparkbar" data-color="#00c0ef" data-height="20">90,80,-90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR1848</a></td>
                          <td>Satılık 30mt Yat</td>
                          <td><div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR7429</a></td>
                          <td>Terracity civarı kelepir daire</td>
                          <td><div class="sparkbar" data-color="#f56954" data-height="20">90,-80,90,70,-61,83,63</div></td>
                        </tr>
                        <tr>
                          <td><a href="pages/examples/invoice.html">OR9842</a></td>
                          <td>Konyaaltı 1+1 Ofis</td>
                          <td><div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <a href="javascript::;" class="btn btn-sm btn-info btn-flat pull-left">Yeni İlan Ekle</a>
                  <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">Tüm İlanları Görüntüle</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class="col-md-4">
              <!-- PRODUCT LIST -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">En Son Eklenen İlanlarınız</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <ul class="products-list product-list-in-box">
                    <li class="item">
                      <div class="product-img">
                        <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Yeşilbahçe Mah. 8+2 Dubleks <span class="label label-warning pull-right">$180000</span></a>
                        <span class="product-description">
                          Satılık | Daire
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">100. Yıl Kiralık Depo <span class="label label-info pull-right">1200TL</span></a>
                        <span class="product-description">
                          Kiralık | İşyeri
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Satılık 30mt Yat <span class="label label-danger pull-right">$35000</span></a>
                        <span class="product-description">
                          Satılık | Taşınır
                        </span>
                      </div>
                    </li><!-- /.item -->
                    <li class="item">
                      <div class="product-img">
                        <img src="http://placehold.it/50x50/d2d6de/ffffff" alt="Product Image"/>
                      </div>
                      <div class="product-info">
                        <a href="javascript::;" class="product-title">Konyaaltı 1+1 Ofis <span class="label label-success pull-right">800TL</span></a>
                        <span class="product-description">
                          Kiralık | İşyeri
                        </span>
                      </div>
                    </li><!-- /.item -->
                  </ul>
                </div><!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript::;" class="uppercase">Tüm İlanları Görüntüle</a>
                </div><!-- /.box-footer -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->









@endsection


@section('scripts')

    <!-- Sparkline -->
    <script src="/public/backend/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="/public/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="/public/backend/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="/public/backend/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="/public/backend/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="/public/backend/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="/public/backend/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="/public/backend/plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/public/backend/dist/js/pages/dashboard2.js" type="text/javascript"></script>


@endsection