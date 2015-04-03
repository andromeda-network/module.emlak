<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ofis extends Public_Controller {

	public function __construct()
	{
        parent::__construct();

		if($this->method != "install" && $this->method != "remove") {
			$module = $this->core_model->get_by_path('emlak');

			if (count($module) == 0) {
				redirect(base_url('core/error/404'));
			}
		}

		$this->load->model('emlak_model');

	}

	public function install()
	{
		$this->level_check(1);

		$this->db->query('CREATE TABLE IF NOT EXISTS `emlak_ofisleri` (
		  `id` int(11) NOT NULL,
		  `ofis_adi` varchar(255) DEFAULT NULL,
		  `ofis_logo` varchar(255) DEFAULT NULL,
		  `created_at` datetime NOT NULL,
		  `updated_at` datetime DEFAULT NULL
		) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8');

		$this->db->query('ALTER TABLE `emlak_ofisleri` ADD PRIMARY KEY (`id`)');
		$this->db->query('ALTER TABLE `emlak_ofisleri` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT');

		$this->db->query('CREATE TABLE IF NOT EXISTS `emlak_ofis_calisanlari` (
		  `id` int(11) NOT NULL,
		  `user_id` INT NULL,
		  `ofis_id` INT NULL,
		  `type` INT NULL
		 ) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8');


		$this->db->query('ALTER TABLE `emlak_ofis_calisanlari` ADD PRIMARY KEY (`id`)');
		$this->db->query('ALTER TABLE `emlak_ofis_calisanlari` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT');

		$this->db->query('CREATE TABLE IF NOT EXISTS `emlak_ofisi_ilanlari` (
			  `id` int(11) NOT NULL,
			  `ofis_id` int(11) DEFAULT NULL,
			  `user_id` int(11) DEFAULT NULL,
			  `ilan_baslik` varchar(255) DEFAULT NULL,
			  `emlak_fiyat` varchar(45) DEFAULT NULL,
			  `konum_ulke` varchar(255) DEFAULT NULL,
			  `konum_sehir` varchar(255) DEFAULT NULL,
			  `konum_ilce` varchar(255) DEFAULT NULL,
			  `konum_mahalle` varchar(255) DEFAULT NULL,
			  `ilan_no` int(11) DEFAULT NULL,
			  `ilan_tarihi` datetime DEFAULT NULL,
			  `emlak_tipi` int(11) DEFAULT NULL,
			  `emlak_metrekare` int(11) DEFAULT NULL,
			  `emlak_oda_sayisi` int(11) DEFAULT NULL,
			  `emlak_banyo_sayisi` int(11) DEFAULT NULL,
			  `emlak_bina_yasi` int(11) DEFAULT NULL,
			  `emlak_kat_sayisi` int(11) DEFAULT NULL,
			  `emlak_bulundugu_kat` int(11) DEFAULT NULL,
			  `emlak_aidat` decimal(45,0) DEFAULT NULL,
			  `emlak_isitma` varchar(255) DEFAULT NULL,
			  `emlak_esyali` tinyint(1),
			  `emlak_kullanim_durumu` varchar(45) DEFAULT NULL,
			  `emlak_site_icersinde` tinyint(1),
			  `emlak_krediye_uygun` tinyint(1),
			  `emlak_takas` tinyint(1),
			  `emlak_aciklama` varchar(200) DEFAULT NULL,
			  `emlak_harita_enlem` varchar(45) DEFAULT NULL,
			  `emlak_harita_boylam` varchar(45) DEFAULT NULL,
			  `ozellikler_cephe_bati` tinyint(1) DEFAULT NULL,
			  `ozellikler_cephe_dogu` tinyint(1),
			  `ozellikler_cephe_guney` tinyint(1),
			  `ozellikler_cephe_kuzey` tinyint(1),
			  `ozellikler_ic_adsl` tinyint(1),
			  `ozellikler_ic_ahsap_dograma` tinyint(1),
			  `ozellikler_ic_alarm_hirsiz` tinyint(1),
			  `ozellikler_ic_alarm_yangin` tinyint(1),
			  `ozellikler_ic_amerikan_mutfak` tinyint(1),
			  `ozellikler_ic_ankastre_firin` tinyint(1),
			  `ozellikler_ic_balkon` tinyint(1),
			  `ozellikler_ic_barbeku` tinyint(1),
			  `ozellikler_ic_beyaz_esya` tinyint(1),
			  `ozellikler_ic_boyali` tinyint(1),
			  `ozellikler_ic_bulasik_makinesi` tinyint(1),
			  `ozellikler_ic_buzdolabi` tinyint(1),
			  `ozellikler_ic_duvar_kagidi` tinyint(1),
			  `ozellikler_ic_dusakabin` tinyint(1),
			  `ozellikler_ic_ebeveyn_banyosu` tinyint(1),
			  `ozellikler_ic_fiber_internet` tinyint(1),
			  `ozellikler_ic_firin` tinyint(1),
			  `ozellikler_ic_giyinme_odasi` tinyint(1),
			  `ozellikler_ic_gomme_dolap` tinyint(1),
			  `ozellikler_ic_goruntulu_diyafon` tinyint(1),
			  `ozellikler_ic_hilton_banyo` tinyint(1),
			  `ozellikler_ic_intercom_sistemi` tinyint(1),
			  `ozellikler_ic_isicam` tinyint(1),
			  `ozellikler_ic_jakuzi` tinyint(1),
			  `ozellikler_ic_kartonpiyer` tinyint(1),
			  `ozellikler_ic_kiler` tinyint(1),
			  `ozellikler_ic_klima` tinyint(1),
			  `ozellikler_ic_laminant_zemin` tinyint(1),
			  `ozellikler_ic_marley` tinyint(1),
			  `ozellikler_ic_mobilya` tinyint(1),
			  `ozellikler_ic_mutfak_ankastre` tinyint(1),
			  `ozellikler_ic_mutfak_laminat` tinyint(1),
			  `ozellikler_ic_mutfak_dogalgazi` tinyint(1),
			  `ozellikler_ic_pvc_dograma` tinyint(1),
			  `ozellikler_ic_panjur` tinyint(1),
			  `ozellikler_ic_parke_zemin` tinyint(1),
			  `ozellikler_ic_sauna` tinyint(1),
			  `ozellikler_ic_seramik_zemin` tinyint(1),
			  `ozellikler_ic_set_ustu_ocak` tinyint(1),
			  `ozellikler_ic_spot_aydinlatma` tinyint(1),
			  `ozellikler_ic_teras` tinyint(1),
			  `ozellikler_ic_wifi` tinyint(1),
			  `ozellikler_ic_camasir_makinesi` tinyint(1),
			  `ozellikler_ic_camasir_odasi` tinyint(1),
			  `ozellikler_ic_celik_kapi` tinyint(1),
			  `ozellikler_ic_sofben` tinyint(1),
			  `ozellikler_ic_somine` tinyint(1),
			  `ozellikler_dis_asansor` tinyint(1),
			  `ozellikler_dis_engelliye_uygun` tinyint(1),
			  `ozellikler_dis_guvenlik` tinyint(1),
			  `ozellikler_dis_hidrafor` tinyint(1),
			  `ozellikler_dis_isi_yalitim` tinyint(1),
			  `ozellikler_dis_jenerator` tinyint(1),
			  `ozellikler_dis_kablotv_uydu` tinyint(1),
			  `ozellikler_dis_kapali_garaj` tinyint(1),
			  `ozellikler_dis_kapici` tinyint(1),
			  `ozellikler_dis_kres` tinyint(1),
			  `ozellikler_dis_otopark` tinyint(1),
			  `ozellikler_dis_oyun_parki` tinyint(1),
			  `ozellikler_dis_ses_yalitimi` tinyint(1),
			  `ozellikler_dis_siding` tinyint(1),
			  `ozellikler_dis_spor_alani` tinyint(1),
			  `ozellikler_dis_su_deposu` tinyint(1),
			  `ozellikler_dis_tenis_kortu` tinyint(1),
			  `ozellikler_dis_yangin_merdiveni` tinyint(1),
			  `ozellikler_dis_yuzme_havuzu_acik` tinyint(1),
			  `ozellikler_dis_yuzme_havuzu_kapali` tinyint(1),
			  `ozellikler_muhit_alisveris_merkezi` tinyint(1),
			  `ozellikler_muhit_belediye` tinyint(1),
			  `ozellikler_muhit_cami` tinyint(1),
			  `ozellikler_muhit_cemevi` tinyint(1),
			  `ozellikler_muhit_denize_sifir` tinyint(1),
			  `ozellikler_muhit_eczane` tinyint(1),
			  `ozellikler_muhit_eglence_merkezi` tinyint(1) DEFAULT NULL,
			  `ozellikler_muhit_fuar` tinyint(1),
			  `ozellikler_muhit_hastane` tinyint(1),
			  `ozellikler_muhit_havra` tinyint(1),
			  `ozellikler_muhit_klise` tinyint(1),
			  `ozellikler_muhit_lise` tinyint(1),
			  `ozellikler_muhit_market` tinyint(1),
			  `ozellikler_muhit_park` tinyint(1),
			  `ozellikler_muhit_polis_merkezi` tinyint(1),
			  `ozellikler_muhit_saglik_ocagi` tinyint(1),
			  `ozellikler_muhit_semt_pazari` tinyint(1),
			  `ozellikler_muhit_spor_salonu` tinyint(1),
			  `ozellikler_muhit_universite` tinyint(1),
			  `ozellikler_ulasim_anayol` tinyint(1),
			  `ozellikler_ulasim_bogaz_kopruleri` tinyint(1),
			  `ozellikler_ulasim_cadde` tinyint(1),
			  `ozellikler_ulasim_deniz_otobusu` tinyint(1),
			  `ozellikler_ulasim_dolmus` tinyint(1),
			  `ozellikler_ulasim_e5` tinyint(1),
			  `ozellikler_ulasim_havaalani` tinyint(1),
			  `ozellikler_ulasim_marmaray` tinyint(1),
			  `ozellikler_ulasim_metro` tinyint(1),
			  `ozellikler_ulasim_metrobus` tinyint(1),
			  `ozellikler_ulasim_minubus` tinyint(1),
			  `ozellikler_ulasim_otobus_duragi` tinyint(1),
			  `ozellikler_ulasim_sahil` tinyint(1),
			  `ozellikler_ulasim_tem` tinyint(1),
			  `ozellikler_ulasim_tramvay` tinyint(1),
			  `ozellikler_ulasim_tren_istasyonu` tinyint(1),
			  `ozellikler_ulasim_iskele` tinyint(1),
			  `ozellikler_manzara_bogaz` tinyint(1),
			  `ozellikler_manzara_deniz` tinyint(1),
			  `ozellikler_manzara_doga` tinyint(1),
			  `ozellikler_manzara_gol` tinyint(1),
			  `ozellikler_manzara_sehir` tinyint(1),
			  `ozellikler_konut_ara_kat_dubleks` tinyint(1),
			  `ozellikler_konut_bahce_dubleks` tinyint(1),
			  `ozellikler_konut_bahce_kati` tinyint(1),
			  `ozellikler_konut_bahceli` tinyint(1),
			  `ozellikler_konut_mustakil_girisli` tinyint(1),
			  `ozellikler_konut_tripleks` tinyint(1),
			  `ozellikler_konut_cati_dubleksi` tinyint(1)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8');

		$this->db->query('ALTER TABLE `emlak_ofisi_ilanlari` ADD PRIMARY KEY (`id`)');
		$this->db->query('ALTER TABLE `emlak_ofisi_ilanlari` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT');

		$this->db->insert('modules', array('module_name'=>'Emlak', 'module_path'=>'emlak', 'status'=>true));
		mkdir(FCPATH.'/public/uploads/emlak/', 0777, true);


		redirect(base_url('core/module-manager'));
	}

	public function remove()
	{
		$this->level_check(1);

		$this->db->query("DROP TABLE IF EXISTS `emlak_ofisleri`");
		$this->db->query("DROP TABLE IF EXISTS `emlak_ofis_calisanlari`");
		$this->db->query("DROP TABLE IF EXISTS `emlak_ofisi_ilanlari`");

		$this->db->where('module_path', 'emlak');
		$this->db->delete('modules');

		@rmdir(FCPATH.'/public/uploads/emlak/');

		redirect(base_url('core/module-manager'));
	}

	public function dashboard()
	{
		$data = null;
		$this->blade->render('emlak/ofis/dashboard', $data);
	}

	// list users
	public function index()
	{
		$this->perm_check("/emlak/ofis/index");

		$data['ofisler'] = $this->emlak_model->all();
		$this->blade->render('emlak/ofis/list', $data);
	}

	public function show()
	{
		$this->perm_check("/emlak/ofis/show");

		echo 'show';
	}

	// load create user view
	public function create()
	{
		$this->perm_check("/emlak/ofis/create");

		$this->blade->render('emlak/ofis/create');
	}

	// save new user to db
	public function store()
	{
		$this->perm_check("/emlak/ofis/create");

		$data['ofis_adi'] 	= $this->input->post('ofis_adi');

		$data['created_at'] = date('Y-m-d H:i:s', time());
		$data['updated_at'] = null;

		$save = $this->db->insert('emlak_ofisleri', $data);
		$ofisId = $this->db->insert_id();

		$yetkililer = array();
		for($i=0; $i<count($this->input->post('yetkili_level')); $i++) {
			$yetkililer[$i]['user_id'] 	= $this->input->post('yetkili_id')[$i]; 
			$yetkililer[$i]['type'] 		= $this->input->post('yetkili_level')[$i]; 
			$yetkililer[$i]['ofis_id'] 	= $ofisId; 
		}

		$save = $this->db->insert_batch('emlak_ofis_calisanlari', $yetkililer);
		redirect(base_url('emlak/ofis'));
	}

	// load edit user view
	public function edit($id)
	{
		$this->perm_check("/emlak/ofis/edit");

		$data['yetkililer'] = $this->db->select('*')->where('ofis_id', $id)->get('emlak_ofis_calisanlari')->result();

		$data['ofis'] = $this->emlak_model->get_by_id($id);
		$this->blade->render('emlak/ofis/edit', $data);
	}

	// save edited user to db
	public function update($id)
	{
		$this->perm_check("/emlak/ofis/edit");

		$data['ofis_adi'] = $this->input->post('ofis_adi');
		$data['updated_at'] = date('Y-m-d H:i:s', time());

		$this->db->where('id', $id);
		$save = $this->db->update('emlak_ofisleri', $data);

		$this->db->where('ofis_id', $id);
		$this->db->delete('emlak_ofis_calisanlari');

		$yetkililer = array();
		for($i=0; $i<count($this->input->post('yetkili_level')); $i++) {
			$yetkililer[$i]['user_id'] 	= $this->input->post('yetkili_id')[$i]; 
			$yetkililer[$i]['type'] 	= $this->input->post('yetkili_level')[$i]; 
			$yetkililer[$i]['ofis_id'] 	= $id; 
		}

		$save = $this->db->insert_batch('emlak_ofis_calisanlari', $yetkililer);

		redirect(base_url('emlak/ofis'));
	}

	// save edited user to db
	public function destroy($id)
	{
		$this->perm_check("/emlak/ofis/destroy");

		$this->db->where('id', $id);
		$this->db->delete('emlak_ofisleri');

		$this->db->where('ofis_id', $id);
		$this->db->delete('emlak_ofis_calisanlari');
		
		redirect(base_url('emlak/ofis'));
	}





	
}

/* End of file core.php */
/* Location: ./application/controllers/core.php */