<html>
<head>
	<title>Registration</title>

</head><body bgcolor='black' text='white' link='white' vlink='white' alink='white' align = 'center'>

	<h1 align='center' class="style3">REGISTER</h1>
	<h3>
		<hr size="5 noshade">

<form action='regcheck.php' method='POST'>
	<p><br>
	Username : 
	  <input type='text' name='username' maxlength='30' placeholder='Username'>
	  <br>
	  <br>
	Email ID : 
	<input type='text' name='email' maxlength='50' placeholder='Email ID'>
    <br> 
    <br>
    Password : 
    <input type='password' name='password1' maxlength='20'>
    <br>
    <br>
    Re-Enter password : 
    <input type='password' name='password2' maxlength='20'>
    <br>
    <br>
    Birthdate :&nbsp;&nbsp;
    <select name='date' size='1' value='date'> 
      <option disabled>Date</option>
      <option value='1'> 1
      <option value='2'> 2
      <option value='3'> 3
      <option value='4'> 4
      <option value='5'> 5
      <option value='6'> 6
      <option value='7'> 7
      <option value='8'> 8
      <option value='9'> 9
      <option value='10'> 10
      <option value='11'> 11
      <option value='12'> 12
      <option value='13'> 13
      <option value='14'> 14
      <option value='15'> 15
      <option value='16'> 16
      <option value='17'> 17
      <option value='18'> 18
      <option value='19'> 19
      <option value='20'> 20
      <option value='21'> 21
      <option value='22'> 22
      <option value='23'> 23
      <option value='24'> 24
      <option value='25'> 25
      <option value='26'> 26
      <option value='27'> 27
      <option value='28'> 28
      <option value='29'> 29
      <option value='30'> 30
      <option value='31'> 31	
      </select>
&nbsp;&nbsp;&nbsp;
            <select name='month' size='1' value='month'>
              <option disabled>Month</option>
              <option value='january'> January
              <option value='february'> February
              <option value='march'> March
              <option value='april'> April
              <option value='may'> May
              <option value='june'> June
              <option value='july'> July
              <option value='august'> August
              <option value='september'> September
              <option value='october'> October
              <option value='november'> November
              <option value='december'> December
      </select>
&nbsp;&nbsp;&nbsp;
            <input type='text' name='year' maxlength='4' placeholder='year'>


          <br>
          <br>
          <br>
          Gender :&nbsp;&nbsp; 
          <input type='radio' name='sex' value='male'> Male &nbsp;&nbsp;&nbsp;
               <input type='radio' name='sex' value='female'> 
               Female <br>

       <br>
       <br>
       Choose your avatar :       


       <input type='radio' name='pp' value='male1'>
      <img src='male1.jpg'height=50 width=50>
       <input type='radio' name='pp' value='male2'>
      <img src='male2.jpg'height=50 width=50>
      <input type='radio' name='pp' value='male3'>
      <img src='male3.jpg'height=50 width=50>
      <input type='radio' name='pp' value='male4'>
      <img src='male4.jpg'height=50 width=50>
      <input type='radio' name='pp' value='female1'>
	  <img src='female1.jpg'height=50 width=50>
	  <input type='radio' name='pp' value='female2'>
	  <img src='female2.jpg'height=50 width=50>
	  <input type='radio' name='pp' value='female3'>
	  <img src='female3.jpg'height=50 width=50>
	  <input type='radio' name='pp' value='female4'>
	  <img src='female4.jpg'height=50 width=50> </p>
	<p>&nbsp;</p>
	<p align="center">
	  <input align='center'type="submit" value="GO">
&nbsp; &nbsp;&nbsp;
	  <input align='center' type="reset"  value="RESET">                                             		
	  </h3>
    </p>
</form>
</body>
</html>