<?php include 'header.php'; ?>

<link rel="stylesheet" href="location/style.css">

<main>
    <div class="page-header">
        <div class="contact-container">
            <h1 class="page-title">所在地</h1>
            <p class="page-subtitle">LOCATION</p>
        </div>
    </div>
    <div class="container">

        <div class="location-container">
            <div id="hq">
                <?php include 'location/loc_hq.php'; ?>
            </div>

            <div id="tokyo">
                <?php include 'location/loc_tokyo.php'; ?>
            </div>

            <div id="osaka">
                <?php include 'location/loc_osaka.php'; ?>
            </div>

            <div id="hiroshima">
                <?php include 'location/loc_hiroshima.php'; ?>
            </div>

            <div id="kitakyushu">
                <?php include 'location/loc_kitakyushu.php'; ?>
            </div>
            </div>
    </div>
</main>

<script>
    // --- アコーディオンの開閉処理 ---
    
    // 開閉の動きを行う関数（共通化）
    function toggleAccordion(button) {
        // activeクラスの付け外し
        button.classList.toggle("active");

        // パネルとアイコンを取得
        var panel = button.nextElementSibling;
        var icon = button.querySelector(".icon");

        if (panel.style.maxHeight) {
            // --- 閉じる動作 ---
            panel.style.overflow = "hidden"; // 閉じる時ははみ出しを隠す
            panel.style.maxHeight = null;
            if(icon) icon.textContent = "＋";
        } else {
            // --- 開く動作 ---
            panel.style.maxHeight = panel.scrollHeight + "px";
            if(icon) icon.textContent = "－";
            
            // アニメーション(0.3秒)が終わったら、影が見えるようにoverflowをvisibleにする
            setTimeout(function() {
                if (panel.style.maxHeight) {
                    panel.style.overflow = "visible";
                }
            }, 300);
        }
    }

    // ボタンをクリックした時のイベント設定
    var acc = document.getElementsByClassName("accordion");
    for (var i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            toggleAccordion(this);
        });
    }

    // --- ▼▼▼ 修正ポイント2：ページ読み込み時の自動オープン処理 ▼▼▼ ---
    window.addEventListener('load', function() {
        // URLについている「#tokyo」などを取得
        var hash = window.location.hash; 
        
        if (hash) {
            // #をとってID名にする (例: #tokyo -> tokyo)
            var targetId = hash.substring(1);
            var targetDiv = document.getElementById(targetId);

            // ターゲットが存在すれば
            if (targetDiv) {
                // そのエリアの中にあるボタンを探す
                var button = targetDiv.querySelector('.accordion');
                
                if (button) {
                    // 少し待ってから開く（画面描画との兼ね合いのため）
                    setTimeout(function() {
                        // まだ開いていなければ開く
                        if (!button.classList.contains('active')) {
                            toggleAccordion(button);
                        }
                        // ちょうどいい位置（ボタンが画面中央に来る位置）にスクロール
                        button.scrollIntoView({behavior: "smooth", block: "center"});
                    }, 300);
                }
            }
        }
    });
</script>

<?php include 'footer.php'; ?>