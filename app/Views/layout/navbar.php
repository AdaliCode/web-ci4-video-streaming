<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fs-1 text-warning" href="<?= base_url('/'); ?>">>>Arix</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('/video/trailer'); ?>">Trailers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/video/arix-ori'); ?>">Arix Orginal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/video/drama-korea'); ?>">Drama Korea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/video/variety-show-korea'); ?>">Varierty Show Korea</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/video/anime'); ?>">Anime</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>