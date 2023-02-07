        </section> <!-- End main-section section -->
    </div> <!-- Main container End div -->

    <footer class="container container-footer">
        <div class="row">
            <div class="col-md-4">
                <h1><?php $menu = wp_get_nav_menu_name('footer1'); echo $menu; ?></h1>
                <ul>
                    <?php
                        $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['footer1'];
                        $footerNav = wp_get_nav_menu_items($menuID);
                        if (!empty($footerNav)) {
                            foreach ($footerNav as $navItem) {
                                echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                            }
                        }
                    ?>
                </ul>
            </div>
            <div class="col-md-4">
                <h1><?php $menu = wp_get_nav_menu_name('footer2'); echo $menu; ?></h1>
                <ul>
                    <?php
                        $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['footer2'];
                        $footerNav = wp_get_nav_menu_items($menuID);
                        if (!empty($footerNav)) {
                            foreach ($footerNav as $navItem) {
                                echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                            }
                        }
                    ?>
                </ul>
            </div>
            <div class="col-md-4">
                <h1><?php $menu = wp_get_nav_menu_name('footer3'); echo $menu; ?></h1>
                <ul>
                    <?php
                        $menuLocations = get_nav_menu_locations();
                        $menuID = $menuLocations['footer3'];
                        $footerNav = wp_get_nav_menu_items($menuID);
                        if (!empty($footerNav)) {
                            foreach ($footerNav as $navItem) {
                                echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
                            }
                        }
                    ?>
                </ul>
            </div>

        </div>
        <div id="copyright">Copyright &copy; <?php echo date('Y'); ?> Richmond Hill Martial Arts</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
</body>
</html>