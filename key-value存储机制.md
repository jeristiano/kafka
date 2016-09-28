### key-value存储机制


----------
### kvstore 简介
在ecos中提供了kvstore存储的方式来对数据量大的情况下进行优化。kvstore 是以 key->value 数据结构进行存储.

它是对Memcache,Memcached,flare 等进行封装。在数据量大的情况下,可以把不常变动的一些数据存储在kvstore中，

kvstore提供两种存储方式，`非持久存储`和`持久存储`
- 非持久存储则是以Memcache,Memcached 方式
- 而持久存储则是以flare,filesystem,等方式。

kvstore 结构图如下:
![Alt text](./1.gif)


----------
### kvstore memcache 在ECOS中的配置
kvstroe默认的存储是`filesystem`，如果要改成为memcache 或者memcached

则在`config.php` 文件中有要开启下面的配置(单个memcache服务)
```plain
# kvstore后台存储类
# define('KVSTORE_STORAGE', 'base_kvstore_filesystem');
# define('KVSTORE_STORAGE', 'base_kvstore_mysql');
define('KVSTORE_STORAGE', 'base_kvstore_memcache');
# define('KVSTORE_STORAGE', 'base_kvstore_dba');
# define('KVSTORE_STORAGE', 'base_kvstore_tokyotyrant');

# kvstore memcache服务器配置
# socket  'unix:///tmp/memcached.sock'
# server  '127.0.0.1:11211'
# multi   'unix:///tmp/memcached.sock,127.0.0.1:11211,127.0.0.1:11212'
define('KVSTORE_MEMCACHE_CONFIG', '127.0.0.1:11211'); //前面是ip,后面是端口

```
如果有多个Memcache服务
```plain
# kvstroe后台存储类
# define('KVSTORE_STORAGE', 'base_kvstore_filesystem');
# define('KVSTORE_STORAGE', 'base_kvstore_mysql');
define('KVSTORE_STORAGE', 'base_kvstore_memcache');
# define('KVSTORE_STORAGE', 'base_kvstore_dba');
# define('KVSTORE_STORAGE', 'base_kvstore_tokyotyrant');

# kvstroe memcache服务器配置
# socket  'unix:///tmp/memcached.sock'
# server  '127.0.0.1:11211'
# multi   'unix:///tmp/memcached.sock,127.0.0.1:11211,127.0.0.1:11212'
define('KVSTORE_MEMCACHE_CONFIG', 'unix:///tmp/memcached.sock,127.0.0.1:11211,127.0.0.1:11212'); //前面是ip,后面是端口
```
#### Memcache,Memcached 介绍
**Memcache是什么？**

	Memcache是一个自由和开放源代码、高性能、分配的内存对象缓存系统。用于加速动态web应用程序，减轻数据库负载。
	它可以应对任意多个连接，使用非阻塞的网络IO。由于它的工作机制是在内存中开辟一块空间，然后建立一个HashTable，Memcached自己管理这 些HashTable。
	Memcached是简单而强大的。它简单的设计促进迅速部署，易于发展所面临的问题，解决了很多大型数据缓存。它的API可供最流行的语言。
	Memcache官方网站：http://memcached.org/
>注：如果要对Memcache进行更多的了解可以访问其官方网站(补充Memcache的部署？)

**Memcached是什么?**

	Memcached是基于libmemcached库开发的，其数据存储在内置的内存空间中，Memcached相互之间不会通信。
	支持Memcache协议。其用法和Memcache差不多
	
**Memcache 和 memcached 区别**
Memcache 和 memcached对比参考：[ http://code.google.com/p/memcached/wiki/PHPClientComparison]

>**注意：**
>Memcache 和Memcached 都是以内存的方式存储数据,所以在重启操作系统会导致全部数据消失。
它们都是为缓存而设计的服务器，因此并没有过多考虑数据的永久性问题。
**Memcached 在性能上会比 Memcache要高。**所以在一般情况下选择memchahed来作为 kvstore的非持久存储服务器。
另外需要注意的是Memcached目前还不支持**长连接。**

#### flare,filesystem 简单介绍

> kvstore的持久存储是以flare和filesystem来支撑的

**什么是Flare?**
```plain
Flare是日本第二大SNS网站green.jp开发的。Flare的主要特点就是支持scale能力，flare他只支持memcached协议，
可以动态添加数据库服务节点，删除服务器节点，也支持failover。如果你的使用场景必须要让TC可以scale，那么可以考虑flare。
```
**那什么又是filesystem？**
```plain
filesystem 是ecos中自带的一个以key->value方式存储. 它是以文件的方式把数据以文件的方式存放在 ./data/kvstore/下面
```

> **注意：**
> filesystem 可以用作调试 和数据初始化存储。也可以用 filesystem 做简单的应用.
>kvstore的持久存储 在一般情况下用的是flare 或者是用其他的扩展。这要根据项目的实际情况选择.


----------
### kvstore使用

#### kvstore 选择
>在kvstore中要么选择非持久存储，要么选择持久存储.非持久存储可以用到memcache,Memcached,而其他都支持持久存储存储。

#### kvstore 一般的使用流程
`调用kvstore`
	
	首先要判断那些数据不常变动，又要经常使用。
	那么可以设置那些数据可以放在kvstore中，这样在调用这些数据的时候就可以先在kvstore中去查找所需要的数据，如果没找到再到mysql中去找。
	最后在mysql中找到的数据再次存储到kvstore中。
	另外也可以根据实际情况做操作。
#### kvstore 过期
>在kvstore中不会自动查找数据是否过期，所以在更新数据的时候要根据时间判断是否过期在对kvstore中的数据做更新处理

- kvstore 的方法接口
- config_persistent

`设置是否持久化`

	static function config_persistent($flag)

**instance**

实例化一个kvstore

	static function instance($prefix)
参数为前缀

**increment**
自增

	public function increment($key,$offset=1);
根据\$key值自动增加$offset,默认加1

**decrement**
自减

	public function decrement($key,$offset=1)
根据\$key值自动减少$offset,默认减1

**fetch**
获取key的内容

	public function fetch($key,&$value,$timeout_version=null)
根据key值得到$value,返回bool值 $__fetch_count属性记录调用此方法的次数

**store**

设置key的内容

	public function store($key,$value,$ttl=0)
设置key所对应的value值 $__store_count属性记录调用此方法的次数
如果以前对应的key设置过则更新此对应key的value数据

**delete**
删除key的内容

	public function delete($key,$ttl=1)
根据\$key值,删除其对应的value,但是这不是物理删除，只是改变$ttl值，进行虚拟删除

**persistent**
数据持久化

	public function persistent($key,$value,$ttl=0)
根据\$key值设置对应的$value,其数据保存在sdb_base_kvstore中，持久化保存

**recovery**
恢复数据

	public function recovery($record)
根据参数\$record恢复数据，其中$record数组为array('key'=>,'value'=>,'deletlin'=>,'ttl'=>)

**delete_expire_data**
删除过期数据

	static public function delete_expire_data()
根据当前时间,在sdb_base_kvstore中查询过期数据，再对其存储进行删除
>**注意：** 
>1. 只有Memcached支持increment,decrement.
> 2. mysql 不支持方法recovery
