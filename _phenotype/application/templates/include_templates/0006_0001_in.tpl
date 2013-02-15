<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel>
		<title>Phenotype News RSS</title>
		<description>Basic phenotype news rss feed</description>
		<language>de-de</language>
		<link>{pt_constant value="SERVERFULLURL"}rss/</link>
		<atom:link href="{pt_constant value="SERVERFULLURL"}rss/" rel="self" type="application/rss+xml" />
		<lastBuildDate>{$last|date_format:"%a, %d %b %Y %H:%M:%S"} EST</lastBuildDate>
		{foreach from=$presse item="p"}
		<item>
			<title>{$p.date|date_format:"%d.%m.%Y"} - {$p.headline}</title>
			<description>{$p.desc}</description>
			<link>{pt_constant value="SERVERFULLURL"}{url_for_page pag_id=15}</link>
			<pubDate>{$p.date|date_format:"%a, %d %b %Y %H:%M:%S"} EST</pubDate>
			<guid>{pt_constant value="SERVERFULLURL"}{url_for_page pag_id=15}{$p.id}</guid>
		</item>
		{/foreach}
	</channel>
</rss>