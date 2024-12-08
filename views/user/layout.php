<?php include_once './utils/libs.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/user.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/product_list.css">
    <link rel="stylesheet" href="./css/_button_showmore.css">
    <link rel="stylesheet" href="./css/_sold_progress.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- ProductListsLogic -->
    <script src="./js/product_list.js"></script>
    <title>Trang chủ</title>
</head>

<body>
    <!-- Toast -->
    <?php showToast();?>
    <div class="custom-notifications"></div>

    <main>
        <?php include_once '_header.php' ?>
        <?php include_once $main_view ?>
        <?php include_once '_footer.php' ?>
    </main>
    <style>
    body {
        background-color: #f0f0f0;
    }
    .sold-progress {
        position: relative;
        background-color: #f2c7c7;
        border-radius: 12px;
        height: 17px;
        width: 90%;
        overflow: hidden;
    }

    .progress-bar {
        height: 100%;
        background-color: var(--primary);
        border-radius: 12px 0 0 12px;
        transition: width 0.3s ease;
    }

    .sold-progress span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 12px;
    }
    .custom-btn {
        width: 210px;
        color: #C92127;
        background-color: #fff;
        border: 2px solid #C92127;
        font-size: 14px;
        font-weight: 700;
    }
    .custom-btn:hover {
        background-color: #fff;
        color: #C92127;
        border: 2px solid #C92127;
    }
</style>
</body>

</html>