<aside class="col-lg-3 aside border-end">
    <div class="card my-3">
        <div class="card-header">
            프로젝트단계
        </div>
        <div class="p-2">
            <div class="card-group">
                <?php custom_get_tax_list('project_state', 'fs-7 badge bg-primary m-1'); ?>
            </div>
        </div>
    </div>

    <div class="card my-3">
        <div class="card-header">
            공종
        </div>
        <div class="p-2">
            <div class="card-group">
                <?php custom_get_tax_list('system_type', 'fs-7 badge bg-secondary m-1'); ?>
            </div>
        </div>
    </div>

    <div class="card my-3">
        <div class="card-header">
            태그
        </div>
        <div class="p-2">
            <div class="tag-list">
                <?php wp_tag_cloud(array(
                    'smallest' => 11,
                    'largest' => 16,
                    'hide_empty' => false
                )); ?>
            </div>
        </div>
    </div>

    <div class="card my-3">
        <div class="fs-6 text-center card-header">
            이슈상태
        </div>
        <div class="p-2">
            <!-- <div class="tag-list d-flex flex-wrap justify-content-center"> -->
            <div class="card-group">
                <?php custom_get_issue_state_list(); ?>
            </div>
            <!-- </div> -->
        </div>
    </div>

    <div class="my-3">
        <?php dynamic_sidebar('sidebar2'); ?>
    </div>

</aside>