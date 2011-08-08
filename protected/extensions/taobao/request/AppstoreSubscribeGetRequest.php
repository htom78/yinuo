<?php
/**
 * TOP API: taobao.appstore.subscribe.get request
 * 
 * @author auto create
 * @since 1.0, 2010-07-27 14:43:11.0
 */
class AppstoreSubscribeGetRequest
{
	/** 
	 * 插件实例ID
	 **/
	private $leaseId;
	
	/** 
	 * 用户昵称
	 **/
	private $nick;
	
	private $apiParas = array();
	
	public function setLeaseId($leaseId)
	{
		$this->leaseId = $leaseId;
		$this->apiParas["lease_id"] = $leaseId;
	}

	public function getLeaseId()
	{
		return $this->leaseId;
	}

	public function setNick($nick)
	{
		$this->nick = $nick;
		$this->apiParas["nick"] = $nick;
	}

	public function getNick()
	{
		return $this->nick;
	}

	public function getApiMethodName()
	{
		return "taobao.appstore.subscribe.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
}
