<?php

$data['carousel_img'] = [
    1 => [
        'url' => 'https://placehold.co/600x400/png',
    ],
    2 => [
        'url' => 'https://placehold.co/200x400/png',
    ],
    3 => [
        'url' => 'https://placehold.co/800x400/png',
    ],
];

$data['carousel_banner'] = [
]
?>

<div class="container mt-3 p-0" style="width: 1230px;">
    <div class="row">
        <div class="col-8">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <?php foreach ($data['carousel_img'] as $key => $values) : ?>
                        <button 
                            type="button" 
                            data-bs-target="#carouselExampleIndicators" 
                            data-bs-slide-to="<?php echo $key - 1; ?>" 
                            class="<?php echo $key === 1 ? 'active' : ''; ?>" 
                            aria-current="<?php echo $key === 1 ? 'true' : 'false'; ?>" 
                            aria-label="Slide <?php echo $key; ?>">
                        </button>
                    <?php endforeach; ?>
                </div>
                <div class="carousel-inner">
                    <?php foreach ($data['carousel_img'] as $key => $values) : ?>
                        <div class="carousel-item <?php echo $key === 1 ? 'active' : ''; ?>">
                            <img src="<?php echo $values['url']; ?>" class="d-block w-100 rounded" alt="Slide <?php echo $key; ?>" height="320">
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
                <div>
                    <img src="https://placehold.co/600x400/png" alt="" class="rounded" height="152px" width="100%">
                </div>
                <div>
                    <img src="https://placehold.co/600x400/png" alt="" class="rounded" height="152px" width="100%">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-3">
            <img src="https://placehold.co/600x400/png" alt="" class="rounded" height="200px" width="100%">
        </div>
        <div class="col-3">
            <img src="https://placehold.co/600x400/png" alt="" class="rounded" height="200px" width="100%">
        </div>
        <div class="col-3">
            <img src="https://placehold.co/600x400/png" alt="" class="rounded" height="200px" width="100%">
        </div>
        <div class="col-3">
            <img src="https://placehold.co/600x400/png" alt="" class="rounded" height="200px" width="100%">
        </div>
    </div>
</div>