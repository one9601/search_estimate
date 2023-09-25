<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
// print $view['wr_11'];

$wr_1 = explode("|",$write["wr_1"]);
$wr_2 = explode("|",$write["wr_2"]);
$wr_3 = explode("|",$write["wr_3"]);
$wr_4 = explode("|",$write["wr_4"]);
$wr_5 = explode("|",$write["wr_5"]);
$wr_6 = explode("|",$write["wr_6"]);
$wr_7 = explode("|",$write["wr_7"]);
$wr_8 = explode("|",$write["wr_8"]);
$wr_9 = explode("|",$write["wr_9"]);
$wr_10 = explode("|",$write["wr_10"]);
$wr_11 = explode("|",$write["wr_11"]);
$wr_12 = explode("|",$write["wr_12"]);
$wr_13 = explode("|",$write["wr_13"]);
$wr_14 = explode("|",$write["wr_14"]);
$wr_15 = explode("|",$write["wr_15"]);


$wr_1_1 = $wr_1[0];
$wr_1_2 = $wr_1[1];
$wr_1_3 = $wr_1[2];
$wr_1_4 = $wr_1[3];
$wr_1_5 = $wr_1[4];
$wr_1_6 = $wr_1[5];
$wr_1_7 = $wr_1[6];
$wr_1_8 = $wr_1[7];
$wr_1_9 = $wr_1[8];
$wr_1_10 = $wr_1[9];

$wr_2_1 = $wr_2[0];
$wr_2_2 = $wr_2[1];
$wr_2_3 = $wr_2[2];
$wr_2_4 = $wr_2[3];
$wr_2_5 = $wr_2[4];
$wr_2_6 = $wr_2[5];
$wr_2_7 = $wr_2[6];
$wr_2_8 = $wr_2[7];
$wr_2_9 = $wr_2[8];
$wr_2_10 = $wr_2[9];

$wr_3_1 = $wr_3[0];
$wr_3_2 = $wr_3[1];
$wr_3_3 = $wr_3[2];
$wr_3_4 = $wr_3[3];
$wr_3_5 = $wr_3[4];
$wr_3_6 = $wr_3[5];
$wr_3_7 = $wr_3[6];
$wr_3_8 = $wr_3[7];
$wr_3_9 = $wr_3[8];
$wr_3_10 = $wr_3[9];

$wr_4_1 = $wr_4[0];
$wr_4_2 = $wr_4[1];
$wr_4_3 = $wr_4[2];
$wr_4_4 = $wr_4[3];
$wr_4_5 = $wr_4[4];
$wr_4_6 = $wr_4[5];
$wr_4_7 = $wr_4[6];
$wr_4_8 = $wr_4[7];
$wr_4_9 = $wr_4[8];
$wr_4_10 = $wr_4[9];

$wr_5_1 = $wr_5[0];
$wr_5_2 = $wr_5[1];
$wr_5_3 = $wr_5[2];
$wr_5_4 = $wr_5[3];
$wr_5_5 = $wr_5[4];
$wr_5_6 = $wr_5[5];
$wr_5_7 = $wr_5[6];
$wr_5_8 = $wr_5[7];
$wr_5_9 = $wr_5[8];
$wr_5_10 = $wr_5[9];

$wr_6_1 = $wr_6[0];
$wr_6_2 = $wr_6[1];
$wr_6_3 = $wr_6[2];
$wr_6_4 = $wr_6[3];
$wr_6_5 = $wr_6[4];
$wr_6_6 = $wr_6[5];
$wr_6_7 = $wr_6[6];
$wr_6_8 = $wr_6[7];
$wr_6_9 = $wr_6[8];
$wr_6_10 = $wr_6[9];

$wr_7_1 = $wr_7[0];
$wr_7_2 = $wr_7[1];
$wr_7_3 = $wr_7[2];
$wr_7_4 = $wr_7[3];
$wr_7_5 = $wr_7[4];
$wr_7_6 = $wr_7[5];
$wr_7_7 = $wr_7[6];
$wr_7_8 = $wr_7[7];
$wr_7_9 = $wr_7[8];
$wr_7_10 = $wr_7[9];

$wr_8_1 = $wr_8[0];
$wr_8_2 = $wr_8[1];
$wr_8_3 = $wr_8[2];
$wr_8_4 = $wr_8[3];
$wr_8_5 = $wr_8[4];
$wr_8_6 = $wr_8[5];
$wr_8_7 = $wr_8[6];
$wr_8_8 = $wr_8[7];
$wr_8_9 = $wr_8[8];
$wr_8_10 = $wr_8[9];

$wr_9_1 = $wr_9[0];
$wr_9_2 = $wr_9[1];
$wr_9_3 = $wr_9[2];
$wr_9_4 = $wr_9[3];
$wr_9_5 = $wr_9[4];
$wr_9_6 = $wr_9[5];
$wr_9_7 = $wr_9[6];
$wr_9_8 = $wr_9[7];
$wr_9_9 = $wr_9[8];
$wr_9_10 = $wr_9[9];

$wr_10_1 = $wr_10[0];
$wr_10_2 = $wr_10[1];
$wr_10_3 = $wr_10[2];
$wr_10_4 = $wr_10[3];
$wr_10_5 = $wr_10[4];
$wr_10_6 = $wr_10[5];
$wr_10_7 = $wr_10[6];
$wr_10_8 = $wr_10[7];
$wr_10_9 = $wr_10[8];
$wr_10_10 = $wr_10[9];

$wr_11_1 = $wr_11[0];
$wr_11_2 = $wr_11[1];
$wr_11_3 = $wr_11[2];
$wr_11_4 = $wr_11[3];
$wr_11_5 = $wr_11[4];
$wr_11_6 = $wr_11[5];
$wr_11_7 = $wr_11[6];
$wr_11_8 = $wr_11[7];
$wr_11_9 = $wr_11[8];
$wr_11_10 = $wr_11[9];

$wr_12_1 = $wr_12[0];
$wr_12_2 = $wr_12[1];
$wr_12_3 = $wr_12[2];
$wr_12_4 = $wr_12[3];
$wr_12_5 = $wr_12[4];
$wr_12_6 = $wr_12[5];
$wr_12_7 = $wr_12[6];
$wr_12_8 = $wr_12[7];
$wr_12_9 = $wr_12[8];
$wr_12_10 = $wr_12[9];

$wr_13_1 = $wr_13[0];
$wr_13_2 = $wr_13[1];
$wr_13_3 = $wr_13[2];
$wr_13_4 = $wr_13[3];
$wr_13_5 = $wr_13[4];
$wr_13_6 = $wr_13[5];
$wr_13_7 = $wr_13[6];
$wr_13_8 = $wr_13[7];
$wr_13_9 = $wr_13[8];
$wr_13_10 = $wr_13[9];

$wr_14_1 = $wr_14[0];
$wr_14_2 = $wr_14[1];
$wr_14_3 = $wr_14[2];
$wr_14_4 = $wr_14[3];
$wr_14_5 = $wr_14[4];
$wr_14_6 = $wr_14[5];
$wr_14_7 = $wr_14[6];
$wr_14_8 = $wr_14[7];
$wr_14_9 = $wr_14[8];
$wr_14_10 = $wr_14[9];

$wr_15_1 = $wr_15[0];
$wr_15_2 = $wr_15[1];
$wr_15_3 = $wr_15[2];
$wr_15_4 = $wr_15[3];
$wr_15_5 = $wr_15[4];
$wr_15_6 = $wr_15[5];
$wr_15_7 = $wr_15[6];
$wr_15_8 = $wr_15[7];
$wr_15_9 = $wr_15[8];
$wr_15_10 = $wr_15[9];


?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<!-- 게시물 읽기 시작 { -->
<!-- <div id="bo_v_table"><?php echo $board['bo_subject']; ?></div> -->

<article id="bo_v" style="width:<?php echo $width; ?>; margin-top:20px; margin-bottom:20px;">
    <header>
        <h1 id="bo_v_title">
            <?php
            if ($category_name) echo $view['ca_name'].' | '; // 분류 출력 끝
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?>
        </h1>
    </header>

    <section id="bo_v_info">
        <h2>페이지 정보</h2>
        작성자 <strong><?php echo $view['name'] ?><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></strong>
        <span
            class="sound_only">작성일</span><strong><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong>
        조회<strong><?php echo number_format($view['wr_hit']) ?>회</strong>
        <!-- 댓글<strong><?php echo number_format($view['wr_comment']) ?>건</strong> -->
    </section>


    <?php
    if (implode('', $view['link'])) {
     ?>
    <!-- 관련링크 시작 { -->
    <section id="bo_v_link">
        <h2>관련링크</h2>
        <ul>
            <?php
        // 링크
        $cnt = 0;
        for ($i=1; $i<=count($view['link']); $i++) {
            if ($view['link'][$i]) {
                $cnt++;
                $link = cut_str($view['link'][$i], 70);
         ?>
            <li>
                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                    <img src="<?php echo $board_skin_url ?>/img/icon_link.gif" alt="관련링크">
                    <strong><?php echo $link ?></strong>
                </a>
                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>회 연결</span>
            </li>
            <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 관련링크 끝 -->
    <?php } ?>

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
         ?>
        <?php if ($prev_href || $next_href) { ?>
        <ul class="bo_v_nb">
            <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>" class="btn_b01">이전글</a></li><?php } ?>
            <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>" class="btn_b01">다음글</a></li><?php } ?>
        </ul>
        <?php } ?>

        <ul class="bo_v_com">
            <!-- <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01">수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01"
                    onclick="del(this.href); return false;">삭제</a></li><?php } ?>
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin"
                    onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin"
                    onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01">검색</a></li><?php } ?> -->
            <li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li>
            <!-- <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01">답변</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?> -->
        </ul>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

    <section id="bo_v_atc">
        <h2 id="bo_v_atc_title">본문</h2>

        <div class='result'>
            <h1 style="margin-bottom:30px">등록 정보</h1>

            <style>
                .sg-estimate-form {
                    padding: 10px
                }

                .sg-estimate-form button {
                    float: right
                }

                .sg-estimate-form::after {
                    display: block;
                    content: "";
                    clear: both
                }

                @media only print {
                    a[href]::after {
                        content: none !important;
                    }
                }
            </style>

            <div class="sg-estimate-form">
                <button onclick="printPage()">인쇄하기</button>
            </div>

            <script>
                function printPage() {

                    var initBody;

                    window.onbeforeprint = function () {
                        initBody = document.body.innerHTML;
                        document.body.innerHTML = document.getElementById('bo_v_atc').innerHTML;
                    };

                    window.onafterprint = function () {
                        document.body.innerHTML = initBody;
                    };

                    window.print();

                    return false;
                }
            </script>

            <ul class='estimate-view-top-adm first'>
                <li>전송폼</li>
                <li>견적문의</li>
            </ul>
            <!-- <ul class='estimate-view-top-adm'>
                <li>회원정보</li>
                <li>
                    <?php
                    if ($view['mb_id']) {
                        echo "회원";
                    } else {
                        echo "비회원";
                    }
                ?>
                </li>
            </ul> -->
            <ul class='estimate-view-top-adm'>
                <li>등록일</li>
                <li>
                    <?php echo date("Y-m-d H:i", strtotime($view['wr_datetime'])) ?>
                </li>
            </ul>

            <ul class='estimate-view-top-adm'>
                <?php
                if($bo_table == "enEstimate02") { 
                  if (isset($_REQUEST["wr_75"])) {
                      $sql = "UPDATE g5_write_enEstimate02 SET wr_75='{$_REQUEST["wr_75"]}' WHERE wr_id={$wr_id}";
                      sql_query($sql);

                      $sql = "SELECT wr_75 FROM g5_write_enEstimate02 WHERE wr_id={$wr_id}";
                      $sg = sql_query($sql);
                      $hell = sql_fetch_array($sg);
                  }
                } else {
                  if (isset($_REQUEST["wr_75"])) {
                    $sql = "UPDATE g5_write_estimate02 SET wr_75='{$_REQUEST["wr_75"]}' WHERE wr_id={$wr_id}";
                    sql_query($sql);

                    $sql = "SELECT wr_75 FROM g5_write_estimate02 WHERE wr_id={$wr_id}";
                    $sg = sql_query($sql);
                    $hell = sql_fetch_array($sg);
                  }
                }
                ?>
                <li>확인상태</li>
                <li>
                  <?php if($bo_table == "enEstimate02") {  ?>
                    <?php if ($_SESSION["ss_mb_id"] == "admin") { ?>
                    <form action="<?= $_SERVER["REQUEST_URI"]; ?>">
                        <input type="hidden" name="bo_table" value="enEstimate02">
                        <input type="hidden" name="wr_id" value="<?= $wr_id ?>">
                        <select name="wr_75" id="">

                            <?php if (isset($_REQUEST["wr_75"])) { ?>
                            <option value="대기중" <?php if ($hell["wr_75"] == "대기중") {echo "selected";} ?>>대기중
                            </option>
                            <option value="확인" <?php if ($hell["wr_75"] == "확인") {echo "selected";} ?>>확인</option>
                            <?php } else { ?>
                            <option value="대기중" <?php if ($view["wr_75"] == "대기중") {echo "selected";} ?>>대기중
                            </option>
                            <option value="확인" <?php if ($view["wr_75"] == "확인") {echo "selected";} ?>>확인</option>
                            <?php } ?>

                        </select>
                        <button type="submit" onclick="return confirm('제출하시겠습니까?')">확인</button>
                    </form>
                    <?php } 
                    else { 
                        echo $view["wr_75"];
                    } ?>
                  <?php }else { ?>
                    <?php if ($_SESSION["ss_mb_id"] == "admin") { ?>
                    <form action="<?= $_SERVER["REQUEST_URI"]; ?>">
                        <input type="hidden" name="bo_table" value="estimate02">
                        <input type="hidden" name="wr_id" value="<?= $wr_id ?>">
                        <select name="wr_75" id="">

                            <?php if (isset($_REQUEST["wr_75"])) { ?>
                            <option value="대기중" <?php if ($hell["wr_75"] == "대기중") {echo "selected";} ?>>대기중
                            </option>
                            <option value="확인" <?php if ($hell["wr_75"] == "확인") {echo "selected";} ?>>확인</option>
                            <?php } else { ?>
                            <option value="대기중" <?php if ($view["wr_75"] == "대기중") {echo "selected";} ?>>대기중
                            </option>
                            <option value="확인" <?php if ($view["wr_75"] == "확인") {echo "selected";} ?>>확인</option>
                            <?php } ?>

                        </select>
                        <button type="submit" onclick="return confirm('제출하시겠습니까?')">확인</button>
                    </form>
                    <?php } 
                    else { 
                        echo $view["wr_75"];
                    } ?>
                  <?php } ?>
                </li>
            </ul>
            <ul style="margin-bottom:30px" class='estimate-view-top-adm last'>
                <li>등록시 접속경로 / IP</li>
                <li>
                    <?php 
                    $mAgent = array("iPhone","iPod","Android","Blackberry", "Opera Mini", "Windows ce", "Nokia", "sony" ); 
                    $chkMobile = false; 

                    for($i=0; $i<sizeof($mAgent); $i++){ 
                        if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )) { 
                            $chkMobile = true; 
                            break; 
                            } 
                        }
                    if ($chkMobile) {
                        echo "<b>모바일</b>";
                    } else { 
                        echo "PC</b>";
                        echo  " / 접속경로: " . $_SERVER['HTTP_REFERER'];
                    }
                    ?>
                    / IP : <?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?>
                </li>
            </ul>
        </div>
        <!-- 본문 내용 시작 { -->
        <div class="tbl_frm01 tbl_wrap">
            <div class="result">
                <ul class='estimate-stat-ul estimate-stat-tit-ul'>
                    <li class='estimate-stat-li estimate-stat-num'>
                        <span class="stretch center">NUM</span>
                    </li>
                    <li class='estimate-stat-li estimate-stat-pn'>
                        <span class="stretch center">P/N</span>
                    </li>
                    <li class='estimate-stat-li estimate-stat-DC'>
                        <span class="stretch center">MAKER</span>
                    </li>
                    <li class='estimate-stat-li estimate-stat-mf'>
                        <span class="stretch center">DESC</span>
                    </li>
                    <li class='estimate-stat-li estimate-stat-qty'>
                        <span class="stretch center">D/C</span>
                    </li>
                    <li class='estimate-stat-li estimate-stat-cont'>
                        <span class="stretch center">Q’TY</span>
                    </li>
                    <!-- <li class='estimate-stat-li estimate-stat-pri'>
                        <span class="stretch center">구매단가</span>
                    </li> -->
                    <li class='estimate-stat-li estimate-stat-LT'>
                        <span class="stretch center">판매희망단가</span>
                    </li>
                    <!-- <li class='estimate-stat-li estimate-stat-place'>
                        <span class="stretch center">재고위치</span>
                    </li> -->
                </ul>

                <?php if($wr_1_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">01</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_1_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_1_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_1_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_1_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_1_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_1_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_1_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_1_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_2_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">02</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_2_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_2_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_2_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_2_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_2_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_2_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_2_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_2_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_3_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">03</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_3_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_3_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_3_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_3_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_3_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_3_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_3_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_3_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_4_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">04</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_4_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_4_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_4_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_4_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_4_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_4_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_4_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_4_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>


                <?php if($wr_5_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">05</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_5_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_5_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_5_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_5_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_5_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_5_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_5_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_5_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_6_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">06</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_6_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_6_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_6_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_6_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_6_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_6_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_6_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_6_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_7_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">07</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_7_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_7_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_7_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_7_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_7_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_7_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_7_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_7_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_8_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">08</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_8_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_8_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_8_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_8_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_8_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_8_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_8_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_8_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_9_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">09</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_9_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_9_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_9_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_9_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_9_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_9_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_9_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_9_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_10_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">10</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_10_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_10_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_10_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_10_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_10_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_10_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_10_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_10_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_11_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">11</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_11_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_11_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_11_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_11_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_11_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_11_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_11_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_11_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_12_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">12</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_12_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_12_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_12_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_12_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_12_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_12_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_12_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_12_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_13_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">13</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_13_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_13_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_13_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_13_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_13_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_13_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_13_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_13_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_14_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">14</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_14_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_14_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_14_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_14_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_14_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_14_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_14_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_14_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>

                <?php if($wr_15_1 != "") {?> 
                    <ul class='estimate-stat-ul'>
                        <li class='estimate-stat-li estimate-stat-num'>
                            <span class="stretch center">15</span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pn'>
                            <span class="stretch center"><?php echo $wr_15_1 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-DC'>
                            <span class="stretch center"><?php echo $wr_15_2 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-mf'>
                            <span class="stretch center"><?php echo $wr_15_3 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-qty'>
                            <span class="stretch center"><?php echo $wr_15_4 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-cont'>
                            <span class="stretch center"><?php echo $wr_15_5 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-pri'>
                            <span class="stretch center"><?php echo $wr_15_6 ?></span>
                        </li>
                        <!-- <li class='estimate-stat-li estimate-stat-LT'>
                            <span class="stretch center"><?php echo $wr_15_7 ?></span>
                        </li>
                        <li class='estimate-stat-li estimate-stat-place'>
                            <span class="stretch center"><?php echo $wr_15_8 ?></span>
                        </li> -->
                    </ul>
                <?php }?>




            </div>

            <div class="estimate_bottom_input_wrap"  style="margin-top:30px;">
            <ul class="estimate_bottom_half_ul">
                <li class='estimate_bottom_label'>회사명</li>
                <li class='estimate_bottom_ipt'>
                    <p><?=$view["wr_subject"]?></p>
                </li>
                <li class='estimate_bottom_label'>담당자</li>
                <li class='estimate_bottom_ipt'>
                 <p><?=$view["wr_name"]?></p>
                </li>
            </ul>
            <ul class="estimate_bottom_full_ul">
                <li class='estimate_bottom_label'>연락처</li>
                <li class='estimate_bottom_ipt'>
                    <?=$view["wr_71"]?>
                </li>
                <!-- <li class='estimate_bottom_label'>팩스</li>
                <li class='estimate_bottom_ipt'>
                    <?=$view["wr_72"]?>
                </li> -->
            </ul>

            <ul class="estimate_bottom_full_ul">
                <li class='estimate_bottom_label'>이메일</li>
                <li class='estimate_bottom_ipt'>
                    <?=$view["wr_email"]?>
                </li>
            </ul>

            <!-- <ul class="estimate_bottom_full_ul">
                <li class='estimate_bottom_label'>업종</li>
                <li class='estimate_bottom_ipt'>
                    <?=$view["wr_73"]?>
                </li>
            </ul> -->

            <ul class="estimate_bottom_full_ul">
                <li class='estimate_bottom_label'>내용</li>
                <li class='estimate_bottom_ipt view-content'>
                    <?php echo get_view_thumbnail($view['content']); ?>
                </li>
            </ul>
            </div>

                
    <?php
    if ($view['file']['count']) {
        $cnt = 0;
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'])
                $cnt++;
        }
    }
     ?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
            <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source']) {
         ?>
            <li>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
                    <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span>
                <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
            <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>


        </div>
        <?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p> <?php echo $signature ?></p> <?php } ?>

        <!-- 스크랩 추천 비추천 시작 { -->
        <?php if ($scrap_href || $good_href || $nogood_href) { ?>
        <div id="bo_v_act">
            <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href;  ?>" target="_blank" class="btn_b01"
                onclick="win_scrap(this.href); return false;">스크랩</a><?php } ?>
            <?php if ($good_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="btn_b01">추천
                    <strong><?php echo number_format($view['wr_good']) ?></strong></a>
                <b id="bo_v_act_good"></b>
            </span>
            <?php } ?>
            <?php if ($nogood_href) { ?>
            <span class="bo_v_act_gng">
                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="btn_b01">비추천
                    <strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
                <b id="bo_v_act_nogood"></b>
            </span>
            <?php } ?>
        </div>
        <?php } else {
            if($board['bo_use_good'] || $board['bo_use_nogood']) {
        ?>
        <div id="bo_v_act">
            <?php if($board['bo_use_good']) { ?><span>추천
                <strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
            <?php if($board['bo_use_nogood']) { ?><span>비추천
                <strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>
        </div>
        <?php
            }
        }
        ?>
        <!-- } 스크랩 추천 비추천 끝 -->
    </section>

    <?php
    include_once(G5_SNS_PATH."/view.sns.skin.php");
    ?>

    <?php
    // 코멘트 입출력
    // include_once('./view_comment.php');
     ?>

    <!-- 링크 버튼 시작 { -->
    <div id="bo_v_bot">
        <?php echo $link_buttons ?>
    </div>
    <!-- } 링크 버튼 끝 -->

</article>
<!-- } 게시판 읽기 끝 -->

<script>
    < ? php
    if ($board['bo_download_point'] < 0) {
        ?
        >
        $(function () {
                    $("a.view_file_download").click(function () {
                            if (!g5_is_member) {
                                alert("다운로드
                                    권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.
                                    ");
                                    return false;
                                }
                                var
                                    msg =
                                    "파일을
                                다운로드
                                하시면
                                포인트가
                                차감( < ? php echo number_format($board['bo_download_point']) ? > 점) 됩니다.\n\ n포인트는
                                게시물당
                                한번만
                                차감되며
                                다음에
                                다시
                                다운로드
                                하셔도
                                중복하여
                                차감하지
                                않습니다.\n\ n그래도
                                다운로드
                                하시겠습니까 ? ";
                                if (confirm(msg)) {
                                    var
                                        href =
                                        $(this).attr("href") + "&js=on";
                                    $(this).attr("href",
                                        href);
                                    return
                                    true;
                                } else {
                                    return
                                    false;
                                }
                            });
                    }); <
                ? php
            } ? >
            function
        board_move(href) {
                window.open(href,
                    "boardmove",
                    "left=50,
                    top = 50,
                    width = 500,
                    height = 550,
                    scrollbars = 1 ");
                }
</script>

<script>
    $(function () {
        $("a.view_image").click(function () {
            window.open(this.href, "large_image",
                "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no"
            );
            return false;
        });

        // 추천, 비추천
        $("#good_button, #nogood_button").click(function () {
            var $tx;
            if (this.id == "good_button")
                $tx = $("#bo_v_act_good");
            else
                $tx = $("#bo_v_act_nogood");

            excute_good(this.href, $(this), $tx);
            return false;
        });

        // 이미지 리사이즈
        $("#bo_v_atc").viewimageresize();
    });

    function excute_good(href, $el, $tx) {
        $.post(
            href, {
                js: "on"
            },
            function (data) {
                if (data.error) {
                    alert(data.error);
                    return false;
                }

                if (data.count) {
                    $el.find("strong").text(number_format(String(data.count)));
                    if ($tx.attr("id").search("nogood") > -1) {
                        $tx.text("이 글을 비추천하셨습니다.");
                        $tx.fadeIn(200).delay(2500).fadeOut(200);
                    } else {
                        $tx.text("이 글을 추천하셨습니다.");
                        $tx.fadeIn(200).delay(2500).fadeOut(200);
                    }
                }
            }, "json"
        );
    }
</script>
<!-- } 게시글 읽기 끝 -->