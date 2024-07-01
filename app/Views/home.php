<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row mb-3 justify-content-center" id="top10">
    <h1>Top 10</h1>
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Top <?= $i + 1; ?> - <?= (isset($videos[$i]['title'])) ? $videos[$i]['title'] : "One Piece episode-" . $i . "00"; ?></h5>
                    <h6 class="card-subtitle text-secondary">Drama Korea</h6>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<div class="row mb-3 justify-content-center" id="seriesNewEpisode">
    <h1>Episode Baru Series</h1>
    <?php for ($i = 0; $i < 8; $i++) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Senin - <?= (isset($videos[$i]['title'])) ? $videos[$i]['title'] : "One Piece episode-" . $i . "00"; ?></h5>
                    <h6 class="card-subtitle text-secondary">Drama Korea</h6>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<div class="row mb-3 justify-content-center" id="varietyNewEpisode">
    <h1>Episode Baru Variety</h1>
    <?php for ($i = 0; $i < 4; $i++) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sabtu - <?= (isset($videos[$i]['title'])) ? $videos[$i]['title'] : "One Piece episode-" . $i . "00"; ?></h5>
                    <h6 class="card-subtitle text-secondary">Drama Korea</h6>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<div class="row mb-3 justify-content-center" id="comingsoon">
    <h1>Segera Tayang</h1>
    <?php for ($i = 0; $i < 4; $i++) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sabtu - <?= (isset($videos[$i]['title'])) ? $videos[$i]['title'] : "One Piece episode-" . $i . "00"; ?></h5>
                    <h6 class="card-subtitle text-secondary">Drama Korea</h6>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<div class="row mb-3 justify-content-center" id="comingsoon">
    <h1>Drama Romantis</h1>
    <?php for ($i = 0; $i < 8; $i++) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sabtu - <?= (isset($videos[$i]['title'])) ? $videos[$i]['title'] : "One Piece episode-" . $i . "00"; ?></h5>
                    <h6 class="card-subtitle text-secondary">Drama Korea</h6>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>
<?= $this->endSection(); ?>