<?php
defined('BASEPATH') or exit('No direct script access allowed');

class loginmodel extends CI_model{

//   public function __construct() {
//     parent::__construct();
// }

  public function isvalidate($username, $password)
  {
    // if we want to make password encrypted then pass it in md5
    //$pass= md5($password); do it in regsitration lec

  //   firstly model give true result then  controll goes into admin controller and correct logic will execeute
  // now will load the database  core db system  class but if want not multiple wrritiung then will remove this from here and autoload it in $autoload['libaraies']='';
  // $this->load->library('database');
  // $this->load->database();
  //using core php method query and varibales taken from db
  // $q=$this->db->query("select * from users where username='$username' and password='$password'");
  // // check total count of rows and match the row withwout fetching all
  //    if(($q->num_rows()) ){
  //     // this echoo part give the how many rows matched that value 
  //     // echo $q->num_rows();
  //     return true;
  //    }else{
  //     return false;
  //    }

  //second way using active record class from ci-3 using associative array database variables passed username and fun isavlidate argu. variables
//    $q=$this->db->where(['username'=>$username, 'password'=>$password])
// //used method chaining 
//                ->get('users');
//           //  as data is not coming so use debugging and pre for formatting
//           // echo "<pre>"; 
//           // print_r($q); 
//           //  num_rows give output as 1 and 0, -1 then false
//           if(  $q->num_rows() >1){
//           return  True;
//           }else{
//           return false;
//            }

//third way 
  //second way using active record class from ci-3 using associative array db variable passed username and fun variable
  // $q=$this->db->where(['username'=>$username, 'password'=>$password])
  // //use method chaining 
  //        ->from('users')
  //            ->get();
  //           //  num_rows give output as 1 and 0, -1 then false
  //           if(  $q->num_rows()){
  //           return  True;
  //           }else{
  //           return false;
  //            }

  //fourth way 
  // $q=$this->db->where('username',$username)
  // //use method chaining 
  //         ->where('password', $password)
  //         ->from('users')
  //         ->get();
  //           //  num_rows give output as 1 and multiple  and 0  if false
  //           if(  $q->num_rows()){
  //           return  True;
  //           }else{
  //           return false;
  //            }

  //so will use most simple 2nd way with session implementation
  $q=$this->db->where(['username'=>$username, 'password'=>$password])
                 ->get('users');
                //  result fun give data in std format object of array of obj if details is correct else return empty array obj
                  echo "<pre>";
                  // print_r($q->result()); //will not use this untill we want to debug
                  // exit;
                  // but here row ()fun give single row object which we want to see only 
                  // print_r($q->row());
                  // exit;
           //now we want to get the id of the single std object for doing this do below step for make stateful using id or wtever we want
                  // print_r($q->row()->id);
                  // exit;
              //we can pass the data here anything wtever we want to show of db clumns for session and retrun it 
                  // print_r($q->row()->username); 
                  // print_r($q->row()->password); 
                  // print_r($q->row()->firstname);
                  // print_r($q->row()->lastname);exit;
// as we want only id so 
              //  print_r($q->row()->id);
                  // exit;
               if(  $q->num_rows() ){
                
              // return  True;
              
              // here return the id so it will create session id from this model and pass it to the admin controller
              // return $q->row()->id;
              //we can keep into varaible as well
          //  $id=$q->row()->id; // we can do this also but will not do that bcoz after cerating varaible it will take memeory on web server so will use abive satement // return $q->row()->id; directly

          //  return $id;
            return $q->row()->id;  // 1 will be returned to the admin

              }else{
              return false;
               }
  
  
    }
    //now will create the model for article view  which will retrived the dataa from database
    public function articleList(){
      //load the session libaray
      // $this->load->library('session'); //we dont want to use it mutplie time so kload in library in auatoload
      //jere we get the use session  data
     $id= $this->session->userdata('id');
      $q= $this->db->select('article_title')
                ->from('articles')
                // ->where(['id'=>$id])
                ->where(['user_id'=>$id])

                ->get();
                // check data is comin or not
                // echo " <pre>";
                // print_r($q);
                // exit;
                //now our result fun giev result in obj std format
                 // return $q->result();
                //  print_r($q->result());
                //  exit;
     return $q->result();
    }
  
   
}
?>