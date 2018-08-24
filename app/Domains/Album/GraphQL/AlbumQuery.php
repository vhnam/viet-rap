<?php

namespace App\Domains\Album\GraphQL;

use GraphQL;
use App\Domains\Album\Album;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

class AlbumQuery extends Query
{
    protected $attributes = [
        'name' => 'albums'
    ];

    public function type() {
        return Type::listOf(GraphQL::type('Album'));
    }

    public function args() {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'name' => ['name' => 'name', 'type' => Type::string()]
        ];
    }

    public function resolve($root, $args) {
        $albums = new Album();

        if (isset($args['id'])) {
            $albums = $albums->where('id', $args['id']);
        }

        if (isset($args['name'])) {
            $albums = $albums->where('name', 'like', "%{$args['name']}%");
        }

        if (isset($args['artist'])) {
            $albums = $albums->artist;
        }

        return $albums->get();
    }
}
