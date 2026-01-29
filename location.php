<?php 
// 共通ヘッダー読み込み
require_once 'header.php'; 
?>

<link rel="stylesheet" href="css/location.css">

<main class="location-main">
    
    <div class="page-header">
        <div class="location-container">
            <h1 class="page-title">所在地</h1>
            <p class="page-subtitle">LOCATION</p>
        </div>
    </div>

    <div class="location-container">

        <?php include 'location/loc_hq.php'; ?>         <?php include 'location/loc_tokyo.php'; ?>      <?php include 'location/loc_osaka.php'; ?>      <?php include 'location/loc_hiroshima.php'; ?>  <?php include 'location/loc_kitakyushu.php'; ?> </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // 全部のボタンを探す
        const buttons = document.querySelectorAll('.accordion-btn');

        buttons.forEach(function(button) {
            button.addEventListener('click', function() {
                // 1. ボタンの見た目（＋－）を切り替え
                this.classList.toggle('active');
                const icon = this.querySelector('.icon');
                if (this.classList.contains('active')) {
                    icon.textContent = '－';
                } else {
                    icon.textContent = '＋';
                }

                // 2. 中身（パネル）の開閉
                const panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null; // 閉じる
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px"; // 開く
                }
            });
        });

        // URLに #tokyo などがある場合、自動で開く処理
        const hash = window.location.hash;
        if (hash) {
            const targetId = hash.substring(1);
            const targetArea = document.getElementById(targetId);
            if (targetArea) {
                const btn = targetArea.querySelector('.accordion-btn');
                if (btn) {
                    setTimeout(function() {
                        btn.click();
                        btn.scrollIntoView({behavior: "smooth", block: "center"});
                    }, 500);
                }
            }
        }
    });
</script>

<?php require_once 'footer.php'; ?>