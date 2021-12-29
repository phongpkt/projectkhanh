<?php

namespace ContainerVHXELsC;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd0bab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer46bbf = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5db1d = [
        
    ];

    public function getConnection()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getConnection', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getMetadataFactory', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getExpressionBuilder', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'beginTransaction', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getCache', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getCache();
    }

    public function transactional($func)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'transactional', array('func' => $func), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'wrapInTransaction', array('func' => $func), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'commit', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->commit();
    }

    public function rollback()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'rollback', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getClassMetadata', array('className' => $className), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'createQuery', array('dql' => $dql), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'createNamedQuery', array('name' => $name), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'createQueryBuilder', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'flush', array('entity' => $entity), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'clear', array('entityName' => $entityName), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->clear($entityName);
    }

    public function close()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'close', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->close();
    }

    public function persist($entity)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'persist', array('entity' => $entity), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'remove', array('entity' => $entity), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'refresh', array('entity' => $entity), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'detach', array('entity' => $entity), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'merge', array('entity' => $entity), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getRepository', array('entityName' => $entityName), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'contains', array('entity' => $entity), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getEventManager', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getConfiguration', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'isOpen', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getUnitOfWork', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getProxyFactory', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'initializeObject', array('obj' => $obj), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'getFilters', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'isFiltersStateClean', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'hasFilters', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return $this->valueHolderd0bab->hasFilters();
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

        $instance->initializer46bbf = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd0bab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd0bab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd0bab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, '__get', ['name' => $name], $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        if (isset(self::$publicProperties5db1d[$name])) {
            return $this->valueHolderd0bab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0bab;

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

        $targetObject = $this->valueHolderd0bab;
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
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0bab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd0bab;
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
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, '__isset', array('name' => $name), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0bab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd0bab;
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
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, '__unset', array('name' => $name), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd0bab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd0bab;
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
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, '__clone', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        $this->valueHolderd0bab = clone $this->valueHolderd0bab;
    }

    public function __sleep()
    {
        $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, '__sleep', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;

        return array('valueHolderd0bab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer46bbf = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer46bbf;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer46bbf && ($this->initializer46bbf->__invoke($valueHolderd0bab, $this, 'initializeProxy', array(), $this->initializer46bbf) || 1) && $this->valueHolderd0bab = $valueHolderd0bab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd0bab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd0bab;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
