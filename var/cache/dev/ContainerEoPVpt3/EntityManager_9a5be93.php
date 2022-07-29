<?php

namespace ContainerEoPVpt3;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9f54d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2ea1b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5473b = [
        
    ];

    public function getConnection()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getConnection', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getMetadataFactory', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getExpressionBuilder', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'beginTransaction', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getCache', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'transactional', array('func' => $func), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'commit', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->commit();
    }

    public function rollback()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'rollback', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getClassMetadata', array('className' => $className), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'createQuery', array('dql' => $dql), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'createNamedQuery', array('name' => $name), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'createQueryBuilder', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'flush', array('entity' => $entity), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'clear', array('entityName' => $entityName), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->clear($entityName);
    }

    public function close()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'close', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->close();
    }

    public function persist($entity)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'persist', array('entity' => $entity), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'remove', array('entity' => $entity), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'refresh', array('entity' => $entity), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'detach', array('entity' => $entity), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'merge', array('entity' => $entity), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'contains', array('entity' => $entity), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getEventManager', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getConfiguration', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'isOpen', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getUnitOfWork', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getProxyFactory', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'initializeObject', array('obj' => $obj), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'getFilters', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'isFiltersStateClean', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'hasFilters', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return $this->valueHolder9f54d->hasFilters();
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

        $instance->initializer2ea1b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9f54d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9f54d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9f54d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, '__get', ['name' => $name], $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        if (isset(self::$publicProperties5473b[$name])) {
            return $this->valueHolder9f54d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f54d;

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

        $targetObject = $this->valueHolder9f54d;
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
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f54d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f54d;
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
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, '__isset', array('name' => $name), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f54d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9f54d;
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
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, '__unset', array('name' => $name), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f54d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9f54d;
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
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, '__clone', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        $this->valueHolder9f54d = clone $this->valueHolder9f54d;
    }

    public function __sleep()
    {
        $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, '__sleep', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;

        return array('valueHolder9f54d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2ea1b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2ea1b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2ea1b && ($this->initializer2ea1b->__invoke($valueHolder9f54d, $this, 'initializeProxy', array(), $this->initializer2ea1b) || 1) && $this->valueHolder9f54d = $valueHolder9f54d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f54d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f54d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
