<?php

namespace Deliverea\Common;

trait ToArrayTrait
{
    public function toArray()
    {
        $data = [];

        foreach (get_object_vars($this) as $key => $value) {
            if (is_object($value) && method_exists($value, 'toArray')) {
                $data[$key] = $value->toArray();
            } else if (is_array($value)) {
                foreach ($value as $key2 => $item) {
                    if (is_object($item) && method_exists($item, 'toArray')) {
                        $data[$key][$key2] = $item->toArray();
                    } else{
                        $data[$key][$key2] = $item;
                    }
                }
            } else {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}