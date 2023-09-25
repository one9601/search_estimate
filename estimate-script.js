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
