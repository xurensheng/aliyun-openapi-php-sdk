<?php

namespace Domain_intl\Request\V20171218;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of AcknowledgeTaskResult
 *
 * @method array getTaskDetailNos()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class AcknowledgeTaskResultRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'Domain-intl',
            '2017-12-18',
            'AcknowledgeTaskResult',
            'domain'
        );
    }

    /**
     * @param array $taskDetailNo
     *
     * @return $this
     */
    public function setTaskDetailNos(array $taskDetailNo)
    {
        $this->requestParameters['TaskDetailNos'] = $taskDetailNo;
        foreach ($taskDetailNo as $i => $iValue) {
            $this->queryParameters['TaskDetailNo.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        $this->requestParameters['UserClientIp'] = $userClientIp;
        $this->queryParameters['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
