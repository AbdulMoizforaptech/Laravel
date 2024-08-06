<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark py-3">
      <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>
    
    <div class="container">
      <div class="row justify-content-end mt-4">
        <div class="col-md-10 d-flex justify-content-end">
        <a href="" class="btn btn-danger">Back</a>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-md-8">
          <div class="card border-0 shadow-lg my-4">
            <div class="card-header bg-dark text-white">
              <h3>Create Product</h3>
            </div>
            <div class="card-body">
              <form enctype="multipart/form-data" action="{{route('products.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label h5">Name</label> 
                  <input type="text" value="{{old('name')}}"  class="@error('name') is-invalid @enderror form-control" id="name" name="name" placeholder="Enter product name">
                  @error('name')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="sku" class="form-label h5">SKU</label>
                  <input type="text"  value="{{old('sku')}}" class="@error('sku') is-invalid @enderror form-control" id="sku" name="sku" placeholder="Enter SKU">
                  @error('sku')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="price" class="form-label h5">Price</label>
                  <input type="text" value="{{old('price')}}" class="@error('price') is-invalid @enderror form-control" id="price" name="price" placeholder="Enter price">
                  @error('price')
                    <p class="invalid-feedback">{{ $message }}</p>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label h5">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter product description" ></textarea>
                </div>
               
                <div class="mb-3">
                  <label for="image" class="form-label h5">Image</label>
                  <input type="file" class="form-control form-control-lg" id="image" name="image">
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>