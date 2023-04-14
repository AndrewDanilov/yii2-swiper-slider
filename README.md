Swiper Slider Asset
===================
Asset for adding [swiper slider](https://github.com/nolimits4web/swiper) functionality to your pages

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require andrewdanilov/yii2-swiper-slider "~1.0.0"
```

or add

```
"andrewdanilov/yii2-swiper-slider": "~1.0.0"
```

to the `require` section of your `composer.json` file.


Usage
-----

Register asset bundle in View

```php
<?php
/* @var $this \yii\web\View */
\andrewdanilov\swiperslider\SwiperSliderAsset::register($this);
```

Example HTML
------------

```html
<!-- Slider main container -->
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        ...
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
```

Example JS
----------

```js
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.swiper-container', {
            speed: 400,
            slidesPerView: 4, // or 'auto'
            spaceBetween: 30,
            grabCursor: true,
            updateOnImagesReady: true,
            autoplay: false,
            centeredSlides: false,
            loop: false,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 30
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 10
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 5
                }
            }
        });
    });
</script>
```

For using slider refer to docs:
https://swiperjs.com/swiper-api