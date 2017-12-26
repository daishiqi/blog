<?php
use kartik\markdown\MarkdownEditor;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="google-site-verification" content="-zz_UiN3Z6szo1tjCMg8H66_XeAH2-dL2KLimiLJ0Ak" />
    <meta name="author" content="Oliver Wang" />
    <meta name="keywords" content="博客,技术" />
    <meta name="description" conauthortent="这是我的博客。会记录平时遇到的技术问题~" />
    <link rel="alternative" href="" title="" type="application/atom+xml">
    <link rel="icon" href="">
    <title>直播写代码要去那个平台呢? - I am Oliver</title>
    <link rel="stylesheet" href="<?php echo Yii::$app->assetsUrl->scriptUrl;?>/frontend/css/main.css" />
    <link rel="stylesheet" href="<?php echo Yii::$app->assetsUrl->scriptUrl;?>/frontend/js/fancybox/jquery.fancybox.min.css" />
    <!--[if lt IE 9]><script>(function(a,b){a="abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video".split(" ");for(b=a.length-1;b>=0;b--)document.createElement(a[b])})()</script><![endif]-->
    <script src="<?php echo Yii::$app->assetsUrl->scriptUrl;?>/frontend/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo Yii::$app->assetsUrl->scriptUrl;?>/frontend/js/fancybox/jquery.fancybox.min.js"></script>
</head>
<body style="opacity:0">
<header class="head">
    <h1 class="head-title u-fl"><a href="#">DAISY</a></h1>
    <nav class="head-nav u-fr">
        <ul class="head-nav__list">
            <li class="head-nav__item"><a class="head-nav__link" href="/article-list/index">LIST</a></li>
        </ul>
    </nav>
</header>
<main class="main">
    <article class="post">
        <header class="post__head">
            <time class="post__time" datetime="<?php echo date('Y-m-d H:i:s',$data['create_time']);?>">June 1, 2017</time>
            <h1 class="post__title"><a href="#"><?php echo $data['title']?></a></h1>
            <div class="post__main echo">
                <?php echo MarkdownEditor::widget([
                    'name' => 'markdown',
                    'value' => $data['content'],
                ]);?>
            </div>
        </header>
        <!--<footer class="post__foot u-cf">
            <ul class="post__tag u-fl">
                <li class="post__tag__item"><a class="post__tag__link" href="/tags/直播/">直播</a></li>
                <li class="post__tag__item"><a class="post__tag__link" href="/tags/直播写代码/">直播写代码</a></li>
            </ul>
        </footer>-->
    </article>
    <section class="reward">
        <a class="btn-reward" href="#">打赏</a>
        <div class="reward-wrapper clearfix">
            <img src="<?php echo Yii::$app->assetsUrl->scriptUrl;?>/frontend/img/pay.jpg" title="微信" />
        </div>
    </section>
    <div class="comments" id="lv-container" data-id="city" data-uid="MTAyMC8yOTI0Ni81ODEz">
        <script>!function(e,t){var n,c=e.getElementsByTagName(t)[0];"function"!=typeof LivereTower&&(n=e.createElement(t),n.src="https://cdn-city.livere.com/js/embed.dist.js",n.async=!0,c.parentNode.insertBefore(n,c))}(document,"script")</script>
    </div>
</main>
<footer class="foot">
    <div class="foot-copy">
        &copy; 2016-2017 Oliver Wang
        <a href="" target="view_window" style="color:#fff">（鲁ICP备16006255号-1）</a>
    </div>
</footer>
<script>!function(e,t,a,n,c,o){e.GoogleAnalyticsObject=n,e[n]||(e[n]=function(){(e[n].q=e[n].q||[]).push(arguments)}),e[n].l=+new Date,c=t.createElement(a),o=t.getElementsByTagName(a)[0],c.src="//www.google-analytics.com/analytics.js",o.parentNode.insertBefore(c,o)}(window,document,"script","ga"),ga("create","UA-73840162-1"),ga("send","pageview")</script>
<script src="<?php echo Yii::$app->assetsUrl->scriptUrl;?>/frontend/js/scroller.js"></script>
<script src="<?php echo Yii::$app->assetsUrl->scriptUrl;?>/frontend/js/main.js"></script>
</body>
</html>