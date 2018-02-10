<?php 
    $algo_type = $_GET["algo_type"];
    include "header.php";
?>
    <section id = "menu-card">
        <div class = "center"></br>
            <form action="compute.php" method = "POST" id = "JobForm">
            <input type="hidden" value = <?php echo $algo_type?> name = "algo_type">
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
                <button type="submit" name="submit" class="btn">Submit</button>
            </form>
        </div>
    </section>

<?php
    include "footer.php";