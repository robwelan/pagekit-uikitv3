<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= $view->render('head') ?>
        <?php $view->style('custom-uikit', 'theme:css/uikit.min.css') ?>
        <?php $view->style('theme', 'theme:css/theme.css') ?>
        <?php $view->script('theme-jquery', 'theme:js/jquery-3.2.1.min.js') ?>
        <?php $view->script('theme-uikit', 'theme:js/uikit.min.js', 'theme-jquery') ?>
        <?php $view->script('theme-uikit-icons', 'theme:js/uikit-icons.min.js', 'theme-uikit') ?>
        <?php $view->script('theme', 'theme:js/theme.js', 'theme-uikit-icons') ?>
    </head>
    <body>

        <nav class="uk-navbar-container uk-position-z-index" uk-navbar <?= $params['navbar_sticky'] ? ' data-uk-sticky' : '' ?>>

            <!-- Render logo or title with site URL -->
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="<?= $view->url()->get() ?>">
                    <?php if ($logo = $params['logo']) : ?>
                        <img src="<?= $this->escape($logo) ?>" alt="">
                    <?php else : ?>
                        <?= $params['title'] ?>
                    <?php endif ?>
                </a>
            </div>

            <!-- Render menu position -->
            <?php if ($view->menu()->exists('main')) : ?>
                <div class="uk-navbar-right">
                    <?= $view->menu('main', 'menu-navbar.php') ?>
                </div>
            <?php endif ?>
        </nav>

        <?php if ($view->position()->exists('top')) : ?>
            <div id="top" class="tm-top uk-block <?= $params['top_style'] ?>">
                <div class="uk-container uk-container-center">

                    <section class="uk-grid uk-grid-match" data-uk-grid-margin>
                        <?= $view->position('top', 'position-grid.php') ?>
                    </section>

                </div>
            </div>
        <?php endif ?>

        <div id="tm-main" class="tm-main uk-block">
            <div class="uk-container uk-container-center">

                <div class="uk-grid" data-uk-grid-match data-uk-grid-margin>

                    <main class="<?= $view->position()->exists('sidebar') ? 'uk-width-medium-3-4' : 'uk-width-1-1'; ?>">

                        <!-- Render content -->
                        <?= $view->render('content') ?>

                    </main>

                    <?php if ($view->position()->exists('sidebar')) : ?>
                    <aside class="uk-width-medium-1-4">
                        <?= $view->position('sidebar') ?>
                    </aside>
                    <?php endif; ?>

                </div>

            </div>
        </div>

        <!-- ADD to-top-scroller -->
        <div class="uk-text-center">
           <a href="#up" uk-scroll uk-icon="icon: chevron-up" alt="Scroll Up"></a>
        </div>

        <!-- Insert code before the closing body tag  -->
        <?= $view->render('footer') ?>

    </body>
</html>
