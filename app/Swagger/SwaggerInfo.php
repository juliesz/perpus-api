<?php

namespace App\Swagger;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    title: 'Perpustakaan API',
    description: 'REST API Laravel 12 untuk login (Sanctum) dan CRUD data buku.',
    contact: new OA\Contact(
        name: 'Admin Perpustakaan',
        email: 'admin@example.com'
    )
)]
#[OA\Server(
    url: L5_SWAGGER_CONST_HOST,
    description: 'Server API'
)]
#[OA\SecurityScheme(
    securityScheme: 'sanctum',
    type: 'http',
    scheme: 'bearer',
    bearerFormat: 'Sanctum Token',
    description: 'Tempel token dari endpoint POST /api/login.'
)]
#[OA\Tag(name: 'Auth', description: 'Registrasi, login, profil, dan logout')]
#[OA\Tag(name: 'Books', description: 'CRUD data buku (wajib login)')]
#[OA\Schema(
    schema: 'ValidationError',
    properties: [
        new OA\Property(
            property: 'message',
            type: 'string',
            example: 'The title field is required.'
        ),
        new OA\Property(
            property: 'errors',
            type: 'object',
            example: ['title' => ['The title field is required.']]
        ),
    ]
)]
#[OA\Schema(
    schema: 'MessageResponse',
    properties: [
        new OA\Property(
            property: 'message',
            type: 'string',
            example: 'Unauthenticated.'
        ),
    ]
)]
#[OA\Schema(
    schema: 'User',
    properties: [
        new OA\Property(property: 'id', type: 'integer', example: 1),
        new OA\Property(property: 'name', type: 'string', example: 'Budi'),
        new OA\Property(property: 'email', type: 'string', format: 'email', example: 'budi@example.com'),
        new OA\Property(property: 'created_at', type: 'string', format: 'date-time', nullable: true),
        new OA\Property(property: 'updated_at', type: 'string', format: 'date-time', nullable: true),
    ]
)]
class SwaggerInfo
{
}
