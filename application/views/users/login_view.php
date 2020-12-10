<?php if($this->session->userdata('logged_in')):?>


<h2>Log Out</h2>
<?php echo form_open('users/logout');?>
<p>
<?php if($this->session->userdata('username')):?>
<?php echo "You are logged in as ".$this->session->userdata('username');?>
<?php endif;?>
</p>


<?php $data=array(
    'class'=>'btn btn-primary',
    'name'=>'submit',
    'value'=>'Logout'
);?>
<?php echo form_submit($data);?>
<?php echo form_close();?>

<?php else:?>

<h2>login form</h2>
<?php $attributes=array('id'=>'login_form','class'=>'form_horizental')?>
<?php if($this->session->flashdata('errors')):?>
    <?php echo $this->session->flashdata('errors');?>
<?php endif; ?>
<?php echo form_open('users/login',$attributes)?>
<div class="from-group">
<?php echo form_label('User Name');?>
<?php $data=array(
    'name'=>'username',
    'class'=>'form-control',
    'placeholder'=>'Enter your User Name',
    'value'=>set_value('username')
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
<?php endif;?>