<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="row mt-3">
    <div class="col-9">
        <h3><?= $videoDetail['title']; ?></h3>
        <h5><?= $videoDetail['all_categories']; ?> | Episode 1</h5>
        <hr>
        <p>Sinopsis: Ketika ayah mereka, Alpha, memanggil mereka pulang ke Indonesia, Sierra, dan Ivy, dua saudara perempuan dari ibu yang berbeda, menyadari siapa yang dapat menghidupkan kembali perusahaan Alpha yang sedang merosot dan akan menggantikannya sebagai pemimpin. Sesuatu yang tidak hanya diinginkan oleh Sierra dan Ivy, tetapi juga ibu mereka masing-masing, yang merupakan istri pertama dan kedua Alpha, dua wanita ambisius yang tidak pernah bisa akur, yang juga membesarkan dua gadis ambisius mereka masing-masing. Pertempuran akan segera dimulai!</p>
        <hr>
        <h3>Tag</h3>
        <?php foreach (explode(',', $videoDetail['all_categories']) as $key => $tags) : ?>
            <a href="" class="btn btn-outline-dark"><?= $tags; ?></a>
        <?php endforeach; ?>
        <hr>
        <h3>Sutradara</h3>
        <a href="" class="btn btn-outline-dark">NN</a>
        <hr>
        <h3>Pemeran</h3>
        <a href="" class="btn btn-outline-dark">Yoo Jae Suk</a>

    </div>
    <div class="col">
        <h3>Daftar Episode</h3>
        <?php foreach (explode(',', $videoDetail['all_episodes_title']) as $key => $tags) : ?>
            <a href="" class="btn btn-outline-dark"><?= $tags; ?></a>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>