<?php
interface MessageService {
    public function deliver(string $text): string;
}

class EmailService implements MessageService {
    public function deliver(string $text): string {
        return "Sending Email with: " . $text;
    }
}

class SmsService implements MessageService {
    public function deliver(string $text): string {
        return "Sending SMS with: " . $text;
    }
}