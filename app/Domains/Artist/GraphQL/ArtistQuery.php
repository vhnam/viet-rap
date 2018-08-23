<?php

namespace App\Domains\Artist\GraphQL;

use GraphQL;
use App\Domains\Artist\Artist;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;

class ArtistQuery extends Query
{
    protected $attributes = [
        'name' => 'artists'
    ];

    public function type() {
        return Type::listOf(GraphQL::type('Artist'));
    }

    public function args() {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'name' => ['name' => 'name', 'type' => Type::string()],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info) {
        $artists = new Artist();

        if (isset($args['id'])) {
            $artists = $artists->where('id', $args['id']);
        }

        if (isset($args['name'])) {
            $artists = $artists->where('name', 'like', "%{$args['name']}%");
        }

        if (isset($args['albums'])) {
            $artists = $artists->where('id', $args['id']);
        }

        return $artists->get();
    }
}
