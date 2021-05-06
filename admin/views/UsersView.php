<?php 
	//load file layout.php
	$this->layoutPath = "Layout.php";
 ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=users&action=create" class="btn btn-primary">Add user</a>
    </div>
    <div class="card">
    <div class="panel panel-primary">
        <div class="card-header">
            <strong class="card-title">Data Table</strong>
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                <tr>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th style="width:200px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name ?></td>
                    <td><?php echo $rows->email ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>">Update</a>&nbsp;
                        <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>
                    </td>
                </tr>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:10px auto;float: right;}
            </style>
            <ul class="pagination">
            	<li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
            	<?php for($i = 1; $i <= $numPage; $i++): ?>
            	<li class="page-item"><a href="index.php?controller=users&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
            	<?php endfor; ?>
            </ul>
        </div>
        </div>
    </div>
</div>