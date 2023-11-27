<?php
/* Template Name: Home page */
/* Template Post Type: page */
?>
<?php get_header(); ?>
<section class="hero__banner <?php
                                $banner__bg__color = get_field("banner_background_color");
                                $banner__title = get_field("banner_title");
                                $banner__subtitle = get_field("banner_subtitle");
                                $banner__subtitle_bold = get_field("banner_subtitle_bold");
                                $banner__image = get_field("banner_content_image");
                                $banner__image__url = esc_url($banner__image['url']);
                                $banner__background__image = get_field("banner_background_image");
                                $banner__background__image__url = esc_url($banner__background__image['url']);

                                $static__banner = get_field('banner_background_static_image');
                                $inverted__banner = get_field('banner_inverted');
                                $with__image = get_field('banner_content_type_image');
                                $sustainability__banner = get_field('banner_for_sustainability_page');
                                $traceability__banner = get_field('banner_for_traceable_score_page');

                                if ($static__banner == true) {
                                    echo ' hero__banner--static--img ';
                                }

                                if ($inverted__banner == true) {
                                    echo ' hero__banner--inverted ';
                                }
                                if ($with__image == true) {
                                    echo ' hero__banner--with--image ';
                                }
                                if ($sustainability__banner == true) {
                                    echo ' hero__banner--sustainability ';
                                }
                                if ($traceability__banner == true) {
                                    echo ' hero__banner--traceable--score ';
                                }
                                ?>
                                " style="--bg-color: <?php $banner__bg__color; ?>); ?>">
    <div class="container">
        <div class="hero__banner__content">


            <?php if ($banner__image) : ?>
                <img src="<?php echo $banner__background__image__url; ?>" alt="<?php if ($banner__background__image) {
                                                                                    echo esc_attr($banner__background__image['alt']);
                                                                                } ?>" />
            <?php endif; ?>
            <?php if ($banner__title) : ?>
                <h1>
                    <?php echo $banner__title; ?>
                </h1>
            <?php endif; ?>

            <?php if ($banner__subtitle) : ?>
                <p>
                    <?php if ($banner__subtitle_bold == true) {
                        echo "<strong>";
                    } ?>
                    <?php echo $banner__subtitle; ?>
                    <?php if ($banner__subtitle_bold == true) {
                        echo "</strong>";
                    } ?>
                </p>
            <?php endif; ?>


            <?php if (have_rows('banner_cta_row')) : ?>
                <div class="hero__banner__content__btn__wrap">
                    <?php while (have_rows('banner_cta_row')) : the_row();
                        $cta = get_sub_field('cta');
                        $link_url = $cta['url'];
                        $link_title = $cta['title'];
                        $link_target = $cta['target'] ? $cta['target'] : '_self';
                    ?>
                        <a class="cta__primary cta__primary--light" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?> <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />
                            </svg></a>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <img src="<?php echo $banner__image__url; ?>" alt="<?php if ($banner__image) {
                                                            echo esc_attr($banner__image['alt']);
                                                        } ?>" />



    <?php if (have_rows('banner_flexi_cards')) : ?>
        <div class="overlay__grid__wrap">
            <?php while (have_rows('banner_flexi_cards')) : the_row();
                $card__background = get_sub_field('card_background_image');
                $card__background__color = get_sub_field('card_background_color');
                $card__type = get_sub_field('card_type');
                $card__carousel = get_sub_field('card_carousel');
                $card__title = get_sub_field('title');
                $card__subtitle = get_sub_field('subtitle');
                $card__counter = get_sub_field('card_counter');
                $card__title__postfix = get_sub_field('card_title_postfix');
                $card__singleicon = get_sub_field('single_icon');
                $card__diagonal__line = get_sub_field('diagonal_line');
                $card__diagonal__line__type = get_sub_field('diagonal_line_type');
                $card__diagonal__line__color = get_sub_field('diagonal_line_color');
                $card__empty__bg = get_sub_field('empty_placeholder');
                $card__empty__bg__color = get_sub_field('empty_placeholder_color');
                $card__icon__align = get_sub_field('card_icon_align');
            ?>
                <div class="overlay__grid__wrap__item <?php if ($card__empty__bg == true) {
                                                            echo 'overlay__grid__wrap__item--empty--card3';
                                                        } ?>
                                                        <?php if ($card__diagonal__line == true && $card__diagonal__line__type == true) {
                                                            echo 'overlay__grid__wrap__item--lines';
                                                        } else if ($card__diagonal__line == true && $card__diagonal__line__type == false) {
                                                            echo 'overlay__grid__wrap__item--lines2';
                                                        }
                                                        ?>
                                                        " style="--card-bg: <?php echo $card__background__color; ?>;
                                                        <?php
                                                        if ($card__empty__bg == true) {
                                                            echo '--empty-color:' + $card__empty__bg__color;
                                                        }
                                                        if ($card__empty__bg == true) {
                                                            echo '--line-color:' + $card__diagonal__line__color;
                                                        }
                                                        ?>
                                                        ">
                    <?php if ($card__background) : ?>
                        <img src="<?php echo esc_url($card__background['url']); ?>" alt="<?php if ($card__background) {
                                                                                                echo esc_attr($card__background['alt']);
                                                                                            } ?>" class="overlay__grid__wrap__item__bg" />
                    <?php endif; ?>

                    <div class="overlay__grid__wrap__item__header">
                        <?php if ($card__type == true) : ?>
                            <?php if ($card__title) : ?>
                                <h3>
                                    <?php if ($card__counter == true) : ?>
                                        <span class="counters" data-number="<?php echo $card__title; ?>">
                                        <?php endif; ?>
                                        <?php echo $card__title; ?>
                                        <?php if ($card__counter == true) : ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php echo $card__title__postfix; ?>
                                </h3>
                            <?php endif; ?>

                            <?php if ($card__subtitle) : ?>
                                <h5><?php echo $card__subtitle; ?></h5>
                            <?php endif; ?>
                        <?php else : ?>



                            <?php if (have_rows('card_carousel')) : ?>
                                <div class="custom__hero__carousel">
                                    <?php $card__carousel__index = 1;
                                    while (have_rows('card_carousel')) : the_row();
                                        $card__title = get_sub_field('title');
                                        $card__subtitle = get_sub_field('subtitle');
                                        $card__icon = get_sub_field('icon');
                                    ?>
                                        <div class="custom__hero__carousel__item  <?php if ($card__carousel__index != 1) {
                                                                                        echo 'hidden';
                                                                                    } ?>">
                                            <?php if ($card__title) : ?>
                                                <h3>
                                                    <?php if ($card__counter == true) : ?>
                                                        <span class="counters" data-number="<?php echo $card__title; ?>">
                                                        <?php endif; ?>
                                                        <?php echo $card__title; ?>
                                                        <?php if ($card__counter == true) : ?>
                                                        </span>
                                                    <?php endif; ?>
                                                    <?php echo $card__title__postfix; ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if ($card__subtitle) : ?>
                                                <h5><?php echo $card__subtitle; ?></h5>
                                            <?php endif; ?>
                                        </div>
                                    <?php $card__carousel__index++;
                                    endwhile; ?>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                    </div>

                    <div class="overlay__grid__wrap__item__footer__icon <?php if ($card__icon__align == true) {
                                                                            echo 'ms-auto';
                                                                        } ?>">
                        <?php if ($card__type == true) : ?>
                            <img src="<?php echo $esc_url($card__singleicon['url']); ?>" alt="<?php if ($card__singleicon) {
                                                                                                    echo esc_attr($card__singleicon['alt']);
                                                                                                } ?>" />
                        <?php else : ?>

                            <?php if (have_rows('card_carousel')) : ?>
                                <div class="overlay__grid__wrap__item__footer__icon__carousel">
                                    <?php $card__icon__carousel__index = 1;
                                    while (have_rows('card_carousel')) : the_row();
                                        $image = get_sub_field('image');
                                    ?>
                                        <div class="overlay__grid__wrap__item__footer__icon__carousel__item <?php if ($card__icon__carousel__index != 1) {
                                                                                                                echo 'hidden';
                                                                                                            } ?> ">
                                            <img src="./uploads/qf/globe.svg" alt="" />
                                        </div>
                                    <?php $card__icon__carousel__index++;
                                    endwhile; ?>
                                </div>
                            <?php endif; ?>


                        <?php endif; ?>

                    </div>

                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>
<section class="our__brands__showcase">
    <div class="container">
        <h2 class="title__primary text-center">Our Brands</h2>
        <div class="our__brands__showcase__slider">
            <div class="brand__slide">
                <img src="./uploads/home/1.png" alt="" />
            </div>
            <div class="brand__slide">
                <img src="./uploads/home/2.png" alt="" />
            </div>
            <div class="brand__slide">
                <img src="./uploads/home/3.png" alt="" />
            </div>
            <div class="brand__slide">
                <img src="./uploads/home/4.png" alt="" />
            </div>
            <div class="brand__slide">
                <img src="./uploads/home/2.png" alt="" />
            </div>
            <div class="brand__slide">
                <img src="./uploads/home/3.png" alt="" />
            </div>
            <div class="brand__slide">
                <img src="./uploads/home/4.png" alt="" />
            </div>
            <div class="brand__slide">
                <img src="./uploads/home/5.png" alt="" />
            </div>
        </div>
        <h4 class="sub__title text-center">

            <strong>

                Our brands span over 20 food and personal care categories.
                <br />

                We also have significant presence in packaging, sales and distribution,

                chemicals and logistics.

            </strong>

        </h4>
        <a href="#" class="cta__primary mx-auto">See all of our brands

            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />

            </svg>

        </a>
    </div>
</section>
<section class="news_and_events">
    <div class="container">
        <h2 class="title__primary text-center">News & Events</h2>
        <div class="row news_and_events__row">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <a href="#" class="news__and__events__card">

                    <img src="./uploads/home/n1.png" alt="" />

                    <div class="news__and__events__card__body">

                        <h4>

                            Guardex wins best marketing campaign of the year at the beauty

                            world middle east awards

                        </h4>

                        <p>

                            IFFCO won the top honor in three categories: Country winner for

                            the best ESG project in the UE, Best.

                        </p>

                    </div>

                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <a href="#" class="news__and__events__card">

                    <img src="./uploads/home/n2.png" alt="" />

                    <div class="news__and__events__card__body">

                        <h4>Savannah wins product of the Year 2021 award.</h4>

                        <p>

                            Savannah continues to be recognized as the market leader in the

                            personal care category.

                        </p>

                    </div>

                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <a href="#" class="news__and__events__card">

                    <img src="./uploads/home/n3.png" alt="" />

                    <div class="news__and__events__card__body">

                        <h4>It can't get more cheesilicious than this</h4>

                        <p>

                            Noor cheese sauce won the Product of the year awards. These awards

                            are the only consumer-voted awards in the region, and Nielson, a

                            global research company, conducts the research.

                        </p>

                    </div>

                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <a href="#" class="news__and__events__card">

                    <img src="./uploads/home/n4.png" alt="" />

                    <div class="news__and__events__card__body">

                        <h4>AL Baker is one of the most chosen food brands in the UAE</h4>

                        <p>

                            In the UAE, AL Baker hs entered the top ten most chosen brands nd

                            is among the top 5 penetration gainers according to Kantar Brand

                            footprint Report 2021.

                        </p>

                    </div>

                </a>
            </div>
        </div>
        <a href="#" class="cta__primary mx-auto">More news & events

            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />

            </svg>

        </a>
    </div>
</section>
<section class="hero__banner" style="--bg-color: #79be43">
    <div class="container">
        <div class="hero__banner__content">
            <h1>Sustainability</h1>
            <p>
                <strong>

                    Sustainability is increasingly at the heart of all our business

                    operations. Learn more about our sustainability strategy and the

                    difference it is making to the community and our business.

                </strong>
            </p>
            <div class="hero__banner__content__btn__wrap">
                <a href="#" class="cta__primary">Sustainability at IFFCO

                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <img src="./uploads/home/bg2.png" alt="" />
    <!-- <div class="overlay__grid__wrap">

    <div class="overlay__grid__wrap__item" style="--card-bg: #007948">

      <img

        src="./uploads/og/og12.png"

        alt=""

        class="overlay__grid__wrap__item__bg" />

      <div class="overlay__grid__wrap__item__header">

        <h3></h3>

        <h5></h5>

      </div>

      <div class="overlay__grid__wrap__item__footer__icon ms-auto">

        <img src="./uploads/og/og2i2.png" alt="" />

      </div>

    </div>

    <div class="overlay__grid__wrap__item" style="--card-bg: #007948">

      <img

        src="./uploads/og/og11.png"

        alt=""

        class="overlay__grid__wrap__item__bg" />

      <div class="overlay__grid__wrap__item__header">

        <h3></h3>

        <h5></h5>

      </div>

   

    </div>

    <div

      class="overlay__grid__wrap__item overlay__grid__wrap__item--empty--card3 overlay__grid__wrap__item--lines"

      style="--card-bg: #; --line-color: #007cad; --empty-color: #79be43"></div>

    <div

      class="overlay__grid__wrap__item overlay__grid__wrap__item--lines2"

      style="--card-bg: #24b04b; --line-color: #6ed15f">

      <div class="overlay__grid__wrap__item__header">

        <h3></h3>

        <h5></h5>

      </div>

      <div class="overlay__grid__wrap__item__footer__icon">

        <img src="./uploads/og/ogi22.png" alt="" />

      </div>

    </div>

  </div> -->
</section>
<section class="stories__module">
    <div class="container">
        <h2 class="title__primary text-center">Stories</h2>
        <h5 class="sub__title text-center mw-75 mx-auto">

            Rhoncus morbi et augue nec, in id ullamcorper at sit. Condimentum sit nunc

            in eros scelerisque sed. Commodo in viverra nunc, ullamcorper ut. Non,

            amet, aliquet scelerisque nullam sagittis, pulvinar.

        </h5>
        <div class="stories__module__grid">
            <a class="stories__module__grid__item" data-fancybox data-type="iframe" data-src="https://www.youtube.com/embed/FwKe2F7gxNw" href="javascript:;">

                <h5>Video: Learn more about IFFCO</h5>

                <img src="./uploads/home/p1.png" alt="Video Thumbnail" />

                <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path d="M61.5 0.6875C77.6285 0.6875 93.0964 7.09451 104.501 18.4991C115.905 29.9036 122.312 45.3715 122.312 61.5C122.312 77.6285 115.905 93.0964 104.501 104.501C93.0964 115.905 77.6285 122.312 61.5 122.312C45.3715 122.312 29.9036 115.905 18.4991 104.501C7.09451 93.0964 0.6875 77.6285 0.6875 61.5C0.6875 45.3715 7.09451 29.9036 18.4991 18.4991C29.9036 7.09451 45.3715 0.6875 61.5 0.6875ZM61.5 113.625C75.3244 113.625 88.5826 108.133 98.3579 98.3579C108.133 88.5826 113.625 75.3244 113.625 61.5C113.625 47.6756 108.133 34.4174 98.3579 24.6421C88.5826 14.8667 75.3244 9.375 61.5 9.375C47.6756 9.375 34.4174 14.8667 24.6421 24.6421C14.8667 34.4174 9.375 47.6756 9.375 61.5C9.375 75.3244 14.8667 88.5826 24.6421 98.3579C34.4174 108.133 47.6756 113.625 61.5 113.625ZM54.9844 80.0131L82.7583 61.5L54.9844 42.9869V80.0131ZM56.4265 33.5002L90.2904 56.079C91.1827 56.674 91.9144 57.4801 92.4205 58.4258C92.9265 59.3715 93.1913 60.4274 93.1913 61.5C93.1913 62.5726 92.9265 63.6285 92.4205 64.5742C91.9144 65.5199 91.1827 66.326 90.2904 66.921L56.4265 89.4998C55.4453 90.1539 54.3049 90.5294 53.127 90.5864C51.9491 90.6433 50.7779 90.3795 49.7381 89.8231C48.6984 89.2666 47.8292 88.4384 47.2231 87.4268C46.6171 86.4152 46.297 85.2581 46.2969 84.0788V38.9125C46.297 37.7332 46.6171 36.5761 47.2231 35.5645C47.8292 34.5529 48.6984 33.7247 49.7381 33.1683C50.7779 32.6118 51.9491 32.348 53.127 32.4049C54.3049 32.4619 55.4453 32.8374 56.4265 33.4915V33.5002Z" fill="white" />

                </svg>

            </a>
            <div class="stories__module__grid__item">
                <h2>Investing in the future by delivering great brands</h2>
            </div>
            <a class="stories__module__grid__item" data-fancybox data-type="iframe" data-src="https://www.youtube.com/embed/FwKe2F7gxNw" href="javascript:;">

                <img src="./uploads/home/p2.png" alt="Video Thumbnail" />

                <svg width="123" height="123" viewBox="0 0 123 123" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path d="M61.5 0.6875C77.6285 0.6875 93.0964 7.09451 104.501 18.4991C115.905 29.9036 122.312 45.3715 122.312 61.5C122.312 77.6285 115.905 93.0964 104.501 104.501C93.0964 115.905 77.6285 122.312 61.5 122.312C45.3715 122.312 29.9036 115.905 18.4991 104.501C7.09451 93.0964 0.6875 77.6285 0.6875 61.5C0.6875 45.3715 7.09451 29.9036 18.4991 18.4991C29.9036 7.09451 45.3715 0.6875 61.5 0.6875ZM61.5 113.625C75.3244 113.625 88.5826 108.133 98.3579 98.3579C108.133 88.5826 113.625 75.3244 113.625 61.5C113.625 47.6756 108.133 34.4174 98.3579 24.6421C88.5826 14.8667 75.3244 9.375 61.5 9.375C47.6756 9.375 34.4174 14.8667 24.6421 24.6421C14.8667 34.4174 9.375 47.6756 9.375 61.5C9.375 75.3244 14.8667 88.5826 24.6421 98.3579C34.4174 108.133 47.6756 113.625 61.5 113.625ZM54.9844 80.0131L82.7583 61.5L54.9844 42.9869V80.0131ZM56.4265 33.5002L90.2904 56.079C91.1827 56.674 91.9144 57.4801 92.4205 58.4258C92.9265 59.3715 93.1913 60.4274 93.1913 61.5C93.1913 62.5726 92.9265 63.6285 92.4205 64.5742C91.9144 65.5199 91.1827 66.326 90.2904 66.921L56.4265 89.4998C55.4453 90.1539 54.3049 90.5294 53.127 90.5864C51.9491 90.6433 50.7779 90.3795 49.7381 89.8231C48.6984 89.2666 47.8292 88.4384 47.2231 87.4268C46.6171 86.4152 46.297 85.2581 46.2969 84.0788V38.9125C46.297 37.7332 46.6171 36.5761 47.2231 35.5645C47.8292 34.5529 48.6984 33.7247 49.7381 33.1683C50.7779 32.6118 51.9491 32.348 53.127 32.4049C54.3049 32.4619 55.4453 32.8374 56.4265 33.4915V33.5002Z" fill="white" />

                </svg>

            </a>
        </div>
        <a href="#" class="cta__primary mx-auto">Press & media

            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />
            </svg>
        </a>
    </div>
</section>
<section class="hero__banner hero__banner--inverted" style="--bg-color: #03afcc">
    <div class="container">
        <div class="hero__banner__content">
            <h1>Partner with IFFCO</h1>
            <p>
                <strong>

                    Our leadership position in multiple brands across categories is built

                    on innovation and research that leverages a deep understanding of

                    consumer preferences.

                </strong>
            </p>
            <div class="hero__banner__content__btn__wrap">
                <a href="#" class="cta__primary">Discover more

                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                        <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <img src="./uploads/home/bg3.png" alt="" />
    <!-- <div class="overlay__grid__wrap">

    <div class="overlay__grid__wrap__item" style="--card-bg: #ffc805">

    

      <div class="overlay__grid__wrap__item__header">

        <h3></h3>

        <h5></h5>

      </div>

      <div class="overlay__grid__wrap__item__footer__icon">

        <img src="./uploads/og/1.png" alt="" />

      </div>

    </div>

    <div class="overlay__grid__wrap__item" style="--card-bg: #03afcc">

      <img

        src="./uploads/og/22.png"

        alt=""

        class="overlay__grid__wrap__item__bg" />

      <div class="overlay__grid__wrap__item__header">

        <h3></h3>

        <h5></h5>

      </div>

      <div class="overlay__grid__wrap__item__footer__icon">

        <img src="./uploads/og/2.png" alt="" />

      </div>

    </div>

    <div class="overlay__grid__wrap__item" style="--card-bg: #03afcc">

      <img

        src="./uploads/og/33.png"

        alt=""

        class="overlay__grid__wrap__item__bg" />

      <div class="overlay__grid__wrap__item__header">

        <h3></h3>

        <h5></h5>

      </div>

      <div class="overlay__grid__wrap__item__footer__icon">

        <img src="./uploads/og/41.png" alt="" />

      </div>

    </div>

    <div class="overlay__grid__wrap__item" style="--card-bg: #03afcc">

      <img

        src="./uploads/og/4.png"

        alt=""

        class="overlay__grid__wrap__item__bg" />

    </div>

  </div> -->
</section>
<section class="enduring__values" style="--bg-color: #f7f6f6">
    <div class="container">
        <h2 class="title__secondary text-center">

            Enduring values, enhancing lives

        </h2>
        <h5 class="sub__title text-center">

            The preferred of sustainable value-added products and services for

            everyone, everywhere & every day.

        </h5>
        <a href="#" class="cta__primary mx-auto">The IFFCO values system

            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />
            </svg>
        </a>
    </div>
</section>
<?php get_footer(); ?>