<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//error_reporting(1);
//ini_set('display_errors', E_all);

	class Admin extends CI_Controller
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->database();
			$this->load->helper('url');
      $this->load->helper('date');
			$this->load->helper('url','form');
      $this->load->library("pagination");
      $this->load->library("session");
      $this->load->library('email');
      $this->load->library('form_validation');
      $this->load->helper(array('url','html','form'));
      $this->load->helper('form');
      $this->perPage = 5;
       $this->load->model('Admin_model');
 
        
		}
    public function index()
    {
       if($this->session->userdata('admin') == '')  
      { 
        $this->load->view('admin/login');
      }
      else  
      {  
        redirect($this->config->item('base_url').'admin/dashboard');  
      }
      
    } 
    public function register()
    {
      
       $this->load->view('admin/register');
      
    }      
    public function login_form()
    {
      $data = $this->input->post();
         
          $email= $data['email'];
          $password=$data['password'];

          $result=$this->Admin_model->login($email,$password);  
          if ($result)  
          {         
                  $test=$this->session->set_userdata('admin',$result);  

                  $admin=$this->session->userdata('admin');
               
                  echo json_encode(array('status'=>"success",'message'=>$result));
  
          }
          else
          {
             echo json_encode(array('status'=>'fail','message'=>$result));
          }  

    } 

    public function register_form()
    {
     

          $email = $this->input->post("user_email");

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           
             echo json_encode(array('status'=>'fail','message'=>"Please enter valid Email address"));

            }
            else{
               $data = $this->input->post();
               $result=$this->Admin_model->register($data);  

              if ($result >0)  
              {         
                echo json_encode(array('status'=>"success",'message'=>"User Registered Successfully"));
      
              }
              elseif($result<=0)
              {
                 echo json_encode(array('status'=>'fail','message'=>"User already exist"));
              }
            } 
            

    } 
    public function dashboard()
    {
      if($this->session->userdata('admin')!= '')  
      { 
        $this->load->view('admin/dashboard');
      }
      else  
      {  
        redirect($this->config->item('base_url').'admin');  
      }
       
    }
    public function add_movie()
    {
        $data=$this->input->post();
       $result=$this->Admin_model->add_movie($data);
       if ($result >0)  
              {         
                echo json_encode(array('status'=>1,'message'=>"Movie added Successfully"));
      
              }
              elseif($result<=0)
              {
                 echo json_encode(array('status'=>0,'message'=>"Movie already exist"));
              }
      
    }
    public function update_movie()
    {
        $data=$this->input->post();
        
       $result=$this->Admin_model->update_movie($data);
       if ($result==true)  
              {         
                echo json_encode(array('status'=>1,'message'=>"Movie updated Successfully"));
      
              }
              elseif($result<=0)
              {
                 echo json_encode(array('status'=>0,'message'=>"Movie already exist"));
              }
      
    }
    public function manage_movies()
    {
       $test=$this->session->userdata('admin');
            
      
       if($test)
       {
         $this->load->view('admin/Movies'); 
       }
       else  
       {  
        redirect($this->config->item('base_url').'admin'); 
       }
      
    }
    public function fetch_order_data()
     {
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));


          $books = $this->Admin_model->fetch_movies_data();

          $data = array();
          $i = 0;
          foreach($books->result() as $r) {
            $i++;
               $data[] = array(
                    $i,
                    $r->movie_name,
                    $r->rating,
                    $r->release_date,
                    '<a href="#" class="update" data-id='.$r->movie_id.' data-movie_name='.$r->movie_name.' data-rating='.$r->rating.' data-release_date='.$r->release_date.' data-toggle="modal" data-target="#update_category_popup"><img src="/assets_admin/Parking_files/icon_edit.png?v2" alt="Edit"></a>',
                   "<button type='button' name='delete' id=".$r->movie_id." class='btn btn-danger btn-xs delete'>Delete</button>"
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $books->num_rows(),
                 "recordsFiltered" => $books->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          exit();
     }
     public function delete_movie()
      {
        $movie_id=$this->input->post('user_id');
        $result=$this->Admin_model->delete_movie($movie_id); 
                                                               
      echo json_encode($result);  

        
      }
     
    public function logout()
    {

      $this->session->unset_userdata('admin');
      redirect($this->config->item('base_url').'Admin');
    }
    

    
}