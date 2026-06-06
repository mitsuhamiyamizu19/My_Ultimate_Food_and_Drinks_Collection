<!DOCTYPE html>
<html>
<head>
    <title>Food & Drink Collection</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#876341;
        }

        .header{
            background:#3b2c1f;
            color:white;
            padding:20px;
            border-radius:10px;
            margin-bottom:20px;
        }

        .card-box{
            border-radius:10px;
            box-shadow:0 2px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container mt-4">

    <div class="header text-center">
        <h1>🍔 My Ultimate Food & Drink Collection 🍹</h1>
        <p>Favorite Foods and Drinks Recommendation App</p>
    </div>

   <a href="{{ route('favorites.create') }}"
   class="btn mb-3"
   style="
        background:#e6ccb2;
        color:#3b2c1f;
        border:none;
        font-weight:bold;
   ">
    + Add New Favorite
</a>

    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card card-box">
                <div class="card-body">
                    <h5>💰 Most Expensive</h5>

                    @if($mostExpensive)
                        <h4>{{ $mostExpensive->name }}</h4>
                        <p>₱{{ $mostExpensive->price }}</p>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-box">
                <div class="card-body">
                    <h5>💸 Cheapest</h5>

                    @if($cheapest)
                        <h4>{{ $cheapest->name }}</h4>
                        <p>₱{{ $cheapest->price }}</p>
                    @endif

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-box">
                <div class="card-body">
                    <h5>🔥 Highest Calories</h5>

                    @if($highestCalories)
                        <h4>{{ $highestCalories->name }}</h4>
                        <p>{{ $highestCalories->calories }} Calories</p>
                    @endif

                </div>
            </div>
        </div>

    </div>

    <div class="card card-box mb-4">
        <div class="card-header">
            🏆 Top 10 Highest Rated
        </div>

        <ul class="list-group list-group-flush">

            @foreach($top10 as $item)

            <li class="list-group-item">
                {{ $item->name }}
                <span class="float-end">
                    ⭐ {{ $item->rating }}
                </span>
            </li>

            @endforeach

        </ul>
    </div>

    <div class="card card-box">

        <div class="card-header">
            📋 ALL FAVORITES
        </div>

        <h3>Total Favorites: {{ $favorites->count() }}</h3>

        <div class="card-body">

            <table class="table table-striped">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Rating</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($favorites as $favorite)

                    <tr>

                        <td>{{ $favorite->name }}</td>

                        <td>{{ $favorite->category }}</td>

                        <td>⭐ {{ $favorite->rating }}</td>

                        <td>₱{{ $favorite->price }}</td>

                        <td>

                            <a href="{{ route('favorites.show',$favorite->id) }}"
                               class="btn btn-info btn-sm">
                                View
                            </a>

                            <a href="{{ route('favorites.edit',$favorite->id) }}"
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('favorites.destroy',$favorite->id) }}"
                                  method="POST"
                                  style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    Delete
                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>
