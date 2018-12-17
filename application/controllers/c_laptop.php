<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_laptop extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("cart");
		$this->load->library("session");
	}

	public function index()
	{
		$this->load->model('m_laptop');
		$data=$this->m_laptop->getAll();
		$dulieu['listlaptop']=$data;
		$this->load->view('quanly/v_home', $dulieu);
	}

	public function webview()
	{
		$this->load->model('m_laptop');
		$data=$this->m_laptop->getAll();
		$dulieu['listlaptop']=$data;
		$this->load->view('web/v_giaodien', $dulieu);
	}
	public function webfullview($id)
	{
		$this->load->model('m_laptop');
		$record=$this->m_laptop->getById($id);
		$dulieu['listlaptop']=$record;
		$this->load->view('web/v_sanpham',$dulieu);
	}

	public function themview()
	{
		$this->load->view('quanly/v_them');
	}

	

	 public function them()
	{
		$this->load->model('m_laptop');
		$hangsanxuat=$this->input->post('hangsanxuat');
		$ten=$this->input->post('ten');
		$qty=$this->input->post('qty');
		$gia=$this->input->post('gia');
		$hedieuhanh=$this->input->post('hedieuhanh');
		$pin=$this->input->post('pin');
		$khoiluong=$this->input->post('khoiluong');
		$kichthuoc=$this->input->post('kichthuoc');
		$CPU=$this->input->post('CPU');
		$RAM=$this->input->post('RAM');
		$manhinh=$this->input->post('manhinh');
		$chipdohoa=$this->input->post('chipdohoa');
		$SSD=$this->input->post('SSD');
		$HDD=$this->input->post('HDD');
		$Keyboard=$this->input->post('Keyboard');
		$congketnoi=$this->input->post('congketnoi');
		$ketnoikoday=$this->input->post('ketnoikoday');
		$sokhecam=$this->input->post('sokhecam');
		$webcam=$this->input->post('webcam');
		$avatar = $this->upload_avatar();
		
		

		$id=$this->m_laptop->Insert($hangsanxuat,$ten,$qty,$gia,$hedieuhanh,$pin,$khoiluong,$kichthuoc,$CPU,$RAM,$manhinh,$chipdohoa,$SSD,$HDD,$Keyboard,$congketnoi,$ketnoikoday,$sokhecam,$webcam,$avatar);
		if ($id) {
		 	$data=$this->m_laptop->getAll();
			$dulieu['listlaptop']=$data;
             echo '<script  type="text/javascript">alert("Thêm Thành công  ")</script>';
			$this->load->view('quanly/v_home',$dulieu);

			

		 }else {
		 	echo '<script  type="text/javascript">alert("Thêm Thất bại")</script>';
           	$data=$this->m_laptop->getAll();
			$dulieu['listlaptop']=$data;
			$this->load->view('quanly/v_home',$dulieu);
		 }
	}

	public function upload_avatar()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( ! $this->upload->do_upload('avatar')){
			$error = array('error' => $this->upload->display_errors());
			echo '<pre>';
			print_r($error);
			echo '</pre>';
			die;
		}else{
			return "uploads/".$this->upload->data()['file_name'];
		}
	}

	public function xoa($id)
	{
		$this->load->model('m_laptop');
		if ($id) {
			$this->m_laptop->Delete($id);
			$data=$this->m_laptop->getAll();
			$dulieu['listlaptop']=$data;
			echo '<script  type="text/javascript">alert("Xóa Thành công")</script>';
			$this->load->view('quanly/v_home',$dulieu);
		}else {
			echo '<script  type="text/javascript">alert("Xóa Không thành công")</script>';
			 $data=$this->m_laptop->getAll();
			 $dulieu['listlaptop']=$data;
			 $this->load->view('quanly/v_home',$dulieu);
		}
	}
	public function capnhat()
	{
	    $id=$this->input->post('id');
		$hangsanxuat=$this->input->post('hangsanxuat');
		$ten=$this->input->post('ten');
		$qty=$this->input->post('qty');
		$gia=$this->input->post('gia');
		$hedieuhanh=$this->input->post('hedieuhanh');
		$pin=$this->input->post('pin');
		$khoiluong=$this->input->post('khoiluong');
		$kichthuoc=$this->input->post('kichthuoc');
		$CPU=$this->input->post('CPU');
		$RAM=$this->input->post('RAM');
		$manhinh=$this->input->post('manhinh');
		$chipdohoa=$this->input->post('chipdohoa');
		$SSD=$this->input->post('SSD');
		$HDD=$this->input->post('HDD');
		$Keyboard=$this->input->post('Keyboard');
		$congketnoi=$this->input->post('congketnoi');
		$ketnoikoday=$this->input->post('ketnoikoday');
		$sokhecam=$this->input->post('sokhecam');
		$webcam=$this->input->post('webcam');
		$avatar = $this->upload_avatar();

		$this->load->model('m_laptop');
        $id1=$this->m_laptop->Updates($id,$hangsanxuat,$ten,$qty,$gia,$hedieuhanh,$pin,$khoiluong,$kichthuoc,$CPU,$RAM,$manhinh,$chipdohoa,$SSD,$HDD,$Keyboard,$congketnoi,$ketnoikoday,$sokhecam,$webcam,$avatar);
        if($id1==null){

         	$data=$this->m_laptop->getAll();
         	$dulieu['listlaptop']=$data;
         		             echo '<script  type="text/javascript">alert("Cập nhật Thành công")</script>';
         	$this->load->view('quanly/v_home',$dulieu);
         }else{
         			             echo '<script  type="text/javascript">alert("Cập nhật thất bại")</script>';
         }
	}

	public function capnhatview($id)
	{
		$this->load->model('m_laptop');
		$record = $this->m_laptop->getById($id);
		$dulieu['listlaptop'] = $record;
		$this->load->view('quanly/v_sua', $dulieu);
	

	}
	public function fullview($id)
	{
		$this->load->model('m_laptop');
		$record=$this->m_laptop->getById($id);
		$dulieu['listlaptop']=$record;
		$this->load->view('quanly/v_full',$dulieu);
	}

	public function timkiemview()
	{
		$this->load->model('m_laptop');
		$key = $this->input->post('ten');
		$ss=$this->m_laptop->search($key);
		$dulieu['listlaptop']=$ss;
		$this->load->view('quanly/v_timkiem', $dulieu);
	}

	public function timkiemwebview()
	{
		$this->load->model('m_laptop');
		$key = $this->input->post('hangsanxuat');
		$ss=$this->m_laptop->search($key);
		$dulieu['listlaptop']=$ss;
		$this->load->view('web/v_timkiemweb', $dulieu);
	}

	function themgiohang()
        {
            $insert_data = array(
                'id' => $this->input->post('id'),
                'hangsanxuat' => $this->input->post('hangsanxuat'),
                'ten' => $this->input->post('ten'),
                'qty' => 1,
                'gia' => $this->input->post('gia') 
            );
        if($this->cart->insert($insert_data)){
             echo "Them san pham thanh cong";
        }else{
            echo "Them san pham that bai";
        }
        #redirect('c_laptop/webview');
        }
        public function giohang()
    {

		$this->load->model('m_laptop');
    	$cartdata = $this->cart->contents();
    	$dulieu['listlaptop']=$cartdata;
        $this->load->view('web/v_giohang', $dulieu);
    }
	
	public function themTaiKhoan(){
		$this->load->model('m_laptop');
		$username=$this->input->post('username');
		$pass=$this->input->post('pass');
		$dk = $this->m_laptop->dangky($username,$pass);
		if ($dk) {
		 	$data=$this->m_laptop->getAll();
			$dulieu['listlaptop']=$data;
             echo '<script  type="text/javascript">alert("Đăng ký Thành công  ")</script>';
			$this->load->view('web/v_giaodien',$dulieu);

			

		 }else {
		 	echo '<script  type="text/javascript">alert("Thêm Thất bại")</script>';
           	$data=$this->m_laptop->getAll();
			$dulieu['listlaptop']=$m_laptop;
			$this->load->view('web/v_giaodien',$dulieu);
		 }
	}
	public function themTaiKhoanview()
	{
		$this->load->view('web/v_dangky');
	}

	public function dangnhap(){
		$this->load->view('web/v_dangnhap');
	}
	public function dangxuat()
	{
		$this->load->view('web/v_dangxuat');
	}

	

}

/* End of file c_laptop.php */
/* Location: ./application/controllers/c_laptop.php */