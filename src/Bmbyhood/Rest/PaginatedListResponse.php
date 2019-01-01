<?php
namespace Bmbyhood\Rest;

use Bmbyhood;

class PaginatedListResponse extends RestResponse implements IPaginatedListResponse
{

    /**
     * @return boolean
     */
    public function hasNextPage()
    {
        return isset($this->response['hasNextPage']) ? boolval($this->response['hasNextPage']) : false;
    }

    /**
     * @return boolean
     */
    public function hasPreviousPage()
    {
        return isset($this->response['hasPreviousPage']) ? boolval($this->response['hasPreviousPage']) : false;
    }

    /**
     * @return boolean
     */
    public function isFirstPage()
    {
        return isset($this->response['isFirstPage']) ? boolval($this->response['isFirstPage']) : false;
    }

    /**
     * @return boolean
     */
    public function isLastPage()
    {
        return isset($this->response['isLastPage']) ? boolval($this->response['isLastPage']) : false;
    }

    /**
     * @return int
     */
    public function pageCount()
    {
        return isset($this->response['pageCount']) ? intval($this->response['pageCount']) : 0;
    }

    /**
     * @return int
     */
    public function pageSize()
    {
        return isset($this->response['pageSize']) ? intval($this->response['pageSize']) : 0;
    }

    /**
     * @return int
     */
    public function totalItemCount()
    {
        return isset($this->response['totalItemCount']) ? intval($this->response['totalItemCount']) : 0;
    }

    /**
     * @return int
     */
    public function pageNumber()
    {
        return isset($this->response['pageNumber']) ? intval($this->response['pageNumber']) : 0;
    }

    /**
     * @return array
     */
    public function items()
    {
        return isset($this->response['items']) && is_array($this->response['items']) ? $this->response['items'] : [];
    }
}

?>