<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Umai - Anime Recipe Collection</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-brand">Umai</div>
        <div class="nav-links">
            <a href="{{route('index')}}" class="active">Strona Główna</a>
            <a href="{{route('recipe')}}">Przepisy</a>
            <a href="{{route('favorites')}}">Ulubione</a>
        </div>
        <div class="search-bar">
            <form action="{{ route('recipe') }}" method="GET" style="display: flex;">
                <input type="text" name="search" placeholder="Search..." />
                <button type="submit" class="search-button">🔍</button>
            </form>
        </div>
    </nav>

    <div class="welcome-banner">
        <div class="mascot-message">
            <p>Hejka!</p>
            <p>Witam w Umai. Tutaj znajdziesz przepisy na desery i wypieki z różnych anime. Wybierz odpowiedni przepis dla siebie i odkryj nowe odckowości!</p>
            <a href="{{route('recipe')}}">
                <button class="cta-button" onclick="{{route('recipe')}}">Wybierz przepis</button>
            </a>
        </div>
    </div>

    <section class="recipes-section">
        <h2>Najnowsze Przepisy</h2>
        <div class="recipe-grid">
            @foreach ($recipes as $key => $recipe)
                <div class="recipe-card"  onclick="window.location.href='{{ route('instruction.show', ['slug' => $recipe->id]) }}'" style="cursor: pointer;">
                    <img src={{ $recipe['main_img'] }} alt={{ $recipe['name'] }} />
                    <h3>{{ $recipe['name'] }}</h3>
                    <p>{{ $recipe['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

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

    <script type="module" src="/main.js"></script>
</body>
</html>
