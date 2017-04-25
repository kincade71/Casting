<?php
header ("Content-Type:text/xml");

echo '<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">

	<channel>
		<title></title>
		<itunes:subtitle></itunes:subtitle>
		<itunes:author></itunes:author>
		<copyright>©</copyright>
		<itunes:category text="">
<itunes:category text=""/>
</itunes:category>
<language>en-us</language>
<itunes:image href="http://" />
<link>http://</link>
<description></description>
<itunes:summary></itunes:summary>
<itunes:owner>
<itunes:name></itunes:name>
<itunes:email></itunes:email>
</itunes:owner>
<itunes:explicit>no</itunes:explicit>';
if(count($casts) > 0){
	foreach($casts as $cast){
		echo'<item>
		<title>'.$cast['title'].'</title>
		<itunes:subtitle>'.$cast['subtitle'].'</itunes:subtitle>
		<itunes:author>'.$cast['author'].'</itunes:author>
		<itunes:summary>'.$cast['summary'].'</itunes:summary>
		<enclosure url="'.str_replace(' ','_',$cast['title']).'.mp3" length="'.$cast['enclosure_length'].'" type="audio/mp3" />
		<guid>'.str_replace(' ','_',$cast['title']).'.mp3</guid>
		<itunes:duration>'.$cast['duration'].'</itunes:duration>
		<itunes:keywords>'.$cast['keywords'].'</itunes:keywords>
		<pubDate>'.$cast['Date'].' EST</pubDate>
		<itunes:explicit>'.$cast['explicit'].'</itunes:explicit>
		</item>';
	};
};

echo '</channel>
</rss>';
