<?php 
// 共通のヘッダー（上のメニュー部分）を読み込む
require_once 'header.php'; 
?>

<link rel="stylesheet" href="css/home.css">

<main>
    <section class="hero">
        <img src="images/TOP3.webp" alt="トップ画像" fetchpriority="high" decoding="sync">
    </section>

    <section class="stats-bar">
        <div class="home-container">
            <div class="stats-grid">
                
                <div class="stats-item">
                    <div class="stats-label">Founded</div>
                    <div class="stats-number">1931</div>
                    <div class="stats-sub">昭和6年創業</div>
                </div>
                
                <div class="stats-item">
                    <div class="stats-label">Bases</div>
                    <div class="stats-number">5</div>
                    <div class="stats-sub">国内拠点</div>
                </div>
                
                <div class="stats-item">
                    <div class="stats-label">Partners</div>
                    <div class="stats-number">2000+</div>
                    <div class="stats-sub">取引メーカー数</div>
                </div>
                
                <div class="stats-item">
                    <div class="stats-label">Location</div>
                    <div class="stats-number text-lg">OMUTA</div>
                    <div class="stats-sub">本社：福岡県大牟田市
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-section greeting-section">
        <div class="home-container">
            
            <h4>ごあいさつ</h4>
            
            <div class="greeting-grid">
                <div class="greeting-image-wrapper">
                    <img src="images/asaiti.jpg" alt="創業者 阿津坂 浅一" class="greeting-img" loading="lazy">
                </div>
                
                <div class="greeting-content">
                    <h2>信用は、<br>企業の生命なり。</h2>
                    
                    <div class="greeting-text">
                        <p>
                            私たち三池物産は昭和6年に創業、昭和22年に福岡県大牟田市にて設立された会社です。<br>
                            以来、数多くのお客様に産業機械設備を販売して参りました。
                        </p>
                        <p>
                            「信用・信頼」のモットーに、お客様の課題解決に真摯に取り組み、地域産業の発展に貢献することが私たちの使命です。
                        </p>
                        <p>
                            従来と同様に皆様方の暖かいご支援を賜りたく心よりお願い申し上げます。
                        </p>
                        
                        <p>
                            創業者　阿津坂 浅一<br>
                            　　　　明治42年～平成4年<br>
                            　　　　（1909年～1992年）
                        </p>
                    </div>
                </div>
            </div> 
        </div> 
    </section>

    <section class="home-section origin-section">
        <div class="home-container origin-wrapper">
            <h2 class="section-title">社名の由来</h2>
            
            <div class="origin-content">
                <p>
                    　三池物産株式会社の社名は、福岡県大牟田市の旧地名「三池」に由来します。
                </p>
                <p>
                    　「三池」という地名の起こりの定説は「日本書紀」や「風土記」によると、当地の景行天皇行幸の折、巨大な櫪木（くぬぎ）があり、その大樹の影は、朝日が暉けば杵島山（長崎県の多良岳か？）を隠し、夕日が暉けば阿蘇山を覆うと言われた。<br>
                    　景行天皇は、この樹は神樹であると言われ、これを因んでこの地を「御木の国」と名付けられ、それが後に訛って「三毛」になる。律令国家の公式名称は、筑後国三池郡である（延喜式）。
                </p>
                <p>
                    　鎌倉時代の初め、1192年3月に今山嶽（現在の三池山）が一夜大鳴動を起こし、その山頂に三つの池が出現した。<br>
                    　そのため、時の領主三毛師員が朝廷に奏聞して「三毛」を<span class="origin-highlight">「三池」</span>に改めたというのである（南筑明覧）。
                </p>
                <p>
                    　史料上に「三池郡」が始めて現れるのは、室町時代初期の永享2年（1430年）である（富来文書）。<br>
                    　明治4年（1871年）三池藩三池県となる、同年11月久留米、柳河、三池の3県を廃し三潴県となり、後三潴県を経て明治9年（1876年）福岡県に合併。<br>
                    　明治22年（1889年）町制施行で、大牟田町と三池町が出来る。
                </p>
                <p>
                    　明治29年（1896年）郡制施行で三池郡（2町9ヶ村に分かつ）、大牟田町となる。大正6年3月（1917年）市制施行で大牟田町は大牟田市となる。<br>
                    　その後昭和4年（1929年）に三川町を市に編入、昭和16年（1941年）に三池町、銀水村、駛馬町、玉川村を市に編入し、現在の大牟田市勢となる。
                </p>
            </div>
        </div>
    </section>
</main>

<?php 
// 共通のフッター（下の黒い部分）を読み込む
require_once 'footer.php'; 
?>