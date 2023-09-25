<script>
  function checkItem(chk) {

    
  var chkmno = getCookie("chkmno"); 
  var arr_chkmno;
  var chk_value = trim(chk.value);
   
  if(chk.checked) {
    if(chkmno == "") 
      setCookie("chkmno",chk_value,1);
        else
          setCookie("chkmno",chkmno + "@DSI@" + chk_value ,1);
              
    } else {
        arr_chkmno = chkmno.split("@DSI@");
        chkmno = "";
        for(i=0;i<arr_chkmno.length;i++) {
            if(chk_value != arr_chkmno[i])
                if(chkmno == "")
                    chkmno = arr_chkmno[i];
                else
                    chkmno = chkmno + "@DSI@" + arr_chkmno[i];
        }
        setCookie("chkmno", chkmno, 1); 
    }
}


setCookie("chkmno", "", 1);


  //쿠키 함수 
  function setCookie(cookieName, value, exdays){
      var exdate = new Date();
      exdate.setDate(exdate.getDate() + exdays);
      var cookieValue = escape(value) + ((exdays==null) ? "" : "; expires=" + exdate.toGMTString());
      document.cookie = cookieName + "=" + cookieValue;
  }

  function deleteCookie(cookieName){
      var expireDate = new Date();
      expireDate.setDate(expireDate.getDate() - 1);
      document.cookie = cookieName + "= " + "; expires=" + expireDate.toGMTString();
  }

  function getCookie(cookieName) {
      cookieName = cookieName + '=';
      var cookieData = document.cookie;
      var start = cookieData.indexOf(cookieName);
      var cookieValue = '';
      if(start != -1){
          start += cookieName.length;
          var end = cookieData.indexOf(';', start);
          if(end == -1)end = cookieData.length;
          cookieValue = cookieData.substring(start, end);
      }
      return unescape(cookieValue);
  }
  <?php if($bo_table == "free_en") { ?>
    function Inquiry() {
    location.href='/bbs/write.php?bo_table=enEstimate02';
    }
  <?php } else {?>
    function Inquiry() {
    location.href='/bbs/write.php?bo_table=estimate02';
    }
    <?php } ?>


    setCookie("chkmno", "", 1);
</script>
<!-- checkbox cookie save -->
