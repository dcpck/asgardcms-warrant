<?php namespace Modules\Warrant\Repositories\Cache;

use Modules\Warrant\Repositories\ActsRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheActsDecorator extends BaseCacheDecorator implements ActsRepository
{
    public function __construct(ActsRepository $acts)
    {
        parent::__construct();
        $this->entityName = 'warrant.acts';
        $this->repository = $acts;
    }
}
