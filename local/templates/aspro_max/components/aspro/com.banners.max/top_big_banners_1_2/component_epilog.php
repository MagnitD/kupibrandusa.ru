<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?global $bLongBanner, $bLightHeader, $bBigBannersIndexClass, $arTheme, $dopBodyClass;

$arScripts = ['swiper', 'swiper_main_styles', 'top_banner', 'countdown', 'banners'];
if ($templateData['HAS_VIDEO']) {
	$arScripts[] = 'video_banner';
}
\Aspro\Max\Functions\Extensions::init($arScripts);
?>