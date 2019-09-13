<?php


class base
{


    function __construct()
    {
    }

    protected function render(string $page)
    {
        if ($this->exists($page) && $this->not_empty($page)) {
            require_once $this->create_path($page);
        }

    }

    private function exists(string $file): bool
    {
        $path="view/".$file.".php";
        return file_exists($path);
    }

    private function not_empty(string $file_name): bool
    {
        return $file_name != "";
    }

    private function create_path($file_name): string
    {
        return "view/" . $file_name . ".php";
    }
}