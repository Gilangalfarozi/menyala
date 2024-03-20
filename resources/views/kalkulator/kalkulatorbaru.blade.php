<!DOCTYPE html>
<html>
<head>
    <title>KALKUATOR SEDERHANA </title>
    <style>
        table{
            border: 20px solid black;
            margin-left; auto;
            margin-right auto;
            border-collapse: collapse;
            border: black;
            outline: solid black;   
            border-redius: 1px;
            background-color: blue;
            width: 300px;
            height: 30px;
            box-shadow:10px 10px 20px 0px rgba(0, 0, 0, 0,5);
        }
        display{
            background: white;
            text-align: center;
            width: 40px;
            padding: 20px;
            border: 1 px solid black;
        }
        td{
            width: 50px;
            padding: 15px;
        }
        tr{
            width: 50px;
            padding: 15px;
        }
        input[type="button"]{
            width: 100px;
            padding: 20px 40px;
            background-color: green;
            color:white;
            margin-bottom: 10px;
            border: none;
            border-radius: 20px;
            font-weight:bold;
            font-size: large;
            box-shadow: 10px 10px 20px 0px rgba(0, 0, 0, 0,5);
        }
        input[type="button"]:hover {
            background-color: red;
        }
        input[type="text"]{
            width: 400px;
            padding: 10px;
            text-align: justify;
            font-size: large;
            border-radius: 1px;
            outline: 3px solid black;
            text-align: center;
        }

    </style>                
</head>

<body>
    <center>
    <form name="form1" action="" method="post"> 
         <table border=1 width="450" height="200">
    </center><br>
    <tr>
      <td colspan="4">
        <center>
            <h1>KALKULATOR </h1>
        </center>
       </td>
    </tr>
    <tr>
        <td colspan="4">
            <center><input type="text" name="text1" id="">
        </td>
    </center>
    </tr><br>      
            <tr>
                <td><input type="button" value="1" onclick="form1.text1.value+='1'"></td>
                <td><input type="button" value="2" onclick="form1.text1.value+='2'"></td>
                <td><input type="button" value="3" onclick="form1.text1.value+='3'"></td>
                <td><input type="button" value="+" onclick="form1.text1.value+='+'"></td>
             </tr>
             <tr>
                <td><input type="button" value="4" onclick="form1.text1.value+='4'"></td>
                <td><input type="button" value="5" onclick="form1.text1.value+='5'"></td>
                <td><input type="button" value="6" onclick="form1.text1.value+='6'"></td>
                <td><input type="button" value="-" onclick="form1.text1.value+='-'"></td>
            </tr>
            <tr>
                <td><input type="button" value="7" onclick="form1.text1.value+='7'"></td>
                <td><input type="button" value="8" onclick="form1.text1.value+='8'"></td>
                <td><input type="button" value="9" onclick="form1.text1.value+='9'"></td>
                <td><input type="button" value="x" onclick="form1.text1.value+='*'"></td>
             </tr>
            <tr>
                <td><input type="button" value="C" onclick="form1.text1.value=''"></td>
                <td><input type="button" value="0" onclick="form1.text1.value+='0'"></td>
                <td><input type="button" value="=" onclick="form1.text1.value=eval(form1.text1.value)"></td>
                <td><input type="button" value="/" onclick="form1.text1.value+='/'"></td>
            </tr>
        </table>
      </br>
   
    </form>
    
</body>
</html>
