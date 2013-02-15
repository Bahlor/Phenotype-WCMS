{foreach from=$pages item="p"}
	<li{if $p.active} class="active"{/if}><a href="{url_for_page pag_id=$p.id lng_id=$lng_id}" title="Gehe zu {title_of_page pag_id=$p.id lng_id=$lng_id}">{title_of_page pag_id=$p.id lng_id=$lng_id}</a>
	{if $p.subs|@count ne 0}
	<ul>
	{foreach from=$p.subs item="s" name="subs"}
		<li class="{if $s.active}active{/if}{if $smarty.foreach.subs.last} last{/if}"><a href="{url_for_page pag_id=$s.id lng_id=$lng_id}" title="Gehe zu {title_of_page pag_id=$s.id lng_id=$lng_id}">{title_of_page|replace:" ":"&nbsp;" pag_id=$s.id lng_id=$lng_id}</a></li>	
	{/foreach}
	</ul>
	{/if}
	</li>
{/foreach}