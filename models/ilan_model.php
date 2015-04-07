<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class ilan_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function all()
    {
        return $this->db->select('*')
        ->from('emlak_ofisi_ilanlari')
        ->get()
        ->result();
    }

    function get_by_id($id)
    {
        return $this->db->select('*')
        ->from('emlak_ofisi_ilanlari')
        ->where('id', $id)
        ->get()
        ->row();
    }

}