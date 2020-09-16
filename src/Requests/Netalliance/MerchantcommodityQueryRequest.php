<?php
/**
 * 获取招商活动的商品
 *
 * @link: https://open.suning.com/ospos/apipage/toApiMethodDetailMenu.do?interCode=suning.netalliance.merchantcommodity.query
 *
 * User: Ken.Zhang <kenphp@yeah.net>
 * Date: 2019/9/22
 * Time: 21:01
 */
namespace SuningSDK\Requests\Netalliance;

use SuningSDK\Interfaces\Request;

class MerchantcommodityQueryRequest implements Request
{

    /**
     * 接口
     *
     * @var string
     */
    public $method = 'suning.netalliance.merchantcommodity.query';

    /**
     * 业务名称
     *
     * @var string
     */
    public $bizName = 'queryMerchantcommodity';

    /**
     * 请求方式
     *
     * @var string
     */
    public $requestType = 'post';

    private $pageNo;    // 页码

    private $pageSize;  // 每页条数

    private $activityId;// 活动id

    private $adBookId;  // 推广位id

    private $apiParams = [];


    public function setPageNo($val)
    {
        $this->pageNo = (int)$val;
        $this->apiParams['pageNo'] = (int)$val;
    }

    public function setPageSize($val)
    {
        $this->pageSize = (int)$val;
        $this->apiParams['pageSize'] = (int)$val;
    }

    public function setActivityId($val)
    {
        $this->activityId = (string)$val;
        $this->apiParams['activityId'] = (string)$val;
    }

    public function setAdBookId($val)
    {
        $this->adBookId = (string)$val;
        $this->apiParams['adBookId'] = (string)$val;
    }

    /**
     * 获取参数
     */
    public function getParams()
    {
        return $this->apiParams;
    }

}