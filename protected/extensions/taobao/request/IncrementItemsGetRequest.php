<?php
/**
 * TOP API: taobao.increment.items.get request
 * 
 * @author auto create
 * @since 1.0, 2010-12-23 15:16:07.0
 */
class IncrementItemsGetRequest
{
	/** 
	 * 消息所对应的操作时间的最大值。和start_modified搭配使用能过滤消通知消息的时间段。不传时：如果设置了start_modified，默认为与start_modified同一天的23:59:59；否则默认为调用接口当天的23:59:59。（格式：yyyy-MM-dd HH:mm:ss）
	 **/
	private $endModified;
	
	/** 
	 * 消息所属于的用户的昵称。设置此参数，返回的消息会根据传入nick的进行过滤。自用型AppKey的昵称默认为自己的绑定昵称，此参数无效。
	 **/
	private $nick;
	
	/** 
	 * 页码。取值范围:大于零的整数; 默认值:1,即返回第一页数据。
	 **/
	private $pageNo;
	
	/** 
	 * 每页条数。取值范围:大于零的整数;最大值:200;默认值:40。
	 **/
	private $pageSize;
	
	/** 
	 * 消息所对应的操作时间的最小值。和end_modified搭配使用能过滤消通知消息的时间段。不传时：如果设置了end_modified，默认为与 end_modified同一天的00:00:00，否则默认为调用接口当天的00:00:00。（格式：yyyy-MM-dd HH:mm:ss）
	 **/
	private $startModified;
	
	/** 
	 * 商品操作状态，默认查询所有状态的数据，除了默认值外每次只能查询一种状态。具体类型列表见：
ItemAdd（新增商品） 
ItemUpshelf（上架商品） 
ItemDownshelf（下架商品） 
ItemDelete（删除商品） 
ItemUpdate（更新商品） 
ItemRecommendDelete（取消橱窗推荐商品） 
ItemRecommendAdd（橱窗推荐商品） 
ItemZeroStock（商品卖空）
	 **/
	private $status;
	
	private $apiParas = array();
	
	public function setEndModified($endModified)
	{
		$this->endModified = $endModified;
		$this->apiParas["end_modified"] = $endModified;
	}

	public function getEndModified()
	{
		return $this->endModified;
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

	public function setPageNo($pageNo)
	{
		$this->pageNo = $pageNo;
		$this->apiParas["page_no"] = $pageNo;
	}

	public function getPageNo()
	{
		return $this->pageNo;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["page_size"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setStartModified($startModified)
	{
		$this->startModified = $startModified;
		$this->apiParas["start_modified"] = $startModified;
	}

	public function getStartModified()
	{
		return $this->startModified;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		$this->apiParas["status"] = $status;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getApiMethodName()
	{
		return "taobao.increment.items.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
}
