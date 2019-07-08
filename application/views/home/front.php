<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/front.css" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <title>Dharti Maa</title>
</head>

<body style="background-image: url('<?php echo base_url() ?>assets/image/2.jpg');background-repeat:no-repeat;background-size:cover;">
    <span class="row">
        <center><a href="<?php echo base_url() ?>home/dharti"><img src="http://192.168.0.12:8085/dhartimaa/Templates/images/logo-teal.png"></a></center>
    </span>
    <span class="row">
        <p class="p" style="font-size:28px;">The key to a greener planet is in your hands.</p>
    </span>
    <div class="container" style="margin-left:28vw;text-align: center;margin-top:3vh;">
        <div class="row">
            <div class="col-md-3">
                <div class="container_1 form_1" style="background: url('http://192.168.0.12:8085/dhartimaa/Templates/home/images/KD.jpg') no-repeat;background-size: cover;">
                    <p style="margin-top:7vh;font-size:22px;"><a href="javascript:void(0)" style="color: white;text-decoration:none;">Krushi Darshan</a></p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="col-md-3">
                <div class="container_1 form_2" style="background: url('http://192.168.0.12:8085/dhartimaa/Templates/home/images/product.jpg') no-repeat;background-size: cover;">
                    <a href="<?php echo base_url() ?>home/buy" style="text-decoration:none;">
                        <p style="margin-top:7vh;font-size:22px;color:white;">Buy Plants</p>
                    </a>
                </div>
            </div>&nbsp;&nbsp;
            <div class="col-md-3">
                <div class="container_1 form_3" style="background: url('http://192.168.0.12:8085/dhartimaa/Templates/home/images/others.jpg') no-repeat;background-size: cover;">
                    <p style="margin-top:7vh;font-size:22px;"><a href="javascript:void(0)" style="color: white;text-decoration:none;">Dharti Mitra</a></p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top:2vh;">
            <div class="col-md-3">
                <div class="container_1 form_4" style="background: url('http://192.168.0.12:8085/dhartimaa/Templates/home/images/donate.jpg') no-repeat;background-size: cover;">
                    <p style="margin-top:7vh;font-size:22px;"><a href="javascript:void(0)" style="color: white;text-decoration:none;">Donate Plant</a></p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="col-md-3">
                <div class="container_1 form_5" style="background: url('http://192.168.0.12:8085/dhartimaa/Templates/home/images/design.jpg') no-repeat;background-size: cover;">
                    <p id="bounce_1" style="margin-top:7vh;font-size:22px;"><a href="javascript:void(0)" style="text-decoration:none;color: white;">Design your Garden</a></p>
                </div>
            </div>&nbsp;&nbsp;
            <div class="col-md-3">
                <div class="container_1 form_6" style="background: url('http://192.168.0.12:8085/dhartimaa/Templates/home/images/other.jpg') no-repeat;background-size: cover;">
                    <p style="margin-top:7vh;font-size:22px;"><a href="javascript:void(0)" style="color: white;text-decoration:none;">Others</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('.form_2').click(function() {
            $('.form_1').fadeOut(3000);
            $('.form_3').fadeOut(5000);
            $('.form_4').fadeOut(7000);
            $('.form_5').fadeOut(9000);
            $('.form_6').fadeOut(11000);
        })
    })
</script>