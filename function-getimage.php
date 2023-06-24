<?php
    function getImage($fieldName) {
        // Reset to null in case it's already been set for a previous image
        $image = null;
        $width = null;
        $height = null;
        $sizeFull = null;
        $sizeLarge = null;
        $sizeMedium = null;
        $alt = null;

        // Get the ACF Field Name
        $image = get_field($fieldName);

        // If the image exists, get the image data
        if ($image):
            $width = $image['width']; // Full size width
            $height = $image['height']; // Full size height
            $sizeFull = $image['url']; // Full size url
            $sizeLarge = $image['sizes']['large']; // Large size url
            $sizeMedium = $image['sizes']['medium']; // Medium size url
            $alt = $image['alt']; // Alt text attribute

            // For testing purposes only
            // echo ('<strong>Width:</strong> ' . $width . '<br><br>');
            // echo ('<strong>Height:</strong> ' . $height . '<br><br>');
            // echo ('<strong>Alternate Text:</strong> ' . $alt . '<br><br>');
            // echo ('<strong>Full:</strong> ' . $sizeFull . '<br><br>');
            // echo ('<strong>Large:</strong> ' . $sizeLarge . '<br><br>');
            // echo ('<strong>Medium:</strong> ' . $sizeMedium . '<br><br>');
        endif;

        // Determine which image to display based on the image sizes available
        if ($sizeMedium == $sizeFull && $sizeLarge == $sizeFull) {
            // echo ('Full is available only');
        ?>
            <picture>
                <source srcset="<?php echo $sizeFull ?>.webp <?php echo $width ?>w" type="image/webp">
                <source srcset="<?php echo $sizeFull ?> <?php echo $width ?>w" type="image/jpeg">
                <img src="<?php echo $sizeFull ?>" loading="lazy" alt="<?php echo $alt ?>" width="<?php echo $width ?>" height="<?php echo $height ?>">
            </picture>
        <?php
        } elseif ($sizeMedium != $sizeFull && $sizeLarge == $sizeFull) {
            // echo ('Full and Medium are available');
        ?>
            <picture>
                <source srcset="<?php echo $sizeMedium ?>.webp 300w, <?php echo $sizeFull ?>.webp <?php echo $width ?>w" type="image/webp">
                <source srcset="<?php echo $sizeMedium ?> 300w, <?php echo $sizeFull ?> <?php echo $width ?>w" type="image/jpeg">
                <img src="<?php echo $sizeFull ?>" loading="lazy" alt="<?php echo $alt ?>" width="<?php echo $width ?>" height="<?php echo $height ?>">
            </picture>
        <?php
        } elseif ($sizeMedium != $sizeFull && $sizeLarge != $sizeFull) {
            // echo ('Full, Large, and Medium are available');
        ?>
            <picture>
                <source srcset="<?php echo $sizeMedium ?>.webp 300w, <?php echo $sizeLarge ?>.webp 1024w, <?php echo $sizeFull ?>.webp <?php echo $width ?>w" type="image/webp">
                <source srcset="<?php echo $sizeMedium ?> 300w, <?php echo $sizeLarge ?> 1024w, <?php echo $sizeFull ?> <?php echo $width ?>w" type="image/jpeg">
                <img src="<?php echo $sizeFull ?>" loading="lazy" alt="<?php echo $alt ?>" width="<?php echo $width ?>" height="<?php echo $height ?>">
            </picture>
        <?php
        }
    }
?>