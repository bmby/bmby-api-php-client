<?php
namespace Bmbyhood\Entities;

class Customer extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'customer_id' => '',
            'bmby_project_id' => null,
            'bmby_client_id' => 0,
            'bmby_instance_id' => '',
            'agency_id' => '',
            'contact_id' => '',
            'contact' => '',
            'attributes' => null
        ];
    }

    /**
     * @param string $value
     */
    public function setCustomerId($value)
    {
        $this->fields['customer_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCustomerId()
    {
        return $this->fields['customer_id'];
    }

    /**
     * @param string $value
     */
    public function setBmbyInstanceId($value)
    {
        $this->fields['bmby_instance_id'] = $value;
    }
    /**
     * @return string
     */
    public function getBmbyInstanceId()
    {
        return $this->fields['bmby_instance_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyClientId($value)
    {
        $this->fields['bmby_client_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyClientId()
    {
        return $this->fields['bmby_client_id'];
    }

    /**
     * @param int $value
     */
    public function setBmbyProjectId($value)
    {
        $this->fields['bmby_project_id'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getBmbyProjectId()
    {
        return $this->fields['bmby_project_id'];
    }

    /**
     * @param string $value
     */
    public function setAgencyId($value)
    {
        $this->fields['agency_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getAgencyId()
    {
        return $this->fields['agency_id'];
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
    public function setCreationTime($value)
    {
        $this->fields['creation_time'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getCreationTime()
    {
        return $this->fields['creation_time'];
    }

    /**
     * @param string $value
     */
    public function setLastUpdateTime($value)
    {
        $this->fields['last_update_time'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getLastUpdateTime()
    {
        return $this->fields['last_update_time'];
    }

    /**
     * @param Contact $value
     */
    public function setContact(Contact $value)
    {
        $this->fields['contact'] = $value->toArray();
    }
    /**
     * @return Contact
     */
    public function geContact()
    {
        $contact = new Contact();
        $contact->setData($this->fields);
        return $contact;
    }
}