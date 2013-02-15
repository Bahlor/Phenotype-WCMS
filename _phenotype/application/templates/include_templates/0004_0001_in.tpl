{foreach from=$pages item="p"}
	<li{if $p.active} class="active"{/if}><a href="{url_for_page pag_id=$p.id lng_id=$lng_id}" title="Gehe zu {title_of_page pag_id=$p.id lng_id=$lng_id}">{title_of_page pag_id=$p.id lng_id=$lng_id}</a></li>
{/foreach}