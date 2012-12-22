<html>
<title>Bendras darbelis</title>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class=dizainas>

    <?php
    $laikas=date('Y-m-d');
    echo "<div class='data'>$laikas</div>";

    ?>
    <script src='http://code.jquery.com/jquery-1.8.3.js'></script>
    <script>
        $(function(){
            var $laikas=$('.data');
            $laikas.click(
                function(){
                    $(this).fadeOut('fast');
                });

        });


    </script>

<!--    <div class="push"> </div>-->
</div>
<div class="footer">
    2012 Marek Inc. All rights reserved.

</div>
</body>

</html>