<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('uploads/logo.png');?>">
    <title>Bako - Mart</title>
    <script src="<?php echo base_url()?>assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"></script>
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>/assets/libs/flot/css/float-chart.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>/dist/css/style.min.css" rel="stylesheet">


    <style>
        label.cameraButton {
            display: inline-block;
            margin: 1em 0;

            /* Styles to make it look like a button */
            padding: 0.5em;
            border: 2px solid #666;
            border-color: #EEE #CCC #CCC #EEE;
            background-color: #DDD;
        }

        /* Look like a clicked/depressed button */
        label.cameraButton:active {
            border-color: #CCC #EEE #EEE #CCC;
        }

        /* This is the part that actually hides the 'Choose file' text box for camera inputs */
        label.cameraButton input[accept*="camera"] {
            display: none;
        }
    </style>
</head>