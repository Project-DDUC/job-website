<!DOCTYPE html>
<html lang="en">
<head>
     <?php include 'head.php';?>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styleapp.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="first_name">
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="last_name">
       </div>  
       <div class="inputfield">
          <label>Father's Name</label>
          <input type="text" class="input" name="father's_name">
       </div>  
      <div class="inputfield">
          <label>Mother's info</label>
          <input type="text" class="input"name="mother's_name">
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select>
              <option value="" name="select">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phone_number">
       </div> 
       <div class="inputfield">
          <label>Date of Birth</label>
          <input type="text" class="input" name="dob">
       </div>
       <div class="inputfield">
          <label>Marital Status</label>
          <div class="custom_select">
            <select>
              <option value="" name="m_status">Select</option>
              <option value="male">Single</option>
              <option value="female">Married</option>
              <option value="female">Widowed</option>
              <option value="female">Divorced</option>
            </select>
          </div>
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="Address"></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="p_code">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <form action="eduinfo.php">
        <input type="submit" value="Now Educational Info" class="btn">
        </form>
      </div>
    </div>
</div>	

       <?php include 'scripts.php';?>
    
</body>
</html>
