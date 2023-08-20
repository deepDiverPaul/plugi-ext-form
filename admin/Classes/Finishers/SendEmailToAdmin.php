<?php

namespace Plugi\Extensions\Form\Finishers;
use Plugi\Extensions;

class SendEmailToAdmin extends DefaultFinisher
{
    public function execute(): bool
    {
        $to = Extensions::getSettings('form')['email']['value'];
        $subject = 'Formulareinsendung: '.$this->getFormName();
        $message = $this->getNiceFields();
        return mail(
            $to,
            $subject,
            $message,
            $additional_headers = [],
            $additional_params = ""
        );
    }
    private function getNiceFields(): string {
        $text = '';
        foreach ($this->getFormFields() as $field) {
            $text .= $field['label'] . ': ' . $this->getEntryFields()[$field['name']] . '\n';
        }
        return $text;
    }
}
