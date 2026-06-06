<!DOCTYPE html>
<html>
<head>
    <title>View Favorite</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>{{ $favorite->name }}</h1>

    <p><strong>Category:</strong> {{ $favorite->category }}</p>

    <p><strong>Description:</strong> {{ $favorite->description }}</p>

    <p><strong>Rating:</strong> ⭐ {{ $favorite->rating }}</p>

    <p><strong>Price:</strong> ₱{{ $favorite->price }}</p>

    <p><strong>Calories:</strong> {{ $favorite->calories }}</p>

    <p><strong>Favorite Level:</strong> {{ $favorite->favorite_level }}</p>

    <a href="{{ route('favorites.index') }}" class="btn btn-primary">
        Back
    </a>

</div>

</body>
</html>

