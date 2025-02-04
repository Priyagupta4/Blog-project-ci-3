<?php
class Admin extends My_Controller
{
    
// here replace the index as login function bcoz already this fun is created in users controller
    public function login(){
        // for using form validtaion load the libraray
        // $this->load->library('form_validation');
        // echo "<h1>Welcome to admin portal </h1> ";
        // echo "<h2>All Merchant Transcations </h2> ";
        //self
        $this->form_validation->set_rules('uname', 'User Name','required|alpha');
        $this->form_validation->set_rules('pass','User Password','required|max_length[12]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>'); //give the danger mark used for all form fieilds

        //run function used to run the validationsa n check if true then show validation succesfull
        if($this->form_validation->run()){
        //    echo "Validation authentication successfully done";
        // USED CORE PHP TECHNIQUE TO rrecive the php login form data submit ,uname,pass taken from view name attribute
        // if(isset($_POST['submit']))
        //  {
        // $uname= $_POST['uname'];
        // $pass= $_POST['pass'];
        // so here ci-3 given input class to recive post data
        // $uname=$this->input->post('uname');
        // $pass=$this->input->post('pass');
        // echo "Username is ".$uname."</br>"."Password is ".$pass;
        //  }
        // now will learn how we can intereact with db directly by matching db table by creating model
        //kept this variable data for read by model isvalidate fun
        $uname=$this->input->post('uname'); //uname n pass taken from ui
        $pass=$this->input->post('pass');
       // $hashed_pass =md5($pass);
        $this->load->model('loginmodel');
        // check the isvalidate fun logic using if else
        //  if( $this->loginmodel->isvalidate($uname, $pass)){
        // now apply session logic as from loginmodel id will be returned as 1 so store in variable
        $login_id=$this->loginmodel->isvalidate($uname, $pass);
   // check wt value is coming in login_id
    // echo $login_id;
    // exit;  //terminate from here
    //   if( 1)
           if($login_id){  //we can craete this varaible as same as id as well
                // //   logic correct if Data validated true
                // echo "deatils matched";
                //now will use session of libraray class
                // $this->load->library('session');
                // $_SESSION['Email']=$Email; //used in core php
                // here we can store and any session data and get wr we want depending on our ids
                // $this->session->set_userdata('username',$uname); //we can create/set seesion on any form value on which basis we want to show statefullness in our website
                $this->session->set_userdata('id',$login_id); //i want to make staefull on basis of id
                // load the dashboard  but as we are loading our dahsboard in welcome function so need to write it here directly redirect to the welcome function
                // $this->load->view('Admin/dashboard');

                return redirect('Admin/welcome');


               }else{
                //logic fails data niot matched with db 
                // echo "deatils  not matched";
                return redirect('Admin/invaliduser');

           }
        }
        else{
        //   echo validation_errors();  
        //    but if we want to see the data on the saME PAGE and then will follow this 
        $this->load->view('Admin/Login');
        }

    }

    //create one another function for session 
    public function welcome(){
        // if(! $this->session->userdata('id'))
        // return redirect('Admin/Login');
        //now load the model for showing the data from db articlellist
        // $this->load->model('loginmodel');
        //more simpler way to wrte the loginmodel
        $this->load->model('loginmodel','ar');

        //load the loginmodel function article llist
        // $this->loginmodel->articleList();
        //now store this in a avraible
        // $articles=$this->loginmodel->articleList();
        //now here pass this ar which stands for srticles in replace of loginmodel
        $articles=$this->ar->articleList();

        //now welcome function load this dahsboard page
        // $this->load->view('Admin/dashboard');   //welcoming view page will be opened
   //now will pass in this dashboard view loading with our data variable article by creating key
   $this->load->view('Admin/dashboard',['articles'=>$articles]);   //here mentioned first key can be anything

    }

    //Creayte the funtion for add user 
    public function adduser(){
        // if(! $this->session->userdata('id'))
        // return redirect('Admin/Login');
        // $this->load->model('loginmodel','ar');

    }

    //create fun for edit user
    public function edituser(){
        // if(! $this->session->userdata('id'))
        // return redirect('Admin/Login');
        // $this->load->model('loginmodel','ar');

    }
    
    //for delete
    public function deluser(){
        // if(! $this->session->userdata('id'))
        // return redirect('Admin/Login');
        // $this->load->model('loginmodel','ar');

    }

    // create the constructor for session maanagement globally for all the pages and functions 
    public function __construct()
    {
        parent::__construct();
        if( ! $this->session->userdata('id'))

        // if( !$userId= $this->session->userdata('id'))
        // print_r($userId); die;
        return redirect('admin/login');

    }

    public function logout(){
        echo "logout";
    }
    //we can create another function for it for not matched
    public function invaliduser(){
        $this->load->view('Admin/invaliduser');     //invalide msg page will  got opened

    }
    //create register function for regsitring the user
    public function register(){
     $this->load->view('admin/register');
    }


    public function sendemail()
    {
        
        $this->form_validation->set_rules('uname', 'User Name','required|alpha');
        $this->form_validation->set_rules('pass','User Password','required|max_length[12]');
        $this->form_validation->set_rules('fname','First Name','required|alpha');
        $this->form_validation->set_rules('lname', 'last Name','required|alpha');
        $this->form_validation->set_rules('email', 'Email','required|valid_email|is_unique[users.email]');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>'); //give the danger mark used for all form fieilds
        if($this->form_validation->run())
        {
        $this->load->library('email');
        $this->email->from(set_value('email'),set_value('fname'));
        $this->email->to("priya@ubankconnect.com");
        $this->email->subject("registration Greeting..");
        $this->email->message("thankyou for regisration");

        $this->email->set_newline("r\n");
        $this->email->send();
        if($this->email->send()){
            show_error($this->email->print_debugger());
        }
       
      else{
          
      echo "your e-mail has been sent!✅";
         }
        }
        else{
            $this->load->view('Admin/register');
        }
     }
     
    }

?>