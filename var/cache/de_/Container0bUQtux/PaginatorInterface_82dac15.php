<?php

namespace Container0bUQtux;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder54300 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer41451 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbeddf = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        if ($this->valueHolder54300 === $returnValue = $this->valueHolder54300->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer41451 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder54300) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder54300 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, '__get', ['name' => $name], $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        if (isset(self::$publicPropertiesbeddf[$name])) {
            return $this->valueHolder54300->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54300;

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

        $targetObject = $this->valueHolder54300;
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
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54300;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder54300;
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
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, '__isset', array('name' => $name), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54300;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder54300;
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
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, '__unset', array('name' => $name), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54300;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder54300;
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
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, '__clone', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        $this->valueHolder54300 = clone $this->valueHolder54300;
    }

    public function __sleep()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, '__sleep', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return array('valueHolder54300');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer41451 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer41451;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'initializeProxy', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54300;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54300;
    }


}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
