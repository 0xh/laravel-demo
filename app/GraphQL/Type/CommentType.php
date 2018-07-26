<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class CommentType extends BaseType
{
    protected $attributes = [
        'name' => 'Comment',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The id of the comment'
            ],
            'content' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The content of the comment'
            ]
        ];
    }
}