<!DOCTYPE html>
<html lang="ja"> <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>三池物産株式会社</title>
    
    <link rel="stylesheet" href="css/header.css">
    
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            
            <a href="index.php" class="header-brand">
                <img src="images/logo.png" alt="ロゴ" class="brand-logo">
                <span class="brand-name">三池物産株式会社</span>
            </a>

            <nav class="pc-nav">
                <ul class="nav-list">
                    <li><a href="index.php">ホーム</a></li>
                    <li><a href="philosophy.php">社訓</a></li>
                    <li><a href="company.php">会社概要</a></li>
                    <li><a href="business.php">事業案内</a></li>
                    <li><a href="location.php">所在地</a></li>
                    <li><a href="announcement.php">アナウンス</a></li>
                    <li><a href="contact.php" class="btn-contact">お問い合わせ</a></li>
                </ul>
            </nav>

            <button class="hamburger-btn" id="js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <nav class="mobile-nav" id="js-mobile-nav">
            <ul class="mobile-nav-list">
                <li><a href="index.php">ホーム</a></li>
                <li><a href="philosophy.php">社訓</a></li>
                <li><a href="company.php">会社概要</a></li>
                <li><a href="business.php">事業案内</a></li>
                <li><a href="location.php">所在地</a></li>
                <li><a href="announcement.php">アナウンス</a></li>
                <li><a href="contact.php">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

    <script>
        // 画面の読み込みが終わってから動くようにするおまじない
        document.addEventListener('DOMContentLoaded', function() {
            
            // HTMLの中から「ボタン」と「スマホメニュー」を探して変数に入れる
            const hamburger = document.getElementById('js-hamburger');
            const mobileNav = document.getElementById('js-mobile-nav');

            // 「ボタン」がクリックされた時の動きを設定
            hamburger.addEventListener('click', function() {
                
                // toggle（トグル）：
                // クラス 'is-active' が無ければ付ける、有れば外す
                // これにより CSS が反応して、メニューが開いたり閉じたりします
                hamburger.classList.toggle('is-active'); // ボタンを×印に変形させる
                mobileNav.classList.toggle('is-active'); // メニューを画面外からスライドインさせる
            });
        });
    </script>