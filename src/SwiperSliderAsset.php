<?php
namespace andrewdanilov\swiperslider;

use yii\web\AssetBundle;

class SwiperSliderAsset extends AssetBundle
{
	public $sourcePath = '@andrewdanilov/swiperslider';
	public $css = [
		'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css',
	];
	public $js = [
		'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js',
	];
	public $depends = [
	];
}
