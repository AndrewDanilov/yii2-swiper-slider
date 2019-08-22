Swiper Slider Asset
===================
Asset for adding [swiper slider](https://github.com/nolimits4web/swiper) functionality to your pages

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require andrewdanilov/yii2-swiper-slider "dev-master"
```

or add

```
"andrewdanilov/yii2-swiper-slider": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Register asset bundle in View

```php
<?php
/* @var $this \yii\web\View */
\andrewdanilov\swiperslider\SwiperSliderAsset::register($this);
```