<?php
$data['banners'] = banner();

$data_detail['carousel'] = array_filter($data['banners'], function ($item) {
    return $item['type'] === 'carousel';
});

$data_detail['banner_items'] = array_filter($data['banners'], function ($item) {
    return $item['type'] === 'banner';
});

$data_detail['sub_banner'] = array_filter($data['banners'], function ($item) {
    return $item['type'] === 'sub_banner';
});

?>

<div class="container mt-3 p-0" style="width: 1230px;">
    <div class="row">
        <div class="col-8">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <?php foreach ($data_detail['carousel'] as $key => $values) : ?>
                        <button 
                            type="button" 
                            data-bs-target="#carouselExampleIndicators" 
                            data-bs-slide-to="<?php echo $key; ?>" 
                            class="<?php echo $key === 0 ? 'active' : ''; ?>" 
                            aria-current="<?php echo $key === 0 ? 'true' : 'false'; ?>" 
                            aria-label="Slide <?php echo $key + 1; ?>">
                        </button>
                    <?php endforeach; ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($data_detail['carousel'] as $key => $values) : ?>
                        <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
                            <img src="<?php echo $values['url']; ?>" class="d-block w-100 rounded" alt="Slide <?php echo $key + 1; ?>" height="320">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex flex-column gap-3">
                <?php foreach ($data_detail['banner_items'] as $banner) : ?>
                    <div>
                        <img src="<?php echo $banner['url']; ?>" alt="" class="rounded" height="152px" width="100%">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <?php foreach ($data_detail['sub_banner'] as $subBanner) : ?>
            <div class="col-3">
                <img src="<?php echo $subBanner['url']; ?>" alt="" class="rounded" height="200px" width="100%">
            </div>
        <?php endforeach; ?>
    </div>
</div>
