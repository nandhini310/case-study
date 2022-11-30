<?php

	class Admin_model extends CI_MODEL
	{
		public function __construct()
		{
			parent:: __construct();
			$this->load->database();
		}

		public function index(){
		}

		public function login($email,$password)
		{			

			$que=$this->db->query("select * from users where email='$email' and password='$password'");
			
				
			$row = $que->num_rows();
			
			if($row>=1)
			{
				//$data=$row;
				return $que->result();

			}	
			
		}
		public function register($data)
		{			
            
            $datas=array(
             "username"=>$data['user_name'],
             "password"=>$data['re_pass'],
             "mobile"=>$data['user_contact'],
             "email"=>$data['user_email'],
             "created_at"=>date('Y-m-d H:i:s'),
             "status"=>"1"	


            );
			$this->tableName = 'users';
		    $this->primaryKey = 'user_id';
		     $mail=$data['user_email'];
		   $query = $this->db->query("select * from users where email = '$mail'"); 
		   if($query->num_rows() > 0)
           {
           	return 0;
           }
           else{
           	  $insert = $this->db->insert($this->tableName,$datas);
                return $this->db->insert_id();
           }          
		    
		    
		   
			
		}
           public function update_movie($data)
           {
           	$datas = [
              'movie_name' => $data["movie_name_update"],
              'release_date' => $data["release_date_update"],
              'rating' => $data["rating_update"]
	        ];
	        $this->db->where('movie_id', $data["movie_id_update"]);
	        return $this->db->update('movies', $datas);
           }
		public function add_movie($data)
		{			
            
            $datas=array(
             "movie_name"=>$data['movie_name'],
             "rating"=>$data['rating'],
             "release_date"=>$data['release_date']
            );
			$this->tableName = 'movies';
		    $this->primaryKey = 'movie_id';
		     $movie_name=$data['movie_name'];
		   $query = $this->db->query("select * from movies where movie_name = '$movie_name'"); 
		   if($query->num_rows() > 0)
           {
           	return 0;
           }
           else{
           	  $insert = $this->db->insert($this->tableName,$datas);
                return $this->db->insert_id();
           }          
		    
		    
		   
			
		}
		public function fetch_movies_data() 
          {
 	
		   $query="SELECT * FROM movies";
		    
		 	
		    return $this->db->query($query);
 
		  }
		  public function delete_movie($movie_id) 
          {
 	
		   $query="DELETE FROM movies WHERE movie_id=$movie_id";
		    
		 	
		    return $this->db->query($query);
 
		  }
		  
		
	}