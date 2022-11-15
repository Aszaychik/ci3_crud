<?php 
class Blog extends CI_Controller{
  public function index($name, $age){
    $data['name'] = $name;
    $data['age'] = $age;
    $this->load->view('blog',$data);
  }
} 
?>