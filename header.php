<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>三池物産株式会社</title>
    <link rel="stylesheet" href="css/base.css">
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
        document.addEventListener('DOMContentLoaded', function() {
            const hamburger = document.getElementById('js-hamburger');
            const mobileNav = document.getElementById('js-mobile-nav');

            hamburger.addEventListener('click', function() {
                // ボタンとメニューに 'is-active' クラスを付け外しする
                hamburger.classList.toggle('is-active');
                mobileNav.classList.toggle('is-active');
            });
        });
    </script>