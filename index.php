<?php
	
	require_once('lib/Phirehose.php');
	
	include('config.php');
	
	class MyStream extends Phirehose
	{
	  public function enqueueStatus($status)
	  {
	    print $status;
	  }
	}
	
	echo $twitter_user;
	
/*
	$stream = new MyStream('username', 'password');
	$stream->consume();
*/