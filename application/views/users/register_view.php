
<h2>Register form</h2>
<?php $attributes=array('id'=>'register_form','class'=>'form_horizental')?>
<?php echo validation_errors("<p class='bg-danger'>");?>
<?php echo form_open('users/register',$attributes)?>
<div class="from-group">
<?php echo form_label('First Name');?>
<?php $data=array(
    'name'=>'first_name',
    'class'=>'form-control',
    'placeholder'=>'Enter your Name',
    'value'=>set_value('first_name')
);?>
<?php echo form_input($data);?>
</div>

<div class="from-group">
<?php echo form_label('Last Name');?>
<?php $data=array(
    'name'=>'last_name',
    'class'=>'form-control',
    'placeholder'=>'Enter your Last Name',
    'value'=>set_value('last_name')
    
);?>
<?php echo form_input($data);?>
</div>

<div class="from-group">
<?php echo form_label('User Name');?>
<?php $data=array(
    'name'=>'user_name',
    'class'=>'form-control',
    'placeholder'=>'Enter User Name',
    'value'=>set_value('user_name')
);?>
<?php echo form_input($data);?>
</div>

<div class="from-group">
<?php echo form_label('Email');?>
<?php $data=array(
    'name'=>'email',
    'class'=>'form-control',
    'placeholder'=>'Enter your Email',
    'value'=>set_value('email')
);?>
<?php echo form_input($data);?>
</div>

<div class="from-group">
<?php echo form_label('Password');?>
<?php $data=array(
    'name'=>'password',
    'class'=>'form-control',
    'placeholder'=>'Enter password'
);?>
<?php echo form_password($data);?>
</div>
<div class="from-group">
<?php echo form_label('Confirm Password');?>
<?php $data=array(
    'name'=>'confirmPassword',
    'class'=>'form-control',
    'placeholder'=>'Confirm password'
);?>
<?php echo form_password($data);?>
</div>
<br>
<div class="from-group">
<?php $data=array(
    'name'=>'submit',
    'class'=>'btn btn-primary',
    'value'=>'submit'
);?>
<?php echo form_submit($data);?>
</div>

<?php echo form_close()?>
