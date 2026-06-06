<!DOCTYPE html>
<html>
<head>
    <title>Add Favorite</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="card">
        <div class="card-header">
            Add Favorite Food or Drink
        </div>

        <div class="card-body">

            <form action="{{ route('favorites.store') }}" method="POST">

                @csrf

                <input type="text" name="name" class="form-control mb-3" placeholder="Food / Drink Name">

                <input type="text" name="category" class="form-control mb-3" placeholder="Category">

                <textarea name="description" class="form-control mb-3" placeholder="Description"></textarea>

                <input type="number" name="rating" class="form-control mb-3" placeholder="Rating">

                <input type="number" step="0.01" name="price" class="form-control mb-3" placeholder="Price">

                <input type="number" name="calories" class="form-control mb-3" placeholder="Calories">

                <input type="number" name="favorite_level" class="form-control mb-3" placeholder="Favorite Level">

                <button class="btn btn-success">
                    Save Favorite
                </button>

                <a href="{{ route('favorites.index') }}" class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>
