<?php

namespace Plugi\Extensions\Form;

use Plugi\Repositories\BaseRepository;

class EntriesRepository extends BaseRepository {
    /**
     * The uploads database table.
     *
     * @var string
     */
    protected $table = 'ext__form_entries';

    public function create(array $data)
    {
        return parent::create($data); // TODO: Change the autogenerated stub
    }

}
