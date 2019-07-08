<?php include 'header.php' ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/front.css" type="text/css"> -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <title>Download</title>
    <style>
        .h {
            width: 100%;
            text-align: center;
            border-top: 1px solid #eee;
            line-height: 0.1em;
            margin: 10px 0 20px;
            font-size: 15px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6" style="margin-bottom:2vh;">
                <img style="border:1px solid black;padding:8px;" src="http://192.168.0.12:8085/dhartimaa/Templates/images/AeroFarmsLED1540.jpg">
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="title" style="border-bottom: 2.5px solid #ff8000;"><span style="text-transform: uppercase;color:#BABABA;font-size:18px;">Get the Dharti Maa app</span></div>
                        <div class="form-group col-md-offset-1 col-md-9  text-center" style="margin-top:2vh;">
                            <p style="font-size: 13px; font-family: montserrat,sans-serif; margin: 0; line-height: 24px; font-weight: 400;">We'll send you a link, open it on your phone or email to download the app</p>
                        </div>
                        <form>
                            <div class="form-group col-md-offset-1 col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                    <input id="txtMobileNo" type="text" class="form-control" name="txtMobileNo" placeholder="Enter Your Mobile No.">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-theme btn-warning">&nbsp;&nbsp;TEXT APP LINK</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-offset-1 col-md-9">
                                <h2 class="h"><span style="color:#BABABA;font-size:15px;">OR</span></h2>
                            </div>
                            <div class="form-group col-md-offset-1 col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="txtEmail" type="text" class="form-control" name="txtEmail" placeholder="Enter Your Email Id.">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-theme btn-warning">EMAIL APP LINK</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-offset-1 col-md-9">
                                <h2 class="h"><span style="color:#BABABA;font-size:15px;">OR</span></h2>
                            </div>
                            <div class="form-group col-md-offset-1 col-md-9 text-center">
                                <a href="javascript:void(0)">
                                    <img src="http://192.168.0.12:8085/dhartimaa/Templates/images/googleplay.png" alt="Download DM for Android" height="40">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
<?php include 'footer.php' ?>