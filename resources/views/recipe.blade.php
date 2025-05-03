<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link rel="stylesheet" href="/style.css">
    <title>Przepisy - Umai Anime Recipe Collection</title>
</head>
<body>
<div class="page-wrapper">
    <nav class="navbar">
        <div class="nav-brand">Umai</div>
        <div class="nav-links">
            <a href="{{route('index')}}">Strona Główna</a>
            <a href="{{route('recipe')}}" class="active">Przepisy</a>
            <a href="{{route('favorites')}}">Ulubione</a>
        </div>
        <div class="search-bar">
            <form action="{{ route('recipe') }}" method="GET" style="display: flex;">
                <input type="text" name="search" placeholder="Search..." />
                <button type="submit" class="search-button">🔍</button>
            </form>
        </div>
    </nav>

    <div class="recipes-list">
        <h1>Wszystkie Przepisy</h1>
        @foreach ($recipes as $key => $recipe)
            <div class="recipe-item" onclick="window.location.href='{{ route('instruction.show', ['slug' => $key]) }}'" style="cursor: pointer;">
                <img src="{{ $recipe['main_img'] }}" alt="{{ $recipe['name'] }}" />
                <div class="recipe-content">
                    <h2>{{ $recipe['name'] }}</h2>
                    <p>{{ $recipe['desc'] }}</p>
                    <div class="recipe-meta">
                        <span>⏱️ {{ $recipe['time'] }}</span>
                        <span>⭐ {{ $recipe['score'] }}/5</span>
                        <button
                            class="heart-button"
                            type="button"
                            data-slug="{{ $key }}"
                            onclick="toggleFavorite(event, this)">
                            {{ in_array($key, $favorites) ? '💔' : '❤️' }}
                        </button>
                    </div>
                </div>
            </div>
        @endforeach

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
<script>
    function toggleFavorite(event, button) {
        event.stopPropagation();
        const slug = button.dataset.slug;
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch(`/toggle-favorite/${slug}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': token,
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Błąd sieci');
                }
                return response.json();
            })
            .then(data => {
                button.textContent = data.favorited ? '💔' : '❤️';
            })
            .catch(error => {
                console.error('Błąd dodawania do ulubionych:', error);
            });
    }
</script>


</html>


