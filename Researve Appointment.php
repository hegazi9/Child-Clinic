<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Reserve Appointment"?></title>
	<meta charset="utf-8">
<link rel="stylesheet" href="CSS/PageStyle.css">
    <link rel="shortcut icon" type="image/x-icon" href="Images/Logo/favicon.ico"/>
</head>
<body>
<h1 style="text-align:center">Reserve an Appointment</h1>
        <br>
                     <div class="marq">
        <marquee behavior="scroll" direction="right" >*
            
            *يرجى كتابة اسم الوالد والوالدة ثلاثي على الاقل **الرجاء كتابة بريد الكتروني يمكننا من الوصول إليك ويمكنك من معرفة اخر التنبيهات ** التأكد من المعلومات قبل الضغط على حجز ** شكرا جزيلا لكم ونتمنى صحة سعيدة لصغيركم  (((Attention)))
        </marquee>
            </div>
   
      <table class="reserv_t">
<form action="mailto:your_mail@yahoo.com" method="post" >
<tr>
<td><p>Child Name:</p></td>
    <div class="in">
<td><input type="text" name="Name" size="50" maxlength="45" ></td>
</tr><br>
    <tr>
<td><p>father Name:</p></td>
    <div class="in">
<td><input type="text" name="Name" size="50" maxlength="45" ></td>
</tr><br>
        <tr>
<td><p>Mother Name:</p></td>
    <div class="in">
<td><input type="text" name="Name" size="50" maxlength="45" ></td>
</tr><br>
<tr>
<td><p>E-mail:</p></td>
<td><input type="text" name="E-mail" size="50"maxlength="45" required></td>
</tr>
    <br>
<tr>
<td><p>Birth date</p></td>
    <div class="in">
<td><input type="date" name="Name"  class="date"></td>
</tr><br>
<tr>
<td><p>Age in months:</p></td>
<td><input type="number" name="Age" size="50" min="5" max="12" step="1" class="date"></td>
</tr><br>
    <tr>
<td><p>phone 1:</p></td>
    <div class="in">
<td><input type="tel" name="Name" size="50" maxlength="11" ></td>
</tr><br>
        <tr>
<td><p>Phone 2:</p></td>
    <div class="in">
<td><input type="tel" name="Name" size="50" maxlength="11" ></td>
</tr><br>
              <tr>
<td><p>Address:</p></td>
    <div class="in">
<td><input type="text" name="Name" size="50" maxlength="400" height="90"></td>
</tr>
    </div>
        
        </div>
    </div>
          </div>
    </div>
  </div>
    </div>
  </div>
    </div>
        
          </form>
        </table>
        
        
<hr>
          <p>the convenient appointment :</p>
          <select class="select">
  <option value="17/5/2016" selected>17/5/2016</option>
  <option value="26/5/2016">26/5/2016</option>
  <option value="4/6/2016">4/6/2016</option>
  <option value="1/7/2016">1/7/2016</option>
</select>
          
         
<input type="button" value="Edit" class="reserve_btn">
<input type="button" value="Submit" class="reserve_btn">
  
</body>
</html>