<?php
?>
<center>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Clock</title>

<!-------------------------------CSS----------------------------------->

<style type="text/css">
    body{
        background-color:#ABEBC6 ;
    }
	
    div{
        font-family: "Courier New", Courier, monospace;
        font-size:60px;
        font-weight:bold;
		

        color:#641E16;
    }
</style>

<!-------------------------------JavaScript------------------------------>

<script type="text/javascript">
function startTime()
{
var now=new Date();
var h=now.getHours();
var m=now.getMinutes();
var s=now.getSeconds();
var tt = getAMPM(h);
h = convertTo12Hr(h);
m=to2DigitNumber(m);
s=to2DigitNumber(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s + " " + tt;
t=setTimeout('startTime()',500);
}

function convertTo12Hr(val)
{
 if(val == 0)
   va1 = 12;
else if(val > 12)
   val = val-12;
return val;
}

function getAMPM(val)
{
 if(val < 12)
      return 'AM'
  else 
      return 'PM';
}

function to2DigitNumber(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>

<body onload="startTime()">
<div id="txt"></div>

