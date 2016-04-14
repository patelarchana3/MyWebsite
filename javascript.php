<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="stylesheet/javascript.css" type="text/css">
        
        <title> Javascript Demo </title>
        
        <script type="text/javascript">

        function foo() {
            var credit=0;
            var total=0;
            var grade_point = {"A":4, "B+" :3.5, "B":3, "C+":2.5, "C":2, "D":1, "F":0, "AF":0, "WF":0}
            var gpa_info =document.getElementById("text").value;
            var info = gpa_info.split("\n");
            for(var i=0; i<info.length; i++) {
		var gpa = info[i].split(" ");
		var grade=grade_point[gpa[1]];
		total=total+(grade*gpa[2]);
		credit = credit + parseInt(gpa[2]);
		
            }
            var final_gpa= total/credit;
            document.getElementById("total").value=total;	
	
            document.getElementById("grade").value=credit;   
	
            document.getElementById("average").value=final_gpa;
	
        }
        </script>
    </head>
    
    <body>
     <h1 class="heading">GPA Calculator</h1>
     
     <p>
         This is simple Grade Calculator. Enter first Course Title , Grade and then Number of Hours. For example " MATH   A   3".
     </p>
	<div class="div1">
		<textarea id="text" rows="13" cols="50" class="scroll"></textarea>
	</div>
	<div class="div2">
		<input class="button" type="button" value="Compute GPA" onclick="foo()"/>
	</div>
	
	<div class="padleft">
		Total # of grade point: <input type="text" id="total" class="box1"/>
	</div>
	<div class="padleft">
		Total # of grade Hours: <input type="text" class="box2" id="grade"/>
	</div>
	<div class="padleft">
		Grade Point Average: <input type="text" class="box3" id="average"/>
	</div>  
    </body>
</html>