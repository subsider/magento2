<?php

namespace Simplified\Database\Api\Data;

interface AffiliateMemberInterface
{
    const ID = 'id';
    const NAME = 'name';
    const STATUS = 'status';
    const ADDRESS = 'address';
    const PHONE_NUMBER = 'phone_number';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getName();

    /**
     * @return bool
     */
    public function getStatus();

    /**
     * @return string
     */
    public function getAddress();

    /**
     * @return string
     */
    public function getPhoneNumber();

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getUpdatedAt();

    /**
     * @param string
     * @return AffiliateMemberInterface
     */
    public function setName(string $name);

    /**
     * @param bool
     * @return AffiliateMemberInterface
     */
    public function setStatus(bool $status);

    /**
     * @param string
     * @return AffiliateMemberInterface
     */
    public function setAddress(string $address);

    /**
     * @param string
     * @return AffiliateMemberInterface
     */
    public function setPhoneNumber(string $phoneNumber);

    /**
     * @param string
     * @return AffiliateMemberInterface
     */
    public function setCreatedAt(string $createdAt);

    /**
     * @param string
     * @return AffiliateMemberInterface
     */
    public function setUpdatedAt(string $updatedAt);
}