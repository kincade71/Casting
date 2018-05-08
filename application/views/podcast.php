<?php
header ("Content-Type:text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" xmlns:content="http://purl.org/rss/1.0/modules/content/">

	<channel>
		<title>Higher Way Ministries Suffolk Podcast</title>
		<itunes:subtitle>Come grow with us!</itunes:subtitle>
		<itunes:author>Higher Way Ministries Suffolk</itunes:author>
		<copyright>©Higher Way Ministries Suffolk </copyright>
		<itunes:category text="Religion &amp; Spirituality">
<itunes:category text="Christianity"/>
</itunes:category>
<language>en-us</language>
<itunes:image href="http://visithigherway.org/images/albumart.jpg" />
<link>http://visithigherway.org</link>
<description>Welcome to Higher Way Ministries Suffolk, where our doors are open to everyone and our hearts shut to no one.</description>
<itunes:type>serial</itunes:type>
<itunes:summary>Welcome to Higher Way Ministries Suffolk, where our doors are open to everyone and our hearts shut to no one.</itunes:summary>
<itunes:owner>
<itunes:name>WEBDMG</itunes:name>
<itunes:email>info@webdmg.com</itunes:email>
</itunes:owner>
<itunes:explicit>no</itunes:explicit>';
if(count($casts) > 0){
	foreach($casts as $cast){
		echo'<item>
		<itunes:episodeType>'.$cast['episodeType'].'</itunes:episodeType>
		<itunes:title>'.ucwords($cast['title']).'</itunes:title>
		<itunes:episode>'.$cast['episode'].'</itunes:episode>
		<itunes:season>'.$cast['season'].'</itunes:season>
		<title>'.ucwords($cast['title']).'</title>
		<itunes:subtitle>'.$cast['subtitle'].'</itunes:subtitle>
		<itunes:author>'.$cast['author'].'</itunes:author>
		<itunes:summary>'.$cast['summary'].'</itunes:summary>
		<description>'.$cast['summary'].'</description>
		<content:encoded>'.$cast['summary'].'</content:encoded>
		<enclosure url="http://visithigherway.org/casting/podcast/'.str_replace(' ','_',$cast['title']).'.mp3" length="'.$cast['enclosure_length'].'" type="audio/mp3" />
		<guid>http://visithigherway.org/podcast/'.$cast['season'].'/'.$cast['episode'].'</guid>
		<itunes:duration>'.$cast['duration'].'</itunes:duration>
		<itunes:keywords>'.$cast['keywords'].'</itunes:keywords>
		<pubDate>'.$cast['Date'].' EST</pubDate>
		<itunes:explicit>'.$cast['explicit'].'</itunes:explicit>
		</item>';
	};
};

echo '</channel>
</rss>';
