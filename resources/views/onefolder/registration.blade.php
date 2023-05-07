<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Login Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
html, body{
  background-image:url("https://images.unsplash.com/photo-1470790376778-a9fbc86d70e2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Ym9vayUyMGJhY2tncm91bmR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60") ;
  display: grid;
  height: 100vh;
  width: 100%;
  place-items: center;
  margin-bottom: 10rem;
}
::selection{
  background: #ff80bf;

}
.container{
  background: honeydew;
  max-width: 755px;
 
  max-height: 800px;
  padding:  2px  45px;
  border-radius: 59px;
  box-shadow:salmon;
}

.container form .title{
  font-size: 30px;
  font-weight: 600;
  margin: 20px 0 10px 0;
  position: relative;
}
.container form .title:before{
  content: '';
  position: absolute;
  height: 5px;
  width: 33px;
  left: 0px;
  bottom: 3px;
  border-radius: 5px;
  background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
}
.container form .input-box{
  width: 100%;
  height: 65px;
  margin-top: 25px;
  position: relative;
}
.container form .input-box input{
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 16px;
  border: none;
}
.container form .underline::before{
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  background: #ccc;
  left: 0;
  bottom: 0;
}
.container form .underline::after{
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
  left: 0;
  bottom: 0;
  transform: scaleX(0);
  transform-origin: left;
  transition: all 0.3s ease;
}
.container form .input-box input:focus ~ .underline::after,
.container form .input-box input:valid ~ .underline::after{
  transform: scaleX(1);
  transform-origin: left;
}
.container form .button{
  margin: 40px 0 20px 0;
}
.container .input-box input[type="submit"]{
  background: linear-gradient(to right, #99004d 0%, #ff0080 100%);
  font-size: 17px;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.container .input-box input[type="submit"]:hover{
  letter-spacing: 1px;
  background: linear-gradient(to left, #99004d 0%, #ff0080 100%);
}
.container .option{
  font-size: 14px;
  text-align: center;
}
.container .facebook a,
.container .twitter a{
  display: block;
  height: 45px;
  width: 100%;
  font-size: 15px;
  text-decoration: none;
  padding-left: 20px;
  line-height: 45px;
  color: #fff;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.container .facebook i,
.container .twitter i{
  padding-right: 12px;
  font-size: 20px;
}
.container .twitter a{
  background: linear-gradient(to right,  #00acee 0%, #1abeff 100%);
  margin: 20px 0 15px 0;
}
.container .twitter a:hover{
  background: linear-gradient(to left,  #00acee 0%, #1abeff 100%);
  margin: 20px 0 15px 0;
}
.container .facebook a{
  background: linear-gradient( to right,  #3b5998 0%, #476bb8 100%);
  margin: 20px 0 50px 0;
}
.container .facebook a:hover{
  background: linear-gradient( to left,  #3b5998 0%, #476bb8 100%);
  margin: 20px 0 50px 0;
}

</style>
   

  </head>
  <body>
    <h1>Digital Library System</h1>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMQrx_YuRWlkcLczKXi3MUqm8nxaU31J4gXcm1T9oyARnuTNuYhon4J786hxg-dHyTm-s&usqp=CAU"  width="60rem">
    <div class="container">
    <form action="{{route('create_user')}}" method='post'class="container" >
      <h1>Registration Form</h1>
<fieldset><legend>personal info</legend><br>
<p>Open from <time>10:00</time> to <time>21:00</time> every weekday.</p><br>
  @csrf

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name:</label>
    <input type="text" class="form-control"  name="name" id="exampleInputPassword1">
  </div><br>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div><br>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone:</label>
    <input type="tel" class="form-control" name="phone" id="exampleInputPassword1">
  </div><br>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address:</label>
    <input type="text" class="form-control" name="address" id="exampleInputPassword1">
  </div><br>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password:</label>
    <input type="int" class="form-control" name="password" id="exampleInputPassword1">
  </div><br>
  

  <tr>
    <td>
    <button type="submit" class="btn btn-primary">Submit</button><br><br>
  
    </td>
 
  </tr>
 
</form>
</fieldset>
  </body>
 
 
</html>

