@extends('layouts.admin')

@section('content')

<section class="container bg-dark rounded-3 mt-5">
    <h2 class="text-center pt-2">Inserisci nuovi Comics</h2>
    <form action="" method="POST" class="p-4">
        @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb" required>
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price" required>
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series" required>
          </div>
          <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" class="form-control" id="artists" name="artists" required>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Writers</label>
            <input type="text" class="form-control" id="writers" name="writers" required>
          </div>
          <div class="mb-3">
            <label for="type" class="form-label d-block">Type</label>
           <select class="btn btn-danger" name="type" id="type" required>
            <option value="comic book">Comic Book</option>
            <option value="graphic novel">Graphic Novel</option>
           </select>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="reset" class="btn btn-primary">Reset</button>

          <div>
              <button class="btn btn-danger mt-3 mb-4"><a class="text-white text-decoration-none" href="">Torna alla sezione precedente</a></button>
         </div>
    </form>


</section>
@endsection
