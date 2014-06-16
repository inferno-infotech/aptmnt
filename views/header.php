<html>


    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>Styles/Stylesheet.css" />
        <script src="<?php echo URL; ?>js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#register").submit(function() {

                    $.post('login/run', $('#register').serialize(), function(data) {
                        $("#content").html(data);

                    });

                    return false;

                });

            });


        </script>
    </head>

    <body>
        <div id="header">
            <br />
            <a href="<?php echo URL; ?>index">Index</a>
            <a href="<?php echo URL; ?>help">Help</a>
            <a href="<?php echo URL; ?>login">Registration</a>
        </div>
        <div id="content">


