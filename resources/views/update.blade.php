@extends('layouts.app')
@section('content')
<div class="conatiner" style="margin-left:50px;margin-right:200px;"> 
<form action="{{'/upd/'. $products->id}}" method="POST" >
   
    @method('PUT')
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         
          <div class="form-group">           
          <input type="text" class="form-control" name="Image" value="{{ $products->Image }}">
          </div>
          <br>
          <div class="form-group">
            <label for="ProductName">product name</label>
            <input type="text" class="form-control" name="ProductName" value="{{ $products->ProductName }}" >
          </div>
          <br>
          <div class="form-group">
            <label for="EAN">EAN</label>
            <input type="text" class="form-control" name="EAN" value="{{ $products->EAN }}" >
          </div>
          <br>
          <div class="form-group">
            <label for="Type">type</label>
            <input type="value" class="form-control" name="Type" value="{{ $products->Type }}" >
          </div>
           <br>
           <div class="form-group">
            <label for="Weight">weight</label>
            <input type="value" class="form-control" name="Weight" value="{{ $products->Weight }}" >
          </div>
           <br>
           <div class="form-group">
            <label for="Color">color</label>
            <input type="value" class="form-control" name="Color" value="{{ $products->Color }}" >
          </div>
           <br>
           <div class="form-group">
            <label for="Active">active</label>
            <input type="value" class="form-control" name="Active" value="{{ $products->Active }}" >
          </div>
           <br>
          <button type="submit"  class="btn btn-primary">Update</button>
    </form>  
  </div> 
@endsection