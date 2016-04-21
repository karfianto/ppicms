<?php namespace Modules\Stuff\Repositories\Cache;

use Modules\Stuff\Repositories\CategoryRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCategoryDecorator extends BaseCacheDecorator implements CategoryRepository
{
    public function __construct(CategoryRepository $category)
    {
        parent::__construct();
        $this->entityName = 'stuff.categories';
        $this->repository = $category;
    }
}
