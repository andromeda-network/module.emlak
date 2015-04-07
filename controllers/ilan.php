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
		$this->blade->render('emlak/ilan/create');
	}

	// yeni oluşturulan ilanı kaydet
	public function store()
	{

	}

	// ilan düzenleme ekranını göster
	public function edit($id)
	{

	}

	// değişiklikleri veritabanına kaydet
	public function update($id)
	{

	}

	// ilan sil
	public function destroy($id)
	{

	}






}

/* End of file core.php */
/* Location: ./application/controllers/core.php */