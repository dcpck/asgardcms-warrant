<?php namespace Modules\Warrant\Repositories\Cache;

use Modules\Warrant\Repositories\TypesRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTypesDecorator extends BaseCacheDecorator implements TypesRepository
{
    public function __construct(TypesRepository $types)
    {
        parent::__construct();
        $this->entityName = 'warrant.types';
        $this->repository = $types;
    }
}
