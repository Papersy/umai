<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link rel="stylesheet" href="/style.css">
    <title>Anmitsu Recipe - Umai Anime Recipe Collection</title>
</head>
<body>
    <nav class="navbar">
        <div class="nav-brand">Umai</div>
        <div class="nav-links">
            <a href="{{ route('index') }}">Strona Główna</a>
            <a href="{{ route('recipe') }}">Przepisy</a>
            <a href="{{route('favorites')}}">Ulubione</a>
            <a href="{{route('bibliografia')}}"">Bibliografia</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search..." />
            <button class="search-button">🔍</button>
        </div>
    </nav>

    <div class="recipe-detail">
        <div class="recipe-header">
            <h1>{{ $recipe['name'] }}</h1>
            <div class="recipe-meta-info">
                <span>⏱️ Czas przygotowania: {{ $recipe['time'] }}</span>
                <span>👥 Porcje: {{ $recipe['portions'] }}</span>
                <span>⭐ Ocena: {{ $recipe['score'] }}/5</span>
            </div>
        </div>

        <div class="slider-container">
            <button class="slider-arrow prev">❮</button>
            <div class="slider">
                <img src="{{ $recipe['main_img'] }}" alt="Pancakes with berries" class="slide active">
                <img src="{{ $recipe['main_img'] }}" alt="Colorful macarons" class="slide">
            </div>
            <button class="slider-arrow next">❯</button>
        </div>

        <div class="recipe-description">
            <p>{{ $recipe['desc'] }}</p>
        </div>

        <div class="recipe-content-wrapper">
            <div class="ingredients">
                <h2>Składniki</h2>
                <ul>
                    @foreach ($recipe['ingredients'] as $ingredient)
                        <li>{{ $ingredient }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="instructions">
                <h2>Instrukcje</h2>
                <ol>
                    @foreach ($recipe['instruction'] as $ingredient)
                        <li>
                            <h3>{{ $ingredient['title'] }}</h3>
                            <p>{{ $ingredient['desc'] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>

        <div class="recipe-tips">
            <h2>Wskazówki</h2>
            <ul>
                <li>Galaretkę najlepiej przygotować dzień wcześniej</li>
                <li>Można zastąpić owoce sezonowymi zamiennikami</li>
                <li>Syrop mitsu można zastąpić miodem</li>
            </ul>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-left">
                <div class="footer-brand">Umai</div>
                <div class="footer-text">
                    <p>Jeśli masz jakiekolwiek pytania, nie wahaj się z nami skontaktować.</p>
                    <p>Jesteśmy gotowi odpowiedzieć na wszelkie pytania i zapewnić Państwu niezbędną pomoc.</p>
                </div>
            </div>
            <div class="social-links">
                <a href="#" title="Facebook" >
                    <img src="/facebook.png" style="width:30px;height:30px;" />
                </a>
                <a href="#" title="Email">
                    <img src="/mail.png" style="width:32px;height:32px;" />
                </a>
                <a href="#" title="Instagram">
                    <img src="/instagram.png" style="width:26px;height:26px;" />
                </a>
                <a href="#" title="Telegram">
                    <img src="/telegram.png" style="width:25px;height:25px;" />
                </a>
            </div>
        </div>
    </footer>

<script>
        const slides = document.querySelectorAll('.slide');
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        let currentSlide = 0;

        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            slides[index].classList.add('active');
        }

        prevButton.addEventListener('click', () => {
            currentSlide = currentSlide === 0 ? slides.length - 1 : currentSlide - 1;
            showSlide(currentSlide);
        });

        nextButton.addEventListener('click', () => {
            currentSlide = currentSlide === slides.length - 1 ? 0 : currentSlide + 1;
            showSlide(currentSlide);
        });
    </script>

</body>
</html>
