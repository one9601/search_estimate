<?php
            if ($_SESSION["ss_mb_id"] == "admin") {
                $sql = "UPDATE g5_write_qna SET admin_check='checked' WHERE wr_id={$wr_id}";
                sql_query($sql);
            }
            ?>