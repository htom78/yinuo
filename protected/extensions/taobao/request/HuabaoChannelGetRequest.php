<?php
/**
 * TOP API: taobao.huabao.channel.get request
 * 
 * @author auto create
 * @since 1.0, 2010-11-26 11:03:23.0
 */
class HuabaoChannelGetRequest
{
	/** 
	 * 频道Id
	 **/
	private $channelId;
	
	private $apiParas = array();
	
	public function setChannelId($channelId)
	{
		$this->channelId = $channelId;
		$this->apiParas["channel_id"] = $channelId;
	}

	public function getChannelId()
	{
		return $this->channelId;
	}

	public function getApiMethodName()
	{
		return "taobao.huabao.channel.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
}
