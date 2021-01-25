<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'prestige' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Sl7g=tx%`_b-dToXwRTOP}GJ3/OPYzGj}NRvG=H&QA-G{[@<.D|H<]pIg_Otqu7T' );
define( 'SECURE_AUTH_KEY',  'IB|DWOWA&TBI~S]!Hs#dyfMN=9V;Jg1uujxXg<xX<n,zdxPEHhA%`4oq8pl<j/xO' );
define( 'LOGGED_IN_KEY',    'h=Ti1]>h~u6Y!j_Yzn`.5tR7}dEMf./mx 1C(DAbv*_3A+`Q*]#6}>B1-;sNy+s3' );
define( 'NONCE_KEY',        '/(VAvR?z,Y[w+/7Tr3/eXhI>mjTYUkXk]Yq]mVSZh-H}PfwU$+Cr9[v k1^]d?Pc' );
define( 'AUTH_SALT',        '4WX?q~c3BvB7.9y7j^%WCGL#M/#%Gb#Rw|Iy[RE@s[+6g`BRG,n=[F>^?bh{3*]Z' );
define( 'SECURE_AUTH_SALT', 'AJeB#cp+Dk7G?W&qd?p{b:e)UVI3I&F7Bay-fC:q^ k;Iz5F&0XAjT|aWQde@|5,' );
define( 'LOGGED_IN_SALT',   '~H2Y,}j|KWz@BXeLSZzzH$@sNb[$6~?MaB/og0m5o=PIhdGfiJh~212G`~sK$z1K' );
define( 'NONCE_SALT',       ',=LuAq8_.OkGE&v7I(h#(6smGR4QU3{ZxV[7>MI=%5P:~@lXi&m/]oUn.[pB|=V(' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
