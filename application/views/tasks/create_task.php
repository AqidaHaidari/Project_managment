
<h2>Create task</h2>
<?php $attributes=array('id'=>'create_form','class'=>'form_horizental')?>
<?php echo validation_errors("<p class='bg-danger'>");?>
<?php echo form_open('tasks/create/'.$this->uri->segment(3).'',$attributes)?>
<div class="from-group">
<?php echo form_label('task Name');?>
<?php $data=array(
    'name'=>'task_name',
    'class'=>'form-control',
    'placeholder'=>'Enter task Name'
);?>
<?php echo form_input($data);?>
</div>

<div class="from-group">
<?php echo form_label('Description');?>
<?php $data=array(
    'name'=>'task_body',
    'class'=>'form-control'
);?>
<?php echo form_textarea($data);?>
</div></br>
<div class="from-group">
<?php $data=array(
    'name'=>'due_date',
    'class'=>'form-control',
    'type'=>'date'
);?>
<?php echo form_input($data);?>
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
