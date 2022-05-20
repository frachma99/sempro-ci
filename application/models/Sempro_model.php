<?php
class Sempro_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function create_sempro($upload_acc, $upload_proposal)
	{

		$data = array(
			'name' => $this->input->post('name'),
			'nim' => $this->input->post('nim'),
			'email' => $this->input->post('email'),
			'telp_no' => $this->input->post('telp_no'),
			'lecturer_mpti' => $this->input->post('lecturer_mpti'),
			'lecturer_sempro' => $this->input->post('lecturer_sempro'),
			'upload_acc' => $upload_acc,
			'proposal_title' => $this->input->post('proposal_title'),
			'upload_proposal' => $upload_proposal,
			'is_acc' => 0
		);

		return $this->db->insert('sempro', $data);
	}

	public function notif_create()
	{

		$notif = array(
			'title' => 'Pendaftar Sempro Ditambahkan',
			'message' => $this->input->post('name') . ' mendaftarkan dirinya pada tanggal ' . date('d-M-Y'),
			'is_read' => 0
		);

		$this->db->insert('notification', $notif);
	}

	public function get_sempros()
	{
		$query = $this->db->get('sempro');
		return $query->result_array();
	}

	public function get_sempro($id)
	{
		$query = $this->db->get_where('sempro',  ['id' => $id]);
		return $query->row_array();
	}

	public function delete_sempro($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('sempro');
		return true;
	}

	public function notif_delete($id)
	{
		$sempro = $this->db->get_where('sempro', ['id' => $id])->row_array();

		$notif = array(
			'title' => 'Pendaftar Sempro Dihapus',
			'message' => 'Pendaftar ' . $sempro['name'] . ' berhasil dihapus pada tanggal ' . date('d-M-Y'),
			'is_read' => 0
		);
		$this->db->insert('notification', $notif);
	}

	public function create_comment($sempro_id)
	{
		$data = array(
			'sempro_id' => $sempro_id,
			'body' => $this->input->post('body')
		);

		return $this->db->insert('comments', $data);
	}

	public function get_comments($sempro_id)
	{
		$query = $this->db->get_where('comments', array('sempro_id' => $sempro_id));
		return $query->result_array();
	}
}
