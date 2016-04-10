<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $head; ?>
</head>

<body>
<!--<div class="row">-->
<!--    <div class="col-md-2 side-nav-col" style="padding: 0;">-->
<!--        --><?php //echo $sidenav; ?>
<!--    </div>-->
<!--    <div class="col-md-10" style="margin: 0; padding: 0;">-->
<!--        --><?php //echo $nav ?>
<!---->
<!--        <div class="col-md-12" style="padding: 15px 30px;">-->
<!--            --><?php //echo $content; ?>
<!--        </div>-->
<!---->
<!--    </div>-->
<!--</div>-->
<!---->
<!--<div class="push"></div>-->



<div class="wrapper">

    <div id="wrapper">

        <div id="sidebar-wrapper">
            <?php echo $sidenav; ?>
        </div>
        <?php echo $nav ?>
        <div id="page-content-wrapper">

            <section class="container-fluid">


                <?php echo $content; ?>
            </section>
        </div>

    </div>

    <div class="push"></div>
</div>

</body>

</html>