<?php
function showScrollableList($img, $title, $tabs, $id, $links) {
?>
    <div class="container px-0 mt-4 rounded" style="width: 1230px; background-color: white;">
        <div class="">
            <div class="px-3 pt-3 pb-2">
                <div class="d-flex align-items-center gap-2">
                    <img src="<?php echo $img?>" alt="" width="24px">
                    <p class="fw-bold" style="font-size: 17px; text-transform: uppercase;">
                        <?php echo $title ?>
                    </p>
                </div>
                <div class="card-header border-bottom">
                    <ul class="nav nav-tabs card-header-tabs" id="tablist-<?php echo $id ?>" role="tablist">
                        <?php foreach ($tabs as $index => $tab): ?>
                            <li class="nav-item">
                                <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?> pt-3 pb-2"
                                    id="<?php echo $id . '-tab-' . $index; ?>"
                                    data-bs-toggle="tab"
                                    data-bs-target="#<?php echo $id . '-content-' . $index; ?>"
                                    type="button"
                                    role="tab"
                                    aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                                    <?php echo $tab ?>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="tabcontent-<?php echo $id ?>">
                        <?php foreach ($links as $index => $link): ?>
                            <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>"
                                id="<?php echo $id . '-content-' . $index ?>"
                                role="tabpanel">
                                <?php echo $link; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- =========================================================================================================================================================================== -->

<?php
function showScrollableList_WithoutHeader($tabs, $id, $links) {
?>
    <div class="container px-0 mt-4 rounded" style="width: 1230px; background-color: white;">
        <div class="">
            <div class="px-3">
                <div class="card-header border-bottom">
                    <ul class="nav nav-tabs card-header-tabs" id="tablist-<?php echo $id ?>" role="tablist">
                        <?php foreach ($tabs as $index => $tab): ?>
                            <li class="nav-item">
                                <button class="nav-link <?php echo $index === 0 ? 'active' : ''; ?> pt-3 pb-2"
                                    id="<?php echo $id . '-tab-' . $index ?>"
                                    data-bs-toggle="tab"
                                    data-bs-target="#<?php echo $id . '-content-' . $index ?>"
                                    type="button"
                                    role="tab"
                                    aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                                    <?php echo $tab ?>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="tabcontent-<?php echo $id ?>">
                        <?php foreach ($links as $index => $link): ?>
                            <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>"
                                id="<?php echo $id . '-content-' . $index ?>"
                                role="tabpanel">
                                <?php echo $link; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <!-- =========================================================================================================================================================================== -->

    <?php
function showScrollableList_WithHeader( $img, $title, $tabs, $id, $links) {
?>
<div class="container px-0 mt-4 rounded" style="width: 1230px;background-color:white">
    <div class="d-flex align-items-center py-3 px-3 gap-2 rounded-top" style="background-color: var(--fourth);">
        <img src="<?php echo $img; ?>" alt="" width="32px">
        <p class="fs-5 fw-bold"><?php echo $title; ?></p>
    </div> 
    <div class="px-4 ">
        <div class="card-header border-bottom">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                <?php foreach ($tabs as $key => $tab): ?>
                    <li class="nav-item">
                        <button 
                            class="nav-link <?php echo $key === 0 ? 'active' : ''; ?> py-3" 
                            id="<?php echo $id[$key]; ?>-tab" 
                            data-bs-toggle="tab" 
                            data-bs-target="#<?php echo $id[$key]; ?>"
                            type="button" 
                            role="tab" 
                            aria-selected="<?php echo $key === 0 ? 'true' : 'false'; ?>"
                        >
                            <?php echo $tab; ?>
                        </button>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="card-body ">
            <div class="tab-content" id="myTabContent">
                <?php foreach ($links as $key => $link): ?>
                    <div 
                        class="tab-pane fade <?php echo $key === 0 ? 'show active' : ''; ?>" 
                        id="<?php echo $id[$key]; ?>" 
                        role="tabpanel" 
                        aria-labelledby="<?php echo $id[$key]; ?>-tab"
                    >
                        <?php echo $link; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>

    <!-- =========================================================================================================================================================================== -->

<?php
function showBanner_Bestsellers($title, $mainImage, $subImages) {
?>
<div class="rounded py-2 px-3" style="background:white;">
    <div class="d-flex justify-content-between align-items-center">
        <p class="fw-bold" style="font-size: 18px;"><?php echo $title; ?></p>
        <i class="fa-solid fa-angle-right"></i>
    </div>
    <div class="mt-3">
        <img src="<?php echo $mainImage; ?>" class="rounded-top" width="100%" height="165px">
    </div>
    <div class="d-flex justify-content-between gap-2 mt-2 mb-2">
        <?php foreach ($subImages as $image): ?>
            <div class="">
                <img src="<?php echo $image; ?>" alt="" width="100%">
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
}
?>

