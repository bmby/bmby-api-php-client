<?php
namespace Bmbyhood\Entities;

class PortalStats extends BmbyhoodEntity
{
    public function __construct()
    {
        $this->fields = [
            'portal_id' => '',
            'bmby_client_id' => 0,
            'customer_id' => '',
            'creation_time' => '',
            'last_visit_time' => NULL,
            'last_activity_time' => NULL,
            'invitation_time' => NULL,
            'matches' => 0,
            'likes' => 0,
            'dislikes' => 0,
            'not_sure' => 0,
            'signed' => 0
        ];
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
     * @param string $value
     */
    public function setPortalId($value)
    {
        $this->fields['portal_id'] = (string)$value;
    }
    /**
     * @return string
     */
    public function getPortalId()
    {
        return $this->fields['portal_id'];
    }

    /**
     * @param string $value
     */
    public function setCreationTime($value)
    {
        $this->fields['creation_time'] = (string)$value;
    }
    /**
     * @return string UTC datetime
     */
    public function getCreationTime()
    {
        return $this->fields['creation_time'];
    }

    /**
     * @param string $value
     */
    public function setLastVisitTime($value)
    {
        $this->fields['last_visit_time'] = (string)$value;
    }
    /**
     * @return string UTC datetime
     */
    public function getLastVisitTime()
    {
        return $this->fields['last_visit_time'];
    }

    /**
     * @param string $value
     */
    public function setLastActivityTime($value)
    {
        $this->fields['last_activity_time'] = (string)$value;
    }
    /**
     * @return string UTC datetime
     */
    public function getLastActivityTime()
    {
        return $this->fields['last_activity_time'];
    }

    /**
     * @param string $value
     */
    public function setInvitationTime($value)
    {
        $this->fields['invitation_time'] = (string)$value;
    }
    /**
     * @return string UTC datetime
     */
    public function getInvitationTime()
    {
        return $this->fields['invitation_time'];
    }

    /**
     * @param int $value
     */
    public function setMatches($value)
    {
        $this->fields['matches'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getMatches()
    {
        return $this->fields['matches'];
    }

    /**
     * @param int $value
     */
    public function setLikes($value)
    {
        $this->fields['likes'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getLikes()
    {
        return $this->fields['likes'];
    }

    /**
     * @param int $value
     */
    public function setDislikes($value)
    {
        $this->fields['dislikes'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getDislikes()
    {
        return $this->fields['dislikes'];
    }

    /**
     * @param int $value
     */
    public function setNotSure($value)
    {
        $this->fields['not_sure'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getNotSure()
    {
        return $this->fields['not_sure'];
    }

    /**
     * @param int $value
     */
    public function setSigned($value)
    {
        $this->fields['signed'] = (int)$value;
    }
    /**
     * @return int
     */
    public function getSigned()
    {
        return $this->fields['signed'];
    }
}