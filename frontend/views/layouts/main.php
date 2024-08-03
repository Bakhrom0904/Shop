<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="modal">
    <div class="modals">
        <div class="modal-product">
            <div class="image">
                <img src="images/sale-4.png" alt="">
            </div>
            <div class="content">

                <div class="titles">
                    <h1>Viko sok</h1>
                    <div class="length-delivery">
                        <div class="minute">
                            <i class="far fa-clock"></i>
                            <span>15 daq.</span>
                        </div>
                        <div class="kilometr">
                            <i class="fas fa-route"></i>
                            <span>1.2 km</span>
                        </div>
                    </div>
                </div>
                <p class="about">
                    Germaniya davlati bilan hamkorlikda tayyorlanadigan “Viko” sok mahsulotlari siz uchun tayyor. Sok tarkibida O’zbekistonda yetishtirilgan ajoyib mevalar o’rin olgan. Bizning supermarketimizda ushbu mahsulotni arzon narxlarda sotib olishingiz mumkin
                </p>
                <p class="price price-2">55 000 so'm/kg</p>
                <p class="info info-2">
                    <span>60 000 so'm/kg</span>
                </p>
                <div class="count">

                </div>
            </div>
        </div>
        <div class="product-color">
            <div class="colors">
                <div class="image">
                    <img src="images/color-1.png" alt="">
                </div>
                <div class="image">
                    <img src="images/color-2.png" alt="">
                </div>
                <div class="image">
                    <img src="images/color-3.png" alt="">
                </div>
            </div>

            <div class="buy-btn">
                <div class="btn_red buy-1">
                    <span class="minus">-</span>
                    <span class="num">1</span>
                    <span class="plus">+</span>
                </div>
                <button class="btn_red trash"><span>Savatchaga qo'shish</span></button>
            </div>
        </div>
    </div>
</div>
<!--Header section starts-->

<header>

    <a href="index.html" class="logo">
        <img src="images/LOGO777.png" alt="">
        <div class="logo_name">
            <h6>Inmart</h6>
            <p>Supermarket</p>
        </div>
    </a>

    <div id="menu-bar" class="fas fa-bars"></div>


    <nav class="navbar">
        <a href="../do'konlarimiz/shops.html" target="_blank">Do'konlarimiz</a>
        <a href="../biz haqimizda/about.html">Biz haqimizda</a>
        <a href="connecting/connect.html">Bog'lanish</a>

    </nav>

    <div class="icons">
        <form action="">
            <i class="fas fa-search"></i>
            <input type="search" name="" id="" placeholder="Mahsulotlarni qidirish">
        </form>
        <a class="shop-card" href="korzinka/korzinka.html">
            <div class="counter">1</div>
            <i class="fas fa-shopping-bag"></i>
        </a>
        <span>Ru</span>

        <button class="btn"><span>Sign in</span></button>
    </div>
</header>

<!--Header section ends-->


<!-- slider section starts -->

<section class="home" id="home">

    <div class="swiper home-slider">
        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <h3>
                        BIZ SIZGA HAR QANDAY MAHSULOTNI YETKAZAMIZ
                    </h3>
                    <p>Turli xil oziq-ovqat mahsulotlarini “Inmart” supermarketi orqali tez va sifatli buyurtma qilishingiz mumkin. Biz bilan birga bo’ling.</p>
                    <a href="delivery/delivery.html" class="btn order">Buyurtma berish</a>
                </div>
                <div class="image">
                    <img src="images/home-bg.jpg" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <h3>
                        Bizni telegram <br> orqali ham kuzating!
                    </h3>
                    <p>Telegram-kanal — aksiyalar va yangiliklardan <br> xabardor bo’ling</p>
                    <a href="https://t.me/inmart_supermarket" class="btn order">Kanalga o'tish</a>
                </div>
                <div class="image">
                    <img src="images/Telegram for slider.jpg" alt="" height="346px">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <h3>
                        BIZ SIZGA HAR QANDAY MAHSULOTNI YETKAZAMIZ
                    </h3>
                    <p>Turli xil oziq-ovqat mahsulotlarini “Inmart” supermarketi orqali tez va sifatli buyurtma qilishingiz mumkin. Biz bilan birga bo’ling.</p>
                    <a href="delivery/delivery.html" class="btn order">Buyurtma berish</a>
                </div>
                <div class="image">
                    <img src="images/home-bg.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- slider section ends -->


<!-- Products section starts -->

<section class="products" id="products">

    <div class="product">

        <div class="products_filter">
            <a href="#">Barchasi</a>
            <a href="#">Meva va sabzavotlar</a>
            <a href="#">Sut va sut mahsulotlar</a>
            <a href="#">Suv va ichimliklar</a>
            <a href="#">Shirinliklar</a>
            <a href="#">Sabzavotlar</a>
        </div>

        <div class="products_item">
            <div class="heading">
                <h2>Top mahsulotlar</h2>

                <div class="arrows">
                    <i class="fas fa-arrow-left prev" id="top_items_prev"></i>
                    <i class="fas fa-arrow-right next" id="top_items_next"></i>
                </div>
            </div>


            <div class="sale_content_wrap">
                <div class="sale_content">

                    <div class="box_1">

                        <button class="count">122</button>
                        <div class="image">
                            <img src="images/nescafe.png" alt="">
                        </div>

                        <p class="price">15 000 so'm/dona</p>
                        <p class="info">
                            Nescafe Special
                        </p>

                        <button class="btn_red"><span>Savatchaga qo'shish</span></button>

                    </div>

                    <div class="box_1">
                        <button class="count">122</button>
                        <div class="image">
                            <img src="images/nescafe.png" alt="">
                        </div>

                        <p class="price">15 000 so'm/dona</p>
                        <p class="info">
                            Nescafe Special
                        </p>

                        <button class="btn_red"><span>Savatchaga qo'shish</span></button>

                    </div>

                    <div class="box_1">
                        <button class="count">122</button>
                        <div class="image">
                            <img src="images/nescafe.png" alt="">
                        </div>

                        <p class="price">15 000 so'm/dona</p>
                        <p class="info">
                            Nescafe Special
                        </p>

                        <button class="btn_red"><span>Savatchaga qo'shish</span></button>

                    </div>

                    <div class="box_1">
                        <button class="count">122</button>
                        <div class="image">
                            <img src="images/nescafe.png" alt="">
                        </div>

                        <p class="price">15 000 so'm/dona</p>
                        <p class="info">
                            Nescafe Special
                        </p>

                        <button class="btn_red"><span>Savatchaga qo'shish</span></button>

                    </div>

                    <div class="box_1">
                        <button class="count">122</button>
                        <div class="image">
                            <img src="images/banana.png" alt="">
                        </div>

                        <p class="price">24 000 so'm/kg</p>
                        <p class="info">

                            Malayziya banani
                        </p>

                        <button class="btn_red"><span>Savatchaga qo'shish</span></button>

                    </div>
                    <div class="box_1">
                        <button class="count">122</button>
                        <div class="image">
                            <img src="images/rice.png" alt="">
                        </div>

                        <p class="price">32 000 so'm/kg</p>
                        <p class="info">
                            Alanga guruchi
                        </p>

                        <button class="btn_red"><span>Savatchaga qo'shish</span></button>

                    </div>
                    <div class="box_1">
                        <button class="count">122</button>
                        <div class="image">
                            <img src="images/mosh.png" alt="">
                        </div>

                        <p class="price">25 990 so'm/kg</p>
                        <p class="info">
                            Mosh
                        </p>

                        <button class="btn_red"><span>Savatchaga qo'shish</span></button>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Products section starts -->


<!-- News section starts -->

<section class="news" id="news">

    <div class="news-content">

        <div class="heading">

            <h2>Yangiliklar</h2>

            <div class="arrows">
                <i class="fas fa-arrow-left prev"></i>
                <i class="fas fa-arrow-right next"></i>
            </div>

        </div>

        <div class="news_box">

            <div class="box-1">

                <div class="content">
                    <p>
                        Dena soklaridan 50 dona xarid qiling va 10% chegirmaga ega bo’ling.
                    </p>
                    <a href="#" class="btn_more">Batafsil &#8594</a>
                </div>
                <div class="image">
                    <img src="images/news-dena.png" alt="">
                </div>

            </div>
            <div class="box-1">

                <div class="content">
                    <p>
                        Qovun va tarvuz sayliga marhamat, barchasi arzon narxlarda.
                    </p>
                    <a href="#" class="btn_more">Batafsil &#8594</a>
                </div>
                <div class="image">
                    <img src="images/watermeleon.png" alt="">
                </div>

            </div>

        </div>
    </div>
</section>

<!-- News section starts -->

<!-- Sale section starts -->

<section class="sale" id="sale">

    <div class="heading">
        <h2>Ajoyib chegirmalar</h2>
    </div>

    <div class="sale_content">

        <div class="box_1">

            <div class="image">
                <img src="images/sale-1.png" alt="">
            </div>

            <p class="price">55 000 so'm/kg</p>
            <p class="info">
                <span>60 000 so'm/kg</span>
                "Shunchaki" shokolad
            </p>

            <button class="btn_red"><span>Savatchaga qo'shish</span></button>

        </div>

        <div class="box_1">

            <div class="image">
                <img src="images/sale-2.png" alt="">
            </div>

            <p class="price">55 000 so'm/kg</p>
            <p class="info">
                <span>60 000 so'm/kg</span>
                "Shunchaki" shokolad
            </p>

            <button class="btn_red"><span>Savatchaga qo'shish</span></button>

        </div>
        <div class="box_1">

            <div class="image">
                <img src="images/sale-3.png" alt="">
            </div>

            <p class="price">55 000 so'm/kg</p>
            <p class="info">
                <span>60 000 so'm/kg</span>
                "Shunchaki" shokolad
            </p>

            <button class="btn_red"><span>Savatchaga qo'shish</span></button>

        </div>
        <div class="box_1">

            <div class="image">
                <img src="images/sale-4.png" alt="">
            </div>

            <p class="price">55 000 so'm/kg</p>
            <p class="info">
                <span>60 000 so'm/kg</span>
                "Shunchaki" shokolad
            </p>

            <button class="btn_red"><span>Savatchaga qo'shish</span></button>

        </div>

    </div>
</section>

<!-- Sale section starts -->

<!-- Mobile-phone section -->

<section class="phone" id="phone">

    <div class="phone_content">

        <div class="text-content">
            <h1>MOBIL ILOVAMIZNI YUKLAB OLING VA TEZDA BUYURTMA QILING</h1>
            <p>
                <span>“Inmart”</span>
                supermarketining mobil ilovasida yanada ko’proq imkoniyatlarga ega bo’lishingiz mumkin
            </p>
            <div class="play-market">
                <img src="images/qr-code.png" alt="">
                <div class="market-btn">
                    <div class="btn_play-market">
                        <i class="fab fa-google-play"></i>
                        <div class="text">
                            <span class="min">get it on</span>
                            <span class="max"> Google Play</span>
                        </div>
                    </div>

                    <div class="btn_play-market">
                        <i class="fab fa-apple"></i>
                        <div class="text">
                            <span class="min">Download on the</span>
                            <span class="max"> App Store</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="image">
            <img src="images/phone.png" alt="">
        </div>
    </div>

</section>

<!-- Mobile-phone section -->

<!-- Footer section networks -->

<section class="footer-start" id="footer-start">

    <div class="lines">

        <div class="line-1">
            <a href="index.html" class="logo">
                <img src="images/LOGO777.png" alt="">
                <div class="logo_name">
                    <h6>Inmart</h6>
                    <p>Supermarket</p>
                </div>
            </a>

            <div class="facebook">
                <i class="fab fa-facebook"></i>
                <a href="" target="_blank"><span>Facebook</span></a>
            </div>

            <div class="instagram">
                <i class="fab fa-instagram"></i>
                <a href="https://www.instagram.com/inmart_supermarket/" target="_blank"><span>Instagram</span></a>
            </div>

            <div class="telegram">
                <i class="fab fa-telegram"></i>
                <a href="https://t.me/inmart_supermarket" target="_blank">
                    <span>Telegram</span>
                </a>
            </div>
        </div>
        <div class="line-2">
            <h1 class="help">Inmart</h1>
            <div class="links">
                <a href="connecting/connect.html">Biz haqimizda</a>
                <a href="">Mahsulotlar</a>
                <a href="">Vakansiyalar</a>
                <a href="">Hamkor bo'lish</a>
            </div>
        </div>
        <div class="line-3">
            <h1 class="help">Xaridorga yordam</h1>
            <div class="links">
                <a href="">Biz qanday ishlaymiz</a>
                <a href="">FAQ</a>
                <a href="delivery/delivery.html">To'lov tartibi</a>
                <a href="delivery/delivery.html">Yetkazib berish</a>
            </div>
        </div>
        <div class="line-4">
            <h1 class="help">+998 93 762 91 89</h1>
            <p>Ushbu qo'ng'iroq markazi orqali savollaringizga javob olasiz va takliflar berishingiz mumkin</p>
        </div>
    </div>
</section>

<!-- Footer section networks -->



<!-- Footer section ends -->
<footer class="footer" id="footer">
    <section>

        <p class="safe">Barcha huquqlar himoyalangan</p>

        <div class="apps">
            <p>Ilovamizni yuklab oling</p>
            <div class="btn_play-market">
                <i class="fab fa-google-play"></i>
                <div class="text">
                    <span class="min">get it on</span>
                    <span class="max"> Google Play</span>
                </div>
            </div>

            <div class="btn_play-market">
                <i class="fab fa-apple"></i>
                <div class="text">
                    <span class="min">Download on the</span>
                    <span class="max"> App Store</span>
                </div>
            </div>
        </div>
    </section>
</footer>


<!-- Footer section ends -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
