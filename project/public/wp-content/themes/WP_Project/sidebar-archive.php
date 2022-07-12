<div class="mb-5">
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