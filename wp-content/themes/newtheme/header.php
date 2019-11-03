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
            <div class="overlay social-icons">
                <a href="https://www.linkedin.com/in/thanh-nguyen-chi-52112aa2/" class="icon-button linkedin"><i class="fab fa-linkedin-in"></i><span></span></a><br>
                <a href="https://www.xing.com/profile/Thanh_Nguyen135" class="icon-button xing"><i class="fab fa-xing"></i><span></span></a><br>
                <a href="mailto:chithanh1811@live.com" class="icon-button email"><i class="fas fa-envelope"></i><span></span></a><br>
            </div>
            <div class="overlay scroll">
                <i class="fas fa-chevron-down down"></i>
                <i class="fas fa-chevron-up up" hidden></i>
            </div>
        </header>