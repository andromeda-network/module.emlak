@layout('core/admin_master')

@section('head')
    <link href="/public/backend/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('title')
Emlak Ofislerini Listele | Emlak Ofis Yönetimi | YönetimPaneli
@endsection

@section('breadcrumb')
      <div class="content-header">
        <h1>
            Emlak Ofisi Yonetimi
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{base_url('management')}}"><strong>Yönetim</strong>Paneli</a></li>
          <li><a href="{{base_url('emlak/ofis')}}">Emlak Ofisi Yonetimi</a></li>
          <li class="active">Emlak Ofislerini Listele</li>
        </ol>
      </div> <!-- /.content-header -->
@endsection

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="box">
              <div class="box-header with-border">
              <p class="pull-left"><a href="{{base_url('emlak/ofis/create')}}" class="btn btn-default btn-sm">Yeni Emlak Ofisi Olustur</a></p>
              <h3 class="box-title pull-right">Emlak Ofisleri Listeleniyor</h3>
            </div> <!-- /.box-header -->

            <div class="box-body">
              <div class="table-responsive">

                <table class="datatable table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th data-filterable="true" data-sortable="true" data-direction="desc">ID</th>
                        <th data-filterable="true" data-sortable="true" data-direction="desc">Emlak Ofisi</th>
                        <th data-filterable="false" class="hidden-xs hidden-sm">Olusturulma Tarihi</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($ofisler as $ofis)
                      <tr>
                        <td>{{$ofis->ofis_id}}</td>
                        <td>{{$ofis->ofis_adi}}</td>
                        <td class="hidden-xs hidden-sm">{{ date("d.m.Y - h:i",strtotime($ofis->created_at)) }}</td>
                        <td><a href="{{base_url('emlak/ofisim/'.slug($ofis->ofis_adi).'/'.$ofis->ofis_id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> Ofis Genel Bakış</a> <a href="#" class="btn btn-success btn-xs confirm"><i class="fa fa-pencil"></i> Ofisi Düzenle</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div> <!-- /.table-responsive -->

              </div> <!-- /.table-responsive -->
            </div> <!-- /.box-content -->
          </div> <!-- /.box -->
        </div> <!-- /.col -->
      </div> <!-- /.row -->
@endsection

@section('scripts')
    <!-- DATA TABES SCRIPT -->
    <script src="/public/backend/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/public/backend/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {

        $('.datatable').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false,
          "oLanguage": {
            "sUrl": "/public/backend/plugins/datatables/turkish.txt"
          }
        });
      });
    </script>
@endsection