<?php 
    $algo_type = $_GET["algo_type"];
?>

<html>
<head>
    <title></title>

    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">

    <link rel="stylesheet" type = "text/css" href = "./css/style.css">
    
</head>
<body>
    <header>
        <div class="container">
            <div class="header-title">
                <h2 id = "h_title"></h2>
            </div>
        </div>
    </header>

    <section id = "menu-card">
        <div class = "center"></br>
            <form action="compute.php" method = "POST">
                <h1 style = "color:#300032;">Select No. of Jobs:</h1>
                    <?php
                        echo '<select name = "numJobs" id = "dropdown" onchange = "getValue();">';
                            for($ctr = 1; $ctr <= 10; $ctr++){
                                echo '<option value = "'.$ctr.'">'.$ctr.'</option>';
                            }
                        echo '</select>'; 
                    ?>
                
                <div id="tableJobs">

                </div>
            </form>
        </div>
    </section>


</body>
    <script type = "text/javascript">
        var algo_type = <?php echo json_encode($algo_type); ?>; 
    </script>
    <script type="text/javascript" src = "./js/dom.js"></script>
</html>