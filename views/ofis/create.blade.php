@layout('core/admin_master')

@section('title')
Yeni Emlak Ofisi Oluştur | Emlak Ofisi Yönetimi | YönetimPaneli
@endsection

@section('head')
  <link rel="stylesheet" href="/public/backend/plugins/select2/select2.css">
  <link rel="stylesheet" href="/public/backend/plugins/select2/select2-bootstrap.css">
@endsection


@section('breadcrumb')
      <div class="content-header">
        <h1>
            Emlak Ofisi Yönetimi
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{base_url('management')}}"><strong>Yönetim</strong>Paneli</a></li>
          <li><a href="{{base_url('emlak/ofis')}}">Emlak Ofisi Yonetimi</a></li>
          <li class="active">Yeni Emlak Ofisi Oluştur</li>
        </ol>
      </div> <!-- /.content-header -->
@endsection


@section('content')


      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Yeni Emlak Ofisi Oluştur</h3>
        </div>
        <div class="box-body">

          <form id="validate-basic" action="{{base_url('emlak/ofis')}}" method="post" data-validate="parsley" class="form parsley-form">
            
            <h4>Ofis Bilgileri</h4>
            
            <div class="form-group">
              <label for="ofis_adi">Ofis Adi</label>
              <input type="ofis_adi" id="ofis_adi" name="ofis_adi" class="form-control" data-parsley-trigger="change" data-required="true" value="{{set_value('username')}}">
            </div>

            <hr>
            
            <h4>Ofis Yetkilileri</h4>
            <div class="form-group">
              <label for="kullanici">Ofis Sahibi</label>
              <input type="text" id="yetkili" class="form-control select2" />
            </div>

            <div class="form-group">
              <table class="table">
                <thead>
                  <tr>
                    <td>Kullanici Adi</td>
                    <td>E-Posta</td>
                    <td>Gorev</td>
                  </tr>
                </thead>
                <tbody id="gorev-yetkileri">
                
                </tbody>
              </table>
            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>

          </form>

        </div>
        <div class="box-footer">
          Değişikliklerin kaydolması için lütfen yukarıda bulunan kaydet düğmesine tıklayın.
        </div><!-- /.box-footer-->
      </div>


@endsection

@section('scripts')

  <!-- Plugin JS -->
  <script src="/public/backend/plugins/parsley/parsley.js"></script>
  <script src="/public/backend/plugins/select2/select2.min.js"></script>
  <script src="/public/backend/plugins/select2/select2_locale_tr.js"></script>

  
  <script>
    $('#validate-basic').on("keyup keypress", function(e) {
      var code = e.keyCode || e.which; 
      if (code  == 13) {               
        e.preventDefault();
        return false;
      }
    });


    // yetkili id'sine sahip inputa select2 uyguluyoruz
    $("#yetkili").select2({

        quietMillis:100, // Harf girildikten sonra ajax isteği gönderilmeden önce geçmesi gereken süre
        multiple: false,  // Birden fazla etiket seçmek için
        minimumInputLength: 2, // En az girilmesi gereken karakter sayısı

        // Ajax isteği başlatıyoruz
        ajax: {
            url: "{{base_url('auth/users/search')}}", // Sonuçların çekildiği php dosyası
            dataType: 'json',
            data: function (aranan) {
                return {
                    q: aranan // sonuc.php'ye kullanıcının inputundan aldığımız veriyi $_GET['q'] değişkeni olarak gönderiyoruz
                };
            },
            results: function (data) {
            // gelen sonucu alıyoruz
            return { results: data };
        }
    },

    // Kullanıcının dönen sonuçlar dışında bir etiket girmesini sağlayan kodlar, istenirse form gönderildikten sonra bu etiketler database'e eklenebilir
    createSearchChoice:function(term, data) {
        if ( $(data).filter( function() {
            return this.text.localeCompare(term)===0;
        }).length===0) {
            return {id:term, text:term};
        }
    }

    });



  </script>

  <script>
    $( "#yetkili" ).change(function(e) {
      e.preventDefault();

      $.ajax({
        url: '{{base_url("auth/users/get_user")}}',
        data: {userId:$(this).val()},
        dataType: 'json',
        success: function(msg){
          $('#gorev-yetkileri').append('<tr><td>'+msg.username+'</td><td>'+msg.email+'</td><td><select name="yetkili_level[]"><?php foreach($userGroups as $userGroup): echo "<option value=\"{$userGroup->id}\">{$userGroup->name}</option>"; endforeach; ?></select>&nbsp;&nbsp;<a class="kaldir btn btn-primary btn-xs" href="#">Kaldir</a><input type="hidden" name="yetkili_id[]" value="'+msg.id+'"></td></tr>');
        }
      });


    });

    $(document).on('click', '.kaldir', function(e){
      e.preventDefault();
      $(this).parents('tr').remove();
    });
  </script>
@endsection