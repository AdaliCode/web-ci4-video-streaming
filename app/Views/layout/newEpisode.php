<?php $categoryNewEpisode = [['categoryName' => 'Series', 'categoryData' => $seriesVideos], ['categoryName' => 'Variety', 'categoryData' => $varietyVideos]]; ?>
<?php for ($i = 0; $i < count($categoryNewEpisode); $i++) : ?>
    ?>
    <div class="row mb-3 justify-content-center">
        <h1>Episode Baru <?= $categoryNewEpisode[$i]['categoryName']; ?></h1>
        <?php foreach ($categoryNewEpisode[$i]['categoryData'] as $video) : ?>
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="cover.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= hari_apa(date('D', strtotime($video['all_episodes_release']))); ?> - <?= $video['title']; ?> - Ep <?= explode(',', $video['all_episodes_title'])[count(explode(',', $video['all_episodes_title'])) - 1]; ?></h5>
                        <h6 class="card-subtitle text-secondary"><?= explode(',', $video['all_categories'])[0]; ?></h6>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endfor; ?>