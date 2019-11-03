<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();?>
    </head>
    <body <?php body_class();?>>
        <header>
            <div class="">
                <?php wp_nav_menu(
                array(
                'theme_location' => 'top-menu',
                'container_class' => 'nav-menu'
                )
                );?>
            </div>
            <div class="overlay" style="right: 0; bottom: 0;">
                <a href="https://www.linkedin.com/in/thanh-nguyen-chi-52112aa2/" class="icon-button linkedin"><i class="fab fa-linkedin-in"></i></a><br>
                <a href="https://www.xing.com/profile/Thanh_Nguyen135" class="icon-button xing"><i class="fab fa-xing"></i></a><br>
                <a href="mailto:chithanh1811@live.com" class="icon-button email"><i class="fas fa-envelope"></i></a><br>
            </div>
            <div class="overlay scroll">
                <i class="fas fa-chevron-down down"></i>
                <a href="javascript:scrollToAnchor('#home')"><i class="fas fa-chevron-up up" hidden></i></a>
            </div>
        </header>