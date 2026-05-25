<header>
    <div class="header-left">
        <nav>
            <a href="/">Главная</a>
            <a href="/parts">Все комплектующие</a>
            <a href="/categories">Категории</a>
    
        </nav>
    </div>

    <div class="header-center">
        <!-- Search form -->
        <form class="search" action="/search" method="GET">
    
            <input
                    type="text"
                    name="q"
                    placeholder="Поиск по каталогу..."
                    value="<?= e($_GET['q'] ?? '') ?>"
                >
            
            <button type="submit">
                Найти
            </button>

        </form>

    </div>

    <div class="header-right">

    </div>

</header>
