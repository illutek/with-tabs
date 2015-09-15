<div class="col-lg-12 col-md-12 main-content">
                    <?php // print $breadcrumb; ?>
                    <a id="main-content"></a>
                    <?php if ($tabs): ?>
                    <div id="tabs-wrapper" class="clearfix"><?php endif; ?>
                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?>
                            <h1<?php print $tabs ? ' class="with-tabs eigen-class"' : '' ?>><?php print $title ?></h1>
                        <?php endif; ?>
                        <?php print render($title_suffix); ?>
                        <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
                    <?php print render($tabs2); ?>
                    <?php print $messages; ?>
                    <?php print render($page['help']); ?>
                    <?php if ($action_links): ?>
                        <ul class="action-links">
                            <?php print render($action_links); ?>
                        </ul>
                    <?php endif; ?>
                    <div class="clearfix">
                        <?php print render($page['content']); ?>
                    </div>
                </div>