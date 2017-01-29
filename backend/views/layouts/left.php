<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/avatar5.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>
                    <?php
                    if (Yii::$app->user->isGuest) {
                        
                    } else {
                        echo Yii::$app->user->identity->username;
                    }
                    ?>
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <!--        <form action="#" method="get" class="sidebar-form">
                    <div class="input-group">
                        <input type="text" name="q" class="form-control" placeholder="Search..."/>
                      <span class="input-group-btn">
                        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div>
                </form>-->
        <!-- /.search form -->

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 'url' => ['/site']],
                        [
                            'label' => 'Master',
                            'icon' => 'fa fa-cog',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Satuan Kerja', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                                ['label' => 'Alamat', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                                ['label' => 'Pegawai', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                                ['label' => 'Dasar hukum', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                                ['label' => 'Pembebanan Anggaran', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                            ],
                        ],
                        ['label' => 'Surat Masuk', 'icon' => 'fa fa-envelope-open', 'url' => ['/site']],
                        ['label' => 'Surat Disposisi', 'icon' => 'fa fa-paper-plane', 'url' => ['/site']],
                        ['label' => 'Surat Keluar', 'icon' => 'fa fa-envelope', 'url' => ['/site']],
                        [
                            'label' => 'Template Surat',
                            'icon' => 'fa fa-book',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Surat Dinas', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                                ['label' => 'Sutar Tugas', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                                ['label' => 'Surat Perjadin', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                            ],
                        ],
                        [
                            'label' => 'CKP Online',
                            'icon' => 'fa fa-desktop',
                            'url' => '#',
                            'items' => [
                                ['label' => 'CKP Target', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                                ['label' => 'CKP Realisasi', 'icon' => 'fa fa-circle', 'url' => ['/login'],],
                            ],
                        ],
                        ['label' => 'Atur Pengguna', 'icon' => 'fa fa-users', 'url' => ['/site']],
//                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
//                    [
//                        'label' => 'Same tools',
//                        'icon' => 'fa fa-share',
//                        'url' => '#',
//                        'items' => [
//                            ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/site'],],
//                            ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/site'],],
//                            [
//                                'label' => 'Level One',
//                                'icon' => 'fa fa-circle-o',
//                                'url' => '#',
//                                'items' => [
//                                    ['label' => 'Level Two', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                    [
//                                        'label' => 'Level Two',
//                                        'icon' => 'fa fa-circle-o',
//                                        'url' => '#',
//                                        'items' => [
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                            ['label' => 'Level Three', 'icon' => 'fa fa-circle-o', 'url' => '#',],
//                                        ],
//                                    ],
//                                ],
//                            ],
//                        ],
//                    ],
                    ],
                ]
        )
        ?>

    </section>

</aside>
