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
      <input type="hidden" name="wr_content" value="내용">

      <?php if ($is_name) { ?>
	        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
	        <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input half_input required" placeholder="이름">
	    <?php } ?>
	
	    <?php if ($is_password) { ?>
	        <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
	        <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input half_input <?php echo $password_required ?>" placeholder="비밀번호">
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
    <div class="innerCookie">

    </div>

   <script>
      function getItem() {
         var chkmno = getCookie("chkmno"); 
         var arr_chkmno;
         arr_chkmno = chkmno.split("@crlf@");

         for(i=0;i<arr_chkmno.length;i++) {
            addRowItem(arr_chkmno[i],i);
         }
         if(i == 1 ) for(i=1;i<=4;i++)  addRow(i);
      }

function addRowItem(chkmno,id) {

    var arr_chkmno;
    var f = document.frm;
    var pnObj,mfgObj,descrObj,dcObj;

    arr_chkmno = chkmno.split("|");
    addRow(id);
    pnObj = eval('document.all.pn' + id );
    mfgObj = eval('document.all.mfg' + id );
    descrObj = eval('document.all.descr' + id );
    dcObj = eval('document.all.dc' + id );
    pnObj.value = arr_chkmno[0];
    if(arr_chkmno[1] != undefined)
        mfgObj.value = arr_chkmno[1];
    if(arr_chkmno[2] != undefined)
        descrObj.value = arr_chkmno[2];
    if(arr_chkmno[3] != undefined)
        dcObj.value = arr_chkmno[3];
    
}


   </script>

<script language="JavaScript">

getItem();

</script>

   <input type="hidden" name="wr_subject" value="견적문의 요청입니다." id="wr_subject" required class="frm_input full_input required" size="50" maxlength="255" placeholder="">
      <input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input half_input email " placeholder="이메일">
      <div class="estimate-stat-wrap">
         <ul class="estimate-stat-ul">
            <li></li>
            <li>P/N</li>
            <li>Maker</li>
            <li>DESC</li>
            <li>D/C</li>
            <li>Q'TY</li>
            <li>구매단가</li>
            <li>판매희망단가</li>
            <li>재고위치</li>
         </ul>

         <?php
    
    $case = $_POST['case'];
    // POST로 넘어온 값들을 $check에 저장

    $caseCount = count($case);
    // 사용자가 체크한 개수

    $caseRealCount = ($caseCount * 8) -1;

    // $result = explode("|",$case);

    $caseText = implode("|",$case);
    $caseArray = explode("|",$caseText);


    if(!isset($_POST['case'])){ ?>

         <ul class="estimate-stat-ul" id="1">
            <li>
               <input type="checkbox" class="row-control">
            </li>
            <li>
               <input type="text" class="frm_input" name="wr_1_1" value="<?php echo $wr_1_1?>">
            </li>
            <li>
               <input type="text" class="frm_input" name="wr_1_2" value="<?php echo $wr_1_2?>">
            </li>
            <li>
               <input type="text" class="frm_input" name="wr_1_3" value="<?php echo $wr_1_3?>">
            </li>
            <li>
               <input type="text" class="frm_input" name="wr_1_4" value="<?php echo $wr_1_4?>">
            </li>
            <li>
               <input type="text" class="frm_input" name="wr_1_5" value="<?php echo $wr_1_5?>">
            </li>
            <li>
               <input type="text" class="frm_input" name="wr_1_6" value="<?php echo $wr_1_6?>">
            </li>
            <li>
               <input type="text" class="frm_input" name="wr_1_7" value="<?php echo $wr_1_7?>">
            </li>
            <li>
               <input type="text" class="frm_input" name="wr_1_8" value="<?php echo $wr_1_8?>">
            </li>
         </ul>

         <?php } else {
      // $array = array($case);
      // check의 값들을 새로운 배열에 저장

      for($i=0; $i<=$caseRealCount; $i+=8){
        $ii = ($i/8) +1;
        $b= $i+1;
        $c= $i+2;
        $d= $i+3;
        $e= $i+4;
        $f= $i+5;
        $g= $i+6;
        $h= $i+7;
        $k= $i+8;
 
        echo "<ul class='estimate-stat-ul' id='$ii'><li><input type='text' class='dsi_input wr_$ii"."_1' name='wr_$ii"."_1' value='$caseArray[$i]'></li> <li><input type='text' class='dsi_input wr_$ii"."_2' name='wr_$ii"."_2' value='$caseArray[$b]'></li><li><input type='text' class='dsi_input wr_$il"."_3' name='wr_$ii"."_3' value='$caseArray[$c]'></li><li><input type='text' class='dsi_input wr_$ii"."_4' name='wr_$ii"."_4' value=''></li><li><input type='text' class='dsi_input wr_$ii"."_5' name='wr_$ii"."_5' value=''></li><li><input type='text' class='dsi_input wr_$ii"."_6' name='wr_$ii"."_6' value=''></li><li><input type='text' class='dsi_input wr_$ii"."_7' name='wr_$ii"."_7' value=''></li><li><input type='text' class='dsi_input wr_$ii"."_8' name='wr_$ii"."_8' value=''></li></ul>";
      }
  
//       foreach ($case as $value){
//       // $result = implode("|",$value);
//       // 배열 값들을 "|" 로 나누어서 한 문자열로 저장
//       $result = explode("|",$value);




//       for($i=0; $i<=15; $i++){

//       echo $i;
              
//       // echo "<ul class='listBox'><li><input type='checkbox'></li><li><input type='text' name='' value='$result[$i]' class='mail-$i'></input></li><li><input type='text' name='' value='$result[$b]' class='mail-$b'></input></li><li><input type='text' name='' value='$result[$c]' class='mail-$c'></input></li> </ul>";
  
//       }


// }
    }



?>

      </div>

      <div class="stock-btns right mb40">
				<button type="button" class="plusRowBtn"><i class="ico-plus"></i>행삽입</button>
				<button type="button" class="delRowBtn"><i class="ico-minus"></i>행삭제</button>
			</div>


         <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    <?php } ?>

      <div class="btn_confirm submit_box">
         <input type="submit" value="확인" id="btn_submit" accesskey="s" class="btn_submit">
         <!-- <a href="../index.php" class="btn_cancel">취소</a> -->
      </div>

   </form>


<script>
  var lastRow = $(".estimate-stat-ul").last();
  var id = lastRow.attr('id');
  var num = parseInt(id);
  $('.plusRowBtn').click(function() {
    if(num>=15){
      alert("재고추가는 최대 15개까지 할 수 있습니다.");
      return;
    }

    num++;
    $(".estimate-stat-wrap").append("<ul id='"+num+"' class='estimate-stat-ul'><li><input type='text' class='dsi_input wr_"+num+"_1' name='wr_"+num+"_1' value=''></input></li><li><input type='text' class='dsi_input wr_"+num+"_2' name='wr_"+num+"_2' value=''></input></li><li><input type='text' class='dsi_input wr_"+num+"_3' name='wr_"+num+"_3' value=''></input></li><li><input type='text' class='dsi_input wr_"+num+"_4' name='wr_"+num+"_4' value=''></input></li><li><input type='text' class='dsi_input wr_"+num+"_5' name='wr_"+num+"_5' value=''></input></li><li><input type='text' class='dsi_input wr_"+num+"_6' name='wr_"+num+"_6' value=''></input></li><li><input type='text' class='dsi_input wr_"+num+"_7' name='wr_"+num+"_7' value=''></input></li><li><input type='text' class='dsi_input wr_"+num+"_8' name='wr_"+num+"_8' value=''></input></li></ul>");

  });
  $('.delRowBtn').click(function() {
    var lastRow = $(".estimate-stat-ul").last();
    num--;
    lastRow.remove();
  });
</script>