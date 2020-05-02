<?php


namespace Mimic\ZAdmin\Actions;


interface ActionInterface
{
    public function getTitle();

    public function getIcon();

    public function getPolicy();

    public function getAttribute();

    public function getRoute($key);

    public function getDefaultRoute();

    public function getDataType();
}