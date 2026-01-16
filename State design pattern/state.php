<?php

interface State {
    public function handle(): string;
}

class Context {
    private State $state;
    public function __construct(State $state) { $this->state = $state; }
    public function setState(State $state): void { $this->state = $state; }
    public function request(): string { return $this->state->handle(); }
}

class On implements State {
    public function handle(): string { return "Light is ON"; }
}

class Off implements State {
    public function handle(): string { return "Light is OFF"; }
}

// Usage
$light = new Context(new Off());
echo $light->request() . "\n"; // "Light is OFF"

$light->setState(new On());
echo $light->request() . "\n"; // "Light is ON"