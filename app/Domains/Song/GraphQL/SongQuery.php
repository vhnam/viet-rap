<?php

namespace App\Domains\Song\GraphQL;

use GraphQL;
use App\Domains\Song\Song;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;

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

    public function resolve($root, $args, $context, ResolveInfo $info) {
        $songs = Song::query();

        if (isset($args['id'])) {
            $songs = $songs->where('id', $args['id']);
        }

        if (isset($args['name'])) {
            $songs = $songs->where('name', 'like', "%{$args['name']}%");
        }

        return $songs->get();
    }
}
