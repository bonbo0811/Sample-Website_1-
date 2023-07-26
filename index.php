<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Base.css">
    <link rel="stylesheet" href="CSS/styleProfile.css">
    <title>Sample Site ①</title>
</head>

<body>
    <div class="header">
        <h1>Web Site</h1>
        <div class="nav">
            <ul>
                <li><a href="#About">About</a></li>
                <li><a href="#WebSites">Web Sites</a></li>
            </ul>
        </div>
    </div>
    <div class="main">
        <div class="mainvisual">
            <img src="./images/camp_pic.jpg" alt="キャンプの画像">
        </div>
        <div class="sec">
            <section class="About">
                <h2><a id="About"><span class="under">About</span></a></h2>
                <div class="profile">
                    <img src="images/profile_pic.jpg" alt="プロフィールの画像">
                    <ul>
                        <li><h3>ぼんぼコーディング</h3></li>
                        <li>
                            中部地方で現役エンジニアとして働いているぼんぼです。<br>
                            HPのコーディングやWEB制作をメインに行なっています。
                            サイト全体の作成はもちろん、1ページの作成も承りますのでお気軽にご相談ください。
                        </li>
                    </ul>
                </div>
            </section>
            <section class="WebSites">
                <h2><a id="WebSites"><span class="under">Web Sites</span></a></h2>
                <div class="WebSites">
                    <ul>
                        <li>
                            <a href="./HTML/SecondSite.php"><img src="images/タイトル①.jpg" alt="自転車の画像"></a>
                            <h3>WEBサイト1</h3>
                            <p>作成したサンプルのウェブページです。</p>
                        </li>
                        <li>
                            <a href="./HTML/ThirdSite.php"><img src="images/タイトル②.jpg" alt="自転車の画像"></a>
                            <h3>WEBサイト2</h3>
                            <p>作成したサンプルのウェブページです。</p>
                        </li>
                        <li>
                            <a href="./HTML/FourthSites/index.php"><img src="images/タイトル③.jpg" alt="自転車の画像"></a>
                            <h3>WEBサイト3</h3>
                            <p>作成したサンプルのウェブページです。</p>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <div class="footer">
        <small>bonbo_web 2022</small>
    </div>
</body>

</html>