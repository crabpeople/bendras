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
    <p class = 'laikas'></p>
    <script src='http://code.jquery.com/jquery-1.8.3.js'></script>
    <script>
        $(function(){
            var $data=$('.data');
            var $laikas=$('.laikas');
            $laikas.click(
                function(){
                    $(this).fadeOut('fast');
                });
            $data.click(
                function(){
                    $(this).fadeOut('fast');
                });

        });

        $(function(){
            window.setInterval(function(){
                var d = new Date();
                $('p').html(x(d.getHours()) + ':' + x(d.getMinutes()) + ':' + x(d.getSeconds()));
            }, 100);

            function x(t){
                t < 10 ? t = '0' + t.toString() : t;
                return t;
            }
        });


    </script>

<!--    <div class="push"> </div>-->
</div>
<div class="footer">
    2012 Marek Inc. All rights reserved.

</div>
</body>

</html>