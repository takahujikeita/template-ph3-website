<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ph1 POSSE課題</title>
    <!-- <link rel="stylesheet" href="./assets/css/reset.css" /> -->
    <!-- <link rel="stylesheet" href="./assets/css/style.css" /> -->
    <link rel="stylesheet" href="./assets/css/sp/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="./assets/css/splide.min.css" /> -->
    <!-- <script src="./assets/js/splide.min.js" defer></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js" defer></script>
</head>

<x-app-layout>

    <body>
        <header class="header is-transparent" id="js-header">
            <a href="./" class="header-logo">
                <img src="./assets/img/logo.svg" alt="POSSE" />
            </a>
            <button class="header-button" id="js-headerButton" onclick="$hello1()">
                <span class="header-buttonLine"></span>
                <span class="header-buttonLine"></span>
                <span class="header-buttonLine"></span>
            </button>
            <nav class="header-nav">
                <ul class="header-navList">
                    <li class="header-navItem">
                        <a href="#about" class="header-navLink">POSSEとは</a>
                    </li>
                    <li class="header-navItem">
                        <a href="#event" class="header-navLink">イベント</a>
                    </li>
                    <li class="header-navItem">
                        <a href="#daily" class="header-navLink">日常生活</a>
                    </li>
                </ul>

                <ul class="header-info">
                    <li>
                        <a href="https://line.me/R/ti/p/@651htnqp?from=page" class="line-button header-lineLink" target="_blank" rel="noopener noreferrer">
                            LINE追加
                        </a>
                    </li>

                    <li class="header-formal">
                        <a href="#" class="header-corporateLink" target="_blank" rel="noopener noreferrer">
                            POSSE 公式サイト
                        </a>
                    </li>
                </ul>

                <ul class="header-snsList">
                    <li class="header-snsItem">
                        <a href="https://twitter.com/posse_2023" class="header-snsLink" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/img/icon-twitter.png" alt="Twitter" width="40" height="40" />
                        </a>
                    </li>
                    <li class="header-snsItem">
                        <a href="https://www.instagram.com/posse_programming/" class="header-snsLink" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/img/icon-instagram.png" alt="instagram" width="40" height="40" />
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <main>
            <section class="mainvisual" id="js-mainVisual">
                <div class="mainvisual-inner">
                    <div class="mainvisual-head">
                        <h1 class="mainvisual-title">
                            学生プログラミングコミュニティ POSSE（ポッセ）
                        </h1>
                        <p class="mainvisual-lead">自分史上最高の仲間と。</p>
                    </div>
                </div>
                <div class="mainvisual-scroll">SCROLL DOWN</div>
            </section>

            <div class="wrapper">
                <section id="about" class="section">
                    <div class="section-head">
                        <h2 class="title">
                            <span class="title-ja">POSSEとは</span>
                            <span class="title-en">About POSSE</span>
                        </h2>
                    </div>
                    <div class="section-body">
                        <div class="container">
                            <div class="about-column">
                                <figure class="about-image">
                                    <img src="./assets/img/img-about.jpg" alt="" />
                                </figure>
                                <div class="about-text">
                                    <p>
                                        学生プログラミングコミュニティ「POSSE（ポッセ）」は、人格とプログラミング、二つの面での成長をスローガンに活動しており、大学生だけが集まって学びを深めるコミュニティです。プログラミングだけではありません。オフラインイベントでのイベントや、旅行などの様々な企画を行っています！それらを通じて、夏休みの大半をPOSSEで出来た仲間と過ごす人もたくさんいるほどメンバーとの仲が深まります。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="event" class="section">
                    <div class="section-head">
                        <hr class="event-hr" size="1px" />
                        <h2 class="title">
                            <span class="title-ja">イベント</span>
                            <span class="title-en">Event</span>
                        </h2>
                    </div>
                    <div class="about-text">
                        <p>
                            POSSE
                            では、年内に数多くのイベントを行っています。こちらに掲示してあるのはイベントの一部です。<br />プログラミングだけでなく、これらのイベントを共に経験し、仲間との友情はより深まります。
                        </p>
                    </div>

                    <div class="section-body">
                        <div id="js-eventSlide" class="event-slide splide">
                            <div class="splide__track event-slideTrack">
                                <ul class="splide__list">
                                    <li class="splide__slide event-item">
                                        <figure class="event-itemImage">
                                            <img src="./assets/img/img-event01.jpg" alt="" />
                                        </figure>
                                        <div class="event-itemBody">
                                            <p class="event-itemDate">
                                                <time datetime="2021-04">2021.April</time>
                                            </p>
                                            <p class="event-itemName">入学式</p>
                                        </div>
                                    </li>
                                    <li class="splide__slide event-item">
                                        <figure class="event-itemImage">
                                            <img src="./assets/img/img-event02.jpg" alt="" />
                                        </figure>
                                        <div class="event-itemBody">
                                            <p class="event-itemDate">
                                                <time datetime="2021-03">2021.Mar</time>
                                            </p>
                                            <p class="event-itemName">
                                                軽井沢旅行
                                            </p>
                                        </div>
                                    </li>
                                    <li class="splide__slide event-item">
                                        <figure class="event-itemImage">
                                            <img src="./assets/img/img-event03.jpg" alt="" />
                                        </figure>
                                        <div class="event-itemBody">
                                            <p class="event-itemDate">
                                                <time datetime="2021-04">2021.April</time>
                                            </p>
                                            <p class="event-itemName">
                                                オープン講演会
                                            </p>
                                        </div>
                                    </li>
                                    <li class="event-item splide__slide">
                                        <figure class="event-itemImage">
                                            <img src="./assets/img/img-event04.jpg" alt="" />
                                        </figure>
                                        <div class="event-itemBody">
                                            <p class="event-itemDate">
                                                <time datetime="2021-04">2021.April</time>
                                                <time datetime="2021-06">June</time>
                                            </p>
                                            <p class="event-itemName">
                                                チーム開発
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <section id="daily" class="section">
                <div class="section-head">
                    <h2 class="title">
                        <span class="title-ja">日常生活</span>
                        <span class="title-en">Daily Record</span>
                    </h2>
                </div>
                <div class="about-text">
                    <p>
                        様々な日々の活動について紹介します。
                        <br />POSSEでは、プログラミングを学んでいくにあたってメンバー同士が共に学習するような時間を数多く設けています。
                        <br />入会時期が半年毎にあるため、縦の繋がりから学べることは非常に多く、この繋がりを意識した班を構成したり、
                        <br />それとは別に同期のみの班を構成して共に学習するようなシステムを採用しています。
                    </p>
                </div>

                <div class="section-body">
                    <div class="container">
                        <div id="js-dailySlide" class="daily-slide splide">
                            <div class="splide__track">
                                <ul class="daily-list splide__list">
                                    <li class="daily-item splide__slide">
                                        <figure class="daily-img">
                                            <img src="./assets/img/img-daily01.jpg" alt="" />
                                        </figure>
                                        <div class="daily-body">
                                            <h2>
                                                <span class="daily-titlenumber">01</span>
                                                <span class="daily-title">ミートアップ</span>
                                            </h2>
                                            <ul class="daily-outline">
                                                <li class="daily-outline-item">
                                                    毎週月曜日 19:30～22:30
                                                </li>
                                                <li class="daily-outline-item">
                                                    全員参加
                                                </li>
                                            </ul>
                                            <div class="daily-descripsion">
                                                <p>
                                                    全体ミーティングです。
                                                    <br />各局からのお知らせや、講演会など目白押しです。
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="daily-item splide__slide">
                                        <figure class="daily-img">
                                            <img src="./assets/img/img-daily02.jpg" alt="" />
                                        </figure>
                                        <div class="daily-body">
                                            <h2>
                                                <span class="daily-titlenumber">02</span>
                                                <span class="daily-title">縦もく</span>
                                            </h2>
                                            <ul class="daily-outline">
                                                <li class="daily-outline-item">
                                                    週1回 2時間
                                                </li>
                                            </ul>
                                            <div class="daily-descripsion">
                                                <p>
                                                    期生関係なくzoomを繋ぎ、わからないところを先輩に質問できます
                                                    わかるまで丁寧に教えてくれます。
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="daily-item splide__slide">
                                        <figure class="daily-img">
                                            <img src="./assets/img/img-daily03.jpg" alt="" />
                                        </figure>
                                        <div class="daily-body">
                                            <h2 class="daily-title">
                                                <span class="daily-titlenumber">03</span>
                                                <span>横もく</span>
                                            </h2>
                                            <ul class="daily-outline">
                                                <li class="daily-outline-item">
                                                    週1回 3時間
                                                </li>
                                            </ul>
                                            <div class="daily-descripsion">
                                                <p>
                                                    同期と3～4人一組で学習しながら、わからないところを共有、質問できます。オフラインで集合したり、共にハッカソンに挑んだりします。
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="daily-item splide__slide">
                                        <figure class="daily-img">
                                            <img src="./assets/img/img-daily04.jpg" alt="" />
                                        </figure>
                                        <div class="daily-body">
                                            <h2>
                                                <span class="daily-titlenumber">04</span>
                                                <span class="daily-title">スぺもく</span>
                                            </h2>
                                            <ul class="daily-outline">
                                                <li class="daily-outline-item">
                                                    週1回 1時間
                                                </li>
                                                <li class="daily-outline-item">
                                                    自由参加
                                                </li>
                                            </ul>
                                            <div class="daily-descripsion">
                                                <p>
                                                    メンターさんからのアドバイスを受けることができます。
                                                    <br />毎回得る知識が多く、とてもありがたい機会です。
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="daily-item splide__slide">
                                        <figure class="daily-img">
                                            <img src="./assets/img/img-daily05.jpg" alt="" />
                                        </figure>
                                        <div class="daily-body">
                                            <h2>
                                                <span class="daily-titlenumber">05</span>
                                                <span class="daily-title">飯もく</span>
                                            </h2>
                                            <ul class="daily-outline">
                                                <li class="daily-outline-item">
                                                    不定期 3時間
                                                </li>
                                                <li class="daily-outline-item">
                                                    全員参加
                                                </li>
                                            </ul>
                                            <div class="daily-descripsion">
                                                <p>
                                                    ご飯を食べながら作業をします。表参道の美味しいお店をたくさん発見できることが楽しいです！
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <section class="line">
            <h2 class="line-title">
                <img src="./assets/img/icon-line.svg" alt="" width="40" height="40" />
                POSSE 公式 LINE
            </h2>
            <div class="line-description">
                <p>
                    公式 LINE にてご質問を随時受け付けております。 <br />詳細や
                    POSSE 最新情報につきましては、公式 LINE
                    にてお知らせ致しますので
                    <br />下記ボタンより友達追加をお願いします！
                </p>
            </div>
            <div class="line-url">
                <a href="https://line.me/R/ti/p/@651htnqp?from=page" class="line-button" target="_blank" rel="noopener noreferrer">LINE追加
                    <svg class="line-icon" fill="none" height="15" viewBox="0 0 14 15" width="14" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <clipPath id="a">
                            <path d="m0 .693604h14v14h-14z" />
                        </clipPath>
                        <g clip-path="url(#a)" stroke="#0071bc" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m12.5416 8.27698v5.05752c0 .5891-.4783 1.0675-1.0675 1.0675h-10.11497c-.589171 0-1.067504-.4784-1.067504-1.0675v-10.11502c0-.58917.478333-1.0675 1.067504-1.0675h5.0575" />
                            <path d="m10.2084.985229h3.5" />
                            <path d="m13.7084 4.48523v-3.500001" />
                            <path d="m7.29163 7.4019 6.41667-6.416671" />
                        </g>
                    </svg>
                </a>
            </div>
        </section>

        <footer class="footer">
            <div class="footer-inner">
                <a href="./" class="footer-logo">
                    <img src="./assets/img/logo.svg" alt="POSSE" width="202" height="39" />
                </a>
                <a href="https://posse-ap.com/" class="footer-corporateLink" target="_blank" rel="noopener noreferrer">POSSE 公式サイト</a>
                <ul class="footer-snsList">
                    <li class="footer-snsItem">
                        <a href="https://twitter.com/posse_2023" class="footer-snsLink" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/img/icon-twitter.png" alt="Twitter" width="40" height="40" />
                        </a>
                    </li>
                    <li class="footer-snsItem">
                        <a href="https://www.instagram.com/posse_programming/" class="footer-snsLink" target="_blank" rel="noopener noreferrer">
                            <img src="./assets/img/icon-instagram.png" alt="instagram" width="40" height="40" />
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer-copyright">
                <small lang="en">&copy; 2023 POSSE</small>
            </div>
        </footer>

        <script src="./assets/js/script.js" defer></script>
    </body>
</x-app-layout>

</html>


<style>
    /*! destyle.css v4.0.0 | MIT License | https://github.com/nicolas-cusan/destyle.css */

    /* Reset box-model and set borders */
    /* ============================================ */

    *,
    ::before,
    ::after {
        box-sizing: border-box;
        border-style: solid;
        border-width: 0;
    }

    /* Document */
    /* ============================================ */

    /**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 * 3. Remove gray overlay on links for iOS.
 */

    html {
        line-height: 1.15;
        /* 1 */
        -webkit-text-size-adjust: 100%;
        /* 2 */
        -webkit-tap-highlight-color: transparent;
        /* 3*/
    }

    /* Sections */
    /* ============================================ */

    /**
 * Remove the margin in all browsers.
 */

    body {
        margin: 0;
    }

    /**
 * Render the `main` element consistently in IE.
 */

    main {
        display: block;
    }

    /* Vertical rhythm */
    /* ============================================ */

    p,
    table,
    blockquote,
    address,
    pre,
    iframe,
    form,
    figure,
    dl {
        margin: 0;
    }

    /* Headings */
    /* ============================================ */

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit;
        margin: 0;
    }

    /* Lists (enumeration) */
    /* ============================================ */

    ul,
    ol {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    /* Lists (definition) */
    /* ============================================ */

    dt {
        font-weight: bold;
    }

    dd {
        margin-left: 0;
    }

    /* Grouping content */
    /* ============================================ */

    /**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

    hr {
        box-sizing: content-box;
        /* 1 */
        height: 0;
        /* 1 */
        overflow: visible;
        /* 2 */
        border-top-width: 1px;
        margin: 0;
        clear: both;
        color: inherit;
    }

    /**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

    pre {
        font-family: monospace, monospace;
        /* 1 */
        font-size: inherit;
        /* 2 */
    }

    address {
        font-style: inherit;
    }

    /* Text-level semantics */
    /* ============================================ */

    /**
 * Remove the gray background on active links in IE 10.
 */

    a {
        background-color: transparent;
        text-decoration: none;
        color: inherit;
    }

    /**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

    abbr[title] {
        text-decoration: underline dotted;
        /* 2 */
    }

    /**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

    b,
    strong {
        font-weight: bolder;
    }

    /**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

    code,
    kbd,
    samp {
        font-family: monospace, monospace;
        /* 1 */
        font-size: inherit;
        /* 2 */
    }

    /**
 * Add the correct font size in all browsers.
 */

    small {
        font-size: 80%;
    }

    /**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }

    sub {
        bottom: -0.25em;
    }

    sup {
        top: -0.5em;
    }

    /* Replaced content */
    /* ============================================ */

    /**
 * Prevent vertical alignment issues.
 */

    svg,
    img,
    embed,
    object,
    iframe {
        vertical-align: bottom;
    }

    /* Forms */
    /* ============================================ */

    /**
 * Reset form fields to make them styleable.
 * 1. Make form elements stylable across systems iOS especially.
 * 2. Inherit text-transform from parent.
 */

    button,
    input,
    optgroup,
    select,
    textarea {
        -webkit-appearance: none;
        /* 1 */
        appearance: none;
        vertical-align: middle;
        color: inherit;
        font: inherit;
        background: transparent;
        padding: 0;
        margin: 0;
        border-radius: 0;
        text-align: inherit;
        text-transform: inherit;
        /* 2 */
    }

    /**
 * Correct cursors for clickable elements.
 */

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        cursor: pointer;
    }

    button:disabled,
    [type="button"]:disabled,
    [type="reset"]:disabled,
    [type="submit"]:disabled {
        cursor: default;
    }

    /**
 * Improve outlines for Firefox and unify style with input elements & buttons.
 */

    :-moz-focusring {
        outline: auto;
    }

    select:disabled {
        opacity: inherit;
    }

    /**
 * Remove padding
 */

    option {
        padding: 0;
    }

    /**
 * Reset to invisible
 */

    fieldset {
        margin: 0;
        padding: 0;
        min-width: 0;
    }

    legend {
        padding: 0;
    }

    /**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

    progress {
        vertical-align: baseline;
    }

    /**
 * Remove the default vertical scrollbar in IE 10+.
 */

    textarea {
        overflow: auto;
    }

    /**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
        height: auto;
    }

    /**
 * Correct the outline style in Safari.
 */

    [type="search"] {
        outline-offset: -2px;
        /* 1 */
    }

    /**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

    [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    /**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Fix font inheritance.
 */

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        /* 1 */
        font: inherit;
        /* 2 */
    }

    /**
 * Fix appearance for Firefox
 */
    [type="number"] {
        -moz-appearance: textfield;
    }

    /**
 * Clickable labels
 */

    label[for] {
        cursor: pointer;
    }

    /* Interactive */
    /* ============================================ */

    /*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

    details {
        display: block;
    }

    /*
 * Add the correct display in all browsers.
 */

    summary {
        display: list-item;
    }

    /*
 * Remove outline for editable content.
 */

    [contenteditable]:focus {
        outline: auto;
    }

    /* Tables */
    /* ============================================ */

    /**
1. Correct table border color inheritance in all Chrome and Safari.
*/

    table {
        border-color: inherit;
        /* 1 */
        border-collapse: collapse;
    }

    caption {
        text-align: left;
    }

    td,
    th {
        vertical-align: top;
        padding: 0;
    }

    th {
        text-align: left;
        font-weight: bold;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    /**
* File Name : style.css
* Description : POSSE課題
*
* ---- Table of Contents ----
*
* 1.0 - Common
*    1.1 - カスタムプロパティ
*    1.2 - ベーススタイル
*    1.3 - 汎用スタイル
*
* 2.0 - Sections
*    2.1 - ヘッダー
*    2.2 - フッター
*    2.3 - メインビジュアル
*    2.4 - POSSEとは
*    2.5 - イベント
*    2.6 - 日常生活
*    2.7 - 公式LINE
*
* 3.0 - Animation, JavaScript Object
*    3.1 - フェードイン
*    3.2 - スライダー
*
*/

    /* 1.0 - Common */
    /* ============================================ */

    /**
 * 1.1 - カスタムプロパティ
 *
 * https://developer.mozilla.org/ja/docs/Web/CSS/Using_CSS_custom_properties
 */
    :root {
        --dark-color: #333333;
        --white-color: #FFFFFF;
        --primary-color: #0071BC;
        --primary-light-color: #F7F9FB;
        --gray-color: #ADADAD;
        --gray-light-color: #EEEEEE;
        --gray-dark-color: #666666;
        --twitter-color: #1D9BF0;
    }

    /**
 * 1.2 - ベーススタイル
 */

    html {
        scroll-behavior: smooth;
    }

    body {
        color: var(--dark-color);
        font-family: "Noto Sans JP", sans-serif;
    }

    div {
        text-align: center;
    }

    /**
 * 1.3 - 汎用スタイル
 */

    .wrapper {
        padding: 80px 0 160px;
        display: flex;
        flex-direction: column;
        gap: 120px;
    }

    .container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 24px;
        box-sizing: content-box;
    }

    .section {
        padding-top: 80px;
        margin-top: -80px;
    }

    .section-body {
        margin-top: 40px;
    }

    .title {
        text-align: center;
    }

    .title-ja {
        font-size: 36px;
        line-height: 1.5;
        letter-spacing: .05em;
        display: block;
        font-weight: bold;
    }

    .title-en {
        font-weight: bold;
        display: block;
        font-size: 14px;
        line-height: 1.5;
        letter-spacing: .1em;
        margin-top: 8px;
        color: var(--primary-color);
        font-family: 'Plus Jakarta Sans', sans-serif
    }

    .about-column {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        align-items: center;
    }

    .about-image {
        border-radius: 10px;
        overflow: hidden;
        max-width: 100%;
        height: auto;
    }

    .about-text {
        font-size: 14px;
        line-height: 1.8;
        letter-spacing: .05em;
        margin-top: 40px;
    }

    /* 2.0 - Sections */
    /* ============================================ */

    /**
 * 2.1 - ヘッダー
 */
    .header {
        display: flex;
        align-items: center;
        height: 80px;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: var(--white-color);
        border-bottom: solid 1px var(--gray-light-color);
        padding: 0 24px;
        z-index: 10000;
        transition: background-color .3s linear;
    }

    .header-nav {
        display: flex;
        align-items: center;
        margin-left: auto;
        gap: 48px;
    }

    .header-navList {
        display: flex;
        gap: 32px;
    }

    .header-navLink {
        color: var(--primary-color);
        font-weight: bold;
        font-size: 14px;
    }

    .header-snsList {
        display: flex;
        gap: 24px;
    }

    .header-info {
        display: none;
    }

    .header.is-transparent {
        background-color: transparent;
        border: none;
    }

    .header.is-transparent:not(.is-open) .header-logo {
        filter: brightness(10);
    }

    .header.is-transparent:not(.is-open) .header-navLink {
        color: #FFFFFF;
    }

    .header.is-transparent:not(.is-open) .header-snsLink {
        filter: brightness(10);
    }

    /**
 * 2.2 - フッター
 */
    .footer {
        padding-top: 40px;
        text-align: center;
    }

    .footer-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 24px;
    }

    .footer-logo {
        width: 200px;
    }

    .footer-corporateLink {
        color: var(--gray-dark-color);
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 4px;

    }

    .footer-corporateLink::after {
        content: '';
        display: block;
        width: 14px;
        height: 14px;
        background: url(../img/icon-external-link.svg) center center / contain no-repeat;
    }

    .footer-snsList {
        display: flex;
        gap: 24px;
    }

    .footer-copyright {
        text-align: center;
        margin-top: 24px;
        border-top: solid 1px var(--gray-light-color);
        color: var(--gray-color);
        font-size: 10px;
        padding: 24px;
        font-family: 'Plus Jakarta Sans', sans-serif
    }


    /**
 * 2.3 - メインビジュアル
 */
    .mainvisual {
        background: url(../img/bg-mainvisual.jpg) center center / cover no-repeat;
        height: 100vh;
        padding: 40px 24px;
        display: flex;
        align-items: flex-end;
    }

    .mainvisual-inner {
        max-width: 980px;
        width: 100%;
        margin: 0 auto;
    }

    .mainvisual-head {
        display: flex;
        flex-direction: column;
        gap: 12px;
        align-items: flex-start;
    }

    .mainvisual-title {
        background-color: var(--white-color);
        color: var(--primary-color);
        font-weight: bold;
        line-height: 1.8;
        letter-spacing: .05em;
        font-size: 24px;
        padding-left: 20px;
        padding-right: 4px;
    }

    .mainvisual-lead {
        background-color: var(--white-color);
        font-weight: bold;
        line-height: 1.8;
        letter-spacing: .05em;
        font-size: 60px;
        padding-left: 20px;
    }

    .mainvisual-scroll {
        position: absolute;
        right: 24px;
        bottom: 24px;
        color: var(--white-color);
        font-size: 14px;
        letter-spacing: .1em;
        font-weight: bold;
        display: flex;
        gap: 4px;
        align-items: center;
        text-shadow: 0 0 10px rgba(51, 51, 51, .25);
        font-family: 'Plus Jakarta Sans', sans-serif
    }

    .mainvisual-scroll::before {
        content: '';
        display: block;
        width: 8px;
        height: 8px;
        background-color: var(--white-color);
        border-radius: 100%;
        box-shadow: 0 0 10px rgba(51, 51, 51, .25);
    }

    /**
 * 2.4 - POSSEとは
 */

    /**
 * 2.5 - イベント
 */
    .event-slide {
        overflow: auto;
    }

    .event-list {
        display: flex;
        justify-content: center;
        gap: 40px;
    }

    .event-item {
        border-radius: 10px;
        overflow: hidden;
        width: 200px;
        flex-shrink: 0;
        background-color: var(--primary-light-color);
        text-align: center;
    }

    .event-itemImage img {
        width: 100%;
        height: 200px;
    }

    .event-itemBody {
        padding: 20px;
    }

    .event-itemDate {
        font-size: 14px;
        line-height: 1.8;
        letter-spacing: 0.1em;
        background-color: var(--primary-color);
        color: var(--white-color);
        padding: 0 12px;
        border-radius: 5em;
        display: inline-block;
        font-family: 'Plus Jakarta Sans', sans-serif
    }

    .event-itemName {
        margin-top: 4px;
        font-size: 18px;
        line-height: 1.8;
        letter-spacing: 0.1em;
        font-weight: bold;
    }


    .event-hr {
        margin: 0px 100px 15px 100px;
        max-width: 80%;
    }

    /**
 * 2.6 - 日常生活
 */

    .daily-list {
        padding-top: 40px;
        display: flex;
        flex-direction: row;
        gap: 120px;
    }

    .daily-item {
        display: flex;
        background-color: var(--gray-light-color);
        border-radius: 10px;
        min-height: 324px;
        margin: 40px;
    }

    .daily-item:nth-of-type(odd) {
        flex-direction: row-reverse;
        margin-right: 40px;
    }

    .daily-item:nth-of-type(even) {
        margin-left: 40px;
    }

    .daily-img {
        border-radius: 10px;
        width: 480px;
        height: 320px;
        margin-top: -40px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .daily-img img {
        object-fit: cover;
    }

    .daily-item:nth-of-type(odd) figure {
        margin-right: -40px;
    }

    .daily-item:nth-of-type(even) figure {
        margin-left: -40px;
    }

    .daily-body {
        padding: 48px 56px;
        width: 100%;
    }

    .daily-titlenumber {
        font-weight: bold;
        font-size: 58px;
        color: var(--primary-color);
        line-height: 1;
        letter-spacing: 0.05em;
        font-family: 'Plus Jakarta Sans', sans-serif
    }

    .daily-title {
        font-weight: bold;
        font-size: 24px;
        line-height: 1.5;
        letter-spacing: 0.05em;
        margin-left: 20px;
    }

    .daily-titletext {
        font-weight: bold;
        font-size: 24px;
        line-height: 1.5;
        letter-spacing: .05em;
        margin-left: 20px;
    }

    .daily-outline {
        margin-top: 40px;
        display: flex;
        gap: 40px;
        flex-direction: column;
    }

    .daily-outline-item::before {
        content: "";
        display: block;
        width: 24px;
        height: 24px;
        background: url(../img/icon-check.svg);
        flex-shrink: 0;
    }

    .daily-outline-item {
        font-weight: bold;
        font-size: 14px;
        line-height: 1.5;
        letter-spacing: 0.1em;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .daily-description {
        font-size: 14px;
        line-height: 1.8;
        letter-spacing: 0.05em;
        margin-top: 12px;
    }


    /**
 * 2.7 - 公式LINE
 */

    .line {
        background: url(../img/bg-cta.jpg) center center / cover no-repeat;
        padding: 40px 24px 52px;
        color: var(--white-color);
        font-size: 16px;
        text-align: center;
    }

    .line-title {
        font-size: 36px;
        font-weight: bold;
        line-height: 1.8;
        letter-spacing: 0.1em;
        display: flex;
        justify-content: center;
        gap: 12px;
    }

    .line-description {
        font-size: 14px;
        line-height: 1.8;
        letter-spacing: 0.05em;
        margin-top: 16px;
    }

    .line-url {
        margin-top: 32px;
    }

    .line-button {
        display: block;
        width: 315px;
        margin: 0 auto;
        padding: 16px 20px;
        font-size: 16px;
        font-weight: bold;
        color: var(--primary-color);
        line-height: 1.5;
        letter-spacing: 0.1em;
        background-color: var(--white-color);
        border: solid 1px var(--primary-color);
        border-radius: 50px;
        position: relative;
        text-align: center;
    }

    .line-button:hover {
        background-color: var(--primary-color);
        color: var(--white-color);
        border-color: var(--white-color);
    }

    .line-icon {
        position: absolute;
        width: 14px;
        height: 14px;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    .line-button:hover .line-icon g {
        stroke: var(--white-color);
    }

    /* 3.0 - Animation, JavaScript Object */
    /* ============================================ */

    /**
 * 3.1 - フェードイン
 */

    /**
 * 3.2 - スライダー
 */
    .event-slide {
        margin: 0 auto;
    }




    .event-slideTrack {
        overflow: visible;
    }

    .daily-list .splide__slide {
        margin-top: 40px;
        margin-bottom: 100px;
    }

    .splide__arrow {
        width: 40px;
        height: 40px;
        border: solid 1px #0071BC;
        background-color: #FFFFFF;
        opacity: 1;
    }

    .splide__arrow svg path {
        fill: #0071BC;
    }
</style>