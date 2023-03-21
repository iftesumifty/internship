
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
text-center {
  height: 200%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("https://cdn.pixabay.com/photo/2016/03/26/22/21/books-1281581__340.jpg");

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
  right: 0;
  margin: 20px;
  max-width: 330px;
  max-height: 5000px; 
  padding: 46px;
  background-color: salmon;
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




<h1 >Login Form</h1>
  <form action="{{route('login')}}" method ="post"class="container" >
  @csrf
                    <div class="mb-3"  >
                        <label for="exampleInputEmail1" class="form-label" >Email address</label>
                        <input type="email" class="form-control border border-primary"name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div><br>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control border border-primary" name="password"id="exampleInputPassword1">
                    </div>
                    <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>

                    <div div class="mb-3">
                    <p class="mb-0  text-center">Don't have an account?<a href="{{route('registration')}}"
                            class="text-primary fw-bold">Sign
                            Up</a></p>
                    </div>
                </form>

                
  
</main>
 </body>
</html>





