<?php
if (isset($_POST['save'])) {
	$name=$_POST['name'];
	$contactno=$_POST['contactno'];
	$emailid=$_POST['emailid'];
echo'<script type="text/javascript">window.location="https://api.whatsapp.com/send?phone=+919843288810&text='.$name.'%20'.$contactno.'%20'.$emailid.'";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
*{
  margin:0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

html,body{
  height: 100%;
}

body{
  display: grid;
  place-items: center;
  text-align: center;
  background: #dde1e7;
}

.content{
  width: 330px;
  background: #dde1e7;
  border-radius: 10px;
  padding: 40px 30px;
  box-shadow: -3px -3px 7px #ffffff73,
              2px 2px 5px rgba(94, 104, 121, 0.288);
}

.content .text{
  font-size: 33px;
  font-weight: 600;
  margin-bottom: 35px;
  color: #000;
}

.content .field{
  height: 50px;
  width: 100%;
  display: flex;
  position: relative;
}

.field input{
  height: 100%;
  width: 100%;
  padding-left: 45px;
  font-size: 18px;
  outline: none;
  border: none;
  color: #595959;
  background: #dde1e7;
  border-radius: 25px;
  box-shadow: inset 2px 2px 5px #babecc,
              inset -5px -5px 10px #ffffff73;
}

.field input:focus ~ label{
  box-shadow: inset 2px 2px 5px #babecc,
              inset -1px -1px 2px #ffffff73;
}

.field:nth-child(2){
  margin-top: 20px;
}

.field span{
  position: absolute;
  width: 50px;
  line-height: 50px;
  color: #595959;
}

.field label{
  position: absolute;
  top: 50%;
  left: 45px;
  pointer-events: none;
  color: #666666;
  transform: translateY(-50%);
}


.field input:focus ~ label{
  opacity: 0;
}

.forgot-pass{
  text-align: left;
  margin: 10px 0 10px 5px;
}

.forgot-pass a{
  font-size: 16px;
  color: #3498db;
  text-decoration: none;
}

.forgot-pass:hover a{
  text-decoration: underline;
}

button{
  margin: 15px 0;
  width: 100%;
  height: 50px;
  color: #000;
  font-size: 18px;
  font-weight: 600;
  background: #dde1e7;
  border: none;
  outline: none;
  cursor: pointer;
  border-radius: 25px;
  box-shadow: 2px 2px 5px #babecc,
              -5px -5px 10px #ffffff73;
}

button:focus{
  color: #3498db;
  box-shadow: inset 2px 2px 5px #babecc,
              inset -5px -5px 10px #ffffff73;
}

.signup{
  font-size: 16px;
  color: #595959;
  margin: 10px 0;
}

.signup a{
  color: #000;
  text-decoration: none;
}

.signup a:hover{
  text-decoration: underline;
}

	</style>
    <div class="content">
 
      <div class="text">Enquiry Form</div>
      <form action="#" method="post">
        <div class="field">
          <input type="text" placeholder="Name" name="name"required>
          
        </div>
        <div class="field">
          <input type="text" placeholder="Contact No" name="contactno">
          
        </div>
        <div class="field">
          <input type="email" placeholder="Email  id" name="emailid">
          
        </div>
        <button name="save">Submit</button>
        </form>
  </div>
</body>
</html>