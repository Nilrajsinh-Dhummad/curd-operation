
<html>
<head>
    <title>curd Application - Create user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
 
<div class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand">CURD APPLICATION</a>
    </div>
</div>
<div class="container" style=" padding-top: 10px;">
    <h3>Create User</h3>
    <hr>
    <form method="post" name="createuser" action="<?php echo base_url().'index.php/user/create';?>">       

    <div class= "row">
        
        <div class="col-md-12">
            <div class="form-group">
                <label>name</label>
                <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control">
                <?php echo form_error('name'); ?>
            </div>
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
                <?php echo form_error('email'); ?>
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Create </button>
                <A href="<?php echo base_url().'index.php/user/index'?>" class="btn-secondary btn">cancel</a>
            </div>
        </div>
    </div>
    </form>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>