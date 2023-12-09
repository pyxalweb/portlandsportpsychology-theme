<?php /* Template Name: Waksman's Workbook */ ?>

<?php
get_header();
?>

<main id="site-content" <?php post_class($class = 'site-content interior push waksmans-workbook'); ?>>
    <section class="content width-df | mbl-7 mbl-3-vw400 ta-c | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <h1><?php echo get_field('heading'); ?></h1>

        <div class="mt-1">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content(); endwhile; endif; ?>
        </div>

        <a href="#order-now" class="button button--highlight | mi-center mt-2">Order Now</a>
    </section>

    <section class="mt-7 mt-3-vw400 bg--stripe | animate-scroll-fade-in" data-delay="0.5" data-scroller="90%" style="opacity:0;">
        <div class="content-photo | content-photo--gtc-1-vw300 | content width-df | pt-3-vw300">
            <div class="content-photo__container | o-2 | o-1-vw500 | pbl-5 pbl-3-vw400 pt-0-vw300 | animate-scroll-slide-horizontal" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="300">
                <div class="content-photo__text | ta-c-vw300 | text-1000--h2">
                    <div class="ta-c-vw300">
                        <h2><?php echo get_field('product_heading'); ?></h2>
                    </div>
                    
                    <div class="list--style-none | text-500--h3 | mt-1">
                        <li class="list--svg | mbl-2">
                            <div class="list--svg--icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="list--svg--text">
                                <h3><?php echo get_field('product_bullet_heading_1'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_1'); ?></p>
                            </div>
                        </li>

                        <li class="list--svg | mbl-2">
                            <div class="list--svg--icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="list--svg--text">
                                <h3><?php echo get_field('product_bullet_heading_2'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_2'); ?></p>
                            </div>
                        </li>

                        <li class="list--svg | mbl-2">
                            <div class="list--svg--icon">
                                <?php load_inline_svg('icon-dot.svg'); ?>
                            </div>
                            <div class="list--svg--text">
                                <h3><?php echo get_field('product_bullet_heading_3'); ?></h3>
                                <p><?php echo get_field('product_bullet_description_3'); ?></p>
                            </div>
                        </li>
                    </div>
                </div>
            </div>

            <div class="content-photo__container | animate-scroll-slide-horizontal | mi-center-child | pbl-4 pb-0-vw300" data-delay="0.5" data-scroller="90%" data-duration="0.75" data-position="-300">
                <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/waksmans-sport-psychology-workbook-no-shadow.png" type="image/png" media="(max-width: 800px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/waksmans-sport-psychology-workbook.png" alt="Waksman's Sport Psychology Program: A Practical Mental Skills Workbook for Student Athletes" width="460" height="604">
                </picture>
            </div>
        </div>
    </section>

    <section class="content-photo | content-photo--gtc-1-vw500 | content width-df | mbl-4 mb-1-vw500 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%" id="order-now">
        <div class="content-photo__container" style="opacity:0;">
            <div class="mb-2 mb-1-vw500 ta-c | text-1000--h2">
                <h2><?php echo get_field('info_heading'); ?></h2>
                <div class="text-900 text-strike">
                    <p><span><?php echo get_field('info_price'); ?></span></p>
                </div>
                <div class="text-background text-background--grey-200 | mt-05 mb-1 b-2px-grey-200 bs-400 br-1">
                    <p><?php echo get_field('info_highlight'); ?></p>
                </div>
                <p><?php echo get_field('info_description'); ?></p>
            </div>
        </div>

        <div class="image image--rounded | dn-vw500" style="opacity:0;">
            <?php
            $image = get_field('main_content_image');
            if ($image):
                $url = $image['url'];
                $alt = $image['alt'];
            ?>
            <img src="<?php echo $url ?>" alt="<?php echo $alt ?>" width="676" height="760">
            <?php endif; ?>
        </div>
    </section>

    <section class="content width-df | mb-7 mb-3-vw400 | animate-children-scroll-fade-in" data-delay="0.5" data-scroller="90%" id="order-now">
        <div class="df g-clamp-1-3-3 | fd-c-vw500" style="opacity:0;">
            <div class="white-rectangle | fg-1 fs-1 fb-50">
                <!-- EW jotform script embed -->
                <!--
                <script type="text/javascript" src="https://form.jotform.com/jsform/231268550096155"></script>
                -->

<!-- EW jotform iframe embed -->
<iframe
    id="JotFormIFrame-231268550096155"
    title="Waksman's Workbook"
    onload="window.parent.scrollTo(0,0)"
    allowtransparency="true"
    allowfullscreen="true"
    allow="geolocation; microphone; camera"
    src="https://form.jotform.com/231268550096155"
    frameborder="0"
    style="min-width:100%;max-width:100%;height:539px;border:none;"
    scrolling="no"
>
</iframe>
<script type="text/javascript">
var ifr = document.getElementById("JotFormIFrame-231268550096155");
if (ifr) {
    var src = ifr.src;
    var iframeParams = [];
    if (window.location.href && window.location.href.indexOf("?") > -1) {
    iframeParams = iframeParams.concat(window.location.href.substr(window.location.href.indexOf("?") + 1).split('&'));
    }
    if (src && src.indexOf("?") > -1) {
    iframeParams = iframeParams.concat(src.substr(src.indexOf("?") + 1).split("&"));
    src = src.substr(0, src.indexOf("?"))
    }
    iframeParams.push("isIframeEmbed=1");
    ifr.src = src + "?" + iframeParams.join('&');
}
window.handleIFrameMessage = function(e) {
    if (typeof e.data === 'object') { return; }
    var args = e.data.split(":");
    if (args.length > 2) { iframe = document.getElementById("JotFormIFrame-" + args[(args.length - 1)]); } else { iframe = document.getElementById("JotFormIFrame"); }
    if (!iframe) { return; }
    switch (args[0]) {
    case "scrollIntoView":
        iframe.scrollIntoView();
        break;
    case "setHeight":
        iframe.style.height = args[1] + "px";
        if (!isNaN(args[1]) && parseInt(iframe.style.minHeight) > parseInt(args[1])) {
        iframe.style.minHeight = args[1] + "px";
        }
        break;
    case "collapseErrorPage":
        if (iframe.clientHeight > window.innerHeight) {
        iframe.style.height = window.innerHeight + "px";
        }
        break;
    case "reloadPage":
        window.location.reload();
        break;
    case "loadScript":
        if( !window.isPermitted(e.origin, ['jotform.com', 'jotform.pro']) ) { break; }
        var src = args[1];
        if (args.length > 3) {
            src = args[1] + ':' + args[2];
        }
        var script = document.createElement('script');
        script.src = src;
        script.type = 'text/javascript';
        document.body.appendChild(script);
        break;
    case "exitFullscreen":
        if      (window.document.exitFullscreen)        window.document.exitFullscreen();
        else if (window.document.mozCancelFullScreen)   window.document.mozCancelFullScreen();
        else if (window.document.mozCancelFullscreen)   window.document.mozCancelFullScreen();
        else if (window.document.webkitExitFullscreen)  window.document.webkitExitFullscreen();
        else if (window.document.msExitFullscreen)      window.document.msExitFullscreen();
        break;
    }
    var isJotForm = (e.origin.indexOf("jotform") > -1) ? true : false;
    if(isJotForm && "contentWindow" in iframe && "postMessage" in iframe.contentWindow) {
    var urls = {"docurl":encodeURIComponent(document.URL),"referrer":encodeURIComponent(document.referrer)};
    iframe.contentWindow.postMessage(JSON.stringify({"type":"urls","value":urls}), "*");
    }
};
window.isPermitted = function(originUrl, whitelisted_domains) {
    var url = document.createElement('a');
    url.href = originUrl;
    var hostname = url.hostname;
    var result = false;
    if( typeof hostname !== 'undefined' ) {
    whitelisted_domains.forEach(function(element) {
        if( hostname.slice((-1 * element.length - 1)) === '.'.concat(element) ||  hostname === element ) {
            result = true;
        }
    });
    return result;
    }
};
if (window.addEventListener) {
    window.addEventListener("message", handleIFrameMessage, false);
} else if (window.attachEvent) {
    window.attachEvent("onmessage", handleIFrameMessage);
}
</script>

                <!-- AW jotform -->
                <!--
                <script type="text/javascript" src="https://form.jotform.com/jsform/230560584312147"></script>
                -->
            </div>

            <div class="fg-1 fs-1 fb-50 | text-500--h3">
                <div class="list-highlight | list--dots | bg-grey-100 pbl-2 pi-2 br-2">
                    <div class="ta-c">
                        <h3><?php echo get_field('objectives_heading'); ?></h3>
                    </div>

                    <?php echo get_field('objectives_list'); ?>
                
                    <div class="mt-1">
                        <h3><?php echo get_field('about_heading'); ?></h3>
                        <p><?php echo get_field('about_description'); ?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php
get_footer();
