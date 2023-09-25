<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
include_once(G5_LIB_PATH.'/mailer.lib.php');
$tosem1=$wr['wr_email'];
mailer($wr_3, $wr_email, $tosem1, "[이지창호산업 견적문의]답변 안내 메일입니다.", $content, 1);
// 작성자 / 작성자이메일 / 받는메일 / 제목 / 내용
?>