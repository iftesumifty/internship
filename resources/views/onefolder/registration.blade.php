
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style>
 <h1> Registration Form  </h1>
  text-center {
  height: 200%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("https://media.gettyimages.com/id/160768331/photo/library-bookshelf-diminishing-perspective.jpg?s=612x612&w=gi&k=20&c=ZRZl6A1DeBj3_mNQqiKgbPWv5HSgqA678UM_mKnOgVM=");

  min-height: 650px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  text-align: center;
}

/* Add styles to the form container */
.container {
  position: absolute;
 margin-top: 79px;
 margin-left: 507px;
 margin-right: 56px;
 margin-bottom: 78px;
  max-width: 330px;
  max-height: 500px; 
  padding: 46px;
  background-color: sandybrown;
}



/* Set a style for the submit button */
.alter-alter-danger {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 200%;
  opacity: 0.9;
}

.alter-alter-danger:hover {
  opacity: 1;
}
</style>


</head>


<body class="text-center" >



<div class="bg-img">



<form action="{{route('create_user')}}" method='post'class="container" >
<fieldset><legend>personal info</legend>
<p>Open from <time>10:00</time> to <time>21:00</time> every weekday.</p>
  @csrf


  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control"  name="name" id="exampleInputPassword1">
  </div><br>

  
  

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div><br>

  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">phone</label>
    <input type="tel" class="form-control" name="phone" id="exampleInputPassword1">
  </div><br>

  
  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="exampleInputPassword1">
  </div><br>

  

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>