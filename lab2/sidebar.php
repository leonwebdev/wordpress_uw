<form role="search" method="get" id="searchform" class="searchform" action="/" style="margin-bottom: 4rem;">
    <div>
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>

<h3>Menu</h3>
<?php wp_nav_menu(['menu' => 'main']); ?>