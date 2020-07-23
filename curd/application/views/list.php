
<html>
<head>
    <title>curd Application - View user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
 
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">CURD APPLICATION</a>
    </div>
</div>
<div class="container" style=" padding-top: 10px;">
    <div class="row">
        <div class="col-md-12">
        <?php
        $success= $this->session->userdata('success');
        if($success !="")
        {
            ?>
            <div class="alert alert-success"><?php echo $success;?></div>
            <?php
        }
        ?>
         <?php
        $failure= $this->session->userdata('failure');
        if($failure !="")
        {
            ?>
            <div class="alert alert-success"><?php echo $failure;?></div>
            <?php
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
    <div class="row">
    <div class="col-6"><h3>View Users</h3></div>
    <div class="col-6 text-right">
        <a href="<?php echo base_url().'index.php/user/create'; ?>" class="btn btn-primary">Create</a>

    </div>
    </div><hr>
   
    </div> 

</div>
   

    <div class="row">
       
        <div class="col-md-8">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th  width="60">Edit</th>
                    <th width="100">Delete</th>
                </tr>
                

                <?php if(!empty($users)) 
                {
                        foreach($users as $user)
                        {?>
                            <tr> 
                                <td><?php echo $user['user_id'];  ?></td>
                                <td><?php echo $user['name'];  ?></td>
                                <td><?php echo $user['email'];  ?></td>
                                <td>
                                    <a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id']?>" class="btn btn-primary">
                                    Edit</a>    
                                </td> 
                                <td>
                                    <a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id']?>" class="btn btn-danger">
                                    delete</a>    
                                </td> 
                            </tr>
                        <?php } } else{ ?>
                        <tr>
                        <?php } ?>
                        

                
                
                
                
            </table>
        </div>
    </div>

   
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>