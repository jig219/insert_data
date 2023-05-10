<?php 
    
class home extends CI_Controller
{
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Home_model');
            $this->load->library('session');
            $this->load->helper('url_helper');
        }
        public function index(){
            $this->load->view('index');
        }

     
       

        public function add(){

           
            $data =  array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'), 
                'password' => $this->input->post('password')
               
            );
                

            $ins = $this->db->insert('user',$data);
            if($ins){
            $this->session->set_flashdata('success','Data Added Successfull....!');
            redirect(base_url('home/select'));
            }else{
            $this->session->set_flashdata('error','Data Error ....!');
            redirect(base_url('home/select'));
            }

        }
        public function select(){

        	 $data['abc'] = $this->db->get('user')->result_array();
            $this->load->view('select',$data);
        }
        public function delete($id){
            $this->db->where('id',$id);
            $del = $this->db->delete('user');

            
            if($del){
            $this->session->set_flashdata('success','Data Deleted Successfull....!');
            redirect(base_url('home/select'));
            }else{
                $this->session->set_flashdata('error','Data Error Successfull....!');
            redirect(base_url('home/select'));
            }

        }

    public function edit($id)
        {
           $this->load->helper('form');
           $this->load->library('form_validation');
    

          $query = $this->db->get_where('user', array('id' => $id))->row_array();
        
          $this->form_validation->set_rules('name', 'Name', 'required');
 
          if ($this->form_validation->run() === FALSE)
          {
          $data['user'] = $this->db->get_where('user',array('id' => $id))->row();
          
          $this->load->view('edit.php',$data);
         
 
          }
        else
        {
             $data = array(
    
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'), 
                'password' => $this->input->post('password')
                
            );
           

            $this->db->where('id',$id);
            $this->db->update('user', $data);
            redirect(base_url('home/select'));

           }
     }
        



 }
