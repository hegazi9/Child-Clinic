<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Register Form"?></title>
	 <meta charset="utf-8">
<link rel="stylesheet" href="CSS/PageStyle.css">
    <link rel="shortcut icon" type="image/x-icon" href="Images/Logo/favicon.ico"/>
</head>
<body>

        <h1 style="text-align:center">Registration form</h1>
     
        <div class="marq">
        <marquee behavior="scroll" direction="right" >*
            
            *يرجى كتابة الاسم ثلاثي على الاقل _ _ _الرجاء كتابة بريد الكتروني صالح يمكننا من الوصول إليك ويمكنك من معرفة اخر التنبيهات _ _ _ التأكد من المعلومات قبل الضغط على تسجيل _ _ _ كتابة "كلمة مــرور " لا تقل عن 8 حروف ويفضل ان تكون مزيج بين حروف وارقام _ _ _ الرجاء إدخال العنوان واسم البلدة صحيح ليتم توجيهكك لأقرب مركز تطعيم _ _ _شكرا جزيلا ونتمنى سعادة وصحة صغيركم
        </marquee>
            </div> 
    
    
         <table class="reserv_t">
<form action="mailto:your_mail@yahoo.com" method="post" >
<tr>
<td><p>First Name:</p></td>
    <div class="in"><!-- تقريبا الديف دا مالوش لازمة-->
<td><input type="text" name="Name" size="50" maxlength="45" ></td>
</tr><br>
    <tr>
<td><p>LAst Name:</p></td>
    <div class="in">
<td><input type="text" name="Name" size="50" maxlength="45" ></td>
</tr><br>
        
       
<tr>
<td><p>Valid E-mail:</p></td>
<td><input type="text" name="E-mail" size="50"maxlength="45" required></td>
</tr>
    <br>
              <tr>
<td><p> write pass for future use:</p></td>
    <div class="in">
<td><input type="password" name="pass" size="50" maxlength="45" min="8" max="20"></td>
</tr><br>
<tr>
<td><p>Age:</p></td>
    <div class="in">
<td><input type="number" name="Name" min="15" step="1" class="date" ></td>
</tr><br>
    <tr>
<td><p>Number of childs need to vaccation:</p></td>
    <div class="in">
<td><input type="number" name="Name" min="1" step="1" class="date"></td>
</tr><br>
<tr>
<td><p>state:</p></td>
<td><input type="text" name="state" size="50"  ></td>
</tr><br>
    <tr>
<td><p>City:</p></td>
<td><input type="text" name="state" size="50"  ></td>
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
</div>  
</div>
        
          </form>
        </table>
        
        



<input type="button" value="Submit" class="reserve_btn">

</body>
</html>