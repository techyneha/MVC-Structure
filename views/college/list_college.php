<!DOCTYPE html>
<html>
    <head>
        <title>College List Page</title>
    </head>
    <link rel="stylesheet" href="<?=baseUrl('/assets/style.css')?> "></link>
    <body>
        <?php require("./views/header.php"); ?>
        <div class="b-body">
            <h4 class="title" >College List</h4>
            <a href="<?=baseUrl('/colleges/createForm') ?>" class="btn-create"> Create College</a>
            <table class="table" width="100%">            
                <tr>
                    <th>ID</th>
                    <th>College Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
                <?php 
                foreach($rows as $row) {
                ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['college_name']; ?></td>
                    <td><?= $row['college_address']; ?></td>
                    <td><?= $row['college_phone']; ?></td>
                    <td>
                        <a href="<?= baseUrl('/colleges/updateForm')?>?id=<?= $row['id']; ?>" >Update</a> &nbsp;
                        <!-- <a href="update_form.php?id=<?php echo $row['id']; ?>" >Update</a> &nbsp; -->
                        <!-- <a href="delete_college.php?id=<?php echo $row['id']; ?>" >Delete</a> -->
                        <a href="<?= baseUrl('/colleges/delete') ?>?id=<?= $row['id']; ?>" >Delete</a>
                    </td>
                </tr>
                <?php } ?>
            </table>            
        </div>
    </body>
</html>

<!-- //php -S localhost:9999 -->