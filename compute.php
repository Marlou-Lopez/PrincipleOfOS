<?php 
    

if(isset($_POST['submit'])){
    $numJobs = $_POST['numJobs'];      
    $JobArray = $_POST['JobArray'];
    $a_type = $_POST['algo_type'];
    $COLOR = array("blue","red","yellow","orange","green","pink","cyan","purple","darkblue","darkred");

    if($a_type == "fcfs"){
    
    $avett = 0.00; $avewt = 0.00; $sumbt = 0.00;
        /*  echo '<pre>';
        print_r($JobArray);
        echo '</pre>';   */
    $JobArray[0][4] = 0;
    $avett = $JobArray[0][5] = $JobArray[0][2];
    $sumbt = $JobArray[0][2];   

        for($i = 1; $i < $numJobs; $i++){
            $JobArray[$i][4] = $sumbt - $JobArray[$i][1];
            $sumbt += $JobArray[$i][2];
            $avewt += $JobArray[$i][4];
            $JobArray[$i][5] =  $JobArray[$i][4] + $JobArray[$i][2];
            $avett += $JobArray[$i][5]; 
        }
        $avett /= $numJobs;
        $avewt /= $numJobs;

        Display($JobArray,$avett,$avewt,$sumbt,$numJobs,$a_type);

    }
    else if($a_type == "sjf"){
        $temp = 0;
        $avett = 0.00; $avewt = 0.00; $sumbt = 0.00;

                for($i = 0; $i < $numJobs; $i++){
                    for($j = $i+1; $j < $numJobs; $j++){
                        if($JobArray[$i][1] > $JobArray[$j][1]){
                            $temp = $JobArray[$i][0];
                            $JobArray[$i][0] = $JobArray[$j][0];
                            $JobArray[$j][0] = $temp;

                            $temp = $JobArray[$i][1];
                            $JobArray[$i][1] = $JobArray[$j][1];
                            $JobArray[$j][1] = $temp;

                            $temp = $JobArray[$i][2];
                            $JobArray[$i][2] = $JobArray[$j][2];
                            $JobArray[$j][2] = $temp;
                        }
                    }
                }
                
                for($i = 1; $i < $numJobs; $i++){
                    for($j = $i+1; $j < $numJobs; $j++){
                        if($JobArray[$i][2] > $JobArray[$j][2]){
                            $temp = $JobArray[$i][0];
                            $JobArray[$i][0] = $JobArray[$j][0];
                            $JobArray[$j][0] = $temp;

                            $temp = $JobArray[$i][1];
                            $JobArray[$i][1] = $JobArray[$j][1];
                            $JobArray[$j][1] = $temp;

                            $temp = $JobArray[$i][2];
                            $JobArray[$i][2] = $JobArray[$j][2];
                            $JobArray[$j][2] = $temp;
                        }
                    }
                }
          
                $JobArray[0][4] = 0;
                $avett = $JobArray[0][5] = $JobArray[0][2];
                $sumbt = $JobArray[0][2];   
            
                     for($i = 1; $i < $numJobs; $i++){
                        $JobArray[$i][4] = $sumbt - $JobArray[$i][1];
                        $sumbt += $JobArray[$i][2];
                        $avewt += $JobArray[$i][4];
                        $JobArray[$i][5] =  $JobArray[$i][4] + $JobArray[$i][2];
                        $avett += $JobArray[$i][5]; 
                     }
                     $avett /= $numJobs;
                     $avewt /= $numJobs;

            Display($JobArray,$avett,$avewt,$sumbt,$numJobs,$a_type);
    }
    else if($a_type == "priority"){
            $temp = 0;
            $avett = 0.00; $avewt = 0.00; $sumbt = 0.00;
            for($i = 0; $i < $numJobs; $i++){
                for($j = $i+1; $j < $numJobs; $j++){
                    if($JobArray[$i][1] > $JobArray[$j][1]){
                        $temp = $JobArray[$i][0];
                        $JobArray[$i][0] = $JobArray[$j][0];
                        $JobArray[$j][0] = $temp;

                        $temp = $JobArray[$i][1];
                        $JobArray[$i][1] = $JobArray[$j][1];
                        $JobArray[$j][1] = $temp;

                        $temp = $JobArray[$i][2];
                        $JobArray[$i][2] = $JobArray[$j][2];
                        $JobArray[$j][2] = $temp;

                        $temp = $JobArray[$i][3];
                        $JobArray[$i][3] = $JobArray[$j][3];
                        $JobArray[$j][3] = $temp;
                    }
                }
            }
            //
            for($i = 1; $i < $numJobs; $i++){
                for($j = $i+1; $j < $numJobs; $j++){
                    if($JobArray[$i][3] > $JobArray[$j][3]){
                        $temp = $JobArray[$i][0];
                        $JobArray[$i][0] = $JobArray[$j][0];
                        $JobArray[$j][0] = $temp;

                        $temp = $JobArray[$i][1];
                        $JobArray[$i][1] = $JobArray[$j][1];
                        $JobArray[$j][1] = $temp;

                        $temp = $JobArray[$i][2];
                        $JobArray[$i][2] = $JobArray[$j][2];
                        $JobArray[$j][2] = $temp;

                        $temp = $JobArray[$i][3];
                        $JobArray[$i][3] = $JobArray[$j][3];
                        $JobArray[$j][3] = $temp;
                    }
                }
            }
            $JobArray[0][4] = 0;
            $avett = $JobArray[0][5] = $JobArray[0][2];
            $sumbt = $JobArray[0][2];   
        
                 for($i = 1; $i < $numJobs; $i++){
                    $JobArray[$i][4] = $sumbt - $JobArray[$i][1];
                    $sumbt += $JobArray[$i][2];
                    $avewt += $JobArray[$i][4];
                    $JobArray[$i][5] =  $JobArray[$i][4] + $JobArray[$i][2];
                    $avett += $JobArray[$i][5]; 
                 }
                 $avett /= $numJobs;
                 $avewt /= $numJobs;

            Display($JobArray,$avett,$avewt,$sumbt,$numJobs,$a_type);
    }
    else if($a_type == "deadline"){
        $temp = 0;
        $avett = 0.00; $avewt = 0.00; $sumbt = 0.00;

        for($i = 0; $i < $numJobs; $i++){
            if($JobArray[$i][3] == 0)
                $JobArray[$i][3] = 1000;
        }
        //sort arrival
        for($i = 0; $i < $numJobs; $i++){
            for($j = $i+1; $j < $numJobs; $j++){
                if($JobArray[$i][1] > $JobArray[$j][1]){
                    $temp = $JobArray[$i][0];
                    $JobArray[$i][0] = $JobArray[$j][0];
                    $JobArray[$j][0] = $temp;

                    $temp = $JobArray[$i][1];
                    $JobArray[$i][1] = $JobArray[$j][1];
                    $JobArray[$j][1] = $temp;

                    $temp = $JobArray[$i][2];
                    $JobArray[$i][2] = $JobArray[$j][2];
                    $JobArray[$j][2] = $temp;

                    $temp = $JobArray[$i][3];
                    $JobArray[$i][3] = $JobArray[$j][3];
                    $JobArray[$j][3] = $temp;
                }
            }
        }
        //sort deadline
        for($i = 1; $i < $numJobs; $i++){
            for($j = $i+1; $j < $numJobs; $j++){
                if($JobArray[$i][3] > $JobArray[$j][3]){
                    $temp = $JobArray[$i][0];
                    $JobArray[$i][0] = $JobArray[$j][0];
                    $JobArray[$j][0] = $temp;

                    $temp = $JobArray[$i][1];
                    $JobArray[$i][1] = $JobArray[$j][1];
                    $JobArray[$j][1] = $temp;

                    $temp = $JobArray[$i][2];
                    $JobArray[$i][2] = $JobArray[$j][2];
                    $JobArray[$j][2] = $temp;

                    $temp = $JobArray[$i][3];
                    $JobArray[$i][3] = $JobArray[$j][3];
                    $JobArray[$j][3] = $temp;
                }
            }
        }
        for($i = 0; $i < $numJobs; $i++){
            if($JobArray[$i][3] == 1000)
                $JobArray[$i][3] = 0;
        }
        $JobArray[0][4] = 0;
        $avett = $JobArray[0][5] = $JobArray[0][2];
        $sumbt = $JobArray[0][2];   
    
    
             for($i = 1; $i < $numJobs; $i++){
                $JobArray[$i][4] = $sumbt - $JobArray[$i][1];
                $sumbt += $JobArray[$i][2];
                $avewt += $JobArray[$i][4];
                $JobArray[$i][5] =  $JobArray[$i][4] + $JobArray[$i][2];
                $avett += $JobArray[$i][5]; 
             }
             $avett /= $numJobs;
             $avewt /= $numJobs;

        Display($JobArray,$avett,$avewt,$sumbt,$numJobs,$a_type);
    }
}

function Display($JA,$avt,$avw,$sbt,$njobs,$algo_type){
    include "header.php";
    
    echo'
    <section id = "menu-card">
        <div id = "left">';
                echo '<table border="1"; style = "padding:5px;"> 
                    <thead> 
                        <tr>
                            <td>Jobs</td>
                            <td>Arrival Time</td>
                            <td>CPU Burst Time</td>
                            <td>Waiting Time</td>
                            <td>Turnaround Time</td>
                        </tr>
                    </thead>';

                for($i = 0; $i < $njobs; $i++){
                    echo '<tr>';
                    for($j = 0 ; $j < 3; $j++){
                        echo '<td>'.$JA[$i][$j].'</td>';
                    
                        }
                        echo '<td>'.$JA[$i][4].'</td>';
                        echo '<td>'.$JA[$i][5].'</td>';
                                
                    echo '</tr>';
                }
                echo '</table></br>';

                echo '<h3 style = "margin-left:2px;margin-bottom:5px;color:#300032;padding:10px;width: 55%;">Average Waiting Time: '.$avw.'</h5>';
                echo '<h3 style = "margin-left:2px;color:#300032;padding:10px;width: 55%;">Average Turnaround Time: '.$avt.'</h5></br>';
                echo'<form action="index.php">
                    <input type="submit" value = "Back to Main Menu">
                </form>';
                
                echo '</div>
        <div id = "right">
                <h1>Gantt Chart:</h1>';
                for($i = 0; $i < $njobs; $i++)
                {
                    //echo '<div class = "bar">';
                        echo '<div class = "bar-inner" data-job= "J'.$JA[$i][0].'" data-bt = "'.$JA[$i][2].'"></div>';
                    //echo '</div>';

                }
        echo'
            </div>

    </section>';

    include "footer.php";
}
    
?>
<script type = 'text/javascript'>
    
    var numJobs = "<?php echo $numJobs;?>";
    var sumbt = "<?php echo $sumbt?>";
    var width;
    var JobArray = <?php echo json_encode($JobArray)?>;
    var Colors = ["blue","red","yellow","orange","green","pink","cyan","purple","darkblue","darkred"];
         var barcolor = document.getElementsByClassName("bar-inner");
            for(var i = 0; i < numJobs; i++){
                barcolor[i].style.backgroundColor = Colors[i];
            } 
     (function(document){
        var i = 0;
        var _bars = [].slice.call(document.querySelectorAll('.bar-inner'));
            _bars.map(function(bar,index){
                setTimeout(function() {
                     //for(var i = 0; i < numJobs; i++){
                        width = JobArray[i++][2]/sumbt;
                        width *= 100;
                        bar.style.width = width + '%'; 
                        console.log(width);
                        bar.style.display = "inline-block";
                     //}
                }, index * 1000);
            }) 
    })(document)
    </script>

