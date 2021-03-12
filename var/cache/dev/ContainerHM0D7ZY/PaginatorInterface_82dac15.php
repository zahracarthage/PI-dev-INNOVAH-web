<?php

namespace ContainerHM0D7ZY;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9c21e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd4618 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties007f7 = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        if ($this->valueHolder9c21e === $returnValue = $this->valueHolder9c21e->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializerd4618 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9c21e) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9c21e = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__get', ['name' => $name], $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        if (isset(self::$publicProperties007f7[$name])) {
            return $this->valueHolder9c21e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c21e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9c21e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c21e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9c21e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__isset', array('name' => $name), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c21e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9c21e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__unset', array('name' => $name), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9c21e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9c21e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__clone', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        $this->valueHolder9c21e = clone $this->valueHolder9c21e;
    }

    public function __sleep()
    {
        $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, '__sleep', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;

        return array('valueHolder9c21e');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd4618 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd4618;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd4618 && ($this->initializerd4618->__invoke($valueHolder9c21e, $this, 'initializeProxy', array(), $this->initializerd4618) || 1) && $this->valueHolder9c21e = $valueHolder9c21e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9c21e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9c21e;
    }


}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
