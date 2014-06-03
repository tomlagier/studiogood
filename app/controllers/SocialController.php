<?php

use \OAuth\ServiceFactory;
use \OAuth\Common\Http\Uri\UriFactory;
use OAuth\OAuth1\Service\Twitter;
use OAuth\Common\Storage\Session;
use OAuth\Common\Consumer\Credentials;
use OAuth\OAuth1\Token\StdOAuth1Token;


class SocialController extends BaseController {

	public function getFacebook()
	{
		$appId = Config::get('social.facebook.app_id');
		$appSecret = Config::get('social.facebook.app_secret');		
		$profileId = Config::get('social.facebook.profile_id');
		
		$authToken = $this->fetchUrl("https://graph.facebook.com/oauth/access_token?grant_type=client_credentials&client_id={$appId}&client_secret={$appSecret}");
		$facebookFeed = $this->fetchUrl("https://graph.facebook.com/{$profileId}/feed?{$authToken}");

		return $facebookFeed;
	}
  
	public function getTwitter()
	{
		$storage = new Session();

		$credentials = new Credentials(
			Config::get('social.twitter.client_key'),
			Config::get('social.twitter.client_secret'),
			'http://google.com'
		);

		$serviceFactory = new ServiceFactory();
		$uriFactory = new UriFactory();
		$currentUri = $uriFactory->createFromSuperGlobalArray($_SERVER);
		$currentUri->setQuery('');

		$twitterService = $serviceFactory->createService('twitter', $credentials, $storage);
        $token = new StdOAuth1Token(Config::get('social.twitter.auth_token'));
		$token->setAccessTokenSecret(Config::get('social.twitter.auth_token_secret'));
		$twitterService->getStorage()->storeAccessToken('Twitter', $token);
	    $twitterFeed = $twitterService->request('https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=StudioGood');

	    return $twitterFeed;
	}

	public function getInstagram()
	{
		$profileId = Config::get('social.instagram.profile_id');
		$clientId = Config::get('social.instagram.client_id');

		$instagramFeed = $this->fetchUrl("https://api.instagram.com/v1/users/{$profileId}/media/recent/?client_id={$clientId}");

		return $instagramFeed;
	}

	//Shortcut for OAuth
	function fetchUrl($url){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		// You may need to add the line below
		// curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);

		$feedData = curl_exec($ch);
		curl_close($ch); 

		return $feedData;
	}

}