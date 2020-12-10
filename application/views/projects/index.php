<p class='bg-success'>
<?php if($this->session->flashdata('project_deleted')):?>
<?php echo $this->session->flashdata('project_deleted');?>
<?php endif;?>
<?php if($this->session->flashdata('project_updated')):?>
<?php echo $this->session->flashdata('project_updated');?>
<?php endif;?>
<?php if($this->session->flashdata('project_created')):?>
<?php echo $this->session->flashdata('project_created');?>
<?php endif;?>
<?php if($this->session->flashdata('task_updated')):?>
<?php echo $this->session->flashdata('task_updated');?>
<?php endif;?>

</p>


<h1>Projects</h1>
<a href="<?php echo base_url();?>projects/create" class='btn btn-primary pull-right'>Create Project</a>
<table class='table table-hover'>
<thead>
    <tr>
        <th>project Name</th>
        <th>project Name</th>
    </tr>
</thead>
<?php foreach($projects as $project):?>
    <tr>
        <td><a href="<?php echo base_url();?>projects/display/<?php echo $project->id?>">
        <?php echo $project->project_name;?>
        </a>
        </td>
        
        <td>
        <?php echo $project->project_body;?>
        </td>
        <td><a class='btn btn-danger' href="<?php echo base_url();?>projects/delete/<?php echo $project->id;?>"><span class='glyphicon glyphicon-remove'></span></a></td>
    
    </tr>
<?php endforeach;?>
</table>