<?php include 'header.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">

    <title> EDIT </title>
</head>

<body>
    <div class="container">
        <div class="row" style="margin-top:2vh;margin-bottom:3vh;color:#666;">
            <?php echo form_open() ?>
            <div class="form-group">
                <p style="color:black;">
                    <?php echo $this->session->flashdata('alertMsg'); ?>
                </p>
            </div>
            <div class="form-group">
                <label>First Name</label>
                <input class="form-control" type="text" name="firstname" placeholder="">
                <?php echo form_error('firstname'); ?>
            </div>
            <div class="form-group">
                <label>last Name</label>
                <input class="form-control" type="text" name="lastname" placeholder="">
                <?php echo form_error('lastname'); ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="">
                <?php echo form_error('email'); ?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="">
                <?php echo form_error('password'); ?>
            </div>
            <div class="form-group">
                <label>Mobile Number</label>
                <input type="text" name="mobileNo" placeholder="" class="form-control">
                <?php echo form_error('mobileNo'); ?>
            </div>
            <!-- <div class="form-group">
                <label>Image</label>
                <?php echo form_open_multipart(); ?>
                <input type="file" name="uploadFile"><br>
                <?php echo form_error('uploadFile'); ?><br>
                <button type="submit">Submit</button>
                <?php echo form_close(); ?>
            </div> -->
            <div class="form-group">
                <button type="submit" class="btn btn-warning" style="border-radius: 0px;"> Save </button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</body>

</html>
<?php include 'footer.php' ?>