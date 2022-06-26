
<!DOCTYPE html>
<html>
<head>
<title>Delete product </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
  @if (Session::has('deletealert'))

  <div class="alert alert-success alert-dismissible" role="alert">
  
      <strong>Success !</strong> {{ session('deletealert') }}
  
  </div>
  
  <script>
  
      setTimeout(function() {
  
          window.location.href = "http://127.0.0.1:8000/product"
  
      }, 2000); // 2 second
  
   </script>
   @endif
<div class="container mt-4" >

<form action="{{'/del/'. $products->id }}" method="POST" >
  
    @method('delete')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          
       <div class="container text-center border pt-5" style="border-color: coral;width:1000px;height:300px;background-color:transport;color:black;" >
      <h3>  Are you sure you want to delete this product?<h3>
            </h4>
     <div class="mt-5">
          <button type="submit"  class="btn btn-primary mr-5">Delete</button>
          <a href="http://127.0.0.1:8000/product" class="btn btn-danger ml-5" >back</a>
        </div>
        </div> 
    </form>

  </div>
</body>
</html>
