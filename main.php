<?php
if (!isset($_COOKIE["username"])) {
    header("Location: index.php");
}
$name_user = $_COOKIE["username"];
require('include/connect.php');
$sql_lang = "SELECT * FROM tb_user WHERE name_user = '$name_user' ORDER BY id DESC LIMIT 1";
$result_lang = mysql_query($sql_lang);
while ($rec_lang = mysql_fetch_array($result_lang, MYSQL_ASSOC)) {
    $lang = $rec_lang['lang'];
}

if ($lang == "en") {
    include "language/lang-en.php";
} else if ($lang == "th") {
    include "language/lang-th.php";
} else {
    include "language/lang-en.php";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>:: 3D Sudoku ::</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bartop.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/user_score.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/sudoku_main.css" type=text/css rel=stylesheet>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.easing-1.4.pack.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen"/>
    <script type="text/javascript">
        $(function () {
            setInterval(function () {
                var getData = $.ajax({
                    type: "POST",
                    url: "sudoku_main.php",
                    data: "sudo_usefile=1",
                    async: false,
                    success: function (getData) {
                        $("div#welcom_pan_in2").html(getData);
                    }
                }).responseText;
            }, 5000);
        });
        function check_value(id) {
            var room = $("#room").val();
            var x = $("#x" + id).val();
            var y = $("#y" + id).val();
            var z = $("#z" + id).val();
            var value = $("#value" + id).val();
            $.ajax({
                type: "POST",
                url: "sudoku_check.php",
                data: {
                    room: room,
                    x: x,
                    y: y,
                    z: z,
                    value: value
                },
                cache: false,
                success: function (data) {
                    $("#msg").html(data);
                }
            });
        }

        $(document).ready(function () {
            $("#edit_pic").fancybox({
                'width': '20%',
                'height': '20%',
            });
        });
        $(document).ready(function () {
            $("#ch_lang").fancybox({
                'width': '20%',
                'height': '25%',
                'autoScale': 'true',
                'transitionIn': 'none',
                'transitionOut': 'none',
                'type': 'iframe',
                onClosed: function () {
                    parent.location.reload(true);
                }
            });
        });

        $(document).ready(function () {
            $("#iframe").fancybox({
                'width': '30%',
                'height': '70%',
                'autoScale': 'true',
                'transitionIn': 'none',
                'transitionOut': 'none',
                'type': 'iframe',
            });

        });
        $(function () {
            setInterval(function () {
                var getData = $.ajax({
                    type: "POST",
                    url: "user_ongame.php",
                    data: "userongame=1",
                    async: false,
                    success: function (getData) {
                        $("#show_user_use_game").html(getData);
                        console.log(getData);
                    }
                }).responseText;
            }, 2000);
        });
        $(function () {
            setInterval(function () {
                var getData = $.ajax({
                    type: "POST",
                    url: "user_rating.php",
                    data: "rating=1",
                    async: false,
                    success: function (getData) {
                        $("span#rating").html(getData);
                    }
                }).responseText;
            }, 10000);
        });

        $(function () {
            setInterval(function () {
                var getData = $.ajax({
                    type: "POST",
                    url: "user_profile.php",
                    data: "profile=1",
                    async: false,
                    success: function (getData) {
                        $("div#welcom_pan_profile").html(getData);
                    }
                }).responseText;
            }, 1000);
        });
        $(function () {
            setInterval(function () {
                var getData = $.ajax({
                    type: "POST",
                    url: "core.php",
                    data: "corefile=1",
                    async: false,
                    success: function (getData) {
                        $("#core_show").html(getData);
                    }
                }).responseText;
            }, 1000);
        });
        $(function () {
            setInterval(function () {
                var getData = $.ajax({
                    type: "POST",
                    url: "pages_number.php",
                    data: "pagesfile=1",
                    async: false,
                    success: function (getData) {
                        $("#pages_show").html(getData);
                    }
                }).responseText;
            }, 2000);
        });
        $(function () {
            setInterval(function () {
                var getData = $.ajax({
                    type: "POST",
                    url: "sudoku_number.php",
                    data: "sudokunumber=1",
                    async: false,
                    success: function (getData) {
                        $("#sudonumber_show").html(getData);
                    }
                }).responseText;
            }, 2000);
        });


        $(function () {
            setInterval(function () {
                var getData = $.ajax({
                    type: "POST",
                    url: "sudoku_core.php",
                    data: "sudokucore=1",
                    async: false,
                    success: function (getData) {
                        $("#welcom_pan_in1").html(getData);
                    }
                }).responseText;
            }, 2000);
        });


        function MM_swapImgRestore() { //v3.0
            var i, x, a = document.MM_sr;
            for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
        }
        function MM_preloadImages() { //v3.0
            var d = document;
            if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) {
                        d.MM_p[j] = new Image;
                        d.MM_p[j++].src = a[i];
                    }
            }
        }

        function MM_findObj(n, d) { //v4.01
            var p, i, x;
            if (!d) d = document;
            if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document;
                n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n];
            for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n);
            return x;
        }

        function MM_swapImage() { //v3.0
            var i, j = 0, x, a = MM_swapImage.arguments;
            document.MM_sr = new Array;
            for (i = 0; i < (a.length - 2); i += 3)
                if ((x = MM_findObj(a[i])) != null) {
                    document.MM_sr[j++] = x;
                    if (!x.oSrc) x.oSrc = x.src;
                    x.src = a[i + 2];
                }
        }

    </script>

    <!--[if lt IE 7]>
    <style type="text/css">
        div, img {
            behavior: url(iepngfix.htc)
        }
    </style>
    <![endif]-->
</head>
<body onload="MM_preloadImages('images/sudoku-11.png','images/sudoku-22.png','images/sudoku-33.png')">
<div id="head">
    <div id="headin">
        <div id="headin1"><span class="text_logo"><a href="main.php" title="3D Sudoku">3D Sudoku</a></span></div>
        <div id="headin2">
            <div id="headin11"><span class="text_text"><?php echo _PLAYALL; ?></span></div>
            <div id="headin111"><font color="#FF0000"><span id="show_user_use_game"></span></font></div>
            <div id="headin1111111"><?php echo _PEOPLE; ?></div>
            <div id="headin_20"> |</div>
            <div id="headin111111"><span class="text_text"><a href="lang.php" class="various iframe"
                                                              title="<?php echo _CHLANG; ?>" id="ch_lang"><img
                            src="images/lang.png" width="35" height="30"/></a></span></div>
            <div id="headin11111"> | <a href="logout.php" title="<?php echo _LOGOUT; ?>"><span
                        class="text_text"><?php echo _LOGOUT; ?> ?</span></a></div>
        </div>
    </div>
    <div id="headin_head1">
        <div id="headin_head2">
            <div id="headin_menu"><a href="#" onmouseout="MM_swapImgRestore()"
                                     onmouseover="MM_swapImage('Image1','','images/sudoku-11.png',1)"
                                     title="<?php echo _USEGANE; ?> XYZ" onclick="check_pages(1);"><input name="add"
                                                                                                          type="hidden"
                                                                                                          id="add1"
                                                                                                          value="xyz"/><img
                        src="images/sudoku-1.png" name="Image1" width="45" height="50" border="0" id="Image1"/></a><a
                    href="#" onmouseout="MM_swapImgRestore()"
                    onmouseover="MM_swapImage('Image2','','images/sudoku-22.png',1)" title="<?php echo _USEGANE; ?> YZX"
                    onclick="check_pages(2);"><img src="images/sudoku-2.png" name="Image2" width="45" height="50"
                                                   border="0" id="Image2"/><input name="add" type="hidden" id="add2"
                                                                                  value="yzx"/></a><a href="#"
                                                                                                      onmouseout="MM_swapImgRestore()"
                                                                                                      onmouseover="MM_swapImage('Image3','','images/sudoku-33.png',1)"
                                                                                                      title="<?php echo _USEGANE; ?> ZXY"
                                                                                                      onclick="check_pages(3);"><img
                        src="images/sudoku-3.png" name="Image3" width="45" height="50" border="0" id="Image3"/><input
                        name="add" type="hidden" id="add3" value="zxy"/></a></div>
        </div>
    </div>

</div>
<div id="content">
    <div id="content_cen">
        <div id="content_sup">
            <div class="welcom_pan">
                <?php ///ซ้าย ?>
                <div class="content_left">
                    <div id="sidebar1">

                        <div id="welcom_pan_1">
                            <div id="welcom_pan_inleft">
                                <span class="text_text_pages"> <?php echo _PLAYBALL; ?> </span>
                            </div>

                            <div id="welcom_pan_inright"><span id="sudonumber_show"></span></div>
                        </div>
                        <div id="welcom_pan_in1"></div>
                    </div>
                    <div id="sidebar11">
                        <div id="welcom_pan_11">
                            <span class="text_text_pages"><?php echo _DETAILYOU; ?></span></div>
                        <div id="welcom_pan_profile">
                            <?php //// profile ?>
                        </div>
                        <div>
                            <a class="various iframe" id="edit_pic" href="editpic.php"
                               title="<?php echo _CLICKCHPIC; ?>"><span class="pic_chang">[<?php echo _CLICKEDITPIC; ?>
                                    ]</span></a></div>
                    </div>
                </div>
                <?php ///ซ้าย ?>
                <?php ///ขวา?>
                <div class="content_rigth">

                    <div id="sidebar2">
                        <div id="welcom_pan_in22">
                            <div id="welcom_pan_in22_1">
                                <span class="text_text_pages"><?php echo _THECORE; ?></span></div>
                            <span id="core_show"></span>
                            <div id="welcom_pan_in22_11">
                                <span id="pages_show"></span></div>
                            <div id="welcom_pan_in22_111">
                                <span class="text_text_pages"><?php echo _PLAYPAN; ?></span></div>
                        </div>
                        <div id="welcom_pan_in2"></div>
                    </div>

                    <div id="sidebar22">
                        <div id="sidebar222">
                            <span class="text_text_pages"><?php echo _RKSCOREALL; ?><a class="various iframe"
                                                                                       id="iframe" href="view_score.php"
                                                                                       title="<?php echo _DETAILPLAYALL; ?>"><font
                                        color="#C46609"> <?php echo _CLICKPLAYALL; ?>!</font></a></span>
                        </div>
                        <div id="welcom_pan_score">
                            <?php //// rating ?>
                            <span id="rating"></span>
                        </div>

                    </div>
                </div>
                <?php ///ขวา?>
            </div>


        </div>
    </div>
</div>
<div id="foot">
    <div id="foot_cen">
        <h6><a href="main.php">3D Sudoku</a></h6>

    </div>
</div>
</body>
</html>
