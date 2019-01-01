<?php
namespace Bmbyhood\Rest;

use Bmbyhood;

interface IPaginatedListResponse
{
    /**
     * @return boolean
     */
    public function hasNextPage();

    /**
     * @return boolean
     */
    public function hasPreviousPage();

    /**
     * @return boolean
     */
    public function isFirstPage();

    /**
     * @return boolean
     */
    public function isLastPage();

    /**
     * @return int
     */
    public function pageCount();

    /**
     * @return int
     */
    public function pageSize();

    /**
     * @return int
     */
    public function totalItemCount();

    /**
     * @return int
     */
    public function pageNumber();

    /**
     * @return array
     */
    public function items();
}