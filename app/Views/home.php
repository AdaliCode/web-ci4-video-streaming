<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row mb-3 justify-content-center" id="top10">
    <h1>Top 10</h1>
    <?php foreach ($top10Videos as $key => $video) : ?>
        <div class="col-md-3 mb-3">
            <a href="<?= base_url('/video/' . $video['slug']); ?>" class="text-decoration-none">
                <div class="card h-100">
                    <div id="videoRank">
                        <img src="cover.jpeg" class="card-img-top" alt="...">
                        <div class="overlay-cover ms-2">
                            <h5 class="card-title text-dark">Top <?= $key + 1; ?></h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $video['title'] ?> - Ep 1</h5>
                        <h6 class="card-subtitle text-secondary"><?= explode(',', $video['all_categories'])[0]; ?></h6>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->include('layout/newEpisode'); ?>
<div class="row mb-3 justify-content-center" id="comingsoon">
    <h1>Segera Tayang</h1>
    <?php foreach ($upcomingVideos as $video) : ?>
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="cover.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= date('d M', strtotime($video['all_episodes_release'])); ?> - <?= $video['title'] ?> - Ep 0</h5>
                    <h6 class="card-subtitle text-secondary">Trailers</h6>
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