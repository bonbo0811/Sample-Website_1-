<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Base.css">
    <link rel="stylesheet" href="../CSS/Second.css">
    <title>Sample Site ①</title>
</head>

<body>
    <div class="header">
        <h1>My Work</h1>
        <div class="nav">
            <ul>
                <li><a href="#About">About</a></li>
                <li><a href="#Works">Works</a></li>
                <li><a href="#News">News</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="mainvisual">
            <img src="../images_2/mainvisual-pc.jpg" alt="メインの画像">
        </div>
        <div class="sec">
            <section class="About">
                <h2><a id="About">About</a></h2>
                <div class="profile">
                    <ul>
                        <li><h3>Xxxxx Ashley</h3></li>
                        <li>2th Floor xxxxx Building x-x-x Nishiazabu, Minato-ku, Tokyo 106-0031 Japan</li>
                        <li>tel: 000-0000-0000</li>
                        <li>url: www.xxxxxx.jp</li>
                        <li>mail: xxx@xxxxxx.jp</li>
                    </ul>
                    <p>
                    プロフィールテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストスト テキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                </div>
            </section>
            <section class="Works">
                <h2><a id="Works">Works</a></h2>
                <div class="Works">
                    <ul class="Works-list">
                        <li>
                            <img src="../images_2/works1.jpg" alt="自転車の画像">
                        </li>
                        <li>
                            <img src="../images_2/works2.jpg" alt="自転車の画像">
                        </li>
                        <li>
                            <img src="../images_2/works3.jpg" alt="自転車の画像">
                        </li>
                        <li>
                            <img src="../images_2/works4.jpg" alt="自転車の画像">
                        </li>
                        <li>
                            <img src="../images_2/works5.jpg" alt="自転車の画像">
                        </li>
                        <li>
                            <img src="../images_2/works6.jpg" alt="自転車の画像">
                        </li>
                    </ul>
                </div>
            </section>
            <section class="News">
                <h2><a id="News">News</a></h2>
                <dl>
                    <dt>2020.XX.XX</dt>
                    <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</dd>
                    <dt>22020.XX.XX</dt>
                    <dd>ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</dd>
                    <dt>2019.XX.XX</dt>
                    <dd>【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
                    <dt>2019.XX.XX</dt>
                    <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。</dd>
                    <dt class="ddend">2019.XX.XX</dt>
                    <dd class="dtend">【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
                </dl>
            </section>
            <section class="Contact">
                <h2><a id="Contact">Contact</a></h2>
                <form action="">
                    <dl>
                        <dt>NAME</dt>
                        <dd><input type="text" id="NAME" name="NAME"></dd>
                        <dt>E-mail</dt>
                        <dd><input type="mail" id="E-mail" name="E-mail"></dd>
                        <dt>MESSAGE</dt>
                        <dd class="message"><textarea name="" id="MESSAGE" name="MESSAGE"></textarea></dd>
                    </dl>
                    <a href=""><button>送信</button></a>
                </form>
            </section>
        </div>
    </div>
    <footer>
        <small>2023 My Work </small>
    </footer>
</body>

</html>