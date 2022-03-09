<?php

namespace Container4kzNVlv;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera01ed = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0e237 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf9f86 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getConnection', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getMetadataFactory', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getExpressionBuilder', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'beginTransaction', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getCache', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'transactional', array('func' => $func), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'commit', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->commit();
    }

    public function rollback()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'rollback', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getClassMetadata', array('className' => $className), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'createQuery', array('dql' => $dql), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'createNamedQuery', array('name' => $name), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'createQueryBuilder', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'flush', array('entity' => $entity), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'clear', array('entityName' => $entityName), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->clear($entityName);
    }

    public function close()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'close', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->close();
    }

    public function persist($entity)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'persist', array('entity' => $entity), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'remove', array('entity' => $entity), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'refresh', array('entity' => $entity), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'detach', array('entity' => $entity), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'merge', array('entity' => $entity), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'contains', array('entity' => $entity), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getEventManager', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getConfiguration', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'isOpen', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getUnitOfWork', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getProxyFactory', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'initializeObject', array('obj' => $obj), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'getFilters', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'isFiltersStateClean', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'hasFilters', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return $this->valueHoldera01ed->hasFilters();
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

        $instance->initializer0e237 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera01ed) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera01ed = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera01ed->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, '__get', ['name' => $name], $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        if (isset(self::$publicPropertiesf9f86[$name])) {
            return $this->valueHoldera01ed->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera01ed;

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

        $targetObject = $this->valueHoldera01ed;
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
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera01ed;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera01ed;
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
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, '__isset', array('name' => $name), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera01ed;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera01ed;
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
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, '__unset', array('name' => $name), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera01ed;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera01ed;
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
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, '__clone', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        $this->valueHoldera01ed = clone $this->valueHoldera01ed;
    }

    public function __sleep()
    {
        $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, '__sleep', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;

        return array('valueHoldera01ed');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0e237 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0e237;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0e237 && ($this->initializer0e237->__invoke($valueHoldera01ed, $this, 'initializeProxy', array(), $this->initializer0e237) || 1) && $this->valueHoldera01ed = $valueHoldera01ed;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera01ed;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera01ed;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
