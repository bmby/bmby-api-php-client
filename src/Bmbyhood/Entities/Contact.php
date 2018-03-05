<?php
namespace Bmbyhood\Entities;


class Contact extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'contact_id' => '',
            'first_name' => '',
            'last_name' => '',
            'company_name' => '',
            'email' => '',
            'mobile' => '',
            'mobile2' => '',
            'phone' => '',
            'phone2' => '',
            'fax' => '',
            'fax2' => ''
        ];
    }

    /**
     * @param string $value
     */
    public function setContactId($value)
    {
        $this->fields['contact_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getContactId()
    {
        return $this->fields['contact_id'];
    }

    /**
     * @param string $value
     */
    public function setFirstName($value)
    {
        $this->fields['first_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->fields['first_name'];
    }

    /**
     * @param string $value
     */
    public function setLastName($value)
    {
        $this->fields['last_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->fields['last_name'];
    }

    /**
     * @param string $value
     */
    public function setCompanyName($value)
    {
        $this->fields['company_name'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->fields['company_name'];
    }

    /**
     * @param string $value
     */
    public function setEmail($value)
    {
        $this->fields['email'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->fields['email'];
    }

    /**
     * @param string $value
     */
    public function setMobile($value)
    {
        $this->fields['mobile'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->fields['mobile'];
    }

    /**
     * @param string $value
     */
    public function setMobile2($value)
    {
        $this->fields['mobile2'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getMobile2()
    {
        return $this->fields['mobile2'];
    }

    /**
     * @param string $value
     */
    public function setPhone($value)
    {
        $this->fields['phone'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->fields['phone'];
    }

    /**
     * @param string $value
     */
    public function setPhone2($value)
    {
        $this->fields['phone2'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPhone2()
    {
        return $this->fields['phone2'];
    }

    /**
     * @param string $value
     */
    public function setFax($value)
    {
        $this->fields['fax'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fields['fax'];
    }

    /**
     * @param string $value
     */
    public function setFax2($value)
    {
        $this->fields['fax2'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getFax2()
    {
        return $this->fields['fax2'];
    }

}