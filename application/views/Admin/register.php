<?php include('header.php'); ?>

<div class="container" style="margin-top:20px;">
    <h1>Register Form</h1>
    <?php echo form_open('admin/sendemail'); ?>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="uname">User Name:</label>
                <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter User Name', 'name'=>'uname', 'value'=>set_value('uname')]); ?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:30px;">
            <?php echo form_error('uname'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="pass">Password:</label>
                <?php echo form_password(['class'=>'form-control', 'placeholder'=>'Enter Password', 'name'=>'pass', 'value'=>set_value('pass')]); ?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:30px;">
            <?php echo form_error('pass'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="fname">First Name:</label>
                <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter First Name', 'name'=>'fname', 'value'=>set_value('fname')]); ?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:30px;">
            <?php echo form_error('fname'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="lname">Last Name:</label>
                <?php echo form_input(['class'=>'form-control', 'placeholder'=>'Enter Last Name', 'name'=>'lname', 'value'=>set_value('lname')]); ?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:30px;">
            <?php echo form_error('lname'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="email">Email:</label>
                <?php echo form_input(['class'=>'form-control', 'type'=>'email', 'placeholder'=>'Enter Email', 'name'=>'email', 'value'=>set_value('email')]); ?>
            </div>
        </div>
        <div class="col-lg-6" style="margin-top:30px;">
            <?php echo form_error('email'); ?>
        </div>
    </div>

    <div>
        <?php echo form_submit(['type'=>'submit', 'class'=>'btn btn-success', 'name'=>'submit', 'value'=>'Register']); ?>
        <?php echo form_reset(['type'=>'reset', 'class'=>'btn btn-primary', 'value'=>'Reset', 'name'=>'Reset']); ?>
        <?php echo anchor('admin/login', 'Already Registered? Login', ['class'=>'btn btn-link']); ?>
    </div>

    <?php echo form_close(); ?>
</div>

<?php include('footer.php'); ?>
