define('DB_NAME, 'wordpress');
define('DB_USER', 'jdamoise');
define('DB_PASSWORD', 'qwertyuiop');
define('DB_HOST', 'mariadb');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE','');

define('AUTH_KEY',         '`Z|W;?(va[x%6a-|4*!AY|nw1&3$ryEXBR7uunzF*4-A|-2|u>gZSiEN-d,^[-Oz');
define('SECURE_AUTH_KEY',  'N|r52G`+`Q|75E+bE{@bZQH+y~++/V=~76ZbR-+q?wP-PL}wy|RJP;in9((3-ps{');
define('LOGGED_IN_KEY',    'K1?4@E.^9w5XM&K?--.JsaF !n!M-{>g=%fr`/A0%w` DNW`kPCgoA3<y7[>TvI9');
define('NONCE_KEY',        '@zlFDD&s,[_;|[6>%R7$tR.7p}+FgUBoFroG(>|$`^YkcsBWAYWvln4WjL{#ASv?');
define('AUTH_SALT',        '+(-LOj2RYY`>3Wg|zj[NL+X~LqPX; 6:pe>M:?.hFOJ-<e`OE1vB$hT@4Yq^=c|~');
define('SECURE_AUTH_SALT', '6UFf-G|E)x4>l=kRG)+pJBfUY:xDV-pz7jJ.S*e+-?e[Vho +(;}+JPeEJL.I#8M');
define('LOGGED_IN_SALT',   'Z;|p?uW|kQp;pT-%V|WJ95DH93OJAB$vG7X%D90%W|#|rJD$`qp{TjCfz|y?+-Qt');
define('NONCE_SALT',       'xf+kV&S9{v!WRvw5&.-f|Xhtffpcb!:d~oK^w PTw]WeLsz08Z)Zyx7SLIQdH:pR');

$table_prefix = 'wp_';

define('WP_DEBUG', false);

if (!defined('ABSPATH')){
    define('ABSPATH', '/var/www/html/wordpress');
}

require_once ABSPATH . 'wp-settings.php'