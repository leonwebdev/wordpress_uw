<div class="mb-5">
    <form role="search" method="get" id="searchform" class="searchform" action="/" style="margin-bottom: 1rem;">
        <div class="container row align-items-center mx-0">
            <input type="text" value="" name="s" id="s" class="col flex-grow-1 me-3" />
            <button type="submit" id="searchsubmit" class="btn btn-primary col flex-grow-0">Search</button>
        </div>
    </form>
    <div class="p-3 home_card_h mb-4">
        <h2 class="home_card_h">Categories</h2>
    </div>
    <ul class="archive_menu">
        <?php wp_list_categories(['title_li' => '']); ?></ul>
    <div class="p-3 home_card_h mb-4">
        <h2 class="home_card_h">Archive</h2>
    </div>
    <ul class="archive_menu">
        <?php wp_get_archives(['title_li' => '']); ?></ul>

</div>