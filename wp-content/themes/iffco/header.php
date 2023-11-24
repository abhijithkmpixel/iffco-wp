<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="top__nav">
        <div class="container">
            <div class="top__nav__inner">
                <div class="top__nav__left">
                    <div class="global__toggle__btn">
                        <button type="button">
                            <img src="./assets/img/icons/globe.svg" alt="" />
                            <span>Global</span>
                        </button>
                    </div>
                    <label for="lowcarbonmode" class="low__carbon__mode__toggle">
                        <input type="checkbox" id="lowcarbonmode" name="lowcarbonmode" />
                        <div class="low__carbon__mode__toggle__btn"></div>Low carbon mode
                    </label>
                </div>
                <div class="top__nav__right">
                    <nav aria-label="quick navigation">
                        <ul>
                            <li>
                                <a href="#">

                                    <img src="./assets/img/icons/Vector.svg" alt="" />

                                    Careers

                                </a>
                            </li>
                            <li>
                                <a href="#">

                                    <img src="./assets/img/icons/phone.svg" alt="" />

                                    Contact us

                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="header__outer__wrap">
            <div class="container">
                <!-- @format -->
                <div class="header__inner">
                    <a href="#" class="site__logo">

                        <img src="./assets/img/logo/logo.svg" alt="" />

                    </a>
                    <nav aria-label="Primary navigation">
                        <ul>
                            <li class="top__header__quick__access__cta">
                                <div class="top__nav">
                                    <div class="container">
                                        <div class="top__nav__inner">
                                            <div class="top__nav__left">
                                                <div class="global__toggle__btn">
                                                    <button type="button">
                                                        <img src="./assets/img/icons/globe.svg" alt="" />
                                                        <span>Global</span>
                                                    </button>
                                                </div>
                                                <label for="lowcarbonmode2" class="low__carbon__mode__toggle">
                                                    <input type="checkbox" id="lowcarbonmode2" name="lowcarbonmode2" />
                                                    <div class="low__carbon__mode__toggle__btn"></div>Low carbon mode
                                                </label>
                                            </div>
                                            <div class="top__nav__right">
                                                <nav aria-label="quick navigation">
                                                    <ul>
                                                        <li>
                                                            <a href="#">

                                                                <img src="./assets/img/icons/Vector.svg" alt="" />

                                                                Careers

                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">

                                                                <img src="./assets/img/icons/phone.svg" alt="" />

                                                                Contact us

                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="active__page">
                                <a href="#">about</a>
                                <div class="sub__menu">
                                    <div class="container position-relative">
                                        <button type="button" class="sub__menu_close">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.75 1.81984L12.1802 0.25L7 5.43016L1.81984 0.25L0.25 1.81984L5.43016 7L0.25 12.1802L1.81984 13.75L7 8.56984L12.1802 13.75L13.75 12.1802L8.56984 7L13.75 1.81984Z" fill="black" />
                                            </svg>
                                        </button>
                                        <div class="sub__menu__inner">
                                            <div class="sub__menu__left__side">
                                                <h4>About us</h4>
                                                <a href="#" class="cta__primary">Watch the video

                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                        <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />

                                                    </svg>

                                                </a>
                                            </div>
                                            <div class="sub__menu__right__side">
                                                <nav aria-label="Secondary navigation">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Quick facts</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">History</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Leadership</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Values</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Food safety and quality</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Innovation</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Company policies</a>

                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Our Brands</a>
                                <div class="sub__menu">
                                    <div class="container position-relative">
                                        <button type="button" class="sub__menu_close">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.75 1.81984L12.1802 0.25L7 5.43016L1.81984 0.25L0.25 1.81984L5.43016 7L0.25 12.1802L1.81984 13.75L7 8.56984L12.1802 13.75L13.75 12.1802L8.56984 7L13.75 1.81984Z" fill="black" />
                                            </svg>
                                        </button>
                                        <div class="sub__menu__inner">
                                            <div class="sub__menu__left__side">
                                                <h4>Our Brands</h4>
                                                <p>Our brands span over 20 food and personal care categories.</p>
                                                <a href="#" class="cta__primary">See all brands

                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">

                                                        <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />

                                                    </svg>

                                                </a>
                                            </div>
                                            <div class="sub__menu__right__side">
                                                <nav aria-label="Secondary navigation">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Quick facts</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">History</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Leadership</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Values</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Food safety and quality</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Innovation</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Company policies</a>

                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Sustainability</a>
                                <div class="sub__menu">
                                    <div class="container position-relative">
                                        <button type="button" class="sub__menu_close">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.75 1.81984L12.1802 0.25L7 5.43016L1.81984 0.25L0.25 1.81984L5.43016 7L0.25 12.1802L1.81984 13.75L7 8.56984L12.1802 13.75L13.75 12.1802L8.56984 7L13.75 1.81984Z" fill="black" />
                                            </svg>
                                        </button>
                                        <div class="sub__menu__inner">
                                            <div class="sub__menu__left__side">
                                                <h4>Sustainability</h4>
                                                <p>Our products are a part of consumers daily lives. What affects them affects
                                                    us. Protecting the environment is an extension of caring for our consumers.</p>
                                            </div>
                                            <div class="sub__menu__right__side">
                                                <nav aria-label="Secondary navigation">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Quick facts</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">History</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Leadership</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Values</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Food safety and quality</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Innovation</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Company policies</a>

                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Partners</a>
                                <div class="sub__menu">
                                    <div class="container position-relative">
                                        <button type="button" class="sub__menu_close">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.75 1.81984L12.1802 0.25L7 5.43016L1.81984 0.25L0.25 1.81984L5.43016 7L0.25 12.1802L1.81984 13.75L7 8.56984L12.1802 13.75L13.75 12.1802L8.56984 7L13.75 1.81984Z" fill="black" />
                                            </svg>
                                        </button>
                                        <div class="sub__menu__inner">
                                            <div class="sub__menu__left__side">
                                                <h4>Partners</h4>
                                                <p>Rhoncus morbi et augue nec, in id ullamcorper at sit. Condimentum sit
                                                    nunc in eros scelerisque sed. Commodo in viverra nunc.</p>
                                            </div>
                                            <div class="sub__menu__right__side">
                                                <nav aria-label="Secondary navigation">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Quick facts</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">History</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Leadership</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Values</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Food safety and quality</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Innovation</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Company policies</a>

                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#">Stories</a>
                                <div class="sub__menu">
                                    <div class="container position-relative">
                                        <button type="button" class="sub__menu_close">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.75 1.81984L12.1802 0.25L7 5.43016L1.81984 0.25L0.25 1.81984L5.43016 7L0.25 12.1802L1.81984 13.75L7 8.56984L12.1802 13.75L13.75 12.1802L8.56984 7L13.75 1.81984Z" fill="black" />
                                            </svg>
                                        </button>
                                        <div class="sub__menu__inner">
                                            <div class="sub__menu__left__side">
                                                <h4>Stories</h4>
                                                <p>Rhoncus morbi et augue nec, in id ullamcorper at ullamcorpersit.</p>
                                                <a href="#" class="cta__primary">All stories
                                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.586 5.657L6.636 1.707C6.45384 1.51839 6.35305 1.26579 6.35533 1.00359C6.3576 0.741397 6.46277 0.490585 6.64818 0.305177C6.83359 0.119768 7.0844 0.0145995 7.3466 0.0123211C7.6088 0.0100427 7.8614 0.110837 8.05 0.292995L13.707 5.95C13.8002 6.04265 13.8741 6.15281 13.9246 6.27414C13.9751 6.39548 14.001 6.52559 14.001 6.657C14.001 6.7884 13.9751 6.91852 13.9246 7.03985C13.8741 7.16118 13.8002 7.27134 13.707 7.364L8.05 13.021C7.95775 13.1165 7.84741 13.1927 7.7254 13.2451C7.6034 13.2975 7.47218 13.3251 7.3394 13.3262C7.20662 13.3274 7.07494 13.3021 6.95205 13.2518C6.82915 13.2015 6.7175 13.1273 6.62361 13.0334C6.52971 12.9395 6.45546 12.8278 6.40518 12.7049C6.3549 12.5821 6.3296 12.4504 6.33075 12.3176C6.3319 12.1848 6.35949 12.0536 6.4119 11.9316C6.46431 11.8096 6.54049 11.6992 6.636 11.607L10.586 7.657H1C0.734784 7.657 0.48043 7.55164 0.292893 7.3641C0.105357 7.17657 0 6.92221 0 6.657C0 6.39178 0.105357 6.13742 0.292893 5.94989C0.48043 5.76235 0.734784 5.657 1 5.657H10.586Z" fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="sub__menu__right__side">
                                                <nav aria-label="Secondary navigation">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Savannah wins product of the Year 2021 award.</a>

                                                        </li>

                                                        <li>

                                                            <a href="#">It can't get more cheesilicious than this</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">AL Baker is one of the most chosen food brands in the

                                                                UAE</a>

                                                        </li>

                                                    </ul>

                                                </nav>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </li>

                            <li>

                                <a href="#">News & Events</a>
                                <div class="sub__menu">
                                    <div class="container position-relative">
                                        <button type="button" class="sub__menu_close">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.75 1.81984L12.1802 0.25L7 5.43016L1.81984 0.25L0.25 1.81984L5.43016 7L0.25 12.1802L1.81984 13.75L7 8.56984L12.1802 13.75L13.75 12.1802L8.56984 7L13.75 1.81984Z" fill="black" />
                                            </svg>
                                        </button>
                                        <div class="sub__menu__inner">
                                            <div class="sub__menu__left__side">
                                                <h4>News & Events</h4>
                                                <p>Rhoncus morbi et augue nec, in id ullamcorper at sit. Condimentum sit
                                                    nunc in eros scelerisque sed. Commodo in viverra nunc.</p>
                                            </div>
                                            <div class="sub__menu__right__side">
                                                <nav aria-label="Secondary navigation">
                                                    <ul>
                                                        <li>
                                                            <a href="#">Latest news</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Sign up for alerts</a>

                                                        </li>
                                                        <li>
                                                            <a href="#">Press & media</a>

                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <button class="search__toggle" type="button" id="search__bar__toggle">Search
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 16.5C11.2879 16.5 12.0682 16.3448 12.7961 16.0433C13.5241 15.7417 14.1855 15.2998 14.7427 14.7426C15.2998 14.1855 15.7418 13.5241 16.0433 12.7961C16.3448 12.0681 16.5 11.2879 16.5 10.5C16.5 9.71207 16.3448 8.93185 16.0433 8.2039C15.7418 7.47595 15.2998 6.81451 14.7427 6.25736C14.1855 5.70021 13.5241 5.25825 12.7961 4.95672C12.0682 4.65519 11.2879 4.5 10.5 4.5C8.90872 4.5 7.38259 5.13214 6.25737 6.25736C5.13216 7.38258 4.50002 8.9087 4.50002 10.5C4.50002 12.0913 5.13216 13.6174 6.25737 14.7426C7.38259 15.8679 8.90872 16.5 10.5 16.5ZM16.82 15.406L20.4 18.986C20.4955 19.0783 20.5716 19.1887 20.6239 19.3108C20.6762 19.4328 20.7037 19.564 20.7048 19.6968C20.7058 19.8296 20.6804 19.9613 20.63 20.0841C20.5797 20.207 20.5053 20.3186 20.4114 20.4124C20.3174 20.5062 20.2057 20.5804 20.0828 20.6306C19.9599 20.6808 19.8282 20.706 19.6954 20.7047C19.5626 20.7035 19.4314 20.6758 19.3095 20.6233C19.1875 20.5708 19.0772 20.4946 18.985 20.399L15.405 16.819C13.7975 18.0668 11.7748 18.6552 9.74877 18.4642C7.72273 18.2732 5.84562 17.3173 4.49957 15.7911C3.15351 14.2648 2.4397 12.2829 2.50344 10.2489C2.56718 8.2149 3.40368 6.28162 4.84266 4.84265C6.28164 3.40367 8.21492 2.56717 10.2489 2.50343C12.283 2.43968 14.2648 3.1535 15.7911 4.49955C17.3173 5.8456 18.2732 7.72271 18.4642 9.74875C18.6552 11.7748 18.0669 13.7975 16.819 15.405L16.82 15.406Z" fill="black" />
                            </svg>
                        </button>
                        <!-- <ul class="hamburger__menu" id="hamburger__menu__toggle">

      <li></li>

      <li></li>

      <li></li>

    </ul> -->
                        <button class="hamburger hamburger--squeeze" id="hamburger__menu__toggle" type="button">
                            <span class="hamburger-box">

                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search__bar">
            <div class="container">
                <div class="search__bar__wrap">
                    <input type="search" placeholder="Enter keyword..." />
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 16.5C11.2879 16.5 12.0682 16.3448 12.7961 16.0433C13.5241 15.7417 14.1855 15.2998 14.7427 14.7426C15.2998 14.1855 15.7418 13.5241 16.0433 12.7961C16.3448 12.0681 16.5 11.2879 16.5 10.5C16.5 9.71207 16.3448 8.93185 16.0433 8.2039C15.7418 7.47595 15.2998 6.81451 14.7427 6.25736C14.1855 5.70021 13.5241 5.25825 12.7961 4.95672C12.0682 4.65519 11.2879 4.5 10.5 4.5C8.90872 4.5 7.38259 5.13214 6.25737 6.25736C5.13216 7.38258 4.50002 8.9087 4.50002 10.5C4.50002 12.0913 5.13216 13.6174 6.25737 14.7426C7.38259 15.8679 8.90872 16.5 10.5 16.5ZM16.82 15.406L20.4 18.986C20.4955 19.0783 20.5716 19.1887 20.6239 19.3108C20.6762 19.4328 20.7037 19.564 20.7048 19.6968C20.7058 19.8296 20.6804 19.9613 20.63 20.0841C20.5797 20.207 20.5053 20.3186 20.4114 20.4124C20.3174 20.5062 20.2057 20.5804 20.0828 20.6306C19.9599 20.6808 19.8282 20.706 19.6954 20.7047C19.5626 20.7035 19.4314 20.6758 19.3095 20.6233C19.1875 20.5708 19.0772 20.4946 18.985 20.399L15.405 16.819C13.7975 18.0668 11.7748 18.6552 9.74877 18.4642C7.72273 18.2732 5.84562 17.3173 4.49957 15.7911C3.15351 14.2648 2.4397 12.2829 2.50344 10.2489C2.56718 8.2149 3.40368 6.28162 4.84266 4.84265C6.28164 3.40367 8.21492 2.56717 10.2489 2.50343C12.283 2.43968 14.2648 3.1535 15.7911 4.49955C17.3173 5.8456 18.2732 7.72271 18.4642 9.74875C18.6552 11.7748 18.0669 13.7975 16.819 15.405L16.82 15.406Z" fill="black" />
                    </svg>
                </div>
            </div>
        </div>
    </header>