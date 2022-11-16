<?php
/**
 * @package    comingsoon
 * @author     Brian Teeman
 * @copyright  (C) 2022 - Brian Teeman
 * @license    GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die;
use Joomla\CMS\Language\Text;

?>

<!DOCTYPE html>
<html lang="en-gb" fir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="generator" content="Joomla! - Open Source Content Management" />
		<meta name="robots" content="<?php echo $robots; ?>" />
		<meta name="description" content="<?php echo $metaDesc; ?>" />

		<style>
			body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,dfn,th,var{font-style:normal;font-weight:normal;}li{list-style:none;}caption,th{text-align:left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}.sr-only{position:absolute!important;width:1px!important;height:1px!important;padding:0!important;margin:-1px!important;overflow:hidden!important;clip:rect(0,0,0,0)!important;white-space:nowrap!important;border:0!important;}
			.header {margin:5em 0}.header,body{text-align:center}.content p,.countdown_section,h1{text-shadow:1px 1px 3px #000}body,html{height:100%;font-size:100%;width:100%}body{margin:0;padding:0;color:#fff;background:url('<?php echo $bgimageUrl; ?>') center top;background-size:cover;position:relative}.wrapper{background:rgba(0,0,0, 0.33);height:100%;}.header{width:100%;float:left}#counter,.content{width:60%;padding:0 20%}h1{font-size:6.25em}h2 {font-size:3.5em;}.content p{font-size:1.875em;line-height:1.33em}#counter{margin-top:3.75em;float:left}.countdown_section{color:#fff;display:inline-block;text-align:center;width:15%;box-sizing:border-box;font-size:.938em;text-transform:lowercase;font-style:italic;padding:2.667em 0;border-top:2px solid rgba(255,255,255,.2);border-bottom:2px solid rgba(255,255,255,.2)}.countdown_section:first-child{border-left:0}.countdown_amount{color:#fff;display:block;font-size:3.33em;font-weight:700;font-style:normal;line-height:.75em}.social{width:40%;float:left;padding:0 30%;margin:3.125em 0 0}.social ul li{display:inline;margin:0 1.25em}.social svg{fill:#fff; width:3rem;}@media only screen and (max-width:1024px){body{font-size:90%}.content{width:80%;padding:0 10%}#counter,.social{width:60%;float:left;padding:0 20%}#counter{margin-top:3.75em}.social{margin:3.125em 0 0}}@media only screen and (max-width:768px){.content p,h1{text-shadow:1px 1px 3px #000}#counter,.content,.social{width:90%;padding:0 5%}body{font-size:80%}h1{margin:.3em 0 .6em;font-size:5.25em;line-height:.9em}.content p{font-size:1.475em;line-height:1.63em}#counter{margin-top:3.75em;float:left}.social{float:left;margin:2.125em 0 0}.social ul{width:100%;float:left}}
			body {font-family: '<?php echo $fontcss[0]; ?>';}.countdown_section, h1 span {font-family: '<?php echo $fontcss[1]; ?>';}.content p {font-family: '<?php echo $fontcss[1]; ?>';}.countdown_amount {font-family: '<?php echo $fontcss[0]; ?>';}
		</style>
		<link href="//fonts.googleapis.com/css?family=<?php echo $fonts; ?>" rel="stylesheet">
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<div class=wrapper>
		<div class="header">
			<h1 id="logo"><?php echo $title; ?></h1><h2><?php echo $caption; ?></h2>
		</div>
		<div class="content">
			<?php echo $text; ?>
		</div>
		<div id="counter" class="countdown">
			<!-- javascript inserts the countdown here -->
		</div>
		<div class="social">
			<ul>
				<?php if ($facebook) : ?>
					<li><a href="<?php echo $facebook_url; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28 1c1.654 0 3 1.346 3 3v24c0 1.654-1.346 3-3 3H4c-1.654 0-3-1.346-3-3V4c0-1.654 1.346-3 3-3h24m0-1H4C1.8 0 0 1.8 0 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4z"/><path d="M13.597 25.261h3.827v-9.262h2.553l.338-3.191h-2.891l.004-1.598c0-.832.079-1.278 1.273-1.278h1.596V6.739h-2.554c-3.067 0-4.146 1.549-4.146 4.152v1.916h-1.912v3.192h1.912v9.262z"/></svg><span class="sr-only">Facebook</a></li>
				<?php endif; ?>
				<?php if ($twitter) : ?>
					<li><a href="<?php echo $twitter_url; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28 1c1.654 0 3 1.346 3 3v24c0 1.654-1.346 3-3 3H4c-1.654 0-3-1.346-3-3V4c0-1.654 1.346-3 3-3h24m0-1H4C1.8 0 0 1.8 0 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4z"/><path d="M18.328 8.56c-1.663.605-2.714 2.166-2.594 3.874l.04.659-.665-.081c-2.421-.309-4.537-1.358-6.333-3.121l-.879-.874-.226.646c-.479 1.439-.173 2.96.825 3.982.532.565.412.646-.505.309-.319-.107-.599-.188-.625-.148-.093.095.226 1.318.479 1.803.346.673 1.051 1.331 1.823 1.722l.652.309-.771.013c-.745 0-.771.013-.691.297.266.874 1.317 1.803 2.488 2.206l.825.282-.718.431a7.457 7.457 0 0 1-3.566.995c-.599.013-1.091.067-1.091.108 0 .134 1.624.887 2.568 1.184 2.834.874 6.2.497 8.728-.996 1.796-1.063 3.592-3.175 4.431-5.22.453-1.089.905-3.08.905-4.034 0-.619.04-.7.785-1.439.439-.43.851-.901.931-1.036.133-.256.119-.256-.559-.027-1.131.404-1.291.35-.731-.255.412-.43.905-1.211.905-1.439 0-.04-.199.027-.426.148-.239.135-.771.337-1.171.457l-.722.228-.652-.444c-.359-.242-.864-.511-1.131-.592-.679-.189-1.717-.162-2.329.053z"/></svg><span class="sr-only">Twitter</a></li>
				<?php endif; ?>
				<?php if ($instagram) : ?>
					<li><a href="<?php echo $instagram_url; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28 1c1.654 0 3 1.346 3 3v24c0 1.654-1.346 3-3 3H4c-1.654 0-3-1.346-3-3V4c0-1.654 1.346-3 3-3h24m0-1H4C1.8 0 0 1.8 0 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4z"/><path d="M22.869 6.841H9.131c-1.293 0-2.29.997-2.29 2.29v13.738c0 1.293.997 2.29 2.29 2.29h13.738c1.293 0 2.29-.997 2.29-2.29V9.131c0-1.293-.997-2.29-2.29-2.29zm-6.856 5.561c2.032 0 3.678 1.595 3.678 3.564 0 1.967-1.646 3.564-3.678 3.564-2.03 0-3.677-1.597-3.677-3.564.001-1.969 1.648-3.564 3.677-3.564zm6.856 9.895c0 .401-.172.572-.572.572H9.703c-.4 0-.572-.171-.572-.572v-8.014l1.427.31a5.339 5.339 0 0 0-.236 1.571c0 3.044 2.55 5.515 5.692 5.515 3.144 0 5.692-2.47 5.692-5.515 0-.547-.083-1.073-.236-1.571l1.4-.31v8.014zm0-10.304a.571.571 0 0 1-.572.572h-2.29a.571.571 0 0 1-.572-.572v-2.29c0-.317.256-.572.572-.572h2.29c.317 0 .572.256.572.572v2.29z"/></svg><span class="sr-only">Instagram</a></li>
				<?php endif; ?>
				<?php if ($youtube) : ?>
					<li><a href="<?php echo $youtube_url; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28 1c1.654 0 3 1.346 3 3v24c0 1.654-1.346 3-3 3H4c-1.654 0-3-1.346-3-3V4c0-1.654 1.346-3 3-3h24m0-1H4C1.8 0 0 1.8 0 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4z"/><path d="M21.693 19.41c-.161 0-.277.045-.348.141-.07.09-.104.246-.104.461v.519h.894v-.519c0-.216-.036-.371-.107-.461-.067-.096-.181-.141-.335-.141zm-3.486-.018a.481.481 0 0 0-.214.049.757.757 0 0 0-.209.157v3.204a.879.879 0 0 0 .24.181.559.559 0 0 0 .244.056c.124 0 .214-.036.272-.11.058-.072.089-.188.089-.354v-2.656c0-.173-.036-.306-.107-.395a.39.39 0 0 0-.315-.132z"/><path d="M23.826 15.406c-.831-.83-7.83-.841-7.83-.84 0-.001-6.998.01-7.831.839-.833.831-.835 4.933-.835 4.956 0 .031.002 4.126.835 4.957.833.829 7.831.847 7.831.847s6.999-.018 7.83-.846c.836-.834.843-4.957.843-4.957 0-.024-.009-4.125-.843-4.956zm-11.157 2.417H11.49v5.958h-1.14v-5.958H9.172V16.81h3.497v1.013zM16 23.78h-1.009v-.565a2.155 2.155 0 0 1-.585.476 1.209 1.209 0 0 1-.587.163c-.235 0-.408-.075-.529-.229-.116-.154-.177-.381-.177-.689v-4.3h1.01v3.945c0 .122.021.21.062.265.045.055.114.082.207.082a.567.567 0 0 0 .283-.109 1.44 1.44 0 0 0 .314-.275v-3.907H16v5.143zm3.67-1.062c0 .364-.079.642-.238.837-.157.195-.388.29-.688.29-.199 0-.374-.036-.528-.111a1.287 1.287 0 0 1-.432-.348v.395h-1.022V16.81h1.022v2.245c.137-.156.281-.277.433-.357a.983.983 0 0 1 .466-.122c.321 0 .565.11.733.327.17.22.254.541.254.962v2.853zm3.506-1.384h-1.934v.967c0 .271.033.459.099.564.068.105.181.156.343.156.167 0 .284-.044.351-.133.066-.089.101-.283.101-.587v-.235h1.04v.264c0 .528-.126.925-.381 1.193-.252.266-.631.398-1.134.398-.452 0-.81-.14-1.07-.424-.26-.282-.392-.67-.392-1.167v-2.309c0-.445.144-.81.43-1.09.286-.281.653-.421 1.107-.421.463 0 .819.13 1.068.39.249.26.372.633.372 1.121v1.313zm-1.487-7.82H20.55v-.626c-.207.23-.426.407-.655.527a1.4 1.4 0 0 1-.66.181c-.265 0-.462-.085-.595-.253-.133-.169-.2-.421-.2-.76V7.848h1.137v4.344c0 .134.026.231.074.291.046.06.125.09.231.09.083 0 .189-.04.317-.119.127-.079.245-.181.351-.305v-4.3h1.139v5.665zm-4.622-5.397c-.302-.275-.689-.412-1.159-.412-.516 0-.929.13-1.235.39-.308.26-.461.609-.46 1.049v2.936c0 .481.15.864.447 1.149.3.284.699.426 1.196.426.518 0 .923-.138 1.22-.414.294-.276.441-.656.441-1.14V9.176c0-.431-.151-.785-.45-1.059zm-.71 4.071c0 .151-.045.27-.136.358a.514.514 0 0 1-.367.129c-.151 0-.267-.042-.348-.127a.505.505 0 0 1-.122-.36V9.102c0-.124.045-.224.13-.301a.497.497 0 0 1 .34-.114c.149 0 .271.038.364.114a.37.37 0 0 1 .14.301v3.086zm-5.246-6.353H9.82l1.526 4.636v3.043h1.282v-3.187l1.491-4.492h-1.303l-.792 3.069h-.08z"/></svg><span class="sr-only">Youtube</a></li>
				<?php endif; ?>
				<?php if ($github) : ?>
					<li><a href="<?php echo $github_url; ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M28 1c1.654 0 3 1.346 3 3v24c0 1.654-1.346 3-3 3H4c-1.654 0-3-1.346-3-3V4c0-1.654 1.346-3 3-3h24m0-1H4C1.8 0 0 1.8 0 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4z"/><path d="M19.613 25.958h-5.309s.007-1.575 0-2.656c-3.633.782-4.647-1.992-4.647-1.992-.664-1.328-1.328-1.992-1.328-1.992-1.328-.789 0-.664 0-.664 1.328 0 1.992 1.328 1.992 1.328 1.165 1.978 3.238 1.66 3.983 1.328 0-.664.291-1.668.664-1.992-2.9-.327-5.314-1.992-5.314-5.311s.667-3.983 1.33-4.647c-.134-.327-.69-1.537.021-3.319 0 0 1.305 0 2.632 1.992.658-.658 2.656-.664 3.32-.664.663 0 2.661.006 3.318.664 1.328-1.992 2.636-1.992 2.636-1.992.71 1.783.155 2.992.02 3.319.664.664 1.328 1.328 1.328 4.647s-2.411 4.984-5.311 5.311c.374.324.664 1.467.664 1.992l.001 4.648z"/></svg><span class="sr-only">Github</a></li>
                <?php endif; ?>
			</ul>
		</div>
		</div>
		<!--script at the bottom for the countdown -->
		<?php if ($countdown == 1) : ?>
<script>
const countdown = document.querySelector('.countdown');

// Set Launch Date (ms)
const launchDate = new Date('<?php echo $countdown_date; ?>').getTime();

// Update every second
const intvl = setInterval(() => {
  // Get todays date and time (ms)
  const now = new Date().getTime();

  // Distance from now and the launch date (ms)
  const distance = launchDate - now;

  // Time calculation
     // Time calculations for days, hours, minutes and seconds
     const years = Math.floor((distance % (1000 * 60 * 60 * 24 * 30 * 12 * 356)) / (1000 * 60 * 60 * 24 * 30 * 12));
     const months = Math.floor((distance % (1000 * 60 * 60 * 24 * 30 * 12)) / (1000 * 60 * 60 * 24 * 30));
     const weeks = Math.floor((distance % (1000 * 60 * 60 * 24 * 30)) / (1000 * 60 * 60 * 24 * 7));
     const days = Math.floor((distance % (1000 * 60 * 60 * 24 * 7)) / (1000 * 60 * 60 * 24));
     const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     const mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

  // Display result
  countdown.innerHTML = `
<span class="countdown_section"><span class="countdown_amount">${months}</span><br> <?php echo Text::_('PLG_SYSTEM_COMINGSOON_COUNTDOWN_MTHS'); ?> </span>
<span class="countdown_section"><span class="countdown_amount">${weeks}</span><br> <?php echo Text::_('PLG_SYSTEM_COMINGSOON_COUNTDOWN_WEEKS'); ?> </span>
<span class="countdown_section"><span class="countdown_amount">${days}</span><br> <?php echo Text::_('PLG_SYSTEM_COMINGSOON_COUNTDOWN_DAYS'); ?> </span>
<span class="countdown_section"><span class="countdown_amount">${hours}</span><br> <?php echo Text::_('PLG_SYSTEM_COMINGSOON_COUNTDOWN_HRS'); ?> </span>
<span class="countdown_section"><span class="countdown_amount">${mins}</span><br> <?php echo Text::_('PLG_SYSTEM_COMINGSOON_COUNTDOWN_MINS'); ?> </span>
  `;

  // If launch date is reached
  if (distance < 0) {
    // Stop countdown
    clearInterval(intvl);
    // Display launch date reached
    countdown.innerHTML = '<h2><?php echo Text::_('PLG_SYSTEM_COMINGSOON_COUNTDOWN_LAUNCHED'); ?></h2>';
  }
}, 1000);

    </script>
		<?php endif; ?>
	</body>
</html>
