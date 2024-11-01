<?php

/*
Plugin Name: Ultimate icons
Plugin Script: u-icons.php
Description: Shortcode icons easy to use anywhere in your blog http://ahmedag.com/plugins/ultimate-icons/
Version: 1.0
License: GPL 2.0
Author: AhmedAG
Author URI: http://www.ahmedag.com
*/

/*  Copyright 2012  AhmedAG  (email : me@ahmedag.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


function icfacebook($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Facebook.png" alt=".$text." />';  
    }  
	add_shortcode("icfacebook", "icfacebook"); 
        
		
   function ictwitter($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Twitter.png" alt=".$text." />';  
    }  
	add_shortcode("ictwitter", "ictwitter"); 
  
  
  
  function icgoogle($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Google.png" alt=".$text." />';  
    }  
	add_shortcode("icgoogle", "icgoogle"); 
  
		


function icaim($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/AIM.png" alt=".$text." />';  
    }  
	add_shortcode("icaim", "icaim"); 
	
function icappleping($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Apple-Ping.png" alt=".$text." />';  
    }  
	add_shortcode("icappleping", "icappleping"); 
	
function icapple($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Apple.png" alt=".$text." />';  
    }  
	add_shortcode("icapple", "icapple"); 
	
function icbehance($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Behance.png" alt=".$text." />';  
    }  
	add_shortcode("icbehance", "icbehance"); 
	
function icblogger($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Blogger.png" alt=".$text." />';  
    }  
	add_shortcode("icblogger", "icblogger"); 
	
function icdelicious($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Delicious.png" alt=".$text." />';  
    }  
	add_shortcode("icdelicious", "icdelicious"); 
		
function icdesignmoo($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/DesignMoo.png" alt=".$text." />';  
    }  
	add_shortcode("icdesignmoo", "icdesignmoo"); 
	
function icdeviantart($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/DeviantART.png" alt=".$text." />';  
    }  
	add_shortcode("icdeviantart", "icdeviantart"); 
		
function icdigg($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Digg.png" alt=".$text." />';  
    }  
	add_shortcode("icdigg", "icdigg"); 
	
function icdopplr($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Dopplr.png" alt=".$text." />';  
    }  
	add_shortcode("icdopplr", "icdopplr"); 
	
function icdribbble($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Dribbble.png" alt=".$text." />';  
    }  
	add_shortcode("icdribbble", "icdribbble"); 
	
function icember($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Ember.png" alt=".$text." />';  
    }  
	add_shortcode("icember", "icember"); 
	
function icevernote($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Evernote.png" alt=".$text." />';  
    }  
	add_shortcode("icevernote", "icevernote"); 
	 
	
function icforrst($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Forrst.png" alt=".$text." />';  
    }  
	add_shortcode("icforrst", "icforrst"); 
  
	
function icgowalla($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Gowalla.png" alt=".$text." />';  
    }  
	add_shortcode("icgowalla", "icgowalla"); 
	
function icgrooveshark($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Grooveshark.png" alt=".$text." />';  
    }  
	add_shortcode("icgrooveshark", "icgrooveshark"); 
	
function icilike($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/iLike.png" alt=".$text." />';  
    }  
	add_shortcode("icilike", "icilike"); 
	
function iclastfm($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Last.FM.png" alt=".$text." />';  
    }  
	add_shortcode("iclastfm", "iclastfm"); 
	
function iclinkedin($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Linkedin.png" alt=".$text." />';  
    }  
	add_shortcode("iclinkedin", "iclinkedin"); 
	
function icmixx($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Mixx.png" alt=".$text." />';  
    }  
	add_shortcode("icmixx", "icmixx"); 
	
function icmobileme($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/MobileMe.png" alt=".$text." />';  
    }  
	add_shortcode("icmobileme", "icmobileme"); 
	
function icmyspace($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Myspace.png" alt=".$text." />';  
    }  
	add_shortcode("icmyspace", "icmyspace"); 
	
function icnetvibes($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Netvibes.png" alt=".$text." />';  
    }  
	add_shortcode("icnetvibes", "icnetvibes"); 
	
function icopenid($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Open-ID.png" alt=".$text." />';  
    }  
	add_shortcode("icopenid", "icopenid"); 
	
function icorkut($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Orkut.png" alt=".$text." />';  
    }  
	add_shortcode("icorkut", "icorkut"); 
	
function icpaypal($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/PayPal.png" alt=".$text." />';  
    }  
	add_shortcode("icpaypal", "icpaypal"); 
	
function icplaystation($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Playstation.png" alt=".$text." />';  
    }  
	add_shortcode("icplaystation", "icplaystation"); 
	
function icplurk($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Plurk.png" alt=".$text." />';  
    }  
	add_shortcode("icplurk", "icplurk"); 
	
function icposterous($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Posterous.png" alt=".$text." />';  
    }  
	add_shortcode("icposterous", "icposterous"); 
	
function icreadernaut($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Readernaut.png" alt=".$text." />';  
    }  
	add_shortcode("icreadernaut", "icreadernaut"); 
	
function icreddit($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Reddit.png" alt=".$text." />';  
    }  
	add_shortcode("icreddit", "icreddit"); 
	
function icrss($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/RSS.png" alt=".$text." />';  
    }  
	add_shortcode("icrss", "icrss"); 
	
function icsharethis($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Share-This.png" alt=".$text." />';  
    }  
	add_shortcode("icsharethis", "icsharethis"); 
	
function icskype($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Skype.png" alt=".$text." />';  
    }  
	add_shortcode("icskype", "icskype"); 
	
function icsteam($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Steam.png" alt=".$text." />';  
    }  
	add_shortcode("icsteam", "icsteam"); 
	
function icstumbleupon($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Stumble-Upon.png" alt=".$text." />';  
    }  
	add_shortcode("icstumbleupon", "icstumbleupon"); 
	
function ictumblr($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Tumblr.png" alt=".$text." />';  
    }  
	add_shortcode("ictumblr", "ictumblr"); 
	
 
	
function icviddler($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Viddler.png" alt=".$text." />';  
    }  
	add_shortcode("icviddler", "icviddler"); 
	
		
function icvimeo($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Vimeo.png" alt=".$text." />';  
    }  
	add_shortcode("icvimeo", "icvimeo"); 
	
function icwordpress($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Wordpress.png" alt=".$text." />';  
    }  
	add_shortcode("icwordpress", "icwordpress"); 
	
function icyahoo($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Yahoo.png" alt=".$text." />';  
    }  
	add_shortcode("icyahoo", "icyahoo"); 
	
function icyelp($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Yelp.png" alt=".$text." />';  
    }  
	add_shortcode("icyelp", "icyelp"); 
	
function icyoutube($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Youtube.png" alt=".$text." />';  
    }  
	add_shortcode("icyoutube", "icyoutube"); 
	
function iczerply($atts, $content = null) {  
  		extract(shortcode_atts(array(    
        	"text" => 'none',
				), $atts));  
        return '<img src="/wp-content/plugins/ultimate-icons/images/vol1/Zerply.png" alt=".$text." />';  
    }  
	add_shortcode("iczerply", "iczerply"); 
	


        ?>