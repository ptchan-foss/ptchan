<?php

defined('TINYBOARD') or exit;

/*
 * ====================
 *  Board settings
 * ====================
 */
$config['threads_per_page'] = 10;
$config['max_pages'] = 5;
$config['threads_preview'] = 3;
$config['report_limit'] = 7;
$config['anonymous'] = 'Anónimo';


/*
 * ====================
 *  Post settings
 * ====================
 */
$config['max_body'] = 7500;
$config['reply_limit'] = 250;
$config['max_links'] = 20;
$config['field_email_selectbox'] = true;


/*
 * ====================
 *  Markup settings
 * ====================
 */
$config['markup'] = array();
$config['markup'][] = array("/\[b\](.+?)\[\/b\]/", "<strong>\$1</strong>");
$config['markup'][] = array("/\[i\](.+?)\[\/i\]/", "<em>\$1</em>");
$config['markup'][] = array("/\[u\](.+?)\[\/u\]/", "<u>\$1</u>");
$config['markup'][] = array("/\[spoiler\](.+?)\[\/spoiler\]/", "<span class=\"spoiler\">\$1</span>");
$config['markup_code'] = "/\[code\](.*?)\[\/code\]/is";

/*
 * ====================
 *  Image/File settings
 * ====================
 */
$config['max_filesize'] = 10485760;
$config['thumb_width'] = 255;
$config['thumb_height'] = 255;
$config['max_width'] = 10000;
$config['max_height'] = 10000;
$config['thumb_method'] = 'gm+gifsicle';
$config['gnu_md5'] = true;
$config['image_identification'] = true;

$config['file_icons']['torrent'] = 'torrent.png';

/*
 * ====================
 *  Display settings
 * ====================
 */
//$config['locale'] = 'pt_PT';

$config['boards'] = array(
    array('*'),
	array('b', 'pol', 'con'),
	array('c', 'u', 'n', 't', 'sp', 'ndis'),
	array('xxx'),
	array('int', 'luso'),
	array('meta'),
    array(
        '<b>regras</b>' => '/regras.html',
        '<b>https</b>' => 'https://ptchan.net',
        'antigo' => 'https://kusaba.ptchan.net',
        'git' => 'https://github.com/ptchan-foss'
    )
);

$config['timezone'] = 'Europe/Lisbon';
$config['post_date'] = '%d/%m/%y (%a) %H:%M:%S';

$config['url_stylesheet'] = '/style.css';

$config['stylesheets']['Yotsuba'] = 'yotsuba.css';
$config['stylesheets']['Yotsuba B'] = '';
$config['stylesheets']['Ácaro'] = 'terminal2.css';
$config['stylesheets']['Arroz'] = 'ricechan.css';
$config['stylesheets']['Clássico'] = 'futaba.css';
$config['stylesheets']['Escuro'] = 'dark.css';
$config['stylesheets']['Favela'] = 'favela.css';
$config['stylesheets']['Futaba'] = 'futaba+vichan.css';
$config['stylesheets']['Manel'] = 'gentoochan.css';
$config['stylesheets']['Nigrachan'] = 'nigrachan.css';

$config['default_stylesheet'] = array('Yotsuba', $config['stylesheets']['Yotsuba']);

$config['flag_style'] = 'margin-left:.5ch;width:16px;height:11px;';

$config['url_banner'] = '/img/rotation.php';
$config['banner_width'] = 300;
$config['banner_height'] = 100;


/*
 * =========================
 *  Directory/file settings
 * =========================
 */
$config['root'] = '/';


/*
 * ====================
 *  Cache, lock and queue settings
 * ====================
 */
$config['cache']['enabled'] = 'memcached';
$config['cache']['memcached'] = array(
	array('localhost', 11211)
);

/*
 * ====================
 *  Javascript
 * ====================
 */

$config['additional_javascript'] = array();

$config['additional_javascript'][] = 'js/jquery.min.js';             // jquery
$config['additional_javascript'][] = 'js/jquery-ui.custom.min.js';   // jquery ui
$config['additional_javascript'][] = 'js/ajax.js';                   // ajax functionality

$config['additional_javascript'][] = 'js/auto-reload.js';            // ajax reload

$config['additional_javascript'][] = 'js/catalog-search.js';         // search catalog

$config['additional_javascript'][] = 'js/file-selector.js';          // drag&drop and clipboard
$config['additional_javascript'][] = 'js/multi-image.js';            // multiple images

$config['additional_javascript'][] = 'js/expand.js';                 // expand threads
$config['additional_javascript'][] = 'js/hide-threads.js';           // hide threads
$config['additional_javascript'][] = 'js/inline-expanding.js';       // expand inline
$config['additional_javascript'][] = 'js/expand-all-images.js';      // expand all images link

$config['additional_javascript'][] = 'js/post-hover.js';             // hover posts

$config['additional_javascript'][] = 'js/quick-reply.js';            // quick reply

$config['additional_javascript'][] = 'js/show-backlinks.js';         // backlinks
$config['additional_javascript'][] = 'js/show-op.js';                // show (OP) in backlinks
$config['additional_javascript'][] = 'js/show-own-posts.js';         // show (You) in backlinks

$config['additional_javascript'][] = 'js/style-select.js';           // style <select>

$config['additional_javascript'][] = 'js/id_colors.js';              // colorize ids
$config['additional_javascript'][] = 'js/id_highlighter.js';         // highlight ids

$config['additional_javascript'][] = 'js/treeview.js';               // tree view
$config['additional_javascript'][] = 'js/gallery-view.js';           // gallery view

$config['additional_javascript'][] = 'js/smartphone-spoiler.js';     // smartphone spoiler support
$config['additional_javascript'][] = 'js/mobile-style.js';           // mobile responsiveness

$config['additional_javascript'][] = 'js/titlebar-notifications.js'; // notifications in the title bar

$config['additional_javascript'][] = 'js/options.js';                // user options


/*
 * =========================
 *  Oekaki
 * =========================
 */
$config['additional_javascript'][] = 'js/wPaint/8ch.js';
$config['additional_javascript'][] = 'js/wpaint.js';
$config['additional_javascript'][] = 'js/upload-selection.js';

/*
 * =========================
 *  Webm support
 * =========================
 */
$config['allowed_ext_files'][] = 'webm';
$config['additional_javascript'][] = 'js/webm-settings.js';
$config['additional_javascript'][] = 'js/expand-video.js';
$config['webm']['use_ffmpeg'] = true;
$config['webm']['allow_audio'] = true;
$config['webm']['max_length'] = 120;

/*
 * ====================
 *  Video embedding
 * ====================
 */

// Custom embedding (YouTube, vimeo, etc.)
// It's very important that you match the entire input (with ^ and $) or things will not work correctly.
$config['embedding'] = array(
	array(
		'/^https?:\/\/(\w+\.)?youtube\.com\/watch\?v=([a-zA-Z0-9\-_]{10,11})(&.+)?$/i',
		'<iframe style="float: left;margin: 10px 20px;" width="%%tb_width%%" height="%%tb_height%%" frameborder="0" id="ytplayer" src="https://www.youtube.com/embed/$2"></iframe>'
	),
	array(
		'/^https?:\/\/(\w+\.)?vimeo\.com\/(\d{2,10})(\?.+)?$/i',
		'<object style="float: left;margin: 10px 20px;" width="%%tb_width%%" height="%%tb_height%%"><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="https://vimeo.com/moogaloop.swf?clip_id=$2&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00adef&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" /><embed src="https://vimeo.com/moogaloop.swf?clip_id=$2&amp;server=vimeo.com&amp;show_title=0&amp;show_byline=0&amp;show_portrait=0&amp;color=00adef&amp;fullscreen=1&amp;autoplay=0&amp;loop=0" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="%%tb_width%%" height="%%tb_height%%"></object>'
	),
	array(
		'/^https?:\/\/(\w+\.)?dailymotion\.com\/video\/([a-zA-Z0-9]{2,10})(_.+)?$/i',
		'<object style="float: left;margin: 10px 20px;" width="%%tb_width%%" height="%%tb_height%%"><param name="movie" value="https://www.dailymotion.com/swf/video/$2"><param name="allowFullScreen" value="true"><param name="allowScriptAccess" value="always"><param name="wmode" value="transparent"><embed type="application/x-shockwave-flash" src="https://www.dailymotion.com/swf/video/$2" width="%%tb_width%%" height="%%tb_height%%" wmode="transparent" allowfullscreen="true" allowscriptaccess="always"></object>'
	),
	array(
		'/^https?:\/\/(\w+\.)?metacafe\.com\/watch\/(\d+)\/([a-zA-Z0-9_\-.]+)\/(\?[^\'"<>]+)?$/i',
		'<div style="float:left;margin:10px 20px;width:%%tb_width%%px;height:%%tb_height%%px"><embed flashVars="playerVars=showStats=no|autoPlay=no" src="https://www.metacafe.com/fplayer/$2/$3.swf" width="%%tb_width%%" height="%%tb_height%%" wmode="transparent" allowFullScreen="true" allowScriptAccess="always" name="Metacafe_$2" pluginspage="https://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></div>'
	),
	array(
		'/^https?:\/\/video\.google\.com\/videoplay\?docid=(\d+)([&#](.+)?)?$/i',
		'<embed src="https://video.google.com/googleplayer.swf?docid=$1&hl=en&fs=true" style="width:%%tb_width%%px;height:%%tb_height%%px;float:left;margin:10px 20px" allowFullScreen="true" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>'
	),
	array(
		'/^https?:\/\/(\w+\.)?vocaroo\.com\/i\/([a-zA-Z0-9]{2,15})$/i',
		'<object style="float: left;margin: 10px 20px;" width="148" height="44"><param name="movie" value="http://vocaroo.com/player.swf?playMediaID=$2&autoplay=0"><param name="wmode" value="transparent"><embed src="http://vocaroo.com/player.swf?playMediaID=$2&autoplay=0" width="148" height="44" wmode="transparent" type="application/x-shockwave-flash"></object>'
	)
);

?>
