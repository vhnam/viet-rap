<?php

namespace App\Domains\Song\GraphQL;

use GraphQL;
use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class SongType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Song'
    ];

    public function fields() {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int())
            ],
            'name' => [
                'type' => Type::nonNull(Type::string())
            ],
            'views' => [
                'type' => Type::int()
            ],
            'lyrics' => [
                'type' => Type::string()
            ],
            'artists' => [
                'type' => Type::listOf(GraphQL::type('Artist')),
            ],
            'created_at' => [
                'type' => Type::string()
            ],
            'updated_at' => [
                'type' => Type::string()
            ]
        ];
    }

    protected function resolveCreatedAtField($root, $args) {
        return $root->created_at->format('Y-m-d H:i:s');
    }

    protected function resolveUpdatedAtField($root, $args) {
        return $root->updated_at->format('Y-m-d H:i:s');
    }
}
