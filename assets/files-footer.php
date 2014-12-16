<?php if(ENVIRONMENT == "local"): ?>

    <!-- JS libraries files -->
    <script src="<?php echo ASSETS_JAVASCRIPT ?>/vendors/jquery.js?v=<?php echo ASSETS_VERSION ?>"></script>
    <script src="<?php echo ASSETS_JAVASCRIPT ?>/vendors/jquery.ready.min.js?v=<?php echo ASSETS_VERSION ?>"></script>

    <!-- JS main file -->
    <script src="<?php echo ASSETS_JAVASCRIPT ?>/main.js?v=<?php echo ASSETS_VERSION ?>"></script>

<?php elseif(ENVIRONMENT == "prod"): ?>

    <!-- JS libraries files -->
    <script src="<?php echo ASSETS_JAVASCRIPT ?>/dist/libs.min.js?v=<?php echo ASSETS_VERSION ?>"></script>

    <!-- JS main file -->
    <script src="<?php echo ASSETS_JAVASCRIPT ?>/dist/build.min.js?v=<?php echo ASSETS_VERSION ?>"></script>

<?php endif ?>