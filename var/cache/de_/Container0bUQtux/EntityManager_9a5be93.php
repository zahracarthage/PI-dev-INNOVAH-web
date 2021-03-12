<?php

namespace Container0bUQtux;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getConnection', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getMetadataFactory', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getExpressionBuilder', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'beginTransaction', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getCache', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getCache();
    }

    public function transactional($func)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'transactional', array('func' => $func), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->transactional($func);
    }

    public function commit()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'commit', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->commit();
    }

    public function rollback()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'rollback', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getClassMetadata', array('className' => $className), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'createQuery', array('dql' => $dql), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'createNamedQuery', array('name' => $name), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'createQueryBuilder', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'flush', array('entity' => $entity), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'clear', array('entityName' => $entityName), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->clear($entityName);
    }

    public function close()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'close', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->close();
    }

    public function persist($entity)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'persist', array('entity' => $entity), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'remove', array('entity' => $entity), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'refresh', array('entity' => $entity), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'detach', array('entity' => $entity), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'merge', array('entity' => $entity), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getRepository', array('entityName' => $entityName), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'contains', array('entity' => $entity), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getEventManager', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getConfiguration', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'isOpen', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getUnitOfWork', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getProxyFactory', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'initializeObject', array('obj' => $obj), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'getFilters', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'isFiltersStateClean', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, 'hasFilters', array(), $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        return $this->valueHolder54300->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer41451 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder54300) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder54300 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder54300->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer41451 && ($this->initializer41451->__invoke($valueHolder54300, $this, '__get', ['name' => $name], $this->initializer41451) || 1) && $this->valueHolder54300 = $valueHolder54300;

        if (isset(self::$publicPropertiesbeddf[$name])) {
            return $this->valueHolder54300->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
