<?php
/**
 * TOP API: taobao.fenxiao.products.get request
 * 
 * @author auto create
 * @since 1.0, 2010-08-04 18:40:15.0
 */
class FenxiaoProductsGetRequest
{
	/** 
	 * 结束修改时间
	 **/
	private $endModified;
	
	/** 
	 * 指定查询额外的信息，可选值：skus（sku数据）、images（多图），多个可选值用逗号分割。
	 **/
	private $fields;
	
	/** 
	 * 商家编码
	 **/
	private $outerId;
	
	/** 
	 * 页码（大于0的整数，默认1）
	 **/
	private $pageNo;
	
	/** 
	 * 每页记录数（默认20，最大50）
	 **/
	private $pageSize;
	
	/** 
	 * 产品ID列表（最大限制30），用逗号分割，例如：“1001,1002,1003,1004,1005”
	 **/
	private $pids;
	
	/** 
	 * 产品线ID
	 **/
	private $productcatId;
	
	/** 
	 * 开始修改时间
	 **/
	private $startModified;
	
	/** 
	 * 产品状态，可选值：up（上架）、down（下架），不传默认查询所有
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

	public function setFields($fields)
	{
		$this->fields = $fields;
		$this->apiParas["fields"] = $fields;
	}

	public function getFields()
	{
		return $this->fields;
	}

	public function setOuterId($outerId)
	{
		$this->outerId = $outerId;
		$this->apiParas["outer_id"] = $outerId;
	}

	public function getOuterId()
	{
		return $this->outerId;
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

	public function setPids($pids)
	{
		$this->pids = $pids;
		$this->apiParas["pids"] = $pids;
	}

	public function getPids()
	{
		return $this->pids;
	}

	public function setProductcatId($productcatId)
	{
		$this->productcatId = $productcatId;
		$this->apiParas["productcat_id"] = $productcatId;
	}

	public function getProductcatId()
	{
		return $this->productcatId;
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
		return "taobao.fenxiao.products.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
}
