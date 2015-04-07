@layout('core/admin_master')

@section('title')
Emlak Ofisi Genel Bakış | Emlak Ofisi Yönetimi | YönetimPaneli
@endsection

@section('breadcrumb')
        <section class="content-header">
          <h1>
            Emlak Ofisi Genel Bakış
            <small>{{$ofis->ofis_adi}}</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{base_url('management')}}"><strong>Yönetim</strong>Paneli</a></li>
            <li><a href="{{base_url('emlak/ofis')}}">Emlak Yönetimi</a></li>
            <li class="active">Emlak Ofisi Genel Bakış</li>
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
          <p class="pull-left"><a href="{{base_url('emlak/ilan/create')}}" class="btn btn-default btn-sm">Yeni İlan Oluştur</a></p>
          <h3 class="box-title pull-right">Emlak Ofis İlanları Listeleniyor</h3>
        </div> <!-- /.box-header -->

        <div class="box-body">
          <div class="table-responsive">

            <table class="datatable table table-bordered table-hover">
                <thead>
                  <tr>
                    <th data-filterable="true" data-sortable="true" data-direction="desc">ID</th>
                    <th data-filterable="true" data-sortable="true" data-direction="desc">İlanlar</th>
                    <th data-filterable="false" class="hidden-xs hidden-sm">İlan Sahibi</th>
                    <th data-filterable="false" class="hidden-xs hidden-sm">Oluşturulma Tarihi</th>
                    <th>Aksiyonlar</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($ilanlar as $ilan)
                  <tr>
                    <td>{{$ilan->id}}</td>
                    <td>{{$ilan->ofis_adi}}</td>
                    <td class="hidden-xs hidden-sm"></td>
                    <td class="hidden-xs hidden-sm">{{ date("d.m.Y - h:i",strtotime($ilan->created_at)) }}</td>
                    <td><a href="{{base_url('emlak/ofis/'.$ilan->id.'/edit')}}" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</a> <a href="{{base_url('emlak/ofis/'.$ilan->id.'/delete')}}" class="btn btn-danger btn-xs confirm"><i class="fa fa-trash-o"></i> Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div> <!-- /.table-responsive -->

          </div> <!-- /.table-responsive -->
        </div> <!-- /.box-content -->
    </div> <!-- /.box -->
  </div> <!-- /.row -->

@endsection
