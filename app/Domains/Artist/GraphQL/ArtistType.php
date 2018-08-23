<?php

namespace App\Domains\Artist\GraphQL;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class ArtistType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Artist',
        'description' => 'An artist'
    ];

    public function fields() {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int())
            ],
            'name' => [
                'type' => Type::nonNull(Type::string())
            ],
            'profile' => [
                'type' => Type::nonNull(Type::string())
            ],
            'alias' => [
                'type' => Type::nonNull(Type::string())
            ],
            'coverImage' => [
                'type' => Type::string()
            ],
            'artistImage' => [
                'type' => Type::string()
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
