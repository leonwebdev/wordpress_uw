<form role="search" method="get" id="searchform" class="searchform" action="/" style="margin-bottom: 1rem;">
    <div>
        <label class="screen-reader-text" for="s">Search for:</label>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>

<h3>Categories</h3>
<?php wp_list_categories(['title_li' => '']); ?>
<h3>Archive</h3>
<?php wp_get_archives(['title_li' => '']); ?>