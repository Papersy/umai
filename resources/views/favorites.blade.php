<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <link rel="icon" type="image/svg+xml" href="/vite.svg"/>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Ulubione Przepisy - Umai Anime Recipe Collection</title>
</head>
<body>
<div class="page-wrapper">
    <nav class="navbar">
        <div class="nav-brand">Umai</div>
        <div class="nav-links">
            <a href="{{route('index')}}">Strona Główna</a>
            <a href="{{route('recipe')}}">Przepisy</a>
            <a href="{{route('favorites')}}" class="active">Ulubione</a>
            <a href="{{route('bibliografia')}}"">Bibliografia</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search..."/>
            <button class="search-button">🔍</button>
        </div>
    </nav>

    <div class="recipes-list">
        <h1>Ulubione Przepisy</h1>

        @if(count($favoriteRecipes) > 0)
            @foreach ($favoriteRecipes as $key => $recipe)
                <div class="recipe-item">
                    <img src="{{ $recipe['main_img'] }}" alt="{{ $recipe['name'] }}"/>
                    <div class="recipe-content">
                        <h2>{{ $recipe['name'] }}</h2>
                        <p>{{ $recipe['desc'] }}</p>
                        <div class="recipe-meta">
                            <span>⏱️ {{ $recipe['time'] }}</span>
                            <span>⭐ {{ $recipe['score'] }}/5</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>Nie masz jeszcze żadnych ulubionych przepisów.</p>
        @endif
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-brand">Umai</div>
            <div class="footer-text">
                <p>Jeśli masz jakiekolwiek pytania, nie wahaj się z nami skontaktować.</p>
                <p>Jesteśmy gotowi odpowiedzieć na wszelkie pytania i zapewnić Państwu niezbędną pomoc.</p>
            </div>
            <div class="social-links">
                <a href="#" title="Facebook">📘</a>
                <a href="#" title="Email">📧</a>
                <a href="#" title="Instagram">📸</a>
                <a href="#" title="Telegram">📬</a>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
