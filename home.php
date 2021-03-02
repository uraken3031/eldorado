<?php get_header(); ?>

<div class="open-shutter"></div>

<div class="container1">
            <article <?php post_class( 'article-content' ); ?>>
                        <!-- TOP -->
                        <div class="top">
                            <img id="top-Img">
                        </div>
                        <!-- Concept -->
                        <section>
                          <div class="greeting">
                            
                            <div class="greeting-img">
                                <figure>
                                  <img src="https://eldorado-salon.com/wp-content/uploads/2020/05/greeting-img.jpg" alt="" id="greeting-img1">
                                </figure>
                            </div>

                            <div class="greeting-text">
                                <h2 id="greeting-h2">Concept</h2>
                                <h3 id="greeting-h3">リラックス空間で、<br>理想の髪型を。</h3>                                
                                <p id="greeting-p">エルドラードは、スペイン語で「黄金の国」を意味します。<br>
                                  美容室にご来店した方が、<br>「黄金や金のように輝く人生を送ってほしい」という想いから
                                  <br>店名を名付けました。<br>
                                  あなたの理想の髪型を手に入れる、お手伝いをさせていただきます。<br>
                                  店内はマンツーマン＆完全プライベートのあるため、ゆっくりお過ごし頂けます。お気軽にご来店ください。
                                </p>
                                
            
                            </div>

                          </div>
                        </section>
                        <!-- SERVICE -->
                        <h2 id="head2">Services</h2>
                        <div class="service-1">
                            <div id="grid1">
                              <h3>Cut</h3>
                              <p>骨格を判断しながらカットするため、 <br>髪へのダメージを抑えることができます。</p>
                              <div id="img1"></div>
                            </div>
                            <div id="grid2">
                              <h3>Color</h3>
                              <p>グレーカラーからファッショナブルなカラーまで、 <br>お好きなカラーに染めることができます。</p>
                              <div id="img2"></div>
                            </div>
                            <div id="grid3">
                              <h3>Perm</h3>
                              <p>セット感覚になるデジタルパーマ、<br>髪にタンパク質を入れるケラチンパーマを中心にご対応します！</p>
                              <div id="img3"></div>
                            </div>
                            <div id="grid4">
                              <h3>Hair Straightening</h3>
                              <p>超音波ストレート、<br>通常のストレートをご利用いただけます。</p>
                              <div id="img4"></div>
                            </div>
                            <div id="grid5">
                              <h3>The others</h3>
                              <p>頭皮までスッキリできるヘッドスパ、<br>出張カットなどを対応しています</p>
                              <div id="img5"></div>
                            </div>
                        </div>
                        <!-- SERVICE2 -->
                        <section>
                          <h2 id="access-h2">Access</h2>
                          <div id="service-2">
                            <h3 id="access-h3">エルドラード美容室</h3>
                            <ul id="access-lists">
                              <li>〒659-0013　兵庫県芦屋市岩園町23-45-102</li>
                              <li>・最寄駅：JR芦屋駅北口より徒歩12分／阪急神戸本線芦屋川駅徒歩12分／<br>バスでお越しの際はJR芦屋駅より2番乗場のバスにご乗車頂き、「水道橋」にて下車ください。目の前にお店がございます。</li>
                              <li>・営業時間：9:30～19:00 <br>※カット最終受付18:30</li>
                              <li>・定休日　毎週月曜日　第3火曜日</li>
                              <li>お電話のご予約はこちら<span><a href="tel:0797316181" id="call">0797-31-6181</a></span></li>
                            </ul>
                            <div id="service-button">
                              <a href="https://eldorado-salon.com/form/">WEBのご予約はこちら</a>
                            </div>
                            <figure>
                              <img src="https://eldorado-salon.com/wp-content/uploads/2020/05/access-img.jpg" alt="" width="650px" height="350px">
                            </figure>
                          </div>
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3278.535391073094!2d135.308876714964!3d34.74210378850774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000f3268a0f4d1d%3A0x417467aa86b6e42b!2z44CSNjU5LTAwMTMg5YW15bqr55yM6Iqm5bGL5biC5bKp5ZyS55S677yS77yT4oiS77yU77yV!5e0!3m2!1sja!2sjp!4v1588567843075!5m2!1sja!2sjp" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </section>
              </article>
              </div><!--end contents-->
        </div><!--end container-->

<div class="container">
  <h2 id="head2-2">Hair column</h2>
  <?php if ( !is_paged()): ?>
  <div class="home-top">
    <?php if(have_posts()): the_post(); ?>
      <article <?php post_class( 'article-list article-top' ); ?>>
        <a href="<?php the_permalink(); ?>">
          <div class="img-wrap">
          <!--画像を追加-->
          <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail('medium'); ?>
          <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/no-image.jpg" alt="no-img"/>
          <?php endif; ?>
          <!--カテゴリ-->
          <?php if (!is_category() && has_category()): ?>
            <span class="cat-data">
            <?php $postcat=get_the_category(); echo $postcat[0]->name; ?>
            </span>
          <?php endif; ?>
          </div><!--end img-warp-->
          <div class="text">
            <!-- <span class="new-post">NEW POST</span> -->
            <!--タイトル-->
            <h2><?php the_title(); ?></h2>
            <!--投稿日を表示-->
            <span class="article-date">
              <!-- <i class="far fa-clock"></i> -->
              <time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
                <?php echo get_the_date(); ?>
              </time>
            </span>
            <!-- <span class="article-author">
              <i class="fas fa-user"></i><?//php the_author(); ?>
            </span> -->
            <!--抜粋-->
            <?php the_excerpt(); ?>
          </div><!--end text-->
        </a>
      </article>
    <?php endif; ?>
  </div><!--end home-top;-->
  <?php endif;?>

  <div class="contents">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php get_template_part('loop-content'); ?>
    <?php endwhile; endif; ?><!--ループ終了-->

    <div class="pagination">
    <?php echo paginate_links( array(
      'type' => 'list',
      'mid_size' => '1',
      'prev_text' => '<i class="fas fa-angle-left"></i>',
      'next_text' => '<i class="fas fa-angle-right"></i>'
      ) ); ?>
    </div>


  </div><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
