<?php

namespace PhpExtended\Glyphicon;

/**
 * Glyphicon class file.
 *
 * This class provides static elements that represents the glyphicon objects.
 *
 * @author Anastaszor
 */
class Glyphicon
{
	
	// provided by bootstrap 3
	
	const ASTERISK 				= 'asterisk';
	const PLUS 					= 'plus';
	const EURO 					= 'euro';
	const MINUS 				= 'minus';
	const CLOUD 				= 'cloud';
	const ENVELOPE 				= 'envelope';
	const PENCIL 				= 'pencil';
	const GLASS 				= 'glass';
	const MUSIC 				= 'music';
	const SEARCH 				= 'search';
	const HEART 				= 'heart';
	const STAR 					= 'star';
	const STAR_EMPTY 			= 'star-empty';
	const USER 					= 'user';
	const FILM 					= 'film';
	const TH_LARGE 				= 'th-large';
	const TH 					= 'th';
	const TH_LIST 				= 'th-list';
	const OK 					= 'ok';
	const REMOVE 				= 'remove';
	const ZOOM_IN 				= 'zoom-in';
	const ZOOM_OUT 				= 'zoom-out';
	const OFF 					= 'off';
	const SIGNAL 				= 'signal';
	const COG 					= 'cog';
	const TRASH 				= 'trash';
	const HOME 					= 'home';
	const FILE 					= 'file';
	const TIME 					= 'time';
	const ROAD 					= 'road';
	const DOWNLOAD_ALT 			= 'download-alt';
	const DOWNLOAD 				= 'download';
	const UPLOAD 				= 'upload';
	const INBOX 				= 'inbox';
	const PLAY_CIRCLE 			= 'play-circle';
	const REPEAT 				= 'repeat';
	const REFRESH 				= 'refresh';
	const LIST_ALT 				= 'list-alt';
	const LOCK 					= 'lock';
	const FLAG 					= 'flag';
	const HEADPHONES 			= 'headphones';
	const VOLUME_OFF 			= 'volume-off';
	const VOLUME_DOWN 			= 'volume-down';
	const VOLUME_UP 			= 'volume-up';
	const QRCODE 				= 'qrcode';
	const BARCODE 				= 'barcode';
	const TAG 					= 'tag';
	const TAGS 					= 'tags';
	const BOOK 					= 'book';
	const BOOKMARK 				= 'bookmark';
	const PRINTER 				= 'print';
	const CAMERA 				= 'camera';
	const FONT 					= 'font';
	const BOLD 					= 'bold';
	const ITALIC 				= 'italic';
	const TEXT_HEIGHT 			= 'text-height';
	const TEXT_WIDTH 			= 'text-width';
	const ALIGN_LEFT 			= 'align-left';
	const ALIGN_CENTER 			= 'align-center';
	const ALIGN_RIGHT 			= 'align-right';
	const ALIGN_JUSTIFY 		= 'align-justify';
	const LISTED 				= 'list';
	const INDENT_LEFT 			= 'indent-left';
	const INDENT_RIGHT 			= 'indent-right';
	const FACETIME 				= 'facetime-video';
	const PICTURE 				= 'picture';
	const MAP_MARKER 			= 'map-marker';
	const ADJUST 				= 'adjust';
	const TINT 					= 'tint';
	const EDIT 					= 'edit';
	const SHARE 				= 'share';
	const CHECK 				= 'check';
	const MOVE 					= 'move';
	const STEP_BACKWARD 		= 'step-backward';
	const FAST_BACKWARD 		= 'fast-backward';
	const BACKWARD 				= 'backward';
	const PLAY 					= 'play';
	const PAUSE 				= 'pause';
	const STOP 					= 'stop';
	const FORWARD 				= 'forward';
	const FAST_FORWARD 			= 'fast-forward';
	const STEP_FORWARD 			= 'step-forward';
	const EJECT 				= 'eject';
	const CHEVRON_LEFT 			= 'chevron-left';
	const CHEVRON_RIGHT 		= 'chevron-right';
	const PLUS_SIGN 			= 'plus-sign';
	const MINUS_SIGN 			= 'minus-sign';
	const REMOVE_SIGN 			= 'remove-sign';
	const OK_SIGN 				= 'ok-sign';
	const QUESTION_SIGN 		= 'question-sign';
	const INFO_SIGN 			= 'info-sign';
	const SCREENSHOT 			= 'screenshot';
	const REMOVE_CIRCLE 		= 'remove-circle';
	const OK_CIRCLE 			= 'ok-circle';
	const BAN_CIRCLE 			= 'ban-circle';
	const ARROW_LEFT 			= 'arrow-left';
	const ARROW_RIGHT 			= 'arrow-right';
	const ARROW_UP 				= 'arrow-up';
	const ARROW_DOWN 			= 'arrow-down';
	const SHARE_ALT 			= 'share-alt';
	const RESIZE_FULL 			= 'resize-full';
	const RESIZE_SMALL 			= 'resize-small';
	const EXCLAMATION_SIGN 		= 'exclamation-sign';
	const GIFT 					= 'gift';
	const LEAF 					= 'leaf';
	const FIRE 					= 'fire';
	const EYE_OPEN 				= 'eye-open';
	const EYE_CLOSE 			= 'eye-close';
	const WARNING_SIGN 			= 'warning-sign';
	const PLANE 				= 'plane';
	const CALENDAR 				= 'calendar';
	const RANDOM 				= 'random';
	const COMMENT 				= 'comment';
	const MAGNET 				= 'magnet';
	const CHEVRON_UP 			= 'chevron-up';
	const CHEVRON_DOWN 			= 'chevron-down';
	const RETWEET 				= 'retweet';
	const SHOPPING_CART 		= 'shopping-cart';
	const FOLDER_CLOSE 			= 'folder-close';
	const FOLDER_OPEN 			= 'folder-open';
	const RESIZE_VERTICAL 		= 'resize-vertical';
	const RESIZE_HORIZONTAL 	= 'resize-horizontal';
	const HDD 					= 'hdd';
	const BULLHORN 				= 'bullhorn';
	const BELL 					= 'bell';
	const CERTIFICATE 			= 'certificate';
	const THUMBS_UP 			= 'thumbs-up';
	const THUMBS_DOWN 			= 'thumbs-down';
	const HAND_RIGHT 			= 'hand-right';
	const HAND_LEFT 			= 'hand-left';
	const HAND_UP 				= 'hand-up';
	const HAND_DOWN 			= 'hand-down';
	const CIRCLE_ARROW_RIGHT 	= 'circle-arrow-right';
	const CIRCLE_ARROW_LEFT 	= 'circle-arrow-left';
	const CIRCLE_ARROW_UP 		= 'circle-arrow-up';
	const CIRCLE_ARROW_DOWN 	= 'circle-arrow-down';
	const GLOBE 				= 'globe';
	const WRENCH 				= 'wrench';
	const TASKS 				= 'tasks';
	const FILTER 				= 'filter';
	const BRIEFCASE 			= 'briefcase';
	const FULLSCREEN 			= 'fullscreen';
	const DASHBOARD 			= 'dashboard';
	const PAPERCLIP 			= 'paperclip';
	const HEART_EMPTY 			= 'heart-empty';
	const LINK 					= 'link';
	const PHONE 				= 'phone';
	const PUSHPIN 				= 'pushpin';
	const USD 					= 'usd';
	const GPB 					= 'gbp';
	const SORT 					= 'sort';
	const SORT_ALPHABET 		= 'sort-by-alphabet';
	const SORT_ALPHABET_ALT 	= 'sort-by-alphabet-alt';
	const SORT_ORDER 			= 'sort-by-order';
	const SORT_ORDER_ALT 		= 'sort-by-order-alt';
	const SORT_ATTRIBUTES 		= 'sort-by-attributes';
	const SORT_ATTRIBUTES_ALT 	= 'sort-by-attributes-alt';
	const UNCHECKED 			= 'unchecked';
	const EXPAND 				= 'expand';
	const COLLAPSE_DOWN 		= 'collapse-down';
	const COLLAPSE_UP 			= 'collapse-up';
	const LOG_IN 				= 'log-in';
	const FLASH 				= 'flash';
	const LOG_OUT 				= 'log-out';
	const NEW_WINDOW 			= 'new-window';
	const RECORD 				= 'record';
	const SAVE 					= 'save';
	const OPEN 					= 'open';
	const SAVED 				= 'saved';
	const IMPORT 				= 'import';
	const EXPORT 				= 'export';
	const SEND 					= 'send';
	const FLOPPY_DISK 			= 'floppy-disk';
	const FLOPPY_SAVED 			= 'floppy-saved';
	const FLOPPY_REMOVE 		= 'floppy-remove';
	const FLOPPY_SAVE 			= 'floppy-save';
	const FLOPPY_OPEN 			= 'floppy-open';
	const CREDIT_CARD 			= 'credit-card';
	const TRANSFER 				= 'transfer';
	const CUTLERY 				= 'cutlery';
	const HEADER 				= 'header';
	const COMPRESSED 			= 'compressed';
	const EARPHONE 				= 'earphone';
	const PHONE_ALT 			= 'phone-alt';
	const TOWER 				= 'tower';
	const STATS 				= 'stats';
	const VIDEO_SD 				= 'sd-video';
	const VIDEO_HD 				= 'hd-video';
	const SUBTITLES 			= 'subtitles';
	const SOUND_STEREO 			= 'sound-stereo';
	const SOUND_DOLBY 			= 'sound-dolby';
	const SOUND_5_1 			= 'sound-5-1';
	const SOUND_6_1 			= 'sound-6-1';
	const SOUND_7_1 			= 'sound-7-1';
	const COPYRIGHT_MARK 		= 'copyright-mark';
	const REGISTRATION_MARK 	= 'registration-mark';
	const CLOUD_DOWNLOAD 		= 'cloud-download';
	const CLOUD_UPLOAD 			= 'cloud-upload';
	const TREE_CONIFER 			= 'tree-conifer';
	const TREE_DECIDUOUS 		= 'tree-deciduous';
	const CD 					= 'cd';
	const FILE_SAVE 			= 'save-file';
	const FILE_OPEN 			= 'open-file';
	const LEVEL_UP 				= 'level-up';
	const COPY 					= 'copy';
	const PASTE 				= 'paste';
	const ALERT 				= 'alert';
	const EQUALIZER 			= 'equalizer';
	const KING 					= 'king';
	const QUEEN 				= 'queen';
	const PAWN 					= 'pawn';
	const BISHOP 				= 'bishop';
	const KNIGHT 				= 'knight';
	const BABY_FORMULA 			= 'baby-formula';
	const TENT 					= 'tent';
	const BLACKBOARD 			= 'blackboard';
	const BED 					= 'bed';
	const APPLE 				= 'apple';
	const ERASE 				= 'erase';
	const HOURGLASS 			= 'hourglass';
	const LAMP 					= 'lamp';
	const DUPLICATE 			= 'duplicate';
	const PIGGY_BANK 			= 'piggy-bank';
	const SCISSORS 				= 'scissors';
	const BITCOIN 				= 'bitcoin';
	const YEN 					= 'yen';
	const RUBLE 				= 'ruble';
	const SCALE 				= 'scale';
	const ICE_LOLLY 			= 'ice-lolly';
	const ICE_LOLLY_TASTED 		= 'ice-lolly-tasted';
	const EDUCATION 			= 'education';
	const OPTION_HORIZONTAL 	= 'option-horizontal';
	const OPTION_VERTICAL 		= 'option-vertical';
	const MENU_HAMBURGER 		= 'menu-hamburger';
	const MODAL_WINDOW 			= 'modal-window';
	const OIL 					= 'oil';
	const GRAIN 				= 'grain';
	const SUNGLASSES 			= 'sunglasses';
	const TEXT_SIZE 			= 'text-size';
	const TEXT_COLOR 			= 'text-color';
	const TEXT_BACKGROUND 		= 'text-background';
	const OBJ_ALIGN_TOP 		= 'object-align-top';
	const OBJ_ALIGN_BOTTOM 		= 'object-align-bottom';
	const OBJ_ALIGN_HORIZONTAL 	= 'object-align-horizontal';
	const OBJ_ALIGN_LEFT 		= 'object-align-left';
	const OBJ_ALIGN_VERTICAL 	= 'object-align-vertical';
	const OBJ_ALIGN_RIGHT 		= 'object-align-right';
	const TRIANGLE_RIGHT 		= 'triangle-right';
	const TRIANGLE_LEFT 		= 'triangle-left';
	const TRIANGLE_BOTTOM 		= 'triangle-bottom';
	const TRIANGLE_TOP 			= 'triangle-top';
	const CONSOLE 				= 'console';
	const SUPERSCRIPT 			= 'superscript';
	const SUBSCRIPT 			= 'subscript';
	const MENU_LEFT 			= 'menu-left';
	const MENU_RIGHT 			= 'menu-right';
	const MENU_DOWN 			= 'menu-down';
	const MENU_UP 				= 'menu-up ';
	
	/**
	 * Builds a new Glyphicon html string with the given symbol constant name.
	 *
	 * @param string $symbol
	 * @return string
	 */
	public static function make($symbol)
	{
		return '<span class="glyphicon glyphicon-'.$symbol.' aria-hidden="true"></span>';
	}
	
	public static function ASTERISK()
	{
		return self::make(self::ASTERISK);
	}
	
	public static function PLUS()
	{
		return self::make(self::PLUS);
	}
	
	public static function EURO()
	{
		return self::make(self::EURO);
	}
	
	public static function MINUS()
	{
		return self::make(self::MINUS);
	}
	
	public static function CLOUD()
	{
		return self::make(self::CLOUD);
	}
	
	public static function ENVELOPE()
	{
		return self::make(self::ENVELOPE);
	}
	
	public static function PENCIL()
	{
		return self::make(self::PENCIL);
	}
	
	public static function GLASS()
	{
		return self::make(self::GLASS);
	}
	
	public static function MUSIC()
	{
		return self::make(self::MUSIC);
	}
	
	public static function SEARCH()
	{
		return self::make(self::SEARCH);
	}
	
	public static function HEART()
	{
		return self::make(self::HEART);
	}
	
	public static function STAR()
	{
		return self::make(self::STAR);
	}
	
	public static function STAR_EMPTY()
	{
		return self::make(self::STAR_EMPTY);
	}
	
	public static function USER()
	{
		return self::make(self::USER);
	}
	
	public static function FILM()
	{
		return self::make(self::FILM);
	}
	
	public static function TH_LARGE()
	{
		return self::make(self::TH_LARGE);
	}
	
	public static function TH()
	{
		return self::make(self::TH);
	}
	
	public static function TH_LIST()
	{
		return self::make(self::TH_LIST);
	}
	
	public static function OK()
	{
		return self::make(self::OK);
	}
	
	public static function REMOVE()
	{
		return self::make(self::REMOVE);
	}
	
	public static function ZOOM_IN()
	{
		return self::make(self::ZOOM_IN);
	}
	
	public static function ZOOM_OUT()
	{
		return self::make(self::ZOOM_OUT);
	}
	
	public static function OFF()
	{
		return self::make(self::OFF);
	}
	
	public static function SIGNAL()
	{
		return self::make(self::SIGNAL);
	}
	
	public static function COG()
	{
		return self::make(self::COG);
	}
	
	public static function TRASH()
	{
		return self::make(self::TRASH);
	}
	
	public static function HOME()
	{
		return self::make(self::HOME);
	}
	
	public static function FILE()
	{
		return self::make(self::FILE);
	}
	
	public static function TIME()
	{
		return self::make(self::TIME);
	}
	
	public static function ROAD()
	{
		return self::make(self::ROAD);
	}
	
	public static function DOWNLOAD_ALT()
	{
		return self::make(self::DOWNLOAD_ALT);
	}
	
	public static function DOWNLOAD()
	{
		return self::make(self::DOWNLOAD);
	}
	
	public static function UPLOAD()
	{
		return self::make(self::UPLOAD);
	}
	
	public static function INBOX()
	{
		return self::make(self::INBOX);
	}
	
	public static function PLAY_CIRCLE()
	{
		return self::make(self::PLAY_CIRCLE);
	}
	
	public static function REPEAT()
	{
		return self::make(self::REPEAT);
	}
	
	public static function REFRESH()
	{
		return self::make(self::REFRESH);
	}
	
	public static function LIST_ALT()
	{
		return self::make(self::LIST_ALT);
	}
	
	public static function LOCK()
	{
		return self::make(self::LOCK);
	}
	
	public static function FLAG()
	{
		return self::make(self::FLAG);
	}
	
	public static function HEADPHONES()
	{
		return self::make(self::HEADPHONES);
	}
	
	public static function VOLUME_OFF()
	{
		return self::make(self::VOLUME_OFF);
	}
	
	public static function VOLUME_DOWN()
	{
		return self::make(self::VOLUME_DOWN);
	}
	
	public static function VOLUME_UP()
	{
		return self::make(self::VOLUME_UP);
	}
	
	public static function QRCODE()
	{
		return self::make(self::QRCODE);
	}
	
	public static function BARCODE()
	{
		return self::make(self::BARCODE);
	}
	
	public static function TAG()
	{
		return self::make(self::TAG);
	}
	
	public static function TAGS()
	{
		return self::make(self::TAGS);
	}
	
	public static function BOOK()
	{
		return self::make(self::BOOK);
	}
	
	public static function BOOKMARK()
	{
		return self::make(self::BOOKMARK);
	}
	
	public static function PRINTER()
	{
		return self::make(self::PRINTER);
	}
	
	public static function CAMERA()
	{
		return self::make(self::CAMERA);
	}
	
	public static function FONT()
	{
		return self::make(self::FONT);
	}
	
	public static function BOLD()
	{
		return self::make(self::BOLD);
	}
	
	public static function ITALIC()
	{
		return self::make(self::ITALIC);
	}
	
	public static function TEXT_HEIGHT()
	{
		return self::make(self::TEXT_HEIGHT);
	}
	
	public static function TEXT_WIDTH()
	{
		return self::make(self::TEXT_WIDTH);
	}
	
	public static function ALIGN_LEFT()
	{
		return self::make(self::ALIGN_LEFT);
	}
	
	public static function ALIGN_CENTER()
	{
		return self::make(self::ALIGN_CENTER);
	}
	
	public static function ALIGN_RIGHT()
	{
		return self::make(self::ALIGN_RIGHT);
	}
	
	public static function ALIGN_JUSTIFY()
	{
		return self::make(self::ALIGN_JUSTIFY);
	}
	
	public static function LISTED()
	{
		return self::make(self::LISTED);
	}
	
	public static function INDENT_LEFT()
	{
		return self::make(self::INDENT_LEFT);
	}
	
	public static function INDENT_RIGHT()
	{
		return self::make(self::INDENT_RIGHT);
	}
	
	public static function FACETIME()
	{
		return self::make(self::FACETIME);
	}
	
	public static function PICTURE()
	{
		return self::make(self::PICTURE);
	}
	
	public static function MAP_MARKER()
	{
		return self::make(self::MAP_MARKER);
	}
	
	public static function ADJUST()
	{
		return self::make(self::ADJUST);
	}
	
	public static function TINT()
	{
		return self::make(self::TINT);
	}
	
	public static function EDIT()
	{
		return self::make(self::EDIT);
	}
	
	public static function SHARE()
	{
		return self::make(self::SHARE);
	}
	
	public static function CHECK()
	{
		return self::make(self::CHECK);
	}
	
	public static function MOVE()
	{
		return self::make(self::MOVE);
	}
	
	public static function STEP_BACKWARD()
	{
		return self::make(self::STEP_BACKWARD);
	}
	
	public static function FAST_BACKWARD()
	{
		return self::make(self::FAST_BACKWARD);
	}
	
	public static function BACKWARD()
	{
		return self::make(self::BACKWARD);
	}
	
	public static function PLAY()
	{
		return self::make(self::PLAY);
	}
	
	public static function PAUSE()
	{
		return self::make(self::PAUSE);
	}
	
	public static function STOP()
	{
		return self::make(self::STOP);
	}
	
	public static function FORWARD()
	{
		return self::make(self::FORWARD);
	}
	
	public static function FAST_FORWARD()
	{
		return self::make(self::FAST_FORWARD);
	}
	
	public static function STEP_FORWARD()
	{
		return self::make(self::STEP_FORWARD);
	}
	
	public static function EJECT()
	{
		return self::make(self::EJECT);
	}
	
	public static function CHEVRON_LEFT()
	{
		return self::make(self::CHEVRON_LEFT);
	}
	
	public static function CHEVRON_RIGHT()
	{
		return self::make(self::CHEVRON_RIGHT);
	}
	
	public static function PLUS_SIGN()
	{
		return self::make(self::PLUS_SIGN);
	}
	
	public static function MINUS_SIGN()
	{
		return self::make(self::MINUS_SIGN);
	}
	
	public static function REMOVE_SIGN()
	{
		return self::make(self::REMOVE_SIGN);
	}
	
	public static function OK_SIGN()
	{
		return self::make(self::OK_SIGN);
	}
	
	public static function QUESTION_SIGN()
	{
		return self::make(self::QUESTION_SIGN);
	}
	
	public static function INFO_SIGN()
	{
		return self::make(self::INFO_SIGN);
	}
	
	public static function SCREENSHOT()
	{
		return self::make(self::SCREENSHOT);
	}
	
	public static function REMOVE_CIRCLE()
	{
		return self::make(self::REMOVE_CIRCLE);
	}
	
	public static function OK_CIRCLE()
	{
		return self::make(self::OK_CIRCLE);
	}
	
	public static function BAN_CIRCLE()
	{
		return self::make(self::BAN_CIRCLE);
	}
	
	public static function ARROW_LEFT()
	{
		return self::make(self::ARROW_LEFT);
	}
	
	public static function ARROW_RIGHT()
	{
		return self::make(self::ARROW_RIGHT);
	}
	
	public static function ARROW_UP()
	{
		return self::make(self::ARROW_UP);
	}
	
	public static function ARROW_DOWN()
	{
		return self::make(self::ARROW_DOWN);
	}
	
	public static function SHARE_ALT()
	{
		return self::make(self::SHARE_ALT);
	}
	
	public static function RESIZE_FULL()
	{
		return self::make(self::RESIZE_FULL);
	}
	
	public static function RESIZE_SMALL()
	{
		return self::make(self::RESIZE_SMALL);
	}
	
	public static function EXCLAMATION_SIGN()
	{
		return self::make(self::EXCLAMATION_SIGN);
	}
	
	public static function GIFT()
	{
		return self::make(self::GIFT);
	}
	
	public static function LEAF()
	{
		return self::make(self::LEAF);
	}
	
	public static function FIRE()
	{
		return self::make(self::FIRE);
	}
	
	public static function EYE_OPEN()
	{
		return self::make(self::EYE_OPEN);
	}
	
	public static function EYE_CLOSE()
	{
		return self::make(self::EYE_CLOSE);
	}
	
	public static function WARNING_SIGN()
	{
		return self::make(self::WARNING_SIGN);
	}
	
	public static function PLANE()
	{
		return self::make(self::PLANE);
	}
	
	public static function CALENDAR()
	{
		return self::make(self::CALENDAR);
	}
	
	public static function RANDOM()
	{
		return self::make(self::RANDOM);
	}
	
	public static function COMMENT()
	{
		return self::make(self::COMMENT);
	}
	
	public static function MAGNET()
	{
		return self::make(self::MAGNET);
	}
	
	public static function CHEVRON_UP()
	{
		return self::make(self::CHEVRON_UP);
	}
	
	public static function CHEVRON_DOWN()
	{
		return self::make(self::CHEVRON_DOWN);
	}
	
	public static function RETWEET()
	{
		return self::make(self::RETWEET);
	}
	
	public static function SHOPPING_CART()
	{
		return self::make(self::SHOPPING_CART);
	}
	
	public static function FOLDER_CLOSE()
	{
		return self::make(self::FOLDER_CLOSE);
	}
	
	public static function FOLDER_OPEN()
	{
		return self::make(self::FOLDER_OPEN);
	}
	
	public static function RESIZE_VERTICAL()
	{
		return self::make(self::RESIZE_VERTICAL);
	}
	
	public static function RESIZE_HORIZONTAL()
	{
		return self::make(self::RESIZE_HORIZONTAL);
	}
	
	public static function HDD()
	{
		return self::make(self::HDD);
	}
	
	public static function BULLHORN()
	{
		return self::make(self::BULLHORN);
	}
	
	public static function BELL()
	{
		return self::make(self::BELL);
	}
	
	public static function CERTIFICATE()
	{
		return self::make(self::CERTIFICATE);
	}
	
	public static function THUMBS_UP()
	{
		return self::make(self::THUMBS_UP);
	}
	
	public static function THUMBS_DOWN()
	{
		return self::make(self::THUMBS_DOWN);
	}
	
	public static function HAND_RIGHT()
	{
		return self::make(self::HAND_RIGHT);
	}
	
	public static function HAND_LEFT()
	{
		return self::make(self::HAND_LEFT);
	}
	
	public static function HAND_UP()
	{
		return self::make(self::HAND_UP);
	}
	
	public static function HAND_DOWN()
	{
		return self::make(self::HAND_DOWN);
	}
	
	public static function CIRCLE_ARROW_RIGHT()
	{
		return self::make(self::CIRCLE_ARROW_RIGHT);
	}
	
	public static function CIRCLE_ARROW_LEFT()
	{
		return self::make(self::CIRCLE_ARROW_LEFT);
	}
	
	public static function CIRCLE_ARROW_UP()
	{
		return self::make(self::CIRCLE_ARROW_UP);
	}
	
	public static function CIRCLE_ARROW_DOWN()
	{
		return self::make(self::CIRCLE_ARROW_DOWN);
	}
	
	public static function GLOBE()
	{
		return self::make(self::GLOBE);
	}
	
	public static function WRENCH()
	{
		return self::make(self::WRENCH);
	}
	
	public static function TASKS()
	{
		return self::make(self::TASKS);
	}
	
	public static function FILTER()
	{
		return self::make(self::FILTER);
	}
	
	public static function BRIEFCASE()
	{
		return self::make(self::BRIEFCASE);
	}
	
	public static function FULLSCREEN()
	{
		return self::make(self::FULLSCREEN);
	}
	
	public static function DASHBOARD()
	{
		return self::make(self::DASHBOARD);
	}
	
	public static function PAPERCLIP()
	{
		return self::make(self::PAPERCLIP);
	}
	
	public static function HEART_EMPTY()
	{
		return self::make(self::HEART_EMPTY);
	}
	
	public static function LINK()
	{
		return self::make(self::LINK);
	}
	
	public static function PHONE()
	{
		return self::make(self::PHONE);
	}
	
	public static function PUSHPIN()
	{
		return self::make(self::PUSHPIN);
	}
	
	public static function USD()
	{
		return self::make(self::USD);
	}
	
	public static function GPB()
	{
		return self::make(self::GPB);
	}
	
	public static function SORT()
	{
		return self::make(self::SORT);
	}
	
	public static function SORT_ALPHABET()
	{
		return self::make(self::SORT_ALPHABET);
	}
	
	public static function SORT_ALPHABET_ALT()
	{
		return self::make(self::SORT_ALPHABET_ALT);
	}
	
	public static function SORT_ORDER()
	{
		return self::make(self::SORT_ORDER);
	}
	
	public static function SORT_ORDER_ALT()
	{
		return self::make(self::SORT_ORDER_ALT);
	}
	
	public static function SORT_ATTRIBUTES()
	{
		return self::make(self::SORT_ATTRIBUTES);
	}
	
	public static function SORT_ATTRIBUTES_ALT()
	{
		return self::make(self::SORT_ATTRIBUTES_ALT);
	}
	
	public static function UNCHECKED()
	{
		return self::make(self::UNCHECKED);
	}
	
	public static function EXPAND()
	{
		return self::make(self::EXPAND);
	}
	
	public static function COLLAPSE_DOWN()
	{
		return self::make(self::COLLAPSE_DOWN);
	}
	
	public static function COLLAPSE_UP()
	{
		return self::make(self::COLLAPSE_UP);
	}
	
	public static function LOG_IN()
	{
		return self::make(self::LOG_IN);
	}
	
	public static function FLASH()
	{
		return self::make(self::FLASH);
	}
	
	public static function LOG_OUT()
	{
		return self::make(self::LOG_OUT);
	}
	
	public static function NEW_WINDOW()
	{
		return self::make(self::NEW_WINDOW);
	}
	
	public static function RECORD()
	{
		return self::make(self::RECORD);
	}
	
	public static function SAVE()
	{
		return self::make(self::SAVE);
	}
	
	public static function OPEN()
	{
		return self::make(self::OPEN);
	}
	
	public static function SAVED()
	{
		return self::make(self::SAVED);
	}
	
	public static function IMPORT()
	{
		return self::make(self::IMPORT);
	}
	
	public static function EXPORT()
	{
		return self::make(self::EXPORT);
	}
	
	public static function SEND()
	{
		return self::make(self::SEND);
	}
	
	public static function FLOPPY_DISK()
	{
		return self::make(self::FLOPPY_DISK);
	}
	
	public static function FLOPPY_SAVED()
	{
		return self::make(self::FLOPPY_SAVED);
	}
	
	public static function FLOPPY_REMOVE()
	{
		return self::make(self::FLOPPY_REMOVE);
	}
	
	public static function FLOPPY_SAVE()
	{
		return self::make(self::FLOPPY_SAVE);
	}
	
	public static function FLOPPY_OPEN()
	{
		return self::make(self::FLOPPY_OPEN);
	}
	
	public static function CREDIT_CARD()
	{
		return self::make(self::CREDIT_CARD);
	}
	
	public static function TRANSFER()
	{
		return self::make(self::TRANSFER);
	}
	
	public static function CUTLERY()
	{
		return self::make(self::CUTLERY);
	}
	
	public static function HEADER()
	{
		return self::make(self::HEADER);
	}
	
	public static function COMPRESSED()
	{
		return self::make(self::COMPRESSED);
	}
	
	public static function EARPHONE()
	{
		return self::make(self::EARPHONE);
	}
	
	public static function PHONE_ALT()
	{
		return self::make(self::PHONE_ALT);
	}
	
	public static function TOWER()
	{
		return self::make(self::TOWER);
	}
	
	public static function STATS()
	{
		return self::make(self::STATS);
	}
	
	public static function VIDEO_SD()
	{
		return self::make(self::VIDEO_SD);
	}
	
	public static function VIDEO_HD()
	{
		return self::make(self::VIDEO_HD);
	}
	
	public static function SUBTITLES()
	{
		return self::make(self::SUBTITLES);
	}
	
	public static function SOUND_STEREO()
	{
		return self::make(self::SOUND_STEREO);
	}
	
	public static function SOUND_DOLBY()
	{
		return self::make(self::SOUND_DOLBY);
	}
	
	public static function SOUND_5_1()
	{
		return self::make(self::SOUND_5_1);
	}
	
	public static function SOUND_6_1()
	{
		return self::make(self::SOUND_6_1);
	}
	
	public static function SOUND_7_1()
	{
		return self::make(self::SOUND_7_1);
	}
	
	public static function COPYRIGHT_MARK()
	{
		return self::make(self::COPYRIGHT_MARK);
	}
	
	public static function REGISTRATION_MARK()
	{
		return self::make(self::REGISTRATION_MARK);
	}
	
	public static function CLOUD_DOWNLOAD()
	{
		return self::make(self::CLOUD_DOWNLOAD);
	}
	
	public static function CLOUD_UPLOAD()
	{
		return self::make(self::CLOUD_UPLOAD);
	}
	
	public static function TREE_CONIFER()
	{
		return self::make(self::TREE_CONIFER);
	}
	
	public static function TREE_DECIDUOUS()
	{
		return self::make(self::TREE_DECIDUOUS);
	}
	
	public static function CD()
	{
		return self::make(self::CD);
	}
	
	public static function FILE_SAVE()
	{
		return self::make(self::FILE_SAVE);
	}
	
	public static function FILE_OPEN()
	{
		return self::make(self::FILE_OPEN);
	}
	
	public static function LEVEL_UP()
	{
		return self::make(self::LEVEL_UP);
	}
	
	public static function COPY()
	{
		return self::make(self::COPY);
	}
	
	public static function PASTE()
	{
		return self::make(self::PASTE);
	}
	
	public static function ALERT()
	{
		return self::make(self::ALERT);
	}
	
	public static function EQUALIZER()
	{
		return self::make(self::EQUALIZER);
	}
	
	public static function KING()
	{
		return self::make(self::KING);
	}
	
	public static function QUEEN()
	{
		return self::make(self::QUEEN);
	}
	
	public static function PAWN()
	{
		return self::make(self::PAWN);
	}
	
	public static function BISHOP()
	{
		return self::make(self::BISHOP);
	}
	
	public static function KNIGHT()
	{
		return self::make(self::KNIGHT);
	}
	
	public static function BABY_FORMULA()
	{
		return self::make(self::BABY_FORMULA);
	}
	
	public static function TENT()
	{
		return self::make(self::TENT);
	}
	
	public static function BLACKBOARD()
	{
		return self::make(self::BLACKBOARD);
	}
	
	public static function BED()
	{
		return self::make(self::BED);
	}
	
	public static function APPLE()
	{
		return self::make(self::APPLE);
	}
	
	public static function ERASE()
	{
		return self::make(self::ERASE);
	}
	
	public static function HOURGLASS()
	{
		return self::make(self::HOURGLASS);
	}
	
	public static function LAMP()
	{
		return self::make(self::LAMP);
	}
	
	public static function DUPLICATE()
	{
		return self::make(self::DUPLICATE);
	}
	
	public static function PIGGY_BANK()
	{
		return self::make(self::PIGGY_BANK);
	}
	
	public static function SCISSORS()
	{
		return self::make(self::SCISSORS);
	}
	
	public static function BITCOIN()
	{
		return self::make(self::BITCOIN);
	}
	
	public static function YEN()
	{
		return self::make(self::YEN);
	}
	
	public static function RUBLE()
	{
		return self::make(self::RUBLE);
	}
	
	public static function SCALE()
	{
		return self::make(self::SCALE);
	}
	
	public static function ICE_LOLLY()
	{
		return self::make(self::ICE_LOLLY);
	}
	
	public static function ICE_LOLLY_TASTED()
	{
		return self::make(self::ICE_LOLLY_TASTED);
	}
	
	public static function EDUCATION()
	{
		return self::make(self::EDUCATION);
	}
	
	public static function OPTION_HORIZONTAL()
	{
		return self::make(self::OPTION_HORIZONTAL);
	}
	
	public static function OPTION_VERTICAL()
	{
		return self::make(self::OPTION_VERTICAL);
	}
	
	public static function MENU_HAMBURGER()
	{
		return self::make(self::MENU_HAMBURGER);
	}
	
	public static function MODAL_WINDOW()
	{
		return self::make(self::MODAL_WINDOW);
	}
	
	public static function OIL()
	{
		return self::make(self::OIL);
	}
	
	public static function GRAIN()
	{
		return self::make(self::GRAIN);
	}
	
	public static function SUNGLASSES()
	{
		return self::make(self::SUNGLASSES);
	}
	
	public static function TEXT_SIZE()
	{
		return self::make(self::TEXT_SIZE);
	}
	
	public static function TEXT_COLOR()
	{
		return self::make(self::TEXT_COLOR);
	}
	
	public static function TEXT_BACKGROUND()
	{
		return self::make(self::TEXT_BACKGROUND);
	}
	
	public static function OBJ_ALIGN_TOP()
	{
		return self::make(self::OBJ_ALIGN_TOP);
	}
	
	public static function OBJ_ALIGN_BOTTOM()
	{
		return self::make(self::OBJ_ALIGN_BOTTOM);
	}
	
	public static function OBJ_ALIGN_HORIZONTAL()
	{
		return self::make(self::OBJ_ALIGN_HORIZONTAL);
	}
	
	public static function OBJ_ALIGN_LEFT()
	{
		return self::make(self::OBJ_ALIGN_LEFT);
	}
	
	public static function OBJ_ALIGN_VERTICAL()
	{
		return self::make(self::OBJ_ALIGN_VERTICAL);
	}
	
	public static function OBJ_ALIGN_RIGHT()
	{
		return self::make(self::OBJ_ALIGN_RIGHT);
	}
	
	public static function TRIANGLE_RIGHT()
	{
		return self::make(self::TRIANGLE_RIGHT);
	}
	
	public static function TRIANGLE_LEFT()
	{
		return self::make(self::TRIANGLE_LEFT);
	}
	
	public static function TRIANGLE_BOTTOM()
	{
		return self::make(self::TRIANGLE_BOTTOM);
	}
	
	public static function TRIANGLE_TOP()
	{
		return self::make(self::TRIANGLE_TOP);
	}
	
	public static function CONSOLE()
	{
		return self::make(self::CONSOLE);
	}
	
	public static function SUPERSCRIPT()
	{
		return self::make(self::SUPERSCRIPT);
	}
	
	public static function SUBSCRIPT()
	{
		return self::make(self::SUBSCRIPT);
	}
	
	public static function MENU_LEFT()
	{
		return self::make(self::MENU_LEFT);
	}
	
	public static function MENU_RIGHT()
	{
		return self::make(self::MENU_RIGHT);
	}
	
	public static function MENU_DOWN()
	{
		return self::make(self::MENU_DOWN);
	}
	
	public static function MENU_UP()
	{
		return self::make(self::MENU_UP);
	}
	
}
