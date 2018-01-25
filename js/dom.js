

if(algo_type == "fcfs"){
    document.title = "First Come First Serve";
    document.getElementById("h_title").innerHTML = "First Come First Serve";
}
else if(algo_type == "sjf"){
    document.title = "Shortest Job First";
    document.getElementById("h_title").innerHTML = "Shortest Job First";
}
else if(algo_type == "priority"){
    document.title = "Priority Algorithm";
    document.getElementById("h_title").innerHTML = "Priority Algorithm";
}
else if(algo_type == "deadline"){
    document.title = "Deadline Algorithm";
    document.getElementById("h_title").innerHTML = "Deadline Algorithm";
}
else if(algo_type == "preprio"){
    document.title = "Preemptive Priority";
    document.getElementById("h_title").innerHTML = "Preemptive Priority";
}
else if(algo_type == "srtf"){
    document.title = "Shortest Remaining Time First";
    document.getElementById("h_title").innerHTML = "Shortest Remaining Time First";
}
else if(algo_type == "rr"){
    document.title = "Round Robin";
    document.getElementById("h_title").innerHTML = "Round Robin";
}
else if(algo_type == "rr/w"){
    document.title = "Round Robin w/ Overhead";
    document.getElementById("h_title").innerHTML = "Round Robin with Overhead";
}

function getValue(){
    var numJobs = document.getElementById("dropdown").value; 
    console.log(numJobs);
    produceTable(numJobs);
}

function produceTable(num_rows){
    var num_cols = 0;
    var theader = '';
     if(algo_type == "priority"){
        theader = '<table border="1" align = "center";> <thead> <tr><td>Jobs</td><td>Arrival Time</td><td>CPU Burst Time</td><td>Priority</td></tr></thead>\n';
        num_cols = 4;
    }else if(algo_type == "deadline"){
        theader = '<table border="1" align = "center";> <thead> <tr><td>Jobs</td><td>Arrival Time</td><td>CPU Burst Time</td><td>Deadline</td></tr></thead>\n';
        num_cols = 4;
    }else{
        theader = '<table border="1" align = "center";> <thead> <tr><td>Jobs</td><td>Arrival Time</td><td>CPU Burst Time</td></tr></thead>\n';
        num_cols = 3;
    }
    var tbody = '';

     for( var i=0; i<num_rows;i++)
    {
        tbody += '<tr>';
        tbody += '<td> <input type = "hidden" form = "JobForm" name = "JobArray['+i+'][0]" value = "'+(i+1)+'">'+(i+1)+'</td>';
        for( var j=1; j<num_cols;j++)
        {
            tbody += '<td>';
            tbody += '<input type = "number" name = "JobArray['+i+']['+j+']" form = "JobForm">';
            tbody += '</td>';
        }
        tbody += '</tr>\n';
    } 

    var tfooter = '</table>'; 
    var hidden = '';
        for(var i = 0; i < num_rows; i++){
            for(var j = num_cols; j <= 5 ; j++){
                hidden += '<input type = "hidden" name = "JobArray['+i+']['+j+']" value = "0" form = "JobForm">';
            }
        } 
    // var submit = '<div class = "center"><input type="submit" name = "submit" style = "margin:5px;"></div>';
    document.getElementById('tableJobs').innerHTML = theader + tbody + tfooter + hidden;
}