<?php namespace Modules\Stuff\Repositories\Cache;

use Modules\Stuff\Repositories\StuffRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheStuffDecorator extends BaseCacheDecorator implements StuffRepository
{
    public function __construct(StuffRepository $stuff)
    {
        parent::__construct();
        $this->entityName = 'stuff.stuffs';
        $this->repository = $stuff;
    }
}
