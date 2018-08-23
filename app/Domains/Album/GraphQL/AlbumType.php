<?php

namespace App\Domains\Album\GraphQL;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class AlbumType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Album',
        'description' => 'An album'
    ];

    public function fields() {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int())
            ],
            'name' => [
                'type' => Type::nonNull(Type::string())
            ],
            'coverImage' => [
                'type' => Type::nonNull(Type::string())
            ],
            'artist' => [
                'type' => Type::int()
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
