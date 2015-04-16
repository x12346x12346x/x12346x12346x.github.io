<html>
     <?php $input=$_POST['count'];
                if($input!=""){           
                    $res =@eval("return ($input);");
                if($res==NULL)
                    $res='ERROR';
                echo $res;
                            }
                    ?>
    <head>
        <title>Homework 5-2</title>
        <meta charset="UTF-8">
    </head>
    <script>
        
        function put(str){
            result.value+=str;
            document.getElementById("count").value=result.value;
        }
        function clearall(){
            result.value="";
            document.getElementById("count").value=result.value;
        }
    </script>
    <body>
        <input type="text" id="result" value="" style="width:150px"><input type="text" id="result0" value="<?php echo $res; ?>" style="width:150px"><br/>
        <input type="button" value="7" onClick="put('7')" style="width:30px">
        <input type="button" value="8" onClick="put('8')" style="width:30px">
        <input type="button" value="9" onClick="put('9')" style="width:30px">
        <input type="button" value="+" onClick="put('+')" style="width:20px">
        <input type="button" value="-" onClick="put('-')" style="width:20px"><br/>
        <input type="button" value="4" onClick="put('4')" style="width:30px">
        <input type="button" value="5" onClick="put('5')" style="width:30px">
        <input type="button" value="6" onClick="put('6')" style="width:30px">
        <input type="button" value="*" onClick="put('*')" style="width:20px">
        <input type="button" value="/" onClick="put('/')" style="width:20px"><br/>
        <input type="button" value="1" onClick="put('1')" style="width:30px">
        <input type="button" value="2" onClick="put('2')" style="width:30px">
        <input type="button" value="3" onClick="put('3')" style="width:30px">
        <input type="button" value="(" onClick="put('(')" style="width:20px">
        <input type="button" value=")" onClick="put(')')" style="width:20px"><br/>
        <input type="button" value="0" onClick="put('0')" style="width:63px">
        <input type="button" value="." onClick="put('.')" style="width:30px">
        <form id="form" name="form" method="POST" action="hw5-2.php" style="margin:0px;display: inline">
        <input type="hidden" id="count" name="count" value="" > 
		<input  type="submit" name="=" value="=" style="width:25px">
        <input type="button" value="C" onClick="clearall()" style="width:30px">
        </form>
        
    </body>
</html>