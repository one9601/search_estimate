<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
 
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

<?php if($bo_table == "enEstimate02") { ?>
<style>
  @media(max-width:1024px) {

    .estimate_bottom_label {
      width: 70px;
    }

    .estimate_bottom_ipt {
      width: calc(100% - 70px);
    }
  }
</style>
<?php } ?>

<section id="bo_w">
  <!-- <h2 id="container_title"><?php echo $g5['title'] ?></h2> -->




  <!-- 게시물 작성/수정 시작 { -->
  <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);"
    method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
    <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input name="cnt" type="hidden" value="2">


    <?php if ($is_password) { ?>
    <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
    <input type="hidden" name="wr_password" id="wr_password" <?php echo $password_required ?>
      class="frm_input half_input <?php echo $password_required ?>" placeholder="" value='sin1004**'>
    <?php } ?>

    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">html</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
        }
    }

    echo $option_hidden;
    ?>
    <div class="estiamte-wrap">
      <!-- <div class="dsi-mo-navi">
        <div class="slide-navi-finger">
            <a href="#"><span></span><span></span><span></span></a>
        </div>
    </div> -->
      <div class="estimate-big-box">
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
        <span class="stretch center">
        <?php if($bo_table == "enEstimate02") { ?>
          Purchase price
        <?php } else {?>
          구매단가
        <?php } ?>
        </span>
      </li> -->
          <li class='estimate-stat-li estimate-stat-LT'>
            <span class="stretch center">
              <?php if($bo_table == "enEstimate02") { ?>
              Price for sales
              <?php } else {?>
              판매희망단가
              <?php } ?>
            </span>
          </li>
          <!-- <li class='estimate-stat-li estimate-stat-place'>
        <span class="stretch center">
          <?php if($bo_table == "enEstimate02") { ?>
            Inventory location
          <?php } else {?>
            재고위치
          <?php } ?>
        </span>
      </li> -->
        </ul>
        <div class="innerCookie estimate-stat-wrap"></div>
      </div>


      <div class="estimate-btn right">
        <button type="button" class="plusRowBtn">
          <?php if($bo_table == "enEstimate02") { ?>
          + Add
          <?php } else {?>
          + 추가
          <?php } ?>
        </button>
        <button type="button" class="delRowBtn">
          <?php if($bo_table == "enEstimate02") { ?>
          - Remove
          <?php } else {?>
          - 삭제
          <?php } ?>
        </button>
      </div>

      <div class="estimate_bottom_input_wrap">
        <?php if(is_mobile()) { ?>
        <ul class="estimate_bottom_full_ul first">
          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            Company Name
            <?php } else {?>
            회사명
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="text" name="wr_subject" required>
          </li>
        </ul>
        <ul class="estimate_bottom_full_ul">
          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            Manager
            <?php } else {?>
            담당자
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="text" name='wr_name' required>
          </li>
        </ul>
        <ul class="estimate_bottom_full_ul">
          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            TEL
            <?php } else {?>
            연락처
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="tel" name='wr_71' required>
          </li>
        </ul>

        <ul class="estimate_bottom_full_ul">
          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            E-mail
            <?php } else {?>
            이메일
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="email" name="wr_email" value="<?php echo $email ?>" id="wr_email" required>
          </li>
        </ul>

        <!-- <li class='estimate_bottom_label'>
        <?php if($bo_table == "enEstimate02") { ?> 
            FAX
          <?php } else {?>
            팩스
          <?php } ?>
        </li>
        <li class='estimate_bottom_ipt'>
          <input type="text" name='wr_72'>
        </li> -->
        <?php } else { ?>
        <ul class="estimate_bottom_half_ul">
          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            Company Name
            <?php } else {?>
            회사명
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="text" name="wr_subject" required>
          </li>
          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            Manager
            <?php } else {?>
            담당자
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="text" name='wr_name'>
          </li>
        </ul>
        <ul class="estimate_bottom_half_ul">
          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            TEL
            <?php } else {?>
            연락처
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="tel" name='wr_71' required>
          </li>

          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            E-mail
            <?php } else {?>
            이메일
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="email" name="wr_email" value="<?php echo $email ?>" id="wr_email" required>
          </li>
          <!-- <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?> 
              FAX
            <?php } else {?>
              팩스
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <input type="text" name='wr_72'>
          </li> -->
        </ul>
        <?php } ?>



        <!-- <ul class="estimate_bottom_full_ul">
        <li class='estimate_bottom_label'>
          <?php if($bo_table == "enEstimate02") { ?>           
            Sectors
          <?php } else {?>
            업종
          <?php } ?>
        </li>
        <li class='estimate_bottom_ipt'>
          <input type="text" name='wr_73'>
        </li>
      </ul> -->

        <ul class="estimate_bottom_full_ul">
          <li class='estimate_bottom_label'>
            <?php if($bo_table == "enEstimate02") { ?>
            Content
            <?php } else {?>
            내용
            <?php } ?>
          </li>
          <li class='estimate_bottom_ipt'>
            <textarea id="wr_content" name="wr_content" class="" required
              minlength="2"><?php if($bo_table == "enEstimate02") { ?>I request an estimate<?php } else {?>견적 요청합니다.<?php } ?></textarea>
          </li>
        </ul>
      </div>

    </div>
  


    <!-- <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
    <div class="bo_w_flie write_div">
        <div class="file_wr write_div">
            <label for="bf_file_<?php echo $i+1 ?>" class="lb_icon"><i class="fa fa-folder-open" aria-hidden="true"></i><span class="sound_only"> 파일 #<?php echo $i+1 ?></span></label>
            <input type="file" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="파일첨부 <?php echo $i+1 ?> : 용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file ">
        </div>
        <?php if ($is_file_content) { ?>
        <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
        <?php } ?>

        <?php if($w == 'u' && $file[$i]['file']) { ?>
        <span class="file_del">
            <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
        </span>
        <?php } ?>
        
    </div>
    <?php } ?> -->

    <!-- <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?> -->

    <div class="submit_btnBox write_div clearfix">
      <!-- <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel btn">취소</a> -->
      <button type="submit" id="btn_submit" accesskey="s" class="submit_btn">
        <?php if($bo_table == "enEstimate02") { ?>
        Submit
        <?php } else {?>
        견적요청
        <?php } ?>
      </button>
    </div>
  </form>

  <div class="estimate2-top-section">
    <div class="estimate-top-txt">
      <p>
        <span class="stretch">
          <?php if($bo_table == "enEstimate02") { ?>
          <b>TURN-KEY Purchase</b><br>
          Solve a small number of varieties in one go!<br>
          Overwhelming competitiveness!<br>
          Worldwide distribution network!
          <?php } else {?>
          <b>TURN-KEY 구매</b><br>
          소량 다품종 한방에 해결!<br>
          압도적인 경쟁력!<br>
          전세계 유통망!
          <?php } ?>
        </span>
      </p>
    </div>
    <ul class="clearfix estimate2-row">
      <li <?php if($bo_table == "enEstimate02") { ?>class='en' <?php } ?>>
        <div>
          <div class="estimate2-imgbox">
            <img src="<?php echo G5_THEME_URL ?>/img/contents/estimate02-img01.png" alt="">
          </div>
          <div class="estimate2-con-txtbox">
            <h3>
              <?php if($bo_table == "enEstimate02") { ?>
              Large purchase
              <?php } else {?>
              대량구매
              <?php } ?>
            </h3>
            <p>
              <?php if($bo_table == "enEstimate02") { ?>

              If you want a low unit price because of the large purchase quantity
              <?php } else {?>
              <span class="mo-block">구매 수량이 많아</span> 저렴한 단가를 원하시는 경우
              <?php } ?>
            </p>
          </div>
        </div>
      </li>
      <li <?php if($bo_table == "enEstimate02") { ?>class='en' <?php } ?>>
        <div>
          <div class="estimate2-imgbox">
            <img src="<?php echo G5_THEME_URL ?>/img/contents/estimate02-img02.png" alt="">
          </div>
          <div class="estimate2-con-txtbox">
            <h3>
              <?php if($bo_table == "enEstimate02") { ?>
              Turnkey purchase
              <?php } else {?>
              턴키구매
              <?php } ?>
            </h3>
            <p>
              <?php if($bo_table == "enEstimate02") { ?>
              You want to buy a variety of items at once
              <?php } else {?>
              <span class="mo-block">다양한 품목을 한 번에</span> 구매하기 원하는 경우
              <?php } ?>
            </p>
          </div>
        </div>
      </li>
      <li <?php if($bo_table == "enEstimate02") { ?>class='en' <?php } ?>>
        <div>
          <div class="estimate2-imgbox">
            <img src="<?php echo G5_THEME_URL ?>/img/contents/estimate02-img03.png" alt="">
          </div>
          <div class="estimate2-con-txtbox">
            <h3>
              <?php if($bo_table == "enEstimate02") { ?>
              Purchasing agent
              <?php } else {?>
              구매대행
              <?php } ?>
            </h3>
            <p>
              <?php if($bo_table == "enEstimate02") { ?>
              Where there is difficulty in purchasing or if you wish to act as an overseas purchasing agent
              <?php } else {?>
              <span class="mo-block">구매에 어려움이 있거나</span> 해외구매대행을 원하는 경우
              <?php } ?>

            </p>
          </div>
        </div>
      </li>
      <li <?php if($bo_table == "enEstimate02") { ?>class='en' <?php } ?>>
        <div>
          <div class="estimate2-imgbox">
            <img src="<?php echo G5_THEME_URL ?>/img/contents/estimate02-img04.png" alt="">
          </div>
          <div class="estimate2-con-txtbox">
            <h3>
              <?php if($bo_table == "enEstimate02") { ?>
              Comparative estimate
              <?php } else {?>
              비교견적
              <?php } ?>

            </h3>
            <p>
              <?php if($bo_table == "enEstimate02") { ?>
              If you want a lower unit price than an existing vendor
              <?php } else {?>
              <span class="mo-block">기존 공급업체보다</span> 저렴한 단가를 원하는 경우
              <?php } ?>

            </p>
          </div>
        </div>
      </li>
    </ul>
  </div>



    <script>
      //쿠키 함수 
      function setCookie(cookieName, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var cookieValue = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toGMTString());
        document.cookie = cookieName + "=" + cookieValue;
      }

      function deleteCookie(cookieName) {
        var expireDate = new Date();
        expireDate.setDate(expireDate.getDate() - 1);
        document.cookie = cookieName + "= " + "; expires=" + expireDate.toGMTString();
      }

      function getCookie(cookieName) {
        cookieName = cookieName + '=';
        var cookieData = document.cookie;
        var start = cookieData.indexOf(cookieName);
        var cookieValue = '';
        if (start != -1) {
          start += cookieName.length;
          var end = cookieData.indexOf(';', start);
          if (end == -1) end = cookieData.length;
          cookieValue = cookieData.substring(start, end);
        }
        return unescape(cookieValue);
      }
    </script>
    <script>
      function getItem() {

        var chkmno = getCookie("chkmno");

        var arr_chkmno = chkmno.split("@DSI@");

        var txt_arr_chkmno = arr_chkmno.join();

        var replace_txt_chkmno = txt_arr_chkmno.replace(/\@DSI@/g, "");

        var replace_txt_chkmno2 = replace_txt_chkmno.replace(/\,/g, "");

        var realArr_chkmno = replace_txt_chkmno2.split("|");

        var count_chkmno = realArr_chkmno.length - 1;

        var RealCount_chkmno = (count_chkmno / 7) + 1;

        console.log(count_chkmno);

        for (i = 0; i < count_chkmno; i += 6) {
          ii = (i / 6) + 1;
          a = i + 1;
          b = i + 2;
          c = i + 3;
          d = i + 4;
          e = i + 5;
          f = i + 6;
          g = i + 7;

          $(".innerCookie").append("<ul class='estimate-stat-ul' id='" + ii +
            "'><li class='estimate-stat-li estimate-stat-num'>" + ii +
            "</li><li class='estimate-stat-li estimate-stat-pn'><input type='text' name='wr_" + ii + "_1' value=" +
            realArr_chkmno[i] +
            "></input></li><li class='estimate-stat-li estimate-stat-DC'><input type='text' name='wr_" + ii +
            "_2' value=" + realArr_chkmno[a] +
            "></input></li><li class='estimate-stat-li estimate-stat-mf'><input type='text' name='wr_" + ii +
            "_3' value=" + realArr_chkmno[b] +
            "></input></li><li class='estimate-stat-li estimate-stat-qty'><input type='text' name='wr_" + ii +
            "_4' value=" + realArr_chkmno[c] +
            "></input></li><li class='estimate-stat-li estimate-stat-cont'><input type='text' name='wr_" + ii +
            "_5' value=" + realArr_chkmno[d] +
            "></input></li><li class='estimate-stat-li estimate-stat-LT'><input type='text' name='wr_" + ii +
            "_6' value=" + realArr_chkmno[e] + "></input></li></ul>");
        }

        if (count_chkmno === 0) {
          for (i = 1; i <= 4; i++) {
            a = i + 1;
            b = i + 2;
            c = i + 3;
            d = i + 4;
            e = i + 5;
            f = i + 6;

            $(".innerCookie").append("<ul class='estimate-stat-ul' id='" + i +
              "'><li class='estimate-stat-li estimate-stat-num'>" + i +
              "</li><li class='estimate-stat-li estimate-stat-pn'><input type='text' name='wr_" + i +
              "_1' value=''></input></li><li class='estimate-stat-li estimate-stat-DC'><input type='text' name='wr_" +
              i +
              "_2' value=''></input></li><li class='estimate-stat-li estimate-stat-mf'><input type='text' name='wr_" +
              i +
              "_3' value=''></input></li><li class='estimate-stat-li estimate-stat-qty'><input type='text' name='wr_" +
              i +
              "_4' value=''></input></li><li class='estimate-stat-li estimate-stat-cont'><input type='text' name='wr_" +
              i +
              "_5' value=''></input></li><li class='estimate-stat-li estimate-stat-LT'><input type='text' name='wr_" +
              i + "_6' value=''></input></li></ul>");
          }
        }



        // 조인 후 replace(/\,/g,""); 후 split



      }
    </script>

    <script language="JavaScript">
      getItem();
    </script>

    <script>
      var lastRow = $(".estimate-stat-ul").last();
      var id = lastRow.attr('id');
      var num = parseInt(id);
      $('.plusRowBtn').click(function () {
        if (num >= 15) {
          <?php
          if ($bo_table == "enEstimate02") {
            ?>
            alert("You can add up to 15 more in stock."); <?php
          } else {
            ?>
            alert("재고추가는 최대 15개까지 할 수 있습니다."); <?php
          } ?>
          return;
        }

        num++;
        $(".estimate-stat-wrap").append("<ul id='" + num +
          "' class='estimate-stat-ul'>  <li class='estimate-stat-li estimate-stat-num'>" + num +
          "</li><li class='estimate-stat-li estimate-stat-pn'><input type='text' class='dsi_input' name='wr_" +
          num +
          "_1' value=''></input></li><li class='estimate-stat-li estimate-stat-DC'><input type='text' class='dsi_input' name='wr_" +
          num +
          "_2' value=''></input></li><li class='estimate-stat-li estimate-stat-mf'><input type='text' class='dsi_input' name='wr_" +
          num +
          "_3' value=''></input></li><li class='estimate-stat-li estimate-stat-qty'><input type='text' class='dsi_input' name='wr_" +
          num +
          "_4' value=''></input></li><li class='estimate-stat-li estimate-stat-cont'><input type='text' class='dsi_input' name='wr_" +
          num +
          "_5' value=''></input></li><li class='estimate-stat-li estimate-stat-LT'><input type='text' class='dsi_input' name='wr_" +
          num + "_6' value=''></input></li></ul>");

      });
      $('.delRowBtn').click(function () {
        var lastRow = $(".estimate-stat-ul").last();
        if (num == 1) {
          <?php
          if ($bo_table == "enEstimate02") {
            ?>
            alert("You can no longer delete it."); <?php
          } else {
            ?>
            alert("더 이상 삭제할 수 없습니다."); <?php
          } ?>
          return;
        }
        num--;
        lastRow.remove();
      });
    </script>