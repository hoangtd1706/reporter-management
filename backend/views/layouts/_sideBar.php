<div class="nav">
    <a class="nav-link collapsed fs_s-16" href="#" data-toggle="collapse"
       data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="far fa-id-badge"></i></div>
        Quản lý phòng viên
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne"
         data-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link fs_s-14" href="<?php echo Yii::$app->homeUrl. 'category' ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-level-up-alt mr-2 rotate-90"></i>
                </div>
                Danh mục hồ sơ
            </a>

            <a class="nav-link fs_s-14" href="<?php echo Yii::$app->homeUrl. 'reporter' ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-level-up-alt mr-2 rotate-90"></i>
                </div>
                Thông tin phóng viên
            </a>

            <a class="nav-link fs_s-14" href="<?php echo Yii::$app->homeUrl. 'organization' ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-level-up-alt mr-2 rotate-90"></i>
                </div>
                Thông tin cơ quan
            </a>
        </nav>
    </div>

    <a class="nav-link collapsed fs_s-16" href="#" data-toggle="collapse"
       data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
        <div class="sb-nav-link-icon"><i class="far fa-id-badge"></i></div>
        Nộp hồ sơ
        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
         data-parent="#sidenavAccordion">
        <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link fs_s-14" href="<?php echo Yii::$app->homeUrl. 'reporterprofile' ?>">
                <div class="sb-nav-link-icon"><i class="fas fa-level-up-alt mr-2 rotate-90"></i>
                </div>
                Danh sách hồ sơ
            </a>

            <a class="nav-link collapsed fs_s-14" href="#" data-toggle="collapse"
               data-target="#collapseHoSo" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-level-up-alt mr-2 rotate-90"></i>
                </div>
                Hồ
                sơ cấp theo kỳ hạn
            </a>
            <div class="collapse bg__menu" id="collapseHoSo">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link fs_s-14" href="#"><i
                            class="fas fa-level-up-alt mr-2 rotate-90"></i>Cấp đổi theo kỳ hạn</a>
                    <a class="nav-link fs_s-14" href="<?php echo Yii::$app->homeUrl. 'reporterdetail' ?>"><i
                            class="fas fa-level-up-alt mr-2 rotate-90"></i>Cấp mới</a>
                    <a class="nav-link fs_s-14" href="#"><i
                            class="fas fa-level-up-alt mr-2 rotate-90"></i>Cấp đổi do chuyển cơ
                        quan</a>
                </nav>
            </div>

            <a class="nav-link fs_s-14" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-level-up-alt mr-2 rotate-90"></i>
                </div>
                Quản lý danh sách đề nghị
            </a>
        </nav>
    </div>
    <a class="nav-link fs_s-16" href="#">
        <div class="sb-nav-link-icon"><i class="fas fa-chalkboard-teacher"></i></i></div>
        Hướng dẫn
        sử dụng
    </a>

</div>