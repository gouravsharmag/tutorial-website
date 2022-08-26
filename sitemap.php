<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://www.apnatutorial.com";
include "connection.php";
$conn=DbConnection();

$sitemapText = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
      <loc>http://www.apnatutorial.com/</loc>
      <changefreq>daily</changefreq>
      <priority>1.00</priority>
    </url>
    ';

$sql = "SELECT name,topic_name FROM `post` join tutorial on post.tutorial_name=tutorial.id;";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $topic = str_replace(' ', '-', strtolower($row['topic_name']));  
    $sitemapText .= ' <url>
                    <loc>'.$actual_link."/content/".$row['name'].'-'.$topic.'</loc>
                    <changefreq>daily</changefreq>
                    <priority>0.80</priority>
                </url>';
   }
$sql = "SELECT blog_name FROM `blog`";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){
    $topic = str_replace(' ', '-', strtolower($row['blog_name']));  
    $sitemapText .= ' <url>
                    <loc>'.$actual_link."/blog-content/".$topic.'</loc>
                    <changefreq>daily</changefreq>
                    <priority>0.80</priority>
                </url>';
    }
   
$sitemapText .= '</urlset>';

$sitemap = fopen("sitemap.xml", "w") or die("Unable to open file!");

fwrite($sitemap, $sitemapText);
fclose($sitemap);

?>