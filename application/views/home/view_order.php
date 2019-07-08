<?php include 'header.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title> Order </title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/index.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <table class="table table-responsive">
                <tr>
                    <th>Serial No.</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                </tr>
                <?php
                if (!empty($userData)) {
                    foreach ($userData as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $value['item_name']; ?></td>
                            <td><?php echo $value['quantity']; ?></td>
                            <td><?php echo $value['rate']; ?></td>
                            
                        </tr>
                    <?php }
                } ?>
            </table>
        </div>
    </div>
</body>

</html>
<?php include 'footer.php' ?>