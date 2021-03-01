<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <li class="label">Main</li>
                <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                    <ul>
                        <li><a href="index.html">Dashboard</a></li>

                    </ul>
                </li>
                <?php
                if (($_SESSION['user_role_id'] == 3 || $_SESSION['user_role_id'] == 1)) { ?>
                    <li class="label">Collage</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-pencil-alt"></i>Management <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../collage/index.php">Collage</a></li>

                        </ul>
                    </li>
                <?php } ?>
                <?php
                if (($_SESSION['user_role_id'] == 2 || $_SESSION['user_role_id'] == 1)) { ?>
                    <li class="label">Company</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-cup"></i> Restaurant<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../company/index.php">Company</a></li>

                        </ul>
                    </li>
                <?php } ?>

                <?php
                if (($_SESSION['user_role_id'] == 4 || $_SESSION['user_role_id'] == 1)) { ?>

                    <li class="label">Student</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Charts <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../student/index.php">Student</a></li>


                        </ul>
                    </li>
                <?php } ?>
                <?php
                if (($_SESSION['user_role_id'] == 1)) { ?>
                    <li><a href="app-event-calender.html"><i class="ti-calendar"></i> Calender </a></li>

                    <li class="label">Features</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-layout"></i> UI Elements <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="../admin/index.php">Admin</a></li>

                        </ul>
                    </li>
                <?php } ?>

                <?php
                if (($_SESSION['user_role_id'] == 1) || $_SESSION['user_role_id'] == 2 || $_SESSION['user_role_id'] == 3 || $_SESSION['user_role_id'] == 4) { ?>
                    <li><a href="layouts/logout.php?logout=true"><i class="ti-close"></i> Logout</a></li>
            </ul>
        <?php } ?>
        </div>
    </div>
</div>
<!-- /# sidebar -->