<?
// ---------------------------------------------------------------------
// GLOBAL
// ---------------------------------------------------------------------

$TEXT['global-xampp']="XAMPP Linux版";
$TEXT['global-showcode']="ソースコードを表示";
$TEXT['global-sourcecode']="ソースコード";

// ---------------------------------------------------------------------
// NAVIGATION
// ---------------------------------------------------------------------

$TEXT['navi-xampp']="XAMPP";
$TEXT['navi-welcome']="ようこそ";
$TEXT['navi-status']="ステータス";
$TEXT['navi-security']="セキュリティ";
$TEXT['navi-doc']="マニュアル";
$TEXT['navi-components']="コンポーネント";
$TEXT['navi-about']="XAMPPについて";

$TEXT['navi-demos']="デモ";
$TEXT['navi-cdcol']="ＣＤ コレクション";
$TEXT['navi-bio']="バイオリズム";
$TEXT['navi-guest']="ゲストブック";
$TEXT['navi-iart']="インスタントアート";
$TEXT['navi-iart2']="フラッシュアート";
$TEXT['navi-phonebook']="電話帳";

$TEXT['navi-tools']="ツール";
$TEXT['navi-phpmyadmin']="phpMyAdmin";
$TEXT['navi-webalizer']="webalizer";
$TEXT['navi-phpsqliteadmin']="phpSQLiteAdmin";
                                                                                                                        
$TEXT['navi-languages']="各国語";

// ---------------------------------------------------------------------
// STATUS
// ---------------------------------------------------------------------

$TEXT['status-head']="XAMPP ステータス";
$TEXT['status-text1']="このページでは稼働中のもの、そうでないものの情報を一覧で見ることができます。";
$TEXT['status-text2']="設定の変更の仕方によっては、誤ったネガティブなステータス・レポートが出る場合があります。";

$TEXT['status-mysql']="MySQLデータベース";
$TEXT['status-php']="PHP";
$TEXT['status-perl']="Perl";
$TEXT['status-cgi']="Common Gateway Interface (CGI)";
$TEXT['status-ssi']="Server Side Includes (SSI)";
$TEXT['status-mmcache']="PHP extension ｻeAcceleratorｫ";
$TEXT['status-mmcache-url']="http://www.apachefriends.org/faq-lampp-en.html#mmcache";
$TEXT['status-oci8']="PHP extension ｻOCI8/Oracleｫ";
$TEXT['status-oci8-url']="http://www.apachefriends.org/faq-lampp-en.html#oci8";

$TEXT['status-lookfaq']="FAQを参照";
$TEXT['status-ok']="開始";
$TEXT['status-nok']="停止";

$TEXT['status-tab1']="コンポーネント";
$TEXT['status-tab2']="ステータス";
$TEXT['status-tab3']="ヒント";

// ---------------------------------------------------------------------
// SECURITY
// ---------------------------------------------------------------------

$TEXT['security-head']="XAMPP セキュリティ";
$TEXT['security-text1']="ここでは、XAMPPインストールにおけるセキュリティ・ステータスについて、簡単なご説明をしています。(テーブルの後も続けてお読みください。)";
$TEXT['security-text2']="緑のハイライトの表示は「安全」です。赤のハイライトの表示は、決定的に「要注意」、黄色のハイライトは「確認不能」(例えば、確認したいソフトウェアが稼動していないなど)です。<p>そのような問題をすべて修正するには、単純に<p><b>/opt/lampp/lampp security</b><p>をコールしてください。インタラクティブなプログラムが開始されます。";

$TEXT['security-ok']="安全";
$TEXT['security-nok']="要注意";
$TEXT['security-noidea']="不明";

$TEXT['security-tab1']="対象";
$TEXT['security-tab2']="ステータス";

$TEXT['security-checkapache-nok']="これらのXAMPPページは一般的にネットワーク経由でアクセス可能です。";
$TEXT['security-checkapache-ok']="これらのXAMPPページはネットワーク経由での一般的なアクセスが可能でなくなりました。";
$TEXT['security-checkapache-text']="現在ご覧になっているすべてのXAMPPデモページは、ネットワーク上で一般的にアクセス可能です。あなたのIPアドレスを知っている人は誰でもこれらのページを見ることができます。";

$TEXT['security-checkmysqlport-nok']="MySQL はネットワーク経由でアクセス可能です";
$TEXT['security-checkmysqlport-ok']="MySQL はネットワーク上でアクセスできなくなりました";
$TEXT['security-checkmysqlport-text']="セキュリティ・リークの可能性があります（少なくとも理論上のセキュリティ・リークです）。セキュリティについて不安がありましたら、MySQLのネットワーク・インターフェースを無効にすることをお勧めします。";

$TEXT['security-checkpmamysqluser-nok']="phpMyAdmin ユーザpma にパスワードがありません";
$TEXT['security-checkpmamysqluser-ok']="phpMyAdmin ユーザpma はパスワード無しの状態が解消されました";
$TEXT['security-checkpmamysqluser-text']="phpMyAdminは、あなたの追加MySQL databaseの選択を保存します。このデータにアクセスするのに、phpMyAdminでは特別なユーザpmaを使用します。このユーザは、デフォルトのインストールではパスワードが与えられていないので、セキュリティのトラブルを避けるためにはこのユーザにパスワードを与える必要があります。";

$TEXT['security-checkmysql-nok']="MySQLユーザrootにパスワードがありません";
$TEXT['security-checkmysql-ok']="MySQLユーザrootはパスワードが無しの状態が解消されました";
$TEXT['security-checkmysql-text']="Linux Box上のローカルユーザであれば誰でもあなたのMySQLデータベースに管理者権限でアクセスできます。パスワードを設定してください。";

$TEXT['security-checkftppassword-nok']="ユーザnobody のFTPパスワードが「lampp」のままです";
$TEXT['security-checkftppassword-ok']="ユーザnobody のFTPパスワードが「lampp」から変更されました";
$TEXT['security-checkftppassword-text']="FTP匿名ユーザのデフォルトのパスワードを使用すると、誰でもあなたのXAMPPウェブサーバに対してアップロードやファイルの変更をかけることができます。ProFTPDを有効にした場合、匿名ユーザに対して新しいパスワードを設定する必要があります。";

// ---------------------------------------------------------------------
// START
// ---------------------------------------------------------------------

$TEXT['start-head']="XAMPP Linux版へようこそ";

$TEXT['start-subhead']="おめでとうございます:<br>システム上にXAMPPが正しくインストールされました！";

$TEXT['start-text1']="これで、Apacheを使い始めることができます。まず、左端のナビゲーションの≪ステータス≫から、すべて問題なく動作することを確認してください。";

$TEXT['start-text2']="テスト終了後、テストリンクの下の事例を参照することもできます。";

$TEXT['start-text3']="PHPまたはPerl（またはその他）でプログラミングを開始したい場合、まず<a target=extern href=http://www.apachefriends.org/lampp-en.html>XAMPP manual</a> を参照して、XAMPPのインストールについて詳細情報を入手してください。";

$TEXT['start-text4']="グッドラック！<br>Kai \"Oswald\" Seidler + Kay Vogelgesang";

// ---------------------------------------------------------------------
// MANUALS
// ---------------------------------------------------------------------

$TEXT['manuals-head']="オンライン・マニュアル";

$TEXT['manuals-text1']="XAMPPは、いくつもの異なるソフトウェア・パッケージをひとまとめにします。最も重要なソフトウェア・パッケージの標準的なドキュメントを掲載しました。";


$TEXT['manuals-list1']="
<ul>
<li><a href=http://httpd.apache.org/docs-2.0/>Apache 2 ドキュメント</a>
<li><a href=http://www.php.net/manual/en/>PHP <b>リファレンス </b>ドキュメント</a>
<li><a href=http://www.perldoc.com/perl5.8.0/pod/perl.html>Perl ドキュメント</a>
<li><a href=http://www.mysql.com/documentation/mysql/bychapter/>MySQL ドキュメント</a>
<li><a href=http://proftpd.linux.co.uk/localsite/Userguide/linked/userguide.html>ProFTPD ユーザガイド</a>
<li><a href=http://www.ros.co.nz/pdf/readme.pdf>pdf class ドキュメント</a>
</ul>";

$TEXT['manuals-text2']="チュートリアルのショートリストとApache Friendsドキュメントのページ：";

$TEXT['manuals-list2']="
<ul>
<li><a href=http://www.apachefriends.org/faq-en.html>Apache Friends ドキュメント</a>
<li><a href=http://www.freewebmasterhelp.com/tutorials/php>PHP チュートリアル</a> by David Gowans
<li><a href=http://www.davesite.com/webstation/html/>HTML - 初心者向けインタラクティブ・チュートリアル</a> by Dave Kristula
<li><a href=http://www.comp.leeds.ac.uk/Perl/start.html>Perl チュートリアル</a> by Nik Silver
</ul>";

$TEXT['manuals-text3']="グッドラック！ Have fun♪:)";

// ---------------------------------------------------------------------
// COMPONENTS
// ---------------------------------------------------------------------

$TEXT['components-head']="XAMPP components";

$TEXT['components-text1']="XAMPP combines many different sofware packages into one packet. Here's an overview over all packages.";

$TEXT['components-text2']="Many thanks to the developers of these programs.";

$TEXT['components-text3']="In the directory <b>/opt/lampp/licenses</b> you will find all licenses and README files of these programs.";

// ---------------------------------------------------------------------
// CD COLLECTION DEMO
// ---------------------------------------------------------------------

$TEXT['cds-head']="CDコレクション（PHP+MySQL+PDF Classの事例）";
$TEXT['cds-head-fpdf']="CD コレクション (PHP+MySQL+FPDFの事例)";

$TEXT['cds-text1']="シンプルなCDプログラム";

$TEXT['cds-text2']="CDリスト<a href='$PHP_SELF?action=getpdf'>PDF ドキュメント</a>.";

$TEXT['cds-error']="データベースを接続できません！<br>MySQLは稼動していますか？またはパスワードを変えませんでしたか？";
$TEXT['cds-head1']="マイCD";
$TEXT['cds-attrib1']="アーティスト";
$TEXT['cds-attrib2']="タイトル";
$TEXT['cds-attrib3']="年";
$TEXT['cds-attrib4']="コマンド";
$TEXT['cds-sure']="いいですか？";
$TEXT['cds-head2']="CD追加";
$TEXT['cds-button1']="CD削除";
$TEXT['cds-button2']="CD追加";

// ---------------------------------------------------------------------
// BIORHYTHM DEMO
// ---------------------------------------------------------------------

$TEXT['bio-head']="バイオリズム (PHP+GDの事例)";

$TEXT['bio-by']="by";
$TEXT['bio-ask']="誕生日を記入してください";
$TEXT['bio-ok']="OK";
$TEXT['bio-error1']="日";
$TEXT['bio-error2']="無効です";

$TEXT['bio-birthday']="誕生日";
$TEXT['bio-today']="今日";
$TEXT['bio-intellectual']="知性的";
$TEXT['bio-emotional']="感情的";
$TEXT['bio-physical']="肉体的";

// ---------------------------------------------------------------------
// INSTANT ART DEMO
// ---------------------------------------------------------------------

$TEXT['iart-head']="インスタントアート (PHP+GD+FreeTypeの事例)";
$TEXT['iart-text1']="フォント ≪AnkeCalligraph≫  by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['iart-ok']="OK";

// ---------------------------------------------------------------------
// FLASH ART DEMO
// ---------------------------------------------------------------------

$TEXT['flash-head']="フラッシュアート (PHP+MINGの事例)";
$TEXT['flash-text1']="フォント ≪AnkeCalligraph≫ by <a class=blue target=extern href=\"http://www.anke-art.de/\">Anke Arnold</a>";
$TEXT['flash-ok']="OK";

// ---------------------------------------------------------------------
// PHONE BOOK DEMO
// ---------------------------------------------------------------------

$TEXT['phonebook-head']="電話帳 (PHP+SQLiteの事例)";

$TEXT['phonebook-text1']="簡単な電話帳スクリプトですが、最新のテクノロジーを駆使して実装されています：　SQLite、SQLデータベース、サーバは使用しません。";

$TEXT['phonebook-error']="データベースを開けませんでした！";
$TEXT['phonebook-head1']="マイ電話番号";
$TEXT['phonebook-attrib1']="姓";
$TEXT['phonebook-attrib2']="名";
$TEXT['phonebook-attrib3']="電話番号";
$TEXT['phonebook-attrib4']="コマンド";
$TEXT['phonebook-sure']="いいですか？";
$TEXT['phonebook-head2']="エントリ追加";
$TEXT['phonebook-button1']="削除";
$TEXT['phonebook-button2']="追加";

// ---------------------------------------------------------------------
// ABOUT
// ---------------------------------------------------------------------

$TEXT['about-head']="XAMPPについて";

$TEXT['about-subhead1']="アイディアと実現";

$TEXT['about-subhead2']="デザイン";

$TEXT['about-subhead3']="コラボレーション";

$TEXT['about-subhead4']="コンタクト先";


?>
