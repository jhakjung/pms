<div class="col-lg-9">
    <div class="page-header">

        <?php
        if (is_home()) {
            $title = "전체 글";
        // } elseif (is_tax() || is_category() || is_tag() ) {
        } elseif (is_archive()) {
            if (is_category()) {
                $title = custom_get_the_archive_title();
                $title = str_replace('카테고리', '메뉴', $title);
            } else {
                $title = custom_get_the_archive_title();
            }
        } else {
            echo "not taxonomy page";
        }

        // echo $page_header_title;
        // echo $title;
        echo "【 ". $title . " 】";
        ?>
    </div>