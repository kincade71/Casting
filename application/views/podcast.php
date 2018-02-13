<?php
header ("Content-Type:text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:content="http://purl.org/rss/1.0/modules/content/">

	<channel>
		<title></title>
		<itunes:subtitle></itunes:subtitle>
		<itunes:author></itunes:author>
		<copyright>©</copyright>
		<itunes:category text="">
<itunes:category text=""/>
</itunes:category>
<language>en-us</language>
<itunes:image href="" />
<link></link>
<description></description>
<itunes:type>serial</itunes:type>
<itunes:summary></itunes:summary>
<itunes:owner>
    <itunes:name></itunes:name>
    <itunes:email></itunes:email>
</itunes:owner>
<itunes:explicit>no</itunes:explicit>';
if(count($casts) > 0){
	foreach($casts as $cast){
		echo'<item>
		<itunes:episodeType>full</itunes:episodeType>
		<itunes:title></itunes:title>
		<itunes:episode></itunes:episode>
		<itunes:season></itunes:season>
		<title></title>
		<itunes:subtitle></itunes:subtitle>
		<itunes:author></itunes:author>
		<itunes:summary></itunes:summary>
		<description></description>
		<content:encoded></content:encoded>
		<enclosure url="" length="" type="audio/mp3" />
		<guid></guid>
		<itunes:duration></itunes:duration>
		<itunes:keywords></itunes:keywords>
		<pubDate></pubDate>
		<itunes:explicit></itunes:explicit>
		</item>';
	};
};

echo '</channel>
</rss>';
