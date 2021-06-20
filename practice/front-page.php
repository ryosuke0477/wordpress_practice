<?php get_header(); ?>
<main class="main">
    <section class="main__top">
        <div class="main__top-title">
            <h1>祇園の中心に佇む<br>京の極楽浄土</h1>
        </div>
    </section>
    <section class="main__desc">
        <h2>本館の特徴</h2>
        <div class="main__desc-group">
            <!-- グループ１ -->
            <div class="main__desc-group-area wow animated fadeInLeft">
                <div class="main__desc-group-area-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/image/feature-item01.png" alt="説明画像１">
                </div>
                <div class="main__desc-group-area-content">
                    <h3>京都文化の粋と<br>英国文化の伝統が調和したホテル。</h3>
                    <p>イングランド北方のスコットランドのアーツ＆クラフトと古都エジン バラをテーマにデザインされています。京都とエジンバラは姉妹都市 であるばかりでなく古い街並や伝統的な生活、文化などヨーロッパと
                        アジアの美しい古都として非常に似ています。デザインは共通の工芸 に関わる文化をテーマに構成しています。</p>
                    <button>お部屋の詳細</button>
                </div>
            </div>
            <!-- グループ２ -->
            <div class="main__desc-group-area wow animated fadeInRight">
                <div class="main__desc-group-area-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/image/feature-item02.png" alt="説明画像２">
                </div>
                <div class="main__desc-group-area-content">
                    <h3>京都ならではの季節の味覚をみなさまに。<br>丁寧に作りあげた逸品に舌鼓。</h3>
                    <p>京都の街並みを思わせるような日本料理「風風堂」、英国の伝統ある 邸宅の書斎がモチーフとしたカフェ「ライブラリー」。極楽亭で過ご す時間をもっとラグジュアリーなひとときに。京都ならではの食材を
                        使った料理は、今この時しか味わえない逸品。昼下がりにカフェでの んびりと読書してみるのもおすすめ。</p>
                    <button>コース料理の詳細</button>
                </div>
            </div>
            <!-- グループ３ -->
            <div class="main__desc-group-area wow animated fadeInLeft">
                <div class="main__desc-group-area-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/image/feature-item03.png" alt="説明画像３">
                </div>
                <div class="main__desc-group-area-content">
                    <h3>五感を癒す。<br>天然温泉から美と活力を。</h3>
                    <p>京の極楽の最上階にある「スパ・ゴクラク」。湧き上がる天然温泉の 恵みで細胞内のバランスを整え新陳代謝を向上させてくれます。大い なる自然を感じながらリラックスすれば、身体の奥から元気が蘇って
                        くるでしょう。京都らしい和のテイストを取り入れた五感を癒すペン トハウススパ。心と体のリフレッシュに最適です。</p>
                    <button>温泉の詳細</button>
                </div>
            </div>
        </div>
    </section>
    <section class="main__plan">
        <h2>おすすめプラン</h2>
        <div class="main__plan-list" id="slider">
            <!-- プラン１ -->
            <div class="main__plan-list-block">
                <a href="">
                    <div class="main__plan-list-block-img">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/image/rec-plan01.png" alt="おすすめプラン画像１">
                    </div>
                    <div class="main__plan-list-block-content">
                        <p class="main__plan-list-block-content-title">
                            温泉で湯ったりポカポカプラン＜朝食 選択可＞
                        </p>
                        <p class="main__plan-list-block-content-price">
                            お値段：<span>6000円</span> / 人
                        </p>
                    </div>
                </a>
            </div>
            <!-- プラン２ -->
            <div class="main__plan-list-block">
                <a href="">
                    <div class="main__plan-list-block-img">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/image/rec-plan02.png" alt="おすすめプラン画像2">
                    </div>
                    <div class="main__plan-list-block-content">
                        <p class="main__plan-list-block-content-title">
                            【ケーキセット】選べるケーキお飲物 のセット！
                        </p>
                        <p class="main__plan-list-block-content-price">
                            お値段：<span>2000円</span> / 人
                        </p>
                    </div>
                </a>
            </div>
            <!-- プラン３ -->
            <div class="main__plan-list-block">
                <a href="">
                    <div class="main__plan-list-block-img">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/image/rec-plan03.png" alt="おすすめプラン画像3">
                    </div>
                    <div class="main__plan-list-block-content">
                        <p class="main__plan-list-block-content-title">
                            バータイム「2DRINKSプラン」選べる ドリンク2杯におつまみが付いたプラン
                        </p>
                        <p class="main__plan-list-block-content-price">
                            お値段：<span>8000円</span> / 人
                        </p>
                    </div>
                </a>
            </div>
            <!-- プラン４ -->
            <div class="main__plan-list-block">
                <a href="">
                    <div class="main__plan-list-block-img">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/image/rec-plan04.png" alt="おすすめプラン画像4">
                    </div>
                    <div class="main__plan-list-block-content">
                        <p class="main__plan-list-block-content-title">
                            【リモート宴会プラン】京の極楽から シェフ厳選メニューをご提供！
                        </p>
                        <p class="main__plan-list-block-content-price">
                            お値段：<span>6000円</span> / 人
                        </p>
                    </div>
                </a>
            </div>
            <!-- プラン５ -->
            <div class="main__plan-list-block">
                <a href="">
                    <div class="main__plan-list-block-img">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/image/rec-plan05.png" alt="おすすめプラン画像5">
                    </div>
                    <div class="main__plan-list-block-content">
                        <p class="main__plan-list-block-content-title">
                            【数量限定】季節の会席とミニボトル のドリンク付きプラン
                        </p>
                        <p class="main__plan-list-block-content-price">
                            お値段：<span>8000円</span> / 人
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="main__plan-point">
            <div class="main__plan-point-card">
                <div class="main__plan-point-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/image/service-item01.png" alt="サービスアイテム画像1">
                </div>
                <h3>最低価格保証</h3>
                <p>極楽亭の公式ホームページでのご宿泊料金 は、どの予約サイトよりも最低価格である ことをお約束いたします。</p>
            </div>
            <div class="main__plan-point-card">
                <div class="main__plan-point-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/image/service-item02.png" alt="サービスアイテム画像2">
                </div>
                <h3>全客室Wi-Fi無料</h3>
                <p>ロビー・客室フロアに無線LANアクセスポ イントを設置し、各客室内でもWi-Fi接続 によるインターネットを利用できる環境を 構築しています。</p>
            </div>
            <div class="main__plan-point-card">
                <div class="main__plan-point-card-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/image/service-item03.png" alt="サービスアイテム画像3">
                </div>
                <h3>会員限定料金</h3>
                <p>会員の方は、会員料金でご宿泊いただける ほか、オンラインクーポンなどの限定メニ ューもご利用いただけます。</p>
            </div>
        </div>
    </section>
    <section class="main__blog">
        <h2>ブログ</h2>
        <div class="main__blog-list">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <ul>
                        <li>
                            <p class="main__blog-list-p">
                                <?php $cat = get_the_category();
                                $cat = $cat[0]; {
                                    echo $cat->cat_name;
                                } ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="main__blog-list-a">
                                <?php echo get_the_title(); ?>
                            </a>
                        </li>
                    </ul>
                <?php endwhile; ?>
            <?php else : ?>
                <p>投稿がありません。</p>
            <?php endif; ?>
            <!-- <a href="<?php echo get_category_link(get_cat_ID("お知らせ")); ?>"> -->
            <a href="<?php echo home_url("/posts"); ?>">
                <button>もっと見る</button></a>
        </div>
    </section>
    <section class=" main__question">
        <h2>よくある質問</h2>
        <dl class="main__question-list">
            <dt class="main__question-list-q">Q. チェックイン、チェクアウトの時間は何時ですか？</dt>
            <dd class="main__question-list-a">A. チェックインの時間は15:00～17:00です。もし17:00を過ぎるようでしたら、ご一報を入れていただくよう お願いしております。チェックアウトの時間は翌朝10:00でございます。</dd>
            <dt class="main__question-list-q">Q. 露天風呂がついたお部屋はありますか？</dt>
            <dd class="main__question-list-a--center">A. 露天風呂付のお部屋は全部で24室ございます。</dd>
            <dt class="main__question-list-q">Q. ペットを連れて行きたいのですが可能ですか？</dt>
            <dd class="main__question-list-a">A. ペット同伴のご宿泊はお断りさせて頂いております。お車で5分ほどの場所に、一時預かりを行っているペット ハウスがございますのでそちらのご利用をお願い致します。</dd>
            <dt class="main__question-list-q">Q. キャスター付きのバッグで行っても大丈夫ですか？</dt>
            <dd class="main__question-list-a">A. 全館畳敷きの為、キャスター付きバッグのご利用をご遠慮頂いております。お荷物は、係りの者がお部屋までお 持ち致しますのでご協力をお願い致します。</dd>
        </dl>
    </section>
</main>
<?php get_footer(); ?>