<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>

                    <?php
                    $users = [
                        [
                            "image" => "img/demo/authors/sunny.png",
                            "usersname" => "Sunny A.",
                            "job" => "(UI/UX Expert)",
                            "role" => "Lead Author",
                            "twitter_href" => "https://twitter.com/@myplaneticket",
                            "twitter_account" => "@myplaneticket",
                            "email_link" => "https://wrapbootstrap.com/user/myorange",
                            'is_banned' => true
                        ],
                        [
                            "image" => "img/demo/authors/josh.png",
                            "usersname" => "Jos K.",
                            "job" => "(ASP.NET Developer)",
                            "role" => "Partner &amp; Contributor",
                            "twitter_href" => "https://twitter.com/@atlantez",
                            "twitter_account" => "@atlantez",
                            "email_link" => "https://wrapbootstrap.com/user/Walapa",
                            'is_banned' => false
                        ],
                        [
                            "image" => "img/demo/authors/jovanni.png",
                            "usersname" => "Jovanni L.",
                            "job" => "(PHP Developer)",
                            "role" => "Partner &amp; Contributor",
                            "twitter_href" => "https://twitter.com/@lodev09",
                            "twitter_account" => "@lodev09",
                            "email_link" => "https://wrapbootstrap.com/user/lodev09",
                            'is_banned' => false
                        ],
                        [
                            "image" => 'img/demo/authors/roberto.png',
                            "usersname" => 'Roberto R.',
                            "job" => '(Rails Developer)',
                            "role" => 'Partner &amp; Contributor',
                            "twitter_href" => 'https://twitter.com/@sildur',
                            "twitter_account" => '@sildur',
                            "email_link" => 'https://wrapbootstrap.com/user/sildur',
                            'is_banned' => true
                        ],

                    ];
                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php foreach($users as $user):?>
                           <div class=" d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                               <div class="<?php echo $user['is_banned'] ? "banned" : ""; ?> rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                               <img src="<?php echo $user['image'];?>" alt="<?php echo $user['usersname'];?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                               <div class="ml-2 mr-3">
                                   <h5 class="m-0">
                                       <?php echo $user['usersname'];?> <?php echo $user['job'];?>
                                       <small class="m-0 fw-300">
                                           <?php echo $user['role'];?>
                                       </small>
                                   </h5>
                                   <a href="<?php echo $user['twitter_href'];?>" class="text-info fs-sm" target="_blank"><?php echo $user['twitter_account'];?></a> -
                                   <a href="<?php echo $user['email_link'];?>" class="text-info fs-sm" target="_blank" title="Contact <?php echo $user['usersname'];?>"><i class="fal fa-envelope"></i></a>
                               </div>
                           </div>
                            <?php endforeach;?>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>