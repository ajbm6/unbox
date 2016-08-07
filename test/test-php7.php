<?php

use mindplay\unbox\Container;

test(
    'can use return type-hints under PHP 7',
    function () {
        $c = new Container();

        $c->register(function ($path) : CacheProvider {
            return new FileCache($path);
        }, [$c->ref("cache.path")]);

        $c->set("cache.path", "/foo");

        eq($c->get(CacheProvider::class)->path, "/foo", "can auto-register using return type-hint");
    }
);
