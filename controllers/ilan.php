<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ilan extends Public_Controller {

	public function __construct()
	{
        parent::__construct();

		$this->load->model('ilan_model');
	}


	// İlanları listele
	public function index()
	{

	}

	public function show()
	{

	}

	// ilan oluşturma ekranını yükle
	public function create()
	{
		$data['sehirler'] = $this->db->select('*')->from('harita_sehirler')->get()->result();
		$this->blade->render('emlak/ilan/create', $data);
	}

	// yeni oluşturulan ilanı kaydet
	public function store()
	{
		$input = $input = $this->input->post();
		$input['ofis_id'] = 2;
		$this->db->insert('emlak_ofisi_ilanlari', $input);
		$id = $this->db->insert_id();

		redirect(base_url('emlak/ilan/'.$id.'/edit'));
	}

	// ilan düzenleme ekranını göster
	public function edit($id)
	{
		$data['ilan'] = $this->db->select('*')->from('emlak_ofisi_ilanlari')->where('id', $id)->get()->row();
		$this->blade->render('emlak/ilan/edit', $data);
	}

	// değişiklikleri veritabanına kaydet
	public function update($id)
	{
		$data['ozellikler_cephe_bati'] = null;
		$data['ozellikler_cephe_dogu'] = null;
		$data['ozellikler_cephe_guney'] = null;
		$data['ozellikler_cephe_kuzey'] = null;
		$data['ozellikler_ic_adsl'] = null;
		$data['ozellikler_ic_ahsap_dograma'] = null;
		$data['ozellikler_ic_alarm_hirsiz'] = null;
		$data['ozellikler_ic_alarm_yangin'] = null;
		$data['ozellikler_ic_amerikan_mutfak'] = null;
		$data['ozellikler_ic_ankastre_firin'] = null;
		$data['ozellikler_ic_balkon'] = null;
		$data['ozellikler_ic_barbeku'] = null;
		$data['ozellikler_ic_beyaz_esya'] = null;
		$data['ozellikler_ic_boyali'] = null;
		$data['ozellikler_ic_bulasik_makinesi'] = null;
		$data['ozellikler_ic_buzdolabi'] = null;
		$data['ozellikler_ic_duvar_kagidi'] = null;
		$data['ozellikler_ic_dusakabin'] = null;
		$data['ozellikler_ic_ebeveyn_banyosu'] = null;
		$data['ozellikler_ic_fiber_internet'] = null;
		$data['ozellikler_ic_firin'] = null;
		$data['ozellikler_ic_giyinme_odasi'] = null;
		$data['ozellikler_ic_gomme_dolap'] = null;
		$data['ozellikler_ic_goruntulu_diyafon'] = null;
		$data['ozellikler_ic_hilton_banyo'] = null;
		$data['ozellikler_ic_intercom_sistemi'] = null;
		$data['ozellikler_ic_isicam'] = null;
		$data['ozellikler_ic_jakuzi'] = null;
		$data['ozellikler_ic_kartonpiyer'] = null;
		$data['ozellikler_ic_kiler'] = null;
		$data['ozellikler_ic_klima'] = null;
		$data['ozellikler_ic_laminant_zemin'] = null;
		$data['ozellikler_ic_marley'] = null;
		$data['ozellikler_ic_mobilya'] = null;
		$data['ozellikler_ic_mutfak_ankastre'] = null;
		$data['ozellikler_ic_mutfak_laminat'] = null;
		$data['ozellikler_ic_mutfak_dogalgazi'] = null;
		$data['ozellikler_ic_pvc_dograma'] = null;
		$data['ozellikler_ic_panjur'] = null;
		$data['ozellikler_ic_parke_zemin'] = null;
		$data['ozellikler_ic_sauna'] = null;
		$data['ozellikler_ic_seramik_zemin'] = null;
		$data['ozellikler_ic_set_ustu_ocak'] = null;
		$data['ozellikler_ic_spot_aydinlatma'] = null;
		$data['ozellikler_ic_teras'] = null;
		$data['ozellikler_ic_wifi'] = null;
		$data['ozellikler_ic_camasir_makinesi'] = null;
		$data['ozellikler_ic_camasir_odasi'] = null;
		$data['ozellikler_ic_celik_kapi'] = null;
		$data['ozellikler_ic_sofben'] = null;
		$data['ozellikler_ic_somine'] = null;
		$data['ozellikler_dis_asansor'] = null;
		$data['ozellikler_dis_engelliye_uygun'] = null;
		$data['ozellikler_dis_guvenlik'] = null;
		$data['ozellikler_dis_hidrafor'] = null;
		$data['ozellikler_dis_isi_yalitim'] = null;
		$data['ozellikler_dis_jenerator'] = null;
		$data['ozellikler_dis_kablotv_uydu'] = null;
		$data['ozellikler_dis_kapali_garaj'] = null;
		$data['ozellikler_dis_kapici'] = null;
		$data['ozellikler_dis_kres'] = null;
		$data['ozellikler_dis_otopark'] = null;
		$data['ozellikler_dis_oyun_parki'] = null;
		$data['ozellikler_dis_ses_yalitimi'] = null;
		$data['ozellikler_dis_siding'] = null;
		$data['ozellikler_dis_spor_alani'] = null;
		$data['ozellikler_dis_su_deposu'] = null;
		$data['ozellikler_dis_tenis_kortu'] = null;
		$data['ozellikler_dis_yangin_merdiveni'] = null;
		$data['ozellikler_dis_yuzme_havuzu_acik'] = null;
		$data['ozellikler_dis_yuzme_havuzu_kapali'] = null;
		$data['ozellikler_muhit_alisveris_merkezi'] = null;
		$data['ozellikler_muhit_belediye'] = null;
		$data['ozellikler_muhit_cami'] = null;
		$data['ozellikler_muhit_cemevi'] = null;
		$data['ozellikler_muhit_denize_sifir'] = null;
		$data['ozellikler_muhit_eczane'] = null;
		$data['ozellikler_muhit_eglence_merkezi'] = null;
		$data['ozellikler_muhit_fuar'] = null;
		$data['ozellikler_muhit_hastane'] = null;
		$data['ozellikler_muhit_havra'] = null;
		$data['ozellikler_muhit_klise'] = null;
		$data['ozellikler_muhit_lise'] = null;
		$data['ozellikler_muhit_market'] = null;
		$data['ozellikler_muhit_park'] = null;
		$data['ozellikler_muhit_polis_merkezi'] = null;
		$data['ozellikler_muhit_saglik_ocagi'] = null;
		$data['ozellikler_muhit_semt_pazari'] = null;
		$data['ozellikler_muhit_spor_salonu'] = null;
		$data['ozellikler_muhit_universite'] = null;
		$data['ozellikler_ulasim_anayol'] = null;
		$data['ozellikler_ulasim_bogaz_kopruleri'] = null;
		$data['ozellikler_ulasim_cadde'] = null;
		$data['ozellikler_ulasim_deniz_otobusu'] = null;
		$data['ozellikler_ulasim_dolmus'] = null;
		$data['ozellikler_ulasim_e5'] = null;
		$data['ozellikler_ulasim_havaalani'] = null;
		$data['ozellikler_ulasim_marmaray'] = null;
		$data['ozellikler_ulasim_metro'] = null;
		$data['ozellikler_ulasim_metrobus'] = null;
		$data['ozellikler_ulasim_minubus'] = null;
		$data['ozellikler_ulasim_otobus_duragi'] = null;
		$data['ozellikler_ulasim_sahil'] = null;
		$data['ozellikler_ulasim_tem'] = null;
		$data['ozellikler_ulasim_tramvay'] = null;
		$data['ozellikler_ulasim_tren_istasyonu'] = null;
		$data['ozellikler_ulasim_iskele'] = null;
		$data['ozellikler_manzara_bogaz'] = null;
		$data['ozellikler_manzara_deniz'] = null;
		$data['ozellikler_manzara_doga'] = null;
		$data['ozellikler_manzara_gol'] = null;
		$data['ozellikler_manzara_sehir'] = null;
		$data['ozellikler_konut_ara_kat_dubleks'] = null;
		$data['ozellikler_konut_bahce_dubleks'] = null;
		$data['ozellikler_konut_bahce_kati'] = null;
		$data['ozellikler_konut_bahceli'] = null;
		$data['ozellikler_konut_mustakil_girisli'] = null;
		$data['ozellikler_konut_tripleks'] = null;
		$data['ozellikler_konut_cati_dubleksi'] = null;

		$data = array_merge($data,$this->input->post());

		$this->db->where('id', $id);
		$this->db->update('emlak_ofisi_ilanlari', $data);

		redirect(base_url('emlak/ilan/'.$id.'/edit'));
	}

	// ilan sil
	public function destroy($id)
	{

	}

	public function ajax_ilce($id)
	{
		$ilceler = $this->db->select('*')->from('harita_ilceler')->where('sehir_id', $id)->get()->result();
		echo json_encode($ilceler);
	}

	public function ajax_semt($id)
	{
		$mahalleId = $this->db->select('*')->from('harita_semt')->where('ilce_id', $id)->get()->result();
		echo json_encode($mahalleId);
	}

	public function ajax_mahalle($id)
	{
		$mahalleId = $this->db->select('*')->from('harita_mahalle')->where('semt_id', $id)->get()->result();
		echo json_encode($mahalleId);
	}





}

/* End of file core.php */
/* Location: ./application/controllers/core.php */