@layout('core/admin_master')

@section('title')
Yeni Emlak İlanı Oluştur | Emlak İlan Yönetimi | YönetimPaneli
@endsection

@section('head')
  <link rel="stylesheet" href="/public/backend/plugins/select2/select2.css">
  <link rel="stylesheet" href="/public/backend/plugins/select2/select2-bootstrap.css">
  <style>
    .ozellik {
      width: 200px;
    }
  </style>
@endsection


@section('breadcrumb')
      <div class="content-header">
        <h1>
            Emlak İlanı Yönetimi
        </h1>
        <ol class="breadcrumb">
          <li><a href="{{base_url('management')}}"><strong>Yönetim</strong>Paneli</a></li>
          <li><a href="{{base_url('emlak/ilan')}}">Emlak İlanı Yonetimi</a></li>
          <li class="active">Yeni Emlak İlanı Oluştur</li>
        </ol>
      </div> <!-- /.content-header -->
@endsection


@section('content')
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Yeni Emlak İlanı Oluştur</h3>
        </div>
        <div class="box-body">

          <form id="validate-basic" action="{{base_url('emlak/ilan/'.$ilan->id)}}" method="post" data-validate="parsley" class="form parsley-form">

            <h4>Ofis Bilgileri</h4>
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <select id="kategori" name="kategori" class="form-control select2" data-parsley-trigger="change" data-required="true">
                <option>Kategori Seçin</option>
                <option <?php if($ilan->kategori == '1'): echo 'selected'; endif; ?> value="1">Konut (Kiralık)</option>
                <option <?php if($ilan->kategori == '2'): echo 'selected'; endif; ?> value="2">Konut (Satılık)</option>
                <option <?php if($ilan->kategori == '3'): echo 'selected'; endif; ?> value="3">İşyeri (Kiralık)</option>
                <option <?php if($ilan->kategori == '4'): echo 'selected'; endif; ?> value="4">İşyeri (Satılık)</option>
                <option <?php if($ilan->kategori == '5'): echo 'selected'; endif; ?> value="5">İşyeri (Devren)</option>
                <option <?php if($ilan->kategori == '6'): echo 'selected'; endif; ?> value="6">Arsa (Kiralık)</option>
                <option <?php if($ilan->kategori == '7'): echo 'selected'; endif; ?> value="7">Arsa (Satılık)</option>
                <option <?php if($ilan->kategori == '8'): echo 'selected'; endif; ?> value="8">Bina (Kiralık)</option>
                <option <?php if($ilan->kategori == '9'): echo 'selected'; endif; ?> value="9">Bina (Satılık)</option>
                <option <?php if($ilan->kategori == '10'): echo 'selected'; endif; ?> value="10">Devremülk (Akdeniz Bölgesi)</option>
                <option <?php if($ilan->kategori == '11'): echo 'selected'; endif; ?> value="11">Devremülk (Doğu Anadolu Bölgesi)</option>
                <option <?php if($ilan->kategori == '12'): echo 'selected'; endif; ?> value="12">Devremülk (Ege Bölgesi)</option>
                <option <?php if($ilan->kategori == '13'): echo 'selected'; endif; ?> value="13">Devremülk (İç Anadolu Bölgesi)</option>
                <option <?php if($ilan->kategori == '14'): echo 'selected'; endif; ?> value="14">Devremülk (Karadeniz Bölgesi)</option>
                <option <?php if($ilan->kategori == '15'): echo 'selected'; endif; ?> value="15">Devremülk (Kıbrıs)</option>
                <option <?php if($ilan->kategori == '16'): echo 'selected'; endif; ?> value="16">Devremülk (Marmara Bölgesi)</option>
                <option <?php if($ilan->kategori == '17'): echo 'selected'; endif; ?> value="17">Devremülk (Yurtdışı)</option>
                <option <?php if($ilan->kategori == '18'): echo 'selected'; endif; ?> value="18">Turistlik Tesis (Kiralık)</option>
                <option <?php if($ilan->kategori == '19'): echo 'selected'; endif; ?> value="19">Turistlik Tesis (Satılık)</option>
              </select>
            </div>

            <div class="form-group">
              <label for="alt_kategori">Alt Kategori</label>
              <select id="alt_kategori" name="alt_kategori" class="form-control select2">
                <option value="">Lütfen Üst Kategori Seçin</option>
              </select>
            </div>


            <div class="row">
              <!--<div class="col-md-3 col-xs-12">
                <div class="form-group">
                  <label for="konum_ulke">Ülke</label>
                  <select name="konum_ulke" id="konum_ulke" class="form-control">
                    <option value="Türkiye">Türkiye</option>
                  </select>
                </div>
              </div>-->
              <div class="col-md-3 col-xs-12">
                <div class="form-group">
                  <label for="konum_sehir">Şehir</label>
                  <select name="konum_sehir" id="konum_sehir" class="form-control">
                    <option>Lütfen Şehir Seçin</option>
                    @foreach($sehirler as $sehir)
                    <option value="{{$sehir->sehir_id}}">{{$sehir->ad}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-3 col-xs-12">
                <div class="form-group">
                  <label for="konum_ilce">İlçe</label>
                  <select name="konum_ilce" id="konum_ilce" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option>Lütfen Şehir Seçin</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 col-xs-12">
                <div class="form-group">
                  <label for="konum_semt">Semt</label>
                  <select name="konum_semt" id="konum_semt" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option>Lütfen İlçe Seçin</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3 col-xs-12">
                <div class="form-group">
                  <label for="konum_mahalle">Mahalle</label>
                  <select name="konum_mahalle" id="konum_mahalle" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option>Lütfen Semt Seçin</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="ilan_baslik">İlan Başlık</label>
              <input type="text" id="ilan_baslik" name="ilan_baslik"  value="{{$ilan->ilan_baslik}}" class="form-control" data-parsley-trigger="change" data-required="true">
            </div>

            <div class="form-group">
              <label for="emlak_aciklama">Açıklama</label>
              <textarea id="emlak_aciklama" name="emlak_aciklama" class="form-control">{{$ilan->emlak_aciklama}}</textarea>
            </div>

            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label for="emlak_fiyat">Fiyat</label>
                  <input type="text" id="emlak_fiyat" name="emlak_fiyat"  value="{{$ilan->emlak_fiyat}}" class="form-control" data-parsley-trigger="change" data-required="true">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="emlak_fiyat_birimi">Fiyat Birimi</label>
                  <select id="emlak_fiyat_birimi" name="emlak_fiyat_birimi"  class="form-control" data-parsley-trigger="change" data-required="true">
                    <option <?php if($ilan->emlak_fiyat_birimi == 'tl'): echo 'selected'; endif; ?> value="tl">Türk Lirası</option>
                    <option <?php if($ilan->emlak_fiyat_birimi == 'dolar'): echo 'selected'; endif; ?> value="dolar">Dolar</option>
                    <option <?php if($ilan->emlak_fiyat_birimi == 'euro'): echo 'selected'; endif; ?> value="euro">Euro</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-9">
                <div class="form-group">
                  <label for="emlak_aidat">Aidat Ücreti</label>
                  <input type="text" id="emlak_aidat" name="emlak_aidat"  value="{{$ilan->emlak_aidat}}" class="form-control" data-parsley-trigger="change" data-required="true">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="emlak_aidat_fiyat_birimi">Fiyat Birimi</label>
                  <select id="emlak_aidat_fiyat_birimi" name="emlak_aidat_fiyat_birimi"  class="form-control" data-parsley-trigger="change" data-required="true">
                    <option <?php if($ilan->emlak_aidat_fiyat_birimi == 'tl'): echo 'selected'; endif; ?> value="tl">Türk Lirası</option>
                    <option <?php if($ilan->emlak_aidat_fiyat_birimi == 'dolar'): echo 'selected'; endif; ?> value="dolar">Dolar</option>
                    <option <?php if($ilan->emlak_aidat_fiyat_birimi == 'euro'): echo 'selected'; endif; ?> value="euro">Euro</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="emlak_krediye_uygun">Krediye Uygun</label>
              <select id="emlak_krediye_uygun" name="emlak_krediye_uygun" class="form-control" data-parsley-trigger="change" data-required="true">
                <option value="0">Hayır</option>
                <option value="1" <?php if($ilan->emlak_krediye_uygun == 1): echo 'selected'; endif; ?>>Evet</option>
              </select>
            </div>

            <div class="form-group">
              <label for="emlak_takas">Takasa Uygun</label>
              <select id="emlak_takas" name="emlak_takas" class="form-control" data-parsley-trigger="change" data-required="true">
                <option value="0">Hayır</option>
                <option value="1" <?php if($ilan->emlak_takas == 1): echo 'selected'; endif; ?>>Evet</option>
              </select>
            </div>

            <div class="form-group">
              <label for="emlak_metrekare">Metrekare</label>
              <input type="text" id="emlak_metrekare" name="emlak_metrekare"  value="{{$ilan->emlak_metrekare}}" class="form-control" data-parsley-trigger="change" data-required="true">
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="emlak_oda_sayisi">Oda Sayısı</label>
                  <select id="emlak_oda_sayisi" name="emlak_oda_sayisi" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option value="" class="">Seçiniz</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '0'): echo 'selected'; endif; ?> value="0">Stüdyo (1+0)</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '1'): echo 'selected'; endif; ?> value="1">1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '2'): echo 'selected'; endif; ?> value="2">1+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '3'): echo 'selected'; endif; ?> value="3">2+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '4'): echo 'selected'; endif; ?> value="4">2+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '5'): echo 'selected'; endif; ?> value="5">3+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '6'): echo 'selected'; endif; ?> value="6">3+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '7'): echo 'selected'; endif; ?> value="7">4+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '8'): echo 'selected'; endif; ?> value="8">4+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '9'): echo 'selected'; endif; ?> value="9">4+3</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '10'): echo 'selected'; endif; ?> value="10">4+4</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '11'): echo 'selected'; endif; ?> value="11">5</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '12'): echo 'selected'; endif; ?> value="12">5+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '13'): echo 'selected'; endif; ?> value="13">5+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '14'): echo 'selected'; endif; ?> value="14">5+3</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '15'): echo 'selected'; endif; ?> value="15">5+4</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '16'): echo 'selected'; endif; ?> value="16">6+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '17'): echo 'selected'; endif; ?> value="17">6+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '18'): echo 'selected'; endif; ?> value="18">6+3</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '19'): echo 'selected'; endif; ?> value="19">7+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '20'): echo 'selected'; endif; ?> value="20">7+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '21'): echo 'selected'; endif; ?> value="21">7+3</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '22'): echo 'selected'; endif; ?> value="22">8+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '23'): echo 'selected'; endif; ?> value="23">8+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '24'): echo 'selected'; endif; ?> value="24">8+3</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '25'): echo 'selected'; endif; ?> value="25">8+4</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '26'): echo 'selected'; endif; ?> value="26">9+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '27'): echo 'selected'; endif; ?> value="27">9+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '28'): echo 'selected'; endif; ?> value="28">9+3</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '29'): echo 'selected'; endif; ?> value="29">9+4</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '30'): echo 'selected'; endif; ?> value="30">9+5</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '31'): echo 'selected'; endif; ?> value="31">9+6</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '32'): echo 'selected'; endif; ?> value="32">10+1</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '33'): echo 'selected'; endif; ?> value="33">10+2</option>
                    <option <?php if($ilan->emlak_oda_sayisi == '34'): echo 'selected'; endif; ?> value="34">10 Üzeri</option>
                  </select>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label for="emlak_banyo_sayisi">Banyo Sayısı</label>
                  <select id="emlak_banyo_sayisi" name="emlak_banyo_sayisi" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option <?php if($ilan->emlak_banyo_sayisi == 'Yok'): echo 'selected'; endif; ?> value="0">Yok</option>
                    <option <?php if($ilan->emlak_banyo_sayisi == '1'): echo 'selected'; endif; ?> value="1">1</option>
                    <option <?php if($ilan->emlak_banyo_sayisi == '2'): echo 'selected'; endif; ?> value="2">2</option>
                    <option <?php if($ilan->emlak_banyo_sayisi == '3'): echo 'selected'; endif; ?> value="3">3</option>
                    <option <?php if($ilan->emlak_banyo_sayisi == '4'): echo 'selected'; endif; ?> value="4">4</option>
                    <option <?php if($ilan->emlak_banyo_sayisi == '5'): echo 'selected'; endif; ?> value="5">5</option>
                    <option <?php if($ilan->emlak_banyo_sayisi == '6'): echo 'selected'; endif; ?> value="6">6</option>
                    <option <?php if($ilan->emlak_banyo_sayisi == '6 Üzeri'): echo 'selected'; endif; ?> value="7">6 Üzeri</option>
                  </select>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label for="emlak_bina_yasi">Bina Yaşı</label>
                  <select id="emlak_bina_yasi" name="emlak_bina_yasi"  class="form-control" data-parsley-trigger="change" data-required="true">
                    <option <?php if($ilan->emlak_bina_yasi == '0'): echo 'selected'; endif; ?> value="0">0</option>
                    <option <?php if($ilan->emlak_bina_yasi == '1'): echo 'selected'; endif; ?> value="1">1</option>
                    <option <?php if($ilan->emlak_bina_yasi == '2'): echo 'selected'; endif; ?> value="2">2</option>
                    <option <?php if($ilan->emlak_bina_yasi == '3'): echo 'selected'; endif; ?> value="3">3</option>
                    <option <?php if($ilan->emlak_bina_yasi == '4'): echo 'selected'; endif; ?> value="4">4</option>
                    <option <?php if($ilan->emlak_bina_yasi == '5-10 arası'): echo 'selected'; endif; ?> value="5-10 arası">5-10 arası</option>
                    <option <?php if($ilan->emlak_bina_yasi == '11-15 arası'): echo 'selected'; endif; ?> value="11-15 arası">11-15 arası</option>
                    <option <?php if($ilan->emlak_bina_yasi == '16-20 arası'): echo 'selected'; endif; ?> value="16-20 arası">16-20 arası</option>
                    <option <?php if($ilan->emlak_bina_yasi == '21-25 arası'): echo 'selected'; endif; ?> value="21-25 arası">21-25 arası</option>
                    <option <?php if($ilan->emlak_bina_yasi == '26-30 arası'): echo 'selected'; endif; ?> value="26-30 arası">26-30 arası</option>
                    <option <?php if($ilan->emlak_bina_yasi == '31 ve üzeri'): echo 'selected'; endif; ?> value="31 ve üzeri">31 ve üzeri</option>
                  </select>
                </div>
              </div>

              <div class="col-md-2">
                <div class="form-group">
                  <label for="emlak_kat_sayisi">Binadaki Kat Sayısı</label>
                  <select name="emlak_kat_sayisi" id="emlak_kat_sayisi" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option <?php if($ilan->emlak_kat_sayisi == '1'): echo 'selected'; endif; ?> value="1">1</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '2'): echo 'selected'; endif; ?> value="2">2</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '3'): echo 'selected'; endif; ?> value="3">3</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '4'): echo 'selected'; endif; ?> value="4">4</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '5'): echo 'selected'; endif; ?> value="5">5</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '6'): echo 'selected'; endif; ?> value="6">6</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '7'): echo 'selected'; endif; ?> value="7">7</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '8'): echo 'selected'; endif; ?> value="8">8</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '9'): echo 'selected'; endif; ?> value="9">9</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '10'): echo 'selected'; endif; ?> value="10">10</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '11'): echo 'selected'; endif; ?> value="11">11</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '12'): echo 'selected'; endif; ?> value="12">12</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '13'): echo 'selected'; endif; ?> value="13">13</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '14'): echo 'selected'; endif; ?> value="14">14</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '15'): echo 'selected'; endif; ?> value="15">15</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '16'): echo 'selected'; endif; ?> value="16">16</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '17'): echo 'selected'; endif; ?> value="17">17</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '18'): echo 'selected'; endif; ?> value="18">18</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '19'): echo 'selected'; endif; ?> value="19">19</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '20'): echo 'selected'; endif; ?> value="20">20</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '21'): echo 'selected'; endif; ?> value="21">21</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '22'): echo 'selected'; endif; ?> value="22">22</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '23'): echo 'selected'; endif; ?> value="23">23</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '24'): echo 'selected'; endif; ?> value="24">24</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '25'): echo 'selected'; endif; ?> value="25">25</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '26'): echo 'selected'; endif; ?> value="26">26</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '27'): echo 'selected'; endif; ?> value="27">27</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '28'): echo 'selected'; endif; ?> value="28">28</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '29'): echo 'selected'; endif; ?> value="29">29</option>
                    <option <?php if($ilan->emlak_kat_sayisi == '30'): echo 'selected'; endif; ?> value="30">30 ve üzeri</option>
                  </select>
                </div>
              </div>

              <div class="col-md-3">
                <div class="form-group">
                  <label for="emlak_bulundugu_kat">Bulunduğu Kat</label>
                  <select name="emlak_bulundugu_kat" id="emlak_bulundugu_kat" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Bahçe Katı'): echo 'selected'; endif; ?> value="Bahçe Katı">Bahçe Katı</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Kot 1'): echo 'selected'; endif; ?> value="Kot 1">Kot 1</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Kot 2'): echo 'selected'; endif; ?> value="Kot 2">Kot 2</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Kot 3'): echo 'selected'; endif; ?> value="Kot 3">Kot 3</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Kot 4'): echo 'selected'; endif; ?> value="Kot 4">Kot 4</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Müstakil'): echo 'selected'; endif; ?> value="Müstakil">Müstakil</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Villa Tipi'): echo 'selected'; endif; ?> value="Villa Tipi">Villa Tipi</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Bodrum Kat'): echo 'selected'; endif; ?> value="Bodrum Kat">Bodrum Kat</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Zemin Kat'): echo 'selected'; endif; ?> value="Zemin Kat">Zemin Kat</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Giriş Katı'): echo 'selected'; endif; ?> value="Giriş Katı">Giriş Katı</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Yüksek Giriş'): echo 'selected'; endif; ?> value="Yüksek Giriş">Yüksek Giriş</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == 'Çatı Katı'): echo 'selected'; endif; ?> value="Çatı Katı">Çatı Katı</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '1'): echo 'selected'; endif; ?> value="1">1</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '2'): echo 'selected'; endif; ?> value="2">2</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '3'): echo 'selected'; endif; ?> value="3">3</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '4'): echo 'selected'; endif; ?> value="4">4</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '5'): echo 'selected'; endif; ?> value="5">5</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '6'): echo 'selected'; endif; ?> value="6">6</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '7'): echo 'selected'; endif; ?> value="7">7</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '8'): echo 'selected'; endif; ?> value="8">8</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '9'): echo 'selected'; endif; ?> value="9">9</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '10'): echo 'selected'; endif; ?> value="10">10</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '11'): echo 'selected'; endif; ?> value="11">11</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '12'): echo 'selected'; endif; ?> value="12">12</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '13'): echo 'selected'; endif; ?> value="13">13</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '14'): echo 'selected'; endif; ?> value="14">14</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '15'): echo 'selected'; endif; ?> value="15">15</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '16'): echo 'selected'; endif; ?> value="16">16</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '17'): echo 'selected'; endif; ?> value="17">17</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '18'): echo 'selected'; endif; ?> value="18">18</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '19'): echo 'selected'; endif; ?> value="19">19</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '20'): echo 'selected'; endif; ?> value="20">20</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '21'): echo 'selected'; endif; ?> value="21">21</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '22'): echo 'selected'; endif; ?> value="22">22</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '23'): echo 'selected'; endif; ?> value="23">23</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '24'): echo 'selected'; endif; ?> value="24">24</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '25'): echo 'selected'; endif; ?> value="25">25</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '26'): echo 'selected'; endif; ?> value="26">26</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '27'): echo 'selected'; endif; ?> value="27">27</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '28'): echo 'selected'; endif; ?> value="28">28</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '29'): echo 'selected'; endif; ?> value="29">29</option>
                    <option <?php if($ilan->emlak_bulundugu_kat == '30 ve üzeri'): echo 'selected'; endif; ?> value="30 ve üzeri">30 ve üzeri</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="emlak_isitma">Isıtma Tipi</label>
                  <select id="emlak_isitma" name="emlak_isitma"  value="{{$ilan->emlak_isitma}}" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option <?php if($ilan->emlak_isitma == 'Yok'): echo 'selected'; endif; ?> value="Yok">Yok</option>
                    <option <?php if($ilan->emlak_isitma == 'Soba'): echo 'selected'; endif; ?> value="Soba">Soba</option>
                    <option <?php if($ilan->emlak_isitma == 'Doğalgaz Sobası'): echo 'selected'; endif; ?> value="Doğalgaz Sobası">Doğalgaz Sobası</option>
                    <option <?php if($ilan->emlak_isitma == 'Kat Kaloriferi'): echo 'selected'; endif; ?> value="Kat Kaloriferi">Kat Kaloriferi</option>
                    <option <?php if($ilan->emlak_isitma == 'Merkezi Sistem'): echo 'selected'; endif; ?> value="Merkezi Sistem">Merkezi Sistem</option>
                    <option <?php if($ilan->emlak_isitma == 'Merkezi Sistem (Isı Pay Ölçer)'): echo 'selected'; endif; ?> value="Merkezi Sistem (Isı Pay Ölçer)">Merkezi Sistem (Isı Pay Ölçer)</option>
                    <option <?php if($ilan->emlak_isitma == 'Doğalgaz (Kombi)'): echo 'selected'; endif; ?> value="Doğalgaz (Kombi)">Doğalgaz (Kombi)</option>
                    <option <?php if($ilan->emlak_isitma == 'Yerden Isıtma'): echo 'selected'; endif; ?> value="Yerden Isıtma">Yerden Isıtma</option>
                    <option <?php if($ilan->emlak_isitma == 'Klima'): echo 'selected'; endif; ?> value="Klima">Klima</option>
                    <option <?php if($ilan->emlak_isitma == 'Güneş Enerjisi'): echo 'selected'; endif; ?> value="Güneş Enerjisi">Güneş Enerjisi</option>
                    <option <?php if($ilan->emlak_isitma == 'Jeotermal'): echo 'selected'; endif; ?> value="Jeotermal">Jeotermal</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="emlak_esyali">Eşyalı</label>
                  <select id="emlak_esyali" name="emlak_esyali" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option value="0">Hayır</option>
                    <option value="1" <?php if($ilan->emlak_esyali == 1): echo 'selected'; endif; ?>>Evet</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="emlak_kullanim_durumu">Kullanım Durumu</label>
                  <select id="emlak_kullanim_durumu" name="emlak_kullanim_durumu" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option value="0" <?php if($ilan->emlak_kullanim_durumu == 0): echo 'selected'; endif; ?>>Boş</option>
                    <option value="1" <?php if($ilan->emlak_kullanim_durumu == 1): echo 'selected'; endif; ?>>Kiracılı</option>
                    <option value="2" <?php if($ilan->emlak_kullanim_durumu == 2): echo 'selected'; endif; ?>>Mülk Sahibi</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="emlak_site_icersinde">Site İçersinde</label>
                  <select id="emlak_site_icersinde" name="emlak_site_icersinde" class="form-control" data-parsley-trigger="change" data-required="true">
                    <option value="0">Hayır</option>
                    <option value="1" <?php if($ilan->emlak_site_icersinde == 1): echo 'selected'; endif; ?>>Evet</option>
                  </select>
                </div>
              </div>
            </div>

            <div id="map" style="min-height: 250px; width: 100%;"></div>

            <input type="hidden" id="emlak_harita_enlem" name="emlak_harita_enlem"  value="{{$ilan->emlak_harita_enlem}}" class="form-control">
            <input type="hidden" id="emlak_harita_boylam" name="emlak_harita_boylam"  value="{{$ilan->emlak_harita_boylam}}" class="form-control">

            <hr>
            <h3>Cephe Özellikleri</h3>
            <div class="form-group">
              <label class="ozellik" for="ozellikler_cephe_bati"><input type="checkbox" id="ozellikler_cephe_bati" name="ozellikler_cephe_bati" value="1" <?php if($ilan->ozellikler_cephe_bati == 1): echo 'checked'; endif; ?>> Batı</label>
              <label class="ozellik" for="ozellikler_cephe_dogu"><input type="checkbox" id="ozellikler_cephe_dogu" name="ozellikler_cephe_dogu" value="1" <?php if($ilan->ozellikler_cephe_dogu == 1): echo 'checked'; endif; ?>> Doğu</label>
              <label class="ozellik" for="ozellikler_cephe_guney"><input type="checkbox" id="ozellikler_cephe_guney" name="ozellikler_cephe_guney" value="1" <?php if($ilan->ozellikler_cephe_guney == 1): echo 'checked'; endif; ?>> Güney</label>
              <label class="ozellik" for="ozellikler_cephe_kuzey"><input type="checkbox" id="ozellikler_cephe_kuzey" name="ozellikler_cephe_kuzey" value="1" <?php if($ilan->ozellikler_cephe_kuzey == 1): echo 'checked'; endif; ?>> Kuzey</label>
            </div>

            <hr>
            <h3>İç Özellikler</h3>
            <div class="form-group">
              <label class="ozellik" for="ozellikler_ic_adsl"><input type="checkbox" id="ozellikler_ic_adsl" name="ozellikler_ic_adsl" value="1" <?php if($ilan->ozellikler_ic_adsl == 1): echo 'checked'; endif; ?>> ADSL</label>
              <label class="ozellik" for="ozellikler_ic_ahsap_dograma"><input type="checkbox" id="ozellikler_ic_ahsap_dograma" name="ozellikler_ic_ahsap_dograma" value="1" <?php if($ilan->ozellikler_ic_ahsap_dograma == 1): echo 'checked'; endif; ?>> Ahşap Doğrama</label>
              <label class="ozellik" for="ozellikler_ic_alarm_hirsiz"><input type="checkbox" id="ozellikler_ic_alarm_hirsiz" name="ozellikler_ic_alarm_hirsiz" value="1" <?php if($ilan->ozellikler_ic_alarm_hirsiz == 1): echo 'checked'; endif; ?>> Alarm (Hırsız)</label>
              <label class="ozellik" for="ozellikler_ic_alarm_yangin"><input type="checkbox" id="ozellikler_ic_alarm_yangin" name="ozellikler_ic_alarm_yangin" value="1" <?php if($ilan->ozellikler_ic_alarm_yangin == 1): echo 'checked'; endif; ?>> Alarm (Yangın)</label>
              <label class="ozellik" for="ozellikler_ic_amerikan_mutfak"><input type="checkbox" id="ozellikler_ic_amerikan_mutfak" name="ozellikler_ic_amerikan_mutfak" value="1" <?php if($ilan->ozellikler_ic_amerikan_mutfak == 1): echo 'checked'; endif; ?>> Amerikan Mutfak</label>
              <label class="ozellik" for="ozellikler_ic_ankastre_firin"><input type="checkbox" id="ozellikler_ic_ankastre_firin" name="ozellikler_ic_ankastre_firin" value="1" <?php if($ilan->ozellikler_ic_ankastre_firin == 1): echo 'checked'; endif; ?>> Ankastre Fırın</label>
              <label class="ozellik" for="ozellikler_ic_balkon"><input type="checkbox" id="ozellikler_ic_balkon" name="ozellikler_ic_balkon" value="1" <?php if($ilan->ozellikler_ic_balkon == 1): echo 'checked'; endif; ?>> Balkon</label>
              <label class="ozellik" for="ozellikler_ic_barbeku"><input type="checkbox" id="ozellikler_ic_barbeku" name="ozellikler_ic_barbeku" value="1" <?php if($ilan->ozellikler_ic_barbeku == 1): echo 'checked'; endif; ?>> Barbekü</label>
              <label class="ozellik" for="ozellikler_ic_beyaz_esya"><input type="checkbox" id="ozellikler_ic_beyaz_esya" name="ozellikler_ic_beyaz_esya" value="1" <?php if($ilan->ozellikler_ic_beyaz_esya == 1): echo 'checked'; endif; ?>> Beyaz Eşya</label>
              <label class="ozellik" for="ozellikler_ic_boyali"><input type="checkbox" id="ozellikler_ic_boyali" name="ozellikler_ic_boyali" value="1" <?php if($ilan->ozellikler_ic_boyali == 1): echo 'checked'; endif; ?>> Boyalı</label>
              <label class="ozellik" for="ozellikler_ic_bulasik_makinesi"><input type="checkbox" id="ozellikler_ic_bulasik_makinesi" name="ozellikler_ic_bulasik_makinesi" value="1" <?php if($ilan->ozellikler_ic_bulasik_makinesi == 1): echo 'checked'; endif; ?>> Bulaşık Makinesi</label>
              <label class="ozellik" for="ozellikler_ic_buzdolabi"><input type="checkbox" id="ozellikler_ic_buzdolabi" name="ozellikler_ic_buzdolabi" value="1" <?php if($ilan->ozellikler_ic_buzdolabi == 1): echo 'checked'; endif; ?>> Buzdolabı</label>
              <label class="ozellik" for="ozellikler_ic_duvar_kagidi"><input type="checkbox" id="ozellikler_ic_duvar_kagidi" name="ozellikler_ic_duvar_kagidi" value="1" <?php if($ilan->ozellikler_ic_duvar_kagidi == 1): echo 'checked'; endif; ?>> Duvar Kağıdı</label>
              <label class="ozellik" for="ozellikler_ic_dusakabin"><input type="checkbox" id="ozellikler_ic_dusakabin" name="ozellikler_ic_dusakabin" value="1" <?php if($ilan->ozellikler_ic_dusakabin == 1): echo 'checked'; endif; ?>> Duşakabin</label>
              <label class="ozellik" for="ozellikler_ic_ebeveyn_banyosu"><input type="checkbox" id="ozellikler_ic_ebeveyn_banyosu" name="ozellikler_ic_ebeveyn_banyosu" value="1" <?php if($ilan->ozellikler_ic_ebeveyn_banyosu == 1): echo 'checked'; endif; ?>> Evebeyn Banyosu</label>
              <label class="ozellik" for="ozellikler_ic_fiber_internet"><input type="checkbox" id="ozellikler_ic_fiber_internet" name="ozellikler_ic_fiber_internet" value="1" <?php if($ilan->ozellikler_ic_fiber_internet == 1): echo 'checked'; endif; ?>> Fiber İnternet</label>
              <label class="ozellik" for="ozellikler_ic_firin"><input type="checkbox" id="ozellikler_ic_firin" name="ozellikler_ic_firin" value="1" <?php if($ilan->ozellikler_ic_firin == 1): echo 'checked'; endif; ?>> Fırın</label>
              <label class="ozellik" for="ozellikler_ic_giyinme_odasi"><input type="checkbox" id="ozellikler_ic_giyinme_odasi" name="ozellikler_ic_giyinme_odasi" value="1" <?php if($ilan->ozellikler_ic_giyinme_odasi == 1): echo 'checked'; endif; ?>> Giyinme Odasi</label>
              <label class="ozellik" for="ozellikler_ic_gomme_dolap"><input type="checkbox" id="ozellikler_ic_gomme_dolap" name="ozellikler_ic_gomme_dolap" value="1" <?php if($ilan->ozellikler_ic_gomme_dolap == 1): echo 'checked'; endif; ?>> Gömme Dolap</label>
              <label class="ozellik" for="ozellikler_ic_goruntulu_diyafon"><input type="checkbox" id="ozellikler_ic_goruntulu_diyafon" name="ozellikler_ic_goruntulu_diyafon" value="1" <?php if($ilan->ozellikler_ic_goruntulu_diyafon == 1): echo 'checked'; endif; ?>> Goruntülü Diyafon</label>
              <label class="ozellik" for="ozellikler_ic_hilton_banyo"><input type="checkbox" id="ozellikler_ic_hilton_banyo" name="ozellikler_ic_hilton_banyo" value="1" <?php if($ilan->ozellikler_ic_hilton_banyo == 1): echo 'checked'; endif; ?>> Hilton Banyo</label>
              <label class="ozellik" for="ozellikler_ic_intercom_sistemi"><input type="checkbox" id="ozellikler_ic_intercom_sistemi" name="ozellikler_ic_intercom_sistemi" value="1" <?php if($ilan->ozellikler_ic_intercom_sistemi == 1): echo 'checked'; endif; ?>> Intercom Sistemi</label>
              <label class="ozellik" for="ozellikler_ic_isicam"><input type="checkbox" id="ozellikler_ic_isicam" name="ozellikler_ic_isicam" value="1" <?php if($ilan->ozellikler_ic_isicam == 1): echo 'checked'; endif; ?>> Isıcam</label>
              <label class="ozellik" for="ozellikler_ic_jakuzi"><input type="checkbox" id="ozellikler_ic_jakuzi" name="ozellikler_ic_jakuzi" value="1" <?php if($ilan->ozellikler_ic_jakuzi == 1): echo 'checked'; endif; ?>> Jakuzi</label>
              <label class="ozellik" for="ozellikler_ic_kartonpiyer"><input type="checkbox" id="ozellikler_ic_kartonpiyer" name="ozellikler_ic_kartonpiyer" value="1" <?php if($ilan->ozellikler_ic_kartonpiyer == 1): echo 'checked'; endif; ?>> Kartonpiyer</label>
              <label class="ozellik" for="ozellikler_ic_kiler"><input type="checkbox" id="ozellikler_ic_kiler" name="ozellikler_ic_kiler" value="1" <?php if($ilan->ozellikler_ic_kiler == 1): echo 'checked'; endif; ?>> Kiler</label>
              <label class="ozellik" for="ozellikler_ic_klima"><input type="checkbox" id="ozellikler_ic_klima" name="ozellikler_ic_klima" value="1" <?php if($ilan->ozellikler_ic_klima == 1): echo 'checked'; endif; ?>> Klima</label>
              <label class="ozellik" for="ozellikler_ic_laminant_zemin"><input type="checkbox" id="ozellikler_ic_laminant_zemin" name="ozellikler_ic_laminant_zemin" value="1" <?php if($ilan->ozellikler_ic_laminant_zemin == 1): echo 'checked'; endif; ?>> Laminant Zemin</label>
              <label class="ozellik" for="ozellikler_ic_marley"><input type="checkbox" id="ozellikler_ic_marley" name="ozellikler_ic_marley" value="1" <?php if($ilan->ozellikler_ic_marley == 1): echo 'checked'; endif; ?>> Marley</label>
              <label class="ozellik" for="ozellikler_ic_mobilya"><input type="checkbox" id="ozellikler_ic_mobilya" name="ozellikler_ic_mobilya" value="1" <?php if($ilan->ozellikler_ic_mobilya == 1): echo 'checked'; endif; ?>> Mobilya</label>
              <label class="ozellik" for="ozellikler_ic_mutfak_ankastre"><input type="checkbox" id="ozellikler_ic_mutfak_ankastre" name="ozellikler_ic_mutfak_ankastre" value="1" <?php if($ilan->ozellikler_ic_mutfak_ankastre == 1): echo 'checked'; endif; ?>> Mutfak Ankastre</label>
              <label class="ozellik" for="ozellikler_ic_mutfak_laminat"><input type="checkbox" id="ozellikler_ic_mutfak_laminat" name="ozellikler_ic_mutfak_laminat" value="1" <?php if($ilan->ozellikler_ic_mutfak_laminat == 1): echo 'checked'; endif; ?>> Mutfak Laminat</label>
              <label class="ozellik" for="ozellikler_ic_mutfak_dogalgazi"><input type="checkbox" id="ozellikler_ic_mutfak_dogalgazi" name="ozellikler_ic_mutfak_dogalgazi" value="1" <?php if($ilan->ozellikler_ic_mutfak_dogalgazi == 1): echo 'checked'; endif; ?>> Mutfak Dogalgazı</label>
              <label class="ozellik" for="ozellikler_ic_pvc_dograma"><input type="checkbox" id="ozellikler_ic_pvc_dograma" name="ozellikler_ic_pvc_dograma" value="1" <?php if($ilan->ozellikler_ic_pvc_dograma == 1): echo 'checked'; endif; ?>> PVC Doğrama</label>
              <label class="ozellik" for="ozellikler_ic_panjur"><input type="checkbox" id="ozellikler_ic_panjur" name="ozellikler_ic_panjur" value="1" <?php if($ilan->ozellikler_ic_panjur == 1): echo 'checked'; endif; ?>> Panjur</label>
              <label class="ozellik" for="ozellikler_ic_parke_zemin"><input type="checkbox" id="ozellikler_ic_parke_zemin" name="ozellikler_ic_parke_zemin" value="1" <?php if($ilan->ozellikler_ic_parke_zemin == 1): echo 'checked'; endif; ?>> Parke Zemin</label>
              <label class="ozellik" for="ozellikler_ic_sauna"><input type="checkbox" id="ozellikler_ic_sauna" name="ozellikler_ic_sauna" value="1" <?php if($ilan->ozellikler_ic_sauna == 1): echo 'checked'; endif; ?>> Sauna</label>
              <label class="ozellik" for="ozellikler_ic_seramik_zemin"><input type="checkbox" id="ozellikler_ic_seramik_zemin" name="ozellikler_ic_seramik_zemin" value="1" <?php if($ilan->ozellikler_ic_seramik_zemin == 1): echo 'checked'; endif; ?>> Seramik Zemin</label>
              <label class="ozellik" for="ozellikler_ic_set_ustu_ocak"><input type="checkbox" id="ozellikler_ic_set_ustu_ocak" name="ozellikler_ic_set_ustu_ocak" value="1" <?php if($ilan->ozellikler_ic_set_ustu_ocak == 1): echo 'checked'; endif; ?>> Set Üstü Ocak</label>
              <label class="ozellik" for="ozellikler_ic_spot_aydinlatma"><input type="checkbox" id="ozellikler_ic_spot_aydinlatma" name="ozellikler_ic_spot_aydinlatma" value="1" <?php if($ilan->ozellikler_ic_spot_aydinlatma == 1): echo 'checked'; endif; ?>> Spot Aydınlatma</label>
              <label class="ozellik" for="ozellikler_ic_teras"><input type="checkbox" id="ozellikler_ic_teras" name="ozellikler_ic_teras" value="1" <?php if($ilan->ozellikler_ic_teras == 1): echo 'checked'; endif; ?>> Teras</label>
              <label class="ozellik" for="ozellikler_ic_wifi"><input type="checkbox" id="ozellikler_ic_wifi" name="ozellikler_ic_wifi" value="1" <?php if($ilan->ozellikler_ic_wifi == 1): echo 'checked'; endif; ?>> Wifi</label>
              <label class="ozellik" for="ozellikler_ic_camasir_makinesi"><input type="checkbox" id="ozellikler_ic_camasir_makinesi" name="ozellikler_ic_camasir_makinesi" value="1" <?php if($ilan->ozellikler_ic_camasir_makinesi == 1): echo 'checked'; endif; ?>> Çamasır Makinesi</label>
              <label class="ozellik" for="ozellikler_ic_camasir_odasi"><input type="checkbox" id="ozellikler_ic_camasir_odasi" name="ozellikler_ic_camasir_odasi" value="1" <?php if($ilan->ozellikler_ic_camasir_odasi == 1): echo 'checked'; endif; ?>> Çamasir Odası</label>
              <label class="ozellik" for="ozellikler_ic_celik_kapi"><input type="checkbox" id="ozellikler_ic_celik_kapi" name="ozellikler_ic_celik_kapi" value="1" <?php if($ilan->ozellikler_ic_celik_kapi == 1): echo 'checked'; endif; ?>> Çelik Kapı</label>
              <label class="ozellik" for="ozellikler_ic_sofben"><input type="checkbox" id="ozellikler_ic_sofben" name="ozellikler_ic_sofben" value="1" <?php if($ilan->ozellikler_ic_sofben == 1): echo 'checked'; endif; ?>> Şofben</label>
              <label class="ozellik" for="ozellikler_ic_somine"><input type="checkbox" id="ozellikler_ic_somine" name="ozellikler_ic_somine" value="1" <?php if($ilan->ozellikler_ic_somine == 1): echo 'checked'; endif; ?>> Şömine</label>
            </div>

            <hr>
            <h3>Dış Özellikler</h3>
            <div class="form-group">
              <label class="ozellik" for="ozellikler_dis_asansor"><input type="checkbox" id="ozellikler_dis_asansor" name="ozellikler_dis_asansor" value="1" <?php if($ilan->ozellikler_dis_asansor == 1): echo 'checked'; endif; ?>> Asansör</label>
              <label class="ozellik" for="ozellikler_dis_engelliye_uygun"><input type="checkbox" id="ozellikler_dis_engelliye_uygun" name="ozellikler_dis_engelliye_uygun" value="1" <?php if($ilan->ozellikler_dis_engelliye_uygun == 1): echo 'checked'; endif; ?>> Engelliye Uygun</label>
              <label class="ozellik" for="ozellikler_dis_guvenlik"><input type="checkbox" id="ozellikler_dis_guvenlik" name="ozellikler_dis_guvenlik" value="1" <?php if($ilan->ozellikler_dis_guvenlik == 1): echo 'checked'; endif; ?>> Güvenlik</label>
              <label class="ozellik" for="ozellikler_dis_hidrafor"><input type="checkbox" id="ozellikler_dis_hidrafor" name="ozellikler_dis_hidrafor" value="1" <?php if($ilan->ozellikler_dis_hidrafor == 1): echo 'checked'; endif; ?>> Hidrofor</label>
              <label class="ozellik" for="ozellikler_dis_isi_yalitim"><input type="checkbox" id="ozellikler_dis_isi_yalitim" name="ozellikler_dis_isi_yalitim" value="1" <?php if($ilan->ozellikler_dis_isi_yalitim == 1): echo 'checked'; endif; ?>> Isı Yalıtım</label>
              <label class="ozellik" for="ozellikler_dis_jenerator"><input type="checkbox" id="ozellikler_dis_jenerator" name="ozellikler_dis_jenerator" value="1" <?php if($ilan->ozellikler_dis_jenerator == 1): echo 'checked'; endif; ?>> Jenerator</label>
              <label class="ozellik" for="ozellikler_dis_kablotv_uydu"><input type="checkbox" id="ozellikler_dis_kablotv_uydu" name="ozellikler_dis_kablotv_uydu" value="1" <?php if($ilan->ozellikler_dis_kablotv_uydu == 1): echo 'checked'; endif; ?>> Kablo TV / Uydunet</label>
              <label class="ozellik" for="ozellikler_dis_kapali_garaj"><input type="checkbox" id="ozellikler_dis_kapali_garaj" name="ozellikler_dis_kapali_garaj" value="1" <?php if($ilan->ozellikler_dis_kapali_garaj == 1): echo 'checked'; endif; ?>> Kapalı Garaj</label>
              <label class="ozellik" for="ozellikler_dis_kapici"><input type="checkbox" id="ozellikler_dis_kapici" name="ozellikler_dis_kapici" value="1" <?php if($ilan->ozellikler_dis_kapici == 1): echo 'checked'; endif; ?>> Kapıcı</label>
              <label class="ozellik" for="ozellikler_dis_kres"><input type="checkbox" id="ozellikler_dis_kres" name="ozellikler_dis_kres" value="1" <?php if($ilan->ozellikler_dis_kres == 1): echo 'checked'; endif; ?>> Kreş</label>
              <label class="ozellik" for="ozellikler_dis_otopark"><input type="checkbox" id="ozellikler_dis_otopark" name="ozellikler_dis_otopark" value="1" <?php if($ilan->ozellikler_dis_otopark == 1): echo 'checked'; endif; ?>> Otopark</label>
              <label class="ozellik" for="ozellikler_dis_oyun_parki"><input type="checkbox" id="ozellikler_dis_oyun_parki" name="ozellikler_dis_oyun_parki" value="1" <?php if($ilan->ozellikler_dis_oyun_parki == 1): echo 'checked'; endif; ?>> Oyun Parkı</label>
              <label class="ozellik" for="ozellikler_dis_ses_yalitimi"><input type="checkbox" id="ozellikler_dis_ses_yalitimi" name="ozellikler_dis_ses_yalitimi" value="1" <?php if($ilan->ozellikler_dis_ses_yalitimi == 1): echo 'checked'; endif; ?>> Ses Yalıtımı</label>
              <label class="ozellik" for="ozellikler_dis_siding"><input type="checkbox" id="ozellikler_dis_siding" name="ozellikler_dis_siding" value="1" <?php if($ilan->ozellikler_dis_siding == 1): echo 'checked'; endif; ?>> Siding</label>
              <label class="ozellik" for="ozellikler_dis_spor_alani"><input type="checkbox" id="ozellikler_dis_spor_alani" name="ozellikler_dis_spor_alani" value="1" <?php if($ilan->ozellikler_dis_spor_alani == 1): echo 'checked'; endif; ?>> Spor Alanı</label>
              <label class="ozellik" for="ozellikler_dis_su_deposu"><input type="checkbox" id="ozellikler_dis_su_deposu" name="ozellikler_dis_su_deposu" value="1" <?php if($ilan->ozellikler_dis_su_deposu == 1): echo 'checked'; endif; ?>> Su Deposu</label>
              <label class="ozellik" for="ozellikler_dis_tenis_kortu"><input type="checkbox" id="ozellikler_dis_tenis_kortu" name="ozellikler_dis_tenis_kortu" value="1" <?php if($ilan->ozellikler_dis_tenis_kortu == 1): echo 'checked'; endif; ?>> Tenis Kortu</label>
              <label class="ozellik" for="ozellikler_dis_yangin_merdiveni"><input type="checkbox" id="ozellikler_dis_yangin_merdiveni" name="ozellikler_dis_yangin_merdiveni" value="1" <?php if($ilan->ozellikler_dis_yangin_merdiveni == 1): echo 'checked'; endif; ?>> Yangın Merdiveni</label>
              <label class="ozellik" for="ozellikler_dis_yuzme_havuzu_acik"><input type="checkbox" id="ozellikler_dis_yuzme_havuzu_acik" name="ozellikler_dis_yuzme_havuzu_acik" value="1" <?php if($ilan->ozellikler_dis_yuzme_havuzu_acik == 1): echo 'checked'; endif; ?>> Yüzme Havuzu (Açık)</label>
              <label class="ozellik" for="ozellikler_dis_yuzme_havuzu_kapali"><input type="checkbox" id="ozellikler_dis_yuzme_havuzu_kapali" name="ozellikler_dis_yuzme_havuzu_kapali" value="1" <?php if($ilan->ozellikler_dis_yuzme_havuzu_kapali == 1): echo 'checked'; endif; ?>> Yüzme Havuzu (Kapalı)</label>
            </div>

            <hr>
            <h3>Muhit Özellikleri</h3>
            <div class="form-group">
              <label class="ozellik" for="ozellikler_muhit_alisveris_merkezi"><input type="checkbox" id="ozellikler_muhit_alisveris_merkezi" name="ozellikler_muhit_alisveris_merkezi" value="1" <?php if($ilan->ozellikler_muhit_alisveris_merkezi == 1): echo 'checked'; endif; ?>> Alışveriş Merkezi</label>
              <label class="ozellik" for="ozellikler_muhit_belediye"><input type="checkbox" id="ozellikler_muhit_belediye" name="ozellikler_muhit_belediye" value="1" <?php if($ilan->ozellikler_muhit_belediye == 1): echo 'checked'; endif; ?>> Belediye</label>
              <label class="ozellik" for="ozellikler_muhit_cami"><input type="checkbox" id="ozellikler_muhit_cami" name="ozellikler_muhit_cami" value="1" <?php if($ilan->ozellikler_muhit_cami == 1): echo 'checked'; endif; ?>> Cami</label>
              <label class="ozellik" for="ozellikler_muhit_cemevi"><input type="checkbox" id="ozellikler_muhit_cemevi" name="ozellikler_muhit_cemevi" value="1" <?php if($ilan->ozellikler_muhit_cemevi == 1): echo 'checked'; endif; ?>> Cem Evi</label>
              <label class="ozellik" for="ozellikler_muhit_denize_sifir"><input type="checkbox" id="ozellikler_muhit_denize_sifir" name="ozellikler_muhit_denize_sifir" value="1" <?php if($ilan->ozellikler_muhit_denize_sifir == 1): echo 'checked'; endif; ?>> Denize Sıfır</label>
              <label class="ozellik" for="ozellikler_muhit_eczane"><input type="checkbox" id="ozellikler_muhit_eczane" name="ozellikler_muhit_eczane" value="1" <?php if($ilan->ozellikler_muhit_eczane == 1): echo 'checked'; endif; ?>> Eczane</label>
              <label class="ozellik" for="ozellikler_muhit_eglence_merkezi"><input type="checkbox" id="ozellikler_muhit_eglence_merkezi" name="ozellikler_muhit_eglence_merkezi" value="1" <?php if($ilan->ozellikler_muhit_eglence_merkezi == 1): echo 'checked'; endif; ?>> Eğlence Merkezi</label>
              <label class="ozellik" for="ozellikler_muhit_fuar"><input type="checkbox" id="ozellikler_muhit_fuar" name="ozellikler_muhit_fuar" value="1" <?php if($ilan->ozellikler_muhit_fuar == 1): echo 'checked'; endif; ?>> Fuar</label>
              <label class="ozellik" for="ozellikler_muhit_hastane"><input type="checkbox" id="ozellikler_muhit_hastane" name="ozellikler_muhit_hastane" value="1" <?php if($ilan->ozellikler_muhit_hastane == 1): echo 'checked'; endif; ?>> Hastane</label>
              <label class="ozellik" for="ozellikler_muhit_havra"><input type="checkbox" id="ozellikler_muhit_havra" name="ozellikler_muhit_havra" value="1" <?php if($ilan->ozellikler_muhit_havra == 1): echo 'checked'; endif; ?>> Havra</label>
              <label class="ozellik" for="ozellikler_muhit_klise"><input type="checkbox" id="ozellikler_muhit_klise" name="ozellikler_muhit_klise" value="1" <?php if($ilan->ozellikler_muhit_klise == 1): echo 'checked'; endif; ?>> Klise</label>
              <label class="ozellik" for="ozellikler_muhit_lise"><input type="checkbox" id="ozellikler_muhit_lise" name="ozellikler_muhit_lise" value="1" <?php if($ilan->ozellikler_muhit_lise == 1): echo 'checked'; endif; ?>> Lise</label>
              <label class="ozellik" for="ozellikler_muhit_market"><input type="checkbox" id="ozellikler_muhit_market" name="ozellikler_muhit_market" value="1" <?php if($ilan->ozellikler_muhit_market == 1): echo 'checked'; endif; ?>> Market</label>
              <label class="ozellik" for="ozellikler_muhit_park"><input type="checkbox" id="ozellikler_muhit_park" name="ozellikler_muhit_park" value="1" <?php if($ilan->ozellikler_muhit_park == 1): echo 'checked'; endif; ?>> park</label>
              <label class="ozellik" for="ozellikler_muhit_polis_merkezi"><input type="checkbox" id="ozellikler_muhit_polis_merkezi" name="ozellikler_muhit_polis_merkezi" value="1" <?php if($ilan->ozellikler_muhit_polis_merkezi == 1): echo 'checked'; endif; ?>> Polis Merkezi</label>
              <label class="ozellik" for="ozellikler_muhit_saglik_ocagi"><input type="checkbox" id="ozellikler_muhit_saglik_ocagi" name="ozellikler_muhit_saglik_ocagi" value="1" <?php if($ilan->ozellikler_muhit_saglik_ocagi == 1): echo 'checked'; endif; ?>> Sağlık Ocağı</label>
              <label class="ozellik" for="ozellikler_muhit_semt_pazari"><input type="checkbox" id="ozellikler_muhit_semt_pazari" name="ozellikler_muhit_semt_pazari" value="1" <?php if($ilan->ozellikler_muhit_semt_pazari == 1): echo 'checked'; endif; ?>> Semt Pazari</label>
              <label class="ozellik" for="ozellikler_muhit_spor_salonu"><input type="checkbox" id="ozellikler_muhit_spor_salonu" name="ozellikler_muhit_spor_salonu" value="1" <?php if($ilan->ozellikler_muhit_spor_salonu == 1): echo 'checked'; endif; ?>> Spor Salonu</label>
              <label class="ozellik" for="ozellikler_muhit_universite"><input type="checkbox" id="ozellikler_muhit_universite" name="ozellikler_muhit_universite" value="1" <?php if($ilan->ozellikler_muhit_universite == 1): echo 'checked'; endif; ?>> Üniversite</label>
            </div>

            <hr>
            <h3>Ulaşım Özellikleri</h3>
            <div class="form-group">
              <label class="ozellik" for="ozellikler_ulasim_anayol"><input type="checkbox" id="ozellikler_ulasim_anayol" name="ozellikler_ulasim_anayol" value="1" <?php if($ilan->ozellikler_ulasim_anayol == 1): echo 'checked'; endif; ?>> Anayol</label>
              <label class="ozellik" for="ozellikler_ulasim_bogaz_kopruleri"><input type="checkbox" id="ozellikler_ulasim_bogaz_kopruleri" name="ozellikler_ulasim_bogaz_kopruleri" value="1" <?php if($ilan->ozellikler_ulasim_bogaz_kopruleri == 1): echo 'checked'; endif; ?>> Boğaz Köprüleri</label>
              <label class="ozellik" for="ozellikler_ulasim_cadde"><input type="checkbox" id="ozellikler_ulasim_cadde" name="ozellikler_ulasim_cadde" value="1" <?php if($ilan->ozellikler_ulasim_cadde == 1): echo 'checked'; endif; ?>> Cadde</label>
              <label class="ozellik" for="ozellikler_ulasim_deniz_otobusu"><input type="checkbox" id="ozellikler_ulasim_deniz_otobusu" name="ozellikler_ulasim_deniz_otobusu" value="1" <?php if($ilan->ozellikler_ulasim_deniz_otobusu == 1): echo 'checked'; endif; ?>> Deniz Otobüsü</label>
              <label class="ozellik" for="ozellikler_ulasim_dolmus"><input type="checkbox" id="ozellikler_ulasim_dolmus" name="ozellikler_ulasim_dolmus" value="1" <?php if($ilan->ozellikler_ulasim_dolmus == 1): echo 'checked'; endif; ?>> Dolmuş</label>
              <label class="ozellik" for="ozellikler_ulasim_e5"><input type="checkbox" id="ozellikler_ulasim_e5" name="ozellikler_ulasim_e5" value="1" <?php if($ilan->ozellikler_ulasim_e5 == 1): echo 'checked'; endif; ?>> E5</label>
              <label class="ozellik" for="ozellikler_ulasim_havaalani"><input type="checkbox" id="ozellikler_ulasim_havaalani" name="ozellikler_ulasim_havaalani" value="1" <?php if($ilan->ozellikler_ulasim_havaalani == 1): echo 'checked'; endif; ?>> Havaalanı</label>
              <label class="ozellik" for="ozellikler_ulasim_marmaray"><input type="checkbox" id="ozellikler_ulasim_marmaray" name="ozellikler_ulasim_marmaray" value="1" <?php if($ilan->ozellikler_ulasim_marmaray == 1): echo 'checked'; endif; ?>> Marmaray</label>
              <label class="ozellik" for="ozellikler_ulasim_metro"><input type="checkbox" id="ozellikler_ulasim_metro" name="ozellikler_ulasim_metro" value="1" <?php if($ilan->ozellikler_ulasim_metro == 1): echo 'checked'; endif; ?>> Metro</label>
              <label class="ozellik" for="ozellikler_ulasim_metrobus"><input type="checkbox" id="ozellikler_ulasim_metrobus" name="ozellikler_ulasim_metrobus" value="1" <?php if($ilan->ozellikler_ulasim_metrobus == 1): echo 'checked'; endif; ?>> Metrobüs</label>
              <label class="ozellik" for="ozellikler_ulasim_minubus"><input type="checkbox" id="ozellikler_ulasim_minubus" name="ozellikler_ulasim_minubus" value="1" <?php if($ilan->ozellikler_ulasim_minubus == 1): echo 'checked'; endif; ?>> Minibüs</label>
              <label class="ozellik" for="ozellikler_ulasim_otobus_duragi"><input type="checkbox" id="ozellikler_ulasim_otobus_duragi" name="ozellikler_ulasim_otobus_duragi" value="1" <?php if($ilan->ozellikler_ulasim_otobus_duragi == 1): echo 'checked'; endif; ?>> Otobüs Durağı</label>
              <label class="ozellik" for="ozellikler_ulasim_sahil"><input type="checkbox" id="ozellikler_ulasim_sahil" name="ozellikler_ulasim_sahil" value="1" <?php if($ilan->ozellikler_ulasim_sahil == 1): echo 'checked'; endif; ?>> Sahil</label>
              <label class="ozellik" for="ozellikler_ulasim_tem"><input type="checkbox" id="ozellikler_ulasim_tem" name="ozellikler_ulasim_tem" value="1" <?php if($ilan->ozellikler_ulasim_tem == 1): echo 'checked'; endif; ?>> Tem</label>
              <label class="ozellik" for="ozellikler_ulasim_tramvay"><input type="checkbox" id="ozellikler_ulasim_tramvay" name="ozellikler_ulasim_tramvay" value="1" <?php if($ilan->ozellikler_ulasim_tramvay == 1): echo 'checked'; endif; ?>> Tramvay</label>
              <label class="ozellik" for="ozellikler_ulasim_tren_istasyonu"><input type="checkbox" id="ozellikler_ulasim_tren_istasyonu" name="ozellikler_ulasim_tren_istasyonu" value="1" <?php if($ilan->ozellikler_ulasim_tren_istasyonu == 1): echo 'checked'; endif; ?>> Tren İstasyonu</label>
              <label class="ozellik" for="ozellikler_ulasim_iskele"><input type="checkbox" id="ozellikler_ulasim_iskele" name="ozellikler_ulasim_iskele" value="1" <?php if($ilan->ozellikler_ulasim_iskele == 1): echo 'checked'; endif; ?>> İskele</label>
            </div>

            <hr>
            <h3>Manzara Özellikleri</h3>
            <div class="form-group">
              <label class="ozellik" for="ozellikler_manzara_bogaz"><input type="checkbox" id="ozellikler_manzara_bogaz" name="ozellikler_manzara_bogaz" value="1" <?php if($ilan->ozellikler_manzara_bogaz == 1): echo 'checked'; endif; ?>> Boğaz</label>
              <label class="ozellik" for="ozellikler_manzara_deniz"><input type="checkbox" id="ozellikler_manzara_deniz" name="ozellikler_manzara_deniz" value="1" <?php if($ilan->ozellikler_manzara_deniz == 1): echo 'checked'; endif; ?>> Deniz</label>
              <label class="ozellik" for="ozellikler_manzara_doga"><input type="checkbox" id="ozellikler_manzara_doga" name="ozellikler_manzara_doga" value="1" <?php if($ilan->ozellikler_manzara_doga == 1): echo 'checked'; endif; ?>> Doğa</label>
              <label class="ozellik" for="ozellikler_manzara_gol"><input type="checkbox" id="ozellikler_manzara_gol" name="ozellikler_manzara_gol" value="1" <?php if($ilan->ozellikler_manzara_gol == 1): echo 'checked'; endif; ?>> Göl</label>
              <label class="ozellik" for="ozellikler_manzara_sehir"><input type="checkbox" id="ozellikler_manzara_sehir" name="ozellikler_manzara_sehir" value="1" <?php if($ilan->ozellikler_manzara_sehir == 1): echo 'checked'; endif; ?>> Şehir</label>
            </div>

            <hr>
            <h3>Konut Özellikleri</h3>
            <div class="form-group">
              <label class="ozellik" for="ozellikler_konut_ara_kat_dubleks"><input type="checkbox" id="ozellikler_konut_ara_kat_dubleks" name="ozellikler_konut_ara_kat_dubleks" value="1" <?php if($ilan->ozellikler_konut_ara_kat_dubleks == 1): echo 'checked'; endif; ?>> Ara Kat Dubleks</label>
              <label class="ozellik" for="ozellikler_konut_bahce_dubleks"><input type="checkbox" id="ozellikler_konut_bahce_dubleks" name="ozellikler_konut_bahce_dubleks" value="1" <?php if($ilan->ozellikler_konut_bahce_dubleks == 1): echo 'checked'; endif; ?>> Bahçe Dubleks</label>
              <label class="ozellik" for="ozellikler_konut_bahce_kati"><input type="checkbox" id="ozellikler_konut_bahce_kati" name="ozellikler_konut_bahce_kati" value="1" <?php if($ilan->ozellikler_konut_bahce_kati == 1): echo 'checked'; endif; ?>> Bahçe Katı</label>
              <label class="ozellik" for="ozellikler_konut_bahceli"><input type="checkbox" id="ozellikler_konut_bahceli" name="ozellikler_konut_bahceli" value="1" <?php if($ilan->ozellikler_konut_bahceli == 1): echo 'checked'; endif; ?>> Bahçeli</label>
              <label class="ozellik" for="ozellikler_konut_mustakil_girisli"><input type="checkbox" id="ozellikler_konut_mustakil_girisli" name="ozellikler_konut_mustakil_girisli" value="1" <?php if($ilan->ozellikler_konut_mustakil_girisli == 1): echo 'checked'; endif; ?>> Müstakil Girişli</label>
              <label class="ozellik" for="ozellikler_konut_tripleks"><input type="checkbox" id="ozellikler_konut_tripleks" name="ozellikler_konut_tripleks" value="1" <?php if($ilan->ozellikler_konut_tripleks == 1): echo 'checked'; endif; ?>> Tripleks</label>
              <label class="ozellik" for="ozellikler_konut_cati_dubleksi"><input type="checkbox" id="ozellikler_konut_cati_dubleksi" name="ozellikler_konut_cati_dubleksi" value="1" <?php if($ilan->ozellikler_konut_cati_dubleksi == 1): echo 'checked'; endif; ?>> Çatı Dubleksi</label>
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
  <script src="/public/backend/plugins/parsley/parsley.js"></script>
  <script src="/public/backend/plugins/select2/select2.min.js"></script>
  <script src="/public/backend/plugins/select2/select2_locale_tr.js"></script>
  <script>
  $('.select2').select2();
  </script>



  <script>
    $(document).on('change', '#konum_sehir', function(){
      $this = $(this);
      sehirId = $this.val();

      $.ajax({
        url: '{{base_url("emlak/ilan/ajax_ilce")}}/'+sehirId,
        dataType: 'json',
        success: function(msg) {
          val = '';
          $.each(msg, function(index, value) {
            val += '<option value="'+value.ilce_id+'">'+value.ad+'</option>';
          });

          $('#konum_ilce').html(val);
          $('#konum_semt').html('<option>Lütfen İlçe Seçin</option>');
          $('#konum_mahalle').html('<option>Lütfen Semt Seçin</option>');
        }
      });
    });

    $(document).on('change', '#konum_ilce', function(){
      $this = $(this);
      ilceId = $this.val();

      $.ajax({
        url: '{{base_url("emlak/ilan/ajax_semt")}}/'+ilceId,
        dataType: 'json',
        success: function(msg) {
          val = '';
          $.each(msg, function(index, value) {
            val += '<option value="'+value.semt_id+'">'+value.ad+'</option>';
          });
          $('#konum_semt').html(val);
        }
      });
    });

    $(document).on('change', '#konum_semt', function(){
      $this = $(this);
      semtId = $this.val();

      $.ajax({
        url: '{{base_url("emlak/ilan/ajax_mahalle")}}/'+semtId,
        dataType: 'json',
        success: function(msg) {
          val = '';
          $.each(msg, function(index, value) {
            val += '<option value="'+value.mahalle_id+'">'+value.ad+'</option>';
          });
          $('#konum_mahalle').html(val);
        }
      });
    });

  </script>



  <script>
    $(document).on('change', '#kategori', function(){
      $this = $(this);
      kategoriId = $this.val();
      if(kategoriId == 1) {
        $('#alt_kategori').html('\
          <option value="20">Daire</option>\
          <option value="21">Residence</option>\
          <option value="22">Müstakil Ev</option>\
          <option value="23">Villa</option>\
          <option value="24">Çiftlik Evi</option>\
          <option value="25">Köşk & Konak</option>\
          <option value="26">Yalı</option>\
          <option value="27">Yalı Dairesi</option>\
          <option value="28">Yazlık</option>\
          <option value="29">Prefabrik Ev</option>\
          <option value="30">Kooperatif</option>\
          ');
      } else if(kategoriId == 2) {
        $('#alt_kategori').html('\
          <option value="31">Daire</option>\
          <option value="32">Residence</option>\
          <option value="33">Müstakil Ev</option>\
          <option value="34">Villa</option>\
          <option value="35">Çiftlik Evi</option>\
          <option value="36">Köşk & Konak</option>\
          <option value="37">Yalı</option>\
          <option value="38">Yalı Dairesi</option>\
          <option value="39">Yazlık</option>\
          <option value="40">Prefabrik Ev</option>\
          <option value="41">Kooperatif</option>\
          ');
      } else if(kategoriId == 3) {
        $('#alt_kategori').html('\
          <option value="42">Akaryakıt İstasyonu</option>\
          <option value="43">Apartman Dairesi</option>\
          <option value="44">Atölye</option>\
          <option value="45">Büfe</option>\
          <option value="46">Büro & Ofis</option>\
          <option value="47">Cafe & Bar</option>\
          <option value="48">Çiftlik</option>\
          <option value="49">Depo</option>\
          <option value="50">Dershane & Kurs</option>\
          <option value="51">Düğün Salonu</option>\
          <option value="52">Dükkan & Mağaza</option>\
          <option value="53">Eczane & Medikal</option>\
          <option value="54">Fabrika</option>\
          <option value="55">Fotoğraf Stüdyosu</option>\
          <option value="56">Hazır & Sanal Ofis</option>\
          <option value="57">İmalathane</option>\
          <option value="58">İş Hanı Katı & Ofisi</option>\
          <option value="59">Komple Bina</option>\
          <option value="60">Kuaför & Güzellik Merkezi</option>\
          <option value="61">Maden Ocağı</option>\
          <option value="62">Market</option>\
          <option value="63">Muayenehane</option>\
          <option value="64">Oto Kuaför & Yıkama</option>\
          <option value="65">Otopark</option>\
          <option value="66">Pasaj</option>\
          <option value="67">Pastane & Fırın</option>\
          <option value="68">Pazar Yeri</option>\
          <option value="69">Plaza</option>\
          <option value="70">Plaza Katı & Ofisi</option>\
          <option value="71">Prova & Kayıt Stüdyosu</option>\
          <option value="72">Restoran & Lokanta</option>\
          <option value="73">Sağlık Merkezi</option>\
          <option value="74">Sinema & Konferans Salonu</option>\
          <option value="75">Spa, Hamam & Sauna</option>\
          <option value="76">Spor Tesisi</option>\
          <option value="77">Taksi Durağı</option>\
          <option value="78">Tamirhane</option>\
          <option value="79">Yurt</option>\
          ');
      } else if(kategoriId == 4) {
        $('#alt_kategori').html('\
          <option value="80">Akaryakıt İstasyonu</option>\
          <option value="81">Apartman Dairesi</option>\
          <option value="82">Atölye</option>\
          <option value="83">Büfe</option>\
          <option value="84">Büro & Ofis</option>\
          <option value="85">Cafe & Bar</option>\
          <option value="86">Çiftlik</option>\
          <option value="87">Depo</option>\
          <option value="88">Dershane & Kurs</option>\
          <option value="89">Düğün Salonu</option>\
          <option value="90">Dükkan & Mağaza</option>\
          <option value="91">Eczane & Medikal</option>\
          <option value="92">Fabrika</option>\
          <option value="93">Fotoğraf Stüdyosu</option>\
          <option value="94">Hazır & Sanal Ofis</option>\
          <option value="95">İmalathane</option>\
          <option value="96">İş Hanı Katı & Ofisi</option>\
          <option value="97">Komple Bina</option>\
          <option value="98">Kuaför & Güzellik Merkezi</option>\
          <option value="99">Maden Ocağı</option>\
          <option value="100">Market</option>\
          <option value="101">Muayenehane</option>\
          <option value="102">Oto Kuaför & Yıkama</option>\
          <option value="103">Otopark</option>\
          <option value="104">Pasaj</option>\
          <option value="105">Pastane & Fırın</option>\
          <option value="106">Pazar Yeri</option>\
          <option value="107">Plaza</option>\
          <option value="108">Plaza Katı & Ofisi</option>\
          <option value="109">Prova & Kayıt Stüdyosu</option>\
          <option value="110">Restoran & Lokanta</option>\
          <option value="111">Sağlık Merkezi</option>\
          <option value="112">Sinema & Konferans Salonu</option>\
          <option value="113">Spa, Hamam & Sauna</option>\
          <option value="114">Spor Tesisi</option>\
          <option value="115">Taksi Durağı</option>\
          <option value="116">Tamirhane</option>\
          <option value="117">Yurt</option>\
          ');
      }
      else if(kategoriId == 5) {
        $('#alt_kategori').html('\
          <option value="118">Akaryakıt İstasyonu</option>\
          <option value="119">Apartman Dairesi</option>\
          <option value="120">Atölye</option>\
          <option value="121">Büfe</option>\
          <option value="122">Büro & Ofis</option>\
          <option value="123">Cafe & Bar</option>\
          <option value="124">Çiftlik</option>\
          <option value="125">Depo</option>\
          <option value="125">Dershane & Kurs</option>\
          <option value="127">Düğün Salonu</option>\
          <option value="128">Dükkan & Mağaza</option>\
          <option value="129">Eczane & Medikal</option>\
          <option value="130">Fabrika</option>\
          <option value="131">Fotoğraf Stüdyosu</option>\
          <option value="132">Hazır & Sanal Ofis</option>\
          <option value="133">İmalathane</option>\
          <option value="134">İş Hanı Katı & Ofisi</option>\
          <option value="135">Komple Bina</option>\
          <option value="137">Kuaför & Güzellik Merkezi</option>\
          <option value="138">Maden Ocağı</option>\
          <option value="139">Market</option>\
          <option value="140">Muayenehane</option>\
          <option value="141">Oto Kuaför & Yıkama</option>\
          <option value="142">Otopark</option>\
          <option value="143">Pasaj</option>\
          <option value="144">Pastane & Fırın</option>\
          <option value="145">Pazar Yeri</option>\
          <option value="146">Plaza</option>\
          <option value="147">Plaza Katı & Ofisi</option>\
          <option value="148">Prova & Kayıt Stüdyosu</option>\
          <option value="149">Restoran & Lokanta</option>\
          <option value="150">Sağlık Merkezi</option>\
          <option value="151">Sinema & Konferans Salonu</option>\
          <option value="152">Spa, Hamam & Sauna</option>\
          <option value="153">Spor Tesisi</option>\
          <option value="154">Taksi Durağı</option>\
          <option value="155">Tamirhane</option>\
          <option value="156">Yurt</option>\
          ');
      } else if(kategoriId == 6) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      }
      else if(kategoriId == 7) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 8) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 9) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 10) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 11) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 12) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 13) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 14) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 15) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 16) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 17) {
        $('#alt_kategori').html('<option>Kategori Seçimi Tamalanmıştır</option>');
      } else if(kategoriId == 18) {
        $('#alt_kategori').html('\
          <option value="157">Otel</option>\
          <option value="158">Apart Otel</option>\
          <option value="159">Butik Otel</option>\
          <option value="160">Motel</option>\
          <option value="161">Pansiyon</option>\
          <option value="162">Kamp Yeri (Mocamp)</option>\
          <option value="163">Tatil Köyü</option>\
          ');
      } else {
        $('#alt_kategori').html('\
          <option value="157">Otel</option>\
          <option value="158">Apart Otel</option>\
          <option value="159">Butik Otel</option>\
          <option value="160">Motel</option>\
          <option value="161">Pansiyon</option>\
          <option value="162">Kamp Yeri (Mocamp)</option>\
          <option value="163">Tatil Köyü</option>\
          ');
      }

    });
  </script>

  <script src="http://maps.google.com/maps/api/js?sensor=true."></script>
  <script src="/public/backend/plugins/gmaps.js"></script>
  <script type="text/javascript">
    var map;
    $(document).ready(function(){

      map = new GMaps({
        div: '#map',
        lat: {{$ilan->emlak_harita_enlem}},
        lng:  {{$ilan->emlak_harita_boylam}}
      });

      map.addMarker({
        lat: {{$ilan->emlak_harita_enlem}},
        lng:  {{$ilan->emlak_harita_boylam}}
      });

     GMaps.on('click', map.map, function(event) {
        map.removeMarkers();
        var index = map.markers.length;
        var lat = event.latLng.lat();
        var lng = event.latLng.lng();
        $('#emlak_harita_enlem').val(lat);
        $('#emlak_harita_boylam').val(lng);



        map.addMarker({
          lat: lat,
          lng: lng
        });
      });


    });
  </script>

@endsection