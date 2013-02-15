<div class="gallery grid_8">
{if $headline}<h4>{$gal.name}</h4>{/if}
{if $desc}<p>{$gal.desc}</p>{/if}
<div class="images">
{if $gal.img|@count ne 0 && $gal.img}
{foreach from=$gal.img item="i"}
<a href="{$i.6}" class="lightbox" rel="gallery{$gal.id}" title="{$i.0}"><img src="{$i.2}" width="120" /></a>
{/foreach}
{/if}
</div>
</div>