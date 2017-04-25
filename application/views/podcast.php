<?php
header ("Content-Type:text/xml");

echo '<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">

	<channel>
		<title>Higher Way Suffolk Podcast</title>
		<itunes:subtitle></itunes:subtitle>
		<itunes:author></itunes:author>
		<copyright>©Higherway Suffolk </copyright>
		<itunes:category text="Religion &amp; Spirituality">
<itunes:category text="Christianity"/>
</itunes:category>
<language>en-us</language>
<itunes:image href="http://" />
<link>http://www.higherwaysuffolk.org/</link>
<description></description>
<itunes:summary></itunes:summary>
<itunes:owner>
<itunes:name>WEBDMG</itunes:name>
<itunes:email>info@webdmg.com</itunes:email>
</itunes:owner>
<itunes:explicit>no</itunes:explicit>';
if(count($casts) > 0){
	foreach($casts as $cast){
		echo'<item>
		<title>'.$cast['title'].'</title>
		<itunes:subtitle>'.$cast['subtitle'].'</itunes:subtitle>
		<itunes:author>'.$cast['author'].'</itunes:author>
		<itunes:summary>'.$cast['summary'].'</itunes:summary>
		<enclosure url="http://visithigherway.org/casting/podcast/'.str_replace(' ','_',$cast['title']).'.mp3" length="'.$cast['enclosure_length'].'" type="audio/mp3" />
		<guid>http://visithigherway.org/casting/podcast/'.str_replace(' ','_',$cast['title']).'.mp3</guid>
		<itunes:duration>'.$cast['duration'].'</itunes:duration>
		<itunes:keywords>'.$cast['keywords'].'</itunes:keywords>
		<pubDate>'.$cast['Date'].' EST</pubDate>
		<itunes:explicit>'.$cast['explicit'].'</itunes:explicit>
		</item>';
	};
};

echo '</channel>
</rss>';
