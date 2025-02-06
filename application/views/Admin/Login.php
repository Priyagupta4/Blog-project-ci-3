<?php include ('header.php'); ?>

<!-- use Container for form centering and n use style for shifing it below   -->
 <div class ="container" style ="margin-top:20px;">
  <!-- for making mor meaning =full give the nmae of form -->
   <h1> Admin panel🤵</h1>

   <!-- here create flashdata content and pass the key which will be later use in this ui as Login_failed and store this key value into $error varibale  -->
<?php  if( $error=$this->session->flashdata('Login_failed')) : ?>
<!-- already in container so class name took row -->
 <div class ="row">
  <div class="col-lg-6">
   <div class="alert alert-danger ">
<?php  echo $error ;?>
   </div> 
  </div>
 </div>
  <?php endif; ?>

   <!-- <form action="base_url(')"> </form> -->
    <!-- simple form helper tag used to show the form of admin login at that route or controller/methhod calling -admin/index replaced by login -->
    <?php echo form_open('admin/login');?>
    <div class ="row">
      <div class="col-lg-6">
<!-- here will create our form using form grpu[ and form controll classes] -->
 <div class ="form-group">
  <label for="Username">UserName: </label>
  <!-- <input type="email" class="form-control" id="email"> -->
   <!-- directly use the form_input tag n mention data in associtive array and set_value method keep the remainig filed data same as mentioned -->
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
  </div>
  </div>
  <!-- <div class="col-lg-6" > -->
    <!-- now will add some style for shifting the errors  notifications-->
  <div class="col-lg-6"  style="margin-top:30px;">

    <!-- <?php echo form_error('uname',"<div class='text-danger'>","</div>"); ?> -->
     <!-- this line is used when we have alreaady added the delemeter validation in admin controller -->
    <?php echo form_error('uname'); ?>
   </div>
   </div>
  <div class ="row">
  <div class="col-lg-6">
 <div class ="form-group">
  <label for="pwd">Password: </label>
  <!-- <input type="password" class="form-control" id="pwd"> -->
   <!-- for pawsd we have another tag  -->
  <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Username','name'=>'pass','value'=>set_value('pass')]); ?>
  </div>
  </div>
  <div class="col-lg-6" style="margin-top:40px; ">
  <!-- <?php echo form_error('pass',"<div class='text-danger'>","</div>"); ?> -->
  <?php echo form_error('pass'); ?>

  </div>
  </div>

 <!-- <div class ="checkbox">
  <label>   <input type="checkbox" > Remember me </label>  
 </div> -->
 <!-- <button type ="submit" class ="btn btn-default">Submit</button> -->
  <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-default','name'=>'submit','value'=>'Submit']); ?>
  <!-- now will use reset function of form for reset data or otp as well -->
   <?php echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']) ; ?>
   <!-- here will create ancr tag link for register -->
    <?php echo anchor('Admin/register/','Sign up?','class="link-class"') ?>
 </div>

 <!-- commented errors validations  bcoz used delemeters -->
<!-- <?php echo validation_errors();?> -->
 <?php include('footer.php'); ?>

