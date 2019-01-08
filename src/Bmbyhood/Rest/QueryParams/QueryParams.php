<?php

namespace Bmbyhood\Rest\QueryParams;


class QueryParams
{
    protected $params = [
        'page' => 1,
        'pageSize' => 10,
        'sortBy' => '',
        'sortDirection' => '',
        'keywords' => ''
    ];

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->params['page'];
    }
    /**
     * @param int $page
     */
    public function setPage($page)
    {
        $this->params['page'] = (int)$page;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->params['pageSize'];
    }
    /**
     * @param int $pageSize
     */
    public function setPageSize($pageSize)
    {
        $this->params['pageSize'] = (int)$pageSize;
    }

    public function toArray()
    {
        return $this->params;
    }

    public function __toString()
    {
        return \http_build_query($this->params);
    }
}