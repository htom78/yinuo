<?php
/**
 * TOP API: taobao.wangwang.eservice.avgwaittime.get request
 * 
 * @author auto create
 * @since 1.0, 2010-12-08 14:21:38.0
 */
class WangwangEserviceAvgwaittimeGetRequest
{
	/** 
	 * 结束时间
	 **/
	private $endDate;
	
	/** 
	 * 客服人员id：cntaobao+淘宝nick，例如cntaobaotest
	 **/
	private $serviceStaffId;
	
	/** 
	 * 开始时间
	 **/
	private $startDate;
	
	private $apiParas = array();
	
	public function setEndDate($endDate)
	{
		$this->endDate = $endDate;
		$this->apiParas["end_date"] = $endDate;
	}

	public function getEndDate()
	{
		return $this->endDate;
	}

	public function setServiceStaffId($serviceStaffId)
	{
		$this->serviceStaffId = $serviceStaffId;
		$this->apiParas["service_staff_id"] = $serviceStaffId;
	}

	public function getServiceStaffId()
	{
		return $this->serviceStaffId;
	}

	public function setStartDate($startDate)
	{
		$this->startDate = $startDate;
		$this->apiParas["start_date"] = $startDate;
	}

	public function getStartDate()
	{
		return $this->startDate;
	}

	public function getApiMethodName()
	{
		return "taobao.wangwang.eservice.avgwaittime.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
}