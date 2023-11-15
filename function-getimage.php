<?php
  /*
  Script Name: Get Images from ACF with WebP Support
  Author: Alex Winter
  Version: 1.0 on 2023-06-27
  Description: Serving webp images and responsive images using Advanced Custom Fields and EWWW Image Optimizer
  Use: Simply call the getImage() function where ever you’d like your ACF image to display
  */

  function getImage($fieldName, $classes) {
    // Reset to null in case it's already been set for a previous image
    $image = null;
    $width = null;
    $height = null;
    $alt = null;
    $sizeFull = null;
    $sizeLarge = null;
    $sizeMedium = null;
    $sizeLargeWidth = null;
    $sizeMediumWidth = null;

    // Regular expression to extract the width from the file name
    $urlWidthRegEx = '/-(\d+)x\d+\.jpg$/';

    // Get the ACF Field Name
    $image = get_field($fieldName);

    // If the image exists, get the image data
    if ($image):
        $width = $image['width']; // Full size width
        $height = $image['height']; // Full size height
        $alt = $image['alt']; // Alt text attribute
        $sizeFull = $image['url']; // Full size url
        $sizeLarge = $image['sizes']['large']; // Large size url
        $sizeMedium = $image['sizes']['medium']; // Medium size url

        // Extract the width from the file name using regular expressions
        preg_match($urlWidthRegEx, $sizeLarge, $sizeLargeWidthMatches);
        preg_match($urlWidthRegEx, $sizeMedium, $sizeMediumWidthMatches);
        // Extract the width from the matches if found
        if (!empty($sizeLargeWidthMatches[1])) {
            $sizeLargeWidth = (int) $sizeLargeWidthMatches[1];
        }
        if (!empty($sizeMediumWidthMatches[1])) {
            $sizeMediumWidth = (int) $sizeMediumWidthMatches[1];
        }

        // For testing purposes only
        // echo ('<strong>Width:</strong> ' . $width . '<br><br>');
        // echo ('<strong>Height:</strong> ' . $height . '<br><br>');
        // echo ('<strong>Alternate Text:</strong> ' . $alt . '<br><br>');
        // echo ('<strong>Full:</strong> ' . $sizeFull . '<br><br>');
        // echo ('<strong>Large:</strong> ' . $sizeLarge . '<br><br>');
        // echo ('<strong>Medium:</strong> ' . $sizeMedium . '<br><br>');
        // echo ('<strong>Large Width:</strong> ' . $sizeMediumWidth . '<br><br>');
        // echo ('<strong>Medium Width:</strong> ' . $sizeLargeWidth . '<br><br>');
    endif;

    // Determine which image to display based on the image sizes available
    if ($sizeMedium == $sizeFull && $sizeLarge == $sizeFull) {
      // echo ('Full is available only');
    ?>
      <picture>
        <source srcset="<?php echo $sizeFull ?>.webp <?php echo $width ?>w" type="image/webp">
        <source srcset="<?php echo $sizeFull ?> <?php echo $width ?>w" type="image/jpeg">
        <img src="<?php echo $sizeFull ?>" loading="lazy" alt="<?php echo $alt ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="<?php echo $classes; ?>">
      </picture>
    <?php
    } elseif ($sizeMedium != $sizeFull && $sizeLarge == $sizeFull) {
      // echo ('Full and Medium are available');
    ?>
      <picture>
        <source srcset="<?php echo $sizeMedium ?>.webp <?php echo $sizeMediumWidth ?>w, <?php echo $sizeFull ?>.webp <?php echo $width ?>w" type="image/webp">
        <source srcset="<?php echo $sizeMedium ?> <?php echo $sizeMediumWidth ?>w, <?php echo $sizeFull ?> <?php echo $width ?>w" type="image/jpeg">
        <img src="<?php echo $sizeFull ?>" loading="lazy" alt="<?php echo $alt ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="<?php echo $classes; ?>">
      </picture>
    <?php
    } elseif ($sizeMedium != $sizeFull && $sizeLarge != $sizeFull) {
      // echo ('Full, Large, and Medium are available');
    ?>
      <picture>
        <source srcset="<?php echo $sizeMedium ?>.webp <?php echo $sizeMediumWidth ?>w, <?php echo $sizeLarge ?>.webp <?php echo $sizeLargeWidth ?>w, <?php echo $sizeFull ?>.webp <?php echo $width ?>w" type="image/webp">
        <source srcset="<?php echo $sizeMedium ?> <?php echo $sizeMediumWidth ?>w, <?php echo $sizeLarge ?> <?php echo $sizeLargeWidth ?>w, <?php echo $sizeFull ?> <?php echo $width ?>w" type="image/jpeg">
        <img src="<?php echo $sizeFull ?>" loading="lazy" alt="<?php echo $alt ?>" width="<?php echo $width ?>" height="<?php echo $height ?>" class="<?php echo $classes; ?>">
      </picture>
    <?php
    }
  }
?>