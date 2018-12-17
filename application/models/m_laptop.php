<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_laptop extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		
	}
	public function getAll()
	{
		$data=$this->db->get('laptop');
		$data=$data->result_array();
         return $data;
	}
	
	public function getById($id)
	{
		$this->db->where('id',$id);
		$record=$this->db->get('laptop');
		return $record->result_array();
	}
	public function Insert($hangsanxuat,$ten,$qty,$gia,$hedieuhanh,$pin,$khoiluong,$kichthuoc,$CPU,$RAM,$manhinh,$chipdohoa,$SSD,$HDD,$Keyboard,$congketnoi,$ketnoikoday,$sokhecam,$webcam,$avatar)
	{
		$object=['hangsanxuat'=>$hangsanxuat,'ten'=>$ten,'qty'=>$qty,'gia'=>$gia,'hedieuhanh'=>$hedieuhanh,'pin'=>$pin,'khoiluong'=>$khoiluong,'kichthuoc'=>$kichthuoc,'CPU'=>$CPU,'RAM'=>$RAM,'manhinh'=>$manhinh,'chipdohoa'=>$chipdohoa,'SSD'=>$SSD,'HDD'=>$HDD,'Keyboard'=>$Keyboard,'congketnoi'=>$congketnoi,'ketnoikoday'=>$ketnoikoday,'sokhecam'=>$sokhecam,'webcam'=>$webcam,'avatar'=>$avatar];
		$this->db->insert('laptop', $object);
		return $this->db->insert_id();
	}
	public function Delete($id)
	{

		$this->db->where('id', $id);
        $del=$this->db->delete('laptop');
        return $del; 
	}
	public function Updates($id,$hangsanxuat,$ten,$qty,$gia,$hedieuhanh,$pin,$khoiluong,$kichthuoc,$CPU,$RAM,$manhinh,$chipdohoa,$SSD,$HDD,$Keyboard,$congketnoi,$ketnoikoday,$sokhecam,$webcam,$avatar)
	{
		# code...
		$data = array( 
	   'id' => $id,
	   'hangsanxuat' => $hangsanxuat, 
	   'ten' => $ten,
	   'qty' => $qty,
	   'gia'=>$gia,
	   'hedieuhanh'=>$hedieuhanh,
	   'pin'=>$pin,
	   'khoiluong'=>$khoiluong,
	   'kichthuoc'=>$kichthuoc,
	   'CPU'=>$CPU,
	   'RAM' => $RAM,
	   'manhinh' => $manhinh,
	   'chipdohoa' => $chipdohoa,
	   'SSD' => $SSD,
	   'HDD' => $HDD,
	   'Keyboard' => $Keyboard,
	   'congketnoi' => $congketnoi,
	   'ketnoikoday' => $ketnoikoday,
	   'sokhecam' => $sokhecam,
	   'webcam' => $webcam,
	   'avatar' => $avatar
	   ); 

	$this->db->set($data); 
	$this->db->where("id",$id); 
	$this->db->update("laptop", $data);


	}

	public function search($key)
	{
		$this->db->like('hangsanxuat', $key);
		$query = $this->db->get('laptop');
		return $query->result_array();
	}


	public function dangky($username,$pass)
	{
		$object=['username'=>$username,'pass'=>$pass];
		$this->db->insert('dangnhap', $object);
		return $this->db->insert_id();
	}



}



/* End of file m_laptop.php */
/* Location: ./application/models/m_laptop.php */