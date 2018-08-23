<?php

namespace App\Domains\Song\GraphQL;

use GraphQL;
use App\Domains\Song\Song;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;

class SongQuery extends Query
{
    protected $attributes = [
        'name' => 'songs'
    ];

    public function type() {
        return Type::listOf(GraphQL::type('Song'));
    }

    public function args() {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'name' => ['name' => 'name', 'type' => Type::string()]
        ];
    }

    public function resolve($root, $args) {
        $artists = new Song();

        if (isset($args['id'])) {
            $artists = $artists->where('id', $args['id']);
        }

        if (isset($args['name'])) {
            $artists = $artists->where('name', 'like', "%{$args['name']}%");
        }

        return $artists->get();
    }
}
