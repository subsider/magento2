<?php

namespace Simplified\Database\Model;

use Magento\Framework\Model\AbstractModel;
use Simplified\Database\Api\Data\AffiliateMemberInterface;
use Simplified\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;

class AffiliateMember extends AbstractModel implements AffiliateMemberInterface
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);
    }

    public function getId()
    {
        return $this->getData(AffiliateMemberInterface::ID);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(AffiliateMemberInterface::NAME);
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->getData(AffiliateMemberInterface::STATUS);
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->getData(AffiliateMemberInterface::ADDRESS);
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->getData(AffiliateMemberInterface::PHONE_NUMBER);
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getData(AffiliateMemberInterface::CREATED_AT);
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->getData(AffiliateMemberInterface::UPDATED_AT);
    }

    /**
     * @param string $name
     * @return AffiliateMemberInterface
     */
    public function setName(string $name)
    {
        return $this->setData(AffiliateMemberInterface::NAME, $name);
    }

    /**
     * @param bool $status
     * @return AffiliateMemberInterface
     */
    public function setStatus(bool $status)
    {
        return $this->setData(AffiliateMemberInterface::STATUS, $status);
    }

    /**
     * @param string $address
     * @return AffiliateMemberInterface
     */
    public function setAddress(string $address)
    {
        return $this->setData(AffiliateMemberInterface::ADDRESS, $address);
    }

    /**
     * @param string $phoneNumber
     * @return AffiliateMemberInterface
     */
    public function setPhoneNumber(string $phoneNumber)
    {
        return $this->setData(AffiliateMemberInterface::PHONE_NUMBER, $phoneNumber);
    }

    /**
     * @param string $createdAt
     * @return AffiliateMemberInterface
     */
    public function setCreatedAt(string $createdAt)
    {
        return $this->setData(AffiliateMemberInterface::CREATED_AT, $createdAt);
    }

    /**
     * @param string $updatedAt
     * @return AffiliateMemberInterface
     */
    public function setUpdatedAt(string $updatedAt)
    {
        return $this->setData(AffiliateMemberInterface::UPDATED_AT, $updatedAt);
    }
}