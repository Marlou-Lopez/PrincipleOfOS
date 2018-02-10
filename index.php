<!DOCTYPE html>
<html>
<head>
    <title>Principles of Operating Systems</title>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">

	<link rel="stylesheet" type = "text/css" href = "./css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="header-title">
                <h2>Principles of Operating Systems</h2>
            </div>
        </div>
    </header>
    
    <section id = "menu-card">
            <div class="card-container">
                <div class="card">
                    <div class="side"><p class = "card-title">PROCESS MANAGEMENT</p>
                        <div>
                            <img src="./img/clock-5-350.png" alt="time">
                        </div>
                    </div>
                    <div class="side back">
                    <h2>Non-Preemptive</h2>
                        <ul>
                            <li><a href="main.php?algo_type=fcfs">First Come First Serve</a></li>
                            <li><a href="main.php?algo_type=sjf">Shortest Job First</a></li>
                            <li><a href="main.php?algo_type=priority">Priority Algorithm</a></li>
                            <li><a href="main.php?algo_type=deadline">Deadline Algorithm</a></li>
                        </ul>
                    <h2>Preemptive</h2>
                        <ul>
                            <li><a href="main.php?algo_type=preprio">Pre emptive Priority</a></li>
                            <li><a href="main.php?algo_type=srtf">Shortest Remaining Time First</a></li>
                            <li><a href="main.php?algo_type=rr">Round Robin</a></li>
                            <li><a href="main.php?algo_type=rr/w">Round Robin w/ Overhead</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card-container">
                <div class="card">
                    <div class="side"><p class = "card-title">STORAGE MANAGEMENT</p>
                        <div>
                            <img src="./img/database-350.png" alt="database">
                        </div>
                    </div>
                    <div class="side back"><h2>WEAK SHIT TIN</h2></div>
                </div>
            </div>

            <!-- <div class="card-container">
                <div class="card">
                    <div class="side"><p class = "card-title">FILE MANAGEMENT</p>
                        <div>
                            <img src="./img/files.png" alt="files">
                        </div>
                    </div>
                    <div class="side back"><h2>Ops Provoked</h2></div>
                </div>
            </div> -->
    </section>

    <footer>
        <div class="container">
            <p>Team Basik, Copyright &copy; 2018</p>
        </div>
    </footer>


</body>
</html>