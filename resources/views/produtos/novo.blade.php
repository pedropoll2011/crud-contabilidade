<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <form method="post" action="{{route('produtos.store')}}">
        @csrf
        @method('post')
        <div class="row">
            <div class="col-6 ml-4 mt-4">
                <div class="form-group">
                <label for="exampleInputEmail1">Nome</label>
                <input type="text" name="nome" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">    
                </div>
            </div>
            <div class="col-6 ml-4 mt-3">
                <div class="form-group">
                <label for="exampleInputPassword1">Preço de Compra</label>
                <input type="text" name="preco_compra" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
            <div class="col-6 ml-4">
                <div class="form-group">
                <label for="exampleInputPassword1">Preço de Venda</label>
                <input type="text" name="preco_venda" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
         </div>
      </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>