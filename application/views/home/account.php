<?php include 'header.php' ?>
<!DOCTYPE html>
<html>

<head>
    <title>Account</title>
    <style>
        .custom-file-upload {
            border: 1px solid #ccc;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
            margin-left: 18px;
            margin-top: 10px;
        }

        .title {
            font-size: 18px;
            line-height: 1;
            margin: 0 0 10px;
            padding: 0;
            border-bottom: 3px solid #FF8000;
        }

        #LI2 {
            margin-top: 2px;
            margin-left: 0;
            background-color: #619D09;
        }
    </style>
</head>

<body>
    <div class="container m-t-3">
        <div class="row">
            <!-- Account Sidebar -->
            <div class="col-sm-4 col-md-3 m-b-3">
                <div class="account-picture">
                    <!-- <?php echo form_open_multipart(); ?>
                    <input type="file" name="uploadFile"><br>
                    <?php echo form_error('uploadFile'); ?><br>
                    <button type="submit">Submit</button>
                    <?php echo form_close(); ?> -->
                    <img id="Itmimg" src="http://192.168.0.12/DhartiMaaLive/UserProfile/user.png?timestamp=1562156492906" alt="" class="img-circle img-responsive"> -->
                     <label for="file-upload" class="custom-file-upload">
                        <i class="fa fa-picture-o"></i>&nbsp;Profile Image
                    </label>
                    <input type="file" id="file-upload" accept="image/jpeg, image/png" class="btn" />
                </div>

            </div>
            

            <!-- My Profile -->
            <div class="col-sm-8 col-md-9" id="MyProfile">
                <div class="title m-b-2"><span>Change Profile</span></div>

                <div class="row">
                    <?php
                    if (!empty($users)) {
                        foreach ($users as $key => $value) {
                            ?>
                            <div class="col-xs-6">
                                <ul class="list-group list-group-nav">
                                    <li class="list-group-item" style="border:none;">
                                        <strong>First Name</strong>
                                        <p class="DisplayBox" id="lblName"></p>
                                        <p class="HideBox">

                                            <input type="text" class="textBox form-control" id="txtName" placeholder="<?php echo $value['firstname']; ?>" />
                                        </p>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-xs-6">
                                <ul class="list-group list-group-nav">
                                    <li class="list-group-item" style="border:none;">
                                        <strong>Last Name</strong>
                                        <p class="DisplayBox" id="lblName"></p>
                                        <p class="HideBox">

                                            <input type="text" class="textBox form-control" id="txtName" placeholder="<?php echo $value['lastname']; ?>" />
                                        </p>
                                    </li>
                                </ul>

                            </div>

                            <div class="col-xs-6">
                                <ul class="list-group list-group-nav">
                                    <li class="list-group-item" style="border:none;">
                                        <strong>Email Address</strong>
                                        <p class="DisplayBox" id="lblEmail"></p>
                                        <p class="HideBox">
                                            <input type="text" class="textBox form-control" placeholder="<?php echo $value['email']; ?>" id="txtEmail" />
                                        </p>
                                    </li>
                                </ul>
                            </div>


                            <div class="col-xs-6">
                                <ul class="list-group list-group-nav">
                                    <li class="list-group-item" style="border:none;">
                                        <strong>Mobile Number</strong>
                                        <p class="DisplayBox" id="lblMobNo"></p>
                                        <p class="HideBox">
                                            <input type="text" class="textBox form-control" placeholder="<?php echo $value['mobileno']; ?>" id="txtMobNo" readonly />
                                        </p>
                                    </li>
                                </ul>
                            </div>


                            <div class="col-xs-12">
                                <a href="<?php echo base_url() ?>home/edit/<?php echo $value['id']; ?>" class="btn btn-theme btn-warning" id="EditProfile" onclick="EditProfile()"><i class="fa fa-pencil"></i>&nbsp;Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php }
                        } ?>
                        <a href="<?php echo base_url() ?>home/account" class="btn btn-theme btn-warning" id="CancelProfile" onclick="CancelEditProfile();"><i class="fa fa-cancel"></i>&nbsp;Cancel</a>
                    </div>
                </div>
            </div>
            <!-- End My Profile -->


            <!-- Change Password -->
            <!-- Change Password -->
        </div>
    </div>

</body>

</html>
<?php include 'footer.php' ?>
<script>
    $(document).ready(function() {
        $('#account').click(function() {
            $('#MyProfile').show();
            $('#ChangePassword').hide();
        });
        $('#pass').click(function() {
            $('#ChangePassword').show();
            $('#MyProfile').hide();
        })
    });
</script>