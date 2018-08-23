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
            'name' => ['name' => 'name', 'type' => Type::string()],
            'artist' => ['name' => 'id', 'type' => Type::int()],
        ];
    }

    public function resolve($root, $args) {
        $artists = new Album();

        if (isset($args['id'])) {
            $artists = $artists->where('id', $args['id']);
        }

        if (isset($args['name'])) {
            $artists = $artists->where('name', 'like', "%{$args['name']}%");
        }

        if (isset($args['artist'])) {
            $artists = $artists->where('artist', $args['artist']);
        }

        return $artists->get();
    }
}
