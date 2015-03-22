<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'wordpress');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'wordpress');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v+1{J9=M0RDyhAK^~+5;X-Sp(pdS9LrK>Z@D+Mt@@j[k0a|D` 1+$+=+(-KEU{Ik');
define('SECURE_AUTH_KEY',  ' LQ3J|B:jvgw{ou4Uqtv5nA-1D|w(vBL((|GXX(%xAO^}-CM0%:#PP<!={aQpxS*');
define('LOGGED_IN_KEY',    'RW+f=OoKxlFi0JkGI~&[O^[e3I3s2M,Zj)M;)%RB(Dgs#EY0Y%-<]eh&N2F~-O@O');
define('NONCE_KEY',        'LheI9y3zzaF&!np6QV9v~3:;KgZo|Dhr)ju=# ->.+DQ3uQ0nu&i{ZM#v{ZEppTO');
define('AUTH_SALT',        '%r3YeQr%D1t^-9~3yve:Mh<I&>2FyKD|sNyVbyQA WQbj;.7I]>)&uef&Y!N:rss');
define('SECURE_AUTH_SALT', '1WA:n&,3z$[N-%0!q2/+I._&mUURRA6^^p-4hW8J@`L|-4rm#0.bg?-PfTi|;DL7');
define('LOGGED_IN_SALT',   '3E$te?+.d~bb_|jVmJ<MOu_#D- z^RUBTTltZOsE.v5<--H0)J>;IRSu]|}8t.X6');
define('NONCE_SALT',       'Q*Ho::,X_TfTK[H7~F?zw>s)390LPqsf`OEN>|R@]Uh7@m[ yY>(KX]J93px;V3o');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD','direct');
