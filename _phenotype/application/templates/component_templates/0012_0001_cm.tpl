<div class="grid_8 no-padding">
{if $pages|@count ne 0 && $pages}
{foreach from=$pages item="p" name="output"}
<div class="grid_8"><h3 class="slide_btn{if $open eq 1 && $smarty.foreach.output.first} active{/if}"{if $accordion eq 1} data-link="{$id}"{/if}>{title_of_page pag_id=$p.id lng_id=$lng_id}</h3></div>
<div class="slide_content grid_8 no-padding{if $open eq 1 && $smarty.foreach.output.first} active{/if}"{if $accordion eq 1} data-link="{$id}"{/if}>
{foreach from=$p.content item="c"}
{$c}
{/foreach}
</div>
{/foreach}
{/if}
</div>