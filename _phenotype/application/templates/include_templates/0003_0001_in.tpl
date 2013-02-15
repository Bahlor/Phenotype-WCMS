{if $tree|@count ne 0 && $tree}
{#breadcrumb#}: {foreach from=$tree item="p" name="breadcrumb"}
<a href="{url_for_page pag_id=$p lng_id=$lng_id}" title="Go to {title_of_page pag_id=$p lng_id=$lng_id}">{title_of_page pag_id=$p lng_id=$lng_id}</a>{if !$smarty.foreach.breadcrumb.last} &raquo; {/if}
{/foreach}
{/if}