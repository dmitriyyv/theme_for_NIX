<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="">Меню</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">На главную</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/blog" >Блог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/movie" >Фильмы</a>
                </li>
                <?php if( is_user_logged_in() ): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="/likes" >Понравившиеся фильмы</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link active" href="/lc" >ЛИГА ЧЕМПИОНОВ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/film-tmdb" >Рейтинг фильмов TMDB</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false">Категории</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                        <?php wp_nav_menu([ 'items_wrap' => '%3$s' ]); ?>
                    </ul>
                </li>

            </ul>
            <form>
                <input class="form-control" type="text" placeholder="Поиск" aria-label="Search">
            </form>
        </div>
    </div>
</nav>