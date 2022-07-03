<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js">   
    <title>Task_one</title>
</head>
<body>




<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Product </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('product.create')}}"> Create New Product</a>
            </div>
          
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('category.list')}}"> Go To Category</a>
            </div>

        </div>
    </div>
  
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" >
        <tr>
            <th>SL</th>
            <th> Category Name</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Slug</th>
            <th>Action</th>
        </tr>
      @foreach($products as $product)
        <tr>
        
             <td>{{$product->id}}</td>
            <td>{{$product->category->name}}</td>
         
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
          
            <td>{{$product->category->slug}}</td>
            <td>
            <a class="btn btn-primary" href="">Edit</a>
            </td>
            <td>
              
       
                  
                <form action="" method="get">
   
                    @csrf
             
                    <button type="submit"  class="btn btn-danger">Delete</button>
                </form>
            </td>
        
        </tr>
 
         @endforeach

     


        <div class="card-footer">
            <div class="row justify-content-between">
                <div class="col-md-6">
              
                </div>
                <div class="col-md-2">

                </div>





    </table>
  
  
</body>
</html>