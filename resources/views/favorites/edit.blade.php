<!DOCTYPE html>
<html>
<head>
    <title>Edit Favorite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Edit Favorite</h2>

<form action="{{ route('favorites.update', $favorite->id) }}" method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="name"
           value="{{ $favorite->name }}"
           class="form-control mb-2">

    <input type="text"
           name="category"
           value="{{ $favorite->category }}"
           class="form-control mb-2">

    <textarea name="description"
              class="form-control mb-2">{{ $favorite->description }}</textarea>

    <input type="number"
           name="rating"
           value="{{ $favorite->rating }}"
           class="form-control mb-2">

    <input type="number"
           step="0.01"
           name="price"
           value="{{ $favorite->price }}"
           class="form-control mb-2">

    <input type="number"
           name="calories"
           value="{{ $favorite->calories }}"
           class="form-control mb-2">

    <input type="number"
           name="favorite_level"
           value="{{ $favorite->favorite_level }}"
           class="form-control mb-2">

    <button class="btn btn-warning">
        Update
    </button>

</form>

</div>

</body>
</html>
