<?php
/**
 * Created by PhpStorm.
 * User: at15
 * Date: 2016/5/5
 * Time: 21:21
 */
declare(strict_types = 1);

namespace Dy\Cache;


final class Name
{
    /**
     * @var Name
     */
    protected $parent;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var int
     */
    protected $ttl;

    public function __construct(string $value = null, Name $parent = null)
    {
        $this->value = $value;
        $this->parent = $parent;
        $this->ttl = 100;
    }

    public function isEmpty():bool
    {
        return empty($this->value);
    }

    public function hasParent():bool
    {
        return !is_null($this->parent);
    }

    public function getParent(): Name
    {
        return $this->parent;
    }

    public function getValue():string
    {
        return $this->value;
    }

    public function setValue(string $v): Name
    {
        $this->value = $v;
        return $this;
    }

    public function setTtl(int $ttl): Name
    {
        $this->ttl = $ttl;
        return $this;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }
}
