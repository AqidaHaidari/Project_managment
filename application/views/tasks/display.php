<div class='col-xs-9'>
<h1>Task for : <?php echo $project_name;?></h1>
<p>Project Name:<?php echo $project_name;?></p>
<p>Created :<?php echo $task->date_created;?></p>
<p>Due On:<?php echo $task->due_date;?></p>
<h4>Description</h4>
<p class="task_body" style=" background-color: white;
    padding: 20px;
    border-radius: 6px;
    box-shadow: 0px 0px 3px 1px;">
    <?php echo $task->task_body?>
</p>
</div>

<div class="col-xs-3 pull-right">
<ul class='list-group'>
<h4>Projects actions</h4>
<li  class='list-group-item'><a href="<?php echo base_url();?>/tasks/edit/<?php echo $task->id?>">Edit task</a></li>
<li class='list-group-item'><a href="<?php echo base_url();?>/tasks/delete/<?php echo $task->project_id;?>/<?php echo $task->id;?>">Delete task</a>
</li>
<li class='list-group-item'><a href="<?php echo base_url();?>tasks/mark_complete/<?php echo $task->id?>">Mark Complete</a></li>
<li class='list-group-item'><a href="<?php echo base_url();?>tasks/mark_incomplete/<?php echo $task->id?>">Mark InComplete</a></li>
</ul>