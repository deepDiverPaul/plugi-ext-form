<?php

namespace Plugi\Extensions\Form\Finishers;
use Plugi\Extensions\Form\DefinitionsRepository;

class DefaultFinisher {
    public $formId;
    public $form;
    public $data;
    public function __construct()
    {
        $formRepository = new DefinitionsRepository();
        $this->formId = $_GET['id'] ?? 0;
        $this->form = $formRepository->findWithId($this->formId);
        $this->data = file_get_contents('php://input');
    }
    public function execute (): bool {
        return true;
    }
    public function getFormFields (): array {
        return json_decode($this->form['fields'], true);
    }
    public function getEntryFields (): array {
        return json_decode($this->data, true)['fields'];
    }
    public function getFormName (): string {
        return $this->form['name'];
    }
}
