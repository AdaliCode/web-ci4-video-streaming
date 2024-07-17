<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row mb-3 justify-content-center" id="top10">
    <h1>Top 10</h1>
    <?php foreach ($top10Videos as $key => $video) : ?>
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div id="videoRank">
                    <img src="cover.jpeg" class="card-img-top" alt="...">
                    <div class="overlay-cover ms-2">
                        <h5 class="card-title text-dark">Top <?= $key + 1; ?></h5>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $video['title'] ?></h5>
                    <h6 class="card-subtitle text-secondary"><?= explode(',', $video['all_categories'])[0]; ?></h6>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="row mb-3 justify-content-center" id="seriesNewEpisode">
    <h1>Episode Baru Series</h1>
    <?php foreach ($seriesVideos as $series) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= hari_apa(date('D', strtotime($series['all_episodes_release']))); ?> - <?= $series['title']; ?> - Ep <?= explode(',', $series['all_episodes_title'])[count(explode(',', $series['all_episodes_title'])) - 1]; ?></h5>
                    <h6 class="card-subtitle text-secondary"><?= explode(',', $series['all_categories'])[0]; ?></h6>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="row mb-3 justify-content-center" id="varietyNewEpisode">
    <h1>Episode Baru Variety</h1>
    <?php foreach ($varietyVideos as $variety) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= hari_apa(date('D', strtotime($variety['all_episodes_release']))); ?> - <?= $variety['title']; ?> - Ep <?= explode(',', $variety['all_episodes_title'])[count(explode(',', $variety['all_episodes_title'])) - 1]; ?></h5>
                    <h6 class="card-subtitle text-secondary"><?= explode(',', $variety['all_categories'])[0]; ?></h6>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<div class="row mb-3 justify-content-center" id="romanceDrama">
    <h1>Drama Romantis</h1>
    <?php foreach ($romanceVideos as $video) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $video['title']; ?> - Ep 1</h5>
                    <h6 class="card-subtitle text-secondary"><?= explode(',', $video['all_categories'])[0]; ?></h6>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>