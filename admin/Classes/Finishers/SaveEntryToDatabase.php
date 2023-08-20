<?php

namespace Plugi\Extensions\Form\Finishers;
class SaveEntryToDatabase extends DefaultFinisher
{
    public function execute(): bool
    {
        $entriesRepository = new \Plugi\Extensions\Form\EntriesRepository();
        $entriesRepository->create([
            'formId' => $this->formId,
            'data' => $this->data,
        ]);
        return true;
    }
}
